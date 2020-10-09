<?php

$v_var = null;

$v_param = $this->get_param();
$v_id = '1';

$v_nom_info = \E::get( 'obj_curr_module')->setting_tarikh_pencalonan( $v_id );

$v_var = array(
				'user_detail' => $v_nom_info,
				'id' => $v_id
			);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	foreach($_POST as $v_key => $v_value) {
		$_POST[$v_key] = trim($v_value);
	}

			
		$v_add['tarikh_dari'] = $_POST['tarikh_dari'];
		$v_add['tarikh_hingga'] = $_POST['tarikh_hingga'];
		$v_add['v_id'] = $_POST['v_id'];
		
		$v_query = \E::get('obj_curr_module')->setting_tarikh_pencalonan_update($v_add);
		// $v_var['query'] = $v_query;			
		/*unset($v_add);*/

		header('location: ' . \E::get('obj_curr_module')->build_action_path('setting','tarikh_pencalonan'));
		exit();

}

\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view();
?>