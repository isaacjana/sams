<h2 class="mb-4">User Profile</h2>
<?PHP
\I::load_error("MESSAGE");
?>

<div class='card mb-4'>
	<div class="card-body">
		<form id="frm_acl" name="frm_acl" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
			<?PHP
			if(isset($v_id) && $v_id != ''){
				\I::create_input(
					'hidden',
					'id', 
					'id', 
					\U::safe_display_string(isset($v_id) ? $v_id : ""), 
					'text', 
					'style="width:400px;" ',
					''
				);
			}
			?>
			<div class="form-group row">
				<label for="usr_name" class="col-sm-2 col-form-label"><?PHP echo \E::get('obj_system_lang')->get('USER_ID'); ?></label>
				<div class="col-sm-10">
					<?php
					if($v_mode=="add"){
					?>
					<input type="text" class="form-control compulsory" name="usr_short_name" id="usr_short_name" placeholder="short name" value="<?php echo \U::safe_display_string(isset($v_usr_short_name) ? $v_usr_short_name : "");?>" required>
					<?php
					}else{
						echo \U::safe_display_string(isset($v_usr_short_name) ? $v_usr_short_name : "");
					?>
					<input type="hidden" name="usr_short_name" id="usr_short_name" value="<?php echo \U::safe_display_string(isset($v_usr_short_name) ? $v_usr_short_name : "");?>">
					<?php
					}
					?>
				</div>
			</div>

			<div class="form-group row">
				<label for="usr_full_name" class="col-sm-2 col-form-label"><?PHP echo \E::get('obj_system_lang')->get('USER_NAME'); ?></label>
				<div class="col-sm-10">
					<?php
					$v_ext_html = ($v_mode=="edit")?' readonly ' : '';
					?>
					<input type="text" class="form-control compulsory" name="usr_full_name" id="usr_full_name" placeholder="full name" value="<?php echo \U::safe_display_string(isset($v_usr_full_name) ? $v_usr_full_name : "");?>" <?php echo $v_ext_html ;?>>
				</div>
			</div>

			<div class="form-group row">
				<label for="usr_email" class="col-sm-2 col-form-label"><?PHP echo \E::get('obj_system_lang')->get('USER_EMAIL'); ?></label>
				<div class="col-sm-10">
					<input type="text" class="form-control compulsory" name="usr_email" id="usr_email" placeholder="email" value="<?php echo \U::safe_display_string(isset($v_usr_email) ? $v_usr_email : "");?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="usr_new_ic_no" class="col-sm-2 col-form-label"><?PHP echo \E::get('obj_system_lang')->get('USER_IC'); ?></label>
				<div class="col-sm-10">
					<input type="text" class="form-control compulsory" name="usr_new_ic_no" id="usr_new_ic_no" placeholder="IC No." value="<?php echo \U::safe_display_string(isset($v_usr_new_ic_no) ? $v_usr_new_ic_no : "");?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="user_phone" class="col-sm-2 col-form-label"><?PHP echo \E::get('obj_system_lang')->get('USER_PHONE'); ?></label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="user_phone" id="user_phone" placeholder="phone no." value="<?php echo \U::safe_display_string(isset($v_user_phone) ? $v_user_phone : "");?>" maxlength="12">
				</div>
			</div>
			<?php
			if(isset($v_id) AND $v_id!=""){
			?>
			<hr noshade size='1' />
			<div class="form-group form-check row">
				<div class="col-sm-12 col-form-label">
					<input type="checkbox" class="form-check-input" id="usr_pwd_update" onclick="javascript:update_password(this);">
					<label class="form-check-label" for="usr_pwd_update"><?php echo \E::get('obj_curr_module_lang')->get('USER_UPDATE_PWD');?></label>
				</div>
			</div>
			<?php
			}
			?>

			<div class="form-group row">
				<label for="usr_password" class="col-sm-2 col-form-label"><?PHP echo \E::get('obj_system_lang')->get('USER_PASSWORD'); ?></label>
				<div id="div_pwd_input1" class="col-sm-10" style="display:none;">
					<input type="password" class="form-control" name="usr_password" id="usr_password" placeholder="Password" onkeyup="javascript:pwd_no_space(this);">
				</div>
				<div id="div_pwd_no_input1" class="col-sm-10">
					**********
				</div>
			</div>

			<div class="form-group row">
				<label for="usr_password2" class="col-sm-2 col-form-label"><?PHP echo \E::get('obj_system_lang')->get('USER_PASSWORD_VERIFY'); ?></label>
				<div id="div_pwd_input2" class="col-sm-10" style="display:none;">
					<input type="password" class="form-control" name="usr_password2" id="usr_password2" placeholder="Confirm Password" onkeyup="javascript:pwd_no_space(this);">
				</div>
				<div id="div_pwd_no_input2" class="col-sm-10">
					**********
				</div>
			</div>

			<div class="form-group row">
				<label for="user_group" class="col-sm-2 col-form-label"><?PHP echo \E::get('obj_system_lang')->get('USER_GROUP'); ?></label>
				<div class="col-sm-10">
					<?php
					$v_opt = '';
					$v_sel = isset($v_usr_group) ? $v_usr_group: '';
					if(is_array($v_group_list)){
						foreach($v_group_list as $v_val=>$v_label){
							if($v_sel==$v_val){
								$v_opt .= '<option value="'.\U::safe_display_string($v_val).'" selected>'.\U::safe_display_string($v_label).'</option>';	
							}else{
								$v_opt .= '<option value="'.\U::safe_display_string($v_val).'">'.\U::safe_display_string($v_label).'</option>';
							}
						}
					}
					?>
					<select class="form-control" id="usr_group" name="usr_group">
						<?php
						if($v_opt!=''){
							echo $v_opt;
						}
						?>
                    </select>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-2"></div>
				<div class="col-sm-10">
					<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('user','list');?>" class="btn btn-danger" role="button">
						<i class="fa fa-fw fa-angle-left"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
					</a>
					<a href="javascript:if(validate(document.frm_acl)) document.frm_acl.submit();" class="btn btn-primary" role="button">
						<i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
					</a>
				</div>
			</div>
		</form>
		<script language="javascript">
		$(document).ready(
			function()
			{
				<?php
					$v_pwd_input = <<<js_code
					document.getElementById("div_pwd_input1").style.display = "block";
					document.getElementById("div_pwd_input2").style.display = "block";
					document.getElementById("div_pwd_no_input1").style.display = "none";
					document.getElementById("div_pwd_no_input2").style.display = "none";
					document.getElementById("usr_password").className = "form-control compulsory";
					document.getElementById("usr_password2").className = "form-control compulsory";
js_code;
					if(isset($v_id) AND $v_id!=""){
						if(isset($v_usr_pwd_update) AND $v_usr_pwd_update){
							echo $v_pwd_input;
						}
					}else{
						echo $v_pwd_input;
					}
				?>
			}
		)


		function update_password(p_pwd){
			if(p_pwd.checked){
				document.getElementById("div_pwd_input1").style.display = "block";
				document.getElementById("div_pwd_input2").style.display = "block";
				document.getElementById("div_pwd_no_input1").style.display = "none";
				document.getElementById("div_pwd_no_input2").style.display = "none";
				document.getElementById("usr_password").className = "form-control compulsory";
				document.getElementById("usr_password2").className = "form-control compulsory";
			}else{
				document.getElementById("div_pwd_input1").style.display = "none";
				document.getElementById("div_pwd_input2").style.display = "none";
				document.getElementById("div_pwd_no_input1").style.display = "block";
				document.getElementById("div_pwd_no_input2").style.display = "block";
				document.getElementById("usr_password").className = "form-control";
				document.getElementById("usr_password2").className = "form-control";
			}
		}
		</script>
		<?PHP
		\I::load_error();
		?>

	</div>
</div>