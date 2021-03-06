<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN C: MAKLUMAT KURNIAAN YANG TELAH DIANUGERAHKAN<br></b>(Kurniaan Darjah Kebesaran, Bintang dan Pingat <b>Negeri Sarawak / Persekutuan / Negara atau Negeri Lain </b>)</p>
<form class="w-100" id="frm_bhgn_c" name="frm_bhgn_c" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
	<div class="col-12 row mt-4">
		<div class="col-12 col-md-6">
			<div class="col-12 d-flex border py-2">
			<div class="col-12 row mx-0 px-0">
			<table class="table table-striped" style="text-align: center" id="maklumatKurniaan">
			  <thead>
			    <tr>
			      <th scope="col">NAMA DARJAH KEBESARAN / BINTANG / PINGAT <br> <small>(Sila nyatakan dengan penuh)</small></th>
			      <th scope="col">Negara / Negeri</th>
			      <th scope="col">Tahun Kurniaan</th>
			    </tr>
			  </thead>
			  <tbody>
				<?php $v_count_1 = 1; ?>
				<tr id="row_<?php echo $v_count_1; ?>">
				    <td><input class="form-control" type="text" id="kurniaan_drjh_kebesaran_<?php echo $v_count_1; ?>" name="kurniaan_drjh_kebesaran_<?php echo $v_count_1; ?>"></td>
				    <td><input class="form-control" type="text" id="kurniaan_negara_<?php echo $v_count_1; ?>" name="kurniaan_negara_<?php echo $v_count_1; ?>"></td>
				    <td><input class="form-control" type="text" id="kurniaan_tahun_<?php echo $v_count_1; ?>" name="kurniaan_tahun_<?php echo $v_count_1; ?>"></td>

				</tr>
					<input type="hidden" id="counter" name="counter" value="<?php echo $v_count_1; ?>">
				    <input type="hidden" id="type" name="type7" value="kurniaan">
			  </tbody>
			</table>	
			<table style="width:100%; float: right; border-top: solid 1px #dee2e6;">
				<tr>
				 	<td style="padding: 5px;"></td>
			  	</tr>
				<tr>
		    		<td><input type="button" id="add-btn" value="ADD" class="btn btn-green" onclick="maklumat_Kurniaan()"/></td>
				</tr>
			</table>
		</div>
	</div>
				<div class="form-group row">
				<input class="w-75 form-control" type="hidden" id="bahagian_borang" name="bahagian_borang" value="c">
				</div>
	        <div class="form-group row" style="padding-bottom: 15px; padding-left: 55PX;">
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
	</div>
</form>