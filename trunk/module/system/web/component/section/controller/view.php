<?PHP
$v_param = $this->get_param();
$v_sec_id = (isset($v_param[0]) ? $v_param[0] : '');

unset($v_cond);
$v_cond['sec_id'] = $v_sec_id;
$v_sec_info = \E::get( 'obj_system_module')->section_get($v_cond);
if($v_sec_info && is_array($v_sec_info)){
}else{
	header('location: '. \E::get('obj_system_module')->build_action_path('section','list'));
}

$v_var = array(
				'sec_info' => $v_sec_info
				);

\V::append_data( 'header', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
\V::append_data( 'body', \V::load_box( \E::get( 'obj_system_lang')->get('AGENCY_SECTION'), \V::load_view( $this->get_view_file_path(), $v_object, $v_var ), 'box_form.php' ) );

\V::output_view();
?>