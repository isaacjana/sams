<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN G: MAKLUMAT PENCADANG<br></b><b>Nota Penting: Pencadang hendaklah merupakan pegawai yang lebih kanan dari Calon</b></p>
<form class="w-100" id="frm_bhgn_g" name="frm_bhgn_g" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
	<div class="col-12 row mt-4">
		<div class="col-12 col-md-6"> 
			<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_pencadang">Nama:</label>
					<input class="w-75 form-control" type="text" id="nama_pencadang" name="nama_pencadang" value="<?php echo \U::safe_display_string(isset($v_pencadang['usr_full_name']) ? $v_pencadang['usr_full_name'] : "");?>">
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
					<input class="w-75 form-control" type="text" id="jawatan_pencadang" name="jawatan_pencadang" value="<?php echo \U::safe_display_string(isset($v_pencadang['usr_designation']) ? $v_pencadang['usr_designation'] : "");?>">
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_pejabat_pencadang">Alamat Pejabat:</label>
    				<textarea class="w-75 form-control" id="alamat_pejabat_pencadang" name="alamat_pejabat_pencadang" rows="5"><?php echo \U::safe_display_string(isset($v_pencadang['work_address']) ? $v_pencadang['work_address'] : "");?></textarea>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="no_telefon_pencadang">No. Tel. Pejabat/ Tel. Bimbit:</label>
					<input class="w-75 form-control" type="text" id="no_telefon_pencadang" name="no_telefon_pencadang" value="<?php echo \U::safe_display_string(isset($v_pencadang['phone_office']) ? $v_pencadang['phone_office'] : "");?> &nbsp; <?php echo  \U::safe_display_string(isset($v_pencadang['mobile_no']) ? $v_pencadang['mobile_no'] : "");?>">
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="agensi">Agensi:</label>
					<input class="w-75 form-control" type="text" id="agensi" name="agensi" value="<?php echo \U::safe_display_string(isset($v_pencadang['usr_agency']) ? $v_pencadang['usr_agency'] : "");?>">
				</div>
				<div class="form-group row">
					<input class="w-75 form-control" type="hidden" id="bahagian_borang" name="bahagian_borang" value="g">
				</div>				
		        <div class="form-group row" style="padding-bottom: 15px; ">
		            <div class="col-sm-2"></div>
		            <div class="col-sm-10 text-right">
		                <a href="javascript:if(validate(document.frm_bhgn_g)) document.frm_bhgn_g.submit();" class="btn btn-primary" role="button">
							<i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
						</a>
		                <a href="javascript:rec_list('')" class="btn btn-danger" role="button">
		                    <i class="fa fa-fw fa-times"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_RESET'); ?>
		                </a>
		            </div>
		        </div>								
			</div>
		</div>
	</div>
</form>