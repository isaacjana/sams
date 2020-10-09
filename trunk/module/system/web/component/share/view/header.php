<?php
echo '<table border=0 cellspacing="0" cellpadding="0" width="100%">';
echo '<tr width="100%">';
echo '<td width="1%">' . \E::get( 'obj_curr_module')->get_image_tag( 'header_left.jpg', true ) . '</td>';
echo '<td width="98%" background="' . \E::get( 'obj_curr_module')->get_image_path( true ) . 'header_center.jpg"><br></td>';
echo '<td width="1%">' . \E::get( 'obj_curr_module')->get_image_tag( 'header_right.jpg', true ) . '</td>';
echo '</tr></table>';
?>