<?php

/* 
 * To register user devide id into system.
 * 
 * This coding can be reuse for all apps which want to use apps notification.
 */
$v_module_code = \E::get('obj_curr_module')->get_codename();
$v_module_folder = \E::get('obj_curr_module')->get_module_folder();

$obj_apps_mobile = new \moonlight\mobile_apps_notification($v_module_code,$v_module_folder);

$obj_apps_mobile->register_api('android','AIzaSyDc3eeOfbxMTyO1QtrnerOTgVF-Rqdt1uw');
$obj_apps_mobile->register_api('ios','');

$v_usr_id = \E::get_session('usr_id');
$v_remote_info = \moonlight\util::remote_info();
$v_device_reg_id = isset($_POST['__MOONLIGHT_DEVICE_REGISTERED_ID__']) ? $_POST['__MOONLIGHT_DEVICE_REGISTERED_ID__'] : '';

if($v_device_reg_id != ''){
	$v_usr_id = ( strtoupper(\E::get_session('usr_id')) != 'ANONYMOUS' ) ? \E::get_session('usr_id') : '';
	$v_short_name = ($v_usr_id != '') ? \E::get_session('short_name') : '';
	
	$v_reg_id = $obj_apps_mobile->register_user(
					'', '',
					$v_usr_id, 
					$v_short_name, 
					$v_remote_info['OS'], 
					$v_remote_info['OS_VERSION'], 
					$v_device_reg_id
				);
}
?>
