<?php
$v_param = $this->get_param();
$v_by = $v_param[0];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$v_val[0]='pdf_senarai_ringkas';
	$v_val[1]=$_POST['Peristiwa'];
	$v_val[2]=$_POST['Keputusan'];
	$v_val[3]=$_POST['Award'];
	$v_val[4]=$_POST['Parti'];
	header('location: ' . \E::get('obj_curr_module')->build_action_path('share','pdf_landscape',$v_val));
	exit();
}


$v_peristiwa_list=\E::get( 'obj_curr_module')->report_peristiwa_list();
$v_pingat_list=\E::get( 'obj_curr_module')->report_pingat_list();
$v_parti_list=\E::get( 'obj_curr_module')->report_parti_list();
$v_var = array( 
				"peristiwa_list" => (isset($v_peristiwa_list)?$v_peristiwa_list:""),
				"pingat_list" => (isset($v_pingat_list)?$v_pingat_list:""),
				"parti_list" => (isset($v_parti_list)?$v_parti_list:""),
				"by" => (isset($v_by)? $v_by: "")
				);


// echo \V::load_view( $this->get_view_file_path('menu','share');exit();
\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view();
?>