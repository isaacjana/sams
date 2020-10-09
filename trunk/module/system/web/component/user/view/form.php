<?PHP
	$v_check_l = 'checked';
	$v_check_n = '';
	//$v_check_c = '';
	if(isset($v_user_type) && strtoupper($v_user_type) == 'SYSTEM'){
		$v_check_l = '';
		$v_check_n = 'checked';
		//$v_check_c = '';
	}else if(isset($v_user_type) && strtoupper($v_user_type) == 'MMS_COMMON'){
		$v_check_l = '';
		$v_check_n = '';
		//$v_check_c = 'checked';
	}
	
	\I::load_error('MESSAGE',false);
?>
<form id="frm_user" name="frm_user" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
<table cellpadding="2" cellspacing="2" border="0">
<?PHP
	if(isset($v_usr_id) && $v_usr_id != ''){
		\I::create_input( 
			'hidden',
			'usr_id', 
			'usr_id', 
			\U::safe_display_string(isset($v_usr_id) ? $v_usr_id : ""), 
			'text', 
			'style="width:500px;" '.($v_check_n == 'checked' ? 'readonly' : ''),
			''
		);
		\I::create_input( 
			'hidden',
			'pos_id', 
			'pos_id', 
			\U::safe_display_string(isset($v_pos_id) ? $v_pos_id : ""), 
			'text', 
			'style="width:500px;" '.($v_check_n == 'checked' ? 'readonly' : ''),
			''
		);
		\I::create_input( 
			'hidden',
			'title_id', 
			'title_id', 
			\U::safe_display_string(isset($v_title_id) ? $v_title_id : ""), 
			'text', 
			'style="width:500px;" '.($v_check_n == 'checked' ? 'readonly' : ''),
			''
		);
	}else{
?>
		<tr>
			<td class='lbl_compulsory'>
				<label><?PHP echo \E::get('obj_system_lang')->get('USER_AUTHENTICATION_METHOD'); ?></label>
			</td>
			<td>
				<input type='radio' id='user_type_l' name='user_type' value='LDAP' <?php echo $v_check_l; ?>  onclick="window.location='<?PHP echo \E::get('obj_system_module')->build_action_path('user','add','LDAP');?>'" />
					<label for='user_type_l' ><?PHP echo \E::get('obj_system_lang')->get('USER_SARAWAK_LDAP'); ?></label>
				<input type='radio' id='user_type_n' name='user_type' value='SYSTEM' <?php echo $v_check_n; ?> onclick="window.location='<?PHP echo \E::get('obj_system_module')->build_action_path('user','add','SYSTEM');?>'"/>
					<label for='user_type_n' ><?PHP echo \E::get('obj_system_lang')->get('USER_NON_SARAWAKNET'); ?></label>
				<!--<input type='radio' id='user_type_c' name='user_type' value='MMS_COMMON' <?php echo $v_check_c; ?> onclick="window.location='<?PHP echo \E::get('obj_system_module')->build_action_path('user','add','mms_common');?>'"/>
					<label for='user_type_c' ><?PHP echo \E::get('obj_system_lang')->get('USER_FROM_MMS_COMMON'); ?></label>-->
			</td>
		</tr>
<?PHP
	}
	
if($v_user_type != 'mms_participant'){
	?>
	<tr>
		<td class='lbl_compulsory'><label><?PHP echo \E::get('obj_system_lang')->get('USER_ID'); ?></label></td>
		<td>
		<?php
		/*if( $v_check_c == 'checked' && (!isset($v_usr_id) || $v_usr_id == '')){
			print \E::get('obj_system_module')->get_config()->get('db/comm_usr_id').'&nbsp;';
		}*/
		\I::create_input( 
			'text',
			'usr_short_name', 
			'usr_short_name', 
			\U::safe_display_string(isset($v_usr_short_name) ? $v_usr_short_name : ""), 
			'text_compulsory', 
			'style="width:500px;" '.(isset($v_usr_id) && $v_usr_id != '' ? 'readonly ' : '').($v_check_n == 'checked' ? 'readonly' : ''),
			''
		);
		if((!isset($v_usr_id) || $v_usr_id == '') && $v_check_l == 'checked' ){
			print '&nbsp;&nbsp;';
			\I::create_button(
				'button',
				'btn_ldap_search',
				'javascript:checkLdapUser();', //javascript
				'', //image
				\E::get('obj_system_lang')->get('USER_VERIFY_USER_ID')
			);
		}
		?>
		<div id="divMsgLdapCheck" style="padding:2px"></div>
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type='checkbox' id='usr_comm' name='usr_comm' value='1' onclick='tickComm(this)' <?php echo (isset($v_usr_comm) && $v_usr_comm == '1') ? 'checked' : '' ; ?> />
			<label for='usr_comm'><?PHP echo \E::get('obj_system_lang')->get('USER_FROM_MMS_COMMON'); ?></label>
		</td>
	</tr>
	<?PHP
}

