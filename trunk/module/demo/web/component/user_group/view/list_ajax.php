<?PHP
	echo \E::get( 'obj_curr_module')->paging_build($o_kernel_lang, $v_total_rec, $v_row_per_page , $v_param['page'], 'rec_list', $v_param['paging'] );
?>

<table id="tbl_responsive" cellpadding="0" cellspacing="0" border="0" class="table" width="100%">
	<thead>
		<tr>
			<th width="5%" <?php echo ($v_param['order_by']=='mtg_no') ? 'class="sortColumn"' : ''; ?>>
				<?php echo \E::get( 'obj_kernel_lang')->get('TBL_NO');?>
			</th>
			<th <?php echo ($v_param['order_by']=='title') ? 'class="sortColumn"' : ''; ?>>
				<a href="javascript:rec_list('<?php echo $_SERVER['REDIRECT_URL'].$v_param['toggle']; ?>&order_by=title')">
					<?php 
					echo \E::get( 'obj_curr_module_lang')->get('USER_GROUP_NAME');
					if ($v_param['order_by']=='title'){
						print " ".$v_param['sort_img'];
					}
					?>
				</a>
			</th>
			<th width="200px" <?php echo ($v_param['order_by']=='date') ? 'class="sortColumn"' : ''; ?>>
				<a href="javascript:rec_list('<?php echo $_SERVER['REDIRECT_URL'].$v_param['toggle']; ?>&order_by=date')">
					<?php 
					echo \E::get( 'obj_curr_module_lang')->get('DATE_MODIFIED');
					if ($v_param['order_by']=='date'){
						print " ".$v_param['sort_img'];
					}
					?>
				</a>
			</th>
			<th width="100px"><?php echo \E::get( 'obj_system_lang')->get('ACTION')?></th>
		</tr>
	</thead>
	<tbody>
	<?PHP
		if($v_user_group_list && is_array($v_user_group_list)){
			$v_count = $v_page_num + 1;

			$v_tips_read = \E::get('obj_kernel_lang')->get('READ');
			$v_tips_edit = \E::get('obj_kernel_lang')->get('EDIT');
			$v_tips_delete = \E::get('obj_kernel_lang')->get('DELETE');

			foreach($v_user_group_list as $v_row){
				$v_class = ( $v_count%2 == 1 ) ? "odd" : "normal";
				$v_pas_param[0] = $v_row['kwd_code'];

				echo '<tr 
					currClass="'.$v_class.'"" 
					class="'.$v_class.'"" 
					id="row'.$v_count.'"
					onMouseOver="record_listing_highlight( this, \'highlight\' )"
					onMouseOut ="record_listing_highlight( this, \'' . $v_class . '\' )"
					onClick    ="record_listing_click_tr ( this, \'' . $v_class . '\', \'chkRow'.$v_count.'\' )"
				>';
					echo '<th scope="row" align="left">' . $v_count . '</th>';
					echo '<td align="left" data-title="'.\E::get( 'obj_system_lang')->get('USER_GROUP_NAME').'">' . \U::safe_display_string($v_row['kwd_value']) . '</td>';
					echo '<td align="center" data-title="'.\E::get( 'obj_curr_module_lang')->get('DATE_MODIFIED').'">' . \U::safe_display_string($v_row['_rec_modified_on']) . '</td>';
					echo '<td data-title="'.\E::get( 'obj_system_lang')->get('ACTION').'">';
					echo '<a title="'.$v_tips_read .'" href="'.\E::get( 'obj_curr_module')->build_action_path('user_group','view',$v_pas_param).'">';
					echo '<i class="fa fa-fw fa-eye"></i></a>';

					echo '<a title="'.$v_tips_edit.'" href="'.\E::get( 'obj_curr_module')->build_action_path('user_group','edit',$v_pas_param).'">';
					echo '<i class="fa fa-fw fa-edit"></i></a>';

					echo '<a class="danger" title="'.$v_tips_delete.'" href="javascript:del_confirm(\'' . \U::safe_display_string($v_row['kwd_code']).'\')">';
					echo '<i class="fa fa-fw fa-trash-alt"></i></a>';
					// echo \R::get_image_tag( "BTN_READ", 'vertical-align:middle;cursor:pointer; ', 'tips=\'' . $v_tips_read . '\' onclick="window.location=\''.\E::get( 'obj_curr_module')->build_action_path('user_group','view',$v_pas_param).$v_module.'\'"' );
					// echo \R::get_image_tag( "BTN_EDIT", 'vertical-align:middle;cursor:pointer;', 'tips=\'' . $v_tips_edit . '\' onclick="window.location=\''.\E::get( 'obj_curr_module')->build_action_path('user_group','edit',$v_pas_param).$v_module.'\'"' );
					// echo \R::get_image_tag( "BTN_DELETE", 'vertical-align:middle;cursor:pointer;', 'tips=\'' . $v_tips_delete . '\' onclick="del_confirm(\''.\U::safe_display_string($v_row['kwd_code']).'\')"' );
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

<br/>
<?PHP
\I::load_error();
?>