<?php
$v_param = $this->get_param();
$v_by = $v_param[0];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$v_val[0]='pdf_nomination_source';
	$v_val[1]=$v_by;
	$v_val[2]=$_POST['Peristiwa'];
	$v_val[3]=$_POST['Keputusan'];
	header('location: ' . \E::get('obj_curr_module')->build_action_path('share','pdf_landscape',$v_val));
	exit();
}
$v_peristiwa_list=\E::get( 'obj_curr_module')->report_peristiwa_list();
$v_var = array( 
				"peristiwa_list" => (isset($v_peristiwa_list)?$v_peristiwa_list:""),
				"by" => (isset($v_by)? $v_by: "")
				);
// echo \V::load_view( $this->get_view_file_path('menu','share');exit();
\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view();
?>