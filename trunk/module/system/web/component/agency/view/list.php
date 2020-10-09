<?PHP
//===========Access Right======================//
/*$v_access_add = \E::get('obj_curr_module')->get_right_to_access($v_ag_id, $v_ad_id, $v_id,'ADD','group_mtg_profile');
$v_access_delete = \E::get('obj_curr_module')->get_right_to_access($v_ag_id, $v_ad_id, $v_id,'DELETE','group_mtg_profile');*/
?>
<table cellpadding=2 cellspacing=2 border=0 width=100%>
<?PHP
if( strtoupper(\E::get('obj_system_module')->agency_allow_view()) == 'ALL'){
?>
	<tr>
		<td align=left valign="center">
			<div>
			<?PHP
					\I::create_button(
						'ADD', 
						'btn_add', 
						 \E::get( 'obj_curr_module')->build_action_path('agency','add')
						);
			?>
			</div>
			<div style="clear:both;height:0px;"><hr/></div>
		</td>
	</tr>
<?PHP
}
?>
<tr>
	<td>
		<div id="divListingArea"></div>
	</td>
</tr>
</table>
<script language="javascript">
search_url = '<?php echo \E::get('obj_system_module')->build_action_path('agency','list_ajax'); ?>';
$(document).ready(function(){
	$(function() {
		/*$( ".accordion" ).accordion({
			collapsible: true,
			active: false,
			autoHeight:false
		});*/
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
	/*obj2 = document.getElementById('usr_from');
	usr_from2 = escape(obj2.options[obj2.selectedIndex].value);
	obj3 = document.getElementById('usr_comm').checked ? 1 : '';
	usr_comm3 = escape(obj3);*/
	url = search_url + '?ag_name=' + ag_name1;
	rec_list(url);
}
</script>
<?PHP
\I::load_error();
?>
