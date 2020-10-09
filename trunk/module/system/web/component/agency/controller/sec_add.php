<?PHP
$v_param = $this->get_param();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	//===FOR: Trim all the POST record
	foreach($_POST as $v_key => $v_value){
		$_POST[$v_key] = trim($v_value);
	}
	
	//===FOREACH: Check weather each language have the duplicated name or not.
	//				If yes then need to ask user to rekey again.
	$v_lang_info = \E::get('obj_system_module')->get_supported_lang();
	foreach($v_lang_info as $v_lang){
		if(!\I::check("COMPULSORY", 'ad_name_'.$v_lang, \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'))){
			$v_err_lang[$v_lang] = true;
		}else{
			unset($v_cond);
			$v_cond['ag_id'] = $_POST['ag_id'];
			$v_cond['ad_id'] = $_POST['ad_id'];
			$v_cond['kwd_value'] = $_POST['ad_name_'.$v_lang];
			$v_cond['lang'] = $v_lang;
			$v_result = \E::get('obj_system_module')->section_get($v_cond);
			
			if(is_array($v_result)){
				\I::set_error_field('ad_name_'.$v_lang, \E::get("obj_system_lang")->get('DEPARMENT_NAME_DUPLICATE'));
				$v_err_lang[$v_lang] = true;
			}
		}
	}
	
	//===FOREACH: Check which language tab have the error and set it as a default display language
	foreach($v_lang_info as $v_lang){
		if(isset($v_err_lang[$v_lang])){
			$v_error_lang = $v_lang;
			break;
		}
	}
	
	if(!\I::is_error()){
		//===: Assign all the added value to the $v_update
		$v_update['ag_id'] = $_POST['ag_id'];
		$v_update['ad_id'] = $_POST['ad_id'];
		$v_update['link_table_from'] = '';
		$v_update['link_id'] = '';
		$v_update['_rec_status'] = 'SHOW';
		
		//===FOREACH: Assign all the language information for update purpose
		$v_lang_info = \E::get('obj_system_module')->get_supported_lang();
		foreach($v_lang_info as $v_lang){
			$v_update['lang'][$v_lang]['kwd_value'] = $_POST['ad_name_'.$v_lang];
			$v_update['lang'][$v_lang]['kwd_short_name'] = $_POST['ad_short_name_'.$v_lang];
		}
		$v_ad_id = \E::get('obj_system_module')->section_add($v_update);
		unset($v_update);
		
		//===: Request parent window to reload the ajax page and close the DHTML window.
		print '<script language="javascript">
				v_url = "'.\E::get('obj_system_module')->build_action_path('agency','sec_ajax').'?ag_id='.$_POST['ag_id'].'&ad_id='.$_POST['ad_id'].'";
					window.parent.secDeptRecList(v_url);
					window.parent.mydhtmlwin.close();
				</script>';
		exit;
	}
	foreach($_POST as $v_key => $v_value){
		$v_var[$v_key] = trim($v_value);
	}
}else{
	$v_var['ag_id'] = $v_param[0];
	$v_var['ad_id'] = $v_param[1];
}

//===IF: Assign back the POST information for display purpose.
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	foreach($v_lang_info as $v_lang){
		$v_sec_info['lang'][$v_lang]['kwd_value'] = $_POST['ad_name_'.$v_lang];
		$v_sec_info['lang'][$v_lang]['kwd_short_name'] = $_POST['ad_short_name_'.$v_lang];
	}
}

$v_var['lang_info'] = \E::get('obj_system_module')->get_supported_lang();
$v_var['default_lang'] = ($v_error_lang != "") ? $v_error_lang : \E::get('obj_kernel_config')->get('general/lang');
$v_var['sec_info'] = isset($v_sec_info) ? $v_sec_info : null;

\V::append_data( 'header', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
\V::append_data( 'body', \V::load_box( \E::get( 'obj_system_lang')->get('AGENCY_SECTIONS'), \V::load_view( $this->get_view_file_path( 'sec_form' ), $v_object, $v_var ), 'box_form.php' ) );

\V::output_view('template_iframe.php');
// \V::output_view();
?>