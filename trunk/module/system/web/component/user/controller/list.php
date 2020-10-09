<?PHP
//include $this->get_controller_file_path( 'calendar_setting', 'index' );

$v_var = null;

\V::append_data( 'header', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
\V::append_data( 'body', \V::load_box( \E::get( 'obj_system_lang')->get('USERS'), \V::load_view( $this->get_view_file_path(), $v_object, $v_var ), 'box_form.php' )  );
//\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var )  );

\V::output_view();
?>