<?php
/*
echo '<div style="text-align:center; padding:4px;">';
echo \E::get( 'obj_curr_module')->get_fullname() . '&nbsp;' . \E::get( 'obj_curr_module')->get_version() . '<br/>';
echo '</div>';
*/

echo '<div style="padding:10px; float:left;">' . $o_kernel_lang->get('SITE_BEST_WEB_BROWSER') . '</div>';
if ( $o_kernel_config->get('sarawaknet/uses_sarawaknet_feedback_form')=='1' ){
	echo '<div style="padding:10px; float:right;"><a href="' . \U::get_sarawaknet_feedback_url( \E::get('obj_curr_module') ) . '" tips="' . $o_kernel_lang->get('FEEDBACK_TIPS') . '" >' . $o_kernel_lang->get('FEEDBACK') . '</a></div>';
}
echo '<div style="clear:both;"></div>';
echo '<div class="module_footer_extra"><br></div>';

?>