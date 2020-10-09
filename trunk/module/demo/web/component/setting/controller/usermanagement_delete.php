<?PHP
//Check for access right
// $v_access = \E::get('obj_curr_module')->get_right_to_access('delete');
// if(!$v_access){
// 	\V::append_data( 'body', \V::load_box( \E::get( 'obj_curr_module_lang')->get('MODULE_AUTHORISED_ERROR'), \V::load_view( $this->get_view_file_path( 'msg_not_authorised', 'share' ), $v_object, $v_var ), 'box_form.php' ) );
// 	\V::output_view();
// 	exit;
// }

$v_del_method = '0'; //0 = soft delete, 1 = hard delete
$v_param = $this->get_param();
$v_user_id = (isset($v_param[0]) ? $v_param[0] : '');

if($v_user_id==""){
	header('location: '. \E::get('obj_curr_module')->build_action_path('setting','usermanagement'));
	exit(0);
}
$v_delete['id'] = $v_user_id;

$v_cond['usr_id'] = $v_user_id;
$v_user_info = \E::get( 'obj_system_module')->user_get($v_cond);

if(\E::get( 'obj_curr_module')->user_acl_del($v_delete, $v_del_method)){
	$v_var['del_error']=false;
	$v_del["deleted"] = true;
}

if($v_var['del_error']==false){
	if(\E::get('obj_system_module')->user_del( $v_user_id )){
		$v_var['del_error']=false;
		$v_del["deleted"] = true;
		$v_var['callback_url']=\E::get('obj_curr_module')->build_action_path('setting','usermanagement');

		// add log
		$v_log_info['log_event'] = 'DELETE'; 
		$v_log_info['log_action'] = 'DELETE_USER';
		$v_log_info['log_id_1'] = $v_user_id;
		$v_log_info['log_id_1_key'] = 'USER';
		\E::get('obj_curr_module')->log( '', '', $v_log_info );
	}else{
		$v_var['del_error']=true;
		$v_del["deleted"] = false;
		$v_var['callback_url']=\E::get('obj_curr_module')->build_action_path('setting','usermanagement');
	}
}

header('location: '. \E::get('obj_curr_module')->build_action_path('setting','usermanagement'));
exit();
?>