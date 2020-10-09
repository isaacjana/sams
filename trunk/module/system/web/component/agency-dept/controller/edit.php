<?PHP
$v_param = $this->get_param();
$v_ag_id = (isset($v_param[0]) ? $v_param[0] : '');

unset($v_cond);
$v_cond['ag_id'] = $v_ag_id;
$v_agency_info = \E::get( 'obj_system_module')->agency_get($v_cond);
if($v_agency_info && is_array($v_agency_info)){
}else{
	header('location: '. \E::get('obj_system_module')->build_action_path('agency','list'));
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	foreach($_POST as $v_key => $v_value){
		$_POST[$v_key] = trim($v_value);
	}
	
	\I::check("COMPULSORY", 'ag_name', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));
	if($_POST['ag_email'] != ''){
		\I::check("EMAIL", 'ag_email', \E::get("obj_kernel_lang")->get('ERR_JS_INVALID_EMAIL'));
	}
	
	
	if(!\I::is_error()){
		
		$v_update['ag_id'] = $_POST['ag_id'];
		$v_update['ag_cat_id'] = $_POST['ag_cat_id'];
		$v_update['ag_phone'] = $_POST['ag_phone'];
		$v_update['ag_fax'] = $_POST['ag_fax'];
		$v_update['ag_email'] = $_POST['ag_email'];
		$v_update['ag_add_address'] = $_POST['ag_add_address'];
		$v_update['_rec_status'] = 'SHOW';
		
		$v_result = \E::get('obj_system_module')->agency_edit($v_update);
		unset($v_update);
		
		$v_lang_update['kwd_code'] = $_POST['ag_id'];
		$v_lang_update['kwd_value'] = $_POST['ag_name'];
		$v_lang_update['kwd_short_name'] = $_POST['ag_short_name'];
		$v_lang_update['_rec_status'] = 'SHOW';
		$v_lang_info = \E::get('obj_system_module')->get_supported_lang();
		foreach($v_lang_info as $v_lang){
			$v_lang_update['kwd_lang'] = $v_lang;
			$v_agency_id = \E::get('obj_system_module')->agency_lbl_edit($v_lang_update);
		}
		unset($v_update);
		header('location: ' . \E::get('obj_system_module')->build_action_path('agency','list'));
	}
	foreach($_POST as $v_key => $v_value){
		$v_var[$v_key] = trim($v_value);
	}
}else{
	$v_var = array(
				'ag_id' => $v_agency_info['ag_id'],
				'ag_cat_id' => $v_agency_info['ag_cat_id'],
				'ag_name' => $v_agency_info['kwd_value'],
				'ag_short_name' => $v_agency_info['kwd_short_name'],
				'ag_phone' => $v_agency_info['ag_phone'],
				'ag_fax' => $v_agency_info['ag_fax'],
				'ag_email' => $v_agency_info['ag_email'],
				'ag_add_address' => $v_agency_info['ag_add_address']
				);
}

/*if(strtoupper($v_user_type) == 'SYSTEM'){
	\I::set_okp( 'usr_short_name', 	'13', 'gotoNextField("usr_short_name", true, "usr_full_name");' );
	\I::set_okp( 'usr_full_name', 	'13', 'gotoNextField("usr_full_name", false, "usr_email");' );
	\I::set_okp( 'usr_email', 		'13', 'gotoNextField("usr_email", false, "usr_new_ic_no");' );
	\I::set_okp( 'usr_new_ic_no', 	'13', 'gotoNextField("usr_new_ic_no", false, "mobile_no");' );
	\I::set_okp( 'mobile_no', 		'13', 'gotoNextField("mobile_no", true, "ag_id_display");' );
	\I::set_okp( 'ag_id_display', 	'13', 'gotoNextField("ag_id_display", true, "ad_id_display");' );
	\I::set_okp( 'ad_id_display', 	'13', 'gotoNextField("ad_id_display", true, "pos_name");' );
	\I::set_okp( 'pos_name', 		'13', 'gotoNextField("pos_name", true, "usr_password");' );
	\I::set_okp( 'usr_password', 	'13', 'gotoNextField("usr_password", false, "usr_password2");' );
	\I::set_okp( 'usr_password2', 	'13', 'if(validate(document.frm_user)) document.frm_user.submit();' );
}else if(strtoupper($v_user_type) == 'LDAP') {
	// press Enter key
	\I::set_okp( 'usr_short_name', 	'13', 'checkLdapUser()' );
	\I::set_okp( 'usr_short_name', 	'13', 'gotoNextField("usr_short_name", false, "usr_new_ic_no");' );
	\I::set_okp( 'usr_full_name', 	'13', 'gotoNextField("usr_full_name", true, "usr_new_ic_no");' );
	\I::set_okp( 'usr_email', 		'13', 'gotoNextField("usr_email", true, "usr_new_ic_no");' );
	\I::set_okp( 'usr_new_ic_no', 	'13', 'gotoNextField("usr_new_ic_no", false, "mobile_no");' );
	\I::set_okp( 'mobile_no', 		'13', 'gotoNextField("mobile_no", true, "ag_id_display");' );
	\I::set_okp( 'ag_id_display', 		'13', 'gotoNextField("ag_id_display", true, "ad_id_display");' );
	\I::set_okp( 'ad_id_display', 		'13', 'gotoNextField("ad_id_display", true, "pos_name");' );
	\I::set_okp( 'pos_name', 		'13', 'gotoNextField("pos_name", true, "usr_password");' );
	\I::set_okp( 'usr_password', 	'13', 'gotoNextField("usr_password", false, "usr_password2");' );
	\I::set_okp( 'usr_password2', 	'13', 'if(validate(document.frm_user)) document.frm_user.submit();' );
}else if(strtoupper($v_user_type) == 'MMS_COMMON'){
	\I::set_okp( 'usr_short_name', 	'13', 'gotoNextField("usr_short_name", false, "usr_full_name");' );
	\I::set_okp( 'usr_full_name', 	'13', 'gotoNextField("usr_full_name", false, "usr_email");' );
	\I::set_okp( 'usr_email', 		'13', 'gotoNextField("usr_email", false, "mobile_no");' );
	\I::set_okp( 'mobile_no', 		'13', 'gotoNextField("mobile_no", true, "ag_id_display");' );
	\I::set_okp( 'ag_id_display', 	'13', 'gotoNextField("ag_id_display", true, "ad_id_display");' );
	\I::set_okp( 'ad_id_display', 	'13', 'gotoNextField("ad_id_display", true, "pos_name");' );
	\I::set_okp( 'pos_name', 		'13', 'gotoNextField("pos_name", false, "usr_password");' );
	\I::set_okp( 'usr_password', 	'13', 'gotoNextField("usr_password", false, "usr_password2");' );
	\I::set_okp( 'usr_password2', 	'13', 'if(validate(document.frm_user)) document.frm_user.submit();' );
}*/
\V::append_data( 'header', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
\V::append_data( 'body', \V::load_box( \E::get( 'obj_system_lang')->get('AGENCY'), \V::load_view( $this->get_view_file_path( 'form' ), $v_object, $v_var ), 'box_form.php' ) );

\V::output_view();
?>