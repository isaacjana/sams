<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN B: MAKLUMAT PERKHIDMATAN</b></p>
<form class="w-100" id="frm_bhgn_b" name="frm_bhgn_b" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
	<div class="col-12 row mt-4">
		<div class="col-12 col-md-6">
			<div class="col-12">			
				<div class="form-group row">
					<label class="col-form-label" for="jbtn_skrg">Nama Parti Politik :<br><small><b>(Cth: PBB / SUPP / PDP / PRS)</b></small></label>
					<input class="form-control" type="text" id="jbtn_skrg" name="jbtn_skrg">
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_pjbt_skrg1">Alamat Pejabat Parti :</label>
    				<input type="text" name="alamat_pjbt_skrg1" id="alamat_pjbt_skrg1" class="w-75 form-control">
    				<label class="w-25 col-form-label" for="alamat_pjbt_skrg2"></label>
    				<input type="text" name="alamat_pjbt_skrg2" id="alamat_pjbt_skrg2" class="w-75 form-control">
    				<label class="w-25 col-form-label" for="3"></label>
    				<input type="text" name="alamat_pjbt_skrg3" id="alamat_pjbt_skrg3" class="w-75 form-control" >
    				<label class="w-25 col-form-label" for="alamat_pjbt_skrg4"></label>
    				<input type="text" name="alamat_pjbt_skrg4" id="alamat_pjbt_skrg4" class="w-75 form-control"> 
				</div>												
				<div class="form-group row">
					<label class="col-form-label" for="gelaran">Jawatan dalam Parti sekarang & Kawasan / Cawangan / Ranting :<br><small><b>(Cth. Bendahari N.11 Batu Lintang, Kuching / Setiausaha N.2 Tasik Biru, Baru / AJK Bahagian N.56 Baleh, Kapit / AJK Ranting N.33 Kalaka dsbnya)</b></small></label>
					<input class="form-control" type="text" id="gelaran" name="gelaran">
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="telefon_pejabat">Nombor Telefon Pejabat Parti :</label>
					<input class="w-75 form-control" type="text" id="telefon_pejabat" name="telefon_pejabat">
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="tempoh_berkhidmat_sarawak">Tempoh Berkhidmat dengan Parti :</label>
					<input class="w-75 form-control" type="text" id="tempoh_berkhidmat_sarawak" name="tempoh_berkhidmat_sarawak">
				</div>	
			</div>
		</div>	
			<div class="col-12 col-md-6">
			<div class="col-12">						
				<div class="form-group row">
					<label class="col-form-label" for="pekerjaan_skrg">Pekerjaan sekarang :<br><small><b>(Cth. Peniaga / Peguam / Petani dsbnya)</b></small></label>
					<input class="form-control" type="text" id="pekerjaan_skrg" name="pekerjaan_skrg">
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="tind_undang">Tindakan Disiplin / Undang-Undang /	: Status Kebankrapan :</label>
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