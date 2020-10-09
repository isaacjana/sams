<?php

$short_list_info = \E::get( 'obj_curr_module')->shortlist_user_list();

$v_var = array( 
				"short_list_info" => (isset($short_list_info)? $short_list_info: "")
				);

// echo \V::load_view( $this->get_view_file_path('menu','share');exit();
\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view();
?>