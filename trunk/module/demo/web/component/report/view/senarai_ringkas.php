<div class="mb-5 m-3">
	<h3>Senarai Ringkasan Pencalonan</h3>
	<form  id="frm_source" name="frm_source" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
		<div class="col-6">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Peristiwa : </label>
				<div class="col-sm-10">
					<select class="form-control" name="Peristiwa">
						<?php
						foreach ($v_peristiwa_list as $row) {
							$list.="<option value='".$row['peristiwa_id']."'>".$row['peristiwa_desc']."</option>";
						}
						echo $list;
						?>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Keputusan : </label>
				<div class="col-sm-10">
					<select class="form-control" name="Keputusan">
						<option value="0">KIV</option>
						<option value="1">Lulus</option>
						<option value="2">Tidak Lulus</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Pingat : </label>
				<div class="col-sm-10">
					<select class="form-control" name="Award">
						<?php
						foreach ($v_pingat_list as $row) {
							$lists.="<option value='".$row['awd_type_id']."'>".$row['awd_award']."</option>";
						}
						echo $lists;
						?>
					</select>
				</div>
			</div>		
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Parti Politik : </label>
				<div class="col-sm-10">
					<select class="form-control" name="Parti">
						<?php
						foreach ($v_parti_list as $row) {
							$listing.="<option value='".$row['parti_id']."'>".$row['parti_name']."</option>";
						}
						echo $listing;
						?>
					</select>
				</div>
			</div>		
			<div class="text-right">
				<a href="javascript:if(validate(document.frm_source)) document.frm_source.submit();" class="btn btn-primary" role="button">
					<i class="fa fa-fw fa-search"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SEARCH'); ?>
				</a>
			</div>
		</div>
	</form>
</div>