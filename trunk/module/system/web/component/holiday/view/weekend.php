<?PHP
// print '<pre>';
	// print_r($v_holiday_info);
// print '</pre>';
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
		document.getElementById('div_lang_'+j_selected_lang).style.display = 'none';
		document.getElementById('tag_'+j_selected_lang).className = '';
		document.getElementById('div_lang_'+p_lang).style.display = 'block';
		document.getElementById('tag_'+p_lang).className = 'active';
		document.getElementById('hid_selected_lang').value = p_lang;
	}
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
$v_col = 4;
$v_start_col = 1;
print "<div class='div_dis_weekly'>";
print \E::get('obj_system_lang')->get('HOLIDAY_SET_EVERY');
print "<table border='0' width='98%' cellpadding='2' cellspacing='2'>";
foreach($v_arr_weekday as $v_value){
	if($v_start_col%$v_col == 1){
		if($v_start_col != 1) print "</tr>";
		print "<tr><td width='4%'></td>";
	}
	print "<td width='24%'>";
		$v_weekday_profile_name = $v_year.'_WEEKLY_'.$v_weekday_name[$v_value].'_PROFILE';
		\I::create_input( 
			'hidden',
			'hol_id_'.$v_value, 
			'hol_id_'.$v_value, 
			($v_weekday_setting[$v_value] ? \U::safe_display_string($v_holiday_info[$v_weekday_profile_name]['hol_id']) : '' ), 
			'text'
		);
		print "<input type='checkbox' id='chk_$v_value' name='chk_$v_value' value='$v_value' onclick='weekday_action(this)' " . ($v_weekday_setting[$v_value] ? "checked" : "") . " />";
		print "<label for='chk_$v_value'>".\E::get('obj_kernel_lang')->get('WEEKDAY_LONG_'.$v_value)."</label>";
	print "</td>";
	++$v_start_col;
}
print "</tr>";
print "</table>";
print \E::get('obj_system_lang')->get('HOLIDAY_AS_HOLIDAY');
print "</div>";

print '<br/>';

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

foreach($v_lang_info as $v_lang){
	$v_class_lang = '\\moonlight\\lang\\' . $v_lang;
	$v_obj_lang[$v_lang] = new $v_class_lang;
}

foreach($v_lang_info as $v_lang){
	$v_display = $v_lang == $v_default_lang ? 'block' : 'none';
	print "<div class='div_dis_weekly' id='div_lang_$v_lang' style='display:$v_display;' >";
		foreach($v_arr_weekday as $v_weekday){
			$v_display = ($v_weekday_setting[$v_weekday]) ? 'block' : 'none';
			$v_weekday_profile_name = $v_year.'_WEEKLY_'.$v_weekday_name[$v_weekday].'_PROFILE';
			
			print "<div id='div_{$v_weekday}_$v_lang' style='display:$v_display;'>";
			print '<table border="0" cellpadding="1" cellspacing="1" width="98%">';
			print '<tr>';
				print '<td>';
				print str_replace('<WEEKDAY>',\E::get('obj_kernel_lang')->get('WEEKDAY_LONG_'.$v_weekday),\E::get('obj_system_lang')->get('HOLIDAY_HOLIDAY_FOR_WEEKDAY_IS_CALLED'));
				print '</td>';
				if(isset($v_post['day_'.$v_lang."_".$v_weekday])){
					$v_text_value = $v_post['day_'.$v_lang."_".$v_weekday];
				}else{
					$v_text_value = (isset($v_holiday_info[$v_weekday_profile_name])) ? 
							\U::safe_display_string($v_holiday_info[$v_weekday_profile_name]['lang'][$v_lang]['kwd_value'])
							: 
							\U::safe_display_string($v_obj_lang[$v_lang]->get('WEEKDAY_LONG_'.$v_weekday));
				}
				print '<td width="35%" align="right">';
					\I::create_input( 
						'text',
						'day_'.$v_lang."_".$v_weekday, 
						'day_'.$v_lang."_".$v_weekday, 
						$v_text_value
						, 
						'text'
					);
				print '</td>';
			print '</tr>';
			print '</table>';
			print '</div>';
		}
	print "</div>";
}
unset($v_obj_lang);
print "</form>";
?>
<br/>
<center>
<?PHP
	\I::create_button(
		'SAVE', 
		'btn_submit', 
		'javascript:if(validate(document.frm_holiday)) document.frm_holiday.submit();' 
	);
	\I::create_button(
		'CLOSE', 
		'btn_close', 
		'javascript:window.parent.mydhtmlwin.close();' 
	);
?>
</center>
<?PHP
\I::load_error();
?>