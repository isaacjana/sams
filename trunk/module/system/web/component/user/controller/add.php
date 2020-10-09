<?PHP
$v_param = $this->get_param();
$v_user_type = strtoupper(isset($v_param[0]) && $v_param[0]!='' ? $v_param[0] : 'LDAP');

$v_cond['not_imp_id'] = '0000';
$v_order = array( array('order_by' => 'kwd_value' , 'sort_by' => 'ASC'));
$v_title_info = \E::get('obj_system_module')->user_title_key_list($v_cond, $v_order);
$v_var = array(
				'title_info' => $v_title_info,
				'user_type' => $v_user_type
				);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	foreach($_POST as $v_key => $v_value){
		if($v_key != 'usr_password' && $v_key != 'usr_password2'){
			$_POST[$v_key] = trim($v_value);
		}
	}
	
	if(\I::check("COMPULSORY", 'usr_short_name', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'))){
		unset($v_cond);
		$v_cond['usr_short_name'] = $_POST['usr_short_name'];
		/*if(strtoupper($v_user_type) != 'MMS_COMMON'){
			$v_cond['usr_short_name'] = $_POST['usr_short_name'];
		}else{
			$v_cond['usr_short_name'] = \E::get('obj_system_module')->get_config()->get('db/comm_usr_id').$_POST['usr_short_name'];
		}*/
		$v_check_info = \E::get('obj_system_module')->user_get($v_cond);
		if($v_check_info && is_array($v_check_info)){
			\I::set_error_field('usr_short_name', \E::get('obj_system_lang')->get('USER_SHORT_NAME_DUPLICATE'));
		}
	}
	\I::check("COMPULSORY", 'usr_full_name', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));
	if(\I::check("COMPULSORY", 'usr_email', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'))){
		\I::check("EMAIL", 'usr_email', \E::get("obj_kernel_lang")->get('ERR_JS_INVALID_EMAIL'));
	}
	if(!\I::check("COMPULSORY", $_POST['ag_id'], \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'),'VAR')){
		\I::set_error_msg(\E::get('obj_system_lang')->get('USER_AGENCY').': '.\E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));
	}
	
	if(isset($_POST['usr_comm']) && $_POST['usr_comm'] == '1'){
		//Not need to check IC
	}else{
		if(\I::check("COMPULSORY", 'usr_new_ic_no', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'))){
			if(\I::check("IC", 'usr_new_ic_no', \E::get("obj_kernel_lang")->get('ERR_JS_INVALID_IC'))){
				unset($v_cond);
				$v_cond['usr_new_ic_no'] = $_POST['usr_new_ic_no'];
				$v_check_info = \E::get('obj_system_module')->user_get($v_cond);
				if($v_check_info && is_array($v_check_info)){
					\I::set_error_field('usr_new_ic_no', \E::get('obj_system_lang')->get('USER_IC_DUPLICATE'));
				}
			}
		}
	}
	
	if(trim($_POST['mobile_no']) != ''){
		\I::check("MOBILE", 'mobile_no', \E::get("obj_kernel_lang")->get('ERR_JS_INVALID_MOBILE'));
	}
	
	if($v_user_type == 'SYSTEM'){
		if(\I::check("COMPULSORY", 'usr_password', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'))
			&& \I::check("COMPULSORY", 'usr_password2', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'))){
			if($_POST['usr_password'] != $_POST['usr_password2'] ){
				\I::set_error_field('usr_password', \E::get('obj_system_lang')->get('USER_PASSWORD_NOT_MATCH'));
			}
		}
	}
	
	if(!\I::is_error()){
		/*if(strtoupper($v_user_type) == 'MMS_COMMON'){
			$_POST['usr_short_name'] = \E::get('obj_system_module')->get_config()->get('db/comm_usr_id').$_POST['usr_short_name'];
		}*/
		if($v_user_type == 'SYSTEM'){
			$v_update['usr_ldap_auth'] = '0';
		}
		$v_update['usr_short_name'] = $_POST['usr_short_name'];
		$v_update['usr_comm'] = (isset($_POST['usr_comm']) && $_POST['usr_comm'] == '1') ? '1' : '0';
		$v_update['usr_from'] = strtolower($v_user_type);
		$v_update['usr_full_name'] = $_POST['usr_full_name'];
		$v_update['usr_new_ic_no'] = $_POST['usr_new_ic_no'];
		$v_update['pms_ic_no'] = '';
		$v_update['usr_email'] = $_POST['usr_email'];
		$v_update['employee_id'] = '';
		$v_update['mobile_no'] = $_POST['mobile_no'];
		$v_update['usr_password'] = $_POST['usr_password'];
		$v_update['phone_office'] = '';
		$v_update['_rec_status'] = 'SHOW';
		
		$v_usr_id = \E::get('obj_system_module')->user_add($_POST['usr_short_name'], $v_update);
		unset($v_update);
		
		$v_update['usr_id'] = $v_usr_id;
		$v_update['sys_ag_id'] = $_POST['ag_id'];
		$v_update['sys_ad_id'] = ($_POST['ad_id']!='' ? $_POST['ad_id'] : 'hq');
		$v_update['pos_name'] = $_POST['pos_name'];
		$v_update['pos_default'] = '1';
		$v_update['_rec_status'] = 'SHOW';
		$v_update['pos_sta_date'] = \E::get('obj_system_module')->__now();
		
		$v_result = \E::get('obj_system_module')->position_add($v_update);
		unset($v_update);
		
		if($_POST['usr_title_id'] != ''){
			$v_update['usr_id'] = $v_usr_id;
			$v_update['usr_title_id'] = $_POST['usr_title_id'];
			$v_update['usr_title_sta_date'] = \E::get('obj_system_module')->__now();
			$v_update['_rec_status'] = 'SHOW';
			$v_result = \E::get('obj_system_module')->user_title_add($v_update);
			unset($v_update);
		}
		
		header('location: ' . \E::get('obj_system_module')->build_action_path('user','list'));
	}
	foreach($_POST as $v_key => $v_value){
		if($v_key != 'usr_password' && $v_key != 'usr_password2' ){
			if(($v_key == 'ag_id_display' && $_POST['ag_id']=='')
				|| ($v_key == 'ad_id_display' && $_POST['ad_id']=='')){
				// do nothing
			}else{
				$v_var[$v_key] = trim($v_value);
			}
		}
	}
}

if(strtoupper($v_user_type) == 'SYSTEM'){
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
}

\V::append_data( 'header', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
\V::append_data( 'body', \V::load_box( \E::get( 'obj_system_lang')->get('USER_PROFILE'), \V::load_view( $this->get_view_file_path( 'form' ), $v_object, $v_var ), 'box_form.php' ) );

\V::output_view();
?>