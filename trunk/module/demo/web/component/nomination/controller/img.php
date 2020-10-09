<?php
$v_param = $this->get_param();
$v_obj_setting['obj'] = \E::get('obj_curr_module');
$v_file_id = $v_param[0];
$v_force_download = false;
\A::attachment_get($v_obj_setting,$v_file_id,false, false, $v_force_download); 
exit;
// \V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
// \V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
// \V::output_view('template_blank.php');
?>