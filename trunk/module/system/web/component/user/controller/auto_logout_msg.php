<?PHP
// \V::clear_data( 'body_left' );
// \V::clear_data( 'body_right' );

$v_cond['usr_id'] = \E::get_session('usr_id');
$v_result = \E::get('obj_system_module')->single_session_login_get($v_cond);

\U::print_arr($v_result);

\V::append_data( 'body_style', 'text-align:center;' );
\V::append_data( 'body', \V::load_box( 
									NULL, 
									\V::load_view( $this->get_view_file_path(), $v_object, $v_var ),
									'box_login.php',
									'50%',
									'system',
									\E::get( 'obj_system_module')->get_theme(),
									\E::get( 'obj_system_module')->get_theme_color()

								) 
);
\V::output_view( 'template.php', 'system', \E::get( 'obj_system_module')->get_theme() );
?>