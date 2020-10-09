<?PHP
//Check for access right
// $v_access = \E::get('obj_curr_module')->get_right_to_access('edit');
// if(!$v_access){
// 	\V::append_data( 'body', \V::load_box( \E::get( 'obj_curr_module_lang')->get('MODULE_AUTHORISED_ERROR'), \V::load_view( $this->get_view_file_path( 'msg_not_authorised', 'share' ), $v_object, $v_var ), 'box_form.php' ) );
// 	\V::output_view();
// 	exit;
// }

$v_param = $this->get_param();
$v_id = $v_param[0];

//Portal
$v_tmp_list = \E::get( 'obj_curr_module')->setting_code_role();
//$v_group_list['no_access'] = "[No Access]";
// if(is_array($v_tmp_list)){
// 	for($v_c=0; $v_c<count($v_tmp_list); $v_c++){
// 		$v_group_list[$v_tmp_list[$v_c]['kwd_code']] = $v_tmp_list[$v_c]['kwd_value'];
// 	}
// }

$v_var['usr_group'] = $v_tmp_list;

$v_cond['usr_id'] = $v_id;
$v_user_info = \E::get( 'obj_system_module')->user_get($v_cond);

if(!$v_user_info || !is_array($v_user_info)){
	header('location: '. \E::get('obj_curr_module')->build_action_path('user','view',$v_id));
	exit();
}




if($_SERVER['REQUEST_METHOD'] == 'POST'){
	foreach($_POST as $v_key => $v_value){
		$_POST[$v_key] = trim($v_value);
	}

	//Full name compulsory check
	\I::check("COMPULSORY", 'usr_full_name', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));
	if(\I::check("COMPULSORY", 'usr_email', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'))){
		\I::check("EMAIL", 'usr_email', \E::get("obj_kernel_lang")->get('ERR_JS_INVALID_EMAIL'));
	}

	//I.C. No. compulsory check
	\I::check("COMPULSORY", 'usr_new_ic_no', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));

	//Check password entered.  Make sure pwd 1 and pwd 2 is match
	if($_POST['usr_pwd_update']=="1"){
		if(\I::check("COMPULSORY", 'usr_password', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'))
			&& \I::check("COMPULSORY", 'usr_password2', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'))){
			if($_POST['usr_password'] != $_POST['usr_password2'] ){
				\I::set_error_field('usr_password', \E::get('obj_system_lang')->get('USER_PASSWORD_NOT_MATCH'));
			}
		}
	}

	if(!\I::is_error()){
		//Update user profile
		$v_update['usr_id'] = $_POST['id'];
		$v_update['usr_short_name'] = $_POST['usr_short_name'];
		$v_update['usr_comm'] = '';
		$v_update['usr_from'] = strtolower($v_user_info['usr_from']);
		$v_update['usr_full_name'] = $_POST['usr_full_name'];
		$v_update['usr_new_ic_no'] = $_POST['usr_new_ic_no'];
		$v_update['usr_email'] = $_POST['usr_email'];
		$v_update['phone_office'] = $_POST['user_phone'];

		// if($_POST['usr_pwd_update']=="1"){
			$v_update['usr_password'] = $_POST['usr_password'];
		// }

		$v_updated = \E::get('obj_system_module')->user_edit($v_update);
		unset($v_update);

		//If user group is selected, ACL for user on portal
		if($_POST['group_level'] != 'no_access'){
			$v_update['usr_group'] = $_REQUEST['group_level'];
			$v_update['usr_news_notification'] = (isset($_REQUEST['usr_news_notification']) AND $_REQUEST['usr_news_notification']!="")?$_REQUEST['usr_news_notification']:0;

			$v_user_acl_infor = \E::get('obj_curr_module')->setting_user_acl_get( $v_id );

			if($v_user_acl_infor){ //Update if user already exist
				$v_update['usr_id'] = $v_id;
				$v_result = \E::get('obj_curr_module')->setting_user_acl_edit($v_update);
			}else{
				$v_update['usr_id'] = $v_usr_id;
				$v_update['_rec_status'] = 'SHOW';
				$v_result = \E::get('obj_curr_module')->setting_user_acl_add($v_update);
			}
			unset($v_update);

		}

		// add log
		$v_log_info['log_event'] = 'UPDATE'; 
		$v_log_info['log_action'] = 'UPDATE_USER';
		$v_log_info['log_id_1'] = $_POST['id'];
		$v_log_info['log_id_1_key'] = 'USER';
		\E::get( 'obj_curr_module')->log( '', '', $v_log_info );

		if(isset($v_updated) && $v_updated!==FALSE){
			\E::set_session(\E::get('MOONLIGHT_CURRENT_COMPONENT') . '-' . $_POST['id'], \E::get('obj_curr_module_lang')->get('RECORD_SAVED'));
		}

		header('location: ' . \E::get('obj_curr_module')->build_action_path('setting','usermanagement_view',$_POST['id']));
		exit();
	}
	foreach($_POST as $v_key => $v_value){
		$v_var[$v_key] = trim($v_value);
	}
}else{
	$v_var['user_type'] = $v_user_info['usr_from'];
	$v_var['usr_short_name'] = $v_user_info['usr_short_name'];
	$v_var['usr_full_name'] = $v_user_info['usr_full_name'];
	$v_var['usr_new_ic_no'] = $v_user_info['usr_new_ic_no'];
	$v_var['usr_email'] = $v_user_info['usr_email'];
	$v_var['user_phone'] = $v_user_info['phone_office'];
	$v_var['usr_from'] = $v_user_info['usr_from'];

	$v_var['id'] = $v_id;
	//$v_var['usr_group'] = $v_user_acl_infor[0]['group_id'];
	
	$v_var["created_by"]= (isset($v_user_info["_rec_created_by"]) && $v_user_info["_rec_created_by"]!="")? $v_user_info["_rec_created_by"]:"";
	$v_var["modified_by"]= (isset($v_user_info["_rec_modified_by"]) && $v_user_info["_rec_modified_by"]!="")? $v_user_info["_rec_modified_by"]:"";
	$v_var["created_on"]= (isset($v_user_info["_rec_created_on"]) && $v_user_info["_rec_created_on"]!="")?\E::get( "obj_curr_module")->__to_display_date($v_user_info["_rec_created_on"],"date"):"";
	$v_var["modified_on"]= (isset($v_user_info["_rec_modified_on"]) && $v_user_info["_rec_modified_on"]!="")?\E::get( "obj_curr_module")->__to_display_date($v_user_info["_rec_modified_on"],"date"):"";

	if($v_user_acl_infor = \E::get( 'obj_curr_module')->setting_user_acl_get($v_id)){
	$v_user_group = \E::get( 'obj_curr_module')->setting_user_group_get($v_user_acl_infor);
	$v_var['user_group_id']=$v_user_acl_infor;
	$v_var['user_group']=$v_user_group;
}
}
	
$v_var['mode'] = "edit";

\V::append_data( 'menu', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path('form'), $v_object, $v_var ) );
\V::output_view();
?>