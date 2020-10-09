

<label class="w-25 col-form-label" for="singkatan">Singkatan :</label>
<input class="w-75 form-control" type="text" id="singkatan" name="singkatan" value="<?php echo \U::safe_display_string(isset($v_singkatan) ? $v_singkatan : "");?>" readonly>
<input class="w-75 form-control" type="hidden" id="awd_type_id" name="awd_type_id" value="<?php echo \U::safe_display_string(isset($v_awd_type_id) ? $v_awd_type_id : "");?>">