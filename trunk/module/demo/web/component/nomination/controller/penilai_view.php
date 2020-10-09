<?php

$v_var = null;

$v_param = $this->get_param();
$v_id = $v_param[0];

$v_nom_info = \E::get( 'obj_curr_module')->nomination_user_detail( $v_id );
$v_nom_info_two = \E::get( 'obj_curr_module')->nomination_user_detail_penilai_satu( $v_id );
$v_val['nom_id'] = $v_id;
$v_att_doc=\E::get('obj_curr_module')->nomination_get_att_doc($v_val);
$v_var = array(
				'user_detail' => $v_nom_info,
				'user_detail_penilai' => $v_nom_info_two,
				'att_doc' => (isset($v_att_doc[0])? $v_att_doc[0]: ""),
				'id' => $v_id
			);



\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view();
?>