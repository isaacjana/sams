<?php
$v_param['pingat'] = ( !isset($_GET['pingat']) || $_GET['pingat'] == '' ) ? '' : $_GET['pingat'];
$v_param['no_folio'] = ( !isset($_GET['no_folio']) || $_GET['no_folio'] == '' ) ? '' : $_GET['no_folio'];

$v_singkatan = \E::get( 'obj_curr_module')->nomination_get_singkatan($v_param['pingat']);

$v_var = array( 
				"singkatan" => (isset($v_singkatan['awd_acronym'])? $v_singkatan['awd_acronym']: ""),
				"no_folio" => (isset($v_param['no_folio'])? $v_param['no_folio']: ""),
				"param" => $v_param
				);

\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var )  );
\V::output_view('template_blank.php');
?>