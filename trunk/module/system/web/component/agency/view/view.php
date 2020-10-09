<script language='javascript'>
var j_hl = new Array();
j_hl['deptSec'] =  new Array();
j_hl['deptSec']['cur_row'] = ''; //vHqSecCurHLRow
j_hl['deptSec']['cur_row_url_read'] = ''; //vHqSecCurHLRowUrlRead
j_hl['deptSec']['cur_row_url_edit'] = ''; //vHqSecCurHLRowUrlEdit
j_hl['deptSec']['cur_row_url_del'] = ''; //vHqSecCurHLRowUrlDelete
j_hl['deptSec']['cur_info'] = ''; //vHqSecCurHLInfo

j_hl['dept'] =  new Array();
j_hl['dept']['cur_row'] = ''; //vHqSecCurHLRow
j_hl['dept']['cur_row_url_read'] = ''; //vHqSecCurHLRowUrlRead
j_hl['dept']['cur_row_url_edit'] = ''; //vHqSecCurHLRowUrlEdit
j_hl['dept']['cur_row_url_del'] = ''; //vHqSecCurHLRowUrlDelete
j_hl['dept']['cur_info'] = ''; //vHqSecCurHLInfo


// var vHqSecCurHLRow=''; //vSecCurrentHighlightedRow
// var vHqSecCurHLRowUrlRead=''; //vSecCurrentHighlightedRowUrlRead 
// var vHqSecCurHLRowUrlEdit=''; //vSecCurrentHighlightedRowUrlEdit 
// var vHqSecCurHLRowUrlDelete=''; //vSecCurrentHighlightedRowUrlDelete 
// var vHqSecCurHLInfo=''; //vSecCurrentHighlightedInfo 
function rec_hl(p_key, pRowID,pInfo,pUrlRead,pUrlEdit,pUrlDelete){
	// deselect the previous highlighted row
	if (j_hl[p_key]['cur_row']!=''){
		if (document.getElementById(j_hl[p_key]['cur_row']).classNameOriginal!=""){
			changeClassByElementID(j_hl[p_key]['cur_row'],document.getElementById(j_hl[p_key]['cur_row']).classNameOriginal);
		}else{
			changeClassByElementID(j_hl[p_key]['cur_row'],'');
		}
	}
	
	// highlight new row
	j_hl[p_key]['cur_row']=pRowID;
	j_hl[p_key]['cur_row_url_read']=pUrlRead;
	j_hl[p_key]['cur_row_url_edit']=pUrlEdit;
	j_hl[p_key]['cur_row_url_del']=pUrlDelete;
	j_hl[p_key]['cur_info']=pInfo;
	changeClassByElementID(pRowID,'selected');
}
function recRollOver(p_key,pRowID){
	// remember the original class name
	if (document.getElementById(pRowID).classNameOriginal==undefined){
		document.getElementById(pRowID).classNameOriginal=document.getElementById(pRowID).className;
	}
	// apply new class
	if (pRowID!=j_hl[p_key]['cur_row']){
		changeClassByElementID(pRowID,'highlight');
	}
}
function recRollOut(p_key,pRowID){
	if (pRowID!=j_hl[p_key]['cur_row']){
		if (document.getElementById(pRowID).classNameOriginal!=""){
			changeClassByElementID(pRowID,document.getElementById(pRowID).classNameOriginal);
		}else{
			changeClassByElementID(pRowID,"");
		}
	}
}
function rowCheckUncheckAll(p_key, pCheckUncheck ){
	vMax = 100;
	vContinue = true;
	vValue = '';
	vCount=0;
	for ( g=0; g<vMax && vContinue; g++ ){
		vCount++;
		if ( document.getElementById(p_key+'ChkRow'+vCount) ){
			document.getElementById(p_key+'ChkRow'+vCount).checked=pCheckUncheck;
		}else{
			vContinue=false;
		}
	}
	rowGenerateCSV(p_key);
}
function rowCheckSingle(p_key, pObjCurrentChkBox ){
	rowGenerateCSV(p_key);
}
function rowGenerateCSV(p_key){
	vMax = 100;
	vContinue = true;
	vValue = '';
	vCount=0;
	for ( g=0; g<vMax && vContinue; g++ ){
		vCount++;
		if ( document.getElementById(p_key+'ChkRow'+vCount) ){
			if (document.getElementById(p_key+'ChkRow'+vCount).checked){
				if (vValue!=''){
					vValue+=',';
				}
				vValue+=document.getElementById(p_key+'ChkRow'+vCount).value;
			}
		}else{
			vContinue=false;
		}
	}
	document.getElementById(p_key+'_row_delete').value=vValue;
}
function recDelete(p_key,p_id,p_del_msg){
	vArrRows = document.getElementById(p_id).value.split(',');
	/*if ( vArrRows.length > 1 ){
		if ( confirm(p_del_msg) ){
			recSaveListing(p_key);
		}
	}else{
		if (j_hl[p_key]['cur_row_url_del']!=''){
			recOpen(j_hl[p_key]['cur_info'],j_hl[p_key]['cur_row_url_del']);
		}
	}*/
	
	if(document.getElementById(p_id).value != ''){
		if(p_key == 'dept' &&  vArrRows.length >= 1){
			if ( confirm(p_del_msg) ){
				URL = '<?PHP print \E::get('obj_system_module')->build_action_path('agency','dept_del'); ?>';
				URL += vArrRows.join("/");
				URL += '/?ag_id=<?PHP print $v_agency_info['ag_id']; ?>';
				
				window.location = URL;
				//alert(URL);
			}
		}
		
		if(p_key == 'deptSec' &&  vArrRows.length >= 1){
			if ( confirm(p_del_msg) ){
				j_ad_id = document.getElementById('sec_ad_id').value;
				URL = '<?PHP print \E::get('obj_system_module')->build_action_path('agency','sec_del'); ?>';
				URL += vArrRows.join("/");
				URL += '/?ag_id=<?PHP print $v_agency_info['ag_id']; ?>';
				URL += '&ad_id='+j_ad_id;
				
				window.location = URL;
				//alert(URL);
			}
		}
	}
	
	
}
function recEdit(p_key){
	if (j_hl[p_key]['cur_row_url_edit']!=''){
		recOpen(j_hl[p_key]['cur_info'],j_hl[p_key]['cur_row_url_edit']);
	}
}
function recSaveListing(p_key){
	// document.frmHqSecListing.submit();
	document.getElementById('frm'+p_key+'_listing').submit();
}/*
function changeClassByElementID( pDivName, pClassName ){
	var ns4 = (document.layers);
	var ie4 = (document.all && !document.getElementById);
	var ie5 = (document.all && document.getElementById);
	var ns6 = (!document.all && document.getElementById);
	if(ns4){
	}else if(ie4){
		document.all[id].className = pClassName;
	}else if(ie5 || ns6){
		document.getElementById( pDivName ).className = pClassName;
	}
}*/
function recOpen(pTitle, pURL){
	if (pTitle==''){
		pTitle = 'Section Information';
	// }else{
		// pTitle = 'Section Information - '+ pTitle;
	}
	if (pURL!=''){
		// openNewDhtmlWindow( pTitle,pURL,vSecWinSetting,'');
		openNewDhtmlWindow( pURL, pTitle,'580','235','','');
	}
}
function deptRecList(pURL){
	// vCurrentHighlightedRow='';
	// vCurrentHighlightedRowUrlRead='';
	// vCurrentHighlightedRowUrlEdit='';
	j_hl['dept']['cur_row'] = ''; //vHqSecCurHLRow
	j_hl['dept']['cur_row_url_read'] = ''; //vHqSecCurHLRowUrlRead
	j_hl['dept']['cur_row_url_edit'] = ''; //vHqSecCurHLRowUrlEdit
	j_hl['dept']['cur_row_url_del'] = '';
	
	vDate = new Date;
	vRandomeChar = vDate.getTime();
	if (pURL==''){
		pURL='<?php print \E::get('obj_system_module')->build_action_path('agency','dept_ajax').'?ag_id='.$v_agency_info['ag_id']; ?>&r='+vRandomeChar;
	}
	
	makeGETRequest(pURL,'divListingDept');
	document.getElementById('divListingDeptSec').innerHTML = '';
}
function secDeptRecList(pURL){
	// vCurrentHighlightedRow='';
	// vCurrentHighlightedRowUrlRead='';
	// vCurrentHighlightedRowUrlEdit='';
	j_hl['deptSec']['cur_row'] = ''; //vHqSecCurHLRow
	j_hl['deptSec']['cur_row_url_read'] = ''; //vHqSecCurHLRowUrlRead
	j_hl['deptSec']['cur_row_url_edit'] = ''; //vHqSecCurHLRowUrlEdit
	j_hl['deptSec']['cur_row_url_del'] = '';
	
	vDate = new Date;
	vRandomeChar = vDate.getTime();
	if (pURL==''){
		pURL='<?php print \E::get('obj_system_module')->build_action_path('agency','sec_ajax').'?ag_id='.$v_agency_info['ag_id'].'&ad_id=hq'; ?>&r='+vRandomeChar;
	}
	makeGETRequest(pURL,'divListingDeptSec');
}
function deptRecNew(){
	vDate = new Date;
	vRandomeChar = vDate.getTime();
	pURL='<?php print \E::get('obj_system_module')->build_action_path('agency','dept_add',$v_agency_info['ag_id']); ?>?&r='+vRandomeChar;
	openNewDhtmlWindow( pURL, '<?PHP print \E::get('obj_system_lang')->get('DEPARMENT'); ?>','560','235','','');
}
function deptSecNew(p_ad_id){
	vDate = new Date;
	vRandomeChar = vDate.getTime();
	pURL='<?php print \E::get('obj_system_module')->build_action_path('agency','sec_add',$v_agency_info['ag_id']); ?>/'+escape(p_ad_id)+'/?&r='+vRandomeChar;
	openNewDhtmlWindow( pURL, '<?PHP print \E::get('obj_system_lang')->get('AGENCY_SECTIONS'); ?>','560','235','','');
}
function deptRecEdit(){
	vDate = new Date;
	vRandomeChar = vDate.getTime();
	pURL='<?php print \E::get('obj_system_module')->build_action_path('agency','dept_edit',$v_agency_info['ag_id']); ?>?&r='+vRandomeChar;
	openNewDhtmlWindow( pURL, '<?PHP print \E::get('obj_system_lang')->get('DEPARMENT'); ?>','560','180','','');
}
</script>

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
		//===Check how many agency can be view
		//		If more than one then listing page will be shown.
		$v_agency_session = \E::get('obj_system_module')->agency_allow_view();
		if(is_array($v_agency_session)){
			foreach($v_agency_session as $v_value){
				$v_temp = explode('@',$v_value);
				$v_ag_arr[$v_temp[0]] = $v_temp[0];
			}
		}
		
		if($v_agency_session == 'ALL' || count($v_ag_arr) > 1  ){
		//===IF: User able to view more than one agency.
			\I::create_button('BACK', 'btn_back', \E::get('obj_system_module')->build_action_path('agency','list'));
		}
		if(strtoupper($v_agency_info['ag_from']) != 'IMP'){
		//===IF: Only Agency which is not synchronize from Impian will able to edit.
			print '&nbsp;';
			\I::create_button('EDIT', 'btn_edit',  \E::get('obj_system_module')->build_action_path('agency','edit' , $v_agency_info['ag_id']) );
		}
	?>
	</td>
</tr>

</table>

<table border="0" width="100%" cellpadding="2" cellspacing="2" >
<tr>
	<td width="50%" valign="top"><div id="divListingDept"></div></td>
	<td width="50%" valign="top"><div id="divListingDeptSec"></div></td>
</tr>
<script language="javascript">
$(document).ready(function(){
	$(function() {
		deptRecList('');
	});
	
});
</script>
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