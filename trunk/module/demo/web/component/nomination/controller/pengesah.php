<?php

$v_var = null;

$v_param = $this->get_param();
$v_id = $v_param[0];

$v_nom_info = \E::get( 'obj_curr_module')->nomination_user_detail( $v_id );
$v_nom_info_two = \E::get( 'obj_curr_module')->nomination_user_detail_penilai_satu( $v_id );
$v_nom_info_three = \E::get( 'obj_curr_module')->nomination_user_detail_penilai_dua( $v_id );
$v_nom_info_four = \E::get( 'obj_curr_module')->nomination_user_pengesah( $v_id );
$v_award = \E::get( 'obj_curr_module')->nomination_get_award();
$v_val['nom_id'] = $v_id;
$v_att_doc=\E::get('obj_curr_module')->nomination_get_att_doc($v_val);
$v_var = array(
				'user_detail' => $v_nom_info,
				'user_detail_penilai' => $v_nom_info_two,
				'user_detail_penilai_two' => $v_nom_info_three,
				'user_detail_penilai_three' => $v_nom_info_four,
				"award" => (isset($v_award)? $v_award: ""),
				'att_doc' => (isset($v_att_doc[0])? $v_att_doc[0]: ""),
				'id' => $v_id
);


if($_SERVER['REQUEST_METHOD'] == 'POST') {
	foreach($_POST as $v_key => $v_value) {
		$_POST[$v_key] = trim($v_value);
	}

		$v_add['val_hid'] = $_POST['val_hid'];

		if($v_add['val_hid'] == 'ADD'){
			$v_add['nom_id'] = $_POST['v_id'];
			$v_add['syarat1'] = $_POST['syarat1'];
			$v_add['syarat2'] = $_POST['syarat2'];
			$v_add['syarat3'] = $_POST['syarat3'];
			$v_add['syarat4'] = $_POST['syarat4'];
			$v_add['syarat5'] = $_POST['syarat5'];
			$v_add['syarat6'] = $_POST['syarat6'];
			$v_add['syarat7'] = $_POST['syarat7'];
			$v_add['syarat8'] = $_POST['syarat8'];
			$v_add['komen_penilai'] = $_POST['komen'];
			$v_add['penilai_remarks'] = $_POST['penilai_remarks'];

			if($v_add['komen_penilai'] == 'kiv'){
					$v_add['nom_status'] = '16';				
			}elseif($v_add['komen_penilai'] == 'disokong'){
					$v_add['nom_status'] = '10';
			}else{
					$v_add['nom_status'] = '13';
			}
			
			\E::get('obj_curr_module')->nomination_pengesah($v_add);			
			unset($v_add);

			$v_add['nom_id'] = $_POST['v_id'];
			$v_add['komen_penilai'] = $_POST['komen'];
			$v_add['awd_type_id'] = $_POST['nama_pingat'];

			if($v_add['komen_penilai'] == 'kiv'){
					$v_add['nom_status'] = '16';				
			}elseif($v_add['komen_penilai'] == 'disokong'){
					$v_add['nom_status'] = '10';
			}else{
					$v_add['nom_status'] = '13';
			}			

			\E::get('obj_curr_module')->nomination_pengesah_profile($v_add);
		}else{

			$v_add['nom_id'] = $_POST['v_id'];
			$v_add['syarat1'] = $_POST['syarat1'];
			$v_add['syarat2'] = $_POST['syarat2'];
			$v_add['syarat3'] = $_POST['syarat3'];
			$v_add['syarat4'] = $_POST['syarat4'];
			$v_add['syarat5'] = $_POST['syarat5'];
			$v_add['syarat6'] = $_POST['syarat6'];
			$v_add['syarat7'] = $_POST['syarat7'];
			$v_add['syarat8'] = $_POST['syarat8'];
			$v_add['komen_penilai'] = $_POST['komen'];
			$v_add['penilai_remarks'] = $_POST['penilai_remarks'];
			
			if($v_add['komen_penilai'] == 'kiv'){
					$v_add['nom_status'] = '16';				
			}elseif($v_add['komen_penilai'] == 'disokong'){
					$v_add['nom_status'] = '10';
			}else{
					$v_add['nom_status'] = '13';
			}
			
			\E::get('obj_curr_module')->nomination_pengesah_edit($v_add);			
			unset($v_add);

			$v_add['nom_id'] = $_POST['v_id'];
			$v_add['komen_penilai'] = $_POST['komen'];
			$v_add['awd_type_id'] = $_POST['nama_pingat'];

			if($v_add['komen_penilai'] == 'kiv'){
					$v_add['nom_status'] = '16';				
			}elseif($v_add['komen_penilai'] == 'disokong'){
					$v_add['nom_status'] = '10';
			}else{
					$v_add['nom_status'] = '13';
			}		

			\E::get('obj_curr_module')->nomination_pengesah_profile($v_add);
		}
			
		header('location: ' . \E::get('obj_curr_module')->build_action_path('nomination','pengesah_nom'));
		exit();
}

\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view();
?>