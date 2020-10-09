<?php

$v_var = null;

$v_param = $this->get_param();
$v_id = $v_param[0];

$v_short_info = \E::get( 'obj_curr_module')->attendance_detail( $v_id );
$v_var = array(
				'user_detail' => $v_short_info,
				'id' => $v_id
			);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	foreach($_POST as $v_key => $v_value) {
		$_POST[$v_key] = trim($v_value);
	}

		
	$v_add['nom_id'] = $_POST['v_id'];
	$v_add['tarikh_jawapan'] = $_POST['tarikh_jawapan'];
	$v_add['kehadiran'] = $_POST['kehadiran'];

	if($v_add['kehadiran'] == 'hadir'){
			$v_add['status_tawaran'] = '21';				
	}else{
			$v_add['status_tawaran'] = '22';
	}
	
	\E::get('obj_curr_module')->attendance_shru($v_add);			
	unset($v_add);

	$v_add['nom_id'] = $_POST['v_id'];
	$v_add['kehadiran'] = $_POST['kehadiran'];

	if($v_add['kehadiran'] == 'hadir'){
			$v_add['status_tawaran'] = '21';				
	}else{
			$v_add['status_tawaran'] = '22';
	}			

	\E::get('obj_curr_module')->attendance_profile($v_add);
		
	header('location: ' . \E::get('obj_curr_module')->build_action_path('attendance','index'));
	exit();
}

// echo \V::load_view( $this->get_view_file_path('menu','share');exit();
\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view();
?>