<?PHP
\I::load_error("MESSAGE");
?>
<form class="w-100"  id="frm_bhgn_m" name="frm_bhgn_m" method="post" onsubmit="return validate(this);" enctype="multipart/form-data"> 
	<div class="col-12 row mt-4">
		<?php 
		if (isset($v_att_doc)) {
			//echo $v_att_doc;
		}
		 ?> 
		<div class="col-12 col-md-6">
			<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="SPRMFile">SPRM File:</label>
					<div class="custom-file w-75">
						<input type="file" class="custom-file-input" name="SPRMFile" id="SPRMFile" onchange="filename(this)">
						<label class="custom-file-label" id="fileLabel" for="SPRMFile"><?php echo \U::safe_display_string(isset($v_att_doc['doc_sftp_name']) ? $v_att_doc['doc_sftp_name'] : "Choose File");?></label>
					</div>
				</div>
				
				<div class="form-group row">
					<input class="w-75 form-control" type="hidden" id="bahagian_borang" name="bahagian_borang" value="m">
					<input class="w-75 form-control" type="hidden" id="nom_id" name="nom_id" value="<?php echo $v_id ?>">
					<input class="w-75 form-control" type="hidden" id="form_id" name="form_id" value="6">
				</div>
		        <div class="form-group row">
		            <div class="col-sm-2"></div>
		            <div class="col-sm-10 text-right">
		            	<?php
		            	if (isset($v_att_doc["doc_sftp_id"]) && $v_att_doc["doc_sftp_id"]!='') {
		            		?>
		            		<a target="_blank" href="<?php echo \E::get('obj_curr_module')->build_action_path('nomination','img',$v_att_doc['doc_sftp_id']) ?>" class="btn btn-secondary" role="button">
								<i class="fa fa-fw fa-search"></i>&nbsp;View
							</a>
							<?php
		            	}
		            	?>
		                <a href="javascript:if(validate(document.frm_bhgn_m)) document.frm_bhgn_m.submit();" class="btn btn-primary" role="button">
							<i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
						</a>
		            </div>
		        </div>				
			</div>
		</div>
		<div class="col-12 col-md-6">
			</div>
		</div>
	</div>
</form>

<?PHP
\I::load_error();
?>