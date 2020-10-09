<?PHP
$v_search_key = (isset($_GET["term"])) ? $_GET["term"] : '';

$v_condition['kwd_value'] = $v_search_key;
$v_order[0]['order_by']='kwd_value';
$v_order[0]['sort_by'] =  ( isset($_REQUEST['sort']) && $_REQUEST['sort'] != "" ) ? $_REQUEST['sort'] : 'ASC';
$v_agency_info = \E::get('obj_system_module')->agency_list($v_condition, $v_order);

$v_var["agency_info"] =  $v_agency_info;
$v_var["search_key"] =  $v_search_key;

\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );

\V::output_view( 'template_blank.php' );
?>