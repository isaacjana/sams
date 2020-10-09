<?PHP
$v_param = $this->get_param();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	foreach($_POST as $v_key => $v_value){
		$_POST[$v_key] = trim($v_value);
	}
	
	\I::check("COMPULSORY", 'ag_name', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));
	if($_POST['ag_email'] != ''){
		\I::check("EMAIL", 'ag_email', \E::get("obj_kernel_lang")->get('ERR_JS_INVALID_EMAIL'));
	}
	
	
	if(!\I::is_error()){
		
		$v_update['ag_code'] = '';
		$v_update['imp_dept_id'] = '';
		$v_update['ag_cat_id'] = $_POST['ag_cat_id'];
		$v_update['ag_from'] = 'SYSTEM';
		$v_update['ag_phone'] = $_POST['ag_phone'];
		$v_update['ag_fax'] = $_POST['ag_fax'];
		$v_update['ag_email'] = $_POST['ag_email'];
		$v_update['ag_add_ctr_id'] = 'null';
		$v_update['ag_add_sta_id'] = 'null';
		$v_update['ag_add_div_id'] = 'null';
		$v_update['ag_add_dis_id'] = 'null';
		$v_update['ag_add_address'] = $_POST['ag_add_address'];
		$v_update['ag_contact_person_name'] = '';
		$v_update['ag_contact_person_hp'] = '';
		$v_update['ag_contact_person_email'] = '';
		$v_update['_rec_status'] = 'SHOW';
		
		$v_ag_id = \E::get('obj_system_module')->agency_add($v_update);
		unset($v_update);
		
		$v_lang_update['kwd_code'] = $v_ag_id;
		$v_lang_update['kwd_value'] = $_POST['ag_name'];
		$v_lang_update['kwd_short_name'] = $_POST['ag_short_name'];
		$v_lang_update['_rec_status'] = 'SHOW';
		$v_lang_info = \E::get('obj_system_module')->get_supported_lang();
		foreach($v_lang_info as $v_lang){
			$v_lang_update['kwd_lang'] = $v_lang;
			$v_agency_id = \E::get('obj_system_module')->agency_lbl_add($v_lang_update);
		}
		unset($v_update);
		//Don know whether can access like this
		$v_module_class_name = "\moonlight\mms\mms";
		$v_curr_module = new $v_module_class_name;
		$v_curr_lang = $v_curr_module->get_lang_object();
		\E::set( 'obj_curr_module', $v_curr_module );
		\E::set( 'obj_curr_module_lang', $v_curr_lang );
		//====Add facility
		$v_update_fac['fac_owner'] = $_POST['ag_cat_id'];
		$v_update_fac['fac_title'] = $_POST['ag_name'];
		$v_update_fac['fac_desc'] = '';
		$v_update_fac['fac_address'] = $_POST['ag_add_address'];;
		$v_update_fac['fac_cont_ctr_id'] = '';
		$v_update_fac['fac_cont_sta_id'] = '';
		$v_update_fac['fac_cont_div_id'] = '';
		$v_update_fac['fac_url'] = '';
		$v_update_fac['fac_cater'] = '';
		$v_update_fac['fac_comment'] = '';
		$v_update_fac['fac_rate'] = '';
		$v_update_fac['fac_cont_p'] = $_POST['ag_phone'];
		$v_update_fac['fac_cont_a'] = '';
		$v_update_fac['fac_cont_t'] = '';
		$v_update_fac['fac_cont_f'] = $_POST['ag_fax'];
		$v_update_fac['fac_email'] = $_POST['ag_email'];
		$v_update_fac['fac_cont_ctr_id2'] = '';
		$v_update_fac['fac_cont_sta_id2'] = '';
		$v_update_fac['fac_cont_div_id2'] = '';
		$v_update_fac['action'] = 'ATT';
		$v_update_fac['ag_id'] = $v_ag_id;
		$v_id = \E::get( 'obj_curr_module')->facility_add($v_update_fac);
		// Add ACL
		$v_dir = \U::get_all_dirs_name(MOONLIGHT_MODULE_PATH);
		foreach($v_dir as $v_class){
			if(strtoupper($v_class) == 'MMS'){
				$v_temp_class_name = '\\' . 'moonlight' . '\\' . $v_class . '\\' . $v_class;
				$v_temp_module = new $v_temp_class_name;
				$v_info['ag_id'] = $v_ag_id;
				$v_info['ad_id'] = 'hq'; //Here is hard code for the HQ
				$v_temp_module->auto_set_acl_group($v_info);
				unset($v_temp_module);
			}
		}
		
		header('location: ' . \E::get('obj_system_module')->build_action_path('agency','list'));
	}
	foreach($_POST as $v_key => $v_value){
		$v_var[$v_key] = trim($v_value);
	}
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