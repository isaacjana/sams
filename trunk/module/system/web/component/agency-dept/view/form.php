<?PHP
	$v_check_1 = '';
	$v_check_2 = 'checked';
	$v_check_3 = '';
	if(isset($v_ag_cat_id) && strtoupper($v_ag_cat_id) == '1'){
		$v_check_1 = 'checked';
		$v_check_2 = '';
		$v_check_3 = '';
	}else if(isset($v_ag_cat_id) && strtoupper($v_ag_cat_id) == '3'){
		$v_check_1 = '';
		$v_check_2 = '';
		$v_check_3 = 'checked';
	}
?>
<form id="frm_agency" name="frm_agency" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
<table cellpadding="2" cellspacing="2" border="0">
<?PHP
//$v_lang_info = \E::get('obj_system_module')->get_supported_lang();

if(isset($v_ag_id) && $v_ag_id != ''){
	\I::create_input( 
		'hidden',
		'ag_id', 
		'ag_id', 
		\U::safe_display_string(isset($v_ag_id) ? $v_ag_id : ""), 
		'text', 
		'style="width:500px;" ',
		''
	);
}
?>
<tr>
	<td class='lbl_compulsory'>
		<label><?PHP echo \E::get('obj_system_lang')->get('AGENCY_CATEGORY'); ?></label>
	</td>
	<td>
		<input type='radio' id='ag_cat_id_1' name='ag_cat_id' value='1' <?php echo $v_check_1; ?> />
			<label for='ag_cat_id_1' ><?PHP echo \E::get('obj_system_lang')->get('AGENCY_CAT_PRIVATE'); ?></label>
		<input type='radio' id='ag_cat_id_2' name='ag_cat_id' value='2' <?php echo $v_check_2; ?> />
			<label for='ag_cat_id_2' ><?PHP echo \E::get('obj_system_lang')->get('AGENCY_CAT_STATE'); ?></label>
		<input type='radio' id='ag_cat_id_3' name='ag_cat_id' value='3' <?php echo $v_check_3; ?> />
			<label for='ag_cat_id_3' ><?PHP echo \E::get('obj_system_lang')->get('AGENCY_CAT_FEDERAL'); ?></label>
	</td>
</tr>
<tr>
	<td class='lbl_compulsory'><label for="ag_name"><?PHP echo \E::get('obj_system_lang')->get('AGENCY_NAME'); ?></label></td>
	<td>
	<?php
	\I::create_input( 
		'text',
		'ag_name', 
		'ag_name', 
		\U::safe_display_string(isset($v_ag_name) ? $v_ag_name : ""), 
		'text_compulsory', 
		'style="width:500px;" ',
		''
	);
	?>
	</td>
</tr>
<tr>
	<td class='lbl'>
		<label for="ag_short_name"><?PHP echo \E::get('obj_system_lang')->get('AGENCY_SHORT_NAME'); ?></label>
	</td>
	<td>
	<?php
	\I::create_input( 
		'text',
		'ag_short_name', 
		'ag_short_name', 
		\U::safe_display_string(isset($v_ag_short_name) ? $v_ag_short_name : ""), 
		'text', 
		'style="width:500px;" ',
		''
	);
	?>
	</td>
</tr>
<tr>
	<td class='lbl'><label for="ag_phone"><?PHP echo \E::get('obj_system_lang')->get('AGENCY_PHONE'); ?></label></td>
	<td>
	<?php
	\I::create_input( 
		'text',
		'ag_phone', 
		'ag_phone', 
		\U::safe_display_string(isset($v_ag_phone) ? $v_ag_phone : ""), 
		'text', 
		'style="width:500px;" ',
		''
	);
	?>
	</td>
</tr>
<tr>
	<td class='lbl'><label for="ag_fax"><?PHP echo \E::get('obj_system_lang')->get('AGENCY_FAX'); ?></label></td>
	<td>
	<?php
	\I::create_input( 
		'text',
		'ag_fax', 
		'ag_fax', 
		\U::safe_display_string(isset($v_ag_fax) ? $v_ag_fax : ""), 
		'text', 
		'style="width:500px;" ',
		''
	);
	?>
	</td>
</tr>
<tr>
	<td class='lbl'><label for="ag_fax"><?PHP echo \E::get('obj_system_lang')->get('AGENCY_EMAIL'); ?></label></td>
	<td>
	<?php
	\I::create_input( 
		'text',
		'ag_email', 
		'ag_email', 
		\U::safe_display_string(isset($v_ag_email) ? $v_ag_email : ""), 
		'text', 
		'style="width:500px;" ',
		''
	);
	?>
	</td>
</tr>
<tr>
	<td class='lbl'><label for="ag_fax"><?PHP echo \E::get('obj_system_lang')->get('AGENCY_ADDRESS'); ?></label></td>
	<td>
	<?php
	\I::create_input( 
		'textarea',
		'ag_add_address', 
		'ag_add_address', 
		\U::safe_display_string(isset($v_ag_add_address) ? $v_ag_add_address : ""), 
		'text', 
		'style="width:500px;" rows="8"',
		''
	);
	?>
	</td>
</tr>
<tr>
	<td colspan="2" align="center">
	<?PHP
		if(isset($v_ag_id) && $v_ag_id != ''){
			\I::create_button('BACK', 'btn_back', \E::get('obj_system_module')->build_action_path('agency','view',$v_ag_id));
		}else{
			\I::create_button('BACK', 'btn_back', \E::get('obj_system_module')->build_action_path('agency','list'));
		}
		print '&nbsp;';
		\I::create_button('SAVE', 'btn_save', 'javascript:if(validate(document.frm_user)) document.frm_agency.submit();' );
	?>
	</td>
</tr>
</table>
</form>
<?PHP
\I::load_error();
?>