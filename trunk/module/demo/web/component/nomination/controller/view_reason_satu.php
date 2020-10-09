<?php

$v_var = null;

$v_param = $this->get_param();
$v_id = $v_param[0];

$v_nom_info = \E::get( 'obj_curr_module')->nomination_shru_reason_satu( $v_id );
$v_var = array(
				'user_detail' => $v_nom_info,
				'id' => $v_id
			);

// echo \V::load_view( $this->get_view_file_path('menu','share');exit();
\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view();
?>