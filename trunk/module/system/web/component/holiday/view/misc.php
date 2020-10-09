<?PHP
// print '<pre>';
	// print_r($v_holiday_info);
// print '</pre>';

$v_month_array = array(
						"01" => \E::get('obj_kernel_lang')->get('MONTH_LONG_1'),
						"02" => \E::get('obj_kernel_lang')->get('MONTH_LONG_2'),
						"03" => \E::get('obj_kernel_lang')->get('MONTH_LONG_3'),
						"04" => \E::get('obj_kernel_lang')->get('MONTH_LONG_4'),
						"05" => \E::get('obj_kernel_lang')->get('MONTH_LONG_5'),
						"06" => \E::get('obj_kernel_lang')->get('MONTH_LONG_6'),
						"07" => \E::get('obj_kernel_lang')->get('MONTH_LONG_7'),
						"08" => \E::get('obj_kernel_lang')->get('MONTH_LONG_8'),
						"09" => \E::get('obj_kernel_lang')->get('MONTH_LONG_9'),
						"10" => \E::get('obj_kernel_lang')->get('MONTH_LONG_10'),
						"11" => \E::get('obj_kernel_lang')->get('MONTH_LONG_11'),
						"12" => \E::get('obj_kernel_lang')->get('MONTH_LONG_12')
						);
$v_day_array =  array(
						"01" => 31,
						"02" => (date("L", mktime(0, 0, 0, 1, 1, $v_year)) == 1 ? 29 : 28 ),
						"03" => 31,
						"04" => 30,
						"05" => 31,
						"06" => 30,
						"07" => 31,
						"08" => 31,
						"09" => 30,
						"10" => 31,
						"11" => 30,
						"12" => 31
						);
?>
<style>
.div_dis_weekly{
	border: 1px solid #C0C0C0;
	background: #E0EEFE;
	padding: 4px;
}
.td_tag_selected{
	border: 1px solid #C0C0C0;
	background: #E0EEFE;
	padding: 4px;
	font-weight: bold;
}
.td_tag{
	border: 1px solid #C0C0C0;
	background: #EBF1F1;
	padding: 4px;
	font-weight: bold;
}
</style>
<script language="javascript">
function weekday_action(e){
	if(e.checked){
	<?PHP
		foreach($v_lang_info as $v_lang){
			print 'document.getElementById("div_"+e.value+"_'.$v_lang.'").style.display = "block";';
		}
	?>
	}else{
	<?PHP
		foreach($v_lang_info as $v_lang){
			print 'document.getElementById("div_"+e.value+"_'.$v_lang.'").style.display = "none";';
		}
	?>
	}
}
function weekday_selected(p_lang){
	j_selected_lang = document.getElementById('hid_selected_lang').value;
	if(j_selected_lang != p_lang){
		obj = document.getElementsByName('div_lang_'+j_selected_lang);
		for(i=0;i<obj.length;++i){
			obj[i].style.display = 'none';
		}
		document.getElementById('tag_'+j_selected_lang).className = '';
		
		obj = document.getElementsByName('div_lang_'+p_lang);
		for(i=0;i<obj.length;++i){
			obj[i].style.display = 'block';
		}
		document.getElementById('tag_'+p_lang).className = 'active';
		
		document.getElementById('hid_selected_lang').value = p_lang;
	}
}
function month_selected(p_month,p_day){
	var day_of_month = new Array();
	<?PHP
	foreach($v_day_array as $v_key => $v_value){
		print "day_of_month['$v_key'] = '$v_value';".chr(10);
	}
	?>
	
	obj_month = document.getElementById(p_month);
	obj_day = document.getElementById(p_day);
	
	day_count = obj_day.length;
	day_month = day_of_month[obj_month.options[obj_month.selectedIndex].value];
	
	if(day_count > day_month){
		while(day_count > day_month){
			obj_day.remove(obj_day.length-1);
			--day_count;
		}
	}else if(day_count < day_month){
		while(day_count < day_month){
			value = parseInt(obj_day.options[obj_day.length-1].value)+1;
			var optNew = document.createElement('option');
			optNew.text = value;
			optNew.value = value;
			
			try {
				obj_day.add(optNew, null); // standards compliant; doesn't work in IE
			}catch(ex) {
				obj_day.add(optNew); // IE only
			}
			++day_count;
		}
	}
}
function new_holiday(e, usr_id){
	// if(e == '') row=-2;
	// else	row = e.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.rowIndex;
	
	var _table = document.getElementById('tbl_holiday').insertRow(-1);
	var total_count = parseInt(document.getElementById('total_num').value);
	var cell0 = _table.insertCell(0);
	var cell1 = _table.insertCell(1);
	var cell2 = _table.insertCell(2);
	
	cell1.style.textAlign = "right";
	cell0.innerHTML = ReplaceSubstring(document.getElementById("td_1").innerHTML,'QQQ',total_count);
	cell1.innerHTML = ReplaceSubstring(document.getElementById("td_2").innerHTML,'QQQ',total_count);
	<?PHP
	if($v_month == '' && $v_day == ''){
		print 'cell2.innerHTML = ReplaceSubstring(document.getElementById("td_3").innerHTML,"QQQ",total_count);';
	}
	?>
	
	++total_count;
	 document.getElementById('total_num').value = total_count;
}
function remove_holiday(e, p_num){
	obj = document.getElementById('hol_id_' + p_num);
	if(trim(obj.value)!= ''){
		if(document.getElementById('del_hol_id').value == '') document.getElementById('del_hol_id').value = obj.value;
		else document.getElementById('del_hol_id').value += ','+obj.value;
	}
	
	row = e.parentNode.parentNode.parentNode;
	row.parentNode.removeChild(row);
}
function delete_holiday(){
	obj_hol = document.getElementsByName('hol_id[]');
	for(i=0 ; i < obj_hol.length ; ++i){
		if( trim(obj_hol[i].value) != ''){
			if(document.getElementById('del_hol_id').value == '') document.getElementById('del_hol_id').value = obj_hol[i].value;
			else document.getElementById('del_hol_id').value += ','+obj_hol[i].value;
		}
	}
	
	obj = document.getElementById('tbl_holiday').childNodes[0];
	while( obj.childNodes[0] && obj.childNodes.length  > 0){
		node = obj.childNodes[0];
		node.parentNode.removeChild(node);
	}
	document.frm_holiday.submit();
}
</script>

