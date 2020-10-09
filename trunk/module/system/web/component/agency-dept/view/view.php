<table cellpadding="2" cellspacing="2" border="0" width="100%">
<tr>
	<td class='lbl_compulsory' width="20%">
		<label><?PHP echo \E::get('obj_system_lang')->get('AGENCY_CATEGORY'); ?></label>
	</td>
	<td>
		<?PHP
			if($v_agency_info['ag_cat_id'] == '1'){
				echo \E::get('obj_system_lang')->get('AGENCY_CAT_PRIVATE');
			}else if($v_agency_info['ag_cat_id'] == '2'){
				echo \E::get('obj_system_lang')->get('AGENCY_CAT_STATE');
			}else{
				echo \E::get('obj_system_lang')->get('AGENCY_CAT_FEDERAL');
			}
		?>
	</td>
</tr>
<tr>
	<td class='lbl_compulsory'><label><?PHP echo \E::get('obj_system_lang')->get('AGENCY_NAME'); ?></label></td>
	<td>
	<?php echo \U::safe_display_string(isset($v_agency_info['kwd_value']) ? $v_agency_info['kwd_value'] : ""); ?>
	</td>
</tr>
<tr>
	<td class='lbl'>
		<label for="ag_short_name"><?PHP echo \E::get('obj_system_lang')->get('AGENCY_SHORT_NAME'); ?></label>
	</td>
	<td>
	<?php echo \U::safe_display_string(isset($v_agency_info['kwd_short_name']) && $v_agency_info['kwd_short_name'] != '' ? $v_agency_info['kwd_short_name'] : "-"); ?>
	</td>
</tr>
<tr>
	<td class='lbl'><label for="ag_phone"><?PHP echo \E::get('obj_system_lang')->get('AGENCY_PHONE'); ?></label></td>
	<td>
	<?php echo \U::safe_display_string(isset($v_agency_info['ag_phone']) && $v_agency_info['ag_phone'] != '' ? $v_agency_info['ag_phone'] : "-"); ?>
	</td>
</tr>
<tr>
	<td class='lbl'><label for="ag_fax"><?PHP echo \E::get('obj_system_lang')->get('AGENCY_FAX'); ?></label></td>
	<td>
	<?php echo \U::safe_display_string(isset($v_agency_info['ag_fax']) && $v_agency_info['ag_fax'] != '' ? $v_agency_info['ag_fax'] : "-"); ?>
	</td>
</tr>
<tr>
	<td class='lbl'><label for="ag_fax"><?PHP echo \E::get('obj_system_lang')->get('AGENCY_EMAIL'); ?></label></td>
	<td>
	<?php echo \U::safe_display_string(isset($v_agency_info['ag_email']) && $v_agency_info['ag_email'] != ''? $v_agency_info['ag_email'] : "-"); ?>
	</td>
</tr>
<tr>
	<td class='lbl'><label for="ag_fax"><?PHP echo \E::get('obj_system_lang')->get('AGENCY_ADDRESS'); ?></label></td>
	<td>
	<?php echo \U::safe_display_string(isset($v_agency_info['ag_add_address']) && $v_agency_info['ag_add_address'] != '' ? $v_agency_info['ag_add_address'] : "-"); ?>
	</td>
</tr>
<tr>
	<td colspan="2" align="center">
	<?PHP
		\I::create_button('BACK', 'btn_back', \E::get('obj_system_module')->build_action_path('agency','list'));
		if(strtoupper($v_agency_info['ag_from']) != 'IMP'){
			print '&nbsp;';
			\I::create_button('EDIT', 'btn_edit',  \E::get('obj_system_module')->build_action_path('agency','edit' , $v_agency_info['ag_id']) );
		}
	?>
	</td>
</tr>

</table>

<?PHP
/*
<table cellpadding=2 cellspacing=2 border=0 width=100%>
<tr>
	<td align=left valign="center">
		<div>
		<?PHP
			\I::create_button(
				'ADD', 
				'btn_add', 
				 \E::get( 'obj_curr_module')->build_action_path('agency','sec_add',$v_agency_info['ag_id'])
				);
		?>
		</div>
		<div style="clear:both;height:0px;"><hr/></div>
	</td>
</tr>
<tr>
	<td>
		<div id="divListingArea"></div>
	</td>
</tr>
</table>
<script language="javascript">
search_url = '<?php echo \E::get('obj_system_module')->build_action_path('agency','sec_list_ajax',$v_agency_info['ag_id']); ?>';
$(document).ready(function(){
	$(function() {
		rec_list('');
	});
	
});
function rec_list(p_url){
	if (p_url=='') p_url=search_url;
	makeGETRequest(p_url,'divListingArea');
}
function search(){
	obj = document.getElementById('ag_name');
	ag_name1 = escape(obj.value);

	url = search_url + '?ag_name=' + ag_name1;
	rec_list(url);
}
</script>

*/
?>