<div class="form-group row">
	<label class="w-25 col-form-label" for="nama_penuh">Nama Penuh:</label>
	<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_name) ? $v_name : "");?>" required>
</div>