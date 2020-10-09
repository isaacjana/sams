<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN B: MAKLUMAT PERKHIDMATAN</b></p>
<form class="w-100" id="frm_bhgn_b" name="frm_bhgn_b" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
	<div class="col-12 row mt-4 mb-4">
		<div class="col-12 col-md-6">
			<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jbtn_skrg">Nama Agensi / Firma Sekarang:</label>
					<input class="w-75 form-control" type="text" id="jbtn_skrg" name="jbtn_skrg">
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">Tarikh mula berkhidmat di Agensi / Firma:</label>
					<input class="w-75 form-control" type="date" id="tarikh_lantikan_pertama" name="tarikh_lantikan_pertama">
				</div>
				<div class="form-group row">
					<label class="col-form-label" for="gelaran">Gelaran Jawatan :<br><small><b>(Contoh: Pengarah, Pengurus Besar, Pengarah Operasi dan sebagainya)</b></small></label>
					<input class="form-control" type="text" id="gelaran" name="gelaran">
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="tempoh_berkhidmat_sarawak">Tempoh berkhidmat dengan Agensi / Firma :</label>
					<input class="w-75 form-control" type="text" id="tempoh_berkhidmat_sarawak" name="tempoh_berkhidmat_sarawak">
				</div>
				<div class="form-group row">
					<label class="col-form-label" for="tempoh_menetap">Tempoh menetap di Sarawak :<br><small><b>(Isikan jika berkaitan)</b></small></label>
					<input class="form-control" type="text" id="tempoh_menetap" name="tempoh_menetap">
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="tind_undang">Tindakan Disiplin / Undang-Undang / Status Kebankrapan:</label>
					<input class="w-75 form-control" type="text" id="tind_undang" name="tind_undang">
				</div>
				<div class="form-group row">
					<input class="w-75 form-control" type="hidden" id="bahagian_borang" name="bahagian_borang" value="b">
				</div>
		        <div class="form-group row">
		            <div class="col-sm-2"></div>
		            <div class="col-sm-10 text-right">
		                <a href="javascript:if(validate(document.frm_bhgn_b)) document.frm_bhgn_b.submit();" class="btn btn-primary" role="button">
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