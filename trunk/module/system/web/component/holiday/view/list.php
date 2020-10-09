<style>
.tbl_year tr td{
	vertical-align: top;
	background: #E0EEFE;
	border: 1px solid #9B9B9B;
}
.tbl_year tr td.tbl_month_curr{
	background: #F5EFC0;
}
.tbl_year tr td .tbl_weekend{
	background: #FFBBBB;
}
.tbl_year tr td .tbl_holiday{
	background: #6BC7FE;
}
.tbl_year tr td .tbl_day_curr{
	background: #FFFF00;
	font-weight:bold;
	border: 1px solid #000000;
}
.tbl_year tr td .tbl_day_selected{
	color : #ffffff;
	background: #000000;
}
.tbl_month{
	width: 100%;
}
.tbl_month tr th{
	color: #000000;
	text-align:center;
}
.tbl_month tr td{
	text-align:center;
	border: 1px solid #C0C0C0;
}
tr.tbl_week_lbl td{
	color: #ffffff;
	background-color: #858585;
}
</style>
<script language="javascript">
function open_weekend(){
	p_url = '<?php echo \E::get( 'obj_system_module' )->build_action_path( 'holiday', 'weekend', $v_year ) ?>';
	openNewDhtmlWindow(p_url , '<?php echo \E::get( 'obj_curr_module_lang')->get('HOLIDAY_WEEKLY_HOLIDAY') ?>', 520, 450, '', '');
}
function open_misc(p_date){
	p_url = '<?php echo \E::get( 'obj_system_module' )->build_action_path( 'holiday', 'misc') ?>'+p_date;
	openNewDhtmlWindow(p_url , '<?php echo \E::get( 'obj_curr_module_lang')->get('HOLIDAY_MISCELLANEOUS_HOLIDAY') ?>', 550, 450, '', '');
}
</script>
<?PHP
	\I::create_button(
		'NORMAL', 
		'btn_weekend', 
		'javascript:open_weekend();' ,
		\E::get( 'obj_system_module')->get_image_tag('weekly_holiday.png'),
		\E::get( 'obj_system_lang')->get('HOLIDAY_WEEKLY_HOLIDAY'));
	\I::create_button(
		'NORMAL', 
		'btn_holiday', 
		'javascript:open_misc(\''.$v_year.'\');' ,
		\E::get( 'obj_system_module')->get_image_tag('misc_holiday.png'),
		\E::get( 'obj_system_lang')->get('HOLIDAY_MISCELLANEOUS_HOLIDAY'));
	
	print '<table border="0" cellpadding="0" width="100%">';
	print '<tr>';
		print '<td>';
			print '<a href="'.\E::get('obj_system_module')->build_action_path('holiday','list',$v_year-1).'">';
			print \E::get('obj_system_module')->get_image_tag('prev_month.gif');
			print '</a>';
		print '</td>';
		print '<td align="center" style="font-size:24px;font-weight:bold;">'.$v_year.'</td>';
		print '<td align="right">';
			print '<a href="'.\E::get('obj_system_module')->build_action_path('holiday','list',$v_year+1).'">';
			print \E::get('obj_system_module')->get_image_tag('next_month.gif');
			print '</a>';
		print '</td>';
	print '</tr>';
	print '</table>'; 
?>
<table border="0" cellpadding="2" cellspacing="2" width="100%" class="tbl_year">
<tr>
	<td <?php print ($v_year == date('Y') && date('m') == 01) ? 'class="tbl_month_curr"' : ''; ?>><?php print_month(1,$v_year,$v_holiday_info); ?></td>
	<td <?php print ($v_year == date('Y') && date('m') == 02) ? 'class="tbl_month_curr"' : ''; ?>><?php print_month(2,$v_year,$v_holiday_info); ?></td>
	<td <?php print ($v_year == date('Y') && date('m') == 03) ? 'class="tbl_month_curr"' : ''; ?>><?php print_month(3,$v_year,$v_holiday_info); ?></td>
	<td <?php print ($v_year == date('Y') && date('m') == 04) ? 'class="tbl_month_curr"' : ''; ?>><?php print_month(4,$v_year,$v_holiday_info); ?></td>
</tr>
<tr>
	<td <?php print ($v_year == date('Y') && date('m') == 05) ? 'class="tbl_month_curr"' : ''; ?>><?php print_month(5,$v_year,$v_holiday_info); ?></td>
	<td <?php print ($v_year == date('Y') && date('m') == 06) ? 'class="tbl_month_curr"' : ''; ?>><?php print_month(6,$v_year,$v_holiday_info); ?></td>
	<td <?php print ($v_year == date('Y') && date('m') == 07) ? 'class="tbl_month_curr"' : ''; ?>><?php print_month(7,$v_year,$v_holiday_info); ?></td>
	<td <?php print ($v_year == date('Y') && date('m') == 08) ? 'class="tbl_month_curr"' : ''; ?>><?php print_month(8,$v_year,$v_holiday_info); ?></td>
