<?PHP
$v_search_key = (isset($_GET["term"])) ? $_GET["term"] : '';
$v_ag_id_key = (isset($_GET["ag_id"])) ? $_GET["ag_id"] : '';

$v_condition['kwd_value'] = $v_search_key;
$v_condition['ag_id'] = $v_ag_id_key;
$v_order[0]['order_by']='kwd_value';
$v_order[0]['sort_by'] =  ( isset($_REQUEST['sort']) && $_REQUEST['sort'] != "" ) ? $_REQUEST['sort'] : 'ASC';
$v_dept_info = \E::get('obj_system_module')->agency_dept_list($v_condition, $v_order);

$v_var["dept_info"] =  $v_dept_info;
$v_var["search_key"] =  $v_search_key;
$v_var["ag_id_key"] =  $v_ag_id_key;

\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );

\V::output_view( 'template_blank.php' );
?>