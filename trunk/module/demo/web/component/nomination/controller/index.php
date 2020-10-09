<?php

$v_var = null;

$v_param = $this->get_param();
$v_id = '1';

$v_nom_info = \E::get( 'obj_curr_module')->nomination_get_tarikh( $v_id );

$nom_list_info = \E::get( 'obj_curr_module')->nomination_user_list();
$v_new_nom_id = \E::get( 'obj_curr_module')->nomination_new_nom_id();
$v_new_nom[0] = (isset($v_new_nom_id)? $v_new_nom_id: "1");
$v_new_nom[1] = 'l';
// $v_sender = $nom_list_info['nom_email'];
$v_sender = 'afiq@softworld.com.my';
$v_to = 'softworldt@gmail.com';
$v_message = "Hi,

Please be informed that a nomination was submitted in SAMS. The details as follows:

No. Folio: ".$nom_list_info['nom_folio_no']." 
Nama: ".$nom_list_info['nom_name']."
Tarikh Dicadang: ".$nom_list_info['_rec_created_on']." ";

$v_var = array( 
				"nom_list_info" => (isset($nom_list_info)? $nom_list_info: ""),
				"new_nom_id" => $v_new_nom,
				'user_detail' => $v_nom_info,
				'sender' => $v_sender,
				'to' => $v_to,
				'message' => $v_message


				);

\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view();
?>