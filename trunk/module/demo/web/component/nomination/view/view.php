<style type="text/css">
	#breadcrumbs-two{
		overflow: hidden;
		width: 100%;
		list-style: none;
	}

	#breadcrumbs-two li{
		float: left;
		margin: 0 .5em 0 1em;
	}

	#breadcrumbs-two a{
		background: #ddd;
		padding: .7em 1em;
		float: left;
		text-decoration: none;
		color: #444;
		text-shadow: 0 1px 0 rgba(255,255,255,.5);
		position: relative;
	}

	#breadcrumbs-two a::before{
		content: "";
		position: absolute;
		top: 50%;
		margin-top: -1.5em;
		border-width: 1.5em 0 1.5em 1em;
		border-style: solid;
		border-color: #ddd #ddd #ddd transparent;
		left: -1em;
	}

	#breadcrumbs-two a::after{
		content: "";
		position: absolute;
		top: 50%;
		margin-top: -1.5em;
		border-top: 1.5em solid transparent;
		border-bottom: 1.5em solid transparent;
		border-left: 1em solid #ddd;
		right: -1em;
	}

	#breadcrumbs-two .current::after,
	#breadcrumbs-two .current::before{
		content: normal;
	}

	#breadcrumbs-two .main a {
	    background: #00b5e2;
	    padding: .7em 1em;
	    float: left;
	    text-decoration: none;
	    color: #444;
	    text-shadow: 0 1px 0 rgba(255,255,255,.5);
	    position: relative;
	}	

	#breadcrumbs-two .main a::after{
		content: "";
		position: absolute;
		top: 50%;
		margin-top: -1.5em;
		border-top: 1.5em solid transparent;
		border-bottom: 1.5em solid transparent;
		border-left: 1em solid #00b5e2;
		right: -1em;
	}

	#activebread a {
	    background: #00b5e2;
	    padding: .7em 1em;
	    float: left;
	    text-decoration: none;
	    color: #444;
	    text-shadow: 0 1px 0 rgba(255,255,255,.5);
	    position: relative;
	}

	#activebread a::after {
	    content: "";
	    position: absolute;
	    top: 50%;
	    margin-top: -1.5em;
	    border-top: 1.5em solid transparent;
	    border-bottom: 1.5em solid transparent;
	    border-left: 1em solid #00b5e2;
	    right: -1em;
	}	

	#activebread a::before {
	    content: "";
	    position: absolute;
	    top: 50%;
	    margin-top: -1.5em;
	    border-width: 1.5em 0 1.5em 1em;
	    border-style: solid;
	    border-color: #00b5e2 #00b5e2 #00b5e2 transparent;
	    left: -1em;
	}		
</style>
<div class="p-4">
	<div class="row border-bottom border-dark">
		<div class="col-12 col-md-5">
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>NOMINATION STATUS</b></p>			
		</div>
		<div class="col-10 col-md-5 mx-0 px-0">
		</div>
		<div class="col-2 mx-0 px-0" style="float: right">
			<a href="<?php echo \E::get('obj_curr_module')->build_action_path('nomination','index') ?>" type="button" class="w-75 btn btn-grey border border-dark text-dark float-right mb-2 mr-2 mt-2 rounded-0">BACK</a>
		</div>
	</div>
</div>
	<div class="col-12 row mt-4" style="">
		<ul id="breadcrumbs-two" style="float: center">
			<?php 
				if($v_user_detail['nom_stat'] == '2' || $v_user_detail['nom_stat'] == '3' || $v_user_detail['nom_stat'] == '4' || $v_user_detail['nom_stat'] == '7'){
			?>			
				<li id="activebread"><a href="">NOMINATION</a></li>
				<li id="activebread"><a href="">DATA ENTRY</a></li>
				<li><a href="">PENILAI 1</a></li>
				<li><a href="">PENILAI 2</a></li>
				<li><a href="">PENGESAH</a></li>
				<li><a href="">MEETING DECISION</a></li>
				<li><a href="">VERIFY MEETING DECISION</a></li>				
			<?php }elseif($v_user_detail['nom_stat'] == '5' || $v_user_detail['nom_stat'] == '8' || $v_user_detail['nom_stat'] == '11' || $v_user_detail['nom_stat'] == '14') {	?>
				<li id="activebread"><a href="">NOMINATION</a></li>
				<li id="activebread"><a href="">DATA ENTRY</a></li>
				<li id="activebread"><a href="">PENILAI 1</a></li>
				<li><a href="">PENILAI 2</a></li>
				<li><a href="">PENGESAH</a></li>
				<li><a href="">MEETING DECISION</a></li>
				<li><a href="">VERIFY MEETING DECISION</a></li>						
			<?php }elseif($v_user_detail['nom_stat'] == '6' || $v_user_detail['nom_stat'] == '9' || $v_user_detail['nom_stat'] == '12' || $v_user_detail['nom_stat'] == '15') {	?>
				<li id="activebread"><a href="">NOMINATION</a></li>
				<li id="activebread"><a href="">DATA ENTRY</a></li>
				<li id="activebread"><a href="">PENILAI 1</a></li>
				<li id="activebread"><a href="">PENILAI 2</a></li>
				<li><a href="">PENGESAH</a></li>
				<li><a href="">MEETING DECISION</a></li>
				<li><a href="">VERIFY MEETING DECISION</a></li>						
			<?php }elseif($v_user_detail['nom_stat'] == '10' || $v_user_detail['nom_stat'] == '13' || $v_user_detail['nom_stat'] == '16') {	?>
				<li id="activebread"><a href="">NOMINATION</a></li>
				<li id="activebread"><a href="">DATA ENTRY</a></li>
				<li id="activebread"><a href="">PENILAI 1</a></li>
				<li id="activebread"><a href="">PENILAI 2</a></li>
				<li id="activebread"><a href="">PENGESAH</a></li>
				<li><a href="">MEETING DECISION</a></li>
				<li><a href="">VERIFY MEETING DECISION</a></li>					
			<?php }elseif($v_user_detail['nom_stat'] == '17' || $v_user_detail['nom_stat'] == '18') {	?>
				<li id="activebread"><a href="">NOMINATION</a></li>
				<li id="activebread"><a href="">DATA ENTRY</a></li>
				<li id="activebread"><a href="">PENILAI 1</a></li>
				<li id="activebread"><a href="">PENILAI 2</a></li>
				<li id="activebread"><a href="">PENGESAH</a></li>
				<li id="activebread"><a href="">MEETING DECISION</a></li>
				<li><a href="">VERIFY MEETING DECISION</a></li>					
			<?php }elseif($v_user_detail['nom_stat'] == '19' || $v_user_detail['nom_stat'] == '20') {	?>
				<li id="activebread"><a href="">NOMINATION</a></li>
				<li id="activebread"><a href="">DATA ENTRY</a></li>
				<li id="activebread"><a href="">PENILAI 1</a></li>
				<li id="activebread"><a href="">PENILAI 2</a></li>
				<li id="activebread"><a href="">PENGESAH</a></li>
				<li id="activebread"><a href="">MEETING DECISION</a></li>
				<li id="activebread"><a href="">VERIFY MEETING DECISION</a></li>					
			<?php }else{ ?>
				<li><a href="activebread">NOMINATION</a></li>
				<li><a href="">DATA ENTRY</a></li>
				<li><a href="">PENILAI 1</a></li>
				<li><a href="">PENILAI 2</a></li>
				<li><a href="">PENGESAH</a></li>
				<li><a href="">MEETING DECISION</a></li>
				<li><a href="">VERIFY MEETING DECISION</a></li>					
			<?php } ?>
		</ul>	
	</div>

<div class="p-4">
	<div class="row border-bottom border-dark">
		<div class="col-12 col-md-5">
			<form>
				<div class="form-group row">
					<?PHP
					if(isset($v_id) && $v_id != ''){
						\I::create_input(
							'hidden',
							'id', 
							'id', 
							\U::safe_display_string(isset($v_id) ? $v_id : ""), 
							'text', 
							'style="width:400px;" ',
							''
						);
					}
					?>	
					<select class="col-12 form-control" id="borang" name="borang" readonly disabled="">				
					<?php 
						if($v_user_detail['form_id'] == '1'){
					?>
						<option value="a">BORANG A - KATEGORI PERKHIDMATAN AWAM NEGERI</option>				
					<?php
						}else if($v_user_detail['form_id'] == '2'){
					?>
						<option value="b">BORANG B - KATEGORI PERKHIDMATAN AWAM PERSEKUTUAN / BADAN-BADAN BERKANUN PERSEKUTUAN</option>					
					<?php
						}else if($v_user_detail['form_id'] == '3'){
					?>		
						<option value="c">BORANG C - KATEGORI BADAN BERKANUN NEGERI DAN PIHAK BERKUASA TEMPATAN NEGERI</option>			
					<?php
						}else if($v_user_detail['form_id'] == '4'){
					?>	
						<option value="d">BORANG D - KATEGORI KETUA MASYARAKAT / KETUA KAUM </option>				
					<?php
						}else if($v_user_detail['form_id'] == '5'){
					?>
						<option value="e">BORANG E - KATEGORI SWASTA / PERSATUAN / SUKARELA / SUKAN </option>					
					<?php
						}else if($v_user_detail['form_id'] == '6'){
					?>
						<option value="f">BORANG F - KATEGORI WARGA ASING </option>					
					<?php
						}else if($v_user_detail['form_id'] == '7'){
					?>	
						<option value="g">BORANG POLITIK - KATEGORI POLITIK</option>				
					<?php
						}
					?>
				    </select>					
				</div>
				
			</form>
		</div>
		<div class="col-10 col-md-5 mx-0 px-0">		
		</div>
