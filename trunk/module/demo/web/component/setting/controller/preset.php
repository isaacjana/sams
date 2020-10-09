<?php

$v_doc_version = \E::get('obj_curr_module')->setting_doc_version();

$v_var['doc_version']=$v_doc_version;

\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view();
?>