<style>
/* Subsection Tabs
--------------------*/
ul.subsection_tabs {
	list-style:none;
	margin:0 0 0 0;
	padding:0;
	clear:both;
	border-bottom:1px solid #ccc;
	height:20px;
	clear:both;
}

ul.subsection_tabs li.tab {
	float:left;
	margin-right:7px;
	text-align:center;
}

ul.subsection_tabs li.tab a {
	display:block;
	height:20px;
	padding:0 6px;
	background-color:#fff;
	color:#666;
	width:80px;
}

ul.subsection_tabs li.tab a:hover {
	color:#666;
}

ul.subsection_tabs li.tab a.active {
	background-color:#ddd;
}

ul.subsection_tabs li.source_code {
	float:right;
}
</style>

<?PHP

for($i=1 ; $i <= 7 ; ++$i){
	if(isset($v_post)){
		$v_weekday_setting[$i] = isset($v_post['chk_'.$i])? true : false;
	}else{
		$v_weekday_setting[$i] = (isset($v_holiday_info[$v_year.'_WEEKLY_'.$v_weekday_name[$i].'_PROFILE'])) ? true : false;
	}
}

print '<form name="frm_holiday" method="post">';


\I::create_input( 
		'hidden',
		'hid_selected_lang', 
		'hid_selected_lang', 
		$v_default_lang, 
		'text'
	);

print "<ul class=subsection_tabs>";
foreach($v_lang_info as $v_lang){
	$v_class = $v_lang == $v_default_lang ? 'class="active"' : '';
	
	print '<li class=tab>';
		print '<a href="javascript:void(0);" id="tag_'.$v_lang.'" '.$v_class.' onClick="weekday_selected(\''.$v_lang.'\')">';
		print \E::get('obj_system_lang')->get('LANG_'.strtoupper($v_lang));
		print '</a>';
	print '</li>';
	
	/*print "<div class='$v_class' id='tag_$v_lang'  style='float:left' onClick='weekday_selected(\"$v_lang\")'>";
		print \E::get('obj_system_lang')->get('LANG_'.$v_lang);
	print "</div>";*/
}
print "</ul>";

