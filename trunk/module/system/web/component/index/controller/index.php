<?php$v_var = 	array(				"index" => "Here is index page"			);\V::clear_data( 'body_left');\V::clear_data( 'body_right');\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );\V::output_view();?>