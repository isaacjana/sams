<?php\E::set_session('url_login_cancel', $_SERVER['REQUEST_URI'] );\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ));\V::output_view( 'template_login.php' );?>