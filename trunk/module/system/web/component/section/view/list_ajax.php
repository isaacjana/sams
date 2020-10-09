<table>
<tr>
	<td>
		<label for="ag_name"><?php echo \E::get('obj_curr_module_lang')->get('AGENCY'); ?></label>
	</td>
	<td>
	<?PHP
		$v_post = \E::get_session('position');
		$v_default_search_ag = '';
		if(is_array($v_post)){
			echo '<select name="search_agency" id="search_agency" class="text">';
			foreach($v_post as $v_row){
				if($v_default_search_ag == ''){
					$v_default_search_ag = $v_row['ag_id'].'@@'.$v_row['ad_id'];
				}
				unset($v_cond);
				$v_cond['ag_id'] = $v_row['ag_id'];
				$v_agency_info = \E::get('obj_system_module')->agency_get($v_cond);
		
				unset($v_cond);
				$v_cond['ag_id'] = $v_row['ag_id'];
				$v_cond['ad_id'] = $v_row['ad_id'];
				$v_dept_info = \E::get('obj_system_module')->agency_dept_get($v_cond);
				
				$v_selected = ($v_row['ag_id'].'@@'.$v_row['ad_id']) == $v_param['search_agency']  ? 'selected' : '';
				print '<option value="'.$v_row['ag_id'].'@@'.$v_row['ad_id'].'" '.$v_selected.'>';
					print \E::get('obj_system_module')->agency_display( $v_agency_info['kwd_value'], $v_agency_info['kwd_short_name'] );
					if($v_row['ad_id'] != 'hq'){
						print ', ';
						print \E::get('obj_system_module')->dept_display( $v_dept_info['kwd_value'], $v_dept_info['kwd_short_name'] );
					}
				print '</option>';
			}
			/*$v_selected = ('@@') == $v_param['search_agency']  ? 'selected' : '';
			print '<option value="@@" '.$v_selected.'>';
				print \E::get('obj_curr_module_lang')->get('COMBO_OTHER_AGENCY');
			echo '</option>';*/
			echo '</select>';
		}
	?>
	</td>
</tr>
<tr>
	<td>
		<label for="sec_name"><?php echo \E::get('obj_curr_module_lang')->get('AGENCY_SECTION_NAME'); ?></label>
	</td>
	<td>
	<?php
	\I::create_input( 
		'text',
		'sec_name', 
		'sec_name', 
		\U::safe_display_string(isset($v_param['sec_name']) ? $v_param['sec_name'] : ""), 
		'text', 
		'style="width:500px;"',
		''
	);
	?>
	</td>
</tr>
<tr>
	<td></td>
	<td>
		<?PHP
			\I::create_button('SEARCH', 'btn_search', 'javascript:search()' );
			if($v_param['sec_name']!=''){
				\I::create_button('CLEAR_RESULT', 'btn_search', 'javascript:clear_rec_list(\'search_agency='.urlencode($v_default_search_ag).'\')' );
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
			<th <?php echo ($v_param['order_by']=='agencyName') ? 'class="sortColumn"' : ''; ?>>
				<a href="javascript:rec_list('<?php echo $_SERVER['REDIRECT_URL'].$v_param['toggle']; ?>&order_by=agencyName')">
				<?php 
					echo \E::get( 'obj_system_lang')->get('AGENCY_SECTION_NAME');
					if ($v_param['order_by']=='agencyName'){
						print " ".$v_param['sort_img'];
					}
				
				?>
				</a>
			</th>
			<th><?php echo \E::get( 'obj_system_lang')->get('AGENCY_SECTION_SHORT_NAME'); ?></th>
			<th width="80px"><?php echo \E::get( 'obj_system_lang')->get('ACTION')?></th>
		</tr>
	</thead>
	<tbody>
	<?PHP
		if($v_sec_list_info && is_array($v_sec_list_info)){
			$v_count = $v_page_num + 1;
			foreach($v_sec_list_info as $v_row){
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
					ondblclick = "window.location=\''.\E::get('obj_system_module')->build_action_path('section','view',$v_row['sec_id']).'\'"
				
				>';
				echo '<td align="center">' . $v_count . '</td>';
				echo '<td align="left">' . 
						'<a href="'.\E::get('obj_system_module')->build_action_path('section','view',$v_row['sec_id']).'" >'.
						\U::safe_display_string($v_row['kwd_value']). 
						'</a>'.
						'</td>';
				echo '<td align="left">' . \U::safe_display_string($v_row['kwd_short_name']) . '</td>';
					
					//if($v_access_read || $v_access_edit || $v_access_delete){
					echo '<td align="center" valign="top" >';
						//if($v_access_read)
						echo \R::get_image_tag( "BTN_READ", 'vertical-align:middle;cursor:pointer; ', 'tips=\'Read\' onclick="window.location=\''.\E::get('obj_system_module')->build_action_path('section','view',$v_row['sec_id']).'\'"' );
						echo ' ';
						
						//if($v_access_edit)
							echo \R::get_image_tag( "BTN_EDIT", 'vertical-align:middle;cursor:pointer;', 'tips=\'Edit\' onclick="window.location=\''.\E::get( 'obj_system_module')->build_action_path('section','edit',$v_row['sec_id']).'\'"' );
							echo ' ';
						
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