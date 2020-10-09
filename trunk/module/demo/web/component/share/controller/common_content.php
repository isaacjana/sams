<?php
\V::append_data( 'jquery', \V::load_view( MOONLIGHT_PLUGIN_PATH . 'jquery-3.3.1/moonlight_init.php'  ) );
\V::append_data( 'js', \V::load_view( MOONLIGHT_PLUGIN_PATH . 'jqueryui/moonlight_init.php'  ) );
\V::append_data( 'css', \V::load_view( MOONLIGHT_PLUGIN_PATH . 'popper.js-1.14.4/moonlight_init.php') );
\V::append_data( 'css', \V::load_view( MOONLIGHT_PLUGIN_PATH . 'bootstrap-4.1.3/moonlight_init.php') );
\V::append_data( 'js', \V::load_view( MOONLIGHT_PLUGIN_PATH . 'dhtmlwindow/moonlight_init.php'  ) );
// \V::append_data( 'js', \V::load_view( MOONLIGHT_PLUGIN_PATH . 'jquery.mb.tooltip.1.6/moonlight_init.php') );
\V::append_data( 'js', \V::load_view( MOONLIGHT_PLUGIN_PATH . 'bootadmin/moonlight_init.php' ) );
\V::append_data( 'js', \V::load_view( MOONLIGHT_PLUGIN_PATH . 'font-awesome-5.0.13/moonlight_init.php' ) );

\V::append_data( 'js_page_end', \R::get_js_tag( MOONLIGHT_PLUGIN_FOLDER_PATH, 'shortcut/shortcuts.js' ) );
$v_js_script = '<SCRIPT LANGUAGE="javascript" TYPE="text/javascript">';
if ( \E::get( 'obj_kernel_config' )->get('designer/designer_mode')=='1' ){
	$v_js_script .= 'shortcut("F12", show_moonlight_designer_mode );';
}
$v_js_script .= 'j_lbl_field_required="'. \E::get('obj_kernel_lang')->get('ERR_JS_FIELD_REQUIRED').'";';
$v_js_script .= '</SCRIPT>';
\V::append_data( 'js_page_end', $v_js_script );
?>