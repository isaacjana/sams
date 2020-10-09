<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN J: ASAS PENCALONAN<br>Nota Penting:<br>
1.	SUMBANGAN CALON hendaklah ditulis / dicetak dalam bentuk SENARAI.<br>
2.	Adalah penting ruang ini diisi dengan lengkap serta tahap sumbangan adalah pada tahap yang cukup cemerlang.
</b></p>
<form class="w-100"  id="frm_bhgn_j" name="frm_bhgn_j" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
	<div class="col-12 row mt-4 mb-4">
		<div class="col-12 col-md-6">
<div class="col-12">
			<div class="form-group row">
					<div class="col-12 border bg-grey">
			<table class="table table-striped" id="sumbgnKpdJbtn">
			  <thead>
			    <tr>
			      <th scope="col">SUMBANGAN KEPADA JABATAN / PERKHIDMATAN</th>
			    </tr> 
			  </thead>
			  <tbody>
			  	<?php $v_count_1 = 1; ?>
			    <tr id="row1_<?php echo $v_count_1; ?>">
			      <td><input class="form-control" type="text" id="smbgn_kpd_jbtn_<?php echo $v_count_1; ?>" name="smbgn_kpd_jbtn_<?php echo $v_count_1; ?>"></td>
			    </tr>
				<input type="hidden" id="counter1" name="counter1" value="<?php echo $v_count_1; ?>">
				<input type="hidden" id="type1" name="type1" value="JABATAN">
			  </tbody>
			</table>
			<table style="width:100%; float: right; border-top: solid 1px #dee2e6;">
		    	<tr>
		    		<td style="padding: 5px;"></td>
		    	</tr>
		    	<tr>
		    		<td><input type="button" id="add-btn" value="ADD" class="btn btn-green" onclick="add_row_sumbangan_jabatan()"/></td>
		    	</tr>
		    	<tr>
		    		<td style="padding: 5px;"></td>
		    	</tr>
		    </table>
		    		</div>
	</div>
	<div class="form-group row">
					<div class="col-12 border bg-grey">

			<table class="table table-striped" id="sumbgnKpdMsyrkt">
			  <thead>
			    <tr>
			      <th scope="col">SUMBANGAN KEPADA MASYARAKAT</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php $v_count_2= 1; ?>
			    <tr id="row2_<?php echo $v_count_2; ?>">
			      <td><input class="form-control" type="text" id="smbgn_kpd_msyrkt_<?php echo $v_count_2; ?>" name="smbgn_kpd_msyrkt_<?php echo $v_count_2; ?>"></td>
			    </tr>
				<input type="hidden" id="counter2" name="counter2" value="<?php echo $v_count_2; ?>">
				<input type="hidden" id="type2" name="type2" value="MASYARAKAT">

			  </tbody>
			</table>
			<table style="width:100%; float: right; border-top: solid 1px #dee2e6;">
		    	<tr>
		    		<td style="padding: 5px;"></td>
		    	</tr>
		    	<tr>
		    		<td><input type="button" id="add-btn" value="ADD" class="btn btn-green" onclick="add_row_sumbangan_masyarakat()"/></td>
		    	</tr>
		    	<tr>
		    		<td style="padding: 5px;"></td>
		    	</tr>
		    </table>
		</div>
	</div><div class="form-group row">
					<div class="col-12 border bg-grey">

			<table class="table table-striped" id="sumbgnKpdNgri">
			  <thead>
			    <tr>
			      <th scope="col">SUMBANGAN KEPADA NEGERI</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php $v_count_3 = 1; ?>
			    <tr id="row3_<?php echo $v_count_3; ?>">
			      <td><input class="form-control" type="text" id="smbgn_kpd_ngri_<?php echo $v_count_3; ?>" name="smbgn_kpd_ngri_<?php echo $v_count_3; ?>"></td>
			    </tr>
				<input type="hidden" id="counter3" name="counter3" value="<?php echo $v_count_3; ?>">
				<input type="hidden" id="type3" name="type3" value="NEGERI">

			  </tbody>
			</table>
			<table style="width:100%; float: right; border-top: solid 1px #dee2e6;">
		    	<tr>
		    		<td style="padding: 5px;"></td>
		    	</tr>
		    	<tr>
		    		<td><input type="button" id="add-btn" value="ADD" class="btn btn-green" onclick="add_row_sumbangan_negeri()"/></td>
		    	</tr>
		    	<tr>
		    		<td style="padding: 5px;"></td>
		    	</tr>
		    </table>									
		</div>
	</div>
