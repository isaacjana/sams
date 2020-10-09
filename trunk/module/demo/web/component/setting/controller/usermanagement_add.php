<?php
// $v_var = null;

// $v_param = $this->get_param();
// $v_id = $v_param[0];

// $v_user_info = \E::get( 'obj_curr_module')->setting_user_detail( $v_id );
// $v_var = array(
// 				'user_detail' => $v_user_info,
// 				'id' => $v_id
// 			);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	foreach($_POST as $v_key => $v_value){
		$_POST[$v_key] = trim($v_value);
	}

	//User ID / Login ID duplication check
	if(\I::check("COMPULSORY", 'usr_short_name', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'))){
		unset($v_cond);
		$v_cond['usr_short_name'] = $_POST['usr_short_name'];
		$v_check_info = \E::get('obj_system_module')->user_get($v_cond);
		if($v_check_info && is_array($v_check_info)){
			\I::set_error_field('usr_short_name', \E::get('obj_system_lang')->get('USER_SHORT_NAME_DUPLICATE'));
		}
	}

	//Full name compulsory check
	\I::check("COMPULSORY", 'usr_full_name', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));
	
	// Email validation
	if(\I::check("COMPULSORY", 'usr_email', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'))){
		\I::check("EMAIL", 'usr_email', \E::get("obj_kernel_lang")->get('ERR_JS_INVALID_EMAIL'));
	}

	//I.C. No. compulsory check
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

	// Password validation
	if ($_POST['usr_from']=='system') {
		if(\I::check("COMPULSORY", 'usr_password', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'))
			&& \I::check("COMPULSORY", 'usr_password2', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'))){
			if($_POST['usr_password'] != $_POST['usr_password2'] ){
				\I::set_error_field('usr_password', \E::get('obj_system_lang')->get('USER_PASSWORD_NOT_MATCH'));
			}else{
				if(strlen($_POST['usr_password']) < 8){
					\I::set_error_field('usr_password', \E::get('obj_curr_module_lang')->get('PASSWORD_LENGTH'));
				}
			}
		}
	}else{
		$_POST['usr_password']='password';
	}
	

	if(!\I::is_error()){
		//Create user profile

		$v_add['usr_ldap_auth'] = '0';
		$v_add['usr_short_name'] = $_POST['usr_short_name'];
		$v_add['usr_comm'] = '';
		$v_add['usr_from'] = $_POST['usr_from'];
		$v_add['usr_full_name'] = $_POST['usr_full_name'];
		$v_add['usr_new_ic_no'] = $_POST['usr_new_ic_no'];
		$v_add['pms_ic_no'] = '';
		$v_add['usr_email'] = $_POST['usr_email'];
		$v_add['employee_id'] = '';
		$v_add['mobile_no'] = '';
		$v_add['usr_password'] = $_POST['usr_password'];
		$v_add['phone_office'] = $_POST['user_phone'];
		$v_add['_rec_status'] = 'SHOW';
		
		$v_usr_id = \E::get('obj_system_module')->user_add($_POST['usr_short_name'], $v_add);
		unset($v_add);

		$v_user_add_param[0] = $v_usr_id;

		//If user group is selected, ACL for user on portal
		if($_POST['group_level'] != 'no_access'){
			$v_update['usr_group'] = $_REQUEST['group_level'];
			$v_update['usr_news_notification'] = (isset($_REQUEST['usr_news_notification']) AND $_REQUEST['usr_news_notification']!="")?$_REQUEST['usr_news_notification']:0;

			$v_user_acl_infor = \E::get('obj_curr_module')->setting_user_acl_get( $v_usr_id );

			if($v_user_acl_infor){ //Update if user already exist
				$v_update['id'] = $_POST['id'];
				$v_result = \E::get('obj_curr_module')->setting_user_acl_edit($v_update);
			}else{
				$v_update['usr_id'] = $v_usr_id;
				$v_update['_rec_status'] = 'SHOW';
				$v_result = \E::get('obj_curr_module')->setting_user_acl_add($v_update);
			}
			unset($v_update);

		}

		if(isset($v_usr_id) && $v_usr_id!==FALSE){
			\E::set_session(\E::get('MOONLIGHT_CURRENT_COMPONENT') . '-' . $v_usr_id, \E::get('obj_curr_module_lang')->get('RECORD_SAVED'));
		}

		// add log
		$v_log_info['log_event'] = 'INSERT'; 
		$v_log_info['log_action'] = 'INSERT_USER';
		$v_log_info['log_id_1'] = $v_usr_id;
		$v_log_info['log_id_1_key'] = 'USER';
		\E::get('obj_curr_module')->log( '', '', $v_log_info );

		header('location: ' . \E::get('obj_curr_module')->build_action_path('setting','usermanagement_view',$v_usr_id));
		exit();
	}

	foreach($_POST as $v_key => $v_value){
		$v_var[$v_key] = trim($v_value);
	}
}
$v_user_group = \E::get( 'obj_curr_module')->setting_code_role();

$v_mode="add";

$v_var = array(
				'mode' => $v_mode,
				'usr_group' => $v_user_group

			);

\V::append_data( 'menu', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path('form'), $v_object, $v_var ));
\V::output_view();
?>