//if( $v_check_c != 'checked' ){
?>
	<tr>
		<td class='lbl'><label><?PHP echo \E::get('obj_system_lang')->get('USER_TITLE'); ?></label></td>
		<td>
		<select id="usr_title_id" name="usr_title_id" >
		<option value=''></option>
		<?php
			if(isset($v_title_info) && is_array($v_title_info)){
				foreach($v_title_info as $v_row){
					$v_selected = ($v_row['kwd_code'] == $v_usr_title_id ? 'selected' : '' );
					print "<option value='".$v_row['kwd_code']."' $v_selected >".$v_row['kwd_value'].'</option>';
				}
			}
		?>
		</select>
		</td>
	</tr>
<?PHP
//}
?>
<tr>
	<td class='lbl_compulsory'><label><?PHP echo \E::get('obj_system_lang')->get('USER_NAME'); ?></label></td>
	<td>
	<?php
		\I::create_input(
			'text',
			'usr_full_name', 
			'usr_full_name', 
			\U::safe_display_string(isset($v_usr_full_name) ? $v_usr_full_name : ""), 
			'text_compulsory', 
			'style="width:600px;" '.($v_check_l == 'checked' ? 'readonly' : ''),
			''
		);
	?>
	</td>
</tr>
<tr>
	<td class='lbl_compulsory'><label><?PHP echo \E::get('obj_system_lang')->get('USER_EMAIL'); ?></label></td>
	<td>
	<?php
	\I::create_input( 
		'text',
		'usr_email', 
		'usr_email', 
		\U::safe_display_string(isset($v_usr_email) ? $v_usr_email : ""), 
		'text_compulsory', 
		'style="width:600px;" './*($v_check_l == 'checked' ? 'readonly' : '') . */
		((isset($v_usr_comm) && $v_usr_comm == '1') ? "onkeyup=\"copyIt('usr_email')\"" : ""),
		''
	);
	?>
	</td>
</tr>
<?PHP
//if( $v_check_c != 'checked' ){
?>
	<tr>
		<td id='td_id_label' class='lbl<?PHP print (isset($v_usr_comm) && $v_usr_comm == '1') ? '' : '_compulsory' ?>'>
			<label><?PHP print \E::get('obj_system_lang')->get('USER_IC'); ?></label>
		</td>
		<td id='td_ic'>
		<?php
		\I::create_input( 
			(isset($v_usr_comm) && $v_usr_comm == '1') ? 'hidden' : 'text',
			'usr_new_ic_no', 
			'usr_new_ic_no', 
			\U::safe_display_string(isset($v_usr_new_ic_no) ? $v_usr_new_ic_no : ""), 
			'text'.(isset($v_usr_comm) && $v_usr_comm == '1') ? '' : '_compulsory', 
			'style="width:400px;" maxlength="14"'.($v_check_n == 'checked' ? 'onkeyup="copyIt(\'usr_new_ic_no\')"' : ''),
			''
		);
		
		print (isset($v_usr_comm) && $v_usr_comm == '1') ? '-' : ' ('.\E::get('obj_system_lang')->get('USER_IC_TIPS').')';
		?>
		</td>
	</tr>
<?PHP
//}
?>
<tr>
	<td class='lbl'><label><?PHP echo \E::get('obj_system_lang')->get('USER_MOBILE'); ?></label></td>
	<td>
	<?php
	\I::create_input( 
		'text',
		'mobile_no', 
		'mobile_no', 
		\U::safe_display_string(isset($v_mobile_no) ? $v_mobile_no : ""), 
		'text', 
		'style="width:400px;" maxlength="12" ',
		''
	);
	print ' ('.\E::get('obj_system_lang')->get('USER_MOBILE_TIPS').')';
	?>
	</td>