<!-- 		<div class="col-2 mx-0 px-0">
			<a href="<?php echo \E::get('obj_curr_module')->build_action_path('nomination','index') ?>" type="button" class="w-75 btn btn-grey border border-dark text-dark float-right mb-2 mr-2 mt-2 rounded-0">BACK</a>
		</div> -->
	</div>
	<div class="col-12 mx-0 px-0 mt-4">
		<div id="div_borang_area" class="row col-12 mx-0 px-0 ">
			<?php if($v_user_detail['form_id'] == '1'){ ?>
				<!-- BAHAGIAN A -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN A: MAKLUMAT PERIBADI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="nama_penuh">Nama Penuh:</label>
									<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Nyatakan gelaran / jawatan yang telah diterima / disandang :<br><small><b>(Contoh: Tan Sri / Datuk / Temenggong / Penghulu dsbg.)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_title_designation']) ? $v_user_detail['nom_title_designation'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="icno">No. Kad Pengenalan:</label>
									<div class="col-12 d-flex py-2">
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_lama">Lama:</label>
											<input class="col-9 form-control" type="text" id="ic_lama" name="ic_lama" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_old_ic']) ? $v_user_detail['nom_old_ic'] : "");?>" readonly>
										</div>
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_baru">Baru:</label>
											<input class="col-9 form-control" type="text" id="ic_baru" name="ic_baru" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_new_ic']) ? $v_user_detail['nom_new_ic'] : "");?>" readonly>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="jantina">Jantina:</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-6 row mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="lelaki" value="lelaki" <?php echo $v_user_detail['nom_gender']=='l'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="lelaki">Lelaki</label>
										</div>
										<div class="form-check col-6 row mx-0 px-0 mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="perempuan" value="perempuan" <?php echo $v_user_detail['nom_gender']=='p'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="perempuan">Perempuan</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lahir">Tarikh Lahir:</label>
									<input class="w-75 form-control" type="date" id="tarikh_lahir" name="tarikh_lahir" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_dob']) ? $v_user_detail['nom_dob'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="umur">Umur:</label>
									<input class="w-75 form-control" type="text" id="umur" name="umur" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_age']) ? $v_user_detail['nom_age'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="keturunan">Keturunan:</label>
									<input class="w-75 form-control" type="text" id="keturunan" name="keturunan" value="<?php echo \U::safe_display_string(isset($v_user_detail['race_desc']) ? $v_user_detail['race_desc'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="taraf">Taraf Perkahwinan</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="bujang" value="bujang" <?php echo $v_user_detail['nom_marital_status']=='b'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="bujang">Bujang:</label>
										</div>
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="berkahwin" value="berkahwin" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']=='k'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="berkahwin">Berkahwin:</label>
										</div>
										<div class="col-4 row mx-0 px-0">
											<div class="form-check w-50">
												<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="taraf_lain" value="taraf_lain" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'?"CHECKED":"";?> DISABLED>
												<label class="form-check-label" for="taraf_lain" onclick="check_taraf()">Lain-lain:<br><small>(Nyatakan)</small></label>
											</div>

											<?php if($v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'){ ?>
											
												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_marital_status']) ? $v_user_detail['nom_marital_status'] : "");?>" readonly>

											<?php }else{ ?>

												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="" readonly>

											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Alamat Email:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_email']) ? $v_user_detail['nom_email'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Rumah<small><b>(Yang Terkini):</b></small></label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_1']) ? $v_user_detail['nom_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_2']) ? $v_user_detail['nom_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_3']) ? $v_user_detail['nom_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_4']) ? $v_user_detail['nom_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Poskod:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_postcode']) ? $v_user_detail['nom_postcode'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Bandar:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['city_name']) ? $v_user_detail['city_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Bahagian:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['division_name']) ? $v_user_detail['division_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="negeri">Negeri:</label>
									<input class="w-75 form-control" type="text" id="negeri" name="negeri" value="<?php echo \U::safe_display_string(isset($v_user_detail['state_name']) ? $v_user_detail['state_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_rumah">Nombor Telefon Rumah:</label>
									<input class="w-75 form-control" type="text" id="telefon_rumah" name="telefon_rumah" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_contact']) ? $v_user_detail['nom_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_bimbit">Nombor Telefon Bimbit:</label>
									<input class="w-75 form-control" type="text" id="telefon_bimbit" name="telefon_bimbit" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_mobile']) ? $v_user_detail['nom_mobile'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>
				<!-- END BAHAGIAN A -->
				<!-- BAHAGIAN B -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN B: MAKLUMAT PERKHIDMATAN</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">Tarikh Lantikan Pertama ke Perkhidmatan Awam:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_pertama" name="tarikh_lantikan_pertama" value="<?php echo \U::safe_display_string(isset($v_user_detail['first_app_date']) ? $v_user_detail['first_app_date'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_sekarang">Tarikh Lantikan ke Perkhidmatan Sekarang:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_sekarang" name="tarikh_lantikan_sekarang" value="<?php echo \U::safe_display_string(isset($v_user_detail['app_date_service']) ? $v_user_detail['app_date_service'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Gelaran Jawatan :<br><small><b>(Contoh: Pegawai Daerah, Pegawai Perubatan Bahagian, Penolong Pengarah dan sebagainya)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran"  value="<?php echo \U::safe_display_string(isset($v_user_detail['job_title']) ? $v_user_detail['job_title'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Taraf Jawatan:<br><small><b>(Memangku / Menjalankan Tugas) / Tempoh</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['job_level']) ? $v_user_detail['job_level'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Taraf Pelantikan:<br><small><b>(Tetap / Sementara / Kontrak / Pinjaman / Tambah Sentara)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['app_level']) ? $v_user_detail['app_level'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Klasifikasi Perkhidmatan:<br><small><b>(Contoh: Pentadbiran / Kesihatan / Sosial / Pendidikan)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['service_class']) ? $v_user_detail['service_class'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Kumpulan Perkhidmatan:<br><small><b>(Contoh: Pengurusan & Profesional / Pelaksana)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['service_group']) ? $v_user_detail['service_group'] : "");?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Gred Jawatan:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['job_grade']) ? $v_user_detail['job_grade'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat dengan Kerajaan Negeri:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['gov_service_year']) ? $v_user_detail['gov_service_year'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat di Sarawak:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['sarawak_service_year']) ? $v_user_detail['sarawak_service_year'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Jabatan Sekarang:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_organization']) ? $v_user_detail['nom_organization'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="gelaran">Stesen tempat bertugas sekarang:<br><small><b>(Contoh: Sibu / Miri / Limbang / Mukah dan sebagainya)</b></small></label>
									<input class="w-75 form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['station']) ? $v_user_detail['station'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat di stesen sekarang:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['station_year']) ? $v_user_detail['station_year'] : "");?>" readonly>
								</div>												
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Pejabat sekarang:</label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['office_address_1']) ? $v_user_detail['office_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_2']) ? $v_user_detail['office_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_3']) ? $v_user_detail['office_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_4']) ? $v_user_detail['office_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Nombor Telefon Pejabat:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['office_contact']) ? $v_user_detail['office_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Tindakan Disiplin / Undang-Undang / Status Kebankrapan:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['displinary_action']) ? $v_user_detail['displinary_action'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>					
				<!-- END BAHAGIAN B -->				
				<!-- BAHAGIAN C -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN C: MAKLUMAT PRESTASI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">1. Markah Prestasi:</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col">TAHUN</th>
									      <th scope="col">MARKAH</th>
									    </tr>
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_markah_prestasi as $v_markah) {
									  	?>
									    <tr>
									      <td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['perf_year']) ? $v_markah['perf_year'] : "");?>" readonly></td>
									      <td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['perf_mark']) ? $v_markah['perf_mark'] : "");?>" readonly></td>
									    </tr>
									    <?php
									    }
									    ?>
									  </tbody>
									</table>					
								</div>				
								<div class="form-group row">
									<label class="w-25 col-12" for="tarikh_lantikan_sekarang">2. Sila pastikan markah prestasi terkini dinyatakan. Jika Panel Penyelarasan Gaji belum bermesyuarat pada tahun berkenaan, keputusan panel pada tiga (3) tahun sebelumnya hendaklah dinyatakan</label>
								</div>
								<div class="form-group row">
									<label class="w-25 col-12" for="gelaran">3. Pernah menerima Anugerah Perkhidmatan Cemerlang (APC). Sila nyatakan di bawah:-</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col" colspan="5">ANUGERAH PERKHIDMATAN CEMERLANG</th>
									    </tr>
									    <tr>
									    	<th>TAHUN</th>
									    </tr>					    
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_apc as $v_markah) {
									  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['nom_year']) ? $v_markah['nom_year'] : "");?>" readonly></td>
									    </tr>
									    <?php
									    }
									    ?>
									  </tbody>
									</table>
								</div>				
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-12" for="gelaran">4. Markah Prestasi <b>melebihi 85%</b>. Sila nyatakan di bawah:-</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col" colspan="10">ANUGERAH PERKHIDMATAN CEMERLANG</th>
									    </tr>
									    <tr>
									    	<th>TAHUN</th>
									    	<th>MARKAH</th>
									    </tr>					    
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_overmark as $v_markah) {
									  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['over_year']) ? $v_markah['over_year'] : "");?>" readonly></td>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['over_mark']) ? $v_markah['over_mark'] : "");?>" readonly></td>
									    </tr>
									    <?php
									  	}
									  	?>
									  </tbody>
									</table>
								</div>
							</div>
						</div>
					</div>				
				<!-- END BAHAGIAN C -->				
				<!-- BAHAGIAN D & E -->
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN D: MAKLUMAT KURNIAAN YANG TELAH DIANUGERAHKAN<br></b>(Kurniaan Darjah Kebesaran, Bintang dan Pingat <b>Negeri Sarawak / Persekutuan / Negara atau Negeri Lain </b>)</p>				
							<div class="col-12 row mt-4">
								<div class="col-12">
									<table class="table table-striped">
									  <thead>
									    <tr>
									      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
									      <th scope="col">Negara / Negeri</th>
									      <th scope="col">Tahun Kurniaan</th>
									    </tr>
									  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_history_success as $v_kurniaanberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['award_title']) ? $v_kurniaanberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['negara_negeri']) ? $v_kurniaanberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['nom_year']) ? $v_kurniaanberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
									</table>					
								</div>
							</div>				
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN E: MAKLUMAT PENCALONAN TERDAHULU<br></b>(Nyatakan Darjah Kebesaran / Bintang / Pingat yang pernah dicalonkan tetapi <b>tidak berjaya </b>)</p>
								<div class="col-12 row mt-4">
									<div class="col-12">
										<table class="table table-striped">
										  <thead>
										    <tr>
										      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
										      <th scope="col">Negara / Negeri</th>
										      <th scope="col">Tahun Kurniaan</th>
										    </tr>
										  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_history_x_success as $v_kurniaanxberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['award_title']) ? $v_kurniaanxberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['negara_negeri']) ? $v_kurniaanxberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['nom_year']) ? $v_kurniaanxberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
										</table>						
									</div>
								</div>
							</div>
						</div>
					</div>										
				<!-- END BAHAGIAN D & E -->				
				<!-- BAHAGIAN F -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN F: MAKLUMAT KEGIATAN LUAR SEMASA<br></b>Senaraikan penglibatan Calon dalam Pertubuhan / Persatuan (jika ada)</p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
							<table class="table table-striped">
							  <thead>
							    <tr>
							      <th scope="col">PERTUBUHAN / PERSATUAN</th>
							      <th scope="col">JAWATAN</th>
							      <th scope="col">TEMPOH</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php
							  	foreach ($v_activity as $v_kegiatan) {
							  	?>
							    <tr>
							    	<td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_organization']) ? $v_kegiatan['act_organization'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_position']) ? $v_kegiatan['act_position'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_year']) ?$v_kegiatan['act_year'] : "");?>" readonly></td>
							    </tr>
							     <?php
								}
							  	?>
							  </tbody>
							</table>						
						</div>
					</div>
					<!-- END BAHAGIAN F -->	
					<!-- BAHAGIAN G -->	
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN G: MAKLUMAT PENCADANG<br></b><b>Nota Penting: Pencadang hendaklah merupakan pegawai yang lebih kanan dari Calon</b></p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
				<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_pencadang">Nama:</label>
					<input class="w-75 form-control" type="text" id="nama_pencadang" name="nama_pencadang" value="<?php echo \U::safe_display_string(isset($v_user_detail['usr_full_name']) ? $v_user_detail['usr_full_name'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
					<input class="w-75 form-control" type="text" id="jawatan_pencadang" name="jawatan_pencadang" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_pejabat_pencadang">Alamat Pejabat:</label>
    				<textarea class="w-75 form-control" id="alamat_pejabat_pencadang" name="alamat_pejabat_pencadang"  readonly rows="5"><?php echo \U::safe_display_string(isset($v_user_detail['work_address']) ? $v_user_detail['work_address'] : "");?></textarea>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="no_telefon_pencadang">No. Tel. Pejabat/ Tel. Bimbit:</label>
					<input class="w-75 form-control" type="text" id="no_telefon_pencadang" name="no_telefon_pencadang"  readonly value="<?php echo \U::safe_display_string(isset($v_user_detail['phone_office']) ? $v_user_detail['phone_office'] : "");?> &nbsp; <?php echo  \U::safe_display_string(isset($v_user_detail['mobile_no']) ? $v_user_detail['mobile_no'] : "");?>">
				</div>
			</div>
		</div>
	</div>
				<!-- END BAHAGIAN G -->	
				<!-- BAHAGIAN J -->	

						<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN J: ASAS PENCALONAN<br>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</b></p>
							<div class="col-12 row mt-4">
								<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA JABATAN / PERKHIDMATAN</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
								</div>
		
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA MASYARAKAT</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGERI</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negeri as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
				</div></div>
							<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGARA</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negara as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							
									<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">PENGHARGAAN DIANUGERAH</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							</div>


				<!-- END BAHAGIAN J -->			
				<?php }else if($v_user_detail['form_id'] == '2'){
				?>	
				<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN A: MAKLUMAT PERIBADI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="nama_penuh">Nama Penuh:</label>
									<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Nyatakan gelaran / jawatan yang telah diterima / disandang :<br><small><b>(Contoh: Tan Sri / Datuk / Temenggong / Penghulu dsbg.)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_title_designation']) ? $v_user_detail['nom_title_designation'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="icno">No. Kad Pengenalan:</label>
									<div class="col-12 d-flex py-2">
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_lama">Lama:</label>
											<input class="col-9 form-control" type="text" id="ic_lama" name="ic_lama" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_old_ic']) ? $v_user_detail['nom_old_ic'] : "");?>" readonly>
										</div>
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_baru">Baru:</label>
											<input class="col-9 form-control" type="text" id="ic_baru" name="ic_baru" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_new_ic']) ? $v_user_detail['nom_new_ic'] : "");?>" readonly>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="jantina">Jantina:</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-6 row mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="lelaki" value="lelaki" <?php echo $v_user_detail['nom_gender']=='l'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="lelaki">Lelaki</label>
										</div>
										<div class="form-check col-6 row mx-0 px-0 mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="perempuan" value="perempuan" <?php echo $v_user_detail['nom_gender']=='p'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="perempuan">Perempuan</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lahir">Tarikh Lahir:</label>
									<input class="w-75 form-control" type="date" id="tarikh_lahir" name="tarikh_lahir" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_dob']) ? $v_user_detail['nom_dob'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="umur">Umur:</label>
									<input class="w-75 form-control" type="text" id="umur" name="umur" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_age']) ? $v_user_detail['nom_age'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="keturunan">Keturunan:</label>
									<input class="w-75 form-control" type="text" id="keturunan" name="keturunan" value="<?php echo \U::safe_display_string(isset($v_user_detail['race_desc']) ? $v_user_detail['race_desc'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="taraf">Taraf Perkahwinan</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="bujang" value="bujang" <?php echo $v_user_detail['nom_marital_status']=='b'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="bujang">Bujang:</label>
										</div>
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="berkahwin" value="berkahwin" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']=='k'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="berkahwin">Berkahwin:</label>
										</div>
										<div class="col-4 row mx-0 px-0">
											<div class="form-check w-50">
												<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="taraf_lain" value="taraf_lain" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'?"CHECKED":"";?> DISABLED>
												<label class="form-check-label" for="taraf_lain" onclick="check_taraf()">Lain-lain:<br><small>(Nyatakan)</small></label>
											</div>

											<?php if($v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'){ ?>
											
												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_marital_status']) ? $v_user_detail['nom_marital_status'] : "");?>" readonly>

											<?php }else{ ?>

												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="" readonly>

											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Alamat Email:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_email']) ? $v_user_detail['nom_email'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Rumah<small><b>(Yang Terkini):</b></small></label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_1']) ? $v_user_detail['nom_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_2']) ? $v_user_detail['nom_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_3']) ? $v_user_detail['nom_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_4']) ? $v_user_detail['nom_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Poskod:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_postcode']) ? $v_user_detail['nom_postcode'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Bandar:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['city_name']) ? $v_user_detail['city_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Bahagian:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['division_name']) ? $v_user_detail['division_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="negeri">Negeri:</label>
									<input class="w-75 form-control" type="text" id="negeri" name="negeri" value="<?php echo \U::safe_display_string(isset($v_user_detail['state_name']) ? $v_user_detail['state_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_rumah">Nombor Telefon Rumah:</label>
									<input class="w-75 form-control" type="text" id="telefon_rumah" name="telefon_rumah" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_contact']) ? $v_user_detail['nom_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_bimbit">Nombor Telefon Bimbit:</label>
									<input class="w-75 form-control" type="text" id="telefon_bimbit" name="telefon_bimbit" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_mobile']) ? $v_user_detail['nom_mobile'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>
				<!-- END BAHAGIAN A -->
				<!-- BAHAGIAN B -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN B: MAKLUMAT PERKHIDMATAN</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">Tarikh Lantikan Pertama ke Perkhidmatan Awam:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_pertama" name="tarikh_lantikan_pertama" value="<?php echo \U::safe_display_string(isset($v_user_detail['first_app_date']) ? $v_user_detail['first_app_date'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_sekarang">Tarikh Lantikan ke Perkhidmatan Sekarang:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_sekarang" name="tarikh_lantikan_sekarang" value="<?php echo \U::safe_display_string(isset($v_user_detail['app_date_service']) ? $v_user_detail['app_date_service'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Gelaran Jawatan :<br><small><b>(Contoh: Pegawai Daerah, Pegawai Perubatan Bahagian, Penolong Pengarah dan sebagainya)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran"  value="<?php echo \U::safe_display_string(isset($v_user_detail['job_title']) ? $v_user_detail['job_title'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Taraf Jawatan:<br><small><b>(Memangku / Menjalankan Tugas) / Tempoh</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['job_level']) ? $v_user_detail['job_level'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Taraf Pelantikan:<br><small><b>(Tetap / Sementara / Kontrak / Pinjaman / Tambah Sentara)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['app_level']) ? $v_user_detail['app_level'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Klasifikasi Perkhidmatan:<br><small><b>(Contoh: Pentadbiran / Kesihatan / Sosial / Pendidikan)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['service_class']) ? $v_user_detail['service_class'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Kumpulan Perkhidmatan:<br><small><b>(Contoh: Pengurusan & Profesional / Pelaksana)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['service_group']) ? $v_user_detail['service_group'] : "");?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Gred Jawatan:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['job_grade']) ? $v_user_detail['job_grade'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat dengan Kerajaan Negeri:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['gov_service_year']) ? $v_user_detail['gov_service_year'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat di Sarawak:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['sarawak_service_year']) ? $v_user_detail['sarawak_service_year'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Jabatan Sekarang:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_organization']) ? $v_user_detail['nom_organization'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class=" w-25 col-form-label" for="gelaran">Stesen tempat bertugas sekarang:<br><small><b>(Contoh: Sibu / Miri / Limbang / Mukah dan sebagainya)</b></small></label>
									<input class="w-75 form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['station']) ? $v_user_detail['station'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat di stesen sekarang:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['station_year']) ? $v_user_detail['station_year'] : "");?>" readonly>
								</div>												
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Pejabat sekarang:</label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['office_address_1']) ? $v_user_detail['office_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_2']) ? $v_user_detail['office_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_3']) ? $v_user_detail['office_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_4']) ? $v_user_detail['office_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Nombor Telefon Pejabat:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['office_contact']) ? $v_user_detail['office_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Tindakan Disiplin / Undang-Undang / Status Kebankrapan:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['displinary_action']) ? $v_user_detail['displinary_action'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>					
				<!-- END BAHAGIAN B -->				
				<!-- BAHAGIAN C -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN C: MAKLUMAT PRESTASI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">1. Markah Prestasi:</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col">TAHUN</th>
									      <th scope="col">MARKAH</th>
									    </tr>
									  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_markah_prestasi as $v_markah) {
									  	?>
									    <tr>
									      <td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['perf_year']) ? $v_markah['perf_year'] : "");?>" readonly></td>
									      <td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['perf_mark']) ? $v_markah['perf_mark'] : "");?>" readonly></td>
									    </tr>
									     <?php
									    }
									    ?>
									  </tbody>
									</table>					
								</div>				
								<div class="form-group row">
									<label class="w-25 col-12" for="tarikh_lantikan_sekarang">2. Sila pastikan markah prestasi terkini dinyatakan. Jika Panel Penyelarasan Gaji belum bermesyuarat pada tahun berkenaan, keputusan panel pada tiga (3) tahun sebelumnya hendaklah dinyatakan</label>
								</div>
								<div class="form-group row">
									<label class="w-25 col-12" for="gelaran">3. Pernah menerima Anugerah Perkhidmatan Cemerlang (APC). Sila nyatakan di bawah:-</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col" colspan="5">ANUGERAH PERKHIDMATAN CEMERLANG</th>
									    </tr>
									    <tr>
									    	<th>TAHUN</th>
									    </tr>					    
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_apc as $v_markah) {
									  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['nom_year']) ? $v_markah['nom_year'] : "");?>" readonly></td>
									    </tr>
									    <?php
									    }
									    ?>
									  </tbody>
									</table>
								</div>				
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-12" for="gelaran">4. Markah Prestasi <b>melebihi 85%</b>. Sila nyatakan di bawah:-</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col" colspan="10">ANUGERAH PERKHIDMATAN CEMERLANG</th>
									    </tr>
									    <tr>
									    	<th>TAHUN</th>
									    	<th>MARKAH</th>
									    </tr>					    
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_overmark as $v_markah) {
									  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['over_year']) ? $v_markah['over_year'] : "");?>" readonly></td>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['over_mark']) ? $v_markah['over_mark'] : "");?>" readonly></td>
									    </tr>
									    <?php
									  	}
									  	?>
									  </tbody>
									</table>
								</div>
							</div>
						</div>
					</div>				
				<!-- END BAHAGIAN C -->				
				<!-- BAHAGIAN D & E -->
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN D: MAKLUMAT KURNIAAN YANG TELAH DIANUGERAHKAN<br></b>(Kurniaan Darjah Kebesaran, Bintang dan Pingat <b>Negeri Sarawak / Persekutuan / Negara atau Negeri Lain </b>)</p>				
							<div class="col-12 row mt-4">
								<div class="col-12">
									<table class="table table-striped">
									  <thead>
									    <tr>
									      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
									      <th scope="col">Negara / Negeri</th>
									      <th scope="col">Tahun Kurniaan</th>
									    </tr>
									  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_history_success as $v_kurniaanberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['award_title']) ? $v_kurniaanberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['negara_negeri']) ? $v_kurniaanberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['nom_year']) ? $v_kurniaanberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
									</table>					
								</div>
							</div>				
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN E: MAKLUMAT PENCALONAN TERDAHULU<br></b>(Nyatakan Darjah Kebesaran / Bintang / Pingat yang pernah dicalonkan tetapi <b>tidak berjaya </b>)</p>
								<div class="col-12 row mt-4">
									<div class="col-12">
										<table class="table table-striped">
										  <thead>
										    <tr>
										      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
										      <th scope="col">Negara / Negeri</th>
										      <th scope="col">Tahun Kurniaan</th>
										    </tr>
										  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_history_x_success as $v_kurniaanxberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['award_title']) ? $v_kurniaanxberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['negara_negeri']) ? $v_kurniaanxberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['nom_year']) ? $v_kurniaanxberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
										</table>						
									</div>
								</div>
							</div>
						</div>
					</div>										
				<!-- END BAHAGIAN D & E -->				
				<!-- BAHAGIAN F -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN F: MAKLUMAT KEGIATAN LUAR SEMASA<br></b>Senaraikan penglibatan Calon dalam Pertubuhan / Persatuan (jika ada)</p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
							<table class="table table-striped">
							  <thead>
							    <tr>
							      <th scope="col">PERTUBUHAN / PERSATUAN</th>
							      <th scope="col">JAWATAN</th>
							      <th scope="col">TEMPOH</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php
							  	foreach ($v_activity as $v_kegiatan) {
							  	?>
							    <tr>
							    	<td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_organization']) ? $v_kegiatan['act_organization'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_position']) ? $v_kegiatan['act_position'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_year']) ?$v_kegiatan['act_year'] : "");?>" readonly></td>
							    </tr>
							     <?php
								}
							  	?>
							  </tbody>
							</table>						
						</div>
					</div>	

										<!-- BAHAGIAN G -->	
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN G: MAKLUMAT PENCADANG<br></b><b>Nota Penting: Pencadang hendaklah merupakan pegawai yang lebih kanan dari Calon</b></p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
				<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_pencadang">Nama:</label>
					<input class="w-75 form-control" type="text" id="nama_pencadang" name="nama_pencadang" value="<?php echo \U::safe_display_string(isset($v_user_detail['usr_full_name']) ? $v_user_detail['usr_full_name'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
					<input class="w-75 form-control" type="text" id="jawatan_pencadang" name="jawatan_pencadang" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_pejabat_pencadang">Alamat Pejabat:</label>
    				<textarea class="w-75 form-control" id="alamat_pejabat_pencadang" name="alamat_pejabat_pencadang"  readonly rows="5"><?php echo \U::safe_display_string(isset($v_user_detail['work_address']) ? $v_user_detail['work_address'] : "");?></textarea>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="no_telefon_pencadang">No. Tel. Pejabat/ Tel. Bimbit:</label>
					<input class="w-75 form-control" type="text" id="no_telefon_pencadang" name="no_telefon_pencadang"  readonly value="<?php echo \U::safe_display_string(isset($v_user_detail['phone_office']) ? $v_user_detail['phone_office'] : "");?> &nbsp; <?php echo  \U::safe_display_string(isset($v_user_detail['mobile_no']) ? $v_user_detail['mobile_no'] : "");?>">
				</div>
			</div>
		</div>
	</div>
				<!-- END BAHAGIAN G -->	
				<!-- BAHAGIAN J -->	

						<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN K: ASAS PENCALONAN<br>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</b></p>
							<div class="col-12 row mt-4">
								<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA JABATAN / PERKHIDMATAN</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
								</div>
		
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA MASYARAKAT</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGERI</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negeri as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
				</div></div>
							<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGARA</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negara as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							
									<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">PENGHARGAAN DIANUGERAH</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							</div>
			
				
					<?php
						}else if($v_user_detail['form_id'] == '3'){
					?>		
										<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN A: MAKLUMAT PERIBADI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="nama_penuh">Nama Penuh:</label>
									<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Nyatakan gelaran / jawatan yang telah diterima / disandang :<br><small><b>(Contoh: Tan Sri / Datuk / Temenggong / Penghulu dsbg.)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_title_designation']) ? $v_user_detail['nom_title_designation'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="icno">No. Kad Pengenalan:</label>
									<div class="col-12 d-flex py-2">
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_lama">Lama:</label>
											<input class="col-9 form-control" type="text" id="ic_lama" name="ic_lama" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_old_ic']) ? $v_user_detail['nom_old_ic'] : "");?>" readonly>
										</div>
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_baru">Baru:</label>
											<input class="col-9 form-control" type="text" id="ic_baru" name="ic_baru" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_new_ic']) ? $v_user_detail['nom_new_ic'] : "");?>" readonly>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="jantina">Jantina:</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-6 row mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="lelaki" value="lelaki" <?php echo $v_user_detail['nom_gender']=='l'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="lelaki">Lelaki</label>
										</div>
										<div class="form-check col-6 row mx-0 px-0 mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="perempuan" value="perempuan" <?php echo $v_user_detail['nom_gender']=='p'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="perempuan">Perempuan</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lahir">Tarikh Lahir:</label>
									<input class="w-75 form-control" type="date" id="tarikh_lahir" name="tarikh_lahir" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_dob']) ? $v_user_detail['nom_dob'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="umur">Umur:</label>
									<input class="w-75 form-control" type="text" id="umur" name="umur" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_age']) ? $v_user_detail['nom_age'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="keturunan">Keturunan:</label>
									<input class="w-75 form-control" type="text" id="keturunan" name="keturunan" value="<?php echo \U::safe_display_string(isset($v_user_detail['race_desc']) ? $v_user_detail['race_desc'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="taraf">Taraf Perkahwinan</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="bujang" value="bujang" <?php echo $v_user_detail['nom_marital_status']=='b'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="bujang">Bujang:</label>
										</div>
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="berkahwin" value="berkahwin" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']=='k'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="berkahwin">Berkahwin:</label>
										</div>
										<div class="col-4 row mx-0 px-0">
											<div class="form-check w-50">
												<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="taraf_lain" value="taraf_lain" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'?"CHECKED":"";?> DISABLED>
												<label class="form-check-label" for="taraf_lain" onclick="check_taraf()">Lain-lain:<br><small>(Nyatakan)</small></label>
											</div>

											<?php if($v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'){ ?>
											
												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_marital_status']) ? $v_user_detail['nom_marital_status'] : "");?>" readonly>

											<?php }else{ ?>

												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="" readonly>

											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Alamat Email:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_email']) ? $v_user_detail['nom_email'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Rumah<small><b>(Yang Terkini):</b></small></label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_1']) ? $v_user_detail['nom_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_2']) ? $v_user_detail['nom_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_3']) ? $v_user_detail['nom_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_4']) ? $v_user_detail['nom_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Poskod:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_postcode']) ? $v_user_detail['nom_postcode'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Bandar:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['city_name']) ? $v_user_detail['city_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Bahagian:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['division_name']) ? $v_user_detail['division_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="negeri">Negeri:</label>
									<input class="w-75 form-control" type="text" id="negeri" name="negeri" value="<?php echo \U::safe_display_string(isset($v_user_detail['state_name']) ? $v_user_detail['state_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_rumah">Nombor Telefon Rumah:</label>
									<input class="w-75 form-control" type="text" id="telefon_rumah" name="telefon_rumah" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_contact']) ? $v_user_detail['nom_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_bimbit">Nombor Telefon Bimbit:</label>
									<input class="w-75 form-control" type="text" id="telefon_bimbit" name="telefon_bimbit" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_mobile']) ? $v_user_detail['nom_mobile'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>
				<!-- END BAHAGIAN A -->
				<!-- BAHAGIAN B -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN B: MAKLUMAT PERKHIDMATAN</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">Tarikh Lantikan Pertama ke Perkhidmatan Awam:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_pertama" name="tarikh_lantikan_pertama" value="<?php echo \U::safe_display_string(isset($v_user_detail['first_app_date']) ? $v_user_detail['first_app_date'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_sekarang">Tarikh Lantikan ke Perkhidmatan Sekarang:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_sekarang" name="tarikh_lantikan_sekarang" value="<?php echo \U::safe_display_string(isset($v_user_detail['app_date_service']) ? $v_user_detail['app_date_service'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Gelaran Jawatan :<br><small><b>(Contoh: Pegawai Daerah, Pegawai Perubatan Bahagian, Penolong Pengarah dan sebagainya)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran"  value="<?php echo \U::safe_display_string(isset($v_user_detail['job_title']) ? $v_user_detail['job_title'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Taraf Jawatan:<br><small><b>(Memangku / Menjalankan Tugas) / Tempoh</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['job_level']) ? $v_user_detail['job_level'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Taraf Pelantikan:<br><small><b>(Tetap / Sementara / Kontrak / Pinjaman / Tambah Sentara)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['app_level']) ? $v_user_detail['app_level'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Klasifikasi Perkhidmatan:<br><small><b>(Contoh: Pentadbiran / Kesihatan / Sosial / Pendidikan)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['service_class']) ? $v_user_detail['service_class'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Kumpulan Perkhidmatan:<br><small><b>(Contoh: Pengurusan & Profesional / Pelaksana)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['service_group']) ? $v_user_detail['service_group'] : "");?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Gred Jawatan:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['job_grade']) ? $v_user_detail['job_grade'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat dengan Kerajaan Negeri:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['gov_service_year']) ? $v_user_detail['gov_service_year'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat di Sarawak:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['sarawak_service_year']) ? $v_user_detail['sarawak_service_year'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Jabatan Sekarang:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_organization']) ? $v_user_detail['nom_organization'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="gelaran">Stesen tempat bertugas sekarang:<br><small><b>(Contoh: Sibu / Miri / Limbang / Mukah dan sebagainya)</b></small></label>
									<input class="w-75 form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['station']) ? $v_user_detail['station'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat di stesen sekarang:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['station_year']) ? $v_user_detail['station_year'] : "");?>" readonly>
								</div>												
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Pejabat sekarang:</label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['office_address_1']) ? $v_user_detail['office_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_2']) ? $v_user_detail['office_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_3']) ? $v_user_detail['office_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_4']) ? $v_user_detail['office_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Nombor Telefon Pejabat:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['office_contact']) ? $v_user_detail['office_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Tindakan Disiplin / Undang-Undang / Status Kebankrapan:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['displinary_action']) ? $v_user_detail['displinary_action'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>					
				<!-- END BAHAGIAN B -->				
				<!-- BAHAGIAN C -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN C: MAKLUMAT PRESTASI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">1. Markah Prestasi:</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col">TAHUN</th>
									      <th scope="col">MARKAH</th>
									    </tr>
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_markah_prestasi as $v_markah) {
									  	?>
									    <tr>
									      <td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['perf_year']) ? $v_markah['perf_year'] : "");?>" readonly></td>
									      <td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['perf_mark']) ? $v_markah['perf_mark'] : "");?>" readonly></td>
									    </tr>
									    <?php
									    }
									    ?>
									  </tbody>
									</table>					
								</div>				
								<div class="form-group row">
									<label class="w-25 col-12" for="tarikh_lantikan_sekarang">2. Sila pastikan markah prestasi terkini dinyatakan. Jika Panel Penyelarasan Gaji belum bermesyuarat pada tahun berkenaan, keputusan panel pada tiga (3) tahun sebelumnya hendaklah dinyatakan</label>
								</div>
								<div class="form-group row">
									<label class="w-25 col-12" for="gelaran">3. Pernah menerima Anugerah Perkhidmatan Cemerlang (APC). Sila nyatakan di bawah:-</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col" colspan="5">ANUGERAH PERKHIDMATAN CEMERLANG</th>
									    </tr>
									    <tr>
									    	<th>TAHUN</th>
									    </tr>					    
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_apc as $v_markah) {
									  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['nom_year']) ? $v_markah['nom_year'] : "");?>" readonly></td>
									    </tr>
									    <?php
									    }
									    ?>
									  </tbody>
									</table>
								</div>				
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-12" for="gelaran">4. Markah Prestasi <b>melebihi 85%</b>. Sila nyatakan di bawah:-</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col" colspan="10">ANUGERAH PERKHIDMATAN CEMERLANG</th>
									    </tr>
									    <tr>
									    	<th>TAHUN</th>
									    	<th>MARKAH</th>
									    </tr>					    
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_overmark as $v_markah) {
									  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['over_year']) ? $v_markah['over_year'] : "");?>" readonly></td>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['over_mark']) ? $v_markah['over_mark'] : "");?>" readonly></td>
									    </tr>
									    <?php
									  	}
									  	?>
									  </tbody>
									</table>
								</div>
							</div>
						</div>
					</div>				
				<!-- END BAHAGIAN C -->				
				<!-- BAHAGIAN D & E -->
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN D: MAKLUMAT KURNIAAN YANG TELAH DIANUGERAHKAN<br></b>(Kurniaan Darjah Kebesaran, Bintang dan Pingat <b>Negeri Sarawak / Persekutuan / Negara atau Negeri Lain </b>)</p>				
							<div class="col-12 row mt-4">
								<div class="col-12">
									<table class="table table-striped">
									  <thead>
									    <tr>
									      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
									      <th scope="col">Negara / Negeri</th>
									      <th scope="col">Tahun Kurniaan</th>
									    </tr>
									  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_history_success as $v_kurniaanberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['award_title']) ? $v_kurniaanberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['negara_negeri']) ? $v_kurniaanberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['nom_year']) ? $v_kurniaanberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
									</table>					
								</div>
							</div>				
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN E: MAKLUMAT PENCALONAN TERDAHULU<br></b>(Nyatakan Darjah Kebesaran / Bintang / Pingat yang pernah dicalonkan tetapi <b>tidak berjaya </b>)</p>
								<div class="col-12 row mt-4">
									<div class="col-12">
										<table class="table table-striped">
										  <thead>
										    <tr>
										      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
										      <th scope="col">Negara / Negeri</th>
										      <th scope="col">Tahun Kurniaan</th>
										    </tr>
										  </thead>
								  			<tbody>
									  		<?php
									  	foreach ($v_history_x_success as $v_kurniaanxberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['award_title']) ? $v_kurniaanxberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['negara_negeri']) ? $v_kurniaanxberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['nom_year']) ? $v_kurniaanxberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
										</table>						
									</div>
								</div>
							</div>
						</div>
					</div>										
				<!-- END BAHAGIAN D & E -->				
				<!-- BAHAGIAN F -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN F: MAKLUMAT KEGIATAN LUAR SEMASA<br></b>Senaraikan penglibatan Calon dalam Pertubuhan / Persatuan (jika ada)</p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
							<table class="table table-striped">
							  <thead>
							    <tr>
							      <th scope="col">PERTUBUHAN / PERSATUAN</th>
							      <th scope="col">JAWATAN</th>
							      <th scope="col">TEMPOH</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php
							  	foreach ($v_activity as $v_kegiatan) {
							  	?>
							    <tr>
							    	<td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_organization']) ? $v_kegiatan['act_organization'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_position']) ? $v_kegiatan['act_position'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_year']) ?$v_kegiatan['act_year'] : "");?>" readonly></td>
							    </tr>
							     <?php
								}
							  	?>
							  </tbody>
							</table>						
						</div>
					</div>
															<!-- BAHAGIAN G -->	
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN G: MAKLUMAT PENCADANG<br></b><b>Nota Penting: Pencadang hendaklah merupakan pegawai yang lebih kanan dari Calon</b></p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
				<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_pencadang">Nama:</label>
					<input class="w-75 form-control" type="text" id="nama_pencadang" name="nama_pencadang" value="<?php echo \U::safe_display_string(isset($v_user_detail['usr_full_name']) ? $v_user_detail['usr_full_name'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
					<input class="w-75 form-control" type="text" id="jawatan_pencadang" name="jawatan_pencadang" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_pejabat_pencadang">Alamat Pejabat:</label>
    				<textarea class="w-75 form-control" id="alamat_pejabat_pencadang" name="alamat_pejabat_pencadang"  readonly rows="5"><?php echo \U::safe_display_string(isset($v_user_detail['work_address']) ? $v_user_detail['work_address'] : "");?></textarea>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="no_telefon_pencadang">No. Tel. Pejabat/ Tel. Bimbit:</label>
					<input class="w-75 form-control" type="text" id="no_telefon_pencadang" name="no_telefon_pencadang"  readonly value="<?php echo \U::safe_display_string(isset($v_user_detail['phone_office']) ? $v_user_detail['phone_office'] : "");?> &nbsp; <?php echo  \U::safe_display_string(isset($v_user_detail['mobile_no']) ? $v_user_detail['mobile_no'] : "");?>">
				</div>
			</div>
		</div>
	</div>
				<!-- END BAHAGIAN G -->	
				<!-- BAHAGIAN J -->	

						<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN K: ASAS PENCALONAN<br>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</b></p>
							<div class="col-12 row mt-4">
								<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA JABATAN / PERKHIDMATAN</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
								</div>
		
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA MASYARAKAT</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGERI</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negeri as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
				</div></div>
							<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGARA</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negara as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							
									<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">PENGHARGAAN DIANUGERAH</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							</div>		
					<?php
						}else if($v_user_detail['form_id'] == '4'){
					?>	
				<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN A: MAKLUMAT PERIBADI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="nama_penuh">Nama Penuh:</label>
									<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Nyatakan gelaran / jawatan yang telah diterima / disandang :<br><small><b>(Contoh: Tan Sri / Datuk / Temenggong / Penghulu dsbg.)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_title_designation']) ? $v_user_detail['nom_title_designation'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="icno">No. Kad Pengenalan:</label>
									<div class="col-12 d-flex py-2">
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_lama">Lama:</label>
											<input class="col-9 form-control" type="text" id="ic_lama" name="ic_lama" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_old_ic']) ? $v_user_detail['nom_old_ic'] : "");?>" readonly>
										</div>
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_baru">Baru:</label>
											<input class="col-9 form-control" type="text" id="ic_baru" name="ic_baru" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_new_ic']) ? $v_user_detail['nom_new_ic'] : "");?>" readonly>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="jantina">Jantina:</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-6 row mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="lelaki" value="lelaki" <?php echo $v_user_detail['nom_gender']=='l'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="lelaki">Lelaki</label>
										</div>
										<div class="form-check col-6 row mx-0 px-0 mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="perempuan" value="perempuan" <?php echo $v_user_detail['nom_gender']=='p'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="perempuan">Perempuan</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lahir">Tarikh Lahir:</label>
									<input class="w-75 form-control" type="date" id="tarikh_lahir" name="tarikh_lahir" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_dob']) ? $v_user_detail['nom_dob'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="umur">Umur:</label>
									<input class="w-75 form-control" type="text" id="umur" name="umur" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_age']) ? $v_user_detail['nom_age'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="keturunan">Keturunan:</label>
									<input class="w-75 form-control" type="text" id="keturunan" name="keturunan" value="<?php echo \U::safe_display_string(isset($v_user_detail['race_desc']) ? $v_user_detail['race_desc'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="taraf">Taraf Perkahwinan</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="bujang" value="bujang" <?php echo $v_user_detail['nom_marital_status']=='b'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="bujang">Bujang:</label>
										</div>
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="berkahwin" value="berkahwin" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']=='k'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="berkahwin">Berkahwin:</label>
										</div>
										<div class="col-4 row mx-0 px-0">
											<div class="form-check w-50">
												<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="taraf_lain" value="taraf_lain" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'?"CHECKED":"";?> DISABLED>
												<label class="form-check-label" for="taraf_lain" onclick="check_taraf()">Lain-lain:<br><small>(Nyatakan)</small></label>
											</div>

											<?php if($v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'){ ?>
											
												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_marital_status']) ? $v_user_detail['nom_marital_status'] : "");?>" readonly>

											<?php }else{ ?>

												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="" readonly>

											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Alamat Email:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_email']) ? $v_user_detail['nom_email'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Rumah:<br><small><b>(Yang Terkini)</b></small></label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_1']) ? $v_user_detail['nom_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_2']) ? $v_user_detail['nom_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_3']) ? $v_user_detail['nom_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_4']) ? $v_user_detail['nom_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Poskod:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_postcode']) ? $v_user_detail['nom_postcode'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Bandar:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['city_name']) ? $v_user_detail['city_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Bahagian:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['division_name']) ? $v_user_detail['division_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="negeri">Negeri:</label>
									<input class="w-75 form-control" type="text" id="negeri" name="negeri" value="<?php echo \U::safe_display_string(isset($v_user_detail['state_name']) ? $v_user_detail['state_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_rumah">Nombor Telefon Rumah:</label>
									<input class="w-75 form-control" type="text" id="telefon_rumah" name="telefon_rumah" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_contact']) ? $v_user_detail['nom_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_bimbit">Nombor Telefon Bimbit:</label>
									<input class="w-75 form-control" type="text" id="telefon_bimbit" name="telefon_bimbit" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_mobile']) ? $v_user_detail['nom_mobile'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>
				<!-- END BAHAGIAN A -->
				<!-- BAHAGIAN B -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN B: MAKLUMAT PERKHIDMATAN</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">Tarikh Lantikan Pertama ke Perkhidmatan Awam:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_pertama" name="tarikh_lantikan_pertama" value="<?php echo \U::safe_display_string(isset($v_user_detail['first_app_date']) ? $v_user_detail['first_app_date'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_sekarang">Tarikh Lantikan ke Perkhidmatan Sekarang:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_sekarang" name="tarikh_lantikan_sekarang" value="<?php echo \U::safe_display_string(isset($v_user_detail['app_date_service']) ? $v_user_detail['app_date_service'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Gelaran Jawatan :<br><small><b>(Contoh: Temenggong / Pemanca / Penghulu dan sebagainya)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran"  value="<?php echo \U::safe_display_string(isset($v_user_detail['job_title']) ? $v_user_detail['job_title'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Taraf Pelantikan:<br><small><b>(Tetap / Sementara / Kontrak / Pinjaman / Tambah Sentara)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['app_level']) ? $v_user_detail['app_level'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Kawasan dalam Bidang Kuasa :<br><small><b>(Contoh: Bahagian Kuching / Kampung Astana / Kawasan Tabuan)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['jurisdiction_area']) ? $v_user_detail['jurisdiction_area'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Dearah Kecil<br></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['small_district']) ? $v_user_detail['small_district'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Daerah</label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['district_id']) ? $v_user_detail['district_id'] : "");?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Bahagian:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['division_id']) ? $v_user_detail['division_id'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat dengan Kerajaan Negeri:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['gov_service_year']) ? $v_user_detail['gov_service_year'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Tempoh berkhidmat sebagai ketua Masyarakat / Ketua Kaum:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['sarawak_service_year']) ? $v_user_detail['sarawak_service_year'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Pejabat sekarang:</label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['office_address_1']) ? $v_user_detail['office_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_2']) ? $v_user_detail['office_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_3']) ? $v_user_detail['office_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_4']) ? $v_user_detail['office_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Nombor Telefon Pejabat:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['office_contact']) ? $v_user_detail['office_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Tindakan Disiplin / Undang-Undang / Status Kebankrapan:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['displinary_action']) ? $v_user_detail['displinary_action'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>					
				<!-- END BAHAGIAN B -->				
				<!-- BAHAGIAN C -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN C: MAKLUMAT PRESTASI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">1. Markah Prestasi:</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col">TAHUN</th>
									      <th scope="col">MARKAH</th>
									    </tr>
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_markah_prestasi as $v_markah) {
									  	?>
									    <tr>
									      <td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['perf_year']) ? $v_markah['perf_year'] : "");?>" readonly></td>
									      <td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['perf_mark']) ? $v_markah['perf_mark'] : "");?>" readonly></td>
									    </tr>
									    <?php
									    }
									    ?>
									  </tbody>
									</table>					
								</div>				
								<div class="form-group row">
									<label class="w-25 col-12" for="tarikh_lantikan_sekarang">2. Sila pastikan markah prestasi terkini dinyatakan. Jika Panel Penyelarasan Gaji belum bermesyuarat pada tahun berkenaan, keputusan panel pada tiga (3) tahun sebelumnya hendaklah dinyatakan</label>
								</div>
								<div class="form-group row">
									<label class="w-25 col-12" for="gelaran">3. Pernah menerima Anugerah Perkhidmatan Cemerlang (APC). Sila nyatakan di bawah:-</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col" colspan="5">ANUGERAH PERKHIDMATAN CEMERLANG</th>
									    </tr>
									    <tr>
									    	<th>TAHUN</th>
									    </tr>					    
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_apc as $v_markah) {
									  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['nom_year']) ? $v_markah['nom_year'] : "");?>" readonly></td>
									    </tr>
									    <?php
									    }
									    ?>
									  </tbody>
									</table>
								</div>				
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-12" for="gelaran">4. Markah Prestasi <b>melebihi 85%</b>. Sila nyatakan di bawah:-</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col" colspan="10">ANUGERAH PERKHIDMATAN CEMERLANG</th>
									    </tr>
									    <tr>
									    	<th>TAHUN</th>
									    	<th>MARKAH</th>
									    </tr>					    
									  </thead>
									  <tbody>
									  	<?php
									  	foreach ($v_overmark as $v_markah) {
									  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['over_year']) ? $v_markah['over_year'] : "");?>" readonly></td>
									    	<td><input class="form-control" type="text" id="gelaran" style="text-align:center" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_markah['over_mark']) ? $v_markah['over_mark'] : "");?>" readonly></td>
									    </tr>
									    <?php
									  	}
									  	?>
									  </tbody>
									</table>
								</div>
							</div>
						</div>
					</div>				
				<!-- END BAHAGIAN C -->				
				<!-- BAHAGIAN D & E -->
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN D: MAKLUMAT KURNIAAN YANG TELAH DIANUGERAHKAN<br></b>(Kurniaan Darjah Kebesaran, Bintang dan Pingat <b>Negeri Sarawak / Persekutuan / Negara atau Negeri Lain </b>)</p>				
							<div class="col-12 row mt-4">
								<div class="col-12">
									<table class="table table-striped">
									  <thead>
									    <tr>
									      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
									      <th scope="col">Negara / Negeri</th>
									      <th scope="col">Tahun Kurniaan</th>
									    </tr>
									  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_history_success as $v_kurniaanberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['award_title']) ? $v_kurniaanberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['negara_negeri']) ? $v_kurniaanberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['nom_year']) ? $v_kurniaanberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
									</table>					
								</div>
							</div>				
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN E: MAKLUMAT PENCALONAN TERDAHULU<br></b>(Nyatakan Darjah Kebesaran / Bintang / Pingat yang pernah dicalonkan tetapi <b>tidak berjaya </b>)</p>
								<div class="col-12 row mt-4">
									<div class="col-12">
										<table class="table table-striped">
										  <thead>
										    <tr>
										      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
										      <th scope="col">Negara / Negeri</th>
										      <th scope="col">Tahun Kurniaan</th>
										    </tr>
										  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_history_x_success as $v_kurniaanxberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['award_title']) ? $v_kurniaanxberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['negara_negeri']) ? $v_kurniaanxberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['nom_year']) ? $v_kurniaanxberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
										</table>						
									</div>
								</div>
							</div>
						</div>
					</div>										
				<!-- END BAHAGIAN D & E -->				
				<!-- BAHAGIAN F -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN F: MAKLUMAT KEGIATAN LUAR SEMASA<br></b>Senaraikan penglibatan Calon dalam Pertubuhan / Persatuan (jika ada)</p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
							<table class="table table-striped">
							  <thead>
							    <tr>
							      <th scope="col">PERTUBUHAN / PERSATUAN</th>
							      <th scope="col">JAWATAN</th>
							      <th scope="col">TEMPOH</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php
							  	foreach ($v_activity as $v_kegiatan) {
							  	?>
							    <tr>
							    	<td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_organization']) ? $v_kegiatan['act_organization'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_position']) ? $v_kegiatan['act_position'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kegiatan['act_year']) ?$v_kegiatan['act_year'] : "");?>" readonly></td>
							    </tr>
							     <?php
								}
							  	?>
							  </tbody>
							</table>						
						</div>
					</div>

										<!-- BAHAGIAN G -->	
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN G: MAKLUMAT PENCADANG<br></b><b>Nota Penting: Pencadang hendaklah merupakan pegawai yang lebih kanan dari Calon</b></p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
				<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_pencadang">Nama:</label>
					<input class="w-75 form-control" type="text" id="nama_pencadang" name="nama_pencadang" value="<?php echo \U::safe_display_string(isset($v_user_detail['usr_full_name']) ? $v_user_detail['usr_full_name'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
					<input class="w-75 form-control" type="text" id="jawatan_pencadang" name="jawatan_pencadang" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_pejabat_pencadang">Alamat Pejabat:</label>
    				<textarea class="w-75 form-control" id="alamat_pejabat_pencadang" name="alamat_pejabat_pencadang"  readonly rows="5"><?php echo \U::safe_display_string(isset($v_user_detail['work_address']) ? $v_user_detail['work_address'] : "");?></textarea>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="no_telefon_pencadang">No. Tel. Pejabat/ Tel. Bimbit:</label>
					<input class="w-75 form-control" type="text" id="no_telefon_pencadang" name="no_telefon_pencadang"  readonly value="<?php echo \U::safe_display_string(isset($v_user_detail['phone_office']) ? $v_user_detail['phone_office'] : "");?> &nbsp; <?php echo  \U::safe_display_string(isset($v_user_detail['mobile_no']) ? $v_user_detail['mobile_no'] : "");?>">
				</div>
			</div>
		</div>
	</div>
				<!-- END BAHAGIAN G -->	
				<!-- BAHAGIAN J -->	

						<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN J: ASAS PENCALONAN<br>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</b></p>
							<div class="col-12 row mt-4">
								<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA JABATAN / PERKHIDMATAN</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
								</div>
		
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA MASYARAKAT</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGERI</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negeri as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
				</div></div>
							<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGARA</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negara as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							
									<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">PENGHARGAAN DIANUGERAH</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							</div>
				
					<?php
						}else if($v_user_detail['form_id'] == '5'){
					?>
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN A: MAKLUMAT PERIBADI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="nama_penuh">Nama Penuh:</label>
									<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Nyatakan gelaran / jawatan yang telah diterima / disandang :<br><small><b>(Contoh: Tan Sri / Datuk / Temenggong / Penghulu dsbg.)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_title_designation']) ? $v_user_detail['nom_title_designation'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="icno">No. Kad Pengenalan:</label>
									<div class="col-12 d-flex py-2">
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_lama">Lama:</label>
											<input class="col-9 form-control" type="text" id="ic_lama" name="ic_lama" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_old_ic']) ? $v_user_detail['nom_old_ic'] : "");?>" readonly>
										</div>
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_baru">Baru:</label>
											<input class="col-9 form-control" type="text" id="ic_baru" name="ic_baru" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_new_ic']) ? $v_user_detail['nom_new_ic'] : "");?>" readonly>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="jantina">Jantina:</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-6 row mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="lelaki" value="lelaki" <?php echo $v_user_detail['nom_gender']=='l'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="lelaki">Lelaki</label>
										</div>
										<div class="form-check col-6 row mx-0 px-0 mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="perempuan" value="perempuan" <?php echo $v_user_detail['nom_gender']=='p'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="perempuan">Perempuan</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lahir">Tarikh Lahir:</label>
									<input class="w-75 form-control" type="date" id="tarikh_lahir" name="tarikh_lahir" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_dob']) ? $v_user_detail['nom_dob'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="umur">Umur:</label>
									<input class="w-75 form-control" type="text" id="umur" name="umur" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_age']) ? $v_user_detail['nom_age'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="keturunan">Keturunan:</label>
									<input class="w-75 form-control" type="text" id="keturunan" name="keturunan" value="<?php echo \U::safe_display_string(isset($v_user_detail['race_desc']) ? $v_user_detail['race_desc'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="taraf">Taraf Perkahwinan</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="bujang" value="bujang" <?php echo $v_user_detail['nom_marital_status']=='b'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="bujang">Bujang:</label>
										</div>
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="berkahwin" value="berkahwin" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']=='k'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="berkahwin">Berkahwin:</label>
										</div>
										<div class="col-4 row mx-0 px-0">
											<div class="form-check w-50">
												<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="taraf_lain" value="taraf_lain" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'?"CHECKED":"";?> DISABLED>
												<label class="form-check-label" for="taraf_lain" onclick="check_taraf()">Lain-lain:<br><small>(Nyatakan)</small></label>
											</div>

											<?php if($v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'){ ?>
											
												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_marital_status']) ? $v_user_detail['nom_marital_status'] : "");?>" readonly>

											<?php }else{ ?>

												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="" readonly>

											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Alamat Email:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_email']) ? $v_user_detail['nom_email'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Rumah:<br><small><b>(Yang Terkini)</b></small></label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_1']) ? $v_user_detail['nom_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_2']) ? $v_user_detail['nom_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_3']) ? $v_user_detail['nom_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_4']) ? $v_user_detail['nom_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Poskod:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_postcode']) ? $v_user_detail['nom_postcode'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Bandar:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['city_name']) ? $v_user_detail['city_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Bahagian:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['division_name']) ? $v_user_detail['division_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="negeri">Negeri:</label>
									<input class="w-75 form-control" type="text" id="negeri" name="negeri" value="<?php echo \U::safe_display_string(isset($v_user_detail['state_name']) ? $v_user_detail['state_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_rumah">Nombor Telefon Rumah:</label>
									<input class="w-75 form-control" type="text" id="telefon_rumah" name="telefon_rumah" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_contact']) ? $v_user_detail['nom_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_bimbit">Nombor Telefon Bimbit:</label>
									<input class="w-75 form-control" type="text" id="telefon_bimbit" name="telefon_bimbit" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_mobile']) ? $v_user_detail['nom_mobile'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>
				<!-- END BAHAGIAN A -->
				<!-- BAHAGIAN B -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN B: MAKLUMAT PERKHIDMATAN</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">Nama Agensi / Persatuan / Firma sekarang:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_pertama" name="tarikh_lantikan_pertama" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_organization']) ? $v_user_detail['nom_organization'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_sekarang">Tarikh mula berkhidmat di Agensi / Persatuan / Firma :</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_sekarang" name="tarikh_lantikan_sekarang" value="<?php echo \U::safe_display_string(isset($v_user_detail['first_app_date']) ? $v_user_detail['first_app_date'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Gelaran Jawatan :<br><small><b>(Contoh: Pengerusi, Pengurus Besar, Pengarah Operasi dsbnya)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran"  value="<?php echo \U::safe_display_string(isset($v_user_detail['job_title']) ? $v_user_detail['job_title'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Tempoh berkhidmat dengan Persatuan / Firma :</label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['gov_service_year']) ? $v_user_detail['gov_service_year'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Pekerjaan Sekarang :<br><small><b>(Contoh: Peniaga, Peguam dsbnya)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['job_now']) ? $v_user_detail['job_now'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Tempoh berkhidmat di Sarawak :</label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['sarawak_service_year']) ? $v_user_detail['sarawak_service_year'] : "");?>" readonly>
								</div>				
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Tempoh menetap di Sarawak :<br><small><b>(Isikan jika berkaitan)</b></small></label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['residency_year']) ? $v_user_detail['residency_year'] : "");?>" readonly>
								</div>										
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Pejabat sekarang:</label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['office_address_1']) ? $v_user_detail['office_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_2']) ? $v_user_detail['office_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_3']) ? $v_user_detail['office_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_4']) ? $v_user_detail['office_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Nombor Telefon Pejabat:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['office_contact']) ? $v_user_detail['office_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Tindakan Disiplin / Undang-Undang / Status Kebankrapan:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['displinary_action']) ? $v_user_detail['displinary_action'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>					
				<!-- END BAHAGIAN B -->				
				<!-- BAHAGIAN C -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN C: JAWATAN-JAWATAN YANG PERNAH DISANDANG DI DALAM PERSATUAN / KEBAJIKAN / KEGIATAN SUKARELA / SUKAN DAN TAHUN-TAHUN MENYANDANGNYA</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">(a) Jika Ahli Persatuan Kebajikan / Sosial / Agama / Profesional</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
			      							<th scope="col">NAMA PERSATUAN KEBAJIKAN / SOSIAL / AGAMA / PROFESSIONAL</th>
			     							<th scope="col">JAWATAN</th>
			      							<th scope="col">TAHUN</th>
									    </tr>
									  </thead>
									  <tbody>
									  		<?php
							  	foreach ($v_association as $v_persatuan) {
							  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_persatuan['association_name']) ? $v_persatuan['association_name'] : "");?>" readonly></td>
									    	<td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_persatuan['association_position']) ? $v_persatuan['association_position'] : "");?>" readonly></td>
									    	<td><input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_persatuan['association_year']) ? $v_persatuan['association_year'] : "");?>" readonly></td>
									    </tr>
									  </tbody>
									   <?php
								}
							  	?>
									</table>					
								</div>				
								<div class="form-group row">
									<label class="w-25 col-12" for="gelaran">(b) Sukarelawan (Kegiatan Sukarela yang disertai di Peringkat Negeri, Malaysia, Antarabangsa dan Lain-Lain)</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
										      <th scope="col">KEGIATAN</th>
										      <th scope="col">PERINGKAT</th>
										      <th scope="col">TAHUN</th>
										    </tr>					    
									  </thead>
									  <tbody>
									  		  		<?php
							  	foreach ($v_volunteer as $v_sukarelawan) {
							  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_sukarelawan['activity']) ? $v_sukarelawan['activity'] : "");?>" readonly></td>
									    	<td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_sukarelawan['peringkat']) ? $v_sukarelawan['peringkat'] : "");?>" readonly></td>
									    	<td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_sukarelawan['volunteer_year']) ? $v_sukarelawan['volunteer_year'] : "");?>" readonly></td>
									    </tr>
									  </tbody>
									  		   <?php
								}
							  	?>
									</table>
								</div>				
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-12" for="gelaran">(C) Peringkat Sukan Yang Disertai (Contoh: Peringkat Negeri, Malaysia, Antarabangsa dan Lain-Lain)</label>
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col">JENIS SUKAN</th>
									      <th scope="col">PERINGKAT</th>
									      <th scope="col">TAHUN</th>
									    </tr>					    
									  </thead>
									  <tbody>
									  	<?php
							  	foreach ($v_sport as $v_sukan) {
							  	?>
									    <tr>
									    	<td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_sukan['sport_type']) ? $v_sukan['sport_type'] : "");?>" readonly></td>
									    	<td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_sukan['peringkat']) ? $v_sukan['peringkat'] : "");?>" readonly></td>
									    	<td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_sukan['sport_year']) ? $v_sukan['sport_year'] : "");?>" readonly></td>
									    </tr>
									  </tbody>
									  		  		   <?php
								}
							  	?>
									</table>
								</div>
							</div>
						</div>
					</div>				
				<!-- END BAHAGIAN C -->				
				<!-- BAHAGIAN D & E -->
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN D: MAKLUMAT KURNIAAN YANG TELAH DIANUGERAHKAN<br></b>(Kurniaan Darjah Kebesaran, Bintang dan Pingat <b>Negeri Sarawak / Persekutuan / Negara atau Negeri Lain </b>)</p>				
							<div class="col-12 row mt-4">
								<div class="col-12">
									<table class="table table-striped">
									  <thead>
									    <tr>
									      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
									      <th scope="col">Negara / Negeri</th>
									      <th scope="col">Tahun Kurniaan</th>
									    </tr>
									  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_history_success as $v_kurniaanberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['award_title']) ? $v_kurniaanberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['negara_negeri']) ? $v_kurniaanberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['nom_year']) ? $v_kurniaanberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
									</table>					
								</div>
							</div>				
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN E: MAKLUMAT PENCALONAN TERDAHULU<br></b>(Nyatakan Darjah Kebesaran / Bintang / Pingat yang pernah dicalonkan tetapi <b>tidak berjaya </b>)</p>
								<div class="col-12 row mt-4">
									<div class="col-12">
										<table class="table table-striped">
										  <thead>
										    <tr>
										      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
										      <th scope="col">Negara / Negeri</th>
										      <th scope="col">Tahun Kurniaan</th>
										    </tr>
										  </thead>
										  <tbody>
									  		<?php
									  	foreach ($v_history_x_success as $v_kurniaanxberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['award_title']) ? $v_kurniaanxberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['negara_negeri']) ? $v_kurniaanxberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['nom_year']) ? $v_kurniaanxberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
										</table>						
									</div>
								</div>
							</div>
						</div>
					</div>										
				<!-- END BAHAGIAN D & E -->				
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">						
						</div>
					</div>

										<!-- BAHAGIAN G -->	
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN G: MAKLUMAT PENCADANG<br></b><b>Nota Penting: Pencadang hendaklah merupakan pegawai yang lebih kanan dari Calon</b></p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
				<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_pencadang">Nama:</label>
					<input class="w-75 form-control" type="text" id="nama_pencadang" name="nama_pencadang" value="<?php echo \U::safe_display_string(isset($v_user_detail['usr_full_name']) ? $v_user_detail['usr_full_name'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
					<input class="w-75 form-control" type="text" id="jawatan_pencadang" name="jawatan_pencadang" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_pejabat_pencadang">Alamat Pejabat:</label>
    				<textarea class="w-75 form-control" id="alamat_pejabat_pencadang" name="alamat_pejabat_pencadang"  readonly rows="5"><?php echo \U::safe_display_string(isset($v_user_detail['work_address']) ? $v_user_detail['work_address'] : "");?></textarea>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="no_telefon_pencadang">No. Tel. Pejabat/ Tel. Bimbit:</label>
					<input class="w-75 form-control" type="text" id="no_telefon_pencadang" name="no_telefon_pencadang"  readonly value="<?php echo \U::safe_display_string(isset($v_user_detail['phone_office']) ? $v_user_detail['phone_office'] : "");?> &nbsp; <?php echo  \U::safe_display_string(isset($v_user_detail['mobile_no']) ? $v_user_detail['mobile_no'] : "");?>">
				</div>
			</div>
		</div>
	</div>
				<!-- END BAHAGIAN G -->	
				<!-- BAHAGIAN J -->	

						<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN J: ASAS PENCALONAN<br>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</b></p>
							<div class="col-12 row mt-4">
								<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA JABATAN / PERKHIDMATAN</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
								</div>
		
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA MASYARAKAT</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGERI</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negeri as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
				</div></div>
							<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGARA</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negara as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							
									<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">PENGHARGAAN DIANUGERAH</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							</div>
						
					<?php
						}else if($v_user_detail['form_id'] == '6'){
					?>
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN A: MAKLUMAT PERIBADI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="nama_penuh">Nama Penuh:</label>
									<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Nyatakan gelaran / jawatan yang telah diterima / disandang :</b><br><small><b>(Contoh: Tan Sri / Datuk / Temenggong / Penghulu dsbg.)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_title_designation']) ? $v_user_detail['nom_title_designation'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="icno">No. Paspot / Warna:</label>
									<div class="col-12 d-flex py-2">
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_lama">No. Paspot:</label>
											<input class="col-9 form-control" type="text" id="ic_lama" name="ic_lama" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_passport_no']) ? $v_user_detail['nom_passport_no'] : "");?>" readonly>
										</div>
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_baru">Warna:</label>
											<input class="col-9 form-control" type="text" id="ic_baru" name="ic_baru" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_passport_color']) ? $v_user_detail['nom_passport_color'] : "");?>" readonly>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="jantina">Jantina:</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-6 row mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="lelaki" value="lelaki" <?php echo $v_user_detail['nom_gender']=='l'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="lelaki">Lelaki</label>
										</div>
										<div class="form-check col-6 row mx-0 px-0 mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="perempuan" value="perempuan" <?php echo $v_user_detail['nom_gender']=='p'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="perempuan">Perempuan</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lahir">Tempat Lahir:</label>
									<input class="w-75 form-control" type="text" id="tempat_lahir" name="tempat_lahir" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_pob']) ? $v_user_detail['nom_pob'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lahir">Tarikh Lahir:</label>
									<input class="w-75 form-control" type="date" id="tarikh_lahir" name="tarikh_lahir" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_dob']) ? $v_user_detail['nom_dob'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="umur">Umur:</label>
									<input class="w-75 form-control" type="text" id="umur" name="umur" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_age']) ? $v_user_detail['nom_age'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="keturunan">Keturunan:</label>
									<input class="w-75 form-control" type="text" id="keturunan" name="keturunan" value="<?php echo \U::safe_display_string(isset($v_user_detail['race_desc']) ? $v_user_detail['race_desc'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="keturunan">Kewarganegaraan:</label>
									<input class="w-75 form-control" type="text" id="keturunan" name="keturunan" value="<?php echo \U::safe_display_string(isset($v_user_detail['nationality']) ? $v_user_detail['nationality'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="taraf">Taraf Perkahwinan</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="bujang" value="bujang" <?php echo $v_user_detail['nom_marital_status']=='b'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="bujang">Bujang:</label>
										</div>
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="berkahwin" value="berkahwin" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']=='k'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="berkahwin">Berkahwin:</label>
										</div>
										<div class="col-4 row mx-0 px-0">
											<div class="form-check w-50">
												<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="taraf_lain" value="taraf_lain" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'?"CHECKED":"";?> DISABLED>
												<label class="form-check-label" for="taraf_lain" onclick="check_taraf()">Lain-lain:<br><small>(Nyatakan)</small></label>
											</div>

											<?php if($v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'){ ?>
											
												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_marital_status']) ? $v_user_detail['nom_marital_status'] : "");?>" readonly>

											<?php }else{ ?>

												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="" readonly>

											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Alamat Email:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_email']) ? $v_user_detail['nom_email'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Rumah:<br><small><b>(Di Malaysia, Jika Ada)</b></small></label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_1']) ? $v_user_detail['nom_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_2']) ? $v_user_detail['nom_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_3']) ? $v_user_detail['nom_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_4']) ? $v_user_detail['nom_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_rumah">Nombor Telefon Rumah<small><b>(Di Malaysia, Jika Ada)</b></small>:</label>
									<input class="w-75 form-control" type="text" id="telefon_rumah" name="telefon_rumah" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_contact']) ? $v_user_detail['nom_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Rumah:<br><small><b>(Di Negara Asal)</b></small></label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_origin_1']) ? $v_user_detail['nom_address_origin_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_origin_2']) ? $v_user_detail['nom_address_origin_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_origin_3']) ? $v_user_detail['nom_address_origin_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_origin_4']) ? $v_user_detail['nom_address_origin_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Pejabat:<br><small><b>(Di Malaysia / Negara Asal)</b></small></label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_office_1']) ? $v_user_detail['nom_address_office_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_office_2']) ? $v_user_detail['nom_address_office_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_office_3']) ? $v_user_detail['nom_address_office_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_office_4']) ? $v_user_detail['nom_address_office_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_bimbit">Nombor Telefon Pejabat <small><b>(Di Malaysia / Negara Asal)</b></small>:</label>
									<input class="w-75 form-control" type="text" id="telefon_bimbit" name="telefon_bimbit" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_contact_office']) ? $v_user_detail['nom_contact_office'] : "");?>" readonly>
								</div>	
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_bimbit">Nombor Telefon Bimbit:</label>
									<input class="w-75 form-control" type="text" id="telefon_bimbit" name="telefon_bimbit" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_mobile']) ? $v_user_detail['nom_mobile'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>
				<!-- END BAHAGIAN A -->
				<!-- BAHAGIAN B -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN B: MAKLUMAT PERKHIDMATAN</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">Nama Agensi / Firma Sekarang:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_pertama" name="tarikh_lantikan_pertama" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_organization']) ? $v_user_detail['nom_organization'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_sekarang">Tarikh mula berkhidmat di Agensi / Firma:</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_sekarang" name="tarikh_lantikan_sekarang" value="<?php echo \U::safe_display_string(isset($v_user_detail['first_app_date']) ? $v_user_detail['first_app_date'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Gelaran Jawatan :<br><small><b>(Contoh: Pengarah, Pengurus Besar, Pengarah Operasi dan sebagainya)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran"  value="<?php echo \U::safe_display_string(isset($v_user_detail['job_title']) ? $v_user_detail['job_title'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Tempoh berkhidmat dengan Agensi / Firma :</label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['sarawak_service_year']) ? $v_user_detail['sarawak_service_year'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Tempoh menetap di Sarawak :<br><small><b>(Isikan jika berkaitan)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['residency_year']) ? $v_user_detail['residency_year'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Tindakan Disiplin / Undang-Undang / Status Kebankrapan:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['displinary_action']) ? $v_user_detail['displinary_action'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>					
				<!-- END BAHAGIAN B -->							
				<!-- BAHAGIAN C & D -->
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN C: MAKLUMAT KURNIAAN YANG TELAH DIANUGERAHKAN<br></b>(Kurniaan Darjah Kebesaran, Bintang dan Pingat <b>Negeri Sarawak / Persekutuan / Negara atau Negeri Lain </b>)</p>				
							<div class="col-12 row mt-4">
								<div class="col-12">
									<table class="table table-striped">
									  <thead>
									    <tr>
									      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
									      <th scope="col">Negara / Negeri</th>
									      <th scope="col">Tahun Kurniaan</th>
									    </tr>
									  </thead>
										<tbody>
									  		<?php
									  	foreach ($v_history_success as $v_kurniaanberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['award_title']) ? $v_kurniaanberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['negara_negeri']) ? $v_kurniaanberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['nom_year']) ? $v_kurniaanberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
									</table>					
								</div>
							</div>				
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN D: MAKLUMAT PENCALONAN TERDAHULU<br></b>(Nyatakan Darjah Kebesaran / Bintang / Pingat yang pernah dicalonkan tetapi <b>tidak berjaya </b>)</p>
								<div class="col-12 row mt-4">
									<div class="col-12">
										<table class="table table-striped">
										  <thead>
										    <tr>
										      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
										      <th scope="col">Negara / Negeri</th>
										      <th scope="col">Tahun Kurniaan</th>
										    </tr>
										  </thead>
			  								<tbody>
									  		<?php
									  	foreach ($v_history_x_success as $v_kurniaanxberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['award_title']) ? $v_kurniaanxberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['negara_negeri']) ? $v_kurniaanxberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['nom_year']) ? $v_kurniaanxberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
										</table>						
									</div>
								</div>
							</div>
						</div>
					</div>										
				<!-- END BAHAGIAN C & D -->				
				<!-- BAHAGIAN F -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN F: JAWATAN-JAWATAN YANG PERNAH DISANDANG DI DALAM PERSATUAN / KEBAJIKAN / KEGIATAN SUKARELA / SUKAN DAN TAHUN-TAHUN MENYANDANGNYA <br></b>Senaraikan penglibatan Calon dalam Pertubuhan / Persatuan (jika ada)</p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
							<table class="table table-striped">
							  <thead>
							    <tr>
							      <th scope="col">PERSATUAN / KEBAJIKAN / KEGIATAN SUKARELA / SUKAN</th>
								      <th scope="col">JAWATAN</th>
								      <th scope="col">NEGARA / NEGARI</th>
								      <th scope="col">TAHUN</th>
							    </tr>
							  </thead>
							  <tbody>
							  		<?php
									  	foreach ($v_position as $v_jawatan) {
									  	?>
							    <tr>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jawatan['organization']) ? $v_jawatan['organization'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jawatan['position']) ? $v_jawatan['position'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jawatan['negara_negeri']) ? $v_jawatan['negara_negeri'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jawatan['year']) ? $v_jawatan['year'] : "");?>" readonly></td>
							    </tr>
							  </tbody>
							  <?php
									  	}
									  	?>
							</table>						
						</div>
					</div>	

										<!-- BAHAGIAN G -->	
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN G: MAKLUMAT PENCADANG<br></b><b>Nota Penting: Pencadang hendaklah merupakan pegawai yang lebih kanan dari Calon</b></p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
				<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_pencadang">Nama:</label>
					<input class="w-75 form-control" type="text" id="nama_pencadang" name="nama_pencadang" value="<?php echo \U::safe_display_string(isset($v_user_detail['usr_full_name']) ? $v_user_detail['usr_full_name'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
					<input class="w-75 form-control" type="text" id="jawatan_pencadang" name="jawatan_pencadang" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_pejabat_pencadang">Alamat Pejabat:</label>
    				<textarea class="w-75 form-control" id="alamat_pejabat_pencadang" name="alamat_pejabat_pencadang"  readonly rows="5"><?php echo \U::safe_display_string(isset($v_user_detail['work_address']) ? $v_user_detail['work_address'] : "");?></textarea>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="no_telefon_pencadang">No. Tel. Pejabat/ Tel. Bimbit:</label>
					<input class="w-75 form-control" type="text" id="no_telefon_pencadang" name="no_telefon_pencadang"  readonly value="<?php echo \U::safe_display_string(isset($v_user_detail['phone_office']) ? $v_user_detail['phone_office'] : "");?> &nbsp; <?php echo  \U::safe_display_string(isset($v_user_detail['mobile_no']) ? $v_user_detail['mobile_no'] : "");?>">
				</div>
			</div>
		</div>
	</div>
				<!-- END BAHAGIAN G -->	
				<!-- BAHAGIAN J -->	

						<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN J: ASAS PENCALONAN<br>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</b></p>
							<div class="col-12 row mt-4">
								<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA JABATAN / PERKHIDMATAN</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
								</div>
		
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA MASYARAKAT</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGERI</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negeri as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
				</div></div>
							<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGARA</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negara as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							
									<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">PENGHARGAAN DIANUGERAH</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							</div>
				
					<?php
						}else if($v_user_detail['form_id'] == '7'){
					?>	
										<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN A: MAKLUMAT PERIBADI</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="nama_penuh">Nama Penuh:</label>
									<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="gelaran">Nyatakan gelaran / jawatan yang telah diterima / disandang :<br><small><b>(Contoh: Tan Sri / Datuk / Temenggong / Penghulu dsbg.)</b></small></label>
									<input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_title_designation']) ? $v_user_detail['nom_title_designation'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="icno">No. Kad Pengenalan:</label>
									<div class="col-12 d-flex py-2">
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_lama">Lama:</label>
											<input class="col-9 form-control" type="text" id="ic_lama" name="ic_lama" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_old_ic']) ? $v_user_detail['nom_old_ic'] : "");?>" readonly>
										</div>
										<div class="col-6 row mx-0 px-0">
											<label class="col-3 col-form-label" for="ic_baru">Baru:</label>
											<input class="col-9 form-control" type="text" id="ic_baru" name="ic_baru" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_new_ic']) ? $v_user_detail['nom_new_ic'] : "");?>" readonly>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="jantina">Jantina:</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-6 row mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="lelaki" value="lelaki" <?php echo $v_user_detail['nom_gender']=='l'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="lelaki">Lelaki</label>
										</div>
										<div class="form-check col-6 row mx-0 px-0 mx-3">
											<input class="form-check-input" type="radio" name="jantina" id="perempuan" value="perempuan" <?php echo $v_user_detail['nom_gender']=='p'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="perempuan">Perempuan</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lahir">Tarikh Lahir:</label>
									<input class="w-75 form-control" type="date" id="tarikh_lahir" name="tarikh_lahir" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_dob']) ? $v_user_detail['nom_dob'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="umur">Umur:</label>
									<input class="w-75 form-control" type="text" id="umur" name="umur" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_age']) ? $v_user_detail['nom_age'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="keturunan">Keturunan:</label>
									<input class="w-75 form-control" type="text" id="keturunan" name="keturunan" value="<?php echo \U::safe_display_string(isset($v_user_detail['race_desc']) ? $v_user_detail['race_desc'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="taraf">Taraf Perkahwinan</label>
									<div class="col-12 d-flex py-2">
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="bujang" value="bujang" <?php echo $v_user_detail['nom_marital_status']=='b'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="bujang">Bujang:</label>
										</div>
										<div class="form-check col-4 row mx-0 px-0">
											<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="berkahwin" value="berkahwin" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']=='k'?"CHECKED":"";?> DISABLED>
											<label class="form-check-label" for="berkahwin">Berkahwin:</label>
										</div>
										<div class="col-4 row mx-0 px-0">
											<div class="form-check w-50">
												<input class="form-check-input" type="radio" name="taraf_perkahwinan" id="taraf_lain" value="taraf_lain" onchange="check_taraf()" <?php echo $v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'?"CHECKED":"";?> DISABLED>
												<label class="form-check-label" for="taraf_lain" onclick="check_taraf()">Lain-lain:<br><small>(Nyatakan)</small></label>
											</div>

											<?php if($v_user_detail['nom_marital_status']!='k' && $v_user_detail['nom_marital_status'] != 'b'){ ?>
											
												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_marital_status']) ? $v_user_detail['nom_marital_status'] : "");?>" readonly>

											<?php }else{ ?>

												<input class="w-50 form-control" type="text" id="taraf_lain_input" name="taraf_lain_input" disabled value="" readonly>

											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_email">Alamat Email:</label>
									<input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_email']) ? $v_user_detail['nom_email'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Rumah:<br><small><b>(Yang Terkini)</b></small></label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['nom_address_1']) ? $v_user_detail['nom_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_2']) ? $v_user_detail['nom_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_3']) ? $v_user_detail['nom_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['nom_address_4']) ? $v_user_detail['nom_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="poskod">Poskod:</label>
									<input class="w-75 form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_postcode']) ? $v_user_detail['nom_postcode'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Bandar:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['city_name']) ? $v_user_detail['city_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Bahagian:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['division_name']) ? $v_user_detail['division_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="negeri">Negeri:</label>
									<input class="w-75 form-control" type="text" id="negeri" name="negeri" value="<?php echo \U::safe_display_string(isset($v_user_detail['state_name']) ? $v_user_detail['state_name'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_rumah">Nombor Telefon Rumah:</label>
									<input class="w-75 form-control" type="text" id="telefon_rumah" name="telefon_rumah" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_contact']) ? $v_user_detail['nom_contact'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="telefon_bimbit">Nombor Telefon Bimbit:</label>
									<input class="w-75 form-control" type="text" id="telefon_bimbit" name="telefon_bimbit" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_mobile']) ? $v_user_detail['nom_mobile'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>
				<!-- END BAHAGIAN A -->
				<!-- BAHAGIAN B -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN B: MAKLUMAT PERKHIDMATAN</b></p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_pertama">Nama Parti Politik :<br><small><b>(Cth: PBB / SUPP / PDP / PRS)</b></small></label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_pertama" name="tarikh_lantikan_pertama" value="<?php echo \U::safe_display_string(isset($v_user_detail['first_app_date']) ? $v_user_detail['first_app_date'] : "");?>" readonly>
								</div>
									<div class="form-group row">
									<label class="w-25 col-form-label" for="alamat_rumah">Alamat Pejabat Parti:</label>
				    				<textarea class="w-75 form-control" id="alamat_rumah" rows="5" readonly><?php echo \U::safe_display_string(isset($v_user_detail['office_address_1']) ? $v_user_detail['office_address_1'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_2']) ? $v_user_detail['office_address_2'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_3']) ? $v_user_detail['office_address_3'] : "");?> <?php echo \U::safe_display_string(isset($v_user_detail['office_address_4']) ? $v_user_detail['office_address_4'] : "");?></textarea>
								</div>
								<div class="form-group row">
									<label class="col-form-label" for="tarikh_lantikan_sekarang">Jawatan dalam Parti sekarang & Kawasan / Cawangan / Ranting :<br><small><b>(Cth. Bendahari N.11 Batu Lintang, Kuching / Setiausaha N.2 Tasik Biru, Baru / AJK Bahagian N.56 Baleh, Kapit / AJK Ranting N.33 Kalaka dsbnya)</b></small></label>
									<input class="form-control" type="text" id="tarikh_lantikan_sekarang" name="tarikh_lantikan_sekarang" value="<?php echo \U::safe_display_string(isset($v_user_detail['job_title']) ? $v_user_detail['job_title'] : "");?>" readonly>
								</div>
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bandar">Nombor Telefon Pejabat Parti:</label>
									<input class="w-75 form-control" type="text" id="bandar" name="bandar" value="<?php echo \U::safe_display_string(isset($v_user_detail['office_contact']) ? $v_user_detail['office_contact'] : "");?>" readonly>
								</div>				
								<div class="form-group row">
									<label class="w-25 col-form-label" for="tarikh_lantikan_sekarang">Tempoh Berkhidmat dengan Parti :</label>
									<input class="w-75 form-control" type="text" id="tarikh_lantikan_sekarang" name="tarikh_lantikan_sekarang" value="<?php echo \U::safe_display_string(isset($v_user_detail['sarawak_service_year']) ? $v_user_detail['sarawak_service_year'] : "");?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<label class="col-form-label" for="poskod">Pekerjaan sekarang :<br><small><b>(Cth. Peniaga / Peguam / Petani dsbnya)</b></small></label>
									<input class="form-control" type="text" id="poskod" name="poskod" value="<?php echo \U::safe_display_string(isset($v_user_detail['job_now']) ? $v_user_detail['job_now'] : "");?>" readonly>
								</div>												
								<div class="form-group row">
									<label class="w-25 col-form-label" for="bahagian">Tindakan Disiplin / Undang-Undang / Status Kebankrapan:</label>
									<input class="w-75 form-control" type="text" id="bahagian" name="bahagian" value="<?php echo \U::safe_display_string(isset($v_user_detail['displinary_action']) ? $v_user_detail['displinary_action'] : "");?>" readonly>
								</div>				
							</div>
						</div>
					</div>					
				<!-- END BAHAGIAN B -->				
				<!-- BAHAGIAN C -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN C: JAWATAN-JAWATAN YANG PERNAH DISANDANG DI DALAM PARTI DAN TAHUN-TAHUN MENYANDANGNYA</p>
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<div class="col-12">
								<div class="form-group row">
									<table class="table table-striped" style="text-align: center">
									  <thead>
									    <tr>
									      <th scope="col">Jawatan</th>
									      <th scope="col">Tahun</th>
									    </tr>
									  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_politic as $v_jawatan) {
									  	?>
									    <tr>
									    <td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_jawatan['politic_position']) ? $v_jawatan['politic_position'] : "");?>" readonly></td>
									    <td><input class="form-control" type="text" id="gelaran" name="gelaran" value="<?php echo \U::safe_display_string(isset($v_jawatan['politic_year']) ? $v_jawatan['politic_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
									</table>					
								</div>				
							</div>
						</div>
					</div>				
				<!-- END BAHAGIAN C -->				
				<!-- BAHAGIAN D & E -->
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
							<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN D: MAKLUMAT KURNIAAN YANG TELAH DIANUGERAHKAN<br></b>(Kurniaan Darjah Kebesaran, Bintang dan Pingat <b>Negeri Sarawak / Persekutuan / Negara atau Negeri Lain </b>)</p>				
							<div class="col-12 row mt-4">
								<div class="col-12">
									<table class="table table-striped">
									  <thead>
									    <tr>
									      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
									      <th scope="col">Negara / Negeri</th>
									      <th scope="col">Tahun Kurniaan</th>
									    </tr>
									  </thead>
									  <tbody>
									  		<?php
									  	foreach ($v_history_success as $v_kurniaanberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['award_title']) ? $v_kurniaanberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['negara_negeri']) ? $v_kurniaanberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanberjaya['nom_year']) ? $v_kurniaanberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
									</table>					
								</div>
							</div>				
						</div>
						<div class="col-12 col-md-6">
							<div class="col-12">
								<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN E: MAKLUMAT PENCALONAN TERDAHULU<br></b>(Nyatakan Darjah Kebesaran / Bintang / Pingat yang pernah dicalonkan tetapi <b>tidak berjaya </b>)</p>
								<div class="col-12 row mt-4">
									<div class="col-12">
										<table class="table table-striped">
										  <thead>
										    <tr>
										      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
										      <th scope="col">Negara / Negeri</th>
										      <th scope="col">Tahun Kurniaan</th>
										    </tr>
										  </thead>
								  <tbody>
									  		<?php
									  	foreach ($v_history_x_success as $v_kurniaanxberjaya) {
									  	?>
									    <tr>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['award_title']) ? $v_kurniaanxberjaya['award_title'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['negara_negeri']) ? $v_kurniaanxberjaya['negara_negeri'] : "");?>" readonly></td>
									      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_kurniaanxberjaya['nom_year']) ? $v_kurniaanxberjaya['nom_year'] : "");?>" readonly></td>
									    </tr>
									     <?php
									  	}
									  	?>
									  </tbody>
										</table>						
									</div>
								</div>
							</div>
						</div>
					</div>										
				<!-- END BAHAGIAN D & E -->				
				<!-- BAHAGIAN F -->
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN F: JAWATAN-JAWATAN YANG PERNAH DISANDANG DI DALAM PERSATUAN / KEBAJIKAN / KEGIATAN SUKARELA / SUKAN DAN TAHUN-TAHUN MENYANDANGNYA<br></b>Senaraikan penglibatan Calon dalam Pertubuhan / Persatuan (jika ada)</p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
							<table class="table table-striped">
							  <thead>
							    <tr>
							      <th scope="col">PERSATUAN / KEBAJIKAN / KEGIATAN SUKARELA / SUKAN</th>
							      <th scope="col">JAWATAN</th>
							      <th scope="col">NEGARA / NEGERI</th>
							      <th scope="col">TAHUN</th>
							    </tr>
							  </thead>
							  <tbody>
							  		<?php
									  	foreach ($v_position as $v_jawatan) {
									  	?>
							    <tr>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jawatan['organization']) ? $v_jawatan['organization'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jawatan['position']) ? $v_jawatan['position'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jawatan['negara_negeri']) ? $v_jawatan['negara_negeri'] : "");?>" readonly></td>
							      <td><input class="w-75 form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jawatan['year']) ? $v_jawatan['year'] : "");?>" readonly></td>
							    </tr>
							 
							  <?php
									  	}
									  	?>
									  	 </tbody>
							</table>						
						</div>
					</div>	
										<!-- BAHAGIAN G -->	
					<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN G: MAKLUMAT PENCADANG<br></b><b>Nota Penting: Pencadang hendaklah merupakan pegawai yang lebih kanan dari Calon</b></p>
					<div class="col-12 row mt-4" style="padding-bottom: 50px">
						<div class="col-12 col-md-6">
				<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_pencadang">Nama:</label>
					<input class="w-75 form-control" type="text" id="nama_pencadang" name="nama_pencadang" value="<?php echo \U::safe_display_string(isset($v_user_detail['usr_full_name']) ? $v_user_detail['usr_full_name'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
					<input class="w-75 form-control" type="text" id="jawatan_pencadang" name="jawatan_pencadang" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="alamat_pejabat_pencadang">Alamat Pejabat:</label>
    				<textarea class="w-75 form-control" id="alamat_pejabat_pencadang" name="alamat_pejabat_pencadang"  readonly rows="5"><?php echo \U::safe_display_string(isset($v_user_detail['work_address']) ? $v_user_detail['work_address'] : "");?></textarea>
				</div>
				<div class="form-group row">
					<label class="w-25 col-form-label" for="no_telefon_pencadang">No. Tel. Pejabat/ Tel. Bimbit:</label>
					<input class="w-75 form-control" type="text" id="no_telefon_pencadang" name="no_telefon_pencadang"  readonly value="<?php echo \U::safe_display_string(isset($v_user_detail['phone_office']) ? $v_user_detail['phone_office'] : "");?> &nbsp; <?php echo  \U::safe_display_string(isset($v_user_detail['mobile_no']) ? $v_user_detail['mobile_no'] : "");?>">
				</div>
			</div>
		</div>
	</div>
				<!-- END BAHAGIAN G -->	
				<!-- BAHAGIAN J -->	

						<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN J: ASAS PENCALONAN<br>Nota Penting:<br>1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.</b></p>
							<div class="col-12 row mt-4">
								<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA JABATAN / PERKHIDMATAN</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_jabatan as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
								</div>
		
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA MASYARAKAT</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_masyarakat as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGERI</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negeri as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
				</div></div>
							<div class="col-12 col-md-6">
								<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">SUMBANGAN KEPADA NEGARA</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_sumbangan_negara as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							
									<div class="col-12">
									<div class="form-group row">
										<div class="col-12 border bg-grey">
											<table class="table table-striped">
								  			<thead>
								    			<tr>
								      				<th scope="col">PENGHARGAAN DIANUGERAH</th>
								    			</tr> 
								  			</thead>
								  			<tbody>
										<?php
									  	foreach ($v_penghargaan_dianugerah as $v_jabatan) {
									  	?>
									  	<tr>
									      <td><input class="form-control" type="email" id="alamat_email" name="alamat_email" value="<?php echo \U::safe_display_string(isset($v_jabatan['sumbangan_penghargaan']) ? $v_jabatan['sumbangan_penghargaan'] : "");?>" readonly></td>
									  </tr>
									   <?php
									  	}
									  	?>
								  			</tbody>
											</table>							    		
										</div>
									</div>
								</div>
							</div>
			
					<?php
						}
					?>
		</div>
	</div>
</div>