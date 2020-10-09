<?PHP
$v_param = $this->get_param();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	foreach($_POST as $v_key => $v_value){
		$_POST[$v_key] = trim($v_value);
	}
	
	$v_lang_info = \E::get('obj_system_module')->get_supported_lang();
	foreach($v_lang_info as $v_lang){
		if(!\I::check("COMPULSORY", 'ad_name_'.$v_lang, \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'))){
			$v_err_lang[$v_lang] = true;
		}else{
			unset($v_cond);
			$v_cond['ag_id'] = $_POST['ag_id'];
			$v_cond['kwd_value'] = $_POST['ad_name_'.$v_lang];
			$v_cond['kwd_lang'] = $v_lang;
			$v_result = \E::get('obj_system_module')->agency_dept_get($v_cond);
			
			if(is_array($v_result)){
				\I::set_error_field('ad_name_'.$v_lang, \E::get("obj_system_lang")->get('DEPARMENT_NAME_DUPLICATE'));
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
		
		$v_update['ag_id'] = $_POST['ag_id'];
		$v_update['link_table_from'] = '';
		$v_update['link_id'] = '';
		$v_update['_rec_status'] = 'SHOW';
		
		//===This update will be used while department information is needed.
		/*$v_update['ad_mobile'] = '';
		$v_update['ad_phone'] = '';
		$v_update['ad_fax'] = '';
		$v_update['ad_email'] = '';
		$v_update['ad_add_ctr_id'] = '';
		$v_update['ad_add_sta_id'] = '';
		$v_update['ad_add_div_id'] = '';
		$v_update['ad_add_dis_id'] = '';
		$v_update['ad_add_address'] = '';
		$v_update['ad_contact_person_name'] = '';
		$v_update['ad_contact_person_hp'] = '';
		$v_update['ad_contact_person_email'] = '';*/
		
		$v_lang_info = \E::get('obj_system_module')->get_supported_lang();
		foreach($v_lang_info as $v_lang){
			$v_update['lang'][$v_lang]['kwd_value'] = $_POST['ad_name_'.$v_lang];
			$v_update['lang'][$v_lang]['kwd_short_name'] = $_POST['ad_short_name_'.$v_lang];
		}
		$v_ad_id = \E::get('obj_system_module')->agency_dept_add($v_update);
		unset($v_update);
		
		// Add ACL
		$v_dir = \U::get_all_dirs_name(MOONLIGHT_MODULE_PATH);
		foreach($v_dir as $v_class){
			if(strtoupper($v_class) == 'MMS'){
				$v_temp_class_name = '\\' . 'moonlight' . '\\' . $v_class . '\\' . $v_class;
				$v_temp_module = new $v_temp_class_name;
				$v_info['ag_id'] = $_POST['ag_id'];
				$v_info['ad_id'] = $v_ad_id; //Here is hard code for the HQ
				$v_temp_module->auto_set_acl_group($v_info);
				unset($v_temp_module);
			}
		}
		
		print '<script language="javascript">
					window.parent.deptRecList("");
					window.parent.mydhtmlwin.close();
				</script>';
		exit;
	}
	foreach($_POST as $v_key => $v_value){
		$v_var[$v_key] = trim($v_value);
	}
}else{
	$v_var['ag_id'] = $v_param[0];
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	foreach($v_lang_info as $v_lang){
		$v_dept_info['lang'][$v_lang]['kwd_value'] = $_POST['ad_name_'.$v_lang];
		$v_dept_info['lang'][$v_lang]['kwd_short_name'] = $_POST['ad_short_name_'.$v_lang];
	}
}

$v_var['lang_info'] = \E::get('obj_system_module')->get_supported_lang();
$v_var['default_lang'] = ($v_error_lang != "") ? $v_error_lang : \E::get('obj_kernel_config')->get('general/lang');
$v_var['dept_info'] = isset($v_dept_info) ? $v_dept_info : null;

\V::append_data( 'header', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
\V::append_data( 'body', \V::load_box( \E::get( 'obj_system_lang')->get('DEPARMENT'), \V::load_view( $this->get_view_file_path( 'dept_form' ), $v_object, $v_var ), 'box_form.php' ) );

\V::output_view('template_iframe.php');
// \V::output_view();
?>