</tr>
<tr>
	<td class='lbl_compulsory'><label><?PHP echo \E::get('obj_system_lang')->get('USER_AGENCY'); ?></label></td>
	<td>
	<?php
	//$v_autocomplete['url']=\E::get( 'obj_curr_module')->build_action_path('meeting','profile_name_ajax',$v_pas_param); 
	$v_autocomplete['url'] = \E::get( 'obj_curr_module')->build_action_path('user','agency_name_ajax'); 
	$v_autocomplete['callback'] = 'changeAgencyTitle';   //<-- this is name of your callback function
	$v_autocomplete['id'] = isset($v_ag_id) ? $v_ag_id : '';
	\I::create_input(
		'autocomplete',
		'ag_id_display',
		'ag_id',
		\U::safe_display_string(isset($v_ag_id_display) ? $v_ag_id_display: ''),
		'text',
		'size="80"',
		'',
		'',
		$v_autocomplete
	);

	?>
	</td>
</tr>
<tr>
	<td class='lbl'><label><?PHP echo \E::get('obj_system_lang')->get('USER_DEPT'); ?></label></td>
	<td>
	<?php
	//$v_autocomplete['url']=\E::get( 'obj_curr_module')->build_action_path('meeting','profile_name_ajax',$v_pas_param); 
	$v_autocomplete['url'] = \E::get( 'obj_curr_module')->build_action_path('user','dept_name_ajax'); 
	$v_autocomplete['callback'] = 'changeDeptTitle';
	$v_autocomplete['extra_param'] = array( array('param' => 'ag_id' , 'field_id' => 'ag_id') );
	$v_autocomplete['id'] = isset($v_ad_id) ? $v_ad_id : '';
	\I::create_input(
		'autocomplete',
		'ad_id_display',
		'ad_id',
		\U::safe_display_string(isset($v_ad_id_display) ? $v_ad_id_display : ''),
		'text',
		'size="80"',
		'',
		'',
		$v_autocomplete
	);
	?>
	</td>
</tr>
<tr>
	<td class='lbl_compulsory'><label><?PHP echo \E::get('obj_system_lang')->get('USER_POSITION_NAME'); ?></label></td>
	<td>
	<?php
	\I::create_input( 
		'text',
		'pos_name', 
		'pos_name', 
		\U::safe_display_string(isset($v_pos_name) ? $v_pos_name : ""), 
		'text_compulsory', 
		'style="width:600px;"',
		''
	);
	?>
	</td>
</tr>
<?PHP
if(!isset($v_usr_id) || $v_usr_id == ''){
?>
	<tr>
		<td class='lbl_compulsory'><label><?PHP echo \E::get('obj_system_lang')->get('USER_PASSWORD'); ?></label></td>
		<td>
		<?php
		if(strtoupper($v_check_l) == 'CHECKED'){
			echo \E::get('obj_system_lang')->get('USER_LDAP_PASSWORD');
			\I::create_input( 
				'hidden',
				'usr_password', 
				'usr_password', 
				'', 
				'text', 
				'style="width:600px;"',
				''
			);
		}else{
			\I::create_input( 
				'password',
				'usr_password', 
				'usr_password', 
				\U::safe_display_string(isset($v_usr_password) ? $v_usr_password : ""), 
				'text_compulsory', 
				'style="width:600px;"',
				''
			);
		}
		?>
		</td>
	</tr>
	<tr>
		<td class='lbl_compulsory'><label><?PHP echo \E::get('obj_system_lang')->get('USER_PASSWORD_VERIFY'); ?></label></td>
		<td>
		<?php
		if(strtoupper($v_check_l) == 'CHECKED'){
			echo \E::get('obj_system_lang')->get('USER_LDAP_PASSWORD');
			\I::create_input( 
				'hidden',
				'usr_password2', 
				'usr_password2', 
				'', 
				'text', 
				'style="width:600px;"',
				''
			);
		}else{
			\I::create_input( 
				'password',
				'usr_password2', 
				'usr_password2', 
				\U::safe_display_string(isset($v_usr_password2) ? $v_usr_password2 : ""), 
				'text_compulsory', 
				'style="width:600px;"',
				''
			);
		}
		?>
		</td>
	</tr>
<?PHP
}
?>
<tr>
	<td colspan="2" align="center">
	<?PHP
		\I::create_button('BACK', 'btn_edit', \E::get('obj_system_module')->build_action_path('user','list'));
		print '&nbsp;';
		\I::create_button('SAVE', 'btn_save', 'javascript:if(validate(document.frm_user)) document.frm_user.submit();' );
	?>
	</td>
