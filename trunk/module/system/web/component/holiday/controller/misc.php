<?PHP
$v_saved = false;
$v_param = $this->get_param();
$v_year = isset($v_param[0]) && preg_match('/^[0-9]{4,4}$/', $v_param[0]) ? $v_param[0] : date('Y');
$v_month = isset($v_param[1]) && preg_match('/^[0-9]{2,2}$/', $v_param[1]) ? $v_param[1] : '';
$v_day = isset($v_param[2]) && preg_match('/^[0-9]{2,2}$/', $v_param[2]) ? $v_param[2] : '';

$v_error_lang = "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	foreach($_POST as $v_key => $v_value){
		if(is_array($_POST[$v_key])){
			foreach($_POST[$v_key] as $v_key_loop => $v_value_loop){
				$_POST[$v_key][$v_key_loop] = trim($v_value_loop);
			}
		}else{
			$_POST[$v_key] = trim($v_value);
		}
	}
	
	$v_lang_info = \E::get('obj_system_module')->get_supported_lang();
	foreach($v_lang_info as $v_lang){
		for($i=0; isset($_POST['desc_'.$v_lang]) && $i < sizeof($_POST['desc_'.$v_lang]); ++$i){
			if(!\I::check("COMPULSORY", $_POST['desc_'.$v_lang][$i], '', 'VAR')){
				\I::set_error_field('desc_'.$v_lang.'_'.$i, \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));
				$v_err_lang[$v_lang] = true;
			}
		}
	}
	
	foreach($v_lang_info as $v_lang){
		if(isset($v_err_lang[$v_lang])){
			$v_error_lang = $v_lang;
			break;
		}
	}
	
	if(!\I::is_error()){
		for($i=0; $i < count($_POST['hol_id']) ; ++$i){
			if(trim($_POST['hol_id'][$i]) != '' ){
				//========Update=========
				$v_str_date = $v_year.'-'.$_POST['month'][$i].'-'.$_POST['day'][$i];
				$v_update['hol_id'] = trim($_POST['hol_id'][$i]);
				$v_update['hol_key'] = $v_year.'_MISC';
				$v_update['hol_date'] = $v_str_date;
				foreach($v_lang_info as $v_lang){
					$v_update['lang'][$v_lang] = $_POST['desc_'.$v_lang][$i];
				}
				\E::get('obj_system_module')->holiday_misc_edit($v_update);
			}else{
				//=========Add===========
				$v_str_date = $v_year.'-'.$_POST['month'][$i].'-'.$_POST['day'][$i];
				$v_update['hol_key'] = $v_year.'_MISC';
				$v_update['hol_date'] = $v_str_date;
				foreach($v_lang_info as $v_lang){
					$v_update['lang'][$v_lang] = $_POST['desc_'.$v_lang][$i];
				}
				\E::get('obj_system_module')->holiday_misc_add($v_update);
			}
		}
		
		if(trim($_POST['del_hol_id']) != ''){
			//=========Delete==========
			$v_del['hol_id@IN'] = explode(',',$_POST['del_hol_id']);
			
			\E::get('obj_system_module')->holiday_misc_del($v_del);
		}
		
		$v_saved = true;
	}
}

if($v_saved){
	$v_script = <<<script
				<script language="javascript">
					window.parent.location = window.parent.location;
				</script>
script;
	\V::append_data( 'body', $v_script );
}else{
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		for($i=0; $i < count($_POST['hol_id']) ; ++$i){
			$v_holiday_lang_info = null;
			foreach($v_lang_info as $v_lang){
				$v_holiday_lang_info[$v_lang]['kwd_value'] = $_POST['desc_'.$v_lang][$i];
			}
			
			$v_str_date = $v_year.'-'.$_POST['month'][$i].'-'.$_POST['day'][$i];
			$v_temp[$v_str_date] = array(
										'hol_id' => $_POST['hol_id'][$i],
										// 'hol_key' => $v_row['hol_key'],
										'hol_date' => $v_str_date,
										'lang' => $v_holiday_lang_info
										);
			$v_holiday_info = $v_temp;
		}
		
		$v_post['del_hol_id'] = $_POST['del_hol_id'];
	}else{
		unset($v_cond);
		if($v_month != '' && $v_day != ''){
			$v_cond['hol_date'] = $v_year.'-'.$v_month.'-'.$v_day;
		}else{
			$v_cond['year'] = $v_year;
		}
		
		$v_cond['hol_key_like'] = $v_year.'_MISC';
		$v_holiday_info = \E::get('obj_system_module')->holiday_list($v_cond);

		unset($v_cond);
		foreach($v_holiday_info as $v_row){
			$v_cond['kwd_code@IN'][] = $v_row['hol_id'];
		}
		$v_holiday_lang_info = \E::get('obj_system_module')->holiday_lang_get($v_cond);

		foreach($v_holiday_info as $v_row){
			$v_num = 0;
			while(isset($v_temp[$v_row['hol_date'].$v_num])){
				++$v_num;
			}
			$v_temp[$v_row['hol_date'].$v_num] = array(
												'hol_id' => $v_row['hol_id'],
												'hol_key' => $v_row['hol_key'],
												'hol_date' => $v_row['hol_date'],
												'lang' => $v_holiday_lang_info[$v_row['hol_id']]
												);
		}
		ksort($v_temp);
		$v_holiday_info = $v_temp;
	}
	$v_var = array(
				'year' => $v_year,
				'month' => $v_month,
				'day' => $v_day,
				'holiday_info' => $v_holiday_info,
				'weekday_name' => $v_weekday_name,
				'arr_weekday' => array(7,1,2,3,4,5,6),
				'lang_info' => \E::get('obj_system_module')->get_supported_lang(),
				'default_lang' => ($v_error_lang != "") ? $v_error_lang : \E::get('obj_kernel_config')->get('general/lang'),
				'holiday_lang_info' => $v_holiday_lang_info
				);
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$v_var['post'] = $v_post;
	}

	\V::append_data( 'js', \R::get_js_tag( 'string.js' ) );
	$lbl_title = str_replace('<YEAR>',$v_year, \E::get( 'obj_system_lang')->get('HOLIDAY_WEEKLY_HOLIDAY_FOR_YEAR'));
	\V::append_data( 'main_body_style', 'padding: 0px;');
	\V::append_data( 'header', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
	\V::append_data( 'body', \V::load_box($lbl_title , \V::load_view( $this->get_view_file_path(), $v_object, $v_var ), 'box_form.php' ) );

}
\V::output_view('template_iframe.php');
// \V::output_view('template.php');
?>