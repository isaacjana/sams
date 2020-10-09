<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN B: MAKLUMAT PERKHIDMATAN</b></p>
<form class="w-100" id="frm_bhgn_b" name="frm_bhgn_b" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
	<div class="col-12 row mt-4 mb-4">
		<div class="col-12 col-md-6">
			<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">Tarikh Lantikan Pertama ke Perkhidmatan Awam:</label>
					<input class="w-75 form-control" type="date" id="tarikh_lantikan_pertama" name="tarikh_lantikan_pertama">
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="tarikh_lantikan_sekarang">Tarikh Lantikan ke Perkhidmatan Sekarang:</label>
					<input class="w-75 form-control" type="date" id="tarikh_lantikan_sekarang" name="tarikh_lantikan_sekarang">
				</div>
				<div class="form-group row">
					<label class="col-form-label" for="gelaran">Gelaran Jawatan :<br><small><b>(Contoh: Pegawai Daerah, Pegawai Perubatan Bahagian, Penolong Pengarah dan sebagainya)</b></small></label>
					<input class="form-control" type="text" id="gelaran" name="gelaran">
				</div>				
				<div class="form-group row">
					<label class="col-form-label" for="taraf_jawatan">Taraf Jawatan:<br><small><b>(Memangku / Menjalankan Tugas) / Tempoh</b></small></label>
					<input class="form-control compulsary" type="text" id="taraf_jawatan" name="taraf_jawatan">
				</div>				
				<div class="form-group row">
					<label class="col-form-label" for="taraf_pelantikan">Taraf Pelantikan:<br><small><b>(Tetap / Sementara / Kontrak / Pinjaman / Tambah Sentara)</b></small></label>
					<input class="form-control" type="text" id="taraf_pelantikan" name="taraf_pelantikan">
				</div>				
				<div class="form-group row">
					<label class="col-form-label" for="klasifikasi_perkhidmatan">Klasifikasi Perkhidmatan:<br><small><b>(Contoh: Pentadbiran / Kesihatan / Sosial / Pendidikan)</b></small></label>
					<input class="form-control compulsary" type="text" id="klasifikasi_perkhidmatan" name="klasifikasi_perkhidmatan">
				</div>				
				<div class="form-group row">
					<label class="col-form-label" for="kump_perkhidmatan">Kumpulan Perkhidmatan:<br><small><b>(Contoh: Pengurusan & Profesional / Pelaksana)</b></small></label>
					<input class="form-control" type="text" id="kump_perkhidmatan" name="kump_perkhidmatan">
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="gred_jawatan">Gred Jawatan:</label>
					<input class="w-75 form-control" type="text" id="gred_jawatan" name="gred_jawatan">
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="tempoh_berkhidmat_krjaan_negeri">Tempoh berkhidmat dengan Kerajaan Negeri:</label>
					<input class="w-75 form-control" type="text" id="tempoh_berkhidmat_krjaan_negeri" name="tempoh_berkhidmat_krjaan_negeri">
				</div>		
				<div class="form-group row">
					<label class="w-25 col-form-label" for="tempoh_berkhidmat_sarawak">Tempoh berkhidmat di Sarawak:</label>
					<div class="w-75" id="tempohBerkhidmat">
						<input class="w-100 form-control" type="text" id="tempoh_berkhidmat_sarawak" name="tempoh_berkhidmat_sarawak" onchange="checkTempohBerkhidmat(this)">
					</div>
				</div>			
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jbtn_skrg">Jabatan Sekarang:</label>
					<input class="w-75 form-control" type="text" id="jbtn_skrg" name="jbtn_skrg">
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="stesen">Stesen tempat bertugas sekarang:<br><small><b>(Contoh: Sibu / Miri / Limbang / Mukah dan sebagainya)</b></small></label>
					<input class="w-75 form-control" type="text" id="stesen" name="stesen">
				</div> 
				<div class="form-group row">
					<label class="w-25 col-form-label" for="tempoh_berkhidmat_stesen_skrg">Tempoh berkhidmat di stesen sekarang:</label>
					<input class="w-75 form-control" type="text" id="tempoh_berkhidmat_stesen_skrg" name="tempoh_berkhidmat_stesen_skrg">
				</div>												
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_pjbt_skrg">Alamat Pejabat sekarang:</label>
    				<input type="text" name="alamat_pjbt_skrg1" id="alamat_pjbt_skrg1" class="w-75 form-control">
    				<label class="w-25 col-form-label" for="alamat_rumah"></label>
    				<input type="text" name="alamat_pjbt_skrg2" id="alamat_pjbt_skrg2" class="w-75 form-control">
    				<label class="w-25 col-form-label" for="alamat_rumah"></label>
    				<input type="text" name="alamat_pjbt_skrg3" id="alamat_pjbt_skrg3" class="w-75 form-control">
    				<label class="w-25 col-form-label" for="alamat_rumah"></label>
    				<input type="text" name="alamat_pjbt_skrg4" id="alamat_pjbt_skrg4" class="w-75 form-control">
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="telefon_pejabat">Nombor Telefon Pejabat:</label>
					<input class="w-75 form-control" type="text" id="telefon_pejabat" name="telefon_pejabat">
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