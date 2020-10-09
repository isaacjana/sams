<h2 class="mb-4">User Profile</h2>
<div class='card mb-4'>
	<div class="card-body">
		<?php
		$v_session_msg = \E::get_session(\E::get('MOONLIGHT_CURRENT_COMPONENT') . '-' . $v_id);
		if($v_session_msg!=''){
		?>
		<div class="alert alert-primary alert-dismissible" role="alert">
			<?PHP echo $v_session_msg; ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		<?php
			\E::unset_session(\E::get('MOONLIGHT_CURRENT_COMPONENT') . '-' . $v_id);

		}
		?>
		<div class="form-group row">
			<label for="usr_name" class="col-sm-2 col-form-label"><?PHP echo \E::get('obj_system_lang')->get('USER_ID'); ?></label>
			<div class="col-sm-10">
				<?php
				echo \U::safe_display_string(isset($v_user_detail['usr_short_name']) ? $v_user_detail['usr_short_name'] : "");
				?>
			</div>
		</div>

		<div class="form-group row">
			<label for="usr_full_name" class="col-sm-2 col-form-label"><?PHP echo \E::get('obj_system_lang')->get('USER_NAME'); ?></label>
			<div class="col-sm-10">
				<?php
				echo \U::safe_display_string(isset($v_user_detail['usr_full_name']) ? $v_user_detail['usr_full_name'] : "");
				?>
			</div>
		</div>

		<div class="form-group row">
			<label for="usr_email" class="col-sm-2 col-form-label"><?PHP echo \E::get('obj_system_lang')->get('USER_EMAIL'); ?></label>
			<div class="col-sm-10">
				<?php
				echo \U::safe_display_string(isset($v_user_detail['usr_email']) ? $v_user_detail['usr_email'] : "");
				?>
			</div>
		</div>

		<div class="form-group row">
			<label for="usr_new_ic_no" class="col-sm-2 col-form-label"><?PHP echo \E::get('obj_system_lang')->get('USER_IC'); ?></label>
			<div class="col-sm-10">
				<?php
				echo \U::safe_display_string(isset($v_user_detail['usr_new_ic_no']) ? $v_user_detail['usr_new_ic_no'] : "");
				?>
			</div>
		</div>

		<div class="form-group row">
			<label for="user_phone" class="col-sm-2 col-form-label"><?PHP echo \E::get('obj_system_lang')->get('USER_PHONE'); ?></label>
			<div class="col-sm-10">
				<?php
				echo \U::safe_display_string(isset($v_user_detail['phone_office']) ? $v_user_detail['phone_office'] : "");
				?>
			</div>
		</div>

		<div class="form-group row">
			<label for="user_group" class="col-sm-2 col-form-label"><?PHP echo \E::get('obj_system_lang')->get('USER_GROUP'); ?></label>
			<div class="col-sm-10">
				<?php
				echo \U::safe_display_string(isset($v_usr_group) ? $v_usr_group: '[No Access]');
				?>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
				<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('setting','usermanagement');?>" class="btn btn-danger" role="button">
					<i class="fa fa-fw fa-angle-left"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
				</a>
				<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('setting','usermanagement_edit',$v_id);?>" class="btn btn-primary" role="button">
					<i class="fa fa-fw fa-edit"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_EDIT'); ?>
				</a>
			</div>
		</div>

		<script language="javascript">
		function view_usr(){
		  v_setting = 'width=800px,height=470px,left=200px,top=80px,resize=1,scrolling=1';
		  openNewDhtmlWindow( "<?php echo MOONLIGHT_FOLDER_PATH."system/user/view/".$v_id."/?s=w";?>", "<?php  echo \E::get( 'obj_curr_module_lang')->get('USER_COMP_NAME');?>", 800, 470, v_setting, "" );
		}

		function changeTab(pid){
			document.getElementById("btn_portal").className = "img_module_tab_unselect";
			document.getElementById("btn_intranet").className = "img_module_tab_unselect";
			document.getElementById(pid).className = "img_module_tab_select";
			if(pid=="btn_portal"){
				document.getElementById("div_intranet").style.display = "none";
				document.getElementById("div_portal").style.display = "block";
			}else if(pid=="btn_intranet"){
				document.getElementById("div_portal").style.display = "none";
				document.getElementById("div_intranet").style.display = "block";
			}
		}
		</script>
	</div>
</div>