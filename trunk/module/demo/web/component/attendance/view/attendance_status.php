<form class="w-100" id="frm_nom" name="frm_nom" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
	<p class="mb-12" style="padding-left: 20px; padding-top: 10px"><b>ATTENDANCE</b></p>
	<div class="col-11 row mt-4" style="margin-left: 10px; background-color: #fff">	
		<div class="col-12 col-md-6" style="padding-top: 10px;">
			<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_penuh">Nama:</label>
					<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_penuh">No Kad Pengenalan:</label>
					<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_new_ic']) ? $v_user_detail['nom_new_ic'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_penuh">Nama Pingat Dicadang:</label>
					<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['awdc_category_id']) ? $v_user_detail['awdc_category_id'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_penuh">Jabatan/Agensi:</label>
					<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_source']) ? $v_user_detail['nom_source'] : "");?>" readonly>
				</div>
			</div>
		</div>		
	</div>
	<div class="col-11 row mt-4" style="margin-left: 10px">
		<div class="col-6" style="margin-left: 10px;">
			<div class="form-group row" style="padding-left: 15px;">
				<label class="w-25 col-form-label" for="kehadiran">STATUS:</label>
				<div class="col-12 d-flex py-2">
					<div class="form-check col-6 row mx-3">
						<input class="form-check-input" type="radio" name="kehadiran" id="hadir" value="hadir"> <!-- status = 17 -->
						<label class="form-check-label" for="hadir">HADIR</label>
					</div>
					<div class="form-check col-6 row mx-0 px-0 mx-3">
						<input class="form-check-input" type="radio" name="kehadiran" id="tidak_hadir" value="tidak_hadir"> <!-- status = 18 -->
						<label class="form-check-label" for="tidak_hadir">TIDAK HADIR</label>
					</div>
				</div>
			</div>
			<div class="form-group row" style="padding-left: 15px;">
				<label class="w-25 col-form-label" for="tarikh_jawapan">TARIKH JAWAPAN:</label>
				<input class="w-75 form-control" type="date" id="tarikh_jawapan" name="tarikh_jawapan">
				<input class="w-75 form-control" type="hidden" id="v_id" name="v_id" value="<?php echo \U::safe_display_string(isset($v_id) ? $v_id : "");?>" readonly>
			</div>												
		</div>
	</div>		
	<div class="col-6 col-md-6" style="padding-top: 10px; padding-bottom: 30px">
	    <div class="form-group row">
	        <div class="col-sm-2"></div>
	        <div class="col-sm-10">
				<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('shortlist','index');?>" class="btn btn-danger" role="button">
					<i class="fa fa-fw fa-angle-left"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
				</a>
				<a href="javascript:if(validate(document.frm_nom)) document.frm_nom.submit();" class="btn btn-primary" role="button">
					<i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
				</a>
	        </div>
	    </div>		
	</div>		
</form>