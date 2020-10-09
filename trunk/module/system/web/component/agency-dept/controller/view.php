<?PHP
$v_param = $this->get_param();
$v_ag_id = (isset($v_param[0]) ? $v_param[0] : '');

unset($v_cond);
$v_cond['ag_id'] = $v_ag_id;
$v_agency_info = \E::get( 'obj_system_module')->agency_get($v_cond);
if($v_agency_info && is_array($v_agency_info)){
}else{
	header('location: '. \E::get('obj_system_module')->build_action_path('agency','list'));
}

$v_var = array(
				'agency_info' => $v_agency_info
				);


$v_var['ag_id'] = $v_ag_id;

\V::append_data( 'header', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
\V::append_data( 'body', \V::load_box( \E::get( 'obj_system_lang')->get('AGENCY'), \V::load_view( $this->get_view_file_path(), $v_object, $v_var ), 'box_form.php' ) );

\V::output_view();
?>