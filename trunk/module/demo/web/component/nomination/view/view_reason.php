<form class="w-100" id="frm_nom" name="frm_nom" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
	<p class="mb-12" style="padding-left: 20px; padding-top: 10px"><b>ROUTED BACK REASON</b></p>
	<div class="col-11 row mt-4" style="margin-left: 10px">
		<div class="col-6" style="margin-left: 10px;">
			<div class="form-group row" style="padding-left: 15px;">
				<label class="w-25 col-form-label" for="nama_penuh">REMARKS:</label>
				<textarea class="w-75 form-control compulsary" id="remarks" name="remarks" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['route_remark']) ? $v_user_detail['route_remark'] : "");?></textarea>
				<input class="col-9 form-control" type="hidden" id="varid" name="varid" value="<?php echo \U::safe_display_string(isset($v_id) ? $v_id : "");?>">
			</div>			
		</div>
	</div>		
	<div class="col-12 col-md-11" style="padding-top: 10px; padding-bottom: 30px">
	    <div class="form-group row">
	        <div class="col-sm-2"></div>
	        <div class="col-sm-10">
				<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('nomination','shru_nom');?>" class="btn btn-danger" role="button">
					<i class="fa fa-fw fa-angle-left"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
				</a>
				<a href="javascript:if(validate(document.frm_nom)) document.frm_nom.submit();" class="btn btn-primary" role="button">
					<i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
				</a>
	        </div>
	    </div>		
	</div>		
</form>