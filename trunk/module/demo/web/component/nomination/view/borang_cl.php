<form class="w-100"  id="frm_bhgn_l" name="frm_bhgn_l" method="post" onsubmit="return validate(this);" enctype="multipart/form-data"> 
	<div class="col-12 row mt-4">
		<?php 
		if (isset($v_query)) {
			echo $v_query;
		}
		 ?> 
		<div class="col-12 col-md-6">
			<div class="col-12">
				<div class="form-group row">
					<label class="w-25 col-form-label" for="no_folio">No Folio:</label>
					<div class="w-75" id="no_folio">
						<?php
						if (isset($v_nom_profile["nom_folio_no"])) {
							echo $v_nom_profile["nom_folio_no"];
						}else{
							echo "SA/C/2020/".$v_folio_no."/...";
							echo "<input class='w-75 form-control' type='hidden' id='nom_folio_no' name='nom_folio_no' value='SA/C/2020/".$v_folio_no."/...'>";
						}
						?>
						
					</div>
				</div>	
				<div class="form-group row">
					<label class="w-25 col-form-label" for="calon_gambar">Gambar Calon:</label>
					<input class="w-75 form-control" type="file" id="calon_gambar" name="calon_gambar">
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="nama_penuh">Nama Penuh:</label>
					<input class="w-75 form-control" type="text" id="nama_penuh" name="nama_penuh" value="<?php echo \U::safe_display_string(isset($v_nom_profile['nom_name']) ? $v_nom_profile['nom_name'] : "");?>" required >
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="ic_baru">No. Kad Pengenalan:</label>
					<input class="w-75 form-control" type="text" id="ic_baru" name="ic_baru" value="<?php echo \U::safe_display_string(isset($v_nom_profile['nom_new_ic']) ? $v_nom_profile['nom_new_ic'] : "");?>" required>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="jabatan">Kementerian / Jabatan:</label>
					<input class="w-75 form-control" type="text" id="jabatan" name="jabatan" value="<?php echo \U::safe_display_string(isset($v_nom_profile['nom_source']) ? $v_nom_profile['nom_source'] : "");?>" required>
				</div>				
				<div class="form-group row">
					<label class="w-25 col-form-label" for="pingat">Nama Penuh Darjah Kebesaran, Bintang dan Pingat :</label>
					<input class="w-75 form-control" list="list_pingat" id="pingat" name="pingat" onchange="get_singkatan('SA/C/2020/<?php echo $v_folio_no ?>/')" required>
					<?php
                        $v_opt = '';
                        $v_count = 1;
                        $v_opt .= '<option value="" selected></option>';
                        foreach($v_award_type as $v_row){
                            if($v_count==1){
                                $v_opt .= '<option value="'.\U::safe_display_string($v_row["awd_award"]).'"></option>';    
                            }else{
                                $v_opt .= '<option value="'.\U::safe_display_string($v_row["awd_award"]).'"></option>';
                            }
                            ++$v_count;
                        }
                        ?>
                        <datalist id="list_pingat">
                            <?php
                            if($v_opt!=''){
                                echo $v_opt;
                            }
                            ?>
                        </datalist>
				</div>				
				<div class="form-group row" id="singkatan_area">
					<label class="w-25 col-form-label" for="singkatan">Singkatan :</label>
					<input class="w-75 form-control" type="text" id="singkatan" name="singkatan" readonly>
					<input class="w-75 form-control" type="hidden" id="awd_type_id" name="awd_type_id" value="">
				</div>
				<div class="form-group row">
					<input class="w-75 form-control" type="hidden" id="bahagian_borang" name="bahagian_borang" value="l">
					<input class="w-75 form-control" type="hidden" id="nom_id" name="nom_id" value="<?php echo $v_id ?>">
					<input class="w-75 form-control" type="hidden" id="form_id" name="form_id" value="3">
					<input class="w-75 form-control" type="hidden" id="awdc_category_id" name="awdc_category_id" value="<?php echo $v_awdc_category_id ?>">
				</div>
		        <div class="form-group row">
		            <div class="col-sm-2"></div>
		            <div class="col-sm-10">
		                <a href="javascript:if(validate(document.frm_bhgn_l)) document.frm_bhgn_l.submit();" class="btn btn-primary" role="button">
							<i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
						</a>
		                <a href="javascript:rec_list('')" class="btn btn-danger" role="button">
		                    <i class="fa fa-fw fa-times"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_RESET'); ?>
		                </a>
		            </div>
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
</form>