</tr>
</table>
</form>

<div id='div_ic' style="display:none">
<?PHP
\I::create_input( 
		'text',
		'usr_new_ic_no', 
		'usr_new_ic_no', 
		\U::safe_display_string(isset($v_usr_new_ic_no) ? $v_usr_new_ic_no : ""), 
		'text_compulsory', 
		'style="width:400px;" maxlength="14"'.($v_check_n == 'checked' ? 'onkeyup="copyIt(\'usr_new_ic_no\')"' : ''),
		''
	);
	print ' ('.\E::get('obj_system_lang')->get('USER_IC_TIPS').')';
?>
</div>
<script language="javascript">
function checkLdapUser(){
  <?php
  if (\E::get('obj_system_module')->ldap_active()){
   ?>
    if (document.frm_user.usr_short_name.value!=""){
		document.getElementById('divMsgLdapCheck').innerHTML = document.getElementById('divLoading').innerHTML;
		vURL = '<?PHP print \E::get('obj_system_module')->build_action_path('user','ldap_search')?>'+document.frm_user.usr_short_name.value;
		makeGETRequest(vURL,'', 'checkLdapUserProcess');
    }
    <?php
  }
  ?>
}
function checkLdapUserProcess(result){
	f = document.frm_user;
	vArrResult = result.split('@@_@@');
	vStatus = vArrResult[0];
	vMsgToDisplay = vArrResult[1];
	vUserID = vArrResult[2];
	vUserFullName = vArrResult[3];
	vUserEmail = vArrResult[4];
	vUserIC = vArrResult[5];
  
	if (document.getElementById('divMsgLdapCheck')){
		document.getElementById('divMsgLdapCheck').innerHTML = vMsgToDisplay;
	}
  
	if (vStatus=='SUCCESS'){
		//enableDisableAllFieldsExceptUserID('ENABLE');
		f.usr_full_name.value = vUserFullName;
		f.usr_email.value = vUserEmail;
		f.usr_new_ic_no.value = vUserIC;
	}else{
		f.usr_full_name.value = '';
		f.usr_email.value = '';
		f.usr_new_ic_no.value = '';
	}
}
function copyIt(p_from_field){
	var x = document.getElementById(p_from_field).value;
	document.getElementById("usr_short_name").value = x;
}
function changeAgencyTitle( pDisplayValue, pID ){
	document.getElementById('ad_id_display').focus();
	document.getElementById('ad_id_display').value = ''; 
	document.getElementById('ad_id').value = ''; 
}
function changeDeptTitle( pDisplayValue, pID ){
	//document.getElementById('ad_id').value = pID; 
}
function tickComm(e){
	if(e.checked){
		document.getElementById('td_id_label').className = 'lbl';
		document.getElementById('td_ic').innerHTML = '-<input type="hidden" id="usr_new_ic_no" text="usr_new_ic_no" value="" />';
		<?PHP
			if($v_check_n == 'checked'){
				print "copyIt('usr_email');";
				print "document.getElementById('usr_email').onkeyup = function onkeyup(event){copyIt('usr_email');}";
			}
		?>
	}else{
		document.getElementById('td_id_label').className = 'lbl_compulsory';
		document.getElementById('td_ic').innerHTML = document.getElementById('div_ic').innerHTML;
		<?PHP
			if($v_check_n == 'checked'){
				print "copyIt('usr_new_ic_no');";
				print "document.getElementById('usr_email').onkeyup = \"\";";
			}
		?>
	}
}
</script>
<?PHP
\I::load_error();
?>