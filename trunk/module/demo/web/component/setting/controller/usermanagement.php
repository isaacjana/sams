<?php
$user_list_info = \E::get( 'obj_curr_module')->setting_user_list();

$v_var = array( 
				"user_list_info" => (isset($user_list_info)? $user_list_info: "")
				);

\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view();
?>