// print '<pre>';
	// print_r($_POST);
// print '</pre>';

print "<div class='div_dis_weekly' >";
print '<table id="tbl_holiday" border="0" cellpadding="1" cellspacing="3" width="99%">';
$v_num = 0;
foreach($v_holiday_info as $v_row){
	print '<tr>';
		print '<td>';
			$v_date_arr = explode('-',$v_row['hol_date']);
			print '&nbsp;'.\E::get('obj_kernel_lang')->get('MONTH').'&nbsp;';
			\I::create_input( 
						'hidden',
						'hol_id[]', 
						'hol_id_'.$v_num,
						$v_row['hol_id'], 
						'text'
					);
			
			print "<select name='month[]' id='month_$v_num' onChange='month_selected(\"month_$v_num\",\"day_$v_num\")' >";
				foreach($v_month_array as $v_key => $v_value){
					$v_selected = ($v_date_arr[1] == $v_key ? 'SELECTED' : '');
					print "<option value='$v_key' $v_selected >$v_value</option>";
				}
			print '</select>';
			
			print '&nbsp;&nbsp;'.\E::get('obj_kernel_lang')->get('DAY').'&nbsp;';
			print "<select name='day[]' id='day_$v_num' >";
				for($n=1 ; $n <= $v_day_array[$v_date_arr[1]] ; ++$n ){
					$v_selected = ($v_date_arr[2] == $n ? 'SELECTED' : '');
					print "<option value='".str_pad($n, 2, "0", STR_PAD_LEFT)."' $v_selected >$n</option>";
				}
			print '</select>';
		print '</td>';
		print '<td align="right" >';
		foreach($v_lang_info as $v_lang){
			$v_display = $v_lang == $v_default_lang ? 'block' : 'none';
			print "<a name='div_lang_$v_lang'  style='display:$v_display;text-decoration:none;' >"; // style='display:$v_display;'
			$v_text_value = $v_row['lang'][$v_lang]['kwd_value'];
			\I::create_input(
						'text',
						'desc_'.$v_lang."[]",
						'desc_'.$v_lang."_".$v_num,
						$v_text_value,
						'text'
					);
			print '</a>';
		}
		print '</td>';
		if($v_month == '' && $v_day == ''){
			print '<td width="50px;">';
				\I::create_button(
					'NORMAL', 
					'btn_add', 
					'javascript:new_holiday();',
					'+'
				);
				\I::create_button(
					'NORMAL', 
					'btn_DEL', 
					'javascript:void(0)" onClick="remove_holiday(this,\''.$v_num.'\');',
					'&nbsp;-'
				);
			print '</td>';
		}
	print '</tr>';
	++$v_num;
}

if(!is_array($v_holiday_info) && $v_month != '' && $v_day != ''){
	print '<tr>';
		print '<td>';
			$v_date_arr[0] = $v_year;
			$v_date_arr[1] = $v_month;
			$v_date_arr[2] = $v_day;
			print '&nbsp;'.\E::get('obj_kernel_lang')->get('MONTH').'&nbsp;';
			\I::create_input( 
						'hidden',
						'hol_id[]', 
						'hol_id_'.$v_num,
						'', 
						'text'
					);
			
			print "<select name='month[]' id='month_$v_num' onChange='month_selected(\"month_$v_num\",\"day_$v_num\")' >";
				foreach($v_month_array as $v_key => $v_value){
					$v_selected = ($v_date_arr[1] == $v_key ? 'SELECTED' : '');
					print "<option value='$v_key' $v_selected >$v_value</option>";
				}
			print '</select>';
			
			print '&nbsp;&nbsp;'.\E::get('obj_kernel_lang')->get('DAY').'&nbsp;';
			print "<select name='day[]' id='day_$v_num' >";
				for($n=1 ; $n <= $v_day_array[$v_date_arr[1]] ; ++$n ){
					$v_selected = ($v_date_arr[2] == $n ? 'SELECTED' : '');
					print "<option value='".str_pad($n, 2, "0", STR_PAD_LEFT)."' $v_selected >$n</option>";
				}
			print '</select>';
		print '</td>';
		print '<td align="right" >';
		foreach($v_lang_info as $v_lang){
			$v_display = $v_lang == $v_default_lang ? 'block' : 'none';
			print "<a name='div_lang_$v_lang'  style='display:$v_display;text-decoration:none;' >"; // style='display:$v_display;'
			$v_text_value = $v_row['lang'][$v_lang]['kwd_value'];
			\I::create_input(
						'text',
						'desc_'.$v_lang."[]",
						'desc_'.$v_lang."_".$v_num,
						'',
						'text'
					);
			print '</a>';
		}
		print '</td>';
	print '</tr>';
	++$v_num;
}
print '</table>';
print '</div>';

