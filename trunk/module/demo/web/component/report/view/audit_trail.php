<div class="mb-5 m-3">
	<h4>AUDIT TRAIL</h4>
	<form  id="frm_source" name="frm_source" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Date From : </label>
			<div class="col-sm-3">
				<input type="date" name="date_from" id="date_from" class="form-control">
			</div>
			<label class="col-sm-2 col-form-label">Date To : </label>
			<div class="col-sm-3">
				<input type="date" name="date_to" id="date_to" class="form-control">
			</div>	
			<div class="text-right">
				<a href="javascript:if(validate(document.frm_source)) document.frm_source.submit();" class="btn btn-primary" role="button">
					<i class="fa fa-fw fa-search"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SEARCH'); ?>
				</a>
			</div>					
		</div>				
	</form>
</div>