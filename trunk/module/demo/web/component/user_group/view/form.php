<h2 class="mb-4">User Group</h2>
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
					'',
					''
				);
			}
			?>

			<?php
			$v_lang_info = \E::get('obj_curr_module')->get_supported_lang();
			unset($v_Lang_tab);
			$v_Lang_tab = '';
			$v_Lang_tab .= '<ul class="nav nav-tabs">';
			foreach($v_lang_info as $v_lang){
				$v_display_lang = \E::get('obj_curr_module_lang')->get('LBL_'.strtoupper($v_lang));
				$v_Lang_tab.=<<<lt
				<li class="nav-item">
					<a id="div_lang_tab_$v_lang" class="nav-link" href="#" onclick="javascript:switch_lang_input('$v_lang');">$v_display_lang</a>
				</li>
lt;
			}
			$v_Lang_tab .= "</ul>";
			print $v_Lang_tab;
			print "<div style='clear:both'>";
			foreach($v_lang_info as $v_lang){
				print '<div id="div_form_'.$v_lang.'" style="display:block;" class="lang_tab_content">';
				print '<br/>';
			?>
					<div class="form-group row">
						<label for="user_group_name" class="col-sm-2 col-form-label"><?PHP echo \E::get('obj_system_lang')->get('USER_GROUP_NAME'); ?></label>
						<div class="col-sm-10">
							<input type="text" class="text" name="group_name_<?php echo $v_lang;?>" id="group_name_<?php echo $v_lang;?>" value="<?php echo \U::safe_display_string(isset($v_group_name[$v_lang]) ? $v_group_name[$v_lang] : "");?>" style="width:400px;"/>
						</div>
					</div>
			<?php
				print "</div>";
			}
			print "</div>";
			?>

			<table id="tbl_responsive" cellpadding="0" cellspacing="0" border="0" class="table">
				<thead>
					<tr>
						<th>
							<?PHP
							\I::create_input(
								'hidden',
								'comp_count', 
								'comp_count', 
								\U::safe_display_string(count($v_comp_list)), 
								'text', 
								'',
								''
							);
							?>
						</th>
						<th>
							<?PHP echo \E::get('obj_curr_module_lang')->get('USER_GROUP_DELETE'); ?>
						</th>
						<th>
							<?PHP echo \E::get('obj_curr_module_lang')->get('USER_GROUP_EDIT'); ?>
						</th>
						<th>
							<?PHP echo \E::get('obj_curr_module_lang')->get('USER_GROUP_ADD'); ?>
						</th>
						<th>
							<?PHP echo \E::get('obj_curr_module_lang')->get('USER_GROUP_READ'); ?>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$v_data['1']='';
					$v_count = 0;
					foreach($v_comp_list as $v_key=>$v_comp){
						$v_class = ( $v_count%2 == 1 ) ? "odd" : "normal";
						$v_count++;

						unset( $v_val );
						$v_val = 'v_'.$v_comp;

						if(isset($$v_val)){
							//Convert acl value into binary (4 digit binary)
							$v_tmp_val = substr( "0000".decbin($$v_val), -4 );

							//Turn the binary code to array
							$v_acl_arr = str_split( $v_tmp_val );
							if($$v_val>1){
								$v_disabled = "DISABLED";
							}else{
								$v_disabled = "";
							}
						}else{
							if(\E::get('MOONLIGHT_CURRENT_ACTION')=='add'){
								$v_acl_arr = array(0,0,0,0);
								$v_disabled = "";
							}else{
								continue;
							}
						}
						?>
						<tr class="<?php echo $v_class;?>">
							<td width="30%">
								<?PHP
								echo \E::get('obj_curr_module_lang')->get($v_comp.'_COMP_NAME');

								\I::create_input(
									'hidden',
									'comp_name_'.$v_key, 
									'comp_name_'.$v_key, 
									\U::safe_display_string( $v_comp ), 
									'text', 
									'',
									''
								);
								?>
							</td>
							<td width="15%">
								<input type="checkbox" value="1" name="group_del_<?php echo $v_key;?>" id="group_del_<?php echo $v_key;?>" <?php echo $v_acl_arr[0]==1?"CHECKED":"";?> onclick="javascript:set_read('<?php echo $v_key;?>');"/>
							</td>
							<td width="15%">
								<input type="checkbox" value="1" name="group_edit_<?php echo $v_key;?>" id="group_edit_<?php echo $v_key;?>" <?php echo $v_acl_arr[1]==1?"CHECKED":"";?> onclick="javascript:set_read('<?php echo $v_key;?>');"/>
							</td>
							<td width="15%">
								<input type="checkbox" value="1" name="group_add_<?php echo $v_key;?>" id="group_add_<?php echo $v_key;?>" <?php echo $v_acl_arr[2]==1?"CHECKED":"";?> onclick="javascript:set_read('<?php echo $v_key;?>');"/>
							</td>
							<td width="15%">
								<input type="checkbox" value="1" name="group_read_<?php echo $v_key;?>" id="group_read_<?php echo $v_key;?>" <?php echo $v_acl_arr[3]==1?"CHECKED":"";?> <?php echo $v_disabled;?>/>
							</td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
			<div class="form-group row">
				<div class="col-sm-2"></div>
				<div class="col-sm-10">
					<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('user_group','list');?>" class="btn btn-danger" role="button">
						<i class="fa fa-fw fa-angle-left"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
					</a>
					<a href="javascript:if(validate(document.frm_acl)) document.frm_acl.submit();" class="btn btn-primary" role="button">
						<i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
					</a>
				</div>
			</div>
			<script language="javascript">
			function switch_lang_input(p_lang){
			<?php
			$v_js_code="";
			foreach($v_lang_info as $v_lang){
				$v_js_code = <<<js
				document.getElementById("div_form_$v_lang").style.display = "none";
				document.getElementById("div_lang_tab_$v_lang").className = "nav-link";
js;
				print $v_js_code;
			}
			?>
				document.getElementById("div_form_" + p_lang).style.display = "block";
				document.getElementById("div_lang_tab_" + p_lang).className = "nav-link active";
			}

			$(document).ready(
				function(){
					switch_lang_input("<?php print \E::get('obj_curr_module')->get_lang();?>");
				}
			)

			function set_read(p_val){
				v_val = 0;
				if(document.getElementById('group_del_'+p_val).checked){
					v_val = parseInt( v_val ) + 1;
				}

				if(document.getElementById('group_edit_'+p_val).checked){
					v_val = parseInt( v_val ) + 1;
				}

				if(document.getElementById('group_add_'+p_val).checked){
					v_val = parseInt( v_val ) + 1;
				}

				if(v_val>0){
					document.getElementById('group_read_'+p_val).checked = true;
					document.getElementById('group_read_'+p_val).value = 1;
					document.getElementById('group_read_'+p_val).disabled = true;
				}else{
					document.getElementById('group_read_'+p_val).disabled = false;
				}
			}
			</script>
			<?PHP
			\I::load_error();
			?>
		</form>
	</div>
</div>
