<?PHP
// Set a date to check
// Check Last synchronize date is not more than 40 minutes.
// Check Log information
// Check total synchronize information

$v_check_date = '2011-04-20';
$v_datetime_now = date('Y-m-d H:i:s');
$v_add_minute = 10;

/** 
 * Check user information
 */
$v_hit_page = true;
$v_complete_syn = false;
$v_cond['tbl_imp_name'] = "v_ptk_info";
$v_sync_date = \E::get('obj_system_module')->sync_log_get($v_cond);

if($v_sync_date && is_array($v_sync_date)){
	unset($v_cond);
	$v_cond['_rec_sync_on@MORE'] = $v_check_date;
	$v_sync_total = \E::get('obj_system_module')->syn_user_list_total($v_cond);
	
	if($v_sync_total[0]['total_rec'] > 14300){
		$v_complete_syn = true;
	}
}

if(!$v_complete_syn){
	//=== Hit the page
	$v_cond['_rec_sync_on@MORE'] = $v_check_date;
	$v_sync_id = \E::get('obj_system_module')->syn_user_last_rec($v_cond);
	
	$v_db_date = $v_sync_id[0]['_rec_sync_on'];
	$v_datetime_arr = explode(" ",$v_db_date);
	$v_date_arr = explode("-",$v_datetime_arr[0]);
	$v_time_arr = explode(":",$v_datetime_arr[1]);
	
	$v_sync_on = date('Y-m-d H:i:s',mktime($v_time_arr[0],$v_time_arr[1]+$v_add_minute,$v_time_arr[2],$v_date_arr[1],$v_date_arr[2],$v_date_arr[0]));
	
	//===IF: Negative value will need to rehit the page as the synchoronize had been terminated at somewhere else.
	//		 Positive value, do not need to rehit the page as the synchoronize is still on going.
	if(\I::check_date_diff($v_datetime_now , $v_sync_on, 'TIME_FLAG') < 0){
		//===Re-hit the page to synchoronize.
		
		//===IF: Delete the user infomation log
		if($v_sync_date && is_array($v_sync_date)){
			$v_del['sync_id'] = $v_sync_date['sync_id'];
			$v_result = \E::get('obj_system_module')->sync_log_del($v_del);
		}
		
		//===IF: Delete the user position infomation log
		$v_cond['tbl_imp_name'] = "v_all_post_info";
		$v_sync_log = \E::get('obj_system_module')->sync_log_get($v_cond);
		if($v_sync_log && is_array($v_sync_log)){
			$v_del['sync_id'] = $v_sync_log['sync_id'];
			$v_result = \E::get('obj_system_module')->sync_log_del($v_del);
		}
		
		//===IF: Delete the user history infomation log
		$v_cond['tbl_imp_name'] = "t_cm_personal_post_history";
		$v_sync_log = \E::get('obj_system_module')->sync_log_get($v_cond);
		if($v_sync_log && is_array($v_sync_log)){
			$v_del['sync_id'] = $v_sync_log['sync_id'];
			$v_result = \E::get('obj_system_module')->sync_log_del($v_del);
		}
		
		print 'Re-hit page is needed!!!<br/>';
		// print \E::get('obj_system_module')->build_action_path('index','test').'?imp_id='.urlencode($v_sync_id[0]['employee_id']);
		$v_hit_url = file(\E::get('obj_system_module')->build_action_path('index','test').'?imp_id='.urlencode($v_sync_id[0]['employee_id']));
	}
	print '<br/>Exit from User Information';
	exit;
}

/** 
 * Check user position information
 */
$v_hit_page = true;
$v_complete_syn = false;
$v_cond['tbl_imp_name'] = "v_all_post_info";
$v_sync_date = \E::get('obj_system_module')->sync_log_get($v_cond);

if($v_sync_date && is_array($v_sync_date)){
	unset($v_cond);
	$v_cond['_rec_sync_on@MORE'] = $v_check_date;
	$v_sync_total = \E::get('obj_system_module')->syn_user_pos_list_total($v_cond);
	// print "Total position: {$v_sync_total[0]['total_rec']}";
	if($v_sync_total[0]['total_rec'] > 14500){
		$v_complete_syn = true;
	}
}

