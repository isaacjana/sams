<?php
$v_param = $this->get_param();
$v_id = $v_param[0];

// $v_var['id'] = $v_id;


$v_letter_head = \E::get( 'obj_curr_module')->shortlist_get_letter_head();
$v_nom_profile = \E::get( 'obj_curr_module')->shortlist_detail($v_id);
$v_get_pingat = \E::get( 'obj_curr_module')->nomination_get_awd_type( $v_nom_profile['awd_type_id'] );


$v_var = array( 
				"pingat" => (isset($v_get_pingat)? $v_get_pingat: ""),
				"nom_profile" => (isset($v_nom_profile)? $v_nom_profile: ""),
				"id" => (isset($v_id)? $v_id: ""),
				"letter_head" => (isset($v_letter_head)? $v_letter_head: "")
				);

// echo \V::load_view( $this->get_view_file_path('menu','share');exit();
\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view('template_blank.php');
?>