<?php 

// common menu
echo '<div class="module_common_menu">';
	echo '<table cellpadding="4" cellspacing="0" border="0" width="100%"><tr>';
	if ( ! \E::is_anonymous() ){
		echo '<td align="left">';
			echo $o_kernel_lang->get('WELCOME') . ', ' . \E::get_session('full_name');
		echo '</td>';
		echo '<td align="right">';
			/*$v_path = MOONLIGHT_MODULE_PATH . \E::get('obj_system_module')->get_module_folder() . MOONLIGHT_MODE . '/theme/' . \E::get('obj_system_module')->get_theme() . '/color/';
			$v_arr_colors = \U::get_all_dirs_name( $v_path );
			foreach ( $v_arr_colors as $v_color ){
				$v_temp_icon = \E::get('obj_system_module')->get_image_path( true, $v_color ) . 'color.jpg';
				$v_temp_css = ( \E::get('obj_system_module')->get_theme_color()==$v_color ) ? 'theme_color_selector_selected' : 'theme_color_selector';
				$v_temp_param = \E::get('obj_system_module')->get_codename() . '/' . \E::get('obj_system_module')->get_theme() . '/' . $v_color;
				$v_temp_tips = \E::get('obj_curr_module_lang')->get('THEME_SWITCH_COLOR');
				//$v_param = '';
				echo '<a href="' . \E::get( 'obj_system_module')->build_action_path( 'pref', 'theme', $v_temp_param ) . '" tips="' . $v_temp_tips . '">';
					echo '<img src="'.$v_temp_icon.'" class="' . $v_temp_css . '">';
				echo '</a>';
			}*/
		echo '</td>';
		echo '<td width="100" align="right">';
			//echo '<a href="' . \E::get( 'obj_system_module')->build_action_path('index','workspace') . '">' . $o_kernel_lang->get('HOME') .'</a>';
			//echo ' | ';
			echo  \E::get( 'obj_system_module')->get_logout_tag();
		echo '</td>';
	}else{
		echo '<td align="left">' . \E::get( 'obj_kernel_lang')->get('WELCOME') . '</td>';
	}
	echo '</tr></table>';
echo '</div>';
?>
<script language="javascript">
function dashboard_showhide(){
	toggleDivHideShow('themeBodyLeft');
	if ( document.getElementById('themeBodyLeft') ){
		v_theme_body_left = (document.getElementById('themeBodyLeft').style.display=='none' ? 'HIDE' : 'SHOW' );
		mms_set_pref({ 
						'body_left_hideshow' : v_theme_body_left
					});
	}
}

</script>
<div id="menu_container" >
<table border="0" width="100%" cellpadding="3" cellspacing="0" >
<tr>
	<!--
	<td class="menu_dashboard">
		<a href="javascript:dashboard_showhide()" tips="<?php echo \E::get( 'obj_curr_module_lang')->get('DASHBOARD_ON_OFF_TIPS'); ?>">
		<?php echo \E::get( 'obj_curr_module')->get_image_tag('dashboard.png' ) . \E::get( 'obj_curr_module_lang')->get('DASHBOARD'); ?>
		</a>
	</td>-->
	<td>
		<ul id="main-menu" class="sf-menu">
			<li>
				<?php
				echo '<a href="' . \E::get('obj_system_module')->build_action_path() . '">';
				echo \E::get('obj_system_lang')->get('HOME');
				echo '</a>';
				?>
			</li>
			<li>
				<?php
				echo '<a href="' . \E::get('obj_system_module')->build_action_path('user','list') . '">';
				echo \E::get('obj_system_lang')->get('USERS');
				echo '</a>';
				?>
			</li>
			<li>
				<?php
				echo '<a href="' . \E::get('obj_system_module')->build_action_path('agency','list') . '">';
				echo \E::get('obj_system_lang')->get('AGENCYS');
				echo '</a>';
				?>
			</li>
			<!--<li>
				<?php
				echo '<a href="' . \E::get('obj_system_module')->build_action_path('section', 'list') . '">';
				echo \E::get('obj_system_lang')->get('AGENCY_SECTIONS');
				echo '</a>';
				?>
			</li>-->
		</ul>
	</td>
	<td>
		<br>
	</td>
	<!--<td align="right">
		<?php
					\I::create_input( 
						'text',
						'general_search', 
						'general_search', 
						'', 
						'text', 
						'', 
						\R::get_image_display_path('BTN_SEARCH') 
					);
					//\I::create_button('SEARCH', 'btn_search', 'javascript:void(0)' );
				?>
	</td>-->
</tr>
</table>
</div>