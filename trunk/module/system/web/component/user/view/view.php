<table cellpadding="2" cellspacing="4" border="0" width="100%">
<?PHP
if($v_user_type != 'mms_participant'){
?>
	<tr>
		<td class='lbl_compulsory' width="15%"><label><?PHP echo \E::get('obj_system_lang')->get('USER_ID'); ?></label></td>
		<td>
		<?php
			print \U::safe_display_string(isset($v_user_info['usr_short_name']) ? $v_user_info['usr_short_name'] : "");
			
			if(isset($v_user_info['usr_comm']) && $v_user_info['usr_comm'] == '1'){
				print ' - '.\E::get('obj_system_lang')->get('USER_FROM_MMS_COMMON').'';
			}
		?>
		</td>
	</tr>
<?PHP
}
?>
<tr>
	<td class='lbl_compulsory'><label><?PHP echo \E::get('obj_system_lang')->get('USER_NAME'); ?></label></td>
	<td>
	<?php
		// print \U::safe_display_string(isset($v_usr_title['kwd_value']) ? $v_usr_title['kwd_value'].' ' : "");
		print \U::safe_display_string(isset($v_user_info['usr_full_name']) ? $v_user_info['usr_full_name'] : "");
	?>
	</td>
</tr>
<tr>
	<td class='lbl_compulsory'><label><?PHP echo \E::get('obj_system_lang')->get('USER_EMAIL'); ?></label></td>
	<td>
	<?php
		print \U::safe_display_string(isset($v_user_info['usr_email']) ? $v_user_info['usr_email'] : "");
	?>
	</td>
</tr>
<?PHP
//if(isset($v_user_info['usr_from']) && strtoupper($v_user_info['usr_from']) != 'MMS_COMMON'){
?>
	<tr>
		<td class='lbl<?php echo isset($v_user_info['usr_comm']) && $v_user_info['usr_comm'] == '1' ? '' : '_compulsory' ?>'><label><?PHP echo \E::get('obj_system_lang')->get('USER_IC'); ?></label></td>
		<td>
		<?php
			if(isset($v_user_info['usr_comm']) && $v_user_info['usr_comm'] == '1'){
				print '-';
			}else{
				print \U::safe_display_string(isset($v_user_info['usr_new_ic_no']) ? $v_user_info['usr_new_ic_no'] : "");
			}
		?>
		</td>
	</tr>
<?PHP
//}
?>
<tr>
	<td class='lbl'><label><?PHP echo \E::get('obj_system_lang')->get('USER_MOBILE'); ?></label></td>
	<td>
	<?php
		print \U::safe_display_string(isset($v_user_info['mobile_no']) ? $v_user_info['mobile_no'] : "");
	?>
	</td>
</tr>
<tr>
	<td colspan="2" align="center">
	<?PHP
		\I::create_button('BACK', 'btn_edit', \E::get('obj_system_module')->build_action_path('user','list'));
		//if(isset($v_user_info['usr_from']) && $v_user_info['usr_from'] != 'imp'){
			\I::create_button('EDIT', 'btn_edit', \E::get('obj_system_module')->build_action_path('user','edit',$v_user_info['usr_id']));
		//}
	?>
	</td>
</tr>
</table>
</form>

<br/>
<div style="background:#c0d3d3;padding:5px;">
	<div style="float:left">
		<span style="font-weight:bold;font-size:14px;">
			<?php print \E::get('obj_system_lang')->get('POSITION_LISTING');?>
		</span>
		<?PHP
			\I::create_button(
				'ADD', 
				'btn_add', 
				'javascript:add_pos()'
				);
		?>
	</div>
	<div style="float:right">
		<span style="background:#BEFEBB;height:20px;border:1px solid black">
			&nbsp;&nbsp;&nbsp;&nbsp;
		</span>
		&nbsp;Default
	</div>
	<div style="clear:both;"></div>
</div>
<br/>
<table cellpadding="0" cellspacing="0" border="0" class="record_listing" width="100%">
<thead>
<tr>
	<th width="5%"><?php echo \E::get( 'obj_kernel_lang')->get('TBL_NO')?></th>
	<th><?PHP echo \E::get('obj_system_lang')->get('USER_AGENCY'); ?></th>
	<th><?PHP echo \E::get('obj_system_lang')->get('USER_DEPT'); ?></th>
	<th><?PHP echo \E::get('obj_system_lang')->get('USER_POSITION_NAME'); ?></th>
	<th><?PHP echo \E::get('obj_system_lang')->get('ACTION'); ?></th>
	<th>&nbsp;</th>
