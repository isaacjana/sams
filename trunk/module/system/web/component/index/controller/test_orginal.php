<?PHP
try{
	$obj_imp = new \moonlight\impian\impian;
}catch(\Exception $e){
	//echo 'Caught exception: ',  $e->getMessage(), "\n"; 
	print $e->getMessage();
	exit;
}
	$v_lang_info = \E::get('obj_system_module')->get_supported_lang();
	
	print 'ok loh<br/>';
	
	/*
	print '<pre>';
		$v_search['update_date_from'] = '2001-11-23';
		$v_search['update_date_to'] = $obj_imp->__now('DATE');
		print_r($obj_imp->sync_station($v_search));
	print '</pre>';
	
	print '<hr/>';
	print '<pre>';
		$v_search['update_date_from'] = '2001-11-23';
		$v_search['update_date_to'] = $obj_imp->__now('DATE');
		print_r($obj_imp->sync_establishment());
	print '</pre>';
	
	print '<hr/>';
	print '<pre>';
		$v_search['update_date_from'] = '2005-11-23';
		$v_search['update_date_to'] = $obj_imp->__now('DATE');
		print_r($obj_imp->sync_division($v_search));
	print '</pre>';
	
	print '<hr/>';
	print '<pre>';
		$v_search['update_date_from'] = '2005-11-23';
		$v_search['update_date_to'] = $obj_imp->__now('DATE');
		print_r($obj_imp->sync_dept($v_search));
	print '</pre>';
	
	print '<hr/>';
	print '<pre>';
		$v_search['update_date_from'] = '2009-05-01';
		$v_search['update_date_to'] = $obj_imp->__now('DATE');
		print_r($obj_imp->sync_ptk($v_search));
	print '</pre>';

	print '<hr/>';
	print '<pre>';
		$v_search['update_date_from'] = '2006-05-01';
		$v_search['update_date_to'] = $obj_imp->__now('DATE');
		print_r($obj_imp->sync_all_post($v_search));
	print '</pre>';

	print '<hr/>';
	print '<pre>';
		$v_search['update_date_from'] = '2006-05-01';
		$v_search['update_date_to'] = $obj_imp->__now('DATE');
		print_r($obj_imp->sync_post_history($v_search));
	print '</pre>';*/
	/*
	print '<pre>';
		print_r($obj_imp->sync_ptk());
	print '</pre>';*/
	//============================================================================
	// synchronize IMPIAN Department(IMP) / Agency (common share)
	//============================================================================
	$v_cond['tbl_imp_name'] = "t_pt_department";
	$v_sync_date = \E::get('obj_system_module')->sync_log_get($v_cond);
	if($v_sync_date && is_array($v_sync_date)){
		$v_search['update_date_from'] = $v_sync_date['next_sync_date'];
		$v_search['update_date_to'] = $obj_imp->__now('DATE');
	}else{
		$v_search = null;
	}
	
	$v_tran = 50;
	$v_count = 0;
	$v_info = $obj_imp->sync_dept($v_search,$v_count,$v_tran);
	while($v_info && is_array($v_info)){
		foreach($v_info as $v_row){
			$v_cond['imp_dept_id'] = $v_row['dept_id'];
			$v_agency_info = \E::get('obj_system_module')->agency_get($v_cond);
			unset($v_cond);
			if($v_agency_info && is_array($v_agency_info)){
				//======= Update =======
				$v_update['ag_id'] = $v_agency_info['ag_id'];
				$v_update['ag_code'] = $v_row['dept_code'];
				$v_update['imp_dept_id'] = $v_row['dept_id'];
				$v_update['ag_phone'] = $v_row['dept_phone'];
				$v_update['ag_add_address'] = $v_row['dept_address'];
				$v_update['_rec_status'] = strtoupper($v_row['active_flag'])=='A' ? 'SHOW' : 'DELETED';
				
				$v_result = \E::get('obj_system_module')->agency_edit($v_update);
				
				if($v_update['_rec_status'] == 'SHOW'){
					$v_lang_update['kwd_code'] = $v_agency_info['ag_id'];
					$v_lang_update['kwd_value'] = $v_row['dept_name'];
					$v_lang_update['kwd_short_name'] = $v_row['dept_shortname'];
					$v_lang_update['kwd_lang'] = \E::get('obj_kernel_config')->get('impian/default_update_lang');
					$v_agency_id = \E::get('obj_system_module')->agency_lbl_edit($v_lang_update);
				}else{
					$v_lang_update['kwd_code'] = $v_agency_info['ag_id'];
					$v_lang_update['_rec_status'] = 'DELETED';
					foreach($v_lang_info as $v_lang){
						$v_lang_update['kwd_lang'] = $v_lang;
						$v_agency_id = \E::get('obj_system_module')->agency_lbl_edit($v_lang_update);
					}
				}
				
				unset($v_update);
			}else{
				//======= Insert =======
				$v_update['ag_code'] = $v_row['dept_code'];
				$v_update['imp_dept_id'] = $v_row['dept_id'];
				$v_update['ag_phone'] = $v_row['dept_phone'];
				$v_update['ag_fax'] = "";
				$v_update['ag_email'] = "";
				$v_update['ag_add_ctr_id'] = "null";
				$v_update['ag_add_sta_id'] = "null";
				$v_update['ag_add_div_id'] = "null";
				$v_update['ag_add_dis_id'] = "null";
				$v_update['ag_add_address'] = $v_row['dept_address'];
				$v_update['ag_contact_person_name'] = "";
				$v_update['ag_contact_person_hp'] = "";
				$v_update['ag_contact_person_email'] = "";
				$v_update['_rec_status'] = strtoupper($v_row['active_flag'])=='A' ? 'SHOW' : 'DELETED';
				$v_agency_id = \E::get('obj_system_module')->agency_add($v_update);
				
				$v_lang_update['kwd_code'] = $v_agency_id;
				$v_lang_update['kwd_value'] = $v_row['dept_name'];
				$v_lang_update['kwd_short_name'] = $v_row['dept_shortname'];
				$v_lang_update['_rec_status'] = $v_update['_rec_status'];
				foreach($v_lang_info as $v_lang){
					$v_lang_update['kwd_lang'] = $v_lang;
					$v_agency_id = \E::get('obj_system_module')->agency_lbl_add($v_lang_update);
				}
				unset($v_update);
			}
		}
		$v_count += $v_tran;
		$v_info = $obj_imp->sync_dept($v_search,$v_count,$v_tran);
	}
	unset($v_search);
	$v_update['tbl_imp_name'] = "t_pt_department";
	$v_update['next_sync_date'] = \U::add_day($obj_imp->__now('DATE'),1);
	\E::get('obj_system_module')->sync_log_update($v_update);
	
	//============================================================================
	// synchronize IMPIAN Establisment(IMP) / Unit(common share)
	//============================================================================
	$v_cond['tbl_imp_name'] = "t_pt_establishment";
	$v_sync_date = \E::get('obj_system_module')->sync_log_get($v_cond);
	if($v_sync_date && is_array($v_sync_date)){
		$v_search['update_date_from'] = $v_sync_date['next_sync_date'];
		$v_search['update_date_to'] = $obj_imp->__now('DATE');
	}else{
		$v_search = null;
	}
	
	$v_tran = 50;
	$v_count = 0;
	$v_info = $obj_imp->sync_establishment($v_search,$v_count,$v_tran);
	while($v_info && is_array($v_info)){
		foreach($v_info as $v_row){
			$v_cond['imp_est_id'] = $v_row['est_id'];
			$v_unit_info = \E::get('obj_system_module')->unit_get($v_cond);
			unset($v_cond);
			$v_cond['imp_dept_id'] = $v_row['est_dept_id'];
			$v_agency_info = \E::get('obj_system_module')->agency_get($v_cond);
			unset($v_cond);
			if($v_unit_info && is_array($v_unit_info)){
				//======= Update =======
				$v_update['unit_id'] = $v_unit_info['unit_id'];
				$v_update['ag_id'] = $v_agency_info['ag_id'];
				$v_update['_rec_status'] = strtoupper($v_row['active_flag'])=='A' ? 'SHOW' : 'DELETED';
				
				$v_result = \E::get('obj_system_module')->unit_edit($v_update);
				
				if($v_update['_rec_status'] == 'SHOW'){
					$v_lang_update['kwd_code_unit_id'] = $v_unit_info['unit_id'];
					$v_lang_update['kwd_code_ag_id'] = $v_agency_info['ag_id'];
					$v_lang_update['kwd_value'] = $v_row['est_description'];
					$v_lang_update['kwd_short_name'] = $v_row['est_shortname'];
					$v_lang_update['kwd_lang'] = \E::get('obj_kernel_config')->get('impian/default_update_lang');
					$v_result = \E::get('obj_system_module')->unit_lbl_edit($v_lang_update);
				}else{
					$v_lang_update['kwd_code_unit_id'] = $v_unit_info['unit_id'];
					$v_lang_update['kwd_code_ag_id'] = $v_agency_info['ag_id'];
					$v_lang_update['_rec_status'] = 'DELETED';
					foreach($v_lang_info as $v_lang){
						$v_lang_update['kwd_lang'] = $v_lang;
						$v_result = \E::get('obj_system_module')->unit_lbl_edit($v_lang_update);
					}
				}
				
				unset($v_update);
			}else{
				//======= Insert =======
				$v_update['ag_id'] = $v_agency_info['ag_id'];
				$v_update['imp_est_id'] = $v_row['est_id'];
				$v_update['unit_mobile'] = "";
				$v_update['unit_phone'] = "";
				$v_update['unit_fax'] = "";
				$v_update['unit_email'] = "";
				$v_update['_rec_status'] = strtoupper($v_row['active_flag'])=='A' ? 'SHOW' : 'DELETED';
				$v_unit_id = \E::get('obj_system_module')->unit_add($v_update);
				
				$v_lang_update['kwd_code_unit_id'] = $v_unit_id;
				$v_lang_update['kwd_code_ag_id'] = $v_agency_info['ag_id'];
				$v_lang_update['kwd_value'] = $v_row['est_description'];
				$v_lang_update['kwd_short_name'] = $v_row['est_shortname'];
				$v_lang_update['_rec_status'] = $v_update['_rec_status'];
				foreach($v_lang_info as $v_lang){
					$v_lang_update['kwd_lang'] = $v_lang;
					$v_result = \E::get('obj_system_module')->unit_lbl_add($v_lang_update);
				}
				unset($v_update);
			}
		}
		$v_count += $v_tran;
		$v_info = $obj_imp->sync_establishment($v_search,$v_count,$v_tran);
	}
	unset($v_search);
	$v_update['tbl_imp_name'] = "t_pt_establishment";
	$v_update['next_sync_date'] = \U::add_day($obj_imp->__now('DATE'),1);
	\E::get('obj_system_module')->sync_log_update($v_update);
	
	//============================================================================
	// synchronize IMPIAN Division(IMP) / loc_division(common share)
	//============================================================================
	$v_cond['tbl_imp_name'] = "t_pt_division";
	$v_sync_date = \E::get('obj_system_module')->sync_log_get($v_cond);
	if($v_sync_date && is_array($v_sync_date)){
		$v_search['update_date_from'] = $v_sync_date['next_sync_date'];
		$v_search['update_date_to'] = $obj_imp->__now('DATE');
	}else{
		$v_search = null;
	}
	
	$v_tran = 50;
	$v_count = 0;
	$v_info = $obj_imp->sync_division($v_search,$v_count,$v_tran);
	while($v_info && is_array($v_info)){
		foreach($v_info as $v_row){
			$v_cond['imp_division_id'] = $v_row['division_id'];
			$v_dept_info = \E::get('obj_system_module')->division_get($v_cond);
			unset($v_cond);
			if($v_dept_info && is_array($v_dept_info)){
				//======= Update =======
				$v_update['div_id'] = $v_dept_info['div_id'];
				$v_update['sta_id'] = \E::get('obj_kernel_config')->get('impian/div_str_id');
				$v_update['ctr_id'] = \E::get('obj_kernel_config')->get('impian/div_ctr_id');
				$v_update['_rec_status'] = strtoupper($v_row['active_flag'])=='A' ? 'SHOW' : 'DELETED';
				
				$v_result = \E::get('obj_system_module')->division_edit($v_update);
				
				if($v_update['_rec_status'] == 'SHOW'){
					$v_lang_update['kwd_code_div_id'] = $v_dept_info['div_id'];
					$v_lang_update['kwd_code_sta_id'] = \E::get('obj_kernel_config')->get('impian/div_str_id');
					$v_lang_update['kwd_code_ctr_id'] = \E::get('obj_kernel_config')->get('impian/div_ctr_id');
					$v_lang_update['kwd_value'] = $v_row['division_name'];
					$v_lang_update['kwd_lang'] = \E::get('obj_kernel_config')->get('impian/default_update_lang');
					$v_result = \E::get('obj_system_module')->division_lbl_edit($v_lang_update);
				}else{
					$v_lang_update['kwd_code_div_id'] = $v_dept_info['div_id'];
					$v_lang_update['kwd_code_sta_id'] = \E::get('obj_kernel_config')->get('impian/div_str_id');
					$v_lang_update['kwd_code_ctr_id'] = \E::get('obj_kernel_config')->get('impian/div_ctr_id');
					$v_lang_update['_rec_status'] = 'DELETED';
					foreach($v_lang_info as $v_lang){
						$v_lang_update['kwd_lang'] = $v_lang;
						$v_result = \E::get('obj_system_module')->division_lbl_edit($v_lang_update);
					}
				}
			}else{
				//======= Insert =======
				$v_update['sta_id'] = \E::get('obj_kernel_config')->get('impian/div_str_id');
				$v_update['ctr_id'] = \E::get('obj_kernel_config')->get('impian/div_ctr_id');
				$v_update['imp_division_id'] = $v_row['division_id'];
				$v_update['div_code_text'] = $v_row['division_code'];
				$v_update['_rec_status'] = strtoupper($v_row['active_flag'])=='A' ? 'SHOW' : 'DELETED';
				$v_div_id = \E::get('obj_system_module')->division_add($v_update);
				
				$v_lang_update['kwd_code_div_id'] = $v_div_id;
				$v_lang_update['kwd_code_sta_id'] = \E::get('obj_kernel_config')->get('impian/div_str_id');
				$v_lang_update['kwd_code_ctr_id'] = \E::get('obj_kernel_config')->get('impian/div_ctr_id');
				$v_lang_update['kwd_value'] = $v_row['division_name'];
				$v_lang_update['_rec_status'] = $v_update['_rec_status'];
				foreach($v_lang_info as $v_lang){
					$v_lang_update['kwd_lang'] = $v_lang;
					$v_result = \E::get('obj_system_module')->division_lbl_add($v_lang_update);
				}
			}
			
			unset($v_update);
			unset($v_lang_update);
		}
		$v_count += $v_tran;
		$v_info = $obj_imp->sync_division($v_search,$v_count,$v_tran);
	}
	unset($v_search);
	$v_update['tbl_imp_name'] = "t_pt_division";
	$v_update['next_sync_date'] = \U::add_day($obj_imp->__now('DATE'),1);
	\E::get('obj_system_module')->sync_log_update($v_update);
	
	//============================================================================
	// synchronize IMPIAN station(IMP) / loc_station(common share)
	//============================================================================
	$v_cond['tbl_imp_name'] = "t_pt_station";
	$v_sync_date = \E::get('obj_system_module')->sync_log_get($v_cond);
	if($v_sync_date && is_array($v_sync_date)){
		$v_search['update_date_from'] = $v_sync_date['next_sync_date'];
		$v_search['update_date_to'] = $obj_imp->__now('DATE');
	}else{
		$v_search = null;
	}
	
	$v_tran = 50;
	$v_count = 0;
	$v_info = $obj_imp->sync_station($v_search,$v_count,$v_tran);
	while($v_info && is_array($v_info)){
		foreach($v_info as $v_row){
			$v_cond['imp_station_id'] = $v_row['station_id'];
			$v_station_info = \E::get('obj_system_module')->station_get($v_cond);
			unset($v_cond);
			$v_cond['imp_division_id'] = $v_row['station_div_id'];
			$v_div_info = \E::get('obj_system_module')->division_get($v_cond);
			unset($v_cond);
			if($v_div_info && is_array($v_div_info)){
				if($v_station_info && is_array($v_station_info)){
					//======= Update =======
					$v_update['station_id'] = $v_station_info['station_id'];
					$v_update['div_id'] = $v_div_info['div_id'];
					$v_update['sta_id'] = \E::get('obj_kernel_config')->get('impian/div_str_id');
					$v_update['ctr_id'] = \E::get('obj_kernel_config')->get('impian/div_ctr_id');
					$v_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
					$v_update['_rec_sync_by'] = 'SCHEDULED';
					$v_update['_rec_status'] = strtoupper($v_row['active_flag'])=='A' ? 'SHOW' : 'DELETED';
					
					$v_result = \E::get('obj_system_module')->station_edit($v_update);
					
					if($v_update['_rec_status'] == 'SHOW'){
						$v_lang_update['kwd_code_station_id'] = $v_station_info['station_id'];
						$v_lang_update['kwd_code_div_id'] = $v_div_info['div_id'];
						$v_lang_update['kwd_code_sta_id'] = \E::get('obj_kernel_config')->get('impian/div_str_id');
						$v_lang_update['kwd_code_ctr_id'] = \E::get('obj_kernel_config')->get('impian/div_ctr_id');
						$v_lang_update['kwd_value'] = $v_row['station_name'];
						$v_lang_update['kwd_lang'] = \E::get('obj_kernel_config')->get('impian/default_update_lang');
						$v_result = \E::get('obj_system_module')->station_lbl_edit($v_lang_update);
					}else{
						$v_lang_update['kwd_code_station_id'] = $v_station_info['station_id'];
						$v_lang_update['kwd_code_div_id'] = $v_div_info['div_id'];
						$v_lang_update['kwd_code_sta_id'] = \E::get('obj_kernel_config')->get('impian/div_str_id');
						$v_lang_update['kwd_code_ctr_id'] = \E::get('obj_kernel_config')->get('impian/div_ctr_id');
						$v_lang_update['_rec_status'] = 'DELETED';
						foreach($v_lang_info as $v_lang){
							$v_lang_update['kwd_lang'] = $v_lang;
							$v_result = \E::get('obj_system_module')->station_lbl_edit($v_lang_update);
						}
					}
				}else{
					//======= Insert =======
					$v_update['div_id'] = $v_div_info['div_id'];
					$v_update['sta_id'] = \E::get('obj_kernel_config')->get('impian/div_str_id');
					$v_update['ctr_id'] = \E::get('obj_kernel_config')->get('impian/div_ctr_id');
					$v_update['imp_station_id'] = $v_row['station_id'];
					$v_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
					$v_update['_rec_sync_by'] = 'SCHEDULED';
					$v_update['_rec_status'] = strtoupper($v_row['active_flag'])=='A' ? 'SHOW' : 'DELETED';
					$v_station_id = \E::get('obj_system_module')->station_add($v_update);
					
					$v_lang_update['kwd_code_station_id'] = $v_station_id;
					$v_lang_update['kwd_code_div_id'] = $v_div_info['div_id'];
					$v_lang_update['kwd_code_sta_id'] = \E::get('obj_kernel_config')->get('impian/div_str_id');
					$v_lang_update['kwd_code_ctr_id'] = \E::get('obj_kernel_config')->get('impian/div_ctr_id');
					$v_lang_update['kwd_value'] = $v_row['station_name'];
					$v_lang_update['_rec_status'] = $v_update['_rec_status'];
					foreach($v_lang_info as $v_lang){
						$v_lang_update['kwd_lang'] = $v_lang;
						$v_result = \E::get('obj_system_module')->station_lbl_add($v_lang_update);
					}
				}
			}
			unset($v_lang_update);
			unset($v_update);
		}
		$v_count += $v_tran;
		$v_info = $obj_imp->sync_station($v_search,$v_count,$v_tran);
	}
	unset($v_search);
	$v_update['tbl_imp_name'] = "t_pt_station";
	$v_update['next_sync_date'] = \U::add_day($obj_imp->__now('DATE'),1);
	\E::get('obj_system_module')->sync_log_update($v_update);
	
	
	//============================================================================
	// synchronize IMPIAN t_ptk_info(IMP) / t_sys_user(common share)
	//============================================================================
	$v_cond['tbl_imp_name'] = "t_ptk_info";
	$v_sync_date = \E::get('obj_system_module')->sync_log_get($v_cond);
	if($v_sync_date && is_array($v_sync_date)){
		$v_search['update_date_from'] = $v_sync_date['next_sync_date'];
		$v_search['update_date_to'] = $obj_imp->__now('DATE');
	}else{
		$v_search = null;
	}
	
	$v_tran = 50;
	$v_count = 0;
	$v_info = $obj_imp->sync_ptk($v_search,$v_count,$v_tran);
	$v_mail_pattern = "/^.+@.+\..+$/";
	$v_num_pattern = "/^[0-9]+\-*[0-9]*$/";
	
	
	while($v_info && is_array($v_info)){ 
		
		foreach($v_info as $v_row){
			//======= Update =======
			if(strlen($v_row['emp_nw_ic_no']) == 12 ){
				$v_row['emp_nw_ic_no'] = substr($v_row['emp_nw_ic_no'], 0, 6).'-'.
										 substr($v_row['emp_nw_ic_no'], 6, 2).'-'.
										 substr($v_row['emp_nw_ic_no'], 8, 4);  
			}
			
			if (! preg_match($v_mail_pattern, $v_row['emp_email'])){
				$v_row['emp_email'] = '';
				//print "Email valid";
			}
			
			if (! preg_match($v_num_pattern, $v_row['emp_office_tel'])){
				$v_row['emp_office_tel'] = '';
				//print "num valid";
			}
			
			$v_update['usr_from'] = 'imp';
			$v_update['usr_full_name'] = $v_row['emp_name'];
			$v_update['usr_new_ic_no'] = $v_row['emp_nw_ic_no'];
			$v_update['pms_ic_no'] = '';
			$v_update['usr_email'] = $v_row['emp_email'];
			$v_update['mobile_no'] = $v_row['emp_hp_no'];
			$v_update['phone_office'] = $v_row['emp_office_tel'];
			$v_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
			$v_update['_rec_sync_by'] = 'SCHEDULED';
			$v_update['_rec_status'] = 'SHOW';
			
			$v_cond['employee_id'] = $v_row['employee_id'];
			$v_usr_info = \E::get('obj_system_module')->user_get($v_cond);
			unset($v_cond);
			if($v_usr_info && is_array($v_usr_info)){
				//======= Update =======
				$v_update['usr_id'] = $v_usr_info['usr_id'];
				
				
				$v_result = \E::get('obj_system_module')->user_edit($v_update);
			}else{
				//======= Insert =======
				$v_update['usr_short_name'] = '';
				$v_update['employee_id'] = $v_row['employee_id'];
				$v_usr_id = \E::get('obj_system_module')->user_add(null,$v_update);
			}
			unset($v_update);
			
		}
		$v_count += $v_tran;
		$v_info = $obj_imp->sync_ptk($v_search,$v_count,$v_tran);
	}
	unset($v_search);
	$v_update['tbl_imp_name'] = "t_ptk_info";
	$v_update['next_sync_date'] = \U::add_day($obj_imp->__now('DATE'),1);
	//\E::get('obj_system_module')->sync_log_update($v_update);
	
?>