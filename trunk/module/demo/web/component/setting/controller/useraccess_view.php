<?PHP
//Check for access right
$v_access = \E::get('obj_curr_module')->get_right_to_access('read');
if(!$v_access){
	\V::append_data( 'body', \V::load_box( \E::get( 'obj_curr_module_lang')->get('MODULE_AUTHORISED_ERROR'), \V::load_view( $this->get_view_file_path( 'msg_not_authorised', 'share' ), $v_object, $v_var ), 'box_form.php' ) );
	\V::output_view();
	exit;
}

$v_var = null;

$v_param = $this->get_param();
$v_id = $v_param[0];

$v_comp_list = \E::get( 'obj_curr_module')->get_component_acl_list();
$v_user_group_info = \E::get( 'obj_curr_module')->setting_user_group_get( $v_id );

$v_lang = \E::get('obj_curr_module')->get_lang();
if( isset( $v_user_group_info ) && is_array( $v_user_group_info ) ){
	$v_user_infor = \E::get('obj_system_module')->get_user_info($v_user_group_info[0]['_rec_created_by']);
	$v_modified_date=explode(" ",$v_user_group_info[0]['_rec_modified_on']);
	$v_var = array(
					'id' => $v_user_group_info[0]['group_id'],
					'group_name' => $v_user_group_info[0]['kwd_value'],
					'comp_list' => $v_comp_list,
					'group_date_modified' => $v_modified_date[0],
					'group_author' => $v_user_infor['full_name'],
					'group_agency' => $v_user_infor['kwd_value']
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
}

\V::append_data( 'menu', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ));
\V::output_view();
?>