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

<script language="javascript">
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
</script>

<form id="frm_dept" name="frm_dept" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
<?PHP
\I::create_input( 
		'hidden',
		'hid_selected_lang', 
		'hid_selected_lang', 
		$v_default_lang, 
		'text'
	);
?>

<ul class=subsection_tabs>
<?PHP
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
?>
</ul>

<table cellpadding="2" cellspacing="2" border="0">
<?PHP
//$v_lang_info = \E::get('obj_system_module')->get_supported_lang();

if(isset($v_ag_id) && $v_ag_id != ''){
	\I::create_input( 
		'hidden',
		'ag_id', 
		'ag_id', 
		\U::safe_display_string(isset($v_ag_id) ? $v_ag_id : ""), 
		'text'
	);
}
if(isset($v_ad_id) && $v_ad_id != ''){
	\I::create_input( 
		'hidden',
		'ad_id', 
		'ad_id', 
		\U::safe_display_string(isset($v_ad_id) ? $v_ad_id : ""), 
		'text'
	);
}
?>
<tr>
	<td class='lbl_compulsory'><label ><?PHP echo \E::get('obj_system_lang')->get('DEPARMENT_NAME_ONLY'); ?></label></td>
	<td>
	<?php
	
		foreach($v_lang_info as $v_lang){
			$v_display = $v_lang == $v_default_lang ? 'block' : 'none';
			print "<a name='div_lang_$v_lang'  style='display:$v_display;text-decoration:none;' >"; // style='display:$v_display;'
			$v_text_value = $v_dept_info['lang'][$v_lang]['kwd_value'];
			\I::create_input(
						'text',
						'ad_name_'.$v_lang,
						'ad_name_'.$v_lang,
						$v_text_value,
						'text'
					);
			print '</a>';
		}
	// \I::create_input( 
		// 'text',
		// 'ad_name', 
		// 'ad_name', 
		// \U::safe_display_string(isset($v_ad_name) ? $v_ad_name : ""), 
		// 'text_compulsory',
		// 'style="width:350px;" '
	// );
	?>
	</td>
</tr>
<tr>
	<td class='lbl'>
		<label ><?PHP echo \E::get('obj_system_lang')->get('DEPARMENT_SHORT_NAME_ONLY'); ?></label>
	</td>
	<td>
	<?php
		foreach($v_lang_info as $v_lang){
			$v_display = $v_lang == $v_default_lang ? 'block' : 'none';
			print "<a name='div_lang_$v_lang'  style='display:$v_display;text-decoration:none;' >"; // style='display:$v_display;'
			$v_text_value = $v_dept_info['lang'][$v_lang]['kwd_short_name'];
			\I::create_input(
						'text',
						'ad_short_name_'.$v_lang,
						'ad_short_name_'.$v_lang,
						$v_text_value,
						'text'
					);
			print '</a>';
		}
	// \I::create_input( 
		// 'text',
		// 'ad_short_name', 
		// 'ad_short_name', 
		// \U::safe_display_string(isset($v_ad_short_name) ? $v_ad_short_name : ""), 
		// 'text',
		// 'style="width:350px;" '
	// );
	?>
	</td>
</tr>
<tr>
	<td colspan="2" align="center">
	<?PHP
		\I::create_button('SAVE', 'btn_save', 'javascript:if(validate(document.frm_dept)) document.frm_dept.submit();' );
		print '&nbsp;';
		\I::create_button('CLOSE', 'btn_save', 'javascript:parent.mydhtmlwin.close();' );
	?>
	</td>
</tr>
</table>
</form>
<?PHP
\I::load_error();
?>