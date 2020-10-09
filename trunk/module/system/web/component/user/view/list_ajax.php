<table>
<tr>
	<td>
		<label for="usr_name"><?php echo \E::get('obj_curr_module_lang')->get('USER_NAME'); ?></label>
	</td>
	<td>
	<?php
	\I::create_input( 
		'text',
		'usr_name', 
		'usr_name', 
		\U::safe_display_string(isset($v_param['usr_name']) ? $v_param['usr_name'] : ""), 
		'text', 
		'style="width:500px;"',
		''
	);
	?>
	</td>
</tr>
<tr>
	<td>
		<label for="usr_email"><?php echo \E::get('obj_curr_module_lang')->get('USER_EMAIL'); ?></label>
	</td>
	<td>
	<?php
	\I::create_input( 
		'text',
		'usr_email', 
		'usr_email', 
		\U::safe_display_string(isset($v_param['usr_email']) ? $v_param['usr_email'] : ""), 
		'text', 
		'style="width:500px;"',
		''
	);
	?>
	</td>
</tr>
<tr>
	<td>
		<label for="usr_from"><?php echo \E::get('obj_curr_module_lang')->get('USER_FROM'); ?></label>
	</td>
	<td valign="middle">
		<select name='usr_from' id='usr_from' >
		<?PHP
			echo "<option value=''>".\E::get('obj_kernel_lang')->get('ALL')."</option>";
			/*echo "<option value='mms_common' ".
				(isset($v_param['usr_from']) && $v_param['usr_from'] =='mms_common' ? "selected" : ''  )." >".
				\E::get('obj_system_lang')->get('USER_FROM_MMS_COMMON')."</option>";*/
			echo "<option value='imp' ".
				(isset($v_param['usr_from']) && $v_param['usr_from'] =='imp' ? "selected" : ''  )." >".
				\E::get('obj_system_lang')->get('USER_FROM_IMP')."</option>";
			echo "<option value='system' ".
				(isset($v_param['usr_from']) && $v_param['usr_from'] =='system' ? "selected" : ''  )." >".
				\E::get('obj_system_lang')->get('USER_FROM_NON_SARAWAKNET')."</option>";
			echo "<option value='mms_participant' ".
				(isset($v_param['usr_from']) && $v_param['usr_from'] =='mms_participant' ? "selected" : ''  )." >".
				\E::get('obj_system_lang')->get('USER_FROM_PARTICIPANT')."</option>";
			echo "<option value='ldap' ".
				(isset($v_param['usr_from']) && $v_param['usr_from'] =='ldap' ? "selected" : ''  )." >".
				\E::get('obj_system_lang')->get('USER_FROM_SWK_LDAP')."</option>";
		?>
		</select>
	</td>  
</tr>
<tr>
	<td></td>
	<td>
		<input type="checkbox" name="usr_comm" id="usr_comm" value="1" <?PHP echo (isset($v_param['usr_comm']) && $v_param['usr_comm'] =='1' ? "checked" : ''  );?> />
		<label for="usr_comm"><?PHP print \E::get('obj_system_lang')->get('USER_SHOW_MMS_COMMON_ONLY'); ?></label>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<?PHP
			\I::create_button('SEARCH', 'btn_search', 'javascript:search()' );
			if($v_param['usr_name'] != '' || $v_param['usr_email'] != '' || ($v_param['usr_from'] != '')){
				\I::create_button('CLEAR_RESULT', 'btn_search', 'javascript:rec_list(\'\')' );
			}
		?>
	</td>  
</tr>

</table>
<?PHP
	echo \U::display_paging($o_kernel_lang, $v_total_rec, $v_row_per_page , $v_param['page'], 'rec_list', $v_param['paging'] );
?>

