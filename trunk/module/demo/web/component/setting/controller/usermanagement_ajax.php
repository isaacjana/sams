<?PHP
//Check for access right
$v_access = \E::get('obj_curr_module')->get_right_to_access('read');
if(!$v_access){
	\V::append_data( 'body', \V::load_box( \E::get( 'obj_curr_module_lang')->get('MODULE_AUTHORISED_ERROR'), \V::load_view( $this->get_view_file_path( 'msg_not_authorised', 'share' ), $v_object, $v_var ), 'box_form.php' ) );
	\V::output_view();
	exit;
}

$v_param['usr_name'] = ( !isset($_GET['usr_name']) || $_GET['usr_name'] == '' ) ? '' : $_GET['usr_name'];
$v_param['usr_email'] = ( !isset($_GET['usr_email']) || $_GET['usr_email'] == '' ) ? '' : $_GET['usr_email'];
// $v_param['usr_from'] = ( !isset($_GET['usr_from']) || $_GET['usr_from'] == '' ) ? '' : $_GET['usr_from'];
$v_param['page'] = ( !isset($_GET['page']) || $_GET['page'] == '' ) ? 1 : $_GET['page'];

if(isset($_GET['usr_from'])){
	$v_from_arr = explode("/", $_GET['usr_from']);
}



// PARAM - orderby
$v_param['order_by'] = (isset($_REQUEST['order_by']) && $_REQUEST['order_by']!="") ? $_REQUEST['order_by'] : 'userName';
switch ($v_param['order_by'] ){
  case 'userName':
    $v_order[0]['order_by']='full_name'; 
    break; 
  default:
    $v_order[0]['order_by']='full_name';
}

// PARAM - sort
$v_order[0]['sort_by'] =  ( isset($_REQUEST['sort']) && $_REQUEST['sort'] != "" ) ? $_REQUEST['sort'] : 'ASC';
$v_param['sort'] = ( isset($_REQUEST['sort']) && $_REQUEST['sort'] != "" )? $_REQUEST['sort'] : '';

$v_param['sort_img'] = ($v_param['sort'] == 'DESC') ? \R::get_image_tag('SORT_DESC') : \R::get_image_tag('SORT_ASC');
$v_param['sort_toggle'] = ($v_param['sort'] == 'DESC') ? 'ASC' : 'DESC';

$v_param['toggle'] = '?page='.$v_param['page'];
$v_param['toggle'] .= '&sort='.$v_param['sort_toggle'];
$v_param['toggle'] .= '&usr_name='.urlencode($v_param['usr_name']);
$v_param['toggle'] .= '&usr_email='.urlencode($v_param['usr_email']);
// $v_param['toggle'] .= '&usr_from='.urlencode($v_param['usr_from']);

$v_param['paging']  = '&sort='.$v_param['sort'];
$v_param['paging'] .= '&order_by='.$v_param['order_by'];
$v_param['paging'] .= '&usr_name='.urlencode($v_param['usr_name']);
$v_param['paging'] .= '&usr_email='.urlencode($v_param['usr_email']);
// $v_param['paging'] .= '&usr_from='.urlencode($v_param['usr_from']);

$v_page_start = ($v_param['page']-1) * \E::get( 'obj_kernel_config' )->get('page/total_row_per_page');

unset($v_cond);
$v_cond['full_name'] = $v_param['usr_name'];
$v_cond['usr_email'] = $v_param['usr_email'];
// $v_cond['usr_from'] = isset($v_from_arr)?$v_from_arr:'';

// $v_user_list_info = \E::get('obj_system_module')->user_list($v_cond, $v_order, $v_page_start, \E::get( 'obj_kernel_config' )->get('page/total_row_per_page'));
$v_user_list_info = \E::get('obj_system_module')->user_list_with_no_post($v_cond, $v_order, $v_page_start, \E::get( 'obj_kernel_config' )->get('page/total_row_per_page'));
$v_total_rec = \E::get( 'obj_system_module')->user_list_total($v_cond);

$v_var = array( 
				"param" => $v_param,
				"page_num" => $v_page_start,
				"row_per_page" => \E::get( 'obj_kernel_config' )->get('page/total_row_per_page'),
				"total_rec" => (isset($v_total_rec)? $v_total_rec:0),
				"user_list_info" => (isset($v_user_list_info)? $v_user_list_info: "")
				);


\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var )  );
\V::output_view('template_blank.php');
?>