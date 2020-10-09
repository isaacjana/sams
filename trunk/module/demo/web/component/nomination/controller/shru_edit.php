<?php

$v_var = null;

$v_param = $this->get_param();
$v_id = $v_param[0];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	foreach($_POST as $v_key => $v_value) {
		$_POST[$v_key] = trim($v_value);
	}

	$v_add['nom_id'] = $_POST['v_id'];
	$v_add['nama_penyokong'] = $_POST['nama_penyokong'];
	$v_add['jawatan_penyokong'] = $_POST['jawatan_penyokong'];
	$v_add['penyokong_add1'] = $_POST['alamat_pejabat_penyokong1'];
	$v_add['penyokong_add2'] = $_POST['alamat_pejabat_penyokong2'];
	$v_add['penyokong_add3'] = $_POST['alamat_pejabat_penyokong3'];
	$v_add['penyokong_add4'] = $_POST['alamat_pejabat_penyokong4'];
	$v_add['penyokong_contact'] = $_POST['no_telefon_penyokong'];
	$v_add['penyokong_date'] = \E::get( 'obj_curr_module')->__now();
	$v_add['ulasan_ketua'] = $_POST['ulasan_ketua'];
	$v_add['rekomen_nama'] = $_POST['nama_rekomendasi'];
	$v_add['rekomen_jawatan'] = $_POST['jawatan_rekomendasi'];
	$v_add['rekomen_alamat'] = $_POST['alamat_pejabat_rekomendasi'];
	$v_add['rekomen_tel'] = $_POST['no_telefon_rekomendasi'];
	$v_add['rekomen_komen'] = $_POST['komen_rekomendasi'];
	$v_add['rekomen_date'] = \E::get( 'obj_curr_module')->__now();
	$v_add['_rec_created_on'] = \E::get( 'obj_curr_module')->__now();
	$v_add['_rec_created_by'] = \E::get_session('usr_id');
	$v_add['_rec_status'] = "SHOW";

	$v_usr_id = \E::get('obj_curr_module')->nomination_shru_edit($v_add);
	unset($v_add);
	
	$v_add['nom_status'] = '7';
	$v_add['nom_id'] = $_POST['v_id'];
	\E::get('obj_curr_module')->nomination_penilai_satu_profile($v_add);

	// $v_usr_id[1]='b';

	header('location: ' . \E::get('obj_curr_module')->build_action_path('nomination','shru_nom',$v_usr_id));
	exit();
}

$v_shru_info = \E::get( 'obj_curr_module')->nomination_shru_edit_list( $v_id );
$v_var = array(
				'user_detail' => $v_shru_info,
				'id' => $v_id
			);

\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view();
?>