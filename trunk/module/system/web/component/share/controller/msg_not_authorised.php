<?PHP

\V::append_data( 'body_style', 'text-align:center;' );
\V::append_data( 'body', \V::load_box( 
									NULL, 
									\V::load_view( $this->get_view_file_path(), $v_object, $v_var ),
									'box_form.php',
									'50%',
									'system',
									\E::get( 'obj_system_module')->get_theme(),
									\E::get( 'obj_system_module')->get_theme_color()

								)); 
// \V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );


\V::output_view( 'template_iframe.php', 'system', \E::get( 'obj_system_module')->get_theme() );
?>