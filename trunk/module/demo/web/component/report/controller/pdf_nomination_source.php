<?php
$v_param = $this->get_param();
$v_by = $v_param[1];
$v_peristiwa = $v_param[2];
if (isset($v_param[3])) {
	$v_keputusan= $v_param[3];
}
$v_source_list=\E::get( 'obj_curr_module')->report_source_list();
if ($v_by=='Race') {
	$v_race_list=\E::get( 'obj_curr_module')->report_race_list();
}else{
	$v_award_list=\E::get( 'obj_curr_module')->report_award_list();
}

$v_var = array( 
				"keputusan" => (isset($v_keputusan)?$v_keputusan:""),
				"peristiwa" => (isset($v_peristiwa)?$v_peristiwa:""),
				"race" => (isset($v_race_list)?$v_race_list:""),
				"award" => (isset($v_award_list)?$v_award_list:""),
				"source" => (isset($v_source_list)?$v_source_list:""),
				"by" => (isset($v_by)?$v_by:""),
				);

\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view('template_blank.php');
?>