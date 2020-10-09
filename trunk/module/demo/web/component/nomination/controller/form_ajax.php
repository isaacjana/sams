<?php
$v_param = $this->get_param();

$v_param['borang'] = ( !isset($_GET['borang']) || $_GET['borang'] == '' ) ? '' : $_GET['borang'];
$v_param['bahagian'] = ( !isset($_GET['bahagian']) || $_GET['bahagian'] == '' ) ? '' : $_GET['bahagian'];
$v_param['id'] = ( !isset($_GET['id']) || $_GET['id'] == '' ) ? '' : $_GET['id'];
$v_param['nom_id'] = ( !isset($_GET['id']) || $_GET['id'] == '' ) ? '' : $_GET['id'];
\I::check("COMPULSORY", 'nama_penuh', \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));
if ($v_param["borang"]=='a') {
	$v_param['borang_id']='1';
}elseif ($v_param["borang"]=='b') {
	$v_param['borang_id']='2';
}elseif ($v_param["borang"]=='c') {
	$v_param['borang_id']='3';
}elseif ($v_param["borang"]=='d') {
	$v_param['borang_id']='4';
}elseif ($v_param["borang"]=='e') {
	$v_param['borang_id']='5';
}elseif ($v_param["borang"]=='f') {
	$v_param['borang_id']='6';
}elseif ($v_param["borang"]=='g') {
	$v_param['borang_id']='7';
}
$v_gems = \E::get('obj_curr_module')->get_config('GEMS/api_url/');
$v_folio = \E::get( 'obj_curr_module')->nomination_get_folio_no($v_param['borang_id']);
$v_awdc_category_id = $v_folio["awdc_category_id"];
$v_folio_no = str_pad(\U::safe_display_string($v_folio["folio_running_no"]),4, '0',STR_PAD_LEFT);

$borang_file_path='borang_'.$v_param['borang'].$v_param['bahagian'];
$v_keturunan = \E::get( 'obj_curr_module')->nomination_get_keturunan();
$v_bandar = \E::get( 'obj_curr_module')->nomination_get_bandar();
$v_bahagian = \E::get( 'obj_curr_module')->nomination_get_bahagian();
$v_negeri = \E::get( 'obj_curr_module')->nomination_get_negeri();
$v_award_type = \E::get( 'obj_curr_module')->nomination_get_award_type();
$v_daerah = \E::get( 'obj_curr_module')->nomination_get_daerah();
$v_kewarganegaraan = \E::get( 'obj_curr_module')->nomination_get_kewarganegaraan();
$v_pencadang = \E::get( 'obj_curr_module')->nomination_get_pencadang($v_param['id']);
$v_tindakan = \E::get( 'obj_curr_module')->nomination_get_tindakan();


$v_var = array( 
				"daerah" => (isset($v_daerah)? $v_daerah: ""),
				"gems" => (isset($v_gems)? $v_gems: ""),
				"negeri" => (isset($v_negeri)? $v_negeri: ""),
				"bahagian" => (isset($v_bahagian)? $v_bahagian: ""),
				"bandar" => (isset($v_bandar)? $v_bandar: ""),
				"keturunan" => (isset($v_keturunan)? $v_keturunan: ""),
				"kewarganegaraan" => (isset($v_kewarganegaraan)? $v_kewarganegaraan: ""),
				"award_type" => (isset($v_award_type)? $v_award_type: ""),
				"awdc_category_id" => (isset($v_awdc_category_id)? $v_awdc_category_id: ""),
				"folio_no" => (isset($v_folio_no)? $v_folio_no: ""),
				"pencadang" => (isset($v_pencadang)? $v_pencadang: ""),
				"tindakan" => (isset($v_tindakan)? $v_tindakan: ""),
				"param" => $v_param,
				"id" => $v_param['id']
				);
if ($v_param['id']!='') {
	$v_check_table = \E::get('obj_curr_module')->nomination_check_nom_profile($v_param['id']);
	$v_check_bahagian_b = \E::get('obj_curr_module')->nomination_check_bahagian_b($v_param['id']);
	$v_check_att_doc = \E::get('obj_curr_module')->nomination_check_att_doc($v_param['id']);
	if ($_GET['bahagian']=='l' && $v_check_table) {
		$v_bahagian_a_data = \E::get('obj_curr_module')->nomination_get_bahagian_a($v_param['id']);
		$v_awd_type= \E::get('obj_curr_module')->nomination_get_awd_type($v_bahagian_a_data['awd_type_id']);
		$v_var['awd_type']=$v_awd_type;
		$v_var['nom_profile']=$v_bahagian_a_data;
		if ($v_bahagian_a_data["nom_folio_no"]!='') {
			$v_folio_arr=explode('/', $v_bahagian_a_data["nom_folio_no"]);
			$v_var["folio_no"]=$v_folio_arr[3];
		}
		
		$v_att_doc=\E::get('obj_curr_module')->nomination_get_att_doc($v_param);
		$v_var["att_doc"]=$v_att_doc[0];
	}elseif ($_GET['bahagian']=='a' && $v_check_table) {
		$v_bahagian_a_data = \E::get('obj_curr_module')->nomination_get_bahagian_a($v_param['id']);
		$v_var['bahagian_a_data']=$v_bahagian_a_data;
	}elseif ($_GET['bahagian']=='m' && $v_check_att_doc) {
		$v_att_doc = \E::get('obj_curr_module')->nomination_get_att_doc($v_param);
		$v_var['att_doc']=$v_att_doc[0];
	}elseif ($_GET['bahagian']=='b' && $v_check_bahagian_b) {
		$v_bahagian_b = \E::get('obj_curr_module')->nomination_get_bahagian_b($v_param['id']);
		$v_var['bahagian_b']=$v_bahagian_b[0];
	}
}

\V::append_data( 'body', \V::load_view( $this->get_view_file_path($borang_file_path), $v_object, $v_var )  );
\V::output_view('template_blank.php');
?>