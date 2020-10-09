<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN C: JAWATAN-JAWATAN YANG PERNAH DISANDANG DI DALAM PERSATUAN / KEBAJIKAN / KEGIATAN SUKARELA / SUKAN DAN TAHUN-TAHUN MENYANDANGNYA<br></b></p>
<form class="w-100" id="frm_bhgn_c" name="frm_bhgn_c" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
	<div class="col-12 row mt-4 mb-4">
		<div class="col-12 col-md-6"> 
			<div class="col-12">
				<div class="form-group row">
					<div class="col-12 border bg-grey">
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px">(a) Jika Ahli Persatuan Kebajikan / Sosial / Agama / Profesional</p>
					</div>
					<div class="col-12 d-flex border py-2">
					<div class="col-12 row mx-0 px-0">
			<table class="table table-striped" style="text-align: center" id="PersatuanTable">
			  <thead>
			    <tr>
			      <th scope="col">NAMA PERSATUAN KEBAJIKAN / SOSIAL / AGAMA / PROFESSIONAL</th>
			      <th scope="col">JAWATAN</th>
			      <th scope="col">TAHUN</th>
			    </tr>
			  </thead>
			  <tbody>
				<?php $v_count_1 = 1; ?>
				<tr id="row1_<?php echo $v_count_1; ?>">
				    <td><input class="form-control" type="text" id="nama_persatuan_<?php echo $v_count_1; ?>" name="nama_persatuan_<?php echo $v_count_1; ?>"></td>
				    <td><input class="form-control" type="text" id="jawatan_persatuan_<?php echo $v_count_1; ?>" name="jawatan_persatuan_<?php echo $v_count_1; ?>"></td>
				    <td><input class="form-control" type="text" id="tahun_jawatan_persatuan_<?php echo $v_count_1; ?>" name="tahun_jawatan_persatuan_<?php echo $v_count_1; ?>"></td>

				</tr>
					<input type="hidden" id="counter1" name="counter1" value="<?php echo $v_count_1; ?>">
				    <input type="hidden" id="type" name="type4" value="association">
			  </tbody>
			</table>
			<table style="width:100%; float: right; border-top: solid 1px #dee2e6;">
				<tr>
				 	<td style="padding: 5px;"></td>
			  	</tr>
				<tr>
		    		<td><input type="button" id="add-btn" value="ADD" class="btn btn-green" onclick="add_jawatan_persatuan()"/></td>
				</tr>
			</table>
		</div>
	</div>
</div>
		<div class="form-group row">
			<div class="col-12 border bg-grey">
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px">(b) Sukarelawan (Kegiatan Sukarela yang disertai di Peringkat Negeri, Malaysia, Antarabangsa dan Lain-Lain)</p>
			</div>
				<div class="col-12 d-flex border py-2">
					<div class="col-12 row mx-0 px-0">
			<table class="table table-striped" style="text-align: center" id="SukarelawanTable">			  
				<thead>
			    <tr>
			      <th scope="col">KEGIATAN</th>
			      <th scope="col">PERINGKAT</th>
			      <th scope="col">TAHUN</th>
			    </tr>
			  </thead>
			  <tbody>
				<?php $v_count_2 = 1; ?>
				<tr id="row2_<?php echo $v_count_2; ?>">
				    <td><input class="form-control" type="text" id="kegiatan_sukarela_<?php echo $v_count_2; ?>" name="kegiatan_sukarela_<?php echo $v_count_2; ?>"></td>
				    <td><input class="form-control" type="text" id="peringkat_sukarela_<?php echo $v_count_2; ?>" name="peringkat_sukarela_<?php echo $v_count_2; ?>"></td>
				    <td><input class="form-control" type="text" id="tahun_sukarelawan_<?php echo $v_count_2; ?>" name="tahun_sukarelawan_<?php echo $v_count_2; ?>"></td>

				</tr>
					<input type="hidden" id="counter2" name="counter2" value="<?php echo $v_count_2; ?>">
				    <input type="hidden" id="type" name="type5" value="volunteer">
			  </tbody>
			</table>
			<table style="width:100%; float: right; border-top: solid 1px #dee2e6;">
				<tr>
				 	<td style="padding: 5px;"></td>
			  	</tr>
				<tr>
		    		<td><input type="button" id="add-btn" value="ADD" class="btn btn-green" onclick="add_kegiatan_sukarelawan()"/></td>
				</tr>
			</table>		
			</div>
			</div>							
		</div>
	</div>
</div>
		<div class="col-12 col-md-6">
			<div class="col-12">
				<div class="form-group row">
			<div class="col-12 border bg-grey">
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px">(C) Peringkat Sukan Yang Disertai (Contoh: Peringkat Negeri, Malaysia, Antarabangsa dan Lain-Lain)</p>
		</div>
				<div class="col-12 d-flex border py-2">
				<div class="col-12 row mx-0 px-0">
			<table class="table table-striped" style="text-align: center" id="SukanTable">
			  <thead>
			    <tr>
			      <th scope="col">JENIS SUKAN</th>
			      <th scope="col">PERINGKAT</th>
			      <th scope="col">TAHUN</th>
			    </tr>
			  </thead>
			  <tbody>
				<?php $v_count_3 = 1; ?>
				<tr id="row3_<?php echo $v_count_3; ?>">
				    <td><input class="form-control" type="text" id="jenis_sukan_<?php echo $v_count_3; ?>" name="jenis_sukan_<?php echo $v_count_3; ?>"></td>
				    <td><input class="form-control" type="text" id="peringkat_sukan_<?php echo $v_count_3; ?>" name="peringkat_sukan_<?php echo $v_count_3; ?>"></td>
				    <td><input class="form-control" type="text" id="tahun_sukan_<?php echo $v_count_3; ?>" name="tahun_sukan_<?php echo $v_count_3; ?>"></td>

				</tr>
					<input type="hidden" id="counter3" name="counter3" value="<?php echo $v_count_3; ?>">
				    <input type="hidden" id="type" name="type6" value="activity">
			  </tbody>
			</table>
			<table style="width:100%; float: right; border-top: solid 1px #dee2e6;">
				<tr>
				 	<td style="padding: 5px;"></td>
			  	</tr>
				<tr>
		    		<td><input type="button" id="add-btn" value="ADD" class="btn btn-green" onclick="add_peringkat_sukan()"/></td>
				</tr>
			</table>									
		</div>		
	</div>
</div>
</div>
</div>
</div>
	<div class="form-group row">
		<input class="w-75 form-control" type="hidden" id="bahagian_borang" name="bahagian_borang" value="c">
	</div>
	<div  class="col-12 mb-5">
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10 text-right">
                <a href="javascript:if(validate(document.frm_bhgn_c)) document.frm_bhgn_c.submit();" class="btn btn-primary" role="button">
						<i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
				</a>
                <a href="javascript:rec_list('')" class="btn btn-danger" role="button">
                    <i class="fa fa-fw fa-times"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_RESET'); ?>
                </a>
            </div>
        </div>		
	</div>
</form>