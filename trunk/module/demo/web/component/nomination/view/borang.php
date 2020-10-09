
<div class="p-4">
	<?php
	if (isset($v_nom_info)) {
		$readonly='readonly';
		$display='d-none';
	}else{
		$readonly='';
		$display='';
	}
	if (isset($v_query)) {
		echo $v_query;
	}
	?>
	<div class="row border-bottom border-dark">
		<div class="col-12 col-md-5">
			<form>
				<div class="form-group row">
					<label class="col-3 col-form-label" for="borang">Kategori Pencalonan</label>
					<select class="col-9 form-control" id="borang" name="borang" <?php echo $readonly; ?>>
				    	<option class="<?php echo $display ?>" value="a">BORANG A - KATEGORI PERKHIDMATAN AWAM NEGERI</option>
						<option class="<?php echo $display ?>" value="b" selected>BORANG B - KATEGORI PERKHIDMATAN AWAM PERSEKUTUAN / BADAN-BADAN BERKANUN PERSEKUTUAN</option>
						<option class="<?php echo $display ?>" value="c">BORANG C - KATEGORI BADAN BERKANUN NEGERI DAN PIHAK BERKUASA TEMPATAN NEGERI</option>
						<option class="<?php echo $display ?>" value="d">BORANG D - KATEGORI KETUA MASYARAKAT / KETUA KAUM </option>
						<option class="<?php echo $display ?>" value="e">BORANG E - KATEGORI SWASTA / PERSATUAN / SUKARELA / SUKAN </option>
						<option class="<?php echo $display ?>" value="f">BORANG F - KATEGORI WARGA ASING </option>
						<option class="<?php echo $display ?>" value="g">BORANG POLITIK - KATEGORI POLITIK</option>
				    </select>
				</div>
				
			</form>
		</div>
		<div class="col-10 col-md-5 mx-0 px-0">
			
		</div>
		<div class="col-2 mx-0 px-0">
			<a href="<?php echo \E::get('obj_curr_module')->build_action_path('nomination','index') ?>" type="button" class="w-75 btn btn-grey border border-dark text-dark float-right mb-2 mr-2 mt-2 rounded-0">BACK</a>
		</div>
		<!-- <div class="col-2 mx-0 px-0">
			<a href="<?php echo \E::get('obj_curr_module')->build_action_path('nomination','index') ?>" type="button" class="w-75 btn btn-grey border border-dark text-dark float-right mb-2 mr-2 mt-2 rounded-0">BACK</a>
		</div> -->
	</div>
	<div class="col-12 mx-0 px-0 mt-4">
		<div id="div_borang_area" class="row col-12 mx-0 px-0 ">
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagianl" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('l')"><small>PENCALONAN</small></button>
			</div>			
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagiana" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('a')"><small>BAHAGIAN A</small></button>
			</div>
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagianb" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('b')"><small>BAHAGIAN B</small></button>
			</div>
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagianc" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('c')"><small>BAHAGIAN C</small></button>
			</div>
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagiand" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('d')"><small>BAHAGIAN D</small></button>
			</div>
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0" id="bahe">
				<button id="bahagiane" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('e')"><small>BAHAGIAN E</small></button>
			</div>
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0" id="bahf">
				<button id="bahagianf" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('f')"><small>BAHAGIAN F</small></button>
			</div>
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagiang" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('g')"><small>BAHAGIAN G</small></button>
			</div>
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagianj" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('j')"><small>BAHAGIAN J</small></button>
			</div>	
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagiank" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('k')"><small>BAHAGIAN K</small></button>
			</div>	
			<div class="col-6 col-md-2 col-xl-1 ml-0 pl-0">
				<button id="bahagianm" class="col-12 btn btn-grey border border-dark text-dark rounded-0 mx-0 px-0 bahagianTab" onclick="bhagian('m')"><small>ATTACHMENT</small></button>
			</div>	
		</div>
		<div id="div_form_area" class="row col-12 mx-0 px-0 "></div>
	</div>