<table cellpadding="0" cellspacing="0" border="0" class="record_listing" width="100%">
	<thead>
		<tr>
			<th width="5%">
				<?php echo \E::get( 'obj_kernel_lang')->get('TBL_NO')?>
			</th>
			<th width="100px" <?php echo ($v_param['order_by']=='userName') ? 'class="sortColumn"' : ''; ?>>
				<a href="javascript:rec_list('<?php echo $_SERVER['REDIRECT_URL'].$v_param['toggle']; ?>&order_by=userName')">
				<?php 
					echo \E::get( 'obj_system_lang')->get('USER_NAME');
					if ($v_param['order_by']=='userName'){
						print " ".$v_param['sort_img'];
					}
				
				?>
				</a>
			</th>
			<!-- <th><?php echo \E::get( 'obj_system_lang')->get('USER_AGENCY'); ?></th> -->
			<th><?php echo \E::get( 'obj_system_lang')->get('USER_EMAIL');  ?></th>
			<th width="80px"><?php echo \E::get( 'obj_system_lang')->get('ACTION')?></th>
		</tr>
	</thead>
	<tbody>
	<?PHP
		if($v_user_list_info && is_array($v_user_list_info)){
			$v_count = $v_page_num + 1;
			foreach($v_user_list_info as $v_row){
				$v_class = ( $v_count%2 == 1 ) ? "odd" : "normal";
				
				//===========Access Right======================//
				/*$v_access_read = \E::get('obj_curr_module')->get_right_to_access($v_ag_id, $v_ad_id, $v_row['mtg_id'],'READ','group_mtg');
				$v_access_edit = \E::get('obj_curr_module')->get_right_to_access($v_ag_id, $v_ad_id, $v_row['mtg_id'],'EDIT','group_mtg');
				$v_access_delete = \E::get('obj_curr_module')->get_right_to_access($v_ag_id, $v_ad_id, $v_row['mtg_id'],'DELETE','group_mtg');*/
			
				echo '<tr 
					class="'.$v_class.'"" 
					id="row'.$v_count.'"
					onMouseOver="record_listing_highlight( this, \'highlight\' )"
					onMouseOut ="record_listing_highlight( this, \'' . $v_class . '\' )"
					onClick    ="record_listing_click_tr ( this, \'' . $v_class . '\', \'chkRow'.$v_count.'\' )"
					ondblclick = "window.location=\''.\E::get('obj_system_module')->build_action_path('user','view',$v_row['usr_id']).'\'"
				
				>';
				echo '<td align="center">' . $v_count . '</td>';
				echo '<td align="left">' . 
						'<a href="'.\E::get('obj_system_module')->build_action_path('user','view',$v_row['usr_id']).'" >'.
						\E::get('obj_system_module')->user($v_row['usr_id'],$v_row['full_name']). 
						'</a>'.
						'</td>';
				// echo '<td align="left">' . \U::safe_display_string($v_row['kwd_value'] != '' ? $v_row['kwd_value'] : '-') . '</td>';
				echo '<td align="left">' . \U::safe_display_string($v_row['usr_email'] != '' ? $v_row['usr_email'] : '-') . '</td>';
					
					//if($v_access_read || $v_access_edit || $v_access_delete){
					echo '<td align="center" valign="top" >';
						//if($v_access_read)
						echo \R::get_image_tag( "BTN_READ", 'vertical-align:middle;cursor:pointer; ', 'tips=\'Read\' onclick="window.location=\''.\E::get('obj_system_module')->build_action_path('user','view',$v_row['usr_id']).'\'"' );
						echo ' ';
						
						//if($v_access_edit)
						//if(strtoupper($v_row['usr_from']) != 'IMP'){
							echo \R::get_image_tag( "BTN_EDIT", 'vertical-align:middle;cursor:pointer;', 'tips=\'Edit\' onclick="window.location=\''.\E::get( 'obj_system_module')->build_action_path('user','edit',$v_row['usr_id']).'\'"' );
							echo ' ';
						//}
						
						//if($v_access_delete)
						/*echo \R::get_image_tag( "BTN_DELETE", 'vertical-align:middle;cursor:pointer;', 'tips=\'Delete\' onclick="del_confirm(\''.\U::safe_display_string($v_row['mtg_id']).'\')"' );*/
						
					echo '</td>';
					//}
				echo '</tr>';
				
				++$v_count;
			}
		}else{
			echo '<tr><td colspan="7" align="center">'. \E::get( 'obj_kernel_lang')->get('MSG_NO_RECORD_FOUND') . '</td></tr>';
		}
	?>
	</tbody>
</table>
<?PHP
\I::load_error();
?>