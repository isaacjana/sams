<?PHP
	$v_check_1 = '';
	$v_check_2 = 'checked';
	$v_check_3 = '';
	if(isset($v_ag_cat_id) && strtoupper($v_ag_cat_id) == '1'){
		$v_check_1 = 'checked';
		$v_check_2 = '';
		$v_check_3 = '';
	}else if(isset($v_ag_cat_id) && strtoupper($v_ag_cat_id) == '3'){
		$v_check_1 = '';
		$v_check_2 = '';
		$v_check_3 = 'checked';
	}
?>
<form id="frm_section" name="frm_section" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
<table cellpadding="2" cellspacing="2" border="0">
<?PHP
//$v_lang_info = \E::get('obj_system_module')->get_supported_lang();

if(isset($v_sec_id) && $v_sec_id != ''){
	\I::create_input( 
		'hidden',
		'sec_id', 
		'sec_id', 
		\U::safe_display_string(isset($v_sec_id) ? $v_sec_id : ""), 
		'text', 
		'style="width:500px;" ',
		''
	);
?>
	<tr>
		<td class='lbl'><label><?PHP echo \E::get('obj_system_lang')->get('AGENCY'); ?></label></td>
		<td>
		<?php echo \U::safe_display_string(isset($v_ag_name) ? $v_ag_name : "-"); ?>
		</td>
	</tr>
	<tr>
		<td class='lbl'>
			<label for="ag_short_name"><?PHP echo \E::get('obj_system_lang')->get('AGENCY_DEPT'); ?></label>
		</td>
		<td>
		<?php
			
			if(isset($v_ad_name)){
				if(strtoupper($v_ad_name) == 'HQ'){
					echo \U::safe_display_string(\E::get('obj_system_lang')->get('AGENCY_DEPT_HQ'));
				}else{
					echo \U::safe_display_string($v_ad_name);
				}
			}else{
				echo '-';
			}
		?>
		</td>
	</tr>
<?PHP
}else{
?>
<tr>
	<td class='lbl_compulsory'>
		<label><?PHP echo \E::get('obj_system_lang')->get('AGENCY'); ?></label>
	</td>
	<td>
		<?PHP
		$v_post = \E::get_session('position');
		$v_default_search_ag = '';
		if(is_array($v_post)){
			echo '<select name="agency" id="agency">';
			foreach($v_post as $v_row){
				if($v_default_search_ag == ''){
					$v_default_search_ag = $v_row['ag_id'].'@@'.$v_row['ad_id'];
				}
				unset($v_cond);
				$v_cond['ag_id'] = $v_row['ag_id'];
				$v_agency_info = \E::get('obj_system_module')->agency_get($v_cond);
				
				unset($v_cond);
				$v_cond['ag_id'] = $v_row['ag_id'];
				$v_cond['ad_id'] = $v_row['ad_id'];
				$v_dept_info = \E::get('obj_system_module')->agency_dept_get($v_cond);
				
				$v_selected = ($v_row['ag_id'].'@@'.$v_row['ad_id']) == $v_param['search_agency']  ? 'selected' : '';
				print '<option value="'.$v_row['ag_id'].'@@'.$v_row['ad_id'].'" '.$v_selected.'>';
					print \E::get('obj_system_module')->agency_display( $v_agency_info['kwd_value'], $v_agency_info['kwd_short_name'] );
					if($v_row['ad_id'] != 'hq'){
						print ', ';
						print \E::get('obj_system_module')->dept_display( $v_dept_info['kwd_value'], $v_dept_info['kwd_short_name'] );
					}
				print '</option>';
			}
			echo '</select>';
		}
	?>
	</td>
</tr>
<?PHP
}
?>
<tr>
	<td class='lbl_compulsory'><label for="sec_name"><?PHP echo \E::get('obj_system_lang')->get('AGENCY_SECTION_NAME'); ?></label></td>
	<td>
	<?php
	\I::create_input( 
		'text',
		'sec_name', 
		'sec_name', 
		\U::safe_display_string(isset($v_sec_name) ? $v_sec_name : ""), 
		'text_compulsory', 
		'style="width:500px;" ',
		''
	);
	?>
	</td>
</tr>
<tr>
	<td class='lbl'>
		<label for="sec_short_name"><?PHP echo \E::get('obj_system_lang')->get('AGENCY_SECTION_SHORT_NAME'); ?></label>
	</td>
	<td>
	<?php
	\I::create_input( 
		'text',
		'sec_short_name', 
		'sec_short_name', 
		\U::safe_display_string(isset($v_sec_short_name) ? $v_sec_short_name : ""), 
		'text', 
		'style="width:500px;" ',
		''
	);
	?>
	</td>
</tr>
<tr>
	<td colspan="2" align="center">
	<?PHP
		if(isset($v_sec_id) && $v_sec_id != ''){
			\I::create_button('BACK', 'btn_back', \E::get('obj_system_module')->build_action_path('section','view',$v_sec_id));
		}else{
			\I::create_button('BACK', 'btn_back', \E::get('obj_system_module')->build_action_path('section','list'));
		}
		print '&nbsp;';
		\I::create_button('SAVE', 'btn_save', 'javascript:if(validate(document.frm_user)) document.frm_section.submit();' );
	?>
	</td>
</tr>
</table>
</form>
<?PHP
\I::load_error();
?>