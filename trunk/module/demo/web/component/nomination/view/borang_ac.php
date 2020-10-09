<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN C: MAKLUMAT PRESTASI</b></p>
<form class="w-100" id="frm_bhgn_c" name="frm_bhgn_c" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
	<div class="col-12 row mt-4 mb-4">
		<div class="col-12 col-md-6"> 
			<div class="col-12">
				<div class="form-group row">
					<div class="col-12 border bg-grey">
					<label>1. Markah Prestasi:</label>
					</div>
					<div class="col-12 d-flex border py-2">
					<div class="col-12 row mx-0 px-0">
					<table class="table table-striped" style="text-align: center" id="markahPrestasi">
					  <thead>
					    <tr>
					      <th scope="col">TAHUN</th>
					      <th scope="col">MARKAH</th>
					    </tr>
					  </thead>
					  <tbody> 
					  	<?php $v_count_1 = 1; ?>
					    <tr id="row1_<?php echo $v_count_1; ?>">
					      <td><input class="form-control compulsary" type="text" id="tahun_markah_prestasi_<?php echo $v_count_1; ?>" name="tahun_markah_prestasi_<?php echo $v_count_1; ?>"></td>
					      <td><input class="form-control compulsary" type="text" id="markah_prestasi_<?php echo $v_count_1; ?>" name="markah_prestasi_<?php echo $v_count_1; ?>"></td>
					    </tr>
					    <input type="hidden" id="counter1" name="counter1" value="<?php echo $v_count_1; ?>">
					    <input type="hidden" id="type" name="type1" value="performance">
					  </tbody>
					</table>
					<table style="width:100%; float: right; border-top: solid 1px #dee2e6;">
				    	<tr>
				    		<td style="padding: 5px;"></td>
				    	</tr>
				    	<tr>
				    		<td><input type="button" id="add-btn" value="ADD" class="btn btn-green" onclick="add_markah_prestasi()"/></td>
				    	</tr>
				    </table>
				    </div>
				    </div>					
				</div>				
				<div class="form-group row">
					<div class="col-12 border bg-grey">
					<label>2. Sila pastikan markah prestasi terkini dinyatakan. Jika Panel Penyelarasan Gaji belum bermesyuarat pada tahun berkenaan, keputusan panel pada tiga (3) tahun sebelumnya hendaklah dinyatakan</label>
				</div>
				</div>
				<div class="form-group row"> 
					<div class="col-12 border bg-grey">
					<label>3. Pernah menerima Anugerah Perkhidmatan Cemerlang (APC). Sila nyatakan di bawah:-</label>
					</div>
					<div class="col-12 d-flex border py-2">
					<div class="col-12 row mx-0 px-0">
					<table class="table table-striped" style="text-align: center" id="apc">
					  <thead>
					    <tr>
					      <th scope="col" colspan="5">ANUGERAH PERKHIDMATAN CEMERLANG</th>
					    </tr>
					    <tr>
					    	<th>TAHUN</th>
					    </tr>					    
					  </thead>
					  <tbody>
					  	<?php $v_count_2 = 1; ?>
					    <tr id="row2_<?php echo $v_count_2; ?>">
					    	<td><input class="form-control" type="text" id="apc_<?php echo $v_count_2; ?>" name="apc_<?php echo $v_count_2; ?>"></td>
					    	
					    </tr>
					    <input type="hidden" id="counter2" name="counter2" value="<?php echo $v_count_2; ?>">
					    <input type="hidden" id="type" name="type2" value="apc">

					   <table style="width:100%; float: right; border-top: solid 1px #dee2e6;">
					    	<tr>
					    		<td style="padding: 5px;"></td>
					    	</tr>
					    	<tr>
					    		<td><input type="button" id="add-btn" value="ADD" class="btn btn-green" onclick="add_row_apc()"/></td>
					    	</tr>
				    	</table>
					  </tbody>
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
					<label>4. Markah Prestasi <b>melebihi 85%</b>. Sila nyatakan di bawah:-</label>
					</div>
					<div class="col-12 d-flex border py-2">
					<div class="col-12 row mx-0 px-0">
					<table class="table table-striped" style="text-align: center" id="apc_above_85">
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
					  	<?php $v_count_3 = 1; ?>
					    <tr id="row3_<?php echo $v_count_3; ?>">
					      <td><input class="form-control" type="text" id="tahun_apc_above_<?php echo $v_count_3; ?>" name="tahun_apc_above_<?php echo $v_count_3; ?>"></td>
					      <td><input class="form-control" type="text" id="markah_apc_above_<?php echo $v_count_3; ?>" name="markah_apc_above_<?php echo $v_count_3; ?>"></td>
					    </tr>
					    <input type="hidden" id="counter3" name="counter3" value="<?php echo $v_count_3; ?>">
					    <input type="hidden" id="type" name="type3" value="overmark">

					  </tbody>
					</table>
					<table style="width:100%; float: right; border-top: solid 1px #dee2e6;">
				    	<tr>
				    		<td style="padding: 5px;"></td>
				    	</tr>
				    	<tr>
				    		<td><input type="button" id="add-btn" value="ADD" class="btn btn-green" onclick="add_row_apc_above_85()"/></td>
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