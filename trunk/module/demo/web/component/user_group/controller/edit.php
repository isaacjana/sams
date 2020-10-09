<?PHP
//Check for access right
$v_access = \E::get('obj_curr_module')->get_right_to_access('edit');
if(!$v_access){
	\V::append_data( 'body', \V::load_box( \E::get( 'obj_curr_module_lang')->get('MODULE_AUTHORISED_ERROR'), \V::load_view( $this->get_view_file_path( 'msg_not_authorised', 'share' ), $v_object, $v_var ), 'box_form.php' ) );
	\V::output_view();
	exit;
}

$v_param = $this->get_param();
$v_group_id = (isset($v_param[0]) ? $v_param[0] : '');

$v_curr_obj=\E::get( 'obj_curr_module');
$v_comp_list = $v_curr_obj->get_component_acl_list();

$v_user_group_info = $v_curr_obj->user_group_get($v_group_id);

if($v_user_group_info && is_array($v_user_group_info)){
}else{
	header('location: '. \E::get('obj_curr_module')->build_action_path('user_group','list'));
	exit();
}

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
		$v_update['id'] = $_REQUEST['id'];
		$v_update['comp_count'] = $_REQUEST['comp_count'];
		$v_update['_rec_status'] = 'SHOW';
		for($v_c=0;$v_c<$_REQUEST['comp_count'];$v_c++){
			$v_update['comp_name_'.$v_c] = $_REQUEST['comp_name_'.$v_c];
			$v_update['group_del_'.$v_c] = $_REQUEST['group_del_'.$v_c]==""?0:$_REQUEST['group_del_'.$v_c];
			$v_update['group_edit_'.$v_c] = $_REQUEST['group_edit_'.$v_c]==""?0:$_REQUEST['group_edit_'.$v_c];
			$v_update['group_add_'.$v_c] = $_REQUEST['group_add_'.$v_c]==""?0:$_REQUEST['group_add_'.$v_c];
			
			if(isset($_REQUEST['group_read_'.$v_c])){
				if($_REQUEST['group_read_'.$v_c]==0){					
					$v_update['group_read_'.$v_c] = 0;
				}else{
					$v_update['group_read_'.$v_c] = $_REQUEST['group_read_'.$v_c];		
				}
			}else{
				$v_update['group_read_'.$v_c] = 0;
			}

			if($_REQUEST['group_del_'.$v_c]==1 || $_REQUEST['group_edit_'.$v_c]==1 || $_REQUEST['group_add_'.$v_c]==1){
				$v_update['group_read_'.$v_c] = 1;
			}
			
		}

		$v_result = \E::get('obj_curr_module')->user_group_edit($v_update);
		unset($v_update);

		$v_update['id'] = $_POST['id'];
		$v_update['_rec_status'] = 'SHOW';
		$v_lang_info = \E::get('obj_curr_module')->get_supported_lang();
		foreach($v_lang_info as $v_lang){
			$v_update['lang'] = $v_lang;
			$v_update['group_name'][$v_lang] = $_POST['group_name_'.$v_lang];
		}
		$v_result = \E::get('obj_curr_module')->user_group_lbl_edit($v_update);
		unset($v_update);

		header('location: ' . \E::get('obj_curr_module')->build_action_path('user_group','view',array($_POST['id'])));
		exit();
	}
	foreach($_POST as $v_key => $v_value){
		$v_var[$v_key] = trim($v_value);
	}

	$v_lang_info = \E::get('obj_curr_module')->get_supported_lang();
	foreach($v_lang_info as $v_lang){
		$v_var['group_name'][$v_lang] = $_POST['group_name_'.$v_lang];
	}
}

$v_user_infor = \E::get('obj_system_module')->get_user_info($v_user_group_info[0]['_rec_created_by']);
$v_modified_date=explode(" ",$v_user_group_info[0]['_rec_modified_on']);
$v_var = array(
				'id' => $v_user_group_info[0]['group_id'],
				'group_name' => $v_user_group_info[0]['kwd_value'],
				'comp_list' => $v_comp_list,
				'group_date_modified' => $v_modified_date[0]
			);

foreach($v_comp_list as $v_comp){
	if(strpos($v_comp,"group_com_")===0){
		$v_var[$v_comp] = $v_user_group_info[0][$v_comp];
	}else{
		if(isset($v_user_group_info[0]['group_com_'.$v_comp])){
			$v_var[$v_comp] = $v_user_group_info[0]['group_com_'.$v_comp];
		}
	}
}


\V::append_data( 'menu', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path('form'), $v_object, $v_var ) );
\V::output_view();
?>