<form class="w-100" id="frm_nom" name="frm_nom" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
	<div class="col-11 row mt-4" style="border: 1px solid #fff; background-color: #fff; margin-left: 10px">
		<p class="mb-4" style="padding-left: 20px; padding-top: 10px"><b>BORANG PENILAIAN (PANS / PERSEKUTUAN / BBN / PBT BAGI PENGURNIAAN DARJAH KEBESARAN, BINTANG & PINGAT NEGERI SARAWAK) </b></p>
		<div class="col-6">
			<div class="form-group row" style="padding-left: 15px;">
				<label class="w-25 col-form-label" for="kategori">Kategori:</label>
				<input class="w-75 form-control" type="text" id="kategori" name="kategori" value="<?php echo \U::safe_display_string(isset($v_user_detail['awdc_category_id']) ? $v_user_detail['awdc_category_id'] : "");?>" readonly>
			</div>			
			<div class="form-group row" style="padding-left: 15px;">
				<label class="w-25 col-form-label" for="nama_pingat">Nama Pingat Dicadang:</label>
				<input class="w-75 form-control" type="text" id="nama_pingat" name="nama_pingat" value="<?php echo \U::safe_display_string(isset($v_user_detail['awd_type_id']) ? $v_user_detail['awd_type_id'] : "");?>" readonly>
			</div>
			<div class="form-group row" style="padding-left: 15px;">
				<label class="w-25 col-form-label" for="nama_penuh">Nama:</label>
				<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?>" readonly>
			</div>
			<div class="form-group row" style="padding-left: 15px;">
				<label class="w-25 col-form-label" for="jabatan">Jabatan/ Agensi:</label>
				<input class="w-75 form-control" type="text" id="jabatan" name="jabatan" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_stat']) ? $v_user_detail['nom_stat'] : "");?>" readonly>
			</div>
			<div class="form-group row" style="padding-left: 15px;">
				<label class="w-25 col-form-label" for="no_folio">No Folio:</label>
				<input class="w-75 form-control" type="text" id="no_folio" name="no_folio" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_folio_no']) ? $v_user_detail['nom_folio_no'] : "");?>" readonly>
				<input class="w-75 form-control" type="hidden" id="v_id" name="v_id" value="<?php echo \U::safe_display_string(isset($v_id) ? $v_id : "");?>" readonly>
				<input class="w-75 form-control" type="hidden" id="val_hid" name="val_hid" value="EDIT" readonly>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="col-12">
				<?php
				if (isset($v_att_doc) && $v_att_doc!=NULL) {
					?>
					<img class="col-6" src="<?php echo \E::get('obj_curr_module')->build_action_path('nomination','img',$v_att_doc['img_sftp_id']) ?>">
					<?php
				}
				?>
			</div>
		</div>
	</div>	

	<div class="col-11 row mt-4" style="border: 1px solid #fff; background-color: #fff; margin-left: 10px">
		<p class="mb-4" style="padding-left: 20px; padding-top: 10px"><b>BAHAGIAN A: SYARAT - SYARAT ASAS PENCALONAN (50%)</b></p>
		<div class="col-12" style="margin-left: 10px;">
			<div class="form-group row" style="padding-left: 15px;">
				<table class="table">
					<thead>
						<tr>
							<th colspan="2"></th>
							<th style="">PENILAI 1</th>
						</tr>						
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Mencapai syarat umur pencalonan (10%)</td>
							<td><input class="w-75 form-control" type="text" id="syarat1" name="syarat1" value="<?php echo \U::safe_display_string(isset($v_user_detail_penilai['syarat1']) ? $v_user_detail_penilai['syarat1'] : "");?>" readonly></td>
						</tr>					
						<tr>
							<td>2</td>
							<td>Tempoh dianugerahkan pingat melebihi 3 tahun (5%)</td>
							<td><input class="w-75 form-control" type="text" id="syarat2" name="syarat2" value="<?php echo \U::safe_display_string(isset($v_user_detail_penilai['syarat2']) ? $v_user_detail_penilai['syarat2'] : "");?>" readonly></td>
						</tr>					
						<tr>
							<td>3</td>
							<td>Markah LNPT melepasi markah 85% selama 3 tahun berturut-turut (15%)</td>
							<td><input class="w-75 form-control" type="text" id="syarat3" name="syarat3" value="<?php echo \U::safe_display_string(isset($v_user_detail_penilai['syarat3']) ? $v_user_detail_penilai['syarat3'] : "");?>" readonly></td>
						</tr>					
						<tr>
							<td>4</td>
							<td>Mendapat APC (10%)</td>
							<td><input class="w-75 form-control" type="text" id="syarat4" name="syarat4" value="<?php echo \U::safe_display_string(isset($v_user_detail_penilai['syarat4']) ? $v_user_detail_penilai['syarat4'] : "");?>" readonly></td>
						</tr>					
						<tr>
							<td>5</td>
							<td>Melepasi syarat tempoh perkhidmatan (10%)</td>
							<td><input class="w-75 form-control" type="text" id="syarat5" name="syarat5" value="<?php echo \U::safe_display_string(isset($v_user_detail_penilai['syarat5']) ? $v_user_detail_penilai['syarat5'] : "");?>" readonly></td>
						</tr>
					</tbody>
				</table>
			</div>			
		</div>
	</div>	
	<div class="col-11 row mt-4" style="border: 1px solid #fff; background-color: #fff; margin-left: 10px">
		<p class="mb-4" style="padding-left: 20px; padding-top: 10px"><b>BAHAGIAN B: SYARAT - SYARAT LAIN PENCALONAN (45%)</b></p>
		<div class="col-12" style="margin-left: 10px;">
			<div class="form-group row" style="padding-left: 15px;">
				<table class="table">
					<thead>
						<tr>
							<th colspan="2"></th>
							<th style="">PENILAI 1</th>
						</tr>						
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Sumbangan kepada perkhidmatan (20%)</td>
							<td><input class="w-75 form-control" type="text" id="syarat6" name="syarat6" value="<?php echo \U::safe_display_string(isset($v_user_detail_penilai['syarat6']) ? $v_user_detail_penilai['syarat6'] : "");?>" readonly></td>
						</tr>					
						<tr>
							<td>2</td>
							<td>Sumbangan kepada masyarakat / negeri / negata (25%)</td>
							<td><input class="w-75 form-control" type="text" id="syarat7" name="syarat7" value="<?php echo \U::safe_display_string(isset($v_user_detail_penilai['syarat7']) ? $v_user_detail_penilai['syarat7'] : "");?>" readonly></td>
						</tr>										
					</tbody>
				</table>
			</div>			
		</div>
	</div>	
	<div class="col-11 row mt-4" style="border: 1px solid #fff; background-color: #fff; margin-left: 10px; padding-bottom: 15px">
		<p class="mb-4" style="padding-left: 20px; padding-top: 10px"><b>BAHAGIAN C: WOW Faktor (5%)</b></p>
		<div class="col-12" style="margin-left: 10px;">
			<div class="form-group row" style="padding-left: 15px;">
				<table class="table">
					<thead>
						<tr>
							<th></th>
							<th style="">PENILAI 1</th>
						</tr>						
					</thead>
					<tbody>
						<tr>
							<td>Contoh: Pernah menerima anugerah khas / tokoh peringkat negeri dll. (5%)</td>
							<td><input class="w-75 form-control" type="text" id="syarat8" name="syarat8" value="<?php echo \U::safe_display_string(isset($v_user_detail_penilai['syarat8']) ? $v_user_detail_penilai['syarat8'] : "");?>" readonly></td>
						</tr>															
					</tbody>
				</table>			
			</div>	
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>KOMEN PENILAI PERTAMA</b></p>
			<div class="form-group row">
				<div class="col-12 d-flex py-2" style="margin-left: 25px">
					<div class="form-check col-1 row mx-0 px-0">
						<input class="form-check-input" type="radio" name="komen" id="disokong" value="disokong" <?php echo $v_user_detail_penilai['komen_penilai']=='disokong'?"CHECKED":"";?> DISABLED>
						<label class="form-check-label" for="disokong">Disokong</label>
					</div>
					<div class="form-check col-1 row mx-0 px-0">
						<input class="form-check-input" type="radio" name="komen" id="tidak_disokong" value="tidak_disokong" <?php echo $v_user_detail_penilai['komen_penilai']=='tidak_disokong'?"CHECKED":"";?> DISABLED>
						<label class="form-check-label" for="tidak_disokong">Tidak Disokong</label>
					</div>					
					<div class="form-check col-1 row mx-0 px-0">
						<input class="form-check-input" type="radio" name="komen" id="kiv" value="kiv" <?php echo $v_user_detail_penilai['komen_penilai']=='kiv'?"CHECKED":"";?> DISABLED>
						<label class="form-check-label" for="kiv">KIV</label>
					</div>
				</div>
			</div>	
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>REMARKS</b></p>		
			<div class="form-group row" style="margin-left: 15px;">
				<textarea class="w-50 form-control" id="penilai_remarks" name="penilai_remarks" rows="5" style="" readonly><?php echo \U::safe_display_string(isset($v_user_detail_penilai['penilai_remarks']) ? $v_user_detail_penilai['penilai_remarks'] : "");?></textarea>
			</div>						
		</div>	
	</div>	
	<div class="col-12 col-md-11" style="padding-top: 10px; padding-bottom: 30px">		
	</div>		
</form>