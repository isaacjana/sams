<?PHP
$v_param = $this->get_param();
$v_usr_id = (isset($_GET['usr_id']) && $_GET['usr_id']!='' ? $_GET['usr_id'] : '');
$v_pos_id = (isset($_GET['pos_id']) && $_GET['pos_id']!='' ? $_GET['pos_id'] : '');

if($v_usr_id == '' || $v_pos_id == ''){
?>
	<script language="javascript">
		window.location = "<?php echo \E::get('obj_system_module')->build_action_path('user','list'); ?>";
	</script>
<?PHP
}

//Check the duplicate position
unset($v_cond);
$v_cond['usr_id'] = $v_usr_id;
$v_cond['id'] = $v_pos_id;
$v_order = array( array('order_by' => 'pos_sta_date' , 'sort_by' => 'DESC'));
$v_pos_info = \E::get( 'obj_system_module')->position_get($v_cond, $v_order);

/*
print '<pre>';
	print_r($v_pos_info);
print '</pre>';
*/

//Only able to set the position default while it is no coming from IMPIAN
if($v_pos_info['imp_post_id'] == '' && $v_pos_info['pos_default'] == '0' ){
	//Set the default position
	$v_update['id'] = $v_pos_id;
	$v_update['usr_id@WHERE'] = $v_usr_id;
	$v_update['pos_status'] = 'H';
	$v_update_result = \E::get( 'obj_system_module')->position_edit($v_update);
	unset($v_update);
}

header('location: ' . \E::get('obj_system_module')->build_action_path('user','view',$v_usr_id) );
?>