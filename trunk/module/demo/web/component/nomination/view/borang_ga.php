<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN A: MAKLUMAT PERIBADI</b></p> 

<form class="w-100"  id="frm_bhgn_a" name="frm_bhgn_a" method="post" onsubmit="return validate(this);" enctype="multipart/form-data"> 
	<div class="col-12 row mt-4 mb-4">
		<div class="col-12 col-md-6">  
			<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_penuh">Nama Penuh:</label>
					<input class="w-75 form-control compulsary" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_bahagian_a_data['nom_name']) ? $v_bahagian_a_data['nom_name'] : "");?>">
				</div>
				<div class="form-group row">
					<label class="col-form-label" for="gelaran">Nyatakan gelaran / jawatan yang telah diterima / disandang :<br><small><b>(Contoh: Tan Sri / Datuk / Temenggong / Penghulu dsbg.)</b></small></label>
					<input class="form-control compulsary" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_bahagian_a_data['nom_title_designation']) ? $v_bahagian_a_data['nom_title_designation'] : "");?>">
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="icno">No. Kad Pengenalan:</label>
					<div class="col-12 d-flex py-2">
						<div class="col-6 row mx-0 px-0">
							<label class="col-3 col-form-label" for="ic_lama">Lama:</label>
							<input class="col-9 form-control" type="text" id="ic_lama" name="ic_lama" value="<?php echo \U::safe_display_string(isset($v_bahagian_a_data['nom_old_ic']) ? $v_bahagian_a_data['nom_old_ic'] : "");?>">
						</div>
						<div class="col-6 row mx-0 px-0">
							<label class="col-3 col-form-label" for="ic_baru">Baru:</label>
							<input class="col-9 form-control" type="text" id="ic_baru" name="ic_baru" value="<?php echo \U::safe_display_string(isset($v_bahagian_a_data['nom_new_ic']) ? $v_bahagian_a_data['nom_new_ic'] : "");?>">
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jantina">Jantina:</label>
					<div class="col-12 d-flex py-2">
						<div class="form-check col-6 row mx-3">
							<input class="form-check-input" type="radio" name="jantina" id="lelaki" value="lelaki">
							<label class="form-check-label" for="lelaki">Lelaki</label>
						</div>
						<div class="form-check col-6 row mx-0 px-0 mx-3">
							<input class="form-check-input" type="radio" name="jantina" id="perempuan" value="perempuan">
							<label class="form-check-label" for="perempuan">Perempuan</label>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="tarikh_lahir">Tarikh Lahir:</label>
					<input class="w-75 form-control compulsary" type="date" id="tarikh_lahir" name="tarikh_lahir" value="<?php echo \U::safe_display_string(isset($v_bahagian_a_data['nom_dob']) ? $v_bahagian_a_data['nom_dob'] : "");?>">
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="umur">Umur:</label>
					<div class="w-75" id="umurDiv">
						<input class="w-100 form-control compulsary" type="text" id="umur" name="umur" value="<?php echo \U::safe_display_string(isset($v_bahagian_a_data['nom_age']) ? $v_bahagian_a_data['nom_age'] : "");?>" onchange="checkUmur(this)">
					</div>
					
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="keturunan">Keturunan:</label>
					<?php
                                $v_opt = '';
                                $v_count = 1;
                                $v_opt .= '<option value="" selected></option>';
                                foreach($v_keturunan as $v_row){
                                    if($v_count==1){
                                        $v_opt .= '<option value="'.\U::safe_display_string($v_row["race_id"]).'">'.\U::safe_display_string($v_row["race_desc"]).'</option>';    
                                    }else{
                                        $v_opt .= '<option value="'.\U::safe_display_string($v_row["race_id"]).'">'.\U::safe_display_string($v_row["race_desc"]).'</option>';
                                    }
                                    ++$v_count;
                                }
                                ?>
                                <select class="w-75 form-control" id="keturunan" name="keturunan">
                                    <?php
                                    if($v_opt!=''){
                                        echo $v_opt;
                                    }
                                    ?>
                                </select>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="taraf">Taraf Perkahwinan</label>
					<div class="col-12 d-flex py-2">
						<div class="form-check col-4 row mx-0 px-0">
							<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="bujang" value="bujang" checked onchange="check_taraf()">
							<label class="form-check-label" for="bujang">Bujang:</label>
						</div>
						<div class="form-check col-4 row mx-0 px-0">
							<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="berkahwin" value="berkahwin" onchange="check_taraf()">
							<label class="form-check-label" for="berkahwin">Berkahwin:</label>
						</div>
						<div class="col-4 row mx-0 px-0">
							<div class="form-check w-50">
								<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="taraf_lain" value="taraf_lain" onchange="check_taraf()">
								<label class="form-check-label" for="taraf_lain" onclick="check_taraf()">Lain-lain:<br><small>(Nyatakan)</small></label>
							</div>
							
							<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled>
						</div>
					</div>
				</div>
			</div>
		</div> 
		<div class="col-12 col-md-6">
			<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_email">Alamat Email:</label>
					<input class="w-75 form-control compulsary" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_bahagian_a_data['nom_email']) ? $v_bahagian_a_data['nom_email'] : "");?>">
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_rumah">Alamat Rumah<small><b>(Yang Terkini)</b></small>:</label>
    				<input type="text" name="alamat_rumah1" id="alamat_rumah1" class="w-75 form-control" value="<?php echo \U::safe_display_string(isset($v_bahagian_a_data['nom_address_1']) ? $v_bahagian_a_data['nom_address_1'] : "");?>">
    				<label class="w-25 col-form-label" for="alamat_rumah"></label>
    				<input type="text" name="alamat_rumah2" id="alamat_rumah2" class="w-75 form-control" value="<?php echo \U::safe_display_string(isset($v_bahagian_a_data['nom_address_2']) ? $v_bahagian_a_data['nom_address_2'] : "");?>">
    				<label class="w-25 col-form-label" for="alamat_rumah"></label>
    				<input type="text" name="alamat_rumah3" id="alamat_rumah3" class="w-75 form-control" value="<?php echo \U::safe_display_string(isset($v_bahagian_a_data['nom_address_3']) ? $v_bahagian_a_data['nom_address_3'] : "");?>">
    				<label class="w-25 col-form-label" for="alamat_rumah"></label>
    				<input type="text" name="alamat_rumah4" id="alamat_rumah4" class="w-75 form-control" value="<?php echo \U::safe_display_string(isset($v_bahagian_a_data['nom_address_4']) ? $v_bahagian_a_data['nom_address_4'] : "");?>"> 
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="poskod">Poskod:</label>
					<input class="w-75 form-control" type="text" id="poskod" name="poskod">
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="bandar">Bandar:</label>
					<?php
                                $v_opt = '';
                                $v_count = 1;
                                $v_opt .= '<option value="" selected></option>';
                                foreach($v_bandar as $v_row){
                                    if($v_count==1){
                                        $v_opt .= '<option value="'.\U::safe_display_string($v_row["city_id"]).'">'.\U::safe_display_string($v_row["city_name"]).'</option>';    
                                    }else{
                                        $v_opt .= '<option value="'.\U::safe_display_string($v_row["city_id"]).'">'.\U::safe_display_string($v_row["city_name"]).'</option>';
                                    }
                                    ++$v_count;
                                }
                                ?>
                                <select class="w-75 form-control" id="bandar" name="bandar">
                                    <?php
                                    if($v_opt!=''){
                                        echo $v_opt;
                                    }
                                    ?>
                                </select>
				</div>
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
					<label class="w-25 col-form-label" for="negeri">Negeri:</label>
					<?php
                                $v_opt = '';
                                $v_count = 1;
                                $v_opt .= '<option value="" selected></option>';
                                foreach($v_negeri as $v_row){
                                    if($v_count==1){
                                        $v_opt .= '<option value="'.\U::safe_display_string($v_row["state_id"]).'">'.\U::safe_display_string($v_row["state_name"]).'</option>';    
                                    }else{
                                        $v_opt .= '<option value="'.\U::safe_display_string($v_row["state_id"]).'">'.\U::safe_display_string($v_row["state_name"]).'</option>';
                                    }
                                    ++$v_count;
                                }
                                ?>
                                <select class="w-75 form-control" id="negeri" name="negeri">
                                    <?php
                                    if($v_opt!=''){
                                        echo $v_opt;
                                    }
                                    ?>
                                </select>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="telefon_rumah">Nombor Telefon Rumah:</label>
					<input class="w-75 form-control" type="text" id="telefon_rumah" name="telefon_rumah">
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="telefon_bimbit">Nombor Telefon Bimbit:</label>
					<input class="w-75 form-control" type="text" id="telefon_bimbit" name="telefon_bimbit">
				</div>
				<div class="form-group row">
					<input class="w-75 form-control" type="hidden" id="bahagian_borang" name="bahagian_borang" value="a">
				</div>
		        <div class="form-group row">
		            <div class="col-sm-2"></div>
		            <div class="col-sm-10 text-right">
		                <a href="javascript:if(validate(document.frm_bhgn_a)) document.frm_bhgn_a.submit();" class="btn btn-primary" role="button">
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