<?php

$v_var = null;

$v_param = $this->get_param();
$v_id = $v_param[0];

$v_short_info = \E::get( 'obj_curr_module')->shortlist_detail( $v_id );
$v_val['nom_id'] = $v_id;
$v_att_doc=\E::get('obj_curr_module')->nomination_get_att_doc($v_val);
$v_award = \E::get( 'obj_curr_module')->shortlist_get_award();
$v_var = array(
				'user_detail' => $v_short_info,
				"award" => (isset($v_award)? $v_award: ""),
				'att_doc' => (isset($v_att_doc[0])? $v_att_doc[0]: ""),
				'id' => $v_id
			);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	foreach($_POST as $v_key => $v_value) {
		$_POST[$v_key] = trim($v_value);
	}

		
	$v_add['nom_id'] = $_POST['varid'];
	$v_add['tarikh_keputusan'] = $_POST['tarikh_keputusan'];
	$v_add['meet_stat'] = $_POST['meet_stat'];
	$v_add['meeting_remarks'] = $_POST['meeting_remarks'];

	if($v_add['meet_stat'] == 'lulus'){
			$v_add['meeting_status'] = '17';				
	}else{
			$v_add['meeting_status'] = '18';
	}
	
	\E::get('obj_curr_module')->shortlist_shru($v_add);			
	unset($v_add);

	$v_add['nom_id'] = $_POST['varid'];
	$v_add['meet_stat'] = $_POST['meet_stat'];
	$v_add['awd_type_id'] = $_POST['nama_pingat'];

	if($v_add['meet_stat'] == 'lulus'){
			$v_add['meeting_status'] = '17';				
	}else{
			$v_add['meeting_status'] = '18';
	}			

	\E::get('obj_curr_module')->shortlist_shru_profile($v_add);
		
	header('location: ' . \E::get('obj_curr_module')->build_action_path('shortlist','index'));
	exit();
}

\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view();
?>