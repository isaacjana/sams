<?php

// echo \V::load_view( $this->get_view_file_path('menu','share');exit();
// Check for access right
// $v_access = \E::get('obj_curr_module')->get_right_to_access('add');
// if(!$v_access){
// 	\V::append_data( 'body', \V::load_box( \E::get( 'obj_curr_module_lang')->get('MODULE_AUTHORISED_ERROR'), \V::load_view( $this->get_view_file_path( 'msg_not_authorised', 'share' ), $v_object, $v_var ), 'box_form.php' ) );
// 	\V::output_view();
// 	exit;
// }

$v_param = $this->get_param();
if (isset($v_param[1])) {
	$v_id = $v_param[0];
	$v_bahagian = $v_param[1];
	$v_var['bahagian'] = $v_bahagian;
	$v_var['id'] = $v_id;
}
$v_check_table = \E::get('obj_curr_module')->nomination_check_nom_profile($v_id);
if ($v_check_table) {
	$v_nom_info = \E::get('obj_curr_module')->nomination_get_bahagian_a($v_id);
	$v_var['nom_info']=$v_nom_info;
	$v_form = 'a';
	for ($i=1; $i < $v_nom_info['form_id']; $i++) { 
		$v_form++;
	}
	$v_var['form'] = $v_form;
}
// $v_tmp_list = \E::get( 'obj_curr_module')->user_group_list();
// $v_group_list['no_access'] = "[No Access]";
// if(is_array($v_tmp_list)){
// 	for($v_c=0; $v_c<count($v_tmp_list); $v_c++){
// 		$v_group_list[$v_tmp_list[$v_c]['kwd_code']] = $v_tmp_list[$v_c]['kwd_value'];
// 	}
// }

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	foreach($_POST as $v_key => $v_value) {
		$_POST[$v_key] = trim($v_value);
	}

	if ($_POST['bahagian_borang'] == 'l') {
		
		//Full name compulsory check
		\I::check("COMPULSORY", 'nama_penuh', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));

		//ic_baru compulsory check
		\I::check("COMPULSORY", 'ic_baru', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));

		//jabatan compulsory check
		\I::check("COMPULSORY", 'jabatan', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));

		//pingat compulsory check
		\I::check("COMPULSORY", 'pingat', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));

		if (!\I::is_error()) {

			//$v_add["calon_gambar"]= $_POST["calon_gambar"];
			$v_att['att_name'] = $_FILES['calon_gambar'] ['name'];
			$v_att['att_size'] = $_FILES['calon_gambar'] ['size'];
			$v_att['att_type'] = $_FILES['calon_gambar'] ['type'];
			$v_att['nom_id'] = $_POST["nom_id"];
			

			// unset($v_add);
			$v_nom_id = $_POST["nom_id"];

			$v_add['nom_name'] = $_POST['nama_penuh'];
			$v_add['ic_baru'] = $_POST['ic_baru'];
			$v_add['jabatan'] = $_POST['jabatan'];
			$v_add['pingat'] = $_POST['pingat'];
			$v_add['nom_id'] = $_POST['nom_id'];
			$v_add['awdc_category_id'] = $_POST['awdc_category_id'];
			$v_add['form_id'] = $_POST['form_id'];
			$v_add['awd_type_id'] = $_POST['awd_type_id'];
			$v_add['nom_folio_no'] = $_POST['nom_folio_no'];
			$v_add['pingat'] = $_POST['pingat'];
			$v_add['_rec_status'] = "SHOW";

			$v_check_table = \E::get('obj_curr_module')->nomination_check_nom_profile($v_nom_id);
			if ($v_check_table) {
				$v_bahagian_a_data = \E::get('obj_curr_module')->nomination_get_bahagian_a($v_nom_id);
				if ($v_bahagian_a_data["nom_folio_no"]=='') {
					\E::get('obj_curr_module')->nomination_update_folio_no($v_add['form_id']);
				}
				//update
				\E::get('obj_curr_module')->nomination_update_pencalonan($v_add);

				$v_att_id=\E::get('obj_curr_module')->nomination_attachment_add($v_att);
				
				//Attachment upload
				// tbl_id can be composite with attachment table ID and master record ID
				$v_table_info['tbl_id'] = $v_att_id;
				$v_table_info['tbl_name'] = "t_nom_attachment";
				$v_table_info['_rec_created_by'] = \E::get_session('usr_id');
				$v_obj_setting['obj'] = \E::get('obj_curr_module');
				//$_FILES['doc_file'] is the uploaded file
				$v_att_info = \A::attachment_upload($v_obj_setting, $_FILES['calon_gambar'], $v_table_info);
				if (!\E::get('obj_curr_module')->nomination_check_att_doc($v_nom_id)) {
					\E::get('obj_curr_module')->nomination_att_doc_create($v_att);
				}
				$v_att['doc_type']='img';
				$v_att['sftp_id']=$v_att_info['id'];
				$v_att['sftp_name']=$v_att_info['name'];
				$v_att['nom_id'] = $_POST["nom_id"];
				\E::get('obj_curr_module')->nomination_att_doc_update($v_att);
				// $v_var['query']=$v_query;
			}else{
				//insert
				$v_att_id=\E::get('obj_curr_module')->nomination_attachment_add($v_att);
				if (!\E::get('obj_curr_module')->nomination_check_att_doc($v_nom_id)) {
					\E::get('obj_curr_module')->nomination_att_doc_create($v_att);
				}
				unset($v_att);
				//Attachment upload
				// tbl_id can be composite with attachment table ID and master record ID
				$v_table_info['tbl_id'] = $v_att_id;
				$v_table_info['tbl_name'] = "t_nom_attachment";
				$v_table_info['_rec_created_by'] = \E::get_session('usr_id');
				$v_obj_setting['obj'] = \E::get('obj_curr_module');
				//$_FILES['doc_file'] is the uploaded file
				$v_att_info = \A::attachment_upload($v_obj_setting, $_FILES['calon_gambar'], $v_table_info);
				$v_att['doc_type']='img';
				$v_att['sftp_id']=$v_att_info['id'];
				$v_att['sftp_name']=$v_att_info['name'];
				$v_att['nom_id'] = $_POST["nom_id"];
				\E::get('obj_curr_module')->nomination_att_doc_update($v_att);
				\E::get('obj_curr_module')->nomination_add_pencalonan($v_add);
				\E::get('obj_curr_module')->nomination_update_folio_no($v_add['form_id']);
			}
			$v_usr_id[0]=$v_id;
			$v_usr_id[1]='a';

			header('location: ' . \E::get('obj_curr_module')->build_action_path('nomination','borang',$v_usr_id));
			exit();
		}
	}elseif ($_POST['bahagian_borang'] == 'm'){
			$v_att['att_name'] = $_FILES['SPRMFile'] ['name'];
			$v_att['att_size'] = $_FILES['SPRMFile'] ['size'];
			$v_att['att_type'] = $_FILES['SPRMFile'] ['type'];
			$v_att['nom_id'] = $_POST["nom_id"];

			$v_att_id=\E::get('obj_curr_module')->nomination_attachment_add($v_att);

			//Attachment upload
			// tbl_id can be composite with attachment table ID and master record ID
			$v_table_info['tbl_id'] = $v_att_id;
			$v_table_info['tbl_name'] = "t_nom_attachment";
			$v_table_info['_rec_created_by'] = \E::get_session('usr_id');
			$v_obj_setting['obj'] = \E::get('obj_curr_module');
			//$_FILES['doc_file'] is the uploaded file
			$v_att_info = \A::attachment_upload($v_obj_setting, $_FILES['SPRMFile'], $v_table_info);
			if (!\E::get('obj_curr_module')->nomination_check_att_doc($_POST["nom_id"])) {
				\E::get('obj_curr_module')->nomination_att_doc_create($v_att);
			}
			$v_att['doc_type']='doc';
			$v_att['sftp_id']=$v_att_info['id'];
			$v_att['sftp_name']=$v_att_info['name'];
			$v_att['nom_id'] = $_POST["nom_id"];
			\E::get('obj_curr_module')->nomination_att_doc_update($v_att);

			$nom_list_info = \E::get( 'obj_curr_module')->nomination_user_list();
			$v_sender = 'afiqruzaini96@gmail.com';
			$v_to = 'codename352@gmail.com';
			$v_message = "Hi,

			Please be informed that a nomination was submitted in SAMS. The details as follows:

			No. Folio: ".$nom_list_info['nom_folio_no']." 
			Nama: ".$nom_list_info['nom_name']."
			Tarikh Dicadang: ".$nom_list_info['_rec_created_on']." ";
			\U::send_mail($v_sender, $v_to, $subject="Pencalonan Baru", $v_message, $cc="", $ishtml="Yes", $bcc="");


			$v_usr_id[0]=$v_id;
			$v_usr_id[1]='a';

			header('location: ' . \E::get('obj_curr_module')->build_action_path('nomination','borang',$v_usr_id));
			exit();

	}elseif ($_POST['bahagian_borang'] == 'a') {
		//Full name compulsory check
		\I::check("COMPULSORY", 'nama_penuh', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));

		//Tarikh Lahir compulsary check
		\I::check("COMPULSORY", 'tarikh_lahir', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));

		//umur compulsary check
		\I::check("COMPULSORY", 'umur', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));

		//keturunan compulsary check
		\I::check("COMPULSORY", 'keturunan', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));
		
		// Email validation
		if(\I::check("COMPULSORY", 'alamat_email', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'))){
			\I::check("EMAIL", 'alamat_email', \E::get("obj_kernel_lang")->get('ERR_JS_INVALID_EMAIL'));
		}

		if(!\I::is_error()){
			
			$v_add['nom_id']=$$v_id;
			$v_add['awdc_category_id'] = '1';
			$v_add['form_id'] = $_POST['form_id'];
			$v_add['nom_name'] = $_POST['nama_penuh'];
			$v_add['nom_title_designation'] = $_POST['gelaran'];
			$v_add['nom_old_ic'] = $_POST['ic_lama'];
			$v_add['nom_new_ic'] = $_POST['ic_baru'];
			$v_add['nom_passport_no'] = $_POST['passport_no'];
			$v_add['nom_passport_color'] = $_POST['passport_color'];
			$v_add['nom_gender'] = $_POST['jantina'];
			$v_add['nom_dob'] = $_POST['tarikh_lahir'];
			$v_add['nom_age'] = $_POST['umur'];
			$v_add['race_id'] = $_POST['keturunan'];
			$v_add['nom_marital_status'] = $_POST['taraf_perkahwinan'];
			$v_add['nom_email'] = $_POST['alamat_email'];
			$v_add['nom_address_1'] = $_POST['alamat_rumah1'];
			$v_add['nom_address_2'] = $_POST['alamat_rumah2'];
			$v_add['nom_address_3'] = $_POST['alamat_rumah3'];
			$v_add['nom_address_4'] = $_POST['alamat_rumah4'];
			$v_add['nom_postcode'] = $_POST['poskod'];
			$v_add['city_id'] = $_POST['bandar'];
			$v_add['division_id'] = $_POST['bahagian'];
			$v_add['state_id'] = $_POST['negeri'];
			$v_add['nom_contact'] = $_POST['telefon_rumah'];
			$v_add['nom_mobile'] = $_POST['telefon_bimbit'];
			$v_add['nom_status'] = '1';
			$v_add['nationality'] = $_POST['kewarganegaraan'];
			$v_add['nom_pob'] = $_POST['tempat_lahir'];
			$v_add['nom_contact_office'] = $_POST['telefon_pejabat'];
			$v_add['nom_address_origin_1'] = $_POST['alamat_rumah_ngr_asal1'];
			$v_add['nom_address_origin_2'] = $_POST['alamat_rumah_ngr_asal2'];
			$v_add['nom_address_origin_3'] = $_POST['alamat_rumah_ngr_asal3'];
			$v_add['nom_address_origin_4'] = $_POST['alamat_rumah_ngr_asal4'];
			$v_add['nom_address_office_1'] = $_POST['alamat_pejabat1'];
			$v_add['nom_address_office_2'] = $_POST['alamat_pejabat2'];
			$v_add['nom_address_office_3'] = $_POST['alamat_pejabat3'];
			$v_add['nom_address_office_4'] = $_POST['alamat_pejabat4'];


			$v_check_table = \E::get('obj_curr_module')->nomination_check_nom_profile($v_param['id']);
			if ($v_check_table) {
				$v_usr_id[0] = \E::get('obj_curr_module')->nomination_edit_bahagian_a($v_add);
				unset($v_add);
			}else{
				$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_bahagian_a($v_add);
				unset($v_add);
				// $v_var['query']=$v_usr_id[0];
			}
			
			
			$v_usr_id[1]='b';

			header('location: ' . \E::get('obj_curr_module')->build_action_path('nomination','borang',$v_usr_id));
			exit();
		}
	}elseif ($_POST['bahagian_borang'] == 'b') {
		//Full name compulsory check
		//\I::check("COMPULSORY", 'taraf_jawatan', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));


		//Tarikh Lahir compulsary check
		//\I::check("COMPULSORY", 'taraf_pelantikan', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));

		//umur compulsary check
		//\I::check("COMPULSORY", 'klasifikasi_perkhidmatan', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));

		//keturunan compulsary check
		//\I::check("COMPULSORY", 'kump_perkhidmatan', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));

		//\I::check("COMPULSORY", 'tind_undang', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));
		
		// // Email validation
		// if(\I::check("COMPULSORY", 'alamat_email', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'))){
		// 	\I::check("EMAIL", 'alamat_email', \E::get("obj_kernel_lang")->get('ERR_JS_INVALID_EMAIL'));
		// }

		if(!\I::is_error()){
			
			$v_add['nom_id'] = $_POST['nom_id'];
			$v_add['nom_organization'] = $_POST['jbtn_skrg'];
			$v_add['first_app_date'] = $_POST['tarikh_lantikan_pertama'];
			$v_add['app_date_service'] = $_POST['tarikh_lantikan_sekarang'];
			$v_add['job_title'] = $_POST['gelaran'];
			$v_add['job_level'] = $_POST['taraf_jawatan'];
			$v_add['app_level'] = $_POST['taraf_pelantikan'];
			$v_add['service_class'] = $_POST['klasifikasi_perkhidmatan'];
			$v_add['service_group'] = $_POST['kump_perkhidmatan'];
			$v_add['job_grade'] = $_POST['gred_jawatan'];
			$v_add['job_now'] = $_POST['pekerjaan_skrg'];
			$v_add['jurisdiction_area'] = $_POST['kwsn_bidang_kuasa'];
			$v_add['small_district'] = $_POST['daerah_kecil'];
			$v_add['district_id'] = $_POST['daerah'];
			$v_add['division_id'] = $_POST['bahagian'];
			$v_add['gov_service_year'] = $_POST['tempoh_berkhidmat_krjaan_negeri'];
			$v_add['sarawak_service_year'] = $_POST['tempoh_berkhidmat_sarawak'];
			$v_add['residency_year'] = $_POST['tempoh_menetap'];
			$v_add['department'] = '';
			$v_add['station'] = $_POST['stesen'];
			$v_add['station_loc'] = '';
			$v_add['station_year'] = $_POST['tempoh_berkhidmat_stesen_skrg'];
			$v_add['office_address_1'] = $_POST['alamat_pjbt_skrg1'];
			$v_add['office_address_2'] = $_POST['alamat_pjbt_skrg2'];
			$v_add['office_address_3'] = $_POST['alamat_pjbt_skrg3'];
			$v_add['office_address_4'] = $_POST['alamat_pjbt_skrg4'];
			$v_add['office_contact'] = $_POST['telefon_pejabat'];
			$v_add['displinary_action'] = $_POST['tind_undang'];
			$v_add['_rec_created_on'] = 'A';
			$v_add['_rec_created_by'] = \E::get_session('usr_id');
			$v_add['_rec_status'] = 'SHOW';


			$v_check_bahagian_b = \E::get('obj_curr_module')->nomination_check_bahagian_b($_POST['nom_id']);
			if ($v_check_bahagian_b) {
				$v_query=\E::get('obj_curr_module')->nomination_edit_bahagian_b($v_add);
				$v_var['query']=$v_query;
			}else{
				$v_query=\E::get('obj_curr_module')->nomination_add_bahagian_b($v_add);
				$v_var['query']=$v_query;
			}
			
			$v_usr_id[0] = $_POST['nom_id'];
			unset($v_add);
			$v_usr_id[1]='c';

			header('location: ' . \E::get('obj_curr_module')->build_action_path('nomination','borang',$v_usr_id));
			exit();
		}
	}elseif ($_POST['bahagian_borang'] == 'c') {
		// \I::check("COMPULSORY", 'tahun_markah_prestasi_1', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));
		// \I::check("COMPULSORY", 'markah_prestasi_1', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));


		// if(!\I::is_error()){
			if ($_POST['type1'] == 'performance') {
				for($v_item = 1; $v_item <= $_POST['counter1']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['perf_year'] = empty($_POST['tahun_markah_prestasi_'.$v_item])?'':$_POST['tahun_markah_prestasi_'.$v_item];
					$v_add['perf_mark'] = empty($_POST['markah_prestasi_'.$v_item])?'':$_POST['markah_prestasi_'.$v_item];
					$v_add['_rec_created_on'] = '1';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';

					if(!empty($v_add['perf_year'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_performance($v_add);	
					}
				}
			}if ($_POST['type2'] == 'apc') {
				for($v_item = 1; $v_item <= $_POST['counter2']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['nom_year'] = empty($_POST['apc_'.$v_item])?'':$_POST['apc_'.$v_item];
					$v_add['nom_mark'] = '';
					$v_add['_rec_created_on'] = 'A';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';


					if(!empty($v_add['nom_year'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_apc($v_add);	
					}
				}
			}if ($_POST['type3'] == 'overmark') {
				for($v_item = 1; $v_item <= $_POST['counter3']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['over_year'] = empty($_POST['tahun_apc_above_'.$v_item])?'':$_POST['tahun_apc_above_'.$v_item];
					$v_add['over_mark'] = empty($_POST['markah_apc_above_'.$v_item])?'':$_POST['markah_apc_above_'.$v_item];
					$v_add['_rec_created_on'] = 'A';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';


					if(!empty($v_add['over_year'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_over_mark($v_add);	
					}
				}
			}if ($_POST['type4'] == 'association') {
				for($v_item = 1; $v_item <= $_POST['counter1']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['association_name'] = empty($_POST['nama_persatuan_'.$v_item])?'':$_POST['nama_persatuan_'.$v_item];
					$v_add['association_position'] = empty($_POST['jawatan_persatuan_'.$v_item])?'':$_POST['jawatan_persatuan_'.$v_item];
					$v_add['association_year'] = empty($_POST['tahun_jawatan_persatuan_'.$v_item])?'':$_POST['tahun_jawatan_persatuan_'.$v_item];
					$v_add['_rec_created_on'] = 'A';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';


					if(!empty($v_add['association_name'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_association($v_add);	
					}
				}
			}if ($_POST['type5'] == 'volunteer') {
				for($v_item = 1; $v_item <= $_POST['counter2']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['activity'] = empty($_POST['kegiatan_sukarela_'.$v_item])?'':$_POST['kegiatan_sukarela_'.$v_item];
					$v_add['peringkat'] = empty($_POST['peringkat_sukarela_'.$v_item])?'':$_POST['peringkat_sukarela_'.$v_item];
					$v_add['volunteer_year'] = empty($_POST['tahun_sukarelawan_'.$v_item])?'':$_POST['tahun_sukarelawan_'.$v_item];
					$v_add['_rec_created_on'] = 'A';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';


					if(!empty($v_add['activity'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_volunteer($v_add);	
					}
				}
			}if ($_POST['type6'] == 'activity') {
				for($v_item = 1; $v_item <= $_POST['counter3']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['sport_type'] = empty($_POST['jenis_sukan_'.$v_item])?'':$_POST['jenis_sukan_'.$v_item];
					$v_add['peringkat'] = empty($_POST['peringkat_sukan_'.$v_item])?'':$_POST['peringkat_sukan_'.$v_item];
					$v_add['sport_year'] = empty($_POST['tahun_sukan_'.$v_item])?'':$_POST['tahun_sukan_'.$v_item];
					$v_add['_rec_created_on'] = 'A';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';


					if(!empty($v_add['sport_type'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_sport($v_add);	
					}
				}
			}if ($_POST['type7'] == 'kurniaan') {
			for($v_item = 1; $v_item <= $_POST['counter']; $v_item++ ){
				$v_add['nom_id'] = '1';
				$v_add['award_title'] = empty($_POST['kurniaan_drjh_kebesaran_'.$v_item])?'':$_POST['kurniaan_drjh_kebesaran_'.$v_item];
				$v_add['negara_negeri'] = empty($_POST['kurniaan_negara_'.$v_item])?'':$_POST['kurniaan_negara_'.$v_item];
				$v_add['nom_year'] = empty($_POST['kurniaan_tahun_'.$v_item])?'':$_POST['kurniaan_tahun_'.$v_item];
				$v_add['nom_status'] = 'BERJAYA';
				$v_add['_rec_created_on'] = '1';
				$v_add['_rec_created_by'] = \E::get_session('usr_id');
				$v_add['_rec_status'] = 'SHOW';

				if(!empty($v_add['award_title'])){
					$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_history($v_add);	
				}
				}
			}if ($_POST['type8'] == 'jawatanparti') {
				for($v_item = 1; $v_item <= $_POST['counter']; $v_item++ ){
				$v_add['nom_id'] = '1';
				$v_add['politic_position'] = empty($_POST['jawatan_parti_'.$v_item])?'':$_POST['jawatan_parti_'.$v_item];
				$v_add['politic_year'] = empty($_POST['jawatan_tahun_'.$v_item])?'':$_POST['jawatan_tahun_'.$v_item];
				$v_add['_rec_created_on'] = '1';
				$v_add['_rec_created_by'] = \E::get_session('usr_id');
				$v_add['_rec_status'] = 'SHOW';

					if(!empty($v_add['politic_position'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_politic($v_add);	
					}
				}
			}

			$v_usr_id[1]='d';

			header('location: ' . \E::get('obj_curr_module')->build_action_path('nomination','borang',$v_usr_id));
			exit();
		// }
	}elseif ($_POST['bahagian_borang'] == 'd') {

			for($v_item = 1; $v_item <= $_POST['counter']; $v_item++ ){
				$v_add['nom_id'] = '1';
				$v_add['award_title'] = empty($_POST['kurniaan_drjh_kebesaran_'.$v_item])?'':$_POST['kurniaan_drjh_kebesaran_'.$v_item];
				$v_add['negara_negeri'] = empty($_POST['kurniaan_negara_'.$v_item])?'':$_POST['kurniaan_negara_'.$v_item];
				$v_add['nom_year'] = empty($_POST['kurniaan_tahun_'.$v_item])?'':$_POST['kurniaan_tahun_'.$v_item];
				$v_add['nom_status'] = 'BERJAYA';
				$v_add['_rec_created_on'] = '1';
				$v_add['_rec_created_by'] = \E::get_session('usr_id');
				$v_add['_rec_status'] = 'SHOW';

				if(!empty($v_add['award_title'])){
					$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_history($v_add);	
				}
			}

			if(($_POST['type'] == 'darjah')){
						for($v_item = 1; $v_item <= $_POST['counter']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['award_title'] = empty($_POST['terdahulu_drjh_kebesaran_'.$v_item])?'':$_POST['terdahulu_drjh_kebesaran_'.$v_item];
					$v_add['negara_negeri'] = empty($_POST['terdahulu_negara_'.$v_item])?'':$_POST['terdahulu_negara_'.$v_item];
					$v_add['nom_year'] = empty($_POST['terdahulu_tahun_'.$v_item])?'':$_POST['terdahulu_tahun_'.$v_item];
					$v_add['nom_status'] = 'TAKBERJAYA';
					$v_add['_rec_created_on'] = '1';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';

					if(!empty($v_add['award_title'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_history($v_add);	
					}
				}
			}
			$v_usr_id[1]='e';

			header('location: ' . \E::get('obj_curr_module')->build_action_path('nomination','borang',$v_usr_id));
			exit();

	}elseif ($_POST['bahagian_borang'] == 'e') {
		for($v_item = 1; $v_item <= $_POST['counter']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['award_title'] = empty($_POST['terdahulu_drjh_kebesaran_'.$v_item])?'':$_POST['terdahulu_drjh_kebesaran_'.$v_item];
					$v_add['negara_negeri'] = empty($_POST['terdahulu_negara_'.$v_item])?'':$_POST['terdahulu_negara_'.$v_item];
					$v_add['nom_year'] = empty($_POST['terdahulu_tahun_'.$v_item])?'':$_POST['terdahulu_tahun_'.$v_item];
					$v_add['nom_status'] = 'TAKBERJAYA';
					$v_add['_rec_created_on'] = '1';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';

					if(!empty($v_add['award_title'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_history($v_add);	
					}
				}
			$v_usr_id[1]='f';

			header('location: ' . \E::get('obj_curr_module')->build_action_path('nomination','borang',$v_usr_id));
			exit();
	}elseif ($_POST['bahagian_borang'] == 'f') {
			for($v_item = 1; $v_item <= $_POST['counter']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['act_organization'] = empty($_POST['pertubuhan_'.$v_item])?'':$_POST['pertubuhan_'.$v_item];
					$v_add['act_position'] = empty($_POST['jawatan_'.$v_item])?'':$_POST['jawatan_'.$v_item];
					$v_add['act_year'] = empty($_POST['tempoh_'.$v_item])?'':$_POST['tempoh_'.$v_item];
					$v_add['_rec_created_on'] = 'A';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';


					if(!empty($v_add['act_organization'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_bahagian_f($v_add);	
					}
				}

			if(($_POST['type'] == 'Jawatan')){
			for($v_item = 1; $v_item <= $_POST['counter']; $v_item++ ){
			$v_add['nom_id'] = '1';
			$v_add['organization'] = empty($_POST['persatuan_'.$v_item])?'':$_POST['persatuan_'.$v_item];
			$v_add['position'] = empty($_POST['jawatan_'.$v_item])?'':$_POST['jawatan_'.$v_item];
			$v_add['negara_negeri'] = empty($_POST['negara_'.$v_item])?'':$_POST['negara_'.$v_item];
			$v_add['year'] = empty($_POST['tempoh_'.$v_item])?'':$_POST['tempoh_'.$v_item];
			$v_add['_rec_created_on'] = '1';
			$v_add['_rec_created_by'] = \E::get_session('usr_id');
			$v_add['_rec_status'] = 'SHOW';

				if(!empty($v_add['organization'])){
					$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_position($v_add);	
				}
		}
		}
			unset($v_add);
			$v_usr_id[1]='g';

			header('location: ' . \E::get('obj_curr_module')->build_action_path('nomination','borang',$v_usr_id));
			exit();

	}elseif ($_POST['bahagian_borang'] == 'g') {
			
			$v_add['usr_full_name'] = $_POST['nama_pencadang'];
			$v_add['usr_designation'] = $_POST['jawatan_pencadang'];
			$v_add['work_address'] = $_POST['alamat_pejabat_pencadang'];
			$v_add['mobile_no'] = $_POST['no_telefon_pencadang'];
			$v_add['usr_agency'] = $_POST['agensi'];
			$v_add['usr_id'] = \E::get_session('usr_id');

			\E::get('obj_curr_module')->nomination_add_pencadang($v_add);			
			unset($v_add);
			$v_usr_id[0]=$v_id;
			$v_usr_id[1]='j';

			header('location: ' . \E::get('obj_curr_module')->build_action_path('nomination','borang',$v_usr_id));
			exit();			

	}elseif ($_POST['bahagian_borang'] == 'h') {
		# code...
	}elseif ($_POST['bahagian_borang'] == 'i') {
		# code...
	}elseif ($_POST['bahagian_borang'] == 'j') {
		if ($_POST['type1'] == 'JABATAN') {
				for($v_item = 1; $v_item <= $_POST['counter1']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['sumbangan_penghargaan'] = empty($_POST['smbgn_kpd_jbtn_'.$v_item])?'':$_POST['smbgn_kpd_jbtn_'.$v_item];
					$v_add['sumbangan_type'] = $_POST['type1'];
					$v_add['_rec_created_on'] = '1';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';

					if(!empty($v_add['sumbangan_penghargaan'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_asas_pencalonan($v_add);	
					}
				}
			}if ($_POST['type2'] == 'MASYARAKAT') {
				for($v_item = 1; $v_item <= $_POST['counter2']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['sumbangan_penghargaan'] = empty($_POST['smbgn_kpd_msyrkt_'.$v_item])?'':$_POST['smbgn_kpd_msyrkt_'.$v_item];
					$v_add['sumbangan_type'] = $_POST['type2'];
					$v_add['_rec_created_on'] = '1';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';

					if(!empty($v_add['sumbangan_penghargaan'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_asas_pencalonan($v_add);	
					}
				}
			}if ($_POST['type3'] == 'NEGERI') {
				for($v_item = 1; $v_item <= $_POST['counter3']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['sumbangan_penghargaan'] = empty($_POST['smbgn_kpd_ngri_'.$v_item])?'':$_POST['smbgn_kpd_ngri_'.$v_item];
					$v_add['sumbangan_type'] = $_POST['type3'];
					$v_add['_rec_created_on'] = '1';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';


					if(!empty($v_add['sumbangan_penghargaan'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_asas_pencalonan($v_add);	
					}
				}
			}if ($_POST['type4'] == 'NEGARA') {
				for($v_item = 1; $v_item <= $_POST['counter4']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['sumbangan_penghargaan'] = empty($_POST['smbgn_kpd_ngra_'.$v_item])?'':$_POST['smbgn_kpd_ngra_'.$v_item];
					$v_add['sumbangan_type'] = $_POST['type4'];
					$v_add['_rec_created_on'] = '1';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';


					if(!empty($v_add['sumbangan_penghargaan'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_asas_pencalonan($v_add);	
					}
				}
			}if ($_POST['type5'] == 'PENGHARGAAN') {
				for($v_item = 1; $v_item <= $_POST['counter5']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['sumbangan_penghargaan'] = empty($_POST['pghrgaan_dianugerah_'.$v_item])?'':$_POST['pghrgaan_dianugerah_'.$v_item];
					$v_add['sumbangan_type'] = $_POST['type5'];
					$v_add['_rec_created_on'] = '1';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';


					if(!empty($v_add['sumbangan_penghargaan'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_asas_pencalonan($v_add);	
					}
				}
			}
			$v_usr_id[1]='k';

			header('location: ' . \E::get('obj_curr_module')->build_action_path('nomination','borang',$v_usr_id));
			exit();
	}elseif ($_POST['bahagian_borang'] == 'k') {
				if ($_POST['type1'] == 'JABATAN') {
				for($v_item = 1; $v_item <= $_POST['counter1']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['sumbangan_penghargaan'] = empty($_POST['smbgn_kpd_jbtn_'.$v_item])?'':$_POST['smbgn_kpd_jbtn_'.$v_item];
					$v_add['sumbangan_type'] = $_POST['type1'];
					$v_add['_rec_created_on'] = '1';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';

					if(!empty($v_add['sumbangan_penghargaan'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_asas_pencalonan($v_add);	
					}
				}
			}if ($_POST['type2'] == 'MASYARAKAT') {
				for($v_item = 1; $v_item <= $_POST['counter2']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['sumbangan_penghargaan'] = empty($_POST['smbgn_kpd_msyrkt_'.$v_item])?'':$_POST['smbgn_kpd_msyrkt_'.$v_item];
					$v_add['sumbangan_type'] = $_POST['type2'];
					$v_add['_rec_created_on'] = '1';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';



					if(!empty($v_add['sumbangan_penghargaan'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_asas_pencalonan($v_add);	
					}
				}
			}if ($_POST['type3'] == 'NEGERI') {
				for($v_item = 1; $v_item <= $_POST['counter3']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['sumbangan_penghargaan'] = empty($_POST['smbgn_kpd_ngri_'.$v_item])?'':$_POST['smbgn_kpd_ngri_'.$v_item];
					$v_add['sumbangan_type'] = $_POST['type3'];
					$v_add['_rec_created_on'] = '1';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';


					if(!empty($v_add['sumbangan_penghargaan'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_asas_pencalonan($v_add);	
					}
				}
			}if ($_POST['type4'] == 'NEGARA') {
				for($v_item = 1; $v_item <= $_POST['counter4']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['sumbangan_penghargaan'] = empty($_POST['smbgn_kpd_ngra_'.$v_item])?'':$_POST['smbgn_kpd_ngra_'.$v_item];
					$v_add['sumbangan_type'] = $_POST['type4'];
					$v_add['_rec_created_on'] = '1';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';


					if(!empty($v_add['sumbangan_penghargaan'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_asas_pencalonan($v_add);	
					}
				}
			}if ($_POST['type5'] == 'PENGHARGAAN') {
				for($v_item = 1; $v_item <= $_POST['counter5']; $v_item++ ){
					$v_add['nom_id'] = '1';
					$v_add['sumbangan_penghargaan'] = empty($_POST['pghrgaan_dianugerah_'.$v_item])?'':$_POST['pghrgaan_dianugerah_'.$v_item];
					$v_add['sumbangan_type'] = $_POST['type5'];
					$v_add['_rec_created_on'] = '1';
					$v_add['_rec_created_by'] = \E::get_session('usr_id');
					$v_add['_rec_status'] = 'SHOW';


					if(!empty($v_add['sumbangan_penghargaan'])){
						$v_usr_id[0] = \E::get('obj_curr_module')->nomination_add_asas_pencalonan($v_add);	
					}
				}
			}
			$v_usr_id[1]='k';

			header('location: ' . \E::get('obj_curr_module')->build_action_path('nomination','borang',$v_usr_id));
			exit();
	}else{

	}
}

// $v_var['today_date'] = \E::get('obj_curr_module')->__to_display_date(\E::get('obj_curr_module')->__now(),'DATE');
$v_mode = 'add';
// $v_var['group_list'] = $v_group_list;

$v_var['mode'] = $v_mode;



if (isset($v_usr_id)) {
	$v_var['nom_name'] = $v_usr_id;
}
\V::append_data( 'menu', \V::load_view( $this->get_view_file_path('menu','share'), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );
\V::output_view();
?>