if(!$v_complete_syn){
	//=== Hit the page
	$v_cond['_rec_sync_on@MORE'] = $v_check_date;
	$v_sync_id = \E::get('obj_system_module')->syn_user_pos_last_rec($v_cond);
	
	$v_db_date = $v_sync_id[0]['_rec_sync_on'];
	$v_datetime_arr = explode(" ",$v_db_date);
	$v_date_arr = explode("-",$v_datetime_arr[0]);
	$v_time_arr = explode(":",$v_datetime_arr[1]);
	
	$v_sync_on = date('Y-m-d H:i:s',mktime($v_time_arr[0],$v_time_arr[1]+$v_add_minute,$v_time_arr[2],$v_date_arr[1],$v_date_arr[2],$v_date_arr[0]));
	
	//===IF: Negative value will need to rehit the page as the synchoronize had been terminated at somewhere else.
	//		 Positive value, do not need to rehit the page as the synchoronize is still on going.
	if(\I::check_date_diff($v_datetime_now , $v_sync_on, 'TIME_FLAG') < 0){
		//===Re-hit the page to synchoronize.
		if($v_sync_date && is_array($v_sync_date)){
			$v_del['sync_id'] = $v_sync_date['sync_id'];
			$v_result = \E::get('obj_system_module')->sync_log_del($v_del);
		}
		print 'Re-hit Position page is needed!!!<br/>';
		print 'Total Record: '.$v_sync_total[0]['total_rec'].'<br/> ';
		print \E::get('obj_system_module')->build_action_path('index','test').'?imp_post_id='.urlencode($v_sync_id[0]['imp_post_id']);
		$v_hit_url = file(\E::get('obj_system_module')->build_action_path('index','test').'?imp_post_id='.urlencode($v_sync_id[0]['imp_post_id']));
		// print '<br/>';
		// print '<pre>';
			// print_r($v_hit_url);
		// print '</pre>';
		// print '<br/>';
	}
	print '<br/>Exit from Position';
	exit;
}

/** 
 * Check user history position information
 */
$v_hit_page = true;
$v_complete_syn = false;
// $v_cond['tbl_imp_name'] = "t_cm_personal_post_history";
$v_cond['tbl_imp_name'] = "post_history";
$v_sync_date = \E::get('obj_system_module')->sync_log_get($v_cond);

if($v_sync_date && is_array($v_sync_date) && $v_sync_date['_rec_deleted_by'] < 'P53GKC1009999413'){
	
	$v_db_date = $v_sync_date['_rec_modified_on'];
	$v_datetime_arr = explode(" ",$v_db_date);
	$v_date_arr = explode("-",$v_datetime_arr[0]);
	$v_time_arr = explode(":",$v_datetime_arr[1]);
	
	$v_sync_on = date('Y-m-d H:i:s',mktime($v_time_arr[0],$v_time_arr[1]+$v_add_minute,$v_time_arr[2],$v_date_arr[1],$v_date_arr[2],$v_date_arr[0]));
	if(\I::check_date_diff($v_datetime_now , $v_sync_on, 'TIME_FLAG') < 0){
		$v_cond['tbl_imp_name'] = "t_cm_personal_post_history";
		$v_sync_log = \E::get('obj_system_module')->sync_log_get($v_cond);
		if($v_sync_log && is_array($v_sync_log)){
			$v_del['sync_id'] = $v_sync_log['sync_id'];
			$v_result = \E::get('obj_system_module')->sync_log_del($v_del);
		}
		
		print 'Re-hit history page is needed!!!<br/>';
		print \E::get('obj_system_module')->build_action_path('index','test').'?pn_post_hist_id_more='.urlencode($v_sync_date['_rec_deleted_by']);
		$v_hit_url = file(\E::get('obj_system_module')->build_action_path('index','test').'?pn_post_hist_id_more='.urlencode($v_sync_date['_rec_deleted_by']));
		print '<br/><pre>';
			print_r($v_hit_url);
		print '</pre><br/>';
	}
}

print '<br/>Done<br/>';
?>