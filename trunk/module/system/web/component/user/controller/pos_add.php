<?PHP
$v_param = $this->get_param();
$v_usr_id = (isset($_GET['usr_id']) && $_GET['usr_id']!='' ? $_GET['usr_id'] : '');
if($v_usr_id == ''){
?>
	<script language="javascript">
	if(parent.mydhtmlwin){
		parent.mydhtmlwin.close();
	}else{
		window.location = "<?php echo \E::get('obj_system_module')->build_action_path(); ?>";
	}
	</script>
<?PHP
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	foreach($_POST as $v_key => $v_value){
		$_POST[$v_key] = trim($v_value);
	}
	
	if(!\I::check("COMPULSORY", $_POST['ag_id'], \E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'),'VAR')){
		\I::set_error_msg(\E::get('obj_system_lang')->get('USER_AGENCY').': '.\E::get("obj_kernel_lang")->get('ERR_JS_FIELD_REQUIRED'));
	}else{
		//Check the duplicate position
		unset($v_cond);
		$v_cond['usr_id'] = $v_usr_id;
		$v_cond['pos_status'] = 'A';
		$v_cond['sys_ag_id'] = $_POST['ag_id'];
		$v_cond['sys_ad_id'] = ($_POST['ad_id']!= '' ? $_POST['ad_id'] : 'hq');
		$v_order = array( array('order_by' => 'pos_sta_date' , 'sort_by' => 'DESC'));
		$v_pos_info = \E::get( 'obj_system_module')->position_list($v_cond, $v_order);
		
		if(isset($v_pos_info) && is_array($v_pos_info)){
			\I::set_error_msg(\E::get('obj_system_lang')->get('POSITION_DUPLICATE'));
		}
	}
	
	//\I::set_error_msg(\E::get('obj_system_lang')->get('POSITION_DUPLICATE').'     ererere');
	
	if(!\I::is_error()){
		$v_update['usr_id'] = $v_usr_id;
		$v_update['sys_ag_id'] = $_POST['ag_id'];
		$v_update['sys_ad_id'] = ($_POST['ad_id']!= '' ? $_POST['ad_id'] : 'hq');
		$v_update['pos_name'] = $_POST['pos_name'];
		$v_update['pos_default'] = '0';
		$v_update['_rec_status'] = 'SHOW';
		$v_update['pos_sta_date'] = \E::get('obj_system_module')->__now();
		
		$v_result = \E::get('obj_system_module')->position_add($v_update);
		unset($v_update);
		
		?>
			<script language="javascript">
			if(parent.mydhtmlwin){
				parent.window.location.reload();
				parent.mydhtmlwin.close();
			}else{
				parent.window.location.reload();
			}
			</script>
		<?PHP
	}
	foreach($_POST as $v_key => $v_value){
		if($v_key != 'usr_password' && $v_key != 'usr_password2'){
			$v_var[$v_key] = trim($v_value);
		}
	}
}

\V::append_data( 'body', \V::load_box( \E::get( 'obj_system_lang')->get('POSITION_ADD'), \V::load_view( $this->get_view_file_path( 'pos_form' ), $v_object, $v_var ), 'box_form.php' ) );

\V::output_view('template_iframe.php');
?>