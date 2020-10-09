<form class="w-100" id="frm_nom" name="frm_nom" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
	<p class="mb-12" style="padding-left: 20px; padding-top: 10px"><b>EDIT MEETING DECISION - DATA ENTRY</b></p>
	<div class="col-11 row mt-4" style="margin-left: 10px; background-color: #fff">	
		<div class="col-12 col-md-6">
			<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_penuh">Nama:</label>
					<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_name']) ? $v_user_detail['nom_name'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_penuh">No Kad Pengenalan:</label>
					<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_new_ic']) ? $v_user_detail['nom_new_ic'] : "");?>" readonly>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_penuh">Nama Pingat Dicadang:</label>
					<?php
						$v_race_id=\U::safe_display_string(isset($v_user_detail['awd_type_id']) ? $v_user_detail['awd_type_id'] : "");
                        $v_opt = '';
                        $v_count = 1; 
                        if ($v_user_detail["awd_type_id"]=='') {
                        	$v_opt .= '<option value="" selected></option>';
                        }
                        
                        foreach($v_award as $v_row){
                        	$select='';
                        	if ($v_race_id==$v_row["awd_type_id"]) {
                        		$select='selected';
                        	}

                            if($v_count==1){
                                $v_opt .= '<option value="'.\U::safe_display_string($v_row["awd_type_id"]).'" '.$select.'>'.\U::safe_display_string($v_row["awd_award"]).'</option>';    
                            }else{
                                $v_opt .= '<option value="'.\U::safe_display_string($v_row["awd_type_id"]).'" '.$select.'>'.\U::safe_display_string($v_row["awd_award"]).'</option>';
                            }
                            ++$v_count;
                        }
                    ?>
                        <select class="w-75 form-control" id="nama_pingat" name="nama_pingat">
                            <?php
                            if($v_opt!=''){
                                echo $v_opt;
                            }
                            ?>
                        </select>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_penuh">Jabatan/Agensi:</label>
					<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_user_detail['nom_source']) ? $v_user_detail['nom_source'] : "");?>" readonly>
				</div>
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
	<div class="col-11 row mt-4" style="margin-left: 10px; background-color: #fff">			
		<div class="col-6" style="margin-left: 10px; padding-top: 10px">
			<div class="form-group row" style="padding-left: 15px;">
				<label class="w-25 col-form-label" for="meet_stat">STATUS:</label>
				<div class="col-12 d-flex py-2">
					<?php if($v_user_detail['nom_status'] == '19'){ ?>
						<?php echo "<div class='form-check col-6 row mx-3'>"; ?>
						<?php echo "<input class='form-check-input' type='radio' name='meet_stat' id='lulus' value='lulus' checked>"; ?>
						<?php echo "<label class='form-check-label' for='lulus'>LULUS</label>"; ?>
						<?php echo "</div>"; ?>
						<?php echo "<div class='form-check col-6 row mx-3'>"; ?>
						<?php echo "<input class='form-check-input' type='radio' name='meet_stat' id='tidak_lulus' value='tidak_lulus'>"; ?>
						<?php echo "<label class='form-check-label' for='tidak_lulus'>TIDAK LULUS</label>"; ?>
						<?php echo "</div>"; ?>

					<?php }else{?>
						<?php echo "<div class='form-check col-6 row mx-3'>"; ?>
						<?php echo "<input class='form-check-input' type='radio' name='meet_stat' id='lulus' value='lulus'>"; ?>
						<?php echo "<label class='form-check-label' for='lulus'>LULUS</label>"; ?>
						<?php echo "</div>"; ?>
						<?php echo "<div class='form-check col-6 row mx-3'>"; ?>
						<?php echo "<input class='form-check-input' type='radio' name='meet_stat' id='tidak_lulus' value='tidak_lulus'  checked>"; ?>
						<?php echo "<label class='form-check-label' for='tidak_lulus'>TIDAK LULUS</label>"; ?>
						<?php echo "</div>"; ?>
					<?php }?>
				</div>
				
				
			
				<!-- <label class="w-25 col-form-label" for="meet_stat">STATUS:</label>
				<div class="col-12 d-flex py-2">
					<div class="form-check col-6 row mx-3"> -->
						<!-- <input class="form-check-input" type="radio" name="meet_stat" id="lulus" value="lulus"> --> <!-- status = 17 -->
						<!-- <label class="form-check-label" for="lulus">LULUS</label>
					</div>
					<div class="form-check col-6 row mx-0 px-0 mx-3">
						<input class="form-check-input" type="radio" name="meet_stat" id="tidak_lulus" value="tidak_lulus"> --> <!-- status = 18 -->
						<!-- <label class="form-check-label" for="tidak_lulus">TIDAK LULUS</label>
					</div> -->
				<!-- </div> -->
			</div>
			<div class="form-group row" style="padding-left: 15px;">
				<label class="w-25 col-form-label" for="tarikh_keputusan">TARIKH KEPUTUSAN:</label>
				<input class="w-75 form-control" type="date" id="tarikh_keputusan" name="tarikh_keputusan">
			</div>	
			<div class="form-group row" style="padding-left: 15px;">
				<label class="w-25 col-form-label" for="meeting_remarks">REMARKS:</label>
				<textarea class="w-75 form-control compulsary" id="meeting_remarks" name="meeting_remarks" rows="5" required></textarea>
				<input class="col-9 form-control" type="hidden" id="varid" name="varid" value="<?php echo \U::safe_display_string(isset($v_id) ? $v_id : "");?>">
				<input class="col-9 form-control" type="hidden" id="is_edit" name="is_edit" value="EDITED">
			</div>											
		</div>
	</div>		
	<div class="col-11 col-md-11" style="padding-top: 10px; padding-bottom: 30px">
	    <div class="form-group row">
	        <div class="col-sm-2"></div>
	        <div class="col-sm-10">
				<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('shortlist','index');?>" class="btn btn-danger" role="button">
					<i class="fa fa-fw fa-angle-left"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
				</a>
				<a href="javascript:if(validate(document.frm_nom)) document.frm_nom.submit();" class="btn btn-primary" role="button">
					<i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
				</a>
	        </div>
	    </div>		
	</div>		
</form>