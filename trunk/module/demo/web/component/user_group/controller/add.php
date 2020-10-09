<?PHP
//Check for access right
$v_access = \E::get('obj_curr_module')->get_right_to_access('add');
if(!$v_access){
	\V::append_data( 'body', \V::load_box( \E::get( 'obj_curr_module_lang')->get('MODULE_AUTHORISED_ERROR'), \V::load_view( $this->get_view_file_path( 'msg_not_authorised', 'share' ), $v_object, $v_var ), 'box_form.php' ) );
	\V::output_view();
	exit;
}

$v_param = $this->get_param();


if($_SERVER['REQUEST_METHOD'] == 'POST'){
	foreach($_POST as $v_key => $v_value){
		$_POST[$v_key] = trim($v_value);
	}

	$v_lang_info = \E::get('obj_curr_module')->get_supported_lang();

	foreach($v_lang_info as $v_lang){
		\I::check("COMPULSORY", 'group_name_'.$v_lang, \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));
		if($_POST['group_name_'.$v_lang]==""){
			\I::set_error_msg($v_lang.": ".\E::get("obj_curr_module_lang")->get('USER_GROUP_NAME').\E::get("obj_curr_module_lang")->get('LBL_IS_COMPULSORY'));
		}
	}

	if(!\I::is_error()){
		$v_add['comp_count'] = $_REQUEST['comp_count'];
		$v_add['_rec_status'] = 'SHOW';
		for($v_c=0;$v_c<$_REQUEST['comp_count'];$v_c++){
			$v_add['comp_name_'.$v_c] = $_REQUEST['comp_name_'.$v_c];
			$v_add['group_del_'.$v_c] = $_REQUEST['group_del_'.$v_c]==""?0:$_REQUEST['group_del_'.$v_c];
			$v_add['group_edit_'.$v_c] = $_REQUEST['group_edit_'.$v_c]==""?0:$_REQUEST['group_edit_'.$v_c];
			$v_add['group_add_'.$v_c] = $_REQUEST['group_add_'.$v_c]==""?0:$_REQUEST['group_add_'.$v_c];

			if(isset($_REQUEST['group_read_'.$v_c])){
				if($_REQUEST['group_read_'.$v_c]==0){					
					$v_add['group_read_'.$v_c] = 0;
				}else{
					$v_add['group_read_'.$v_c] = $_REQUEST['group_read_'.$v_c];		
				}
			}else{
				$v_add['group_read_'.$v_c] = 0;
			}

			if($_REQUEST['group_del_'.$v_c]==1 || $_REQUEST['group_edit_'.$v_c]==1 || $_REQUEST['group_add_'.$v_c]==1){
				$v_add['group_read_'.$v_c] = 1;
			}
		}

		$v_id = \E::get('obj_curr_module')->user_group_add($v_add);
		unset($v_add);

		$v_add['id'] = $v_id;
		$v_add['_rec_status'] = 'SHOW';
		$v_lang_info = \E::get('obj_curr_module')->get_supported_lang();
		foreach($v_lang_info as $v_lang){
			$v_add['lang'] = $v_lang;
			$v_add['group_name'][$v_lang] = $_POST['group_name_'.$v_lang];
		}
		$v_result = \E::get('obj_curr_module')->user_group_lbl_add($v_add);
		unset($v_add);

		header('location: ' . \E::get('obj_curr_module')->build_action_path('user_group','view',$v_id));
		exit();										
	}

	foreach($_POST as $v_key => $v_value){
		$v_var[$v_key] = trim($v_value);
	}

	foreach($v_lang_info as $v_lang){
		$v_var['group_name'][$v_lang] = $_POST['group_name_'.$v_lang];
	}
}

$v_lang_info = \E::get('obj_curr_module')->get_supported_lang();
$v_comp_list = \E::get( 'obj_curr_module')->get_component_acl_list();

$v_user_infor = \E::get('obj_system_module')->get_user_info(\E::get_session('usr_id'));
$v_var['group_author'] = \E::get_session('full_name');
$v_var['group_date_modified'] = 'none';
$v_var['comp_list'] = $v_comp_list;

\V::append_data( 'menu', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path( 'form' ), $v_object, $v_var ) );
\V::output_view();
?>