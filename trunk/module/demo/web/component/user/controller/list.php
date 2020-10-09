<?PHP
//Check for access right
// $v_access = \E::get('obj_curr_module')->get_right_to_access('read');
// if(!$v_access){
// 	\V::append_data( 'body', \V::load_box( \E::get( 'obj_curr_module_lang')->get('MODULE_AUTHORISED_ERROR'), \V::load_view( $this->get_view_file_path( 'msg_not_authorised', 'share' ), $v_object, $v_var ), 'box_form.php' ) );
// 	\V::output_view();
// 	exit;
// }

$v_var = array();
$v_param = $this->get_param();

$v_tmp_list = \E::get( 'obj_curr_module')->user_group_list();
for($v_c=0; $v_c<count($v_tmp_list); $v_c++){
  $v_group_list[$v_tmp_list[$v_c]['kwd_code']] = $v_tmp_list[$v_c]['kwd_value'];
}


$v_var['category_scp_list'] = $v_group_list;

$v_var['reponsive_dt']['table_id'] = 'tbl_responsive';
\V::append_data( 'header', \V::load_view( MOONLIGHT_PLUGIN_PATH . "responsive_data_table/moonlight_init.php", $v_object, $v_var) );
\V::append_data( 'menu', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ));
\V::output_view();
?>