<div class="mb-5 m-3">
	<pre>
		<?php //print_r($v_peristiwa_list); ?>
	</pre>
	<h3>Summary of Nomination Sources by <?php echo $v_by; ?></h3>
	<form  id="frm_source" name="frm_source" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
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
		<?php
		if ($v_by=='Race') {
			?>
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
			<?php
		}
		?>
		<div class="text-right">
			<a href="javascript:if(validate(document.frm_source)) document.frm_source.submit();" class="btn btn-primary" role="button">
				<i class="fa fa-fw fa-search"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SEARCH'); ?>
			</a>
		</div>
		
	</form>
</div>