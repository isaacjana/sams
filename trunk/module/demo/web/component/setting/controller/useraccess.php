<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	foreach($_POST as $v_key => $v_value){
		$_POST[$v_key] = trim($v_value);
	}

	//user role compulsory check
	\I::check("COMPULSORY", 'user_role', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));

	if(!\I::is_error()){

		$v_add['comp_count'] = count(\E::get( 'obj_curr_module')->get_component_acl_list());
		$v_add['usr_role'] = $_REQUEST['group_level'];
		$v_add['_rec_status'] = 'SHOW';
		$v_comp_list = \E::get( 'obj_curr_module')->get_component_acl_list();
		for($v_c=0;$v_c<$v_add['comp_count'];$v_c++){
			$v_add['comp_name_'.$v_c] = $v_comp_list[$v_c];
			$v_add['group_del_'.$v_c] = 1;
			$v_add['group_edit_'.$v_c] = 1;
			$v_add['group_add_'.$v_c] = 1;
			$v_add['group_read_'.$v_c] = 1;

		}
		$v_id=\E::get('obj_curr_module')->setting_group_add($v_add);
		unset($v_add);

		$v_add['id'] = $v_id;
		$v_add['_rec_status'] = 'SHOW';
		$v_lang_info = \E::get('obj_curr_module')->get_supported_lang();
		foreach($v_lang_info as $v_lang){
			$v_add['lang'] = $v_lang;
			$v_add['group_name'][$v_lang] = $_POST['user_role'];
		}
		$v_result = \E::get('obj_curr_module')->setting_group_lbl_add($v_add);
		unset($v_add);


		header('location: ' . \E::get('obj_curr_module')->build_action_path('setting','useraccess',$v_id));
		exit();
	}

	foreach($_POST as $v_key => $v_value){
		$_POST[$v_key] = trim($v_value);
	}
}

// $group_list_info = \E::get( 'obj_curr_module')->setting_group_list();
$code_role = \E::get( 'obj_curr_module')->setting_code_role();

$v_var = array( 
				"code_role" => (isset($code_role)? $code_role: ""),
				"group_list_info" => (isset($group_list_info)? $group_list_info: "")
				);
if (isset($test)) {
	$v_var['test']=$test;
}
\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view();
?>