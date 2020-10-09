<table border="0" cellpadding="3" cellspacing="0">
	<tr>
		<td width="1%" valign="top">
			<?php echo \E::get( 'obj_curr_module')->get_image_tag('user.png', false, 'width:32px;') ?>
		</td>
		<td>
			<div style="font-size:12px;font-weight:bold;"><?php echo \E::get('obj_system_module')->user( $_SESSION['usr_id'], $_SESSION['full_name'] ); ?></div>
			<?php
				$v_mod_code_name = \E::get('obj_curr_module')->get_codename();
				$v_ag_id = \E::get_session($v_mod_code_name.'/curr_select_agency');
				$v_ad_id = \E::get_session($v_mod_code_name.'/curr_select_dept');
				unset($v_cond);
				unset($v_order);
				$v_order[0]['order_by'] = 'role_id';
				$v_order[0]['sort_by'] = 'ASC';
				$v_member_info = \E::get( 'obj_curr_module')->profile_involve($v_ag_id,$v_ad_id,null,$v_order);
				if(is_array($v_member_info)){
					foreach($v_member_info as $v_row){
						$v_pro_inv[$v_row['role_id']] = (isset($v_pro_inv[$v_row['role_id']]) ? 
							($v_pro_inv[$v_row['role_id']] +1) : 1);
					}
				}
				
				/*print '<pre>';
					print_r($v_pro_inv);
				print '</pre>';*/
				
				if ( \E::get('obj_curr_module')->is_offline_mode() ){
					// do nothing
				}else{
					$v_role_info = \E::get( 'obj_curr_module')->role_get();
					
					foreach( $v_role_info as $v_row ){
						//$v_member_info = \E::get( 'obj_curr_module')->profile_involve($v_ag_id,$v_ad_id,$v_row['kwd_code'] );
						//if ( isset( $v_member_info ) && is_array( $v_member_info ) ){
						if ( isset( $v_pro_inv[$v_row['kwd_code']] ) ){
							//echo '<fieldset>';
							//echo '<legend><b>' . $v_row['kwd_value'] . '</b></legend>';
							
							$v_tips = \E::get('obj_curr_module_lang')->get('USER_ROLES_IN_NTH_MEETING_PROFILE');
							$v_tips = str_replace( '<ROLE>', $v_row['kwd_value'], $v_tips );
							$v_tips = str_replace( '<TOTAL>', count($v_member_info), $v_tips );
							
							echo '<br/><li class="profile_title sub_menu" style="line-height:1.8em">';
							$v_pas_param[0] = $v_ag_id;
							$v_pas_param[1] = $v_ad_id;
							$v_pas_param[2] = $v_row['kwd_code'];
							$v_link = \E::get('obj_curr_module')->build_action_path('profile','involve',$v_pas_param);
							echo '<a href="'.$v_link.'" tips="' . $v_tips .  '">';
							echo $v_row['kwd_value'];
							echo '&nbsp;&nbsp;';
							//echo '<span class="figure">'.count($v_member_info).'</span>';
							echo '<span class="figure">'.$v_pro_inv[$v_row['kwd_code']].'</span>';
							echo '</li>';
							echo '</a>';
						}
					}
					unset($v_pas_param);
					//\I::create_button( 'NORMAL', 'btn_profile_edit', '', \E::get( 'obj_curr_module')->get_image_tag('edit.png'), 'Update my profile' );
				}
			?>
			
		</td>
	</tr>
</table>
<!--
<table>
<tr>
	<td>
	<?PHP
		$v_post = \E::get_session(\E::get('obj_curr_module')->get_codename().'/agency');
		if(is_array($v_post)){
			foreach($v_post as $v_row){
				unset($v_cond);
				$v_cond['ag_id'] = $v_row['ag_id'];
				$v_agency_info = \E::get('obj_system_module')->agency_get($v_cond);
		
				unset($v_cond);
				$v_cond['ag_id'] = $v_row['ag_id'];
				$v_cond['ad_id'] = $v_row['ad_id'];
				$v_dept_info = \E::get('obj_system_module')->agency_dept_get($v_cond);
				
				//print $v_agency_info['kwd_value'].', '.$v_dept_info['kwd_value'].'<br/><br/>';
				//print $v_agency_info['kwd_short_name'].', '.$v_dept_info['kwd_short_name'].'<br/><br/>';
				$v_mod_code_name = \E::get('obj_curr_module')->get_codename();
				$v_bg_color = '';
				if($v_row['ag_id']==\E::get_session($v_mod_code_name.'/curr_select_agency') 
					&& $v_row['ad_id']==\E::get_session($v_mod_code_name.'/curr_select_dept')  ){
					$v_bg_color = 'background:#01356E;';
				}
				print '<div style="padding:2px;'.$v_bg_color.'">';
				print $v_agency_info['kwd_short_name'] != '' ? $v_agency_info['kwd_short_name'] : $v_agency_info['kwd_value'];
				if($v_row['ad_id'] != 'hq'){
					print ', ';
					print $v_dept_info['kwd_short_name'] != '' ? $v_dept_info['kwd_short_name'] : $v_dept_info['kwd_value'];
				}
				print '</div>';
			}
		}
	?>
	</td>
</tr>
</table>
-->