<?php
// Modified from tcpdf output function

header('Cache-Control: public, must-revalidate, max-age=0'); // HTTP/1.1
header('Pragma: public');
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
// force download dialog
header('Content-Type: application/force-download');
header('Content-Type: application/octet-stream', false);
header('Content-Type: application/download', false);
header('Content-Type: application/pdf', false);
// use the Content-Disposition header to supply a recommended filename
header('Content-Disposition: attachment; filename="'.$v_name.'.pdf";');
header('Content-Transfer-Encoding: binary');

echo $v_pdf_content;
?>