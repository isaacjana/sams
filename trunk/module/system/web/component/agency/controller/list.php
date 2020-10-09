<?PHP
$v_agency_session = \E::get('obj_system_module')->agency_allow_view();
if(is_array($v_agency_session)){
	foreach($v_agency_session as $v_value){
		$v_temp = explode('@',$v_value);
		$v_ag_arr[$v_temp[0]] = $v_temp[0];
	}
}

if($v_agency_session != 'ALL' && count($v_ag_arr) <= 1  ){
	header('location: '.\E::get('obj_system_module')->build_action_path('agency','view',$v_temp[0]));
}
//include $this->get_controller_file_path( 'calendar_setting', 'index' );
$v_var = null;

\V::append_data( 'header', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
\V::append_data( 'body', \V::load_box( \E::get('obj_system_lang')->get('AGENCYS'), \V::load_view( $this->get_view_file_path(), $v_object, $v_var ), 'box_form.php' )  );
//\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var )  );

\V::output_view();
?>