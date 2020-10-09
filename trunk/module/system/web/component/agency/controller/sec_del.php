<?PHP
// print 'ag_id: '. $_GET['ag_id'].'<br/>'; exit;
if(!isset($_GET['ag_id']) || trim($_GET['ag_id'])==''){
	header('location: '.\E::get('obj_system_module')->build_action_path('agency','list') );
}
if(!isset($_GET['ad_id']) || trim($_GET['ad_id'])==''){
	header('location: '.\E::get('obj_system_module')->build_action_path('agency','list') );
}

$v_ag_id = $_GET['ag_id'];
$v_ad_id = $_GET['ad_id'];
$v_sec_id = $this->get_param();

foreach($v_sec_id as $v_key => $v_value){
	if(trim($v_value) == ''){
		unset($v_sec_id[$v_key]);
	}
}

if(count($v_sec_id) >= 1){
	$v_cond['ag_id'] = $v_ag_id;
	$v_cond['ad_id'] = $v_ad_id;
	$v_cond['sec_id@IN'] = $v_sec_id;
	$v_dept_del = \E::get('obj_system_module')->section_del($v_cond);
}

header('location: '.\E::get('obj_system_module')->build_action_path('agency','view',$v_ag_id) );
?>