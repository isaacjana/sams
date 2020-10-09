<?php
$v_var = null;

$v_param = $this->get_param();
$v_id = $v_param[0];

$v_user_info = \E::get( 'obj_curr_module')->setting_user_detail( $v_id );
$v_var = array(
				'user_detail' => $v_user_info,
				'id' => $v_id
			);

if($v_user_acl_infor = \E::get( 'obj_curr_module')->setting_user_acl_get($v_id)){
	$v_user_group = \E::get( 'obj_curr_module')->setting_user_group_get($v_user_acl_infor);
	$v_var['usr_group']=$v_user_group;
}


\V::append_data( 'menu', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ));
\V::output_view();
?>