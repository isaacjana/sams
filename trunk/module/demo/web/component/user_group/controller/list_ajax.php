<?PHP
//Check for access right
$v_access = \E::get('obj_curr_module')->get_right_to_access('read');
if(!$v_access){
	\V::append_data( 'body', \V::load_box( \E::get( 'obj_curr_module_lang')->get('MODULE_AUTHORISED_ERROR'), \V::load_view( $this->get_view_file_path( 'msg_not_authorised', 'share' ), $v_object, $v_var ), 'box_form.php' ) );
	\V::output_view();
	exit;
}

$v_param['page'] = ( !isset($_GET['page']) || $_GET['page'] == '' ) ? 1 : $_GET['page'];
$v_param['module'] = ( !isset($_GET['module']) || $_GET['module'] == '' ) ? NULL : $_GET['module'];

// PARAM - orderby
$v_param['order_by'] = (isset($_REQUEST['order_by']) && $_REQUEST['order_by']!="") ? $_REQUEST['order_by'] : 'title';
switch ($v_param['order_by'] ){
	case 'title':
		$v_order[0]['order_by']='kwd_value'; 
		break;
	case 'date':
		$v_order[0]['order_by']='_rec_modified_on';
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
$v_param['toggle'] .= '&module='.$v_param['module'];

$v_param['paging']  = '&sort='.$v_param['sort'];
$v_param['paging'] .= '&order_by='.$v_param['order_by'];
$v_param['paging'] .= '&module='.$v_param['module'];

$v_page_start = ($v_param['page']-1) * \E::get( 'obj_kernel_config' )->get('page/total_row_per_page');

$v_user_group_list=\E::get( 'obj_curr_module')->user_group_list($v_order, $v_page_start, \E::get( 'obj_kernel_config' )->get('page/total_row_per_page'));
$v_total_rec = \E::get( 'obj_curr_module')->user_group_list_total();

$v_var = array( 
				"param" => $v_param,
				"page_num" => $v_page_start,
				"row_per_page" => \E::get( 'obj_kernel_config' )->get('page/total_row_per_page'),
				"total_rec" => (isset($v_total_rec)? $v_total_rec:0),
				"user_group_list" => (isset($v_user_group_list)? $v_user_group_list: "")
				);

\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var )  );
\V::output_view('template_blank.php');
?>