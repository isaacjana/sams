<?php

$v_var = null;

$v_param = $this->get_param();
$v_id = $v_param[0];

$v_nom_info = \E::get( 'obj_curr_module')->nomination_user_detail( $v_id );
$v_var = array(
				'user_detail' => $v_nom_info,
				'id' => $v_id
			);


if($_SERVER['REQUEST_METHOD'] == 'POST') {
	foreach($_POST as $v_key => $v_value) {
		$_POST[$v_key] = trim($v_value);
	}

		//Full name compulsory check
		\I::check("COMPULSORY", 'remarks', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));

		if(!\I::is_error()){
			
			$v_add['route_remark'] = $_POST['remarks'];
			$v_add['nom_id'] = $_POST['varid'];
			$v_add['nom_status'] = '6';
			$v_add['_rec_created_on'] = 'A';
			$v_add['_rec_created_by'] = \E::get_session('usr_id');
			$v_add['_rec_status'] = 'SHOW';
			
			\E::get('obj_curr_module')->nomination_route_shru($v_add);			
			unset($v_add);

			$v_add['nom_id'] = $_POST['varid'];
			$v_add['nom_status'] = '6';

			\E::get('obj_curr_module')->nomination_route_shru_profile($v_add);

			

			header('location: ' . \E::get('obj_curr_module')->build_action_path('nomination','penilaidua_nom'));
			exit();
	}
}



\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view();
?>