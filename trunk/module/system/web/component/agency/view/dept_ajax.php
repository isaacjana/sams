<?PHP
$v_hl_key = 'dept';
//*******************************************************************************
//* action buttons
//*******************************************************************************
$v_display_btn = false;
if(\U::is_user_able_to('ADD',$v_access_num)){
	\I::create_button( 'ADD', 'btn_add', 'javascript:deptRecNew()');
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

print <<<TABLE
	<input type="hidden" name="{$v_hl_key}_row_delete" id="{$v_hl_key}_row_delete" value="">
	<table border=0 cellpadding=3 cellspacing=1 class="record_listing" width=100%>
	<thead>
		<tr>
			<th width="10px"><input type="checkbox" name="chkAll" id="chkAll" onClick="rowCheckUncheckAll('$v_hl_key',this.checked)"></th>
TABLE;
		print '<th width="10px">'.\E::get( 'obj_kernel_lang')->get('TBL_NO').'</th>';
		print '<th>'.\E::get('obj_system_lang')->get('DEPARMENT_NAME_ONLY').'</th>';
		
print <<<TABLE
		</tr>
	</thead>
	<tbody>
TABLE;

$vCount = 1;
$vCountDel = 1;
foreach($v_dept_list_info as $v_row){
	$vClass = ( $vCount % 2 == 0 ) ? ' class="odd"' : ' class="normal"';
	
	$vUrlRead='http://www.google.com.my';
	$vUrlRead='';
	$vUrlEdit= \E::get('obj_system_module')->build_action_path('agency','dept_edit').$v_row['ag_id'].'/'.$v_row['ad_id'];
	$vUrlDelete='http://www.google.com.my';
	$vUrlDelete='';
	$vUrlSec = \E::get('obj_system_module')->build_action_path('agency','sec_ajax').'?ag_id='.$v_row['ag_id'].'&ad_id='.$v_row['ad_id'];
	// if (isset($sys_vFormDblClickToEdit) && $sys_vFormDblClickToEdit){
		// $vUrlDblClick=$vUrlEdit;
	// }else{
		// $vUrlDblClick=$vUrlRead;
	// }
	$vUrlDblClick=$vUrlEdit;
	print '<tr'.$vClass.' id="'.$v_hl_key.'_rec'.$vCount.'"';
		print ' onDblClick="recOpen(\''.\E::get('obj_system_lang')->get('DEPARMENT').'\',\''.$vUrlDblClick.'\')"';
		print ' onClick="rec_hl(';
		print '\''.$v_hl_key .'\',';
		print '\''.$v_hl_key.'_rec'.$vCount.'\',';
		print '\'\',';
		print '\''.$vUrlRead.'\',';
		print '\''.$vUrlEdit.'\',';
		print '\''.$vUrlDelete.'\'';
		print '); ';
		print 'secDeptRecList(\''.$vUrlSec.'\');';
		print '"';
		print ' onMouseOver="recRollOver(\''.$v_hl_key .'\',\''.$v_hl_key.'_rec'.$vCount.'\')"';
		print ' onMouseOut="recRollOut(\''.$v_hl_key .'\',\''.$v_hl_key.'_rec'.$vCount.'\')"';
		print ' style="cursor:default"';
		print '>';
		if ( true ){
			print '<td align=center><input type="checkbox" name="'.$v_hl_key.'ChkRow'.$vCountDel.'" id="'.$v_hl_key.'ChkRow'.$vCountDel.'" value="'.$v_row['ad_id'].'" onClick="rowCheckSingle(\''.$v_hl_key .'\',this)"></td>';
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