</div>
</div>
		<div class="col-12 col-md-6"><div class="form-group row">
					<div class="col-12 border bg-grey">

			<table class="table table-striped" id="sumbgnKpdNgra">
			  <thead>
			    <tr>
			      <th scope="col">SUMBANGAN KEPADA NEGARA</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php $v_count_4 = 1; ?>
			    <tr id="row4_<?php echo $v_count_4; ?>">
			      <td><input class="form-control" type="text" id="smbgn_kpd_ngra_<?php echo $v_count_4; ?>" name="smbgn_kpd_ngra_<?php echo $v_count_4; ?>"></td>
			    </tr>
				<input type="hidden" id="counter4" name="counter4" value="<?php echo $v_count_4; ?>">
				<input type="hidden" id="type4" name="type4" value="NEGARA">

			  </tbody>
			</table>
			<table style="width:100%; float: right; border-top: solid 1px #dee2e6;">
		    	<tr>
		    		<td style="padding: 5px;"></td>
		    	</tr>
		    	<tr>
		    		<td><input type="button" id="add-btn" value="ADD" class="btn btn-green" onclick="add_row_sumbangan_negara()"/></td>
		    	</tr>
		    	<tr>
		    		<td style="padding: 5px;"></td>
		    	</tr>
		    </table>
		</div></div><div class="form-group row">
					<div class="col-12 border bg-grey">

			<table class="table table-striped" id="pnghrgaanAnugerah">
			  <thead>
			    <tr>
			      <th scope="col">PENGHARGAAN DI ANUGERAH</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php $v_count_5 = 1; ?>
			    <tr id="row5_<?php echo $v_count_5; ?>">
			      <td><input class="form-control" type="text" id="pghrgaan_dianugerah_<?php echo $v_count_5; ?>" name="pghrgaan_dianugerah_<?php echo $v_count_5; ?>"></td>
			    </tr>  
				<input type="hidden" id="counter5" name="counter5" value="<?php echo $v_count_5; ?>">
				<input type="hidden" id="type5" name="type5" value="PENGHARGAAN">

			  </tbody>
			</table>
			<table style="width:100%; float: right; border-top: solid 1px #dee2e6;">
		    	<tr>
		    		<td style="padding: 5px;"></td>
		    	</tr>
		    	<tr>
		    		<td><input type="button" id="add-btn" value="ADD" class="btn btn-green" onclick="add_row_pnghrgaan_dianugerah()"/></td>
		    	</tr>
		    	<tr>
		    		<td style="padding: 5px;"></td>
		    	</tr>
		    </table>	
		    </div></div>								
		</div>		
	</div>
	<div class="form-group row">
		<input class="w-75 form-control" type="hidden" id="bahagian_borang" name="bahagian_borang" value="j">
		<input class="w-75 form-control" type="text" id="nom_id" name="nom_id" value="<?php echo $v_id ?>">
		<input class="w-75 form-control" type="text" id="form_id" name="form_id" value="1">
	</div>
	<div  class="col-12">
        <div class="form-group row" style="padding-bottom: 15px">
            <div class="col-sm-2"></div>
            <div class="col-sm-10 text-right">
                <a href="javascript:if(validate(document.frm_bhgn_j)) document.frm_bhgn_j.submit();" class="btn btn-primary" role="button">
						<i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
				</a>
                <a href="javascript:rec_list('')" class="btn btn-danger" role="button">
                    <i class="fa fa-fw fa-times"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_RESET'); ?>
                </a>
            </div>
        </div>		
	</div>	
</form>