</tr>
<tr>
	<td <?php print ($v_year == date('Y') && date('m') == 09) ? 'class="tbl_month_curr"' : ''; ?>><?php print_month(9,$v_year,$v_holiday_info); ?></td>
	<td <?php print ($v_year == date('Y') && date('m') == 10) ? 'class="tbl_month_curr"' : ''; ?>><?php print_month(10,$v_year,$v_holiday_info); ?></td>
	<td <?php print ($v_year == date('Y') && date('m') == 11) ? 'class="tbl_month_curr"' : ''; ?>><?php print_month(11,$v_year,$v_holiday_info); ?></td>
	<td <?php print ($v_year == date('Y') && date('m') == 12) ? 'class="tbl_month_curr"' : ''; ?>><?php print_month(12,$v_year,$v_holiday_info); ?></td>
</tr>
</table>


<?PHP
/*print '<pre>';
	print_r($v_holiday_info);
print '</pre>';*/

function print_month($p_month, $p_year, $v_holiday_info){
	print '<table cellpadding="2" cellspacing="2" border="0" class="tbl_month">';
	print '<tr>';
		print '<th colspan="7">'.\E::get('obj_kernel_lang')->get('MONTH_LONG_'.$p_month).'</th>';
	print '</tr>';
	print '<tr class="tbl_week_lbl">';
		print '<td>'.\E::get('obj_kernel_lang')->get('WEEKDAY_MEDIUM_1').'</td>';
		print '<td>'.\E::get('obj_kernel_lang')->get('WEEKDAY_MEDIUM_2').'</td>';
		print '<td>'.\E::get('obj_kernel_lang')->get('WEEKDAY_MEDIUM_3').'</td>';
		print '<td>'.\E::get('obj_kernel_lang')->get('WEEKDAY_MEDIUM_4').'</td>';
		print '<td>'.\E::get('obj_kernel_lang')->get('WEEKDAY_MEDIUM_5').'</td>';
		print '<td>'.\E::get('obj_kernel_lang')->get('WEEKDAY_MEDIUM_6').'</td>';
		print '<td>'.\E::get('obj_kernel_lang')->get('WEEKDAY_MEDIUM_7').'</td>';
	print '</tr>';
		
	$v_str_day = '01';
	$v_weekday_start = date("N", mktime(0, 0, 0, $p_month, 1, $p_year));
	//print '<tr colspan="7"><td>'.$v_weekday_start.'</td></tr>';
	
	for($i=1; $i < $v_weekday_start; ++$i){
		print ($i==1) ? '<tr>' : '';
		print '<td style="background-color:transparent"></td>';
	}
	
	$v_str_month = str_pad($p_month, 2, "0", STR_PAD_LEFT);
	do{
		$v_class = '';
		$v_date = $p_year.'-'.$v_str_month.'-'.$v_str_day;
		if($v_date == date('Y-m-d')){
			$v_class = 'tbl_day_curr';
		}else if(isset($v_holiday_info[$v_date])){
			$v_arr_keyword = explode('_',$v_holiday_info[$v_date]['hol_key']);
			if(count($v_arr_keyword) < 4 ){
				if(strtoupper($v_arr_keyword[1]) == 'WEEKLY'){
					$v_class = 'tbl_weekend';
				}else if(strtoupper($v_arr_keyword[1]) == 'MISC'){
					$v_class = 'tbl_holiday';
				}
			}
		}
		
		$v_class_mouseover = 'tbl_day_selected';
		print ($i%7==1) ? '</tr><tr>' : '';
		print "<td class = '$v_class' ".
				"onMouseOver = 'this.className=\"$v_class_mouseover\"' ".
				"onMouseOut = 'this.className=\"$v_class\"' ".
				"style = 'cursor:pointer' ".
				"onClick = 'open_misc(\"$p_year/$v_str_month/$v_str_day/\")' ".
				"title = '{$v_holiday_info[$v_date]['kwd_value']}' ".
				">".(int)$v_str_day."</td>";
		
		$v_arr_next_day = \U::add_day($p_year.'-'.$v_str_month.'-'.$v_str_day,1,'ARRAY_DATE');
		$v_str_day = $v_arr_next_day['day'];
		++$i;
	}while($v_arr_next_day['month']==$v_str_month);
	print ($i%7==1) ? '</tr>' : '';
	
	print '</table>';
}

?>