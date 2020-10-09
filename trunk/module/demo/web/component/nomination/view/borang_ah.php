<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN H: MAKLUMAT PENYOKONG<br></b><b>Nota Penting: Penyokong hendaklah merupakan KETUA JABATAN kepada Calon</b></p>
<form class="w-100">
	<div class="col-12 row mt-4">
		<div class="col-12 col-md-6"> 
			<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_penyokong">Nama:</label>
					<input class="w-75 form-control" type="text" id="nama_penyokong" name="nama_penyokong">
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
					<input class="w-75 form-control" type="text" id="jawatan_penyokong" name="jawatan_penyokong">
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_pejabat_penyokong">Alamat Pejabat:</label>
    				<textarea class="w-75 form-control" id="alamat_pejabat_penyokong" name="alamat_pejabat_penyokong" rows="5"></textarea>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="no_telefon_penyokong">No. Tel. Pejabat/ Tel. Bimbit:</label>
					<input class="w-75 form-control" type="text" id="no_telefon_penyokong" name="no_telefon_penyokong">
				</div>
		        <div class="form-group row" style="padding-bottom: 15px">
		            <div class="col-sm-2"></div>
		            <div class="col-sm-10">
		                <a href="javascript:search();" class="btn btn-primary" role="button">
		                    <i class="fa fa-fw fa-search"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SUBMIT'); ?>
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