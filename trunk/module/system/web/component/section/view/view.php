<table cellpadding="2" cellspacing="2" border="0" width="100%">
<tr>
	<td class='lbl'><label><?PHP echo \E::get('obj_system_lang')->get('AGENCY'); ?></label></td>
	<td>
	<?php echo \U::safe_display_string(isset($v_sec_info['ag_name']) ? $v_sec_info['ag_name'] : ""); ?>
	</td>
</tr>
<tr>
	<td class='lbl'>
		<label for="ag_short_name"><?PHP echo \E::get('obj_system_lang')->get('AGENCY_DEPT'); ?></label>
	</td>
	<td>
	<?php echo \U::safe_display_string(isset($v_sec_info['ad_name']) && $v_sec_info['ad_name'] != '' ? $v_sec_info['ad_name'] : "-"); ?>
	</td>
</tr>
<tr>
	<td class='lbl'><label for="ag_phone"><?PHP echo \E::get('obj_system_lang')->get('AGENCY_SECTION_NAME'); ?></label></td>
	<td>
	<?php echo \U::safe_display_string(isset($v_sec_info['kwd_value']) && $v_sec_info['kwd_value'] != '' ? $v_sec_info['kwd_value'] : "-"); ?>
	</td>
</tr>
<tr>
	<td class='lbl'><label for="ag_fax"><?PHP echo \E::get('obj_system_lang')->get('AGENCY_SECTION_SHORT_NAME'); ?></label></td>
	<td>
	<?php echo \U::safe_display_string(isset($v_sec_info['kwd_short_name']) && $v_sec_info['kwd_short_name'] != '' ? $v_sec_info['kwd_short_name'] : "-"); ?>
	</td>
</tr>

<tr>
	<td colspan="2" align="center">
	<?PHP
		\I::create_button('BACK', 'btn_back', \E::get('obj_system_module')->build_action_path('section','list'));
		print '&nbsp;';
		\I::create_button('EDIT', 'btn_edit',  \E::get('obj_system_module')->build_action_path('section','edit' , $v_sec_info['sec_id']) );
	?>
	</td>
</tr>
</table>