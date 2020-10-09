<?PHP
// print 'ag_id: '. $_GET['ag_id'].'<br/>'; exit;
if(!isset($_GET['ag_id']) || trim($_GET['ag_id'])==''){
	header('location: '.\E::get('obj_system_module')->build_action_path('agency','list') );
}

$v_ag_id = $_GET['ag_id'];
$v_ad_id = $this->get_param();

foreach($v_ad_id as $v_key => $v_value){
	if(trim($v_value) == ''){
		unset($v_ad_id[$v_key]);
	}
}

if(count($v_ad_id) >= 1){
	$v_cond['ag_id'] = $v_ag_id;
	$v_cond['ad_id@IN'] = $v_ad_id;
	$v_dept_del = \E::get('obj_system_module')->agency_dept_del($v_cond);
}

header('location: '.\E::get('obj_system_module')->build_action_path('agency','view',$v_ag_id) );
?>