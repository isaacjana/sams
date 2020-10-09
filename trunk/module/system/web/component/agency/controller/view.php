<?PHP
$v_param = $this->get_param();
$v_ag_id = (isset($v_param[0]) ? $v_param[0] : '');

//===Access Control
$v_access = false;
$v_system_agency = \E::get_session(\E::get('obj_system_module')->get_codename().'/system_profile/group_adm_agency');
if( $v_system_agency != '' && \U::is_user_able_to( 'READ', $v_system_agency )){
//===IF: Check on the system profile access
	$v_access = true;
}else{
//===ELSE: Check on the each agency access
	$v_arr_agency = \E::get_session(\E::get('obj_system_module')->get_codename().'/agency');
	$v_return = false;
	if(is_array($v_arr_agency)){
		foreach($v_arr_agency as $v_key => $v_value){
			$v_temp = explode('@',$v_key);
			
			if( $v_temp[0] == $v_ag_id && \U::is_user_able_to('READ', $v_value['group_adm_agency'])){
				$v_access = true;
				break;
			}
		}
	}
}

if($v_access){
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

	\V::append_data( 'body', \V::load_box( \E::get( 'obj_system_lang')->get('AGENCY'), \V::load_view( $this->get_view_file_path(), $v_object, $v_var ), 'box_form.php' ) );
}else{
	\V::append_data( 'body', \V::load_box( '', \V::load_view( $this->get_view_file_path('msg_not_authorised','share'), $v_object, $v_var ), 'box_form.php' ) );
}

\V::append_data( 'header', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );

\V::output_view();
?>