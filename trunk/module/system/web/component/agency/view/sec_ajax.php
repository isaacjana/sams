<?PHP
$v_hl_key = 'deptSec';

//*******************************************************************************
//* action buttons
//*******************************************************************************
$v_display_btn = false;
if(\U::is_user_able_to('ADD',$v_access_num)){
	\I::create_button( 'ADD', 'btn_add', 'javascript:deptSecNew(\''.$v_param['ad_id'].'\')');
	$v_display_btn = true;
}
if(\U::is_user_able_to('EDIT',$v_access_num)){
	\I::create_button( 'EDIT', 'btn_edit', 'javascript:recEdit(\''.$v_hl_key.'\')');
	$v_display_btn = true;
}
if(\U::is_user_able_to('DELETE',$v_access_num)){
	\I::create_button( 'DELETE', 'btn_del', 'javascript:recDelete(\''.$v_hl_key.'\',\''.$v_hl_key.'_row_delete\',\'Delete Record?\')');
	$v_display_btn = true;
}
if(!$v_display_btn) print '<br/><br/>';

\I::create_input( 
	'hidden',
	'sec_ad_id', 
	'sec_ad_id', 
	\U::safe_display_string(isset($v_param['ad_id']) ? $v_param['ad_id'] : ""), 
	'text'
);

print <<<TABLE
	<input type="hidden" name="{$v_hl_key}_row_delete" id="{$v_hl_key}_row_delete" value="">
	<table border=0 cellpadding=3 cellspacing=1 class="record_listing" width=100%>
	<thead>
		<tr>
			<th width="10px"><input type="checkbox" name="chkAll" id="chkAll" onClick="rowCheckUncheckAll('$v_hl_key',this.checked)"></th>
TABLE;
		print '<th width="10px">'.\E::get( 'obj_kernel_lang')->get('TBL_NO').'</th>';
		print '<th>'.\E::get('obj_system_lang')->get('AGENCY_SECTION_NAME').'</th>';
		
print <<<TABLE
		</tr>
	</thead>
	<tbody>
TABLE;

$vCount = 1;
$vCountDel = 1;
foreach($v_sec_list_info as $v_row){
	$vClass = ( $vCount % 2 == 0 ) ? ' class="odd"' : ' class="normal"';
	
	$vUrlRead='section.php?id='.$v_row['ad_id'] . '&a=read&ffds=SHOW_ALL';
	// $vUrlEdit='section.php?id='.$v_row['ad_id'] . '&a=edit&ffds=SHOW_ALL';
	$vUrlEdit= \E::get('obj_system_module')->build_action_path('agency','sec_edit').$v_row['sec_id'];
	$vUrlDelete='section.php?id='.$v_row['ad_id'] . '&a=dc&ffds=SHOW_ALL';
	$vUrlDblClick=$vUrlEdit;
	// if (isset($sys_vFormDblClickToEdit) && $sys_vFormDblClickToEdit){
		// $vUrlDblClick=$vUrlEdit;
	// }else{
		// $vUrlDblClick=$vUrlRead;
	// }
		 print '<tr'.$vClass.' id="'.$v_hl_key.'_rec'.$vCount.'"';
			print ' onDblClick="recOpen(\''.\E::get('obj_system_lang')->get('AGENCY_SECTIONS').'\',\''.$vUrlDblClick.'\')"';
			print ' onClick="rec_hl(';
			print '\''.$v_hl_key .'\',';
			print '\''.$v_hl_key.'_rec'.$vCount.'\',';
			print '\'\',';
			print '\''.$vUrlRead.'\',';
			print '\''.$vUrlEdit.'\',';
			print '\''.$vUrlDelete.'\'';
			print ');"';
			print ' onMouseOver="recRollOver(\''.$v_hl_key .'\',\''.$v_hl_key.'_rec'.$vCount.'\')"';
			print ' onMouseOut="recRollOut(\''.$v_hl_key .'\',\''.$v_hl_key.'_rec'.$vCount.'\')"';
			print ' style="cursor:default"';
			print '>';
		 if ( true ){
			print '<td align=center><input type="checkbox" name="'.$v_hl_key.'ChkRow'.$vCountDel.'" id="'.$v_hl_key.'ChkRow'.$vCountDel.'" value="'.$v_row['sec_id'].'" onClick="rowCheckSingle(\''.$v_hl_key .'\',this)"></td>';
		 }else{
			print '<td align=center><br></td>';

		 }
			print '<td>'.$vCount.'</td>';
			print '<td>'.$v_row['kwd_value'].'</td>';
			print '</tr>';
	++$vCount;
	++$vCountDel;
}

print <<<END_TABLE
	</tbody>
</table>
END_TABLE;
?>