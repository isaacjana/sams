<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN B: MAKLUMAT PERKHIDMATAN</b></p>
<form class="w-100" id="frm_bhgn_b" name="frm_bhgn_b" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
	<div class="col-12 row mt-4 mb-4"> 
		<div class="col-12 col-md-6">
			<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">Tarikh Lantikan Pertama Ketua Masyarakat / Ketua Kaum:</label>
					<input class="w-75 form-control" type="date" id="tarikh_lantikan_pertama" name="tarikh_lantikan_pertama">
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="tarikh_lantikan_sekarang">Tarikh Lantikan ke Perkhidmatan Sekarang:</label>
					<input class="w-75 form-control" type="date" id="tarikh_lantikan_sekarang" name="tarikh_lantikan_sekarang">
				</div>
				<div class="form-group row">
					<label class="col-form-label" for="gelaran">Gelaran Jawatan :<br><small><b>(Contoh: Temenggong / Pemanca / Penghulu dan sebagainya)</b></small></label>
					<input class="form-control" type="text" id="gelaran" name="gelaran">
				</div>				
				<div class="form-group row">
					<label class="col-form-label" for="taraf_pelantikan">Taraf Pelantikan:<br><small><b>(Tetap / Sementara / Kontrak / Pinjaman / Tambah Sentara)</b></small></label>
					<input class="form-control" type="text" id="taraf_pelantikan" name="taraf_pelantikan">
				</div>				
				<div class="form-group row">
					<label class="col-form-label" for="kwsn_bidang_kuasa">Kawasan dalam Bidang Kuasa :<br><small><b>(Contoh: Bahagian Kuching / Kampung Astana / Kawasan Tabuan)</b></small></label>
					<input class="form-control" type="text" id="kwsn_bidang_kuasa" name="kwsn_bidang_kuasa">
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="daerah_kecil">Daerah Kecil:</label>
					<input class="w-75 form-control" type="text" id="daerah_kecil" name="daerah_kecil">
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="daerah">Daerah:</label>
					<?php
                                $v_opt = '';
                                $v_count = 1;
                                $v_opt .= '<option value="" selected></option>';
                                foreach($v_daerah as $v_row){
                                    if($v_count==1){
                                        $v_opt .= '<option value="'.\U::safe_display_string($v_row["district_id"]).'">'.\U::safe_display_string($v_row["district_name"]).'</option>';    
                                    }else{
                                        $v_opt .= '<option value="'.\U::safe_display_string($v_row["division_id"]).'">'.\U::safe_display_string($v_row["district_name"]).'</option>';
                                    }
                                    ++$v_count;
                                }
                                ?>
                                <select class="w-75 form-control" id="daerah" name="daerah">
                                    <?php
                                    if($v_opt!=''){
                                        echo $v_opt;
                                    }
                                    ?>
                                </select>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6"> 
			<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="bahagian">Bahagian:</label>
					<?php
                                $v_opt = '';
                                $v_count = 1;
                                $v_opt .= '<option value="" selected></option>';
                                foreach($v_bahagian as $v_row){
                                    if($v_count==1){
                                        $v_opt .= '<option value="'.\U::safe_display_string($v_row["division_id"]).'">'.\U::safe_display_string($v_row["division_name"]).'</option>';    
                                    }else{
                                        $v_opt .= '<option value="'.\U::safe_display_string($v_row["division_id"]).'">'.\U::safe_display_string($v_row["division_name"]).'</option>';
                                    }
                                    ++$v_count;
                                }
                                ?>
                                <select class="w-75 form-control" id="bahagian" name="bahagian">
                                    <?php
                                    if($v_opt!=''){
                                        echo $v_opt;
                                    }
                                    ?>
                                </select>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="tempoh_berkhidmat_krjaan_negeri">Tempoh berkhidmat dengan Kerajaan Negeri:</label>
					<input class="w-75 form-control" type="text" id="tempoh_berkhidmat_krjaan_negeri" name="tempoh_berkhidmat_krjaan_negeri">
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="tempoh_berkhidmat_sarawak">Tempoh	berkhidmat	sebagai	Ketua Masyarakat / Ketua Kaum: </label>
					<input class="w-75 form-control" type="text" id="tempoh_berkhidmat_sarawak" name="tempoh_berkhidmat_sarawak">
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