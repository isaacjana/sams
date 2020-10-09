<?PHP
\I::load_error('MESSAGE',false);
?>
<form id="frm_pos" name="frm_pos" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
<table cellpadding="2" cellspacing="2" border="0">
<?PHP
	if(isset($v_pos_id) && $v_pos_id != ''){
		\I::create_input( 
			'hidden',
			'pos_id', 
			'pos_id', 
			\U::safe_display_string(isset($v_pos_id) ? $v_pos_id : ""), 
			'text', 
			'style="width:450px;" '.($v_check_n == 'checked' ? 'readonly' : ''),
			''
		);
	}
	\I::create_input( 
		'hidden',
		'usr_id', 
		'usr_id', 
		\U::safe_display_string(isset($v_usr_id) ? $v_usr_id : ""), 
		'text', 
		'style="width:450px;" ',
		''
	);
	
?>
<tr>
	<td class='lbl_compulsory'><label><?PHP echo \E::get('obj_system_lang')->get('USER_AGENCY'); ?></label></td>
	<td>
	<?php
	//$v_autocomplete['url']=\E::get( 'obj_curr_module')->build_action_path('meeting','profile_name_ajax',$v_pas_param); 
	$v_autocomplete['url'] = \E::get( 'obj_curr_module')->build_action_path('user','agency_name_ajax'); 
	$v_autocomplete['callback'] = 'changeAgencyTitle';   //<-- this is name of your callback function
	$v_autocomplete['id'] = isset($v_ag_id) ? $v_ag_id : '';
	\I::create_input(
		'autocomplete',
		'ag_id_display',
		'ag_id',
		\U::safe_display_string(isset($v_ag_id_display) ? $v_ag_id_display: ''),
		'text',
		'style="width:450px;"',
		'',
		'',
		$v_autocomplete
	);

	?>
	</td>
</tr>
<tr>
	<td class='lbl'><label><?PHP echo \E::get('obj_system_lang')->get('USER_DEPT'); ?></label></td>
	<td>
	<?php
	//$v_autocomplete['url']=\E::get( 'obj_curr_module')->build_action_path('meeting','profile_name_ajax',$v_pas_param); 
	$v_autocomplete['url'] = \E::get( 'obj_curr_module')->build_action_path('user','dept_name_ajax'); 
	$v_autocomplete['callback'] = 'changeDeptTitle';
	$v_autocomplete['extra_param'] = array( array('param' => 'ag_id' , 'field_id' => 'ag_id') );
	$v_autocomplete['id'] = isset($v_ad_id) ? $v_ad_id : '';
	\I::create_input(
		'autocomplete',
		'ad_id_display',
		'ad_id',
		\U::safe_display_string(isset($v_ad_id_display) ? $v_ad_id_display : ''),
		'text',
		'style="width:450px;"',
		'',
		'',
		$v_autocomplete
	);
	?>
	</td>
</tr>
<tr>
	<td class='lbl_compulsory'><label><?PHP echo \E::get('obj_system_lang')->get('USER_POSITION_NAME'); ?></label></td>
	<td>
	<?php
	\I::create_input( 
		'text',
		'pos_name', 
		'pos_name', 
		\U::safe_display_string(isset($v_pos_name) ? $v_pos_name : ""), 
		'text_compulsory', 
		'style="width:450px;"',
		''
	);
	?>
	</td>
</tr>
<tr>
	<td colspan="2" align="center">
	<?PHP
		\I::create_button('CLOSE', 'btn_edit', 'javascript:parent.mydhtmlwin.close()');
		print '&nbsp;';
		\I::create_button('SAVE', 'btn_save', 'javascript:if(validate(document.frm_pos)) document.frm_pos.submit();' );
	?>
	</td>
</tr>
</table>
</form>

<script language="javascript">
function changeAgencyTitle( pDisplayValue, pID ){
	document.getElementById('ad_id_display').focus();
	document.getElementById('ad_id_display').value = ''; 
	document.getElementById('ad_id').value = ''; 
}
function changeDeptTitle( pDisplayValue, pID ){
	//document.getElementById('ad_id').value = pID; 
}
</script>
<?PHP
\I::load_error();
?>