\I::create_input(
		'hidden',
		'total_num', 
		'total_num', 
		$v_num, 
		'text'
	);
\I::create_input(
		'hidden',
		'del_hol_id', 
		'del_hol_id', 
		(isset($v_post['del_hol_id']) ? $v_post['del_hol_id'] : ''), 
		'text'
	);
print "</form>";
?>
<br/>
<center>
<?PHP
	if($v_month == '' && $v_day == ''){
		\I::create_button(
					'ADD', 
					'btn_add', 
					'javascript:new_holiday();'
				);
	}
	\I::create_button(
		'SAVE', 
		'btn_submit', 
		'javascript:if(validate(document.frm_holiday)) document.frm_holiday.submit();' 
	);
	if($v_month != '' && $v_day != '' && is_array($v_holiday_info)){
		\I::create_button(
			'DELETE', 
			'btn_del', 
			'javascript:delete_holiday();' 
		);
	}
	\I::create_button(
		'CLOSE', 
		'btn_close', 
		'javascript:window.parent.mydhtmlwin.close();' 
	);
?>
</center>
<?PHP
print "<div id='td_1' style='display:none;' >";
	$v_date_arr = explode('-',$v_year.'-01-01');
	print '&nbsp;'.\E::get('obj_kernel_lang')->get('MONTH').'&nbsp;';
	\I::create_input( 
				'hidden',
				'hol_id[]', 
				'hol_id_QQQ',
				'', 
				'text'
			);
	
	print "<select name='month[]' id='month_QQQ' onChange='month_selected(\"month_QQQ\",\"day_QQQ\")' >";
		foreach($v_month_array as $v_key => $v_value){
			$v_selected = ($v_date_arr[1] == $v_key ? 'SELECTED' : '');
			print "<option value='$v_key' $v_selected >$v_value</option>";
		}
	print '</select>';
	
	print '&nbsp;&nbsp;'.\E::get('obj_kernel_lang')->get('DAY').'&nbsp;';
	print "<select name='day[]' id='day_QQQ' >";
		for($n=1 ; $n <= $v_day_array[$v_date_arr[1]] ; ++$n ){
			$v_selected = ($v_date_arr[2] == $n ? 'SELECTED' : '');
			print "<option value='".str_pad($n, 2, "0", STR_PAD_LEFT)."' $v_selected >$n</option>";
		}
	print '</select>';
print "</div>";
print "<div id='td_2' style='display:none;' >";
	foreach($v_lang_info as $v_lang){
		$v_display = $v_lang == $v_default_lang ? 'block' : 'none';
		print "<a name='div_lang_$v_lang'  style='display:$v_display;text-decoration:none;' >"; // style='display:$v_display;'
		\I::create_input(
						'text',
						'desc_'.$v_lang."[]",
						'desc_'.$v_lang."_QQQ",
						'',
						'text'
					);
		print '</a>';
	}
print "</div>";
if($v_month == '' && $v_day == ''){
	print "<div id='td_3' style='display:none;' >";
		\I::create_button(
			'NORMAL', 
			'btn_add', 
			'javascript:new_holiday();',
			'+'
		);
		\I::create_button(
			'NORMAL', 
			'btn_DEL', 
			'javascript:void(0)" onClick="remove_holiday(this,\'QQQ\');',
			'&nbsp;-'
		);
	print "</div>";
}

\I::load_error();
?>
<style>
.error{
	display:block;
}
</style>