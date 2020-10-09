<?php
$v_param['borang'] = ( !isset($_GET['borang']) || $_GET['borang'] == '' ) ? '' : $_GET['borang'];

$v_var = array( 
				"param" => $v_param
				);

\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var )  );
\V::output_view('template_blank.php');
?>