</tr>
</thead>
<tbody>
<?PHP 
if(isset($v_pos_info) && is_array($v_pos_info)){
	$v_allow_set_default = true;
	foreach($v_pos_info as $v_pos_row){
		if(trim($v_pos_row['imp_post_id']) != '' && $v_pos_row['pos_default'] == '1'){
			$v_allow_set_default = false;
			break;
		}
	}
	
	$v_count_no = 0;
	foreach($v_pos_info as $v_pos_row){
		++$v_count_no;
		$v_tr_style = ($v_pos_row['pos_default'] == '1' ? 'style="background:#BEFEBB"' : '');
?>
		<tr <?PHP echo $v_tr_style; ?> >
			<td><?PHP echo $v_count_no; ?></td>
			<td>
			<?php
				unset($v_cond);
				$v_cond['ag_id'] = $v_pos_row['sys_ag_id'];
				$v_agency_info = \E::get('obj_system_module')->agency_get($v_cond);
				print \U::safe_display_string(isset($v_agency_info['kwd_value']) ? $v_agency_info['kwd_value'] : "");
			?>
			</td>
			<td>
			<?php
				unset($v_cond);
				$v_cond['ag_id'] = $v_pos_row['sys_ag_id'];
				$v_cond['ad_id'] = $v_pos_row['sys_ad_id'];
				$v_dept_info = \E::get('obj_system_module')->agency_dept_get($v_cond);
				print \U::safe_display_string(isset($v_dept_info['kwd_value']) ? $v_dept_info['kwd_value'] : "-");
			?>
			</td>
			<td>
			<?php 
				print \U::safe_display_string(isset($v_pos_row['pos_name']) && $v_pos_row['pos_name']!='' ? $v_pos_row['pos_name'] : "-");
			?>
			</td>
			<?PHP
				// ====================================================================================================
				// Hard Code URL here ******* Need to be change after live
				// ====================================================================================================
			?>
			<td align='center'><a href="javascript:edit_role('<?php print $v_pos_row['id']?>')"><?PHP print \E::get( 'obj_system_lang')->get('POSITION_MANAGE_ROLE') ?></a></td>
			<td align="center">
			<?PHP 
				//print \U::safe_display_string($v_pos_row['usr_id']).' | '.\U::safe_display_string($v_pos_row['id']);
				$v_tips_set_default = \E::get('obj_system_lang')->get('POSITION_SET_TO_DEFAULT');
				//if($v_allow_set_default && trim($v_pos_row['imp_post_id']) == '' &&  $v_pos_row['pos_default'] == '0'){
				if($v_pos_row['pos_default'] == '0'){
					echo \E::get('obj_system_module')->get_image_tag('ball_off.gif', false,  'vertical-align:middle;cursor:pointer;', 'tips=\'' . $v_tips_set_default . '\' onclick="set_pos_default(\''.\U::safe_display_string($v_pos_row['usr_id']).'\',\''.\U::safe_display_string($v_pos_row['id']).'\')"');
				}
				
				$v_tips_delete = \E::get('obj_kernel_lang')->get('DELETE');
				//if(trim($v_pos_row['imp_post_id']) == '' && $v_pos_row['pos_default'] == '0'){
				if($v_pos_row['pos_default'] == '0'){
					echo \R::get_image_tag( "BTN_DELETE", 'vertical-align:middle;cursor:pointer;', 'tips=\'' . $v_tips_delete . '\' onclick="del_pos(\''.\U::safe_display_string($v_pos_row['usr_id']).'\',\''.\U::safe_display_string($v_pos_row['id']).'\')"' );
				}
				echo '<br/>';
			?>
			</td>
		</tr>
<?PHP
	}
}else{
?>
	<tr><td colspan='4' align="center"><?PHP print \E::get( 'obj_kernel_lang')->get('MSG_NO_RECORD_FOUND') ?></td></tr>
<?PHP
}
?>
</tbody>
</table>
<script language="javascript">
function add_pos(){
	url = '<?PHP echo  \E::get( 'obj_curr_module')->build_action_path('user','pos_add').'?usr_id='.urlencode($v_user_info['usr_id']); ?>';
	openNewDhtmlWindow(url , '<?php print \E::get('obj_system_lang')->get('POSITION_ADD'); ?>', '600', '300', '', '');
}
function edit_role(p_pos_id){
	url = '<?PHP echo  MOONLIGHT_DNS_PATH.MOONLIGHT_FOLDER_PATH.'mms/acl/role/?usr_id='.$v_user_info['usr_id']; ?>';
	url += '&pos_id=' + escape(p_pos_id);
	openNewDhtmlWindow(url , '<?php print \E::get('obj_system_lang')->get('POSITION_MANAGE_ROLE'); ?>', '600', '300', '', '');
}
function set_pos_default(p_usr_id, p_pos_id){
	url = '<?PHP echo \E::get('obj_system_module')->build_action_path('user','pos_set_default'); ?>';
	url += '?usr_id=' + escape(p_usr_id);
	url += '&pos_id=' + escape(p_pos_id);
	window.location = url;
}
function del_pos(p_usr_id, p_pos_id){
	if(confirm('<?php echo \E::get('obj_system_lang')->get('POSITION_DELETE_CONFIRM_MSG')?>')){
		url = '<?PHP echo \E::get('obj_system_module')->build_action_path('user','pos_del'); ?>';
		url += '?usr_id=' + escape(p_usr_id);
		url += '&pos_id=' + escape(p_pos_id);
		window.location = url;
	}
}
</script>
<?PHP
\I::load_error();
?>