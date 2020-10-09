<?PHP
/**
 * Variable need to be change
 * - $v_host
 * - $v_database = 3 places need to change
 * - $v_user
 * - $v_password
 * - $v_table_prefix
 * - $v_replace[$v_key]
 * - The first $v_query of the database name
 */

$v_host = '10.18.5.120';
$v_database = 'syn_apps_ems_agency';
// $v_database = 'syn_common_share';
$v_user = 'root';
$v_password = 'password';
$v_table_prefix = 't_sys_';

$db_mysql = new \moonlight\db_mysql($v_host, $v_database, $v_user, $v_password, $v_table_prefix);
$db_mysql->connect();

$v_query = " select count(*), 
				pro.ag_id, pro.ad_id, pos.sys_ag_id, pos.sys_ad_id, 
				pro_id, pro_app_status, pro._rec_created_by, pro._rec_created_on
			 FROM syn_apps_ems_agency.t_mms_meeting_profile pro
			 LEFT JOIN syn_common_share.t_sys_user_position pos 
				ON pos.usr_id=pro._rec_created_by AND pos_default = '1' AND pos_status = 'A'
			group by ag_id, ad_id;";
$v_info = $db_mysql->execute_query($v_query);
// print '<pre>';
	// print_r($v_result);
// print '</pre>';
foreach($v_info as $v_row){
	$v_search[] = array('ag_id' => $v_row['ag_id'], 'ad_id' => $v_row['ad_id']);
	$v_replace[] = array('ag_id' => $v_row['sys_ag_id'], 'ad_id' => $v_row['sys_ad_id']);
}

foreach($v_search as $v_key => $v_value){
	if($v_value['ag_id'] == '38' && $v_value['ad_id'] == '26' ){
		$v_replace[$v_key] = array('ag_id' => 38, 'ad_id' => '378');
	}
}
// print '<pre>';
	// print_r($v_search);
// print '</pre>';

// print '<pre>';
	// print_r($v_replace);
// print '</pre>';
// exit;


// ICTU, UP
$v_table = $db_mysql->execute_query('SHOW TABLES;');
// $v_search = array(
				// array('ag_id' => 1, 'ad_id' => 60),
				// array('ag_id' => 38, 'ad_id' => 26)
			// );
// $v_replace = array(
				// array('ag_id' => 38, 'ad_id' => 387),
				// array('ag_id' => 38, 'ad_id' => 378)
			// );

// print '<pre>';
	// print_r($v_table);
// print '</pre>';

foreach($v_search as $v_key => $v_value){
	foreach($v_table as $v_table_row){
		$v_query = "UPDATE " . $v_table_row['Tables_in_'.$v_database] . " SET 
						ag_id=\"".$v_replace[$v_key]['ag_id']."\", 
						ad_id=\"".$v_replace[$v_key]['ad_id']."\" 
					WHERE ag_id=\"".$v_search[$v_key]['ag_id']."\"  
						AND ad_id=\"".$v_search[$v_key]['ad_id']."\" ";
		// print $v_table_row['Tables_in_'.$v_database];
		$db_mysql->execute_query($v_query);
		print $v_query . '<br/>';
	}
}

$v_database = 'syn_apps_ems';
$db_mysql = new \moonlight\db_mysql($v_host, $v_database, $v_user, $v_password, $v_table_prefix);
$db_mysql->connect();
foreach($v_search as $v_key => $v_value){
	$v_query = "UPDATE t_mms_acl_user_group SET 
					ag_id=\"".$v_replace[$v_key]['ag_id']."\", 
					ad_id=\"".$v_replace[$v_key]['ad_id']."\" 
				WHERE ag_id=\"".$v_search[$v_key]['ag_id']."\"  
					AND ad_id=\"".$v_search[$v_key]['ad_id']."\" ";
	// print $v_table_row['Tables_in_'.$v_database];
	$db_mysql->execute_query($v_query);
	
	$v_query = "UPDATE t_mms_facility_room SET 
					ag_id=\"".$v_replace[$v_key]['ag_id']."\", 
					ad_id=\"".$v_replace[$v_key]['ad_id']."\" 
				WHERE ag_id=\"".$v_search[$v_key]['ag_id']."\"  
					AND ad_id=\"".$v_search[$v_key]['ad_id']."\" ";
	// print $v_table_row['Tables_in_'.$v_database];
	$db_mysql->execute_query($v_query);
}

$v_database = 'syn_common_share';
$db_mysql = new \moonlight\db_mysql($v_host, $v_database, $v_user, $v_password, $v_table_prefix);
$db_mysql->connect();
foreach($v_search as $v_key => $v_value){
	$v_query = "UPDATE t_sys_user_position SET 
					sys_ag_id=\"".$v_replace[$v_key]['ag_id']."\", 
					sys_ad_id=\"".$v_replace[$v_key]['ad_id']."\" 
				WHERE sys_ag_id=\"".$v_search[$v_key]['ag_id']."\"  
					AND sys_ad_id=\"".$v_search[$v_key]['ad_id']."\" 
					AND imp_post_slot_id = ''";
	// print $v_table_row['Tables_in_'.$v_database];
	$db_mysql->execute_query($v_query);
	
	$v_query = "UPDATE t_sys_user_position SET 
					sys_ag_id=\"".$v_replace[$v_key]['ag_id']."\", 
					sys_ad_id=\"".$v_replace[$v_key]['ad_id']."\" 
				WHERE sys_ag_id=\"".$v_search[$v_key]['ag_id']."\"  
					AND sys_ad_id=\"".$v_search[$v_key]['ad_id']."\" 
					AND pos_status = 'H'";
	// print $v_table_row['Tables_in_'.$v_database];
	$db_mysql->execute_query($v_query);
}

$v_query = "SELECT * FROM t_sys_agency_dept;";
$v_result = $db_mysql->execute_query($v_query);
foreach($v_result as $v_row){
	$v_query = "SELECT * 
				FROM t_sys_user_position 
				WHERE sys_ag_id = \"".$v_row['ag_id']."\" AND sys_ad_id = \"".$v_row['ad_id']."\" ";
	$v_user_pos = $db_mysql->execute_query($v_query);
	
	if(!$v_user_pos || !is_array($v_user_pos)){
		$v_query = "UPDATE t_sys_agency_dept SET _rec_status=\"DELETED\"
					WHERE ag_id = \"".$v_row['ag_id']."\" AND ad_id = \"".$v_row['ad_id']."\" ";
		$db_mysql->execute_query($v_query);
	}
}
?>