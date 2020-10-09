<?PHP
$v_param = $this->get_param();
$v_usr_id = (isset($v_param[0]) ? $v_param[0] : '');

unset($v_cond);
$v_cond['usr_id'] = $v_usr_id;
$v_user_info = \E::get( 'obj_system_module')->user_get($v_cond);
if($v_user_info && is_array($v_user_info)){
}else{
	header('location: '. \E::get('obj_system_module')->build_action_path('user','list'));
}

unset($v_cond);
$v_cond['usr_id'] = $v_usr_id;
$v_cond['pos_status'] = 'A';
$v_order = array( array('order_by' => 'pos_sta_date' , 'sort_by' => 'DESC'));
$v_pos_info = \E::get( 'obj_system_module')->position_list($v_cond, $v_order);

$v_usr_title = \E::get( 'obj_system_module')->user_title_get($v_usr_id);

$v_var = array(
				'user_type' => $v_user_info['usr_from'],
				'user_info' => $v_user_info,
				'pos_info' => $v_pos_info,
				'usr_title' => $v_usr_title
				);
/*
print '<pre>';
print_r($v_user_info);
print '</pre>';

print '<hr/>';
print '<pre>';
print_r($v_pos_info);
print '</pre>';
*/

\V::append_data( 'header', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
\V::append_data( 'body', \V::load_box( \E::get( 'obj_system_lang')->get('USER_PROFILE'), \V::load_view( $this->get_view_file_path(), $v_object, $v_var ), 'box_form.php' ) );

\V::output_view();
?>