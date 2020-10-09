<?php

$v_param = $this->get_param();
$v_id = $v_param[0];

$v_nom_info = \E::get( 'obj_curr_module')->nomination_user_detail( $v_id );
$v_get_markah_prestasi = \E::get( 'obj_curr_module')->nomination_get_markah_prestasi( $v_id );
$v_get_apc = \E::get( 'obj_curr_module')->nomination_get_apc( $v_id );
$v_get_overmark = \E::get( 'obj_curr_module')->nomination_get_overmark( $v_id );
$v_get_history_success = \E::get( 'obj_curr_module')->nomination_get_history_success( $v_id );
$v_get_history_x_success = \E::get( 'obj_curr_module')->nomination_get_history_x_success( $v_id );
$v_get_activity = \E::get( 'obj_curr_module')->nomination_get_activity( $v_id );
$v_get_association = \E::get( 'obj_curr_module')->nomination_get_association( $v_id );
$v_get_volunteer = \E::get( 'obj_curr_module')->nomination_get_volunteer( $v_id );
$v_get_sport = \E::get( 'obj_curr_module')->nomination_get_sport( $v_id );
$v_get_position = \E::get( 'obj_curr_module')->nomination_get_position( $v_id );
$v_get_politic = \E::get( 'obj_curr_module')->nomination_get_politic( $v_id );
$v_get_sumbangan_jabatan = \E::get( 'obj_curr_module')->nomination_get_sumbangan_jabatan( $v_id );
$v_get_sumbangan_masyarakat = \E::get( 'obj_curr_module')->nomination_get_sumbangan_masyarakat( $v_id );
$v_get_sumbangan_negeri = \E::get( 'obj_curr_module')->nomination_get_sumbangan_negeri( $v_id );
$v_get_sumbangan_negara = \E::get( 'obj_curr_module')->nomination_get_sumbangan_negara( $v_id );
$v_get_penghargaan_dianugerah = \E::get( 'obj_curr_module')->nomination_get_penghargaan_dianugerah( $v_id );


$v_var = array(
				'user_detail' => $v_nom_info,
				'markah_prestasi' => $v_get_markah_prestasi,
				'apc' => $v_get_apc,
				'overmark' => $v_get_overmark,
				'history_success' => $v_get_history_success,
				'history_x_success' => $v_get_history_x_success,
				'activity' => $v_get_activity,
				'association' => $v_get_association,
				'volunteer' => $v_get_volunteer,
				'sport' => $v_get_sport,
				'position'=> $v_get_position,
				'politic' => $v_get_politic,
				'sumbangan_jabatan' => $v_get_sumbangan_jabatan,
				'sumbangan_masyarakat' => $v_get_sumbangan_masyarakat,
				'sumbangan_negeri' => $v_get_sumbangan_negeri,
				'sumbangan_negara' => $v_get_sumbangan_negara,
				'penghargaan_dianugerah' => $v_get_penghargaan_dianugerah,
				'id' => $v_id
			);

\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view("template_blank.php");
?>