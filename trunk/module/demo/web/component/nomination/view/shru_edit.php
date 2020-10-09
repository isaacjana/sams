<?php if($v_user_detail['form_id'] == '1'){ ?>
			<div class="col-12 pb-5">
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN H: MAKLUMAT PENYOKONG<br></b><b>Nota Penting: Penyokong hendaklah merupakan KETUA JABATAN kepada Calon</b></p>
			<div class="col-12 row mt-4 mb-4">
			<form class="w-100" id="frm_shru_edit" name="frm_shru_edit" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
				<div class="col-12 row mt-4">
					<div class="col-12 col-md-6"> 
						<div class="col-12">
							<div class="form-group row">
								<label class="w-25 col-form-label" for="nama_penyokong">Nama:</label>
								<input class="w-75 form-control" type="text" id="nama_penyokong" name="nama_penyokong">
								<input type="hidden" name="v_id" id="v_id" value="<?php echo \U::safe_display_string($v_id);?>">
								<input type="hidden" name="v_form_id" id="v_form_id" value="<?php echo \U::safe_display_string($v_user_detail['form_id']);?>">
							</div>				
							<div class="form-group row">
								<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
								<input class="w-75 form-control" type="text" id="jawatan_penyokong" name="jawatan_penyokong">
							</div>				
							<div class="form-group row">
								<label class="w-25 col-form-label" for="alamat_pejabat_penyokong">Alamat Pejabat:</label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong1" name="alamat_pejabat_penyokong1">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong2" name="alamat_pejabat_penyokong2">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong3" name="alamat_pejabat_penyokong3">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong4" name="alamat_pejabat_penyokong4">
							</div>
							<div class="form-group row">
								<label class="w-25 col-form-label" for="no_telefon_penyokong">No. Tel. Pejabat/ Tel. Bimbit:</label>
								<input class="w-75 form-control" type="text" id="no_telefon_penyokong" name="no_telefon_penyokong">
							</div>									
						</div>
					</div>
				</div>
			</div>
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN I: ULASAN PENYOKONG<br></b><b>Nota Penting: Hendaklah diisi dan dilengkapkan oleh KETUA JABATAN kepada Calon sahaja</b></p>
					<div class="col-12 col-md-6"> 
						<div class="col-12">			
							<div class="form-group row">
			    				<textarea class="form-control" id="ulasan_ketua" name="ulasan_ketua" rows="6"></textarea>
							</div>			
						</div>
				        <div class="form-group row" style="padding-bottom: 15px">
				            <div class="col-sm-2"></div>
				     
				        </div>			
					</div>
			</form>
				
			<div class="form-group row mb-4">
			    <div class="col-sm-2"></div>
			    <div class="col-sm-10">
					<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('nomination','borang');?>" class="btn btn-danger" role="button">
						<i class="fa fa-fw fa-angle-left"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
					</a>		
					<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('nomination','route_shru', $v_id);?>" class="btn btn-danger" role="button">
						<i class="fa fa-fw fa-undo"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
					</a>
					<a href="javascript:if(validate(document.frm_shru_edit)) document.frm_shru_edit.submit();" class="btn btn-primary" role="button">
						<i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
					</a>
			    </div>
			</div>
			</div>	
<?php
						}else if($v_user_detail['form_id'] == '2'){
					?>

<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN H: MAKLUMAT PENYOKONG<br></b><b>Nota Penting: Penyokong hendaklah merupakan KETUA JABATAN kepada Calon</b></p>
			<form class="w-100" id="frm_shru_edit" name="frm_shru_edit" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
				<div class="col-12 row mt-4">
						<div class="col-12">
							<div class="form-group row">
								<label class="w-25 col-form-label" for="nama_penyokong">Nama:</label>
								<input class="w-75 form-control" type="text" id="nama_penyokong" name="nama_penyokong">
								<input type="hidden" name="v_id" id="v_id" value="<?php echo \U::safe_display_string($v_id);?>">
								<input type="hidden" name="v_form_id" id="v_form_id" value="<?php echo \U::safe_display_string($v_user_detail['form_id']);?>">
							</div>				
							<div class="form-group row">
								<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
								<input class="w-75 form-control" type="text" id="jawatan_penyokong" name="jawatan_penyokong">
							</div>				
							<div class="form-group row">
								<label class="w-25 col-form-label" for="alamat_pejabat_penyokong">Alamat Pejabat:</label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong1" name="alamat_pejabat_penyokong1">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong2" name="alamat_pejabat_penyokong2">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong3" name="alamat_pejabat_penyokong3">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong4" name="alamat_pejabat_penyokong4">
							</div>
							<div class="form-group row">
								<label class="w-25 col-form-label" for="no_telefon_penyokong">No. Tel. Pejabat/ Tel. Bimbit:</label>
								<input class="w-75 form-control" type="text" id="no_telefon_penyokong" name="no_telefon_penyokong">
							</div>									
						</div>
					</div>
								<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN I: ULASAN PENYOKONG<br></b><b>Nota Penting: Hendaklah diisi dan dilengkapkan oleh KETUA JABATAN kepada Calon sahaja</b></p>
								<div class="col-12 row mt-4">
						<div class="col-12">			
							<div class="form-group row">
			    				<textarea class="form-control" id="ulasan_ketua" name="ulasan_ketua" rows="6"></textarea>
							</div>			
						</div>
				        <div class="form-group row" style="padding-bottom: 15px">
				            <div class="col-sm-2"></div>
				     
				        </div>			
					</div>
				</div>

					<div class="col-12 col-md-6"> 
						<div class="col-12">

			<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN J : REKOMENDASI SETIAUSAHA TETAP KEMENTERIAN<br><br></b></p>
				<div class="col-12 row mt-4">
									<div class="col-12">
							<div class="form-group row">
								<label class="w-25 col-form-label" for="nama_penyokong">Nama:</label>
								<input class="w-75 form-control" type="text" id="nama_rekomendasi" name="nama_rekomendasi">
							</div>				
							<div class="form-group row">
								<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
								<input class="w-75 form-control" type="text" id="jawatan_rekomendasi" name="jawatan_rekomendasi">
							</div>				
							<div class="form-group row">
								<label class="w-25 col-form-label" for="alamat_pejabat_rekomendasi">Alamat Pejabat:</label>
			    				<textarea class="w-75 form-control" id="alamat_pejabat_rekomendasi" name="alamat_pejabat_rekomendasi" rows="6"></textarea>
							</div>
							<div class="form-group row">
								<label class="w-25 col-form-label" for="no_telefon_rekomendasi">No. Tel. Pejabat/ Tel. Bimbit:</label>
								<input class="w-75 form-control" type="text" id="no_telefon_rekomendasi" name="no_telefon_rekomendasi">
							</div>	
							<div class="form-group row">
								<label class="w-25 col-form-label" for="rekomendasi">Rekomendasi dan Komen:</label>
			    				<textarea class="w-75 form-control" id="komen_rekomendasi" name="komen_rekomendasi" rows="6"></textarea>
							</div>							
						</div>
					</div>
				</div>
			</div>
	</div>


			</form>
				
				
			<div class="form-group row mb-4">
			    <div class="col-sm-2"></div>
			    	<div class="col-sm-10 text-right" style="padding-right: 100px;">
					<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('nomination','borang');?>" class="btn btn-danger" role="button">
						<i class="fa fa-fw fa-angle-left"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
					</a>		
					<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('nomination','route_shru', $v_id);?>" class="btn btn-danger" role="button">
						<i class="fa fa-fw fa-undo"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
					</a>
					<a href="javascript:if(validate(document.frm_shru_edit)) document.frm_shru_edit.submit();" class="btn btn-primary" role="button">
						<i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
					</a>
			    </div>
</div>
										
					<?php
						}else if($v_user_detail['form_id'] == '3'){
					?>		
						
					<div class="col-12 row mt-4">
						<div class="col-12 col-md-6">
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN H: MAKLUMAT PENYOKONG<br></b><b>Nota Penting: Penyokong hendaklah merupakan KETUA AGENSI kepada Calon</b></p>
			<form class="w-100" id="frm_shru_edit" name="frm_shru_edit" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
				<div class="col-12 row mt-4">
						<div class="col-12">
							<div class="form-group row">
								<label class="w-25 col-form-label" for="nama_penyokong">Nama:</label>
								<input class="w-75 form-control" type="text" id="nama_penyokong" name="nama_penyokong">
								<input type="hidden" name="v_id" id="v_id" value="<?php echo \U::safe_display_string($v_id);?>">
								<input type="hidden" name="v_form_id" id="v_form_id" value="<?php echo \U::safe_display_string($v_user_detail['form_id']);?>">
							</div>				
							<div class="form-group row">
								<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
								<input class="w-75 form-control" type="text" id="jawatan_penyokong" name="jawatan_penyokong">
							</div>				
							<div class="form-group row">
								<label class="w-25 col-form-label" for="alamat_pejabat_penyokong">Alamat Pejabat:</label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong1" name="alamat_pejabat_penyokong1">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong2" name="alamat_pejabat_penyokong2">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong3" name="alamat_pejabat_penyokong3">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong4" name="alamat_pejabat_penyokong4">
							</div>
							<div class="form-group row">
								<label class="w-25 col-form-label" for="no_telefon_penyokong">No. Tel. Pejabat/ Tel. Bimbit:</label>
								<input class="w-75 form-control" type="text" id="no_telefon_penyokong" name="no_telefon_penyokong">
							</div>									
						</div>
					</div>
								<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN I: ULASAN AGENSI<br></b><b>Nota Penting: Hendaklah diisi dan dilengkapkan oleh KETUA AGENSI kepada Calon sahaja</b></p>
								<div class="col-12 row mt-4">
						<div class="col-12">			
							<div class="form-group row">
			    				<textarea class="form-control" id="ulasan_ketua" name="ulasan_ketua" rows="6"></textarea>
							</div>			
						</div>
				        <div class="form-group row" style="padding-bottom: 15px">
				            <div class="col-sm-2"></div>
				     
				        </div>			
					</div>
				</div>

					<div class="col-12 col-md-6"> 
						<div class="col-12">

			<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN J : REKOMENDASI SETIAUSAHA TETAP KEMENTERIAN<br><br></b></p>
				<div class="col-12 row mt-4">
									<div class="col-12">
							<div class="form-group row">
								<label class="w-25 col-form-label" for="nama_penyokong">Nama:</label>
								<input class="w-75 form-control" type="text" id="nama_rekomendasi" name="nama_rekomendasi">
							</div>				
							<div class="form-group row">
								<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
								<input class="w-75 form-control" type="text" id="jawatan_rekomendasi" name="jawatan_rekomendasi">
							</div>				
							<div class="form-group row">
								<label class="w-25 col-form-label" for="alamat_pejabat_rekomendasi">Alamat Pejabat:</label>
			    				<textarea class="w-75 form-control" id="alamat_pejabat_rekomendasi" name="alamat_pejabat_rekomendasi" rows="6"></textarea>
							</div>
							<div class="form-group row">
								<label class="w-25 col-form-label" for="no_telefon_rekomendasi">No. Tel. Pejabat/ Tel. Bimbit:</label>
								<input class="w-75 form-control" type="text" id="no_telefon_rekomendasi" name="no_telefon_rekomendasi">
							</div>	
							<div class="form-group row">
								<label class="w-25 col-form-label" for="rekomendasi">Rekomendasi dan Komen:</label>
			    				<textarea class="w-75 form-control" id="komen_rekomendasi" name="komen_rekomendasi" rows="6"></textarea>
							</div>							
						</div>
					</div>
				</div>
			</div>
	</div>


			</form>
				
			<div class="form-group row mb-4">
			    <div class="col-sm-2"></div>
			    <div class="col-sm-10 text-right" style="padding-right: 100px;">
					<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('nomination','borang');?>" class="btn btn-danger" role="button">
						<i class="fa fa-fw fa-angle-left"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
					</a>		
					<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('nomination','route_shru', $v_id);?>" class="btn btn-danger" role="button">
						<i class="fa fa-fw fa-undo"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
					</a>
					<a href="javascript:if(validate(document.frm_shru_edit)) document.frm_shru_edit.submit();" class="btn btn-primary" role="button">
						<i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
					</a>
			    </div>
</div>		
					<?php
						}else if($v_user_detail['form_id'] == '4'){
					?>				<div class="col-12 pb-5">
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN H: MAKLUMAT PENYOKONG (RESIDEN BAHAGIAN)<br></b></p>
			<div class="col-12 row mt-4 mb-4">
			<form class="w-100" id="frm_shru_edit" name="frm_shru_edit" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
				<div class="col-12 row mt-4">
					<div class="col-12 col-md-6"> 
						<div class="col-12">
							<div class="form-group row">
								<label class="w-25 col-form-label" for="nama_penyokong">Nama:</label>
								<input class="w-75 form-control" type="text" id="nama_penyokong" name="nama_penyokong">
								<input type="hidden" name="v_id" id="v_id" value="<?php echo \U::safe_display_string($v_id);?>">
								<input type="hidden" name="v_form_id" id="v_form_id" value="<?php echo \U::safe_display_string($v_user_detail['form_id']);?>">
							</div>				
							<div class="form-group row">
								<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
								<input class="w-75 form-control" type="text" id="jawatan_penyokong" name="jawatan_penyokong">
							</div>				
							<div class="form-group row">
								<label class="w-25 col-form-label" for="alamat_pejabat_penyokong">Alamat Pejabat:</label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong1" name="alamat_pejabat_penyokong1">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong2" name="alamat_pejabat_penyokong2">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong3" name="alamat_pejabat_penyokong3">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong4" name="alamat_pejabat_penyokong4">
							</div>
							<div class="form-group row">
								<label class="w-25 col-form-label" for="no_telefon_penyokong">No. Tel. Pejabat/ Tel. Bimbit:</label>
								<input class="w-75 form-control" type="text" id="no_telefon_penyokong" name="no_telefon_penyokong">
							</div>									
						</div>
					</div>
				</div>
			</div>
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN I : ULASAN RESIDEN BAHAGIAN<br></b><b>Nota Penting: Hendaklah diisi dan dilengkapkan oleh RESIDEN BAHAGIAN selaku penyokong.</b></p>
					<div class="col-12 col-md-6"> 
						<div class="col-12">			
							<div class="form-group row">
			    				<textarea class="form-control" id="ulasan_ketua" name="ulasan_ketua" rows="6"></textarea>
							</div>			
						</div>
				        <div class="form-group row" style="padding-bottom: 15px">
				            <div class="col-sm-2"></div>
				     
				        </div>			
					</div>
			</form>
				
			<div class="form-group row mb-4">
			    <div class="col-sm-2"></div>
			    <div class="col-sm-10">
					<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('nomination','borang');?>" class="btn btn-danger" role="button">
						<i class="fa fa-fw fa-angle-left"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
					</a>		
					<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('nomination','route_shru', $v_id);?>" class="btn btn-danger" role="button">
						<i class="fa fa-fw fa-undo"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
					</a>
					<a href="javascript:if(validate(document.frm_shru_edit)) document.frm_shru_edit.submit();" class="btn btn-primary" role="button">
						<i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
					</a>
			    </div>
			</div>
			</div>
										
					<?php
						}else if($v_user_detail['form_id'] == '5'){
					?>			<div class="col-12 pb-5">
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN H: MAKLUMAT PENYOKONG<br></b><b>(Hendaklah diisi sepenuhnya oleh Ketua Organisasi sahaja)</b></p>
			<div class="col-12 row mt-4 mb-4">
			<form class="w-100" id="frm_shru_edit" name="frm_shru_edit" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
				<div class="col-12 row mt-4">
					<div class="col-12 col-md-6"> 
						<div class="col-12">
							<div class="form-group row">
								<label class="w-25 col-form-label" for="nama_penyokong">Nama:</label>
								<input class="w-75 form-control" type="text" id="nama_penyokong" name="nama_penyokong">
								<input type="hidden" name="v_id" id="v_id" value="<?php echo \U::safe_display_string($v_id);?>">
								<input type="hidden" name="v_form_id" id="v_form_id" value="<?php echo \U::safe_display_string($v_user_detail['form_id']);?>">
							</div>				
							<div class="form-group row">
								<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
								<input class="w-75 form-control" type="text" id="jawatan_penyokong" name="jawatan_penyokong">
							</div>				
							<div class="form-group row">
								<label class="w-25 col-form-label" for="alamat_pejabat_penyokong">Alamat Pejabat:</label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong1" name="alamat_pejabat_penyokong1">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong2" name="alamat_pejabat_penyokong2">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong3" name="alamat_pejabat_penyokong3">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong4" name="alamat_pejabat_penyokong4">
							</div>
							<div class="form-group row">
								<label class="w-25 col-form-label" for="no_telefon_penyokong">No. Tel. Pejabat/ Tel. Bimbit:</label>
								<input class="w-75 form-control" type="text" id="no_telefon_penyokong" name="no_telefon_penyokong">
							</div>									
						</div>
					</div>
				</div>
			</div>
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN I: ULASAN PENCADANG<br></b><b>Nota Penting: Hendaklah diisi dan dilengkapkan oleh KETUA ORGANISASI selaku penyokong</b></p>
					<div class="col-12 col-md-6"> 
						<div class="col-12">			
							<div class="form-group row">
			    				<textarea class="form-control" id="ulasan_ketua" name="ulasan_ketua" rows="6"></textarea>
							</div>			
						</div>
				        <div class="form-group row" style="padding-bottom: 15px">
				            <div class="col-sm-2"></div>
				     
				        </div>			
					</div>
			</form>
				
			<div class="form-group row mb-4">
			    <div class="col-sm-2"></div>
			    <div class="col-sm-10">
					<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('nomination','borang');?>" class="btn btn-danger" role="button">
						<i class="fa fa-fw fa-angle-left"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
					</a>		
					<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('nomination','route_shru', $v_id);?>" class="btn btn-danger" role="button">
						<i class="fa fa-fw fa-undo"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
					</a>
					<a href="javascript:if(validate(document.frm_shru_edit)) document.frm_shru_edit.submit();" class="btn btn-primary" role="button">
						<i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
					</a>
			    </div>
			</div>
			</div>
											
					<?php
						}else if($v_user_detail['form_id'] == '6'){
					?>			<div class="col-12 pb-5">
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN H: MAKLUMAT PENYOKONG<br></b><b>Nota Penting: Penyokong hendaklah merupakan KETUA AGENSI kepada dimana Calon berkhidmat</b></p>
			<div class="col-12 row mt-4 mb-4">
			<form class="w-100" id="frm_shru_edit" name="frm_shru_edit" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
				<div class="col-12 row mt-4">
					<div class="col-12 col-md-6"> 
						<div class="col-12">
							<div class="form-group row">
								<label class="w-25 col-form-label" for="nama_penyokong">Nama:</label>
								<input class="w-75 form-control" type="text" id="nama_penyokong" name="nama_penyokong">
								<input type="hidden" name="v_id" id="v_id" value="<?php echo \U::safe_display_string($v_id);?>">
								<input type="hidden" name="v_form_id" id="v_form_id" value="<?php echo \U::safe_display_string($v_user_detail['form_id']);?>">
							</div>				
							<div class="form-group row">
								<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
								<input class="w-75 form-control" type="text" id="jawatan_penyokong" name="jawatan_penyokong">
							</div>				
							<div class="form-group row">
								<label class="w-25 col-form-label" for="alamat_pejabat_penyokong">Alamat Pejabat:</label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong1" name="alamat_pejabat_penyokong1">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong2" name="alamat_pejabat_penyokong2">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong3" name="alamat_pejabat_penyokong3">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong4" name="alamat_pejabat_penyokong4">
							</div>
							<div class="form-group row">
								<label class="w-25 col-form-label" for="no_telefon_penyokong">No. Tel. Pejabat/ Tel. Bimbit:</label>
								<input class="w-75 form-control" type="text" id="no_telefon_penyokong" name="no_telefon_penyokong">
							</div>									
						</div>
					</div>
				</div>
			</div>
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN I: ULASAN PENYOKONG<br></b></p>
					<div class="col-12 col-md-6"> 
						<div class="col-12">			
							<div class="form-group row">
			    				<textarea class="form-control" id="ulasan_ketua" name="ulasan_ketua" rows="6"></textarea>
							</div>			
						</div>
				        <div class="form-group row" style="padding-bottom: 15px">
				            <div class="col-sm-2"></div>
				     
				        </div>			
					</div>
			</form>
				
			<div class="form-group row mb-4">
			    <div class="col-sm-2"></div>
			    <div class="col-sm-10">
					<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('nomination','borang');?>" class="btn btn-danger" role="button">
						<i class="fa fa-fw fa-angle-left"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
					</a>		
					<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('nomination','route_shru', $v_id);?>" class="btn btn-danger" role="button">
						<i class="fa fa-fw fa-undo"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
					</a>
					<a href="javascript:if(validate(document.frm_shru_edit)) document.frm_shru_edit.submit();" class="btn btn-primary" role="button">
						<i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
					</a>
			    </div>
			</div>
			</div>
										
					<?php
						}else if($v_user_detail['form_id'] == '7'){
					?>				<div class="col-12 pb-5">
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN H: MAKLUMAT PENYOKONG<br></b></p>
			<div class="col-12 row mt-4 mb-4">
			<form class="w-100" id="frm_shru_edit" name="frm_shru_edit" method="post" onsubmit="return validate(this);" enctype="multipart/form-data">
				<div class="col-12 row mt-4">
					<div class="col-12 col-md-6"> 
						<div class="col-12">
							<div class="form-group row">
								<label class="w-25 col-form-label" for="nama_penyokong">Nama:</label>
								<input class="w-75 form-control" type="text" id="nama_penyokong" name="nama_penyokong">
								<input type="hidden" name="v_id" id="v_id" value="<?php echo \U::safe_display_string($v_id);?>">
								<input type="hidden" name="v_form_id" id="v_form_id" value="<?php echo \U::safe_display_string($v_user_detail['form_id']);?>">
							</div>				
							<div class="form-group row">
								<label class="w-25 col-form-label" for="jawatan_pencadang">Jawatan:</label>
								<input class="w-75 form-control" type="text" id="jawatan_penyokong" name="jawatan_penyokong">
								<span style="padding-left: 200px;"><small><b>(MENTERI / MENTERI MUDA / SETIAUSAHA AGUNG / SETIAUSAHA EKSEKUTIF)</b></small></span>

							</div>				
							<div class="form-group row">
								<label class="w-25 col-form-label" for="alamat_pejabat_penyokong">Alamat Pejabat:</label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong1" name="alamat_pejabat_penyokong1">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong2" name="alamat_pejabat_penyokong2">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong3" name="alamat_pejabat_penyokong3">
			    				<label class="w-25 col-form-label" for="alamat_pejabat_penyokong"></label>
			    				<input class="w-75 form-control" id="alamat_pejabat_penyokong4" name="alamat_pejabat_penyokong4">
							</div>
							<div class="form-group row">
								<label class="w-25 col-form-label" for="no_telefon_penyokong">No. Tel. Pejabat/ Tel. Bimbit:</label>
								<input class="w-75 form-control" type="text" id="no_telefon_penyokong" name="no_telefon_penyokong">
							</div>									
						</div>
					</div>
				</div>
			</div>
			<p class="mb-4" style="padding-left: 10px; padding-top: 10px"><b>BAHAGIAN I :	ULASAN SOKONGAN MENTERI / MENTERI MUDA / SETIAUSAHA AGUNG / SETIAUSAHA EKSEKUTIF<br></b></p>
					<div class="col-12 col-md-6"> 
						<div class="col-12">			
							<div class="form-group row">
			    				<textarea class="form-control" id="ulasan_ketua" name="ulasan_ketua" rows="6"></textarea>
							</div>			
						</div>
				        <div class="form-group row" style="padding-bottom: 15px">
				            <div class="col-sm-2"></div>
				     
				        </div>			
					</div>
			</form>
				
			<div class="form-group row mb-4">
			    <div class="col-sm-2"></div>
			    <div class="col-sm-10">
					<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('nomination','borang');?>" class="btn btn-danger" role="button">
						<i class="fa fa-fw fa-angle-left"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
					</a>		
					<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('nomination','route_shru', $v_id);?>" class="btn btn-danger" role="button">
						<i class="fa fa-fw fa-undo"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_BACK'); ?>
					</a>
					<a href="javascript:if(validate(document.frm_shru_edit)) document.frm_shru_edit.submit();" class="btn btn-primary" role="button">
						<i class="fa fa-fw fa-save"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SAVE'); ?>
					</a>
			    </div>
			</div>
			</div>
										
					<?php
						}
					?>