</div>
<script type="text/javascript">
	var v_form_url = '<?php echo \E::get('obj_curr_module')->build_action_path('nomination','form_ajax'); ?>';
	var v_cookie_name = "<?php echo \U::generateUniqueCookieName(MOONLIGHT_DNS_PATH.MOONLIGHT_FOLDER_PATH); ?>_admin_form_nomination";
	$(document).ready(
		function()
		{
			v_url = getLocalStorage( v_cookie_name );
			<?php
			if (isset($v_bahagian)) {
				?>
				v_borang = getUrlQueryItem( "borang", v_url );
				// obj1 = document.getElementById('borang');
				checkAdd = '<?php echo \U::safe_display_string(isset($v_nom_info['form_id']) ? $v_nom_info['form_id'] : "");?>';
				borang1 = v_borang;
				if (checkAdd!='') {
					document.getElementById("borang").selectedIndex=((checkAdd*1)-1);
					borang1 = '<?php echo \U::safe_display_string(isset($v_form) ? $v_form : "");?>';
				}else if (borang1=='') {
					borang1='a';
				}else{
					document.getElementById('borang').value = v_borang;
				}
				// if (borang1=='b' || borang1=='c') {
				// 	$("#bahagiank").removeClass('d-none');
				// }else{
				// 	$("#bahagiank").addClass('d-none');
				// }
				bahagian2 = '<?php echo $v_bahagian ?>';
				<?php
					if (isset($v_id)) {
						?>
						bahagian3='&id=<?php echo $v_id ?>';
						<?php
					}
				?>
				v_url = v_form_url + '?borang=' + borang1 + '&bahagian=' + bahagian2 + bahagian3;
				<?php
			}
			?>
			rec_form(v_url);
			if(v_url!=""){
				v_borang = getUrlQueryItem( "borang", v_url );
				v_bahagian = getUrlQueryItem( "bahagian", v_url );

				<?php
				if (isset($v_bahagian)) {
					?>
					v_bahagian='<?php echo $v_bahagian ?>';
					<?php
				}
				?>

				if(v_bahagian!=""){
					document.getElementById("bahagian"+v_bahagian).className=document.getElementById("bahagian"+v_bahagian).className.replace(" btn-grey", " btn-primary");
				}else{
					document.getElementById("bahagiana").className=document.getElementById("bahagiana").className.replace(" btn-grey", " btn-primary");
				}
			}else{
				document.getElementById("bahagiana").className=document.getElementById("bahagiana").className.replace(" btn-grey", " btn-primary");
			}
		}
	)
	function rec_form(p_url){
		if (p_url==''){
			obj1 = document.getElementById('borang');
			borang1 = escape(obj1.value);
			obj2 = 'l';
			bahagian2 = escape(obj2);
			<?php
					if (isset($v_id)) {
						?>
						bahagian3='&id=<?php echo $v_id ?>';
						<?php
					}
				?>
			p_url = v_form_url + '?borang=' + borang1 + '&bahagian=' + bahagian2 + bahagian3;
		}
		makeGETRequest( p_url, 'div_form_area' );
		vTodaysDate = new Date();
		vTodaysDate.setDate(62);
		vExpire = vTodaysDate.toGMTString();
		setLocalStorage(v_cookie_name,p_url,vExpire);
	}
	$("#borang").change(function(){
		obj1 = document.getElementById('borang');
		borang1 = escape(obj1.value);
		obj2 = 'l';
		bahagian2 = escape(obj2);
		<?php
			if (isset($v_id)) {
				?>
				bahagian3='&id=<?php echo $v_id ?>';
				<?php
			}
		?>
		url = v_form_url + '?borang=' + borang1 + '&bahagian=' + bahagian2 + bahagian3;
		rec_form(url);

		var btns = document.getElementsByClassName("bahagianTab");

		for (var i = 0; i < btns.length; i++) {
			btns[i].className = btns[i].className.replace(" btn-primary", " btn-grey");
		 }
		 //if (borang1=='b' || borang1=='c') {
		// 	$("#bahagiank").removeClass('d-none');
		// }else{
		// 	$("#bahagiank").addClass('d-none');
		// }
		document.getElementById("bahagianl").className=document.getElementById("bahagianl").className.replace(" btn-grey", " btn-primary");

	});
	function bhagian(x){
		obj1 = document.getElementById('borang');
		borang1 = escape(obj1.value);
		obj2 = x;
		bahagian2 = escape(obj2);
		<?php
			if (isset($v_id)) {
				?>
				bahagian3='&id=<?php echo $v_id ?>';
				<?php
			}
		?>
		url = v_form_url + '?borang=' + borang1 + '&bahagian=' + bahagian2 + bahagian3;
		rec_form(url);

		var btns = document.getElementsByClassName("bahagianTab");

		for (var i = 0; i < btns.length; i++) {
			btns[i].className = btns[i].className.replace(" btn-primary", " btn-grey");
		}
		document.getElementById("bahagian"+x).className=document.getElementById("bahagian"+x).className.replace(" btn-grey", " btn-primary");
	}
	function check_taraf(){
		var taraf_lain = document.getElementById("taraf_lain");
		var taraf_lain_input = document.getElementById("taraf_lain_input");
		if (taraf_lain.checked == true) {
			taraf_lain_input.disabled=false;
		}else{
			taraf_lain_input.disabled=true;
		}
	}

    function add_markah_prestasi(){
		var counter = parseInt($("#counter1").val()) + 1;
		$("#markahPrestasi").append(
			'<tr id="row1_'+counter+'">'+
				'<td>'+
					'<input type="text" name="tahun_markah_prestasi_'+counter+'" id="tahun_markah_prestasi_'+counter+'" class="form-control"'+
				'</td>'+
				'<td>'+
					'<input type="text" name="markah_prestasi_'+counter+'" id="markah_prestasi_'+counter+'" class="form-control"'+
				'</td>'+
				'<td><input type="button" onclick="delLine_markah_prestasi('+counter+')" class="btn btn-grey"  style="height: 28px; line-height: 13px;" value="DELETE"/></td>'+
			'</tr>');
		$("#counter1").val(counter);
	}

	function delLine_markah_prestasi(no){
		$("#row1_"+no).remove();
	}

	function add_row_apc(){
		var counter = parseInt($("#counter2").val()) + 1;
		$("#apc").append(
			'<tr id="row2_'+counter+'">'+
				'<td>'+
					'<input type="text" name="apc_'+counter+'" id="apc_'+counter+'" class="form-control"'+
				'</td>'+
				'<td><input type="button" onclick="delLine_row_apc('+counter+')" class="btn btn-grey"  style="height: 28px; line-height: 13px;" value="DELETE"/></td>'+
			'</tr>');
		$("#counter2").val(counter);
	}

	function delLine_row_apc(no){
		$("#row2_"+no).remove();
	}

	function add_row_apc_above_85(){
		var counter = parseInt($("#counter3").val()) + 1;
		$("#apc_above_85").append(
			'<tr id="row3_'+counter+'">'+
				'<td>'+
					'<input type="text" name="tahun_apc_above_'+counter+'" id="tahun_apc_above_'+counter+'" class="form-control"'+
				'</td>'+
				'<td>'+
					'<input type="text" name="markah_apc_above_'+counter+'" id="markah_apc_above_'+counter+'" class="form-control"'+
				'</td>'+
				'<td><input type="button" onclick="delLine_row_apc_above_85('+counter+')" class="btn btn-grey"  style="height: 28px; line-height: 13px;" value="DELETE"/></td>'+
			'</tr>');
		$("#counter3").val(counter);
	}
	function delLine_row_apc_above_85(no){
		$("#row3_"+no).remove();
	}

	function add_jawatan_persatuan(){
		var counter = parseInt($("#counter1").val()) + 1;
		$("#PersatuanTable").append(
			'<tr id="row1_'+counter+'">'+
				'<td>'+
					'<input type="text" name="nama_persatuan_'+counter+'" id="nama_persatuan_'+counter+'" class="form-control"'+
				'</td>'+
				'<td>'+
					'<input type="text" name="jawatan_persatuan_'+counter+'" id="jawatan_persatuan_'+counter+'" class="form-control"'+
				'</td>'+
				'<td>'+
					'<input type="text" name="tahun_jawatan_persatuan_'+counter+'" id="tahun_jawatan_persatuan_'+counter+'" class="form-control"'+
				'</td>'+
				'<td><input type="button" onclick="delLine_jawatan_persatuan('+counter+')" class="btn btn-grey"  style="height: 28px; line-height: 13px;" value="DELETE"/></td>'+
			'</tr>');
		$("#counter1").val(counter);
	}

	function delLine_jawatan_persatuan(no){
		$("#row1_"+no).remove();
	}

	function add_kegiatan_sukarelawan(){
		var counter = parseInt($("#counter2").val()) + 1;
		$("#SukarelawanTable").append(
			'<tr id="row2_'+counter+'">'+
				'<td>'+
					'<input type="text" name="kegiatan_sukarela_'+counter+'" id="kegiatan_sukarela_'+counter+'" class="form-control"'+
				'</td>'+
				'<td>'+
					'<input type="text" name="peringkat_sukarela_'+counter+'" id="peringkat_sukarela_'+counter+'" class="form-control"'+
				'</td>'+
				'<td>'+
					'<input type="text" name="tahun_sukarelawan_'+counter+'" id="tahun_sukarelawan_'+counter+'" class="form-control"'+
				'</td>'+
				'<td><input type="button" onclick="delLine_kegiatan_sukarelawan('+counter+')" class="btn btn-grey"  style="height: 28px; line-height: 13px;" value="DELETE"/></td>'+
			'</tr>');
		$("#counter2").val(counter);
	}

	function delLine_kegiatan_sukarelawan(no){
		$("#row2_"+no).remove();
	}

	function add_peringkat_sukan(){
		var counter = parseInt($("#counter3").val()) + 1;
		$("#SukanTable").append(
			'<tr id="row3_'+counter+'">'+
				'<td>'+
					'<input type="text" name="jenis_sukan_'+counter+'" id="jenis_sukan_'+counter+'" class="form-control"'+
				'</td>'+
				'<td>'+
					'<input type="text" name="peringkat_sukan_'+counter+'" id="peringkat_sukan_'+counter+'" class="form-control"'+
				'</td>'+
				'<td>'+
					'<input type="text" name="tahun_sukan_'+counter+'" id="tahun_sukan_'+counter+'" class="form-control"'+
				'</td>'+
				'<td><input type="button" onclick="delLine_peringkat_sukan('+counter+')" class="btn btn-grey"  style="height: 28px; line-height: 13px;" value="DELETE"/></td>'+
			'</tr>');
		$("#counter3").val(counter);
	}

	function delLine_peringkat_sukan(no){
		$("#row3_"+no).remove();
	}


	function maklumat_Kurniaan(){
		var counter = parseInt($("#counter").val()) + 1;
		$("#maklumatKurniaan").append(
			'<tr id="row_'+counter+'">'+
				'<td>'+
					'<input type="text" name="kurniaan_drjh_kebesaran_'+counter+'" id="kurniaan_drjh_kebesaran_'+counter+'" class="form-control"'+
				'</td>'+
				'<td>'+
					'<input type="text" name="kurniaan_negara_'+counter+'" id="kurniaan_negara_'+counter+'" class="form-control"'+
				'</td>'+
				'<td>'+
					'<input type="text" name="kurniaan_tahun_'+counter+'" id="kurniaan_tahun_'+counter+'" class="form-control"'+
				'</td>'+
				'<td><input type="button" onclick="delLine_maklumat_Kurniaan('+counter+')" class="btn btn-grey"  style="height: 28px; line-height: 13px;" value="DELETE"/></td>'+
			'</tr>');
		$("#counter").val(counter);
	}
	function delLine_maklumat_Kurniaan(no){
		$("#row_"+no).remove();
	}
	function add_row_maklumat_pencalonan_terdahulu(){
		var counter = parseInt($("#counter").val()) + 1;
		$("#maklumatPencalonanTerdahulu").append(
			'<tr id="row_'+counter+'">'+
				'<td>'+
					'<input type="text" name="terdahulu_drjh_kebesaran_'+counter+'" id="terdahulu_drjh_kebesaran_'+counter+'" class="form-control"'+
				'</td>'+
				'<td>'+
					'<input type="text" name="terdahulu_negara_'+counter+'" id="terdahulu_negara_'+counter+'" class="form-control"'+
				'</td>'+
				'<td>'+
					'<input type="text" name="terdahulu_tahun_'+counter+'" id="terdahulu_tahun_'+counter+'" class="form-control"'+
				'</td>'+
				'<td><input type="button" onclick="delLine_row_maklumat_pencalonan_terdahulu('+counter+')" class="btn btn-grey"  style="height: 28px; line-height: 13px;" value="DELETE"/></td>'+
			'</tr>');
		$("#counter").val(counter);
	}
	function delLine_row_maklumat_pencalonan_terdahulu(no){
		$("#row_"+no).remove();
	}
	function add_row_kegiatan_luar_semasa(){
		var counter = parseInt($("#counter").val()) + 1;
		$("#kegiatanLuarSemasa").append(
			'<tr id="row_'+counter+'">'+
				'<td>'+
					'<input type="text" name="pertubuhan_'+counter+'" id="pertubuhan_'+counter+'" class="form-control"'+
				'</td>'+
				'<td>'+
					'<input type="text" name="jawatan_'+counter+'" id="jawatan_'+counter+'" class="form-control"'+
				'</td>'+
				'<td>'+
					'<input type="text" name="tempoh_'+counter+'" id="tempoh_'+counter+'" class="form-control"'+
				'</td>'+
				'<td><input type="button" onclick="delLine_row_kegiatan_luar_semasa('+counter+')" class="btn btn-grey"  style="height: 28px; line-height: 13px;" value="DELETE"/></td>'+
			'</tr>');
		$("#counter").val(counter);
	}
	function delLine_row_kegiatan_luar_semasa(no){
		$("#row_"+no).remove();
	}

	function add_row_kegiatan_luar_semasa_negara(){
		var counter = parseInt($("#counter").val()) + 1;
		$("#kegiatanLuarSemasaNegara").append(
			'<tr id="row_'+counter+'">'+
				'<td>'+
					'<input type="text" name="persatuan_'+counter+'" id="persatuan_'+counter+'" class="form-control"'+
				'</td>'+
				'<td>'+
					'<input type="text" name="jawatan_'+counter+'" id="jawatan_'+counter+'" class="form-control"'+
				'</td>'+
				'<td>'+
					'<input type="text" name="negara_'+counter+'" id="negara_'+counter+'" class="form-control"'+
				'</td>'+
				'<td>'+
					'<input type="text" name="tempoh_'+counter+'" id="tempoh_'+counter+'" class="form-control"'+
				'</td>'+
				'<td><input type="button" onclick="delLine_row_kegiatan_luar_semasa_negara('+counter+')" class="btn btn-grey"  style="height: 28px; line-height: 13px;" value="DELETE"/></td>'+
			'</tr>');
		$("#counter").val(counter);
	}
	function delLine_row_kegiatan_luar_semasa_negara(no){
		$("#row_"+no).remove();
	}

	function add_jawatan_parti(){
		var counter = parseInt($("#counter").val()) + 1;
		$("#JawatanParti").append(
			'<tr id="row_'+counter+'">'+
				'<td>'+
					'<input type="text" name="jawatan_parti_'+counter+'" id="jawatan_parti_'+counter+'" class="form-control"'+
				'</td>'+
				'<td>'+
					'<input type="text" name="jawatan_tahun_'+counter+'" id="jawatan_tahun_'+counter+'" class="form-control"'+
				'</td>'+
				'<td><input type="button" onclick="delLine_row_jawatan_parti('+counter+')" class="btn btn-grey"  style="height: 28px; line-height: 13px;" value="DELETE"/></td>'+
			'</tr>');
		$("#counter").val(counter);
	}
	function delLine_row_jawatan_parti(no){
		$("#row_"+no).remove();
	}

	function add_row_sumbangan_jabatan(){
		var counter = parseInt($("#counter1").val()) + 1;
		$("#sumbgnKpdJbtn").append(
			'<tr id="row1_'+counter+'">'+
				'<td>'+
					'<input type="text" name="smbgn_kpd_jbtn_'+counter+'" id="smbgn_kpd_jbtn_'+counter+'" class="form-control"'+
				'</td>'+
				'<td><input type="button" onclick="delLine_row_sumbangan_jabatan('+counter+')" class="btn btn-grey"  style="height: 28px; line-height: 13px;" value="DELETE"/></td>'+
			'</tr>');
		$("#counter1").val(counter);
	}
	function delLine_row_sumbangan_jabatan(no){
		$("#row1_"+no).remove();
	}
	function add_row_sumbangan_masyarakat(){
		var counter = parseInt($("#counter2").val()) + 1;
		$("#sumbgnKpdMsyrkt").append(
			'<tr id="row2_'+counter+'">'+
				'<td>'+
					'<input type="text" name="smbgn_kpd_msyrkt_'+counter+'" id="smbgn_kpd_msyrkt_'+counter+'" class="form-control"'+
				'</td>'+
				'<td><input type="button" onclick="delLine_row_sumbangan_masyarakat('+counter+')" class="btn btn-grey"  style="height: 28px; line-height: 13px;" value="DELETE"/></td>'+
			'</tr>');
		$("#counter2").val(counter);
	}
	function delLine_row_sumbangan_masyarakat(no){
		$("#row2_"+no).remove();
	}
	function add_row_sumbangan_negara(){
		var counter = parseInt($("#counter4").val()) + 1;
		$("#sumbgnKpdNgra").append(
			'<tr id="row4_'+counter+'">'+
				'<td>'+
					'<input type="text" name="smbgn_kpd_ngra_'+counter+'" id="smbgn_kpd_ngra_'+counter+'" class="form-control"'+
				'</td>'+
				'<td><input type="button" onclick="delLine_row_sumbangan_negara('+counter+')" class="btn btn-grey"  style="height: 28px; line-height: 13px;" value="DELETE"/></td>'+
			'</tr>');
		$("#counter4").val(counter);
	}
	function delLine_row_sumbangan_negara(no){
		$("#row4_"+no).remove();
	}
	function add_row_sumbangan_negeri(){
		var counter = parseInt($("#counter3").val()) + 1;
		$("#sumbgnKpdNgri").append(
			'<tr id="row3_'+counter+'">'+
				'<td>'+
					'<input type="text" name="smbgn_kpd_ngri_'+counter+'" id="smbgn_kpd_ngri_'+counter+'" class="form-control"'+
				'</td>'+
				'<td><input type="button" onclick="delLine_row_sumbangan_negeri('+counter+')" class="btn btn-grey"  style="height: 28px; line-height: 13px;" value="DELETE"/></td>'+
			'</tr>');
		$("#counter3").val(counter);
	}
	function delLine_row_sumbangan_negeri(no){
		$("#row3_"+no).remove();
	}

	function add_row_pnghrgaan_dianugerah(){
		var counter = parseInt($("#counter5").val()) + 1;
		$("#pnghrgaanAnugerah").append(
			'<tr id="row5_'+counter+'">'+
				'<td>'+
					'<input type="text" name="pghrgaan_dianugerah_'+counter+'" id="pghrgaan_dianugerah_'+counter+'" class="form-control"'+
				'</td>'+
				'<td><input type="button" onclick="delLine_row_pnghrgaan_dianugerah('+counter+')" class="btn btn-grey"  style="height: 28px; line-height: 13px;" value="DELETE"/></td>'+
			'</tr>');
		$("#counter5").val(counter);
	}
	function delLine_row_pnghrgaan_dianugerah(no){
		$("#row5_"+no).remove();
	}
	
	function get_singkatan(no_folio){
		var pingat = document.getElementById("pingat").value;
		var singkatan_url = '<?php echo \E::get('obj_curr_module')->build_action_path('nomination','get_singkatan'); ?>?pingat=' + pingat;
		var no_folio_url = '<?php echo \E::get('obj_curr_module')->build_action_path('nomination','get_no_folio'); ?>?no_folio=' + no_folio + '&pingat=' + pingat;
		makeGETRequest( singkatan_url, 'singkatan_area' );
		makeGETRequest( no_folio_url, 'no_folio' );
	}
	function filename(myfile){
		// alert();
		var file = myfile.files[0];  
   		var filename = file.name;
		document.getElementById("fileLabel").innerHTML=filename;
	}
	function checkUmur(umur){
		const div = $('#umurDiv');
		
		if (umur.value<45) {

			div.find('span').remove()

			div.append('<span class="error">Age must be above 45 years old</span>');

			console.log(div.html());

			$("#umur").addClass('error');
		}else{
			div.find('span').remove()
			$("#umur").removeClass('error');	
		}
		
	}
	function checkTempohBerkhidmat(tempoh){
		// alert();
		const div = $('#tempohBerkhidmat');
		
		if (tempoh.value<45) {

			div.find('span').remove()
			
			div.append('<span class="error">Tempoh Berkhidmat must be above 6 years</span>');

			console.log(div.html());

			$("#tempoh_berkhidmat_sarawak").addClass('error');
		}else{
			div.find('span').remove()
			$("#tempoh_berkhidmat_sarawak").removeClass('error');	
		}
		
	}
</script>

		<?PHP
		\I::load_error();
		?>