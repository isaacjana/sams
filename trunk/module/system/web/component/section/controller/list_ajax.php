<?PHP
$v_param['sec_name'] = ( !isset($_GET['sec_name']) || $_GET['sec_name'] == '' ) ? '' : $_GET['sec_name'];
$v_param['search_agency'] = ( !isset($_GET['search_agency']) || $_GET['search_agency'] == '' ) ? '' : $_GET['search_agency'];

$v_param['search_agency'] = ( !isset($_GET['search_agency']) || $_GET['search_agency'] == '' ) ? 
								'' : $_GET['search_agency'];
$v_agency_arr = explode('@@',$v_param['search_agency']);
$v_ag_id = (isset($v_agency_arr[0]) && $v_agency_arr[0] != '') ? $v_agency_arr[0] : ''; 
$v_ad_id = (isset($v_agency_arr[1]) && $v_agency_arr[1] != '') ? $v_agency_arr[1] : '';

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
$v_param['toggle'] .= '&sec_name='.urlencode($v_param['sec_name']);
$v_param['toggle'] .= '&search_agency='.urlencode($v_param['search_agency']);

$v_param['paging']  = '&sort='.$v_param['sort'];
$v_param['paging'] .= '&order_by='.$v_param['order_by'];
$v_param['paging'] .= '&sec_name='.urlencode($v_param['sec_name']);
$v_param['paging'] .= '&search_agency='.urlencode($v_param['search_agency']);

$v_page_start = ($v_param['page']-1) * \E::get( 'obj_kernel_config' )->get('page/total_row_per_page');

unset($v_cond);
$v_cond['ag_id'] = $v_ag_id;
$v_cond['ad_id'] = $v_ad_id;
$v_cond['kwd_value'] = $v_param['sec_name'];
$v_total_rec = \E::get( 'obj_curr_module')->section_list_total($v_cond);
$v_sec_list_info = \E::get('obj_system_module')->section_list($v_cond, $v_order, $v_page_start, \E::get( 'obj_kernel_config' )->get('page/total_row_per_page'));

$v_var = array( 
				"param" => $v_param,
				"page_num" => $v_page_start,
				"row_per_page" => \E::get( 'obj_kernel_config' )->get('page/total_row_per_page'),
				"total_rec" => (isset($v_total_rec)? $v_total_rec:0),
				"sec_list_info" => (isset($v_sec_list_info)? $v_sec_list_info: "")
				);

\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var )  );
\V::output_view('template_blank.php');
?>