<?PHP
$v_param['ag_name'] = ( !isset($_GET['ag_name']) || $_GET['ag_name'] == '' ) ? '' : $_GET['ag_name'];

$v_param['page'] = ( !isset($_GET['page']) || $_GET['page'] == '' ) ? 1 : $_GET['page'];

// PARAM - orderby
$v_param['order_by'] = (isset($_REQUEST['order_by']) && $_REQUEST['order_by']!="") ? $_REQUEST['order_by'] : 'agencyName';
switch ($v_param['order_by'] ){
  case 'agencyName':
    $v_order[0]['order_by']='kwd_value'; 
    break; 
  default:
    $v_order[0]['order_by']='kwd_value';
}

// PARAM - sort
$v_order[0]['sort_by'] =  ( isset($_REQUEST['sort']) && $_REQUEST['sort'] != "" ) ? $_REQUEST['sort'] : 'ASC';
$v_param['sort'] = ( isset($_REQUEST['sort']) && $_REQUEST['sort'] != "" )? $_REQUEST['sort'] : '';

$v_param['sort_img'] = ($v_param['sort'] == 'DESC') ? \R::get_image_tag('SORT_DESC') : \R::get_image_tag('SORT_ASC');
$v_param['sort_toggle'] = ($v_param['sort'] == 'DESC') ? 'ASC' : 'DESC';

$v_param['toggle'] = '?page='.$v_param['page'];
$v_param['toggle'] .= '&sort='.$v_param['sort_toggle'];
$v_param['toggle'] .= '&ag_name='.urlencode($v_param['ag_name']);

$v_param['paging']  = '&sort='.$v_param['sort'];
$v_param['paging'] .= '&order_by='.$v_param['order_by'];
$v_param['paging'] .= '&ag_name='.urlencode($v_param['ag_name']);

$v_page_start = ($v_param['page']-1) * \E::get( 'obj_kernel_config' )->get('page/total_row_per_page');

unset($v_cond);
$v_agency_read = false;
$v_agency_session = \E::get('obj_system_module')->agency_allow_view();
if(is_array($v_agency_session)){
	$v_agency_read = true;
	foreach($v_agency_session as $v_value){
		$v_temp = explode('@',$v_value);
		$v_cond['ag_id@IN'][] = $v_temp[0];
	}
}else if($v_agency_session == 'ALL'){
	$v_agency_read = true;
}

if(!$v_agency_read){
	$v_agency_list_info = null;
	$v_total_rec = 0;
}else{
	$v_cond['kwd_value'] = $v_param['ag_name'];
	$v_agency_list_info = \E::get('obj_system_module')->agency_list($v_cond, $v_order, $v_page_start, \E::get( 'obj_kernel_config' )->get('page/total_row_per_page'));
	$v_total_rec = \E::get( 'obj_system_module')->agency_list_total($v_cond);
}

$v_var = array( 
				"param" => $v_param,
				"page_num" => $v_page_start,
				"row_per_page" => \E::get( 'obj_kernel_config' )->get('page/total_row_per_page'),
				"total_rec" => (isset($v_total_rec)? $v_total_rec:0),
				"agency_list_info" => (isset($v_agency_list_info)? $v_agency_list_info: "")
				);

\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var )  );
\V::output_view('template_blank.php');
?>