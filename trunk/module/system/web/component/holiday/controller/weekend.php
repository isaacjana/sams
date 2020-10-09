<?PHP
$v_saved = false;
$v_param = $this->get_param();
$v_year = isset($v_param[0]) && preg_match('/^[0-9]{4,4}$/', $v_param[0]) ? $v_param[0] : date('Y');

$v_cond['year'] = $v_year;
$v_cond['hol_key_like'] = $v_year.'_WEEKLY%_PROFILE';
$v_holiday_info = \E::get('obj_system_module')->holiday_list($v_cond);

unset($v_cond);
foreach($v_holiday_info as $v_row){
	$v_cond['kwd_code@IN'][] = $v_row['hol_id'];
}
$v_holiday_lang_info = \E::get('obj_system_module')->holiday_lang_get($v_cond);

foreach($v_holiday_info as $v_row){
	$v_temp[$v_row['hol_key']] = array(
										'hol_id' => $v_row['hol_id'],
										'hol_key' => $v_row['hol_key'],
										'kwd_value' => $v_row['kwd_value'],
										'kwd_lang' => $v_row['kwd_lang'],
										'lang' => $v_holiday_lang_info[$v_row['hol_id']]
										);
}
$v_holiday_info = $v_temp;

$v_weekday_name = array(
						1 => "MONDAY",
						2 => "TUESDAY ",
						3 => "WEDNESDAY",
						4 => "THURSDAY",
						5 => "FRIDAY",
						6 => "SATURDAY",
						7 => "SUNDAY"
						);

$v_error_lang = "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	foreach($_POST as $v_key => $v_value){
		$_POST[$v_key] = trim($v_value);
	}
	
	$v_lang_info = \E::get('obj_system_module')->get_supported_lang();
	for($i = 1 ; $i <= 7 ; ++$i){
		if($_POST['chk_'.$i]){
			foreach($v_lang_info as $v_lang){
				if(!\I::check("COMPULSORY", 'day_'.$v_lang."_".$i , \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'))){
					$v_err_lang[$v_lang] = true;
				}
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
		for($i = 1 ; $i <= 7 ; ++$i){
			if($_POST['chk_'.$i]){
				$v_update['weekday'] = $i;
				$v_update['year'] = $v_year;
				foreach($v_lang_info as $v_lang){
					$v_update['lang'][$v_lang] = $_POST['day_'.$v_lang."_".$i];
				}
				
				if($_POST['hol_id_'.$i] != ''){
					//========Update=========
					\E::get('obj_system_module')->holiday_weekend_edit($v_update);
				}else{
					//=========Add===========
					\E::get('obj_system_module')->holiday_weekend_add($v_update);
				}
				
			}else if($_POST['hol_id_'.$i] != ''){
				//=========Delete==========
				$v_del['weekday'] = $i;
				$v_del['year'] = $v_year;
				\E::get('obj_system_module')->holiday_weekend_del($v_del);
			}
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
	$v_var = array(
				'year' => $v_year,
				'holiday_info' => $v_holiday_info,
				'weekday_name' => $v_weekday_name,
				'arr_weekday' => array(7,1,2,3,4,5,6),
				'lang_info' => \E::get('obj_system_module')->get_supported_lang(),
				'default_lang' => ($v_error_lang != "") ? $v_error_lang : \E::get('obj_kernel_config')->get('general/lang'),
				'holiday_lang_info' => $v_holiday_lang_info
				);
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$v_var['post'] = $_POST;
	}


	$lbl_title = str_replace('<YEAR>',$v_year, \E::get( 'obj_system_lang')->get('HOLIDAY_WEEKLY_HOLIDAY_FOR_YEAR'));
	\V::append_data( 'main_body_style', 'padding: 0px;');
	\V::append_data( 'header', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
	\V::append_data( 'body', \V::load_box($lbl_title , \V::load_view( $this->get_view_file_path(), $v_object, $v_var ), 'box_form.php' ) );

}
\V::output_view('template_iframe.php');
// \V::output_view('template.php');
?>