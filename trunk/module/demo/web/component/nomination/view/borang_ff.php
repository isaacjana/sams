<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN F: JAWATAN-JAWATAN YANG PERNAH DISANDANG DI DALAM PERSATUAN
/ KEBAJIKAN / KEGIATAN SUKARELA / SUKAN DAN TAHUN-TAHUN MENYANDANGNYA
<br></b>Senaraikan penglibatan Calon dalam Pertubuhan / Persatuan (jika ada)</p>
<form class="w-100" id="frm_bhgn_f" name="frm_bhgn_f" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
	<div class="col-12 row mt-4">
		<div class="col-12 col-md-6">
			<div class="col-12 d-flex border py-2">
			<div class="col-12 row mx-0 px-0">
			<table class="table table-striped" id="kegiatanLuarSemasaNegara">
			  <thead>
			    <tr>
			      <th scope="col">PERSATUAN / KEBAJIKAN / KEGIATAN SUKARELA / SUKAN</th>
			      <th scope="col">JAWATAN</th>
			      <th scope="col">NEGARA / NEGARI</th>
			      <th scope="col">TAHUN</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php $v_count = 1; ?>
			    <tr id="row_<?php echo $v_count; ?>">
			      <td><input class="form-control" type="text" id="persatuan_<?php echo $v_count; ?>" name="persatuan_<?php echo $v_count; ?>"></td>
			      <td><input class="form-control" type="text" id="jawatan_<?php echo $v_count; ?>" name="jawatan_<?php echo $v_count; ?>"></td>
			      <td><input class="form-control" type="text" id="negara_<?php echo $v_count; ?>" name="negara_<?php echo $v_count; ?>"></td>
			      <td><input class="form-control" type="text" id="tempoh_<?php echo $v_count; ?>" name="tempoh_<?php echo $v_count; ?>"></td>
			    </tr>
				<input type="hidden" id="counter" name="counter" value="<?php echo $v_count; ?>">
				<input type="hidden" id="type" name="type" value="Jawatan">
			  </tbody>
			</table>
			<table style="width:100%; float: right; border-top: solid 1px #dee2e6;">
				<tr>
				 	<td style="padding: 5px;"></td>
			  	</tr>
				<tr>
		    		<td><input type="button" id="add-btn" value="ADD" class="btn btn-green" onclick="add_row_kegiatan_luar_semasa_negara()"/></td>
				</tr>
			</table>
		</div>
	</div>
	        <div class="form-group row" style="padding-bottom: 15px; padding-left: 55px;">
	            <div class="col-sm-2"></div>
	            <div class="form-group row">
					<input class="w-75 form-control" type="hidden" id="bahagian_borang" name="bahagian_borang" value="f">
				</div>
	            <div class="col-sm-10 text-right">
	                <a href="javascript:if(validate(document.frm_bhgn_f)) document.frm_bhgn_f.submit();" class="btn btn-primary" role="button">
						<i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
				</a>
	                <a href="javascript:rec_list('')" class="btn btn-danger" role="button">
	                    <i class="fa fa-fw fa-times"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_RESET'); ?>
	                </a>
	            </div>
	        </div>						
		</div>
	</div>
</form>