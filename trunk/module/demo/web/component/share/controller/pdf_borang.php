<?php
$v_param = $this->get_param();
$v_print = $v_param[0];
$v_id = $v_param[1];

$v_url = \E::get('obj_curr_module')->build_action_path('nomination', $v_print, $v_id);
$v_var['name'] = 'PDF_'.date("Ymd");
$v_executed_param = "-n --disable-external-links --disable-internal-links";
$v_pdf_content = \U::convert_html_to_pdf($v_url, true, $v_executed_param);

$v_var['pdf_content'] = $v_pdf_content['content'];
\V::append_data( 'body', \V::load_view( $this->get_view_file_path("pdf_borang"), $v_object, $v_var ) );
\V::output_view("template_blank.php");
?>