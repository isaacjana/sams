<?PHP
	echo \E::get( 'obj_curr_module')->paging_build($o_kernel_lang, $v_total_rec, $v_row_per_page , $v_param['page'], 'rec_list', $v_param['paging'] );
?>
<table id="tbl_responsive" cellpadding="0" cellspacing="0" border="0" class="table" width="100%">
	<thead>
		<tr>
			<th width="5%">
				<?php echo \E::get( 'obj_kernel_lang')->get('TBL_NO')?>
			</th>
			<th width="400px" <?php echo ($v_param['order_by']=='userName') ? 'class="sortColumn"' : ''; ?>>
				<a href="javascript:rec_list('<?php echo \E::get('obj_curr_module')->build_action_path('user','list_ajax').$v_param['toggle']; ?>&order_by=userName')">
				<?php 
					echo \E::get( 'obj_system_lang')->get('USER_NAME');
					if ($v_param['order_by']=='userName'){
						print " ".$v_param['sort_img'];
					}
				
				?>
				</a>
			</th>
			<th><?php echo \E::get( 'obj_system_lang')->get('USER_EMAIL');  ?></th>
			<th width="90px" style="text-align:center;"><?php echo \E::get( 'obj_system_lang')->get('ACTION')?></th>
		</tr>
	</thead>
	<tbody>
	<?PHP
		if($v_user_list_info && is_array($v_user_list_info)){
			$v_tips_read = \E::get('obj_kernel_lang')->get('READ');
			$v_tips_edit = \E::get('obj_kernel_lang')->get('EDIT');
			$v_tips_delete = \E::get('obj_kernel_lang')->get('DELETE');

			$v_count = $v_page_num + 1;
			foreach($v_user_list_info as $v_row){
				$v_class = ( $v_count%2 == 1 ) ? "odd" : "normal";

				echo '<tr 
					id="row'.$v_count.'"
					onMouseOver="record_listing_highlight( this, \'highlight\' )"
					onMouseOut ="record_listing_highlight( this, \'' . $v_class . '\' )"
					onClick    ="record_listing_click_tr ( this, \'' . $v_class . '\', \'chkRow'.$v_count.'\' )"
					ondblclick = "window.location=\''.\E::get('obj_curr_module')->build_action_path('user','view',$v_row['usr_id']).'\'"
				
				>';
				echo '<th scope="row" align="left">' . $v_count . '</th>';
				echo '<td align="left" data-title="'.\E::get( 'obj_system_lang')->get('USER_NAME').'">' . $v_row['full_name'] .'</td>';
				echo '<td align="left" data-title="'.\E::get( 'obj_system_lang')->get('USER_EMAIL').'">' . \U::safe_display_string($v_row['usr_email'] != '' ? $v_row['usr_email'] : '-') . '</td>';

				echo '<td align="center" valign="top" data-title="'.\E::get( 'obj_system_lang')->get('ACTION').'">';
				echo '<a title="'.$v_tips_read .'" href="'.\E::get( 'obj_curr_module')->build_action_path('user','view',$v_row['usr_id']).'">';
				echo '<i class="fa fa-fw fa-eye"></i></a>';

				echo '<a title="'.$v_tips_edit.'" href="'.\E::get( 'obj_curr_module')->build_action_path('user','edit',$v_row['usr_id']).'">';
				echo '<i class="fa fa-fw fa-edit"></i></a>';

				echo '<a class="danger" title="'.$v_tips_delete.'" href="javascript:del_confirm(\'' . \U::safe_display_string($v_row['usr_id']).'\')">';
				echo '<i class="fa fa-fw fa-trash-alt"></i></a>';

				echo '</td>';
				echo '</tr>';
				
				++$v_count;
			}
		}else{
			echo '<tr><td colspan="7" align="center">'. \E::get( 'obj_kernel_lang')->get('MSG_NO_RECORD_FOUND') . '</td></tr>';
		}
	?>
	</tbody>
</table>