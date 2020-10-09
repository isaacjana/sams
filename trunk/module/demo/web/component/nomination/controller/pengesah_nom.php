<?php

$nom_list_pengesah_info = \E::get( 'obj_curr_module')->nomination_penilai_pengesah_list();

$v_var = array( 
				"nom_list_pengesah_info" => (isset($nom_list_pengesah_info)? $nom_list_pengesah_info: "")
				);

\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view();
?>