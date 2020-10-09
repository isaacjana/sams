<?PHP
try{
	$obj_imp = new \moonlight\impian\impian;
}catch(\Exception $e){
	//echo 'Caught exception: ',  $e->getMessage(), "\n"; 
	print $e->getMessage();
	exit;
}
	$v_lang_info = \E::get('obj_system_module')->get_supported_lang();
	\E::set_session('usr_id','SCHEDULE');
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
	
	$v_tran = 100;
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
				$v_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
				$v_update['_rec_sync_by'] = 'SCHEDULED';
				$v_update['_rec_status'] = strtoupper($v_row['active_flag'])=='A' ? 'SHOW' : 'DELETED';
				
				$v_result = \E::get('obj_system_module')->agency_edit($v_update);
				
				if($v_update['_rec_status'] == 'SHOW'){
					$v_lang_update['kwd_code'] = $v_agency_info['ag_id'];
					$v_lang_update['kwd_value'] = $v_row['dept_name'];
					$v_lang_update['kwd_short_name'] = $v_row['dept_shortname'];
					$v_lang_update['kwd_lang'] = \E::get('obj_kernel_config')->get('impian/default_update_lang');
					$v_lang_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
					$v_lang_update['_rec_sync_by'] = 'SCHEDULED';
					$v_agency_id = \E::get('obj_system_module')->agency_lbl_edit($v_lang_update);
				}else{
					$v_lang_update['kwd_code'] = $v_agency_info['ag_id'];
					$v_lang_update['_rec_status'] = 'DELETED';
					$v_lang_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
					$v_lang_update['_rec_sync_by'] = 'SCHEDULED';
					foreach($v_lang_info as $v_lang){
						$v_lang_update['kwd_lang'] = $v_lang;
						$v_agency_id = \E::get('obj_system_module')->agency_lbl_edit($v_lang_update);
					}
				}
				
				unset($v_update);
			}else{
				//======= Insert =======
				$v_update['ag_cat_id'] = '2'; //1-private, 2-state, 3-federal
				$v_update['ag_code'] = $v_row['dept_code'];
				$v_update['ag_from'] = 'IMP';
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
				$v_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
				$v_update['_rec_sync_by'] = 'SCHEDULED';
				$v_update['_rec_status'] = strtoupper($v_row['active_flag'])=='A' ? 'SHOW' : 'DELETED';
				$v_agency_id = \E::get('obj_system_module')->agency_add($v_update);
				
				$v_lang_update['kwd_code'] = $v_agency_id;
				$v_lang_update['kwd_value'] = $v_row['dept_name'];
				$v_lang_update['kwd_short_name'] = $v_row['dept_shortname'];
				$v_lang_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
				$v_lang_update['_rec_sync_by'] = 'SCHEDULED';
				$v_lang_update['_rec_status'] = $v_update['_rec_status'];
				foreach($v_lang_info as $v_lang){
					$v_lang_update['kwd_lang'] = $v_lang;
					$v_update_result = \E::get('obj_system_module')->agency_lbl_add($v_lang_update);
				}
				unset($v_update);
				
				// Add ACL
				$v_dir = \U::get_all_dirs_name(MOONLIGHT_MODULE_PATH);
				foreach($v_dir as $v_class){
					if(strtoupper($v_class) == 'MMS'){
						$v_temp_class_name = '\\' . 'moonlight' . '\\' . $v_class . '\\' . $v_class;
						$v_temp_module = new $v_temp_class_name;
						$v_info['ag_id'] = $v_agency_id;
						$v_info['ad_id'] = 'hq'; //Here is hard code for the HQ
						$v_temp_module->auto_set_acl_group($v_info);
						unset($v_temp_module);
					}
				}
			}
		}
		$v_count += $v_tran;
		$v_info = $obj_imp->sync_dept($v_search,$v_count,$v_tran);
	}
	unset($v_search);
	$v_update['tbl_imp_name'] = "t_pt_department";
	$v_update['next_sync_date'] = \U::add_day($obj_imp->__now('DATE'));
	\E::get('obj_system_module')->sync_log_update($v_update);
	
	
	//============================================================================
	// synchronize IMPIAN Establisment(IMP) / Unit(common share)
	// synchronize IMPIAN Branch Code(IMP) / Unit(common share)
	//============================================================================
	$v_cond['tbl_imp_name'] = "t_branch_code";
	$v_sync_date = \E::get('obj_system_module')->sync_log_get($v_cond);
	if($v_sync_date && is_array($v_sync_date)){
		$v_search['update_date_from'] = $v_sync_date['next_sync_date'];
		$v_search['update_date_to'] = $obj_imp->__now('DATE');
	}else{
		$v_search = null;
	}
	
	$v_tran = 100;
	$v_count = 0;
	$v_info = $obj_imp->sync_branch($v_search,$v_count,$v_tran);
	while($v_info && is_array($v_info)){
		foreach($v_info as $v_row){
			$v_cond['imp_branch_id'] = $v_row['branch_id'];
			$v_unit_info = \E::get('obj_system_module')->unit_get($v_cond);
			
			if($v_unit_info && is_array($v_unit_info)){
				//======= Update =======
				$v_update['unit_id'] = $v_unit_info['unit_id'];
				$v_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
				$v_update['_rec_sync_by'] = 'SCHEDULED';
				$v_update['_rec_status'] = 'SHOW';
				$v_result = \E::get('obj_system_module')->unit_edit($v_update);
				
				if($v_update['_rec_status'] == 'SHOW'){
					$v_lang_update['kwd_code_unit_id'] = $v_unit_info['unit_id'];
					$v_lang_update['kwd_value'] = $v_row['branch_name'];
					$v_lang_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
					$v_lang_update['_rec_sync_by'] = 'SCHEDULED';
					$v_lang_update['_rec_status'] = $v_update['_rec_status'];
					$v_lang_update['kwd_lang'] = \E::get('obj_kernel_config')->get('impian/default_update_lang');
					$v_result = \E::get('obj_system_module')->unit_lbl_edit($v_lang_update);
					
					// Update Department information
					unset($v_cond);
					$v_cond['link_table_from'] = 'unit';
					$v_cond['link_id'] = $v_unit_info['unit_id'];
					$v_dept_info = \E::get('obj_system_module')->agency_dept_list($v_cond);
					if($v_dept_info && is_array($v_dept_info)){
						foreach($v_dept_info as $v_dept_row){
							unset($v_lang_update);
							$v_lang_update['kwd_lang'] = \E::get('obj_kernel_config')->get('impian/default_update_lang');
							$v_lang_update['kwd_value'] = $v_row['branch_name'];
							$v_lang_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
							$v_lang_update['_rec_sync_by'] = 'SCHEDULED';
							$v_lang_update['kwd_code_ad_id'] = $v_dept_row['kwd_code_ad_id'];
							
							$v_result = \E::get('obj_system_module')->agency_dept_lbl_edit($v_lang_update);
						}
					}
				}else{
					//Mark the record as Soft Delete
					$v_lang_update['kwd_code_unit_id'] = $v_unit_info['unit_id'];
					$v_lang_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
					$v_lang_update['_rec_sync_by'] = 'SCHEDULED';
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
				$v_update['imp_branch_id'] = $v_row['branch_id'];
				$v_update['unit_mobile'] = "";
				$v_update['unit_phone'] = "";
				$v_update['unit_fax'] = "";
				$v_update['unit_email'] = "";
				$v_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
				$v_update['_rec_sync_by'] = 'SCHEDULED';
				$v_update['_rec_status'] = 'SHOW';
				$v_unit_id = \E::get('obj_system_module')->unit_add($v_update);
				
				$v_lang_update['kwd_code_unit_id'] = $v_unit_id;
				$v_lang_update['kwd_value'] = $v_row['branch_name'];
				$v_lang_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
				$v_lang_update['_rec_sync_by'] = 'SCHEDULED';
				$v_lang_update['_rec_status'] = $v_update['_rec_status'];
				foreach($v_lang_info as $v_lang){
					$v_lang_update['kwd_lang'] = $v_lang;
					$v_result = \E::get('obj_system_module')->unit_lbl_add($v_lang_update);
				}
				unset($v_update);
			}
		}
		$v_count += $v_tran;
		$v_info = $obj_imp->sync_branch($v_search,$v_count,$v_tran);
	}
	unset($v_search);
	$v_update['tbl_imp_name'] = "t_branch_code";
	$v_update['next_sync_date'] = \U::add_day($obj_imp->__now('DATE'));
	\E::get('obj_system_module')->sync_log_update($v_update);
	
	print 'End for Unit/Branch!<br/>';
	
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
	
	$v_tran = 100;
	$v_count = 0;
	$v_info = $obj_imp->sync_division($v_search,$v_count,$v_tran);
	while($v_info && is_array($v_info)){
		foreach($v_info as $v_row){
			$v_cond['imp_division_id'] = $v_row['division_id'];
			$v_div_info = \E::get('obj_system_module')->division_get($v_cond);
			unset($v_cond);
			if($v_div_info && is_array($v_div_info)){
				//======= Update =======
				$v_update['div_id'] = $v_div_info['div_id'];
				$v_update['sta_id'] = \E::get('obj_kernel_config')->get('impian/div_str_id');
				$v_update['ctr_id'] = \E::get('obj_kernel_config')->get('impian/div_ctr_id');
				$v_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
				$v_update['_rec_sync_by'] = 'SCHEDULED';
				$v_update['_rec_status'] = strtoupper($v_row['active_flag'])=='A' ? 'SHOW' : 'DELETED';
				
				$v_result = \E::get('obj_system_module')->division_edit($v_update);
				
				if($v_update['_rec_status'] == 'SHOW'){
					$v_lang_update['kwd_code_div_id'] = $v_div_info['div_id'];
					$v_lang_update['kwd_code_sta_id'] = \E::get('obj_kernel_config')->get('impian/div_str_id');
					$v_lang_update['kwd_code_ctr_id'] = \E::get('obj_kernel_config')->get('impian/div_ctr_id');
					$v_lang_update['kwd_value'] = $v_row['division_name'];
					$v_lang_update['kwd_lang'] = \E::get('obj_kernel_config')->get('impian/default_update_lang');
					$v_lang_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
					$v_lang_update['_rec_sync_by'] = 'SCHEDULED';
					$v_result = \E::get('obj_system_module')->division_lbl_edit($v_lang_update);
					
					// Update dept information
					unset($v_cond);
					$v_cond['link_table_from'] = 'div';
					$v_cond['link_id'] = $v_div_info['div_id'];
					$v_dept_info = \E::get('obj_system_module')->agency_dept_list($v_cond);
					if($v_dept_info && is_array($v_dept_info)){
						foreach($v_dept_info as $v_dept_row){
							unset($v_lang_update);
							$v_lang_update['kwd_lang'] = \E::get('obj_kernel_config')->get('impian/default_update_lang');
							$v_lang_update['kwd_value'] = $v_row['division_name'];
							$v_lang_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
							$v_lang_update['_rec_sync_by'] = 'SCHEDULED';
							$v_lang_update['kwd_code_ad_id'] = $v_dept_row['kwd_code_ad_id'];
							
							$v_result = \E::get('obj_system_module')->agency_dept_lbl_edit($v_lang_update);
						}
					}
				}else{
					$v_lang_update['kwd_code_div_id'] = $v_div_info['div_id'];
					$v_lang_update['kwd_code_sta_id'] = \E::get('obj_kernel_config')->get('impian/div_str_id');
					$v_lang_update['kwd_code_ctr_id'] = \E::get('obj_kernel_config')->get('impian/div_ctr_id');
					$v_lang_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
					$v_lang_update['_rec_sync_by'] = 'SCHEDULED';
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
				$v_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
				$v_update['_rec_sync_by'] = 'SCHEDULED';
				$v_update['_rec_status'] = strtoupper($v_row['active_flag'])=='A' ? 'SHOW' : 'DELETED';
				$v_div_id = \E::get('obj_system_module')->division_add($v_update);
				
				$v_lang_update['kwd_code_div_id'] = $v_div_id;
				$v_lang_update['kwd_code_sta_id'] = \E::get('obj_kernel_config')->get('impian/div_str_id');
				$v_lang_update['kwd_code_ctr_id'] = \E::get('obj_kernel_config')->get('impian/div_ctr_id');
				$v_lang_update['kwd_value'] = $v_row['division_name'];
				$v_lang_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
				$v_lang_update['_rec_sync_by'] = 'SCHEDULED';
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
	$v_update['next_sync_date'] = \U::add_day($obj_imp->__now('DATE'));
	\E::get('obj_system_module')->sync_log_update($v_update);
	
	print 'End for Division.<br/>';
	
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
	
	$v_tran = 100;
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
						$v_lang_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
						$v_lang_update['_rec_sync_by'] = 'SCHEDULED';
						$v_result = \E::get('obj_system_module')->station_lbl_edit($v_lang_update);
						
					}else{
						$v_lang_update['kwd_code_station_id'] = $v_station_info['station_id'];
						$v_lang_update['kwd_code_div_id'] = $v_div_info['div_id'];
						$v_lang_update['kwd_code_sta_id'] = \E::get('obj_kernel_config')->get('impian/div_str_id');
						$v_lang_update['kwd_code_ctr_id'] = \E::get('obj_kernel_config')->get('impian/div_ctr_id');
						$v_lang_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
						$v_lang_update['_rec_sync_by'] = 'SCHEDULED';
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
					$v_lang_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
					$v_lang_update['_rec_sync_by'] = 'SCHEDULED';
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
	$v_update['next_sync_date'] = \U::add_day($obj_imp->__now('DATE'));
	\E::get('obj_system_module')->sync_log_update($v_update);
	
	print 'End for Station.<br/>';
	
	//============================================================================
	// synchronize IMPIAN t_title_code(IMP) / t_sys_user(common share)
	//============================================================================
	$v_cond['tbl_imp_name'] = "t_title_code";
	$v_sync_date = \E::get('obj_system_module')->sync_log_get($v_cond);
	if($v_sync_date && is_array($v_sync_date)){
		$v_search['update_date_from'] = $v_sync_date['next_sync_date'];
		$v_search['update_date_to'] = $obj_imp->__now('DATE');
	}else{
		$v_search = null;
	}
	
	$v_tran = 100;
	$v_count = 0;
	$v_info = $obj_imp->sync_user_title($v_search,$v_count,$v_tran);
	
	while($v_info && is_array($v_info)){ 
		foreach($v_info as $v_row){
			unset($v_cond);
			$v_cond['imp_id'] = $v_row['id'];
			$v_usr_title_info = \E::get('obj_system_module')->user_title_key_get($v_cond);
			if($v_usr_title_info && is_array($v_usr_title_info)){
				//======= Update =======
				$v_update['usr_title_id'] = $v_usr_title_info['usr_title_id'];
				$v_update['_rec_status'] = strtoupper($v_row['active_flag'])=='A' ? 'SHOW' : 'DELETED';
				$v_update['_rec_sync_by'] = 'SCHEDULED';
				$v_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
				
				$v_result = \E::get('obj_system_module')->user_title_key_edit($v_update);
				
				if($v_update['_rec_status'] == 'SHOW'){
					$v_lang_update['kwd_code'] = $v_usr_title_info['usr_title_id'];
					$v_lang_update['kwd_value'] = $v_row['namagelaran'];
					$v_lang_update['kwd_lang'] = \E::get('obj_kernel_config')->get('impian/default_update_lang');
					$v_lang_update['_rec_sync_by'] = 'SCHEDULED';
					$v_lang_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
					$v_result = \E::get('obj_system_module')->user_title_key_lbl_edit($v_lang_update);
				}else{
					$v_lang_update['kwd_code'] = $v_usr_title_info['usr_title_id'];
					$v_lang_update['_rec_status'] = 'DELETED';
					$v_lang_update['_rec_sync_by'] = 'SCHEDULED';
					$v_lang_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
					foreach($v_lang_info as $v_lang){
						$v_lang_update['kwd_lang'] = $v_lang;
						$v_result = \E::get('obj_system_module')->user_title_key_lbl_edit($v_lang_update);
					}
				}
			}else{
				//======= Insert =======
				$v_update['imp_id'] = $v_row['id'];
				$v_update['_rec_sync_by'] = 'SCHEDULED';
				$v_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
				$v_update['_rec_status'] = strtoupper($v_row['active_flag'])=='A' ? 'SHOW' : 'DELETED';
				$v_usr_title_id = \E::get('obj_system_module')->user_title_key_add($v_update);
				
				$v_lang_update['kwd_code'] = $v_usr_title_id;
				$v_lang_update['kwd_value'] = $v_row['namagelaran'];
				$v_lang_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
				$v_lang_update['_rec_sync_by'] = 'SCHEDULED';
				$v_lang_update['_rec_status'] = $v_update['_rec_status'];
				foreach($v_lang_info as $v_lang){
					$v_lang_update['kwd_lang'] = $v_lang;
					$v_result = \E::get('obj_system_module')->user_title_key_lbl_add($v_lang_update);
				}
			}
			
			unset($v_update);
			unset($v_lang_update);
		}
		$v_search['id_more'] = $v_row['id'];
		$v_info = $obj_imp->sync_user_title($v_search,$v_count,$v_tran);
	}
	unset($v_search);
	$v_update['tbl_imp_name'] = "t_title_code";
	$v_update['next_sync_date'] = \U::add_day($obj_imp->__now('DATE'));
	\E::get('obj_system_module')->sync_log_update($v_update);
	
	print 'End for Title.<br/>';
	
	
	//============================================================================
	// synchronize IMPIAN v_ptk_info(IMP) / t_sys_user(common share)
	//============================================================================
	$v_cond['tbl_imp_name'] = "v_ptk_info";
	$v_sync_date = \E::get('obj_system_module')->sync_log_get($v_cond);
	if($v_sync_date && is_array($v_sync_date)){
		$v_search['update_date_from'] = $v_sync_date['next_sync_date'];
		$v_search['update_date_to'] = $obj_imp->__now('DATE');
	}else{
		$v_search = null;
	}
	
	$v_tran = 200;
	$v_count = 0;
	// $v_total_run = 0;
	//$v_search['employee_id_more'] = '575145';
	// $v_search['employee_id_more'] = 'P4IAHS6007124444 ';
	if(isset($_GET['imp_id'])){
		print '<br/>Hit Employee Id';
		$v_search['employee_id_more'] = $_GET['imp_id'];
		// exit;
	}
	$v_info = $obj_imp->sync_ptk($v_search,$v_count,$v_tran);
	$v_mail_pattern = "/^.+@.+\..+$/";
	$v_num_pattern = "/^[0-9]+\-*[0-9]*$/";
	$v_num_now = 0;
	
	while($v_info && is_array($v_info)){
		++$v_num_now;
		foreach($v_info as $v_row){
			// ++$v_total_run;
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
			$v_update['usr_email'] = ''; // $v_row['emp_email'];
			$v_update['mobile_no'] = $v_row['emp_hp_no'];
			$v_update['phone_office'] = $v_row['emp_office_tel'];
			$v_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
			$v_update['_rec_sync_by'] = 'SCHEDULED';
			$v_update['_rec_status'] = 'SHOW';
			
			$v_cond['employee_id'] = $v_row['employee_id'];
			$v_imp_employee_id = $v_row['employee_id'];
			$v_usr_info = \E::get('obj_system_module')->user_get($v_cond);
			unset($v_cond);
			if($v_usr_info && is_array($v_usr_info)){
				//======= Update =======
				$v_update['usr_id'] = $v_usr_info['usr_id'];
				$v_usr_id = $v_usr_info['usr_id'];
				
				$v_result = \E::get('obj_system_module')->user_edit($v_update);
				
				update_from_ldap($v_usr_id, $v_update['usr_new_ic_no'],$v_update['usr_full_name'] );
			}else{
				//======= Insert =======
				$v_update['usr_short_name'] = '';
				$v_update['employee_id'] = $v_row['employee_id'];
				$v_usr_id = \E::get('obj_system_module')->user_add(null,$v_update);
				
				update_from_ldap($v_usr_id, $v_update['usr_new_ic_no'],$v_update['usr_full_name'] );
			}
			unset($v_update);
			
			//======= Update Title =======
			unset($v_cond);
			$v_cond['imp_id'] = $v_row['emp_title'];
			$v_usr_title_key_info = \E::get('obj_system_module')->user_title_key_get($v_cond);
			$v_usr_title_info = \E::get('obj_system_module')->user_title_get($v_usr_id);
			$v_update_title = true;
			if($v_usr_title_info && is_array($v_usr_title_info)){
				//echo 'usr_id = '.$v_usr_id.' @@@ title_get = '.$v_usr_title_info['usr_title_id']. ' @@@ IMP_title = ' . $v_usr_title_key_info['usr_title_id'].'<br/>';
				if($v_usr_title_key_info['usr_title_id'] == $v_usr_title_info['usr_title_id']){
					$v_update_title = false;
				}
			}
			//===== Insert New User Title
			if($v_update_title){
				$v_update['usr_id'] = $v_usr_id;
				$v_update['usr_title_id'] = $v_usr_title_key_info['usr_title_id'];
				$v_update['_rec_status'] = 'SHOW';
				$v_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
				$v_update['_rec_sync_by'] = 'SCHEDULED';
				if($v_row['_employee_updated_date'] != ''){
					$v_update['usr_title_sta_date'] = $v_row['_employee_updated_date'];
				}else if($v_row['_employee_entered_date'] != ''){
					$v_update['usr_title_sta_date'] = $v_row['_employee_entered_date'];
				}else{
					$v_update['usr_title_sta_date'] = \E::get('obj_system_module')->__now();
				}
				$v_result = \E::get('obj_system_module')->user_title_add($v_update);
			}
		}
		
		$v_search['employee_id_more'] = $v_imp_employee_id;
		$v_info = $obj_imp->sync_ptk($v_search,$v_count,$v_tran);
		
		// if($v_total_run >= 2000){ $v_info = null; break; }
		//===============================================================================
		//$v_info = null;
		//===============================================================================
	}
	unset($v_search);
	$v_update['tbl_imp_name'] = "v_ptk_info";
	$v_update['next_sync_date'] = \U::add_day($obj_imp->__now('DATE'));
	\E::get('obj_system_module')->sync_log_update($v_update);
	print "Employee Id: $v_imp_employee_id <br/>";
	
	print 'End for PTK Info';
	// exit;
	
	//============================================================================
	// synchronize IMPIAN v_all_post_info(IMP) / t_sys_user_position(common share)
	//============================================================================
	$v_cond['tbl_imp_name'] = "v_all_post_info";
	$v_sync_date = \E::get('obj_system_module')->sync_log_get($v_cond);
	unset($v_search);
	if($v_sync_date && is_array($v_sync_date)){
		$v_search['update_date_from'] = $v_sync_date['next_sync_date'];
		$v_search['update_date_to'] = $obj_imp->__now('DATE');
	}else{
		$v_search = null;
	}
	
	//$v_search['post_Id_more'] = '0000022660';
	//$v_search['post_Id_more'] = '0000012189';
	//$v_search['post_Id_more'] = '0000022699';
	if(isset($_GET['imp_post_id'])){ 
		print '<br/>hit position<br/>';
		$v_search['post_Id_more'] = $_GET['imp_post_id'];
		// exit;
	}
	$v_tran = 100;
	$v_count = 0;
	// $v_total_run = 0;
	$v_info = $obj_imp->sync_all_post($v_search,$v_count,$v_tran);
	
	while($v_info && is_array($v_info)){
		foreach($v_info as $v_row){
			// ++$v_total_run;
			//print $v_total_run.'<br/>';
			$v_imp_post_id = $v_row['post_Id'];
			//======= Update =======
			unset($v_cond);
			$v_cond['employee_id'] = $v_row['employee_id'];
			$v_usr_info = \E::get('obj_system_module')->user_get($v_cond);
			$v_update['usr_id'] = $v_usr_info['usr_id'];
			if($v_usr_info['usr_id'] != ''){
				unset($v_cond);
				$v_cond['employee_id'] = $v_row['employee_id'];
				$v_cond['post_id'] = $v_row['post_Id'];
				$v_ptk_info = $obj_imp->sync_ptk($v_cond);
				if($v_ptk_info && is_array($v_ptk_info)){
					$v_update['pos_default'] = '1';
				}else{
					$v_update['pos_default'] = '0';
				}
				
				// Department
				if(!isset($v_agency_arr[$v_row['department_id']])){
					unset($v_cond);
					$v_cond['imp_dept_id'] = $v_row['department_id'];
					$v_agency_info = \E::get('obj_system_module')->agency_get($v_cond);
					$v_agency_arr[$v_row['department_id']] = $v_agency_info;
				}else{
					$v_agency_info = $v_agency_arr[$v_row['department_id']];
				}
				$v_update['ag_id'] = $v_agency_info['ag_id'];
				
				//===Start: Get unit @@ Edit on 20 april 2011
				//			If physical_branch == '' then will set the unit_id as empty
				//			For the JKM, sys_ad_id will be 'HQ'
				if($v_row['physical_branch'] != ''){
					if(!isset($v_unit_arr[$v_row['physical_branch']])){
						unset($v_cond);
						$v_cond['imp_branch_id'] = $v_row['physical_branch'];
						$v_unit_info = \E::get('obj_system_module')->unit_get($v_cond);
						$v_unit_arr[$v_row['physical_branch']] = $v_unit_info;
					}else{
						$v_unit_info = $v_unit_arr[$v_row['physical_branch']];
					}
					$v_update['unit_id'] = $v_unit_info['unit_id'];
				}else{
					$v_update['unit_id'] = '';
				}
				// print 'Unit: '.$v_update['unit_id'].'@@@ physical_branch:'.$v_row['physical_branch'] .'@@@ pos_default:'.$v_update['pos_default'].'<br/>';
				
				//===Start: Get the Station
				if(!isset($v_station_arr[$v_row['station_id']])){
					unset($v_cond);
					$v_cond['imp_station_id'] = $v_row['station_id'];
					$v_station_info = \E::get('obj_system_module')->station_get($v_cond);
					$v_station_arr[$v_row['station_id']] = $v_station_info;
				}else{
					$v_station_info = $v_station_arr[$v_row['station_id']];
				}
				$v_update['station_id'] = $v_station_info['station_id'];
				$v_update['div_id'] = $v_station_info['div_id'];
				
				// Physical Department
				//===Start: As the physical_dept is dept_shortname. Thus need to get the dept_id from IMPIAN table. 
				//===		Don't know whose is the IMPIAN developer, it should use dept_id
				unset($v_dept_cond);
				$v_dept_cond['dept_shortname'] = $v_row['physical_dept'];
				$v_phy_dept_info = $obj_imp->dept_get($v_dept_cond);
				if($v_phy_dept_info && is_array($v_phy_dept_info)){
					$v_physical_dept = $v_phy_dept_info['dept_id'];
				}else{
					$v_physical_dept = '';
				}
				//===End===
				
				if(!isset($v_agency_arr[$v_physical_dept])){
					unset($v_cond);
					$v_cond['imp_dept_id'] = $v_physical_dept;
					$v_agency_info = \E::get('obj_system_module')->agency_get($v_cond);
					$v_agency_arr[$v_physical_dept] = $v_agency_info;
				}else{
					$v_agency_info = $v_agency_arr[$v_physical_dept];
				}
				$v_update['physical_ag_id'] = $v_agency_info['ag_id'];
				
				// Physical Station
				if(!isset($v_station_arr[$v_row['physical_station']])){
					unset($v_cond);
					$v_cond['imp_station_id'] = $v_row['physical_station'];
					$v_station_info = \E::get('obj_system_module')->station_get($v_cond);
					$v_station_arr[$v_row['physical_station']] = $v_station_info;
				}else{
					$v_station_info = $v_station_arr[$v_row['physical_station']];
				}
				$v_update['physical_station_id'] = $v_station_info['station_id'];
				
				//Division
				if(!isset($v_div_arr[$v_row['physical_division']])){
					unset($v_cond);
					$v_cond['imp_division_id'] = $v_row['physical_division'];
					$v_div_info = \E::get('obj_system_module')->division_get($v_cond);
					$v_div_arr[$v_row['physical_division']] = $v_div_info;
				}else{
					$v_div_info = $v_div_arr[$v_row['physical_division']];
				}
				$v_update['physical_div_id'] = $v_div_info['div_id'];
				$v_update['physical_office'] = strtoupper($v_row['physical_office']);
				
				$v_update['pos_grade'] = $v_row['sal_grade_code'];
				$v_update['pos_sta_date'] = ($v_row['_appointed_date'] == '' ? \E::get('obj_system_module')->__now('DATE') : $v_row['_appointed_date']);
				$v_update['pos_name'] = $v_row['actual_post_name'];
				$v_update['pos_desc'] = $v_row['job_description'];
				$v_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
				$v_update['_rec_sync_by'] = 'SCHEDULED';
				$v_update['_rec_status'] = 'SHOW';
				
				//===Start: To decide which is the system agency and department for user position
				//			If the position is default, then it should take physical department and physical division.
				//			Otherwise will take user actual department.
				//			For JKM agency, branch will trip as a 2 level organization chart.
				
				// $v_unit_dept_arr = array('JKM','R1D','R2D','R3D','R4D','R5D','R6D','R7D','R8D','R9D','R10D','R11D');
				$v_unit_dept_arr = array('JKM');
				if($v_update['pos_default'] == '1'){
					//===IF: Default position
					$v_ag_from = $v_physical_dept;
					$v_ag_id = $v_update['physical_ag_id'];
					if (in_array($v_ag_from ,$v_unit_dept_arr)){
						//===IF: Agency from JKM will need to select unit/branch(IMPIAN)
						$v_link_table = 'unit';
						if($v_update['unit_id']!=''){
							$v_ad_id = $v_update['unit_id'];
						}else{
							//===Else: unit_id will be empty as the user do not define branch
							$v_ad_id = 'hq';
						}
						// $v_ag_from = $v_row['department_id'];
						// $v_ag_id = $v_update['ag_id'];
						// if (in_array($v_ag_from ,$v_unit_dept_arr)){
							// $v_link_table = 'unit';
							// $v_ad_id = $v_update['unit_id'];
						// }else{
							// $v_link_table = 'div';
							// $v_ad_id = $v_update['div_id'];
						// }
						
					}else{
						$v_link_table = 'div';
						//===IF: When user physical_office is I, then need to set as HQ. I = Ibu pejabat
						if($v_update['physical_office'] != 'I'){
							$v_ad_id = $v_update['physical_div_id'];
						}else{
							$v_ad_id = 'hq';
						}
					}
				}else{
					//===ELSE: Non-default position
					$v_ag_from = $v_row['department_id'];
					$v_ag_id = $v_update['ag_id'];
					if (in_array($v_ag_from ,$v_unit_dept_arr)){
						$v_link_table = 'unit';
						// $v_ad_id = $v_update['unit_id'];
						$v_ad_id = 'hq';
					}else{
						$v_link_table = 'div';
						$v_ad_id = $v_update['div_id'];
					}
				}
				//===End===
				
				if(!isset($v_dept_arr[$v_link_table.'@'.$v_ag_id.'@'.$v_ad_id])){
					$v_dept_info = get_dept_id($v_link_table, $v_ag_id, $v_ad_id, $v_lang_info);
					$v_dept_arr[$v_link_table.'@'.$v_ag_id.'@'.$v_ad_id] = $v_dept_info;
				}else{
					$v_dept_info = $v_dept_arr[$v_link_table.'@'.$v_ag_id.'@'.$v_ad_id];
				}
				
				//print  '====== '.$v_link_table.'@'.$v_ag_id.'@'.$v_ad_id.' =====<br> ';
				$v_update['remark'] = $v_link_table.'@'.$v_ag_id.'@'.$v_ad_id;
				$v_update['sys_ag_id'] = $v_ag_id;
				$v_update['sys_ad_id'] = $v_dept_info['ad_id'];
				
				unset($v_cond);
				$v_cond['imp_post_id'] = $v_row['post_Id'];
				//$v_imp_post_id = $v_row['post_Id'];
				$v_usr_info = \E::get('obj_system_module')->position_get($v_cond);
				unset($v_cond);
				
				// Unset all the pos_default to '0'
				if($v_update['pos_default'] == '1'){
					unset($v_cond);
					
					$v_cond['not_id'] = $v_usr_info['id']; 
					$v_cond['usr_id'] = $v_update['usr_id']; 
					$v_cond['pos_default'] = '1'; 
					$v_usr_second_info = \E::get('obj_system_module')->position_get($v_cond);
					
					while($v_usr_second_info && is_array($v_usr_second_info) ){
						// print '<div style="background:RED;color:#FFF">Hit!!!'.$v_update['usr_id'].'</div>';
						
						if(!isset($v_agency_id_arr[$v_usr_second_info['ag_id']])){
							unset($v_cond);
							$v_cond['ag_id'] = $v_usr_second_info['ag_id'];
							$v_agency_id_info = \E::get('obj_system_module')->agency_get($v_cond);
							$v_agency_id_arr[$v_usr_second_info['ag_id']] = $v_agency_id_info;
						}else{
							$v_agency_id_info = $v_agency_id_arr[$v_usr_second_info['ag_id']];
						}
						
						$v_ag_from = $v_agency_id_info['imp_dept_id'];
						$v_ag_id = $v_usr_second_info['ag_id']; ///////////////////////////////////////////////////////////
						if (in_array($v_ag_from ,$v_unit_dept_arr)){
							$v_link_table = 'unit';
							$v_ad_id = $v_usr_second_info['unit_id'];
						}else{
							$v_link_table = 'div';
							$v_ad_id = $v_usr_second_info['div_id'];
						}
						
						//print  'Other'.$v_link_table.'@'.$v_ag_id.'@'.$v_ad_id.'<br>';
						if(!isset($v_dept_arr[$v_link_table.'@'.$v_ag_id.'@'.$v_ad_id])){
							$v_dept_info = get_dept_id($v_link_table, $v_ag_id, $v_ad_id, $v_lang_info);
							$v_dept_arr[$v_link_table.'@'.$v_ag_id.'@'.$v_ad_id] = $v_dept_info;
						}else{
							$v_dept_info = $v_dept_arr[$v_link_table.'@'.$v_ag_id.'@'.$v_ad_id];
						}
						
						$v_pos_update['id'] = $v_usr_second_info['id'];
						$v_pos_update['pos_default'] = '0';
						$v_pos_update['sys_ag_id'] = $v_ag_id;
						$v_pos_update['sys_ad_id'] = $v_dept_info['ad_id'];
						$v_result = \E::get('obj_system_module')->position_edit($v_pos_update);
						
						unset($v_cond);
						$v_cond['not_id'] = $v_usr_info['id']; 
						$v_cond['usr_id'] = $v_update['usr_id']; 
						$v_cond['pos_default'] = '1'; 
						$v_usr_second_info = \E::get('obj_system_module')->position_get($v_cond);
					}
					// print '<hr/>';
					
					/*$v_sub_update['pos_default'] = '0';
					$v_sub_update['usr_id'] = $v_usr_info['usr_id'];
					$v_result = \E::get('obj_system_module')->position_edit($v_sub_update);*/
				}
				
				
				if($v_usr_info && is_array($v_usr_info)){
					//======= Update =======
					$v_update['id'] = $v_usr_info['id'];
					$v_update['pos_status'] = 'A';
					$v_result = \E::get('obj_system_module')->position_edit($v_update);
				}else{
					//======= Insert =======
					$v_update['imp_post_slot_id'] = $v_row['post_slot_id'];
					$v_update['imp_post_id'] = $v_row['post_Id'];
					$v_usr_id = \E::get('obj_system_module')->position_add($v_update);
				}
				unset($v_update);
			}
		}
		$v_search['post_Id_more'] = $v_imp_post_id;
		$v_info = $obj_imp->sync_all_post($v_search,$v_count,$v_tran);
		
		// if($v_total_run >= 4000){ $v_info = null; }
		// $v_info = null; //===Testing: Added for the first time testing
	}
	
	unset($v_search);
	$v_update['tbl_imp_name'] = "v_all_post_info";
	$v_update['next_sync_date'] = \U::add_day($obj_imp->__now('DATE'));
	\E::get('obj_system_module')->sync_log_update($v_update);
	
	print "v_imp_post_id: $v_imp_post_id";
	print '<br/>';
	
	//============================================================================
	// synchronize IMPIAN t_cm_personal_post_history(IMP) / t_sys_user(common share)
	//============================================================================
	$v_cond['tbl_imp_name'] = "t_cm_personal_post_history";
	$v_sync_date = \E::get('obj_system_module')->sync_log_get($v_cond);
	if($v_sync_date && is_array($v_sync_date)){
		$v_search['update_date_from'] = $v_sync_date['next_sync_date'];
		$v_search['update_date_to'] = $obj_imp->__now('DATE');
	}else{
		$v_search = null;
	}
	
	//$v_search['pn_post_hist_id_more'] = 'N';
	//$v_search['post_slot_id_more'] = 'J';
	//$v_search['pn_post_hist_id_more'] = 'OBBHBV2008113373';
	//$v_search['pn_post_hist_id_more'] = 'OBMCXF3007910061';
	//$v_search['pn_post_hist_id_more'] = 'P2MBW93010027966';
	//$v_search['pn_post_hist_id_more'] = 'O47CYS3014224903';
	//$v_search['pn_post_hist_id_more'] = 'O91FEq8007719637';
	if(isset($_GET['pn_post_hist_id_more'])){
		print '<br/>Hit history<br/>';
		$v_search['pn_post_hist_id_more'] = $_GET['pn_post_hist_id_more'];
		// exit;
	}
	
	$v_tran = 200;
	$v_count = 0;
	$v_info = $obj_imp->sync_post_history($v_search,$v_count,$v_tran);
	// $v_num = 0;
	
	while($v_info && is_array($v_info)){
		
		foreach($v_info as $v_row){
			// ++$v_num;
			
			unset($v_cond);
			$v_cond['employee_id'] = $v_row['employee_id'];
			$v_cond['post_slot_id'] = $v_row['post_slot_id'];
			$v_check_info = $obj_imp->sync_all_post($v_cond,0,100);
			// print $v_num.') check...<br/>';
			// print '<pre>';
				// print_r($v_check_info);
			// print '</pre>';
			if(!is_array($v_check_info)){
				// print '<div>Hit!!! '.$v_row['post_slot_id'].' @@@ '.$v_row['employee_id'].'</div>';
				unset($v_cond);
				$v_cond['employee_id'] = $v_row['employee_id'];
				$v_usr_info = \E::get('obj_system_module')->user_get($v_cond);
				
				if($v_usr_info && is_array($v_usr_info)){
					//======= Update =======
					$v_update['imp_post_slot_id'] = $v_row['post_slot_id'];
					$v_update['usr_id@WHERE'] = $v_usr_info['usr_id'];
					$v_update['pos_status'] = 'H';
					$v_update['_rec_sync_on'] = \E::get('obj_system_module')->__now();
					$v_update['_rec_sync_by'] = 'SCHEDULED';
					//$v_update['_rec_status'] = 'SHOW';
					
					$v_result = \E::get('obj_system_module')->position_edit($v_update);
					
					unset($v_update);
				}
			}
			
			//===Used for check where it had been synchronize
			$v_update_log['tbl_imp_name'] = "post_history";
			$v_update_log['next_sync_date'] = \U::add_day($obj_imp->__now('DATE'));
			$v_update_log['_rec_deleted_by'] =  $v_row['pn_post_hist_id'];
			\E::get('obj_system_module')->sync_log_update($v_update_log);
			
		}
		//$v_count += $v_tran;
		$v_search['pn_post_hist_id_more'] = $v_row['pn_post_hist_id'];
		print  $v_row['pn_post_hist_id'].' end<br>';
		$v_info = $obj_imp->sync_post_history($v_search,$v_count,$v_tran);
		
		// $v_info = null;
		// if($v_num >= 2000){ $v_info = null;}
	}
	
	unset($v_search);
	$v_update['tbl_imp_name'] = "t_cm_personal_post_history";
	$v_update['next_sync_date'] = \U::add_day($obj_imp->__now('DATE'));
	\E::get('obj_system_module')->sync_log_update($v_update);
	
	print "pn_post_hist_id_more: {$v_search['pn_post_hist_id_more']}";
	// print '<br/>';
	// exit;
	
	// P53GKC1009999413
	
	function get_dept_id($p_link_table, $p_ag_id, $p_ad_id, $p_lang_info){
		if($p_ad_id == 'hq'){
			$v_dept_info['ad_id'] = 'hq';
			return $v_dept_info;
		}
		
		unset($v_cond);
		$v_cond['link_table_from'] = $p_link_table;
		$v_cond['link_id'] = $p_ad_id;
		$v_cond['ag_id'] = $p_ag_id;
		$v_dept_info = \E::get('obj_system_module')->agency_dept_get($v_cond);
		if($v_dept_info && is_array($v_dept_info)){
		}else{
			// Add New Department
			if($p_link_table == 'unit'){
				// From Unit
				$v_search['unit_id'] = $p_ad_id;
				$v_search_result = \E::get('obj_system_module')->unit_get($v_search);
				if($v_search_result && is_array($v_search_result)){
					$v_add['ag_id'] = $p_ag_id;
					$v_add['link_table_from'] = $p_link_table;
					$v_add['link_id'] = $p_ad_id;
					$v_add['_rec_sync_on'] = \E::get('obj_system_module')->__now();
					$v_add['_rec_sync_by'] = 'SCHEDULED';
					$v_add['_rec_status'] = $v_search_result['_rec_status'];
					$v_dept_id = \E::get('obj_system_module')->agency_dept_add($v_add);
					
					//Add Language
					foreach($p_lang_info as $v_lang){
						$v_search['kwd_lang'] = $v_lang;
						$v_lang_result = \E::get('obj_system_module')->unit_get($v_search);
						if($v_lang_result && is_array($v_lang_result)){
							$v_lang_add['kwd_code_ag_id'] = $p_ag_id;
							$v_lang_add['kwd_code_ad_id'] = $v_dept_id;
							$v_lang_add['kwd_lang'] = $v_lang;
							$v_lang_add['kwd_value'] = $v_lang_result['kwd_value'];
							$v_lang_add['kwd_short_name'] = $v_lang_result['kwd_short_name'];
							$v_lang_add['_rec_sync_on'] = \E::get('obj_system_module')->__now();
							$v_lang_add['_rec_sync_by'] = 'SCHEDULED';
							$v_lang_add['_rec_status'] = $v_lang_result['_rec_status'];
							$v_update_result = \E::get('obj_system_module')->agency_dept_lbl_add($v_lang_add);
						}
					}
					
					// Add ACL
					$v_dir = \U::get_all_dirs_name(MOONLIGHT_MODULE_PATH);
					foreach($v_dir as $v_class){
						if(strtoupper($v_class) == 'MMS'){
							$v_temp_class_name = '\\' . 'moonlight' . '\\' . $v_class . '\\' . $v_class;
							$v_temp_module = new $v_temp_class_name;
							$v_info['ag_id'] = $p_ag_id;
							$v_info['ad_id'] = $v_dept_id; //Here is hard code for the HQ
							$v_temp_module->auto_set_acl_group($v_info);
							unset($v_temp_module);
						}
					}
				}
			}else{
				// From Division
				$v_search['div_id'] = $p_ad_id;
				$v_search_result = \E::get('obj_system_module')->division_get($v_search);
				if($v_search_result && is_array($v_search_result)){
					$v_add['ag_id'] = $p_ag_id;
					$v_add['link_table_from'] = $p_link_table;
					$v_add['link_id'] = $p_ad_id;
					$v_add['_rec_sync_on'] = \E::get('obj_system_module')->__now();
					$v_add['_rec_sync_by'] = 'SCHEDULED';
					$v_add['_rec_status'] = $v_search_result['_rec_status'];
					$v_dept_id = \E::get('obj_system_module')->agency_dept_add($v_add);
					
					//Add Language
					foreach($p_lang_info as $v_lang){
						$v_search['kwd_lang'] = $v_lang;
						$v_lang_result = \E::get('obj_system_module')->division_get($v_search);
						if($v_lang_result && is_array($v_lang_result)){
							$v_lang_add['kwd_code_ag_id'] = $p_ag_id;
							$v_lang_add['kwd_code_ad_id'] = $v_dept_id;
							$v_lang_add['kwd_lang'] = $v_lang;
							$v_lang_add['kwd_value'] = $v_lang_result['kwd_value'];
							$v_lang_add['kwd_short_name'] = '';
							$v_lang_add['_rec_sync_on'] = \E::get('obj_system_module')->__now();
							$v_lang_add['_rec_sync_by'] = 'SCHEDULED';
							$v_lang_add['_rec_status'] = $v_lang_result['_rec_status'];
							$v_update_result = \E::get('obj_system_module')->agency_dept_lbl_add($v_lang_add);
						}
					}
					
					// Add ACL
					$v_dir = \U::get_all_dirs_name(MOONLIGHT_MODULE_PATH);
					foreach($v_dir as $v_class){
						if(strtoupper($v_class) == 'MMS'){
							$v_temp_class_name = '\\' . 'moonlight' . '\\' . $v_class . '\\' . $v_class;
							$v_temp_module = new $v_temp_class_name;
							$v_info['ag_id'] = $p_ag_id;
							$v_info['ad_id'] = $v_dept_id; //Here is hard code for the HQ
							$v_temp_module->auto_set_acl_group($v_info);
							unset($v_temp_module);
						}
					}
				}
			}
			$v_cond['link_table_from'] = $p_link_table;
			$v_cond['link_id'] = $p_ad_id;
			$v_cond['ag_id'] = $p_ag_id;
			$v_dept_info = \E::get('obj_system_module')->agency_dept_get($v_cond);
		}
		return $v_dept_info;
	}
	
	function update_from_ldap($p_usr_id, $p_new_ic_no,$p_full_name ){
		$v_update_record  = false;
		$v_ldap = \E::get('obj_system_module')->ldap_search_fullname($p_full_name);
		if($v_ldap && is_array($v_ldap)){
			foreach($v_ldap as $v_ldap_row){
				$v_ldap_ic = str_replace('-','',$v_ldap_row['new_ic']);
				$v_imp_id = str_replace('-','',$p_new_ic_no);
				if($v_ldap_ic == $v_imp_id){
					$v_update['usr_id'] = $p_usr_id;
					$v_update['usr_email'] = $v_ldap_row['email'];
					$v_update['usr_short_name'] = $v_ldap_row['ldap_id'];
					
					$v_update_result = \E::get('obj_system_module')->user_edit($v_update);
					$v_update_record = true;
					break;
				}
			}
		}
		
		if(!$v_update_record){
			$v_search_patt = array(	' ANAK ', 
									' ANAK. ', 
									' A/K ', 
									' AK ', 
									' AK. ', 
									' BINTI ', 
									' BINTI. ', 
									' BTE ', 
									' BTE. ',
									' BT ', 
									' BT. ', 
									' BIN ', 
									' B ', 
									' B. ', 
									'HAJI ',
									'HJ ',
									'HJ. ',
									'AWANG ',
									'AWG ',
									'AWG. ',
									'MOHAMAD ',
									'MOHAMED ',
									'MOHD ',
									'MOHD. ',
									'MD ',
									'MD. ',
									'DAYANG ',
									'DYG ',
									'DYG. ',
									'DAYANGKU ',
									'DYGKU ',
									'DYGKU. ',
									'@',
									'ABD',
									'ABD.',
									'ABDUL',
									'ABDUL ',
									'ABDULLAH',
									'ABDULLAH ',
									'ABG.',
									'ABANG',
									'ABANG ',
									'ABANG.',
									'ABANG. ',
									'-',
									);
			$v_search_name = str_replace($v_search_patt, '*', strtoupper($p_full_name));
			$v_search_name = '*'.$v_search_name.'*';
			$v_search_name = str_replace('****','*',$v_search_name);
			$v_search_name = str_replace('***','*',$v_search_name);
			$v_search_name = str_replace('**','*',$v_search_name);
			
			$v_ldap = \E::get('obj_system_module')->ldap_search_fullname($v_search_name);
			if($v_ldap && is_array($v_ldap)){
				foreach($v_ldap as $v_ldap_row){
					$v_ldap_ic = str_replace('-','',$v_ldap_row['new_ic']);
					$v_imp_id = str_replace('-','',$p_new_ic_no);
					if($v_ldap_ic == $v_imp_id){
						//print $v_search_name . '<br/>';
						
						$v_update['usr_id'] = $p_usr_id;
						$v_update['usr_email'] = $v_ldap_row['email'];
						$v_update['usr_short_name'] = $v_ldap_row['ldap_id'];
						
						$v_update_result = \E::get('obj_system_module')->user_edit($v_update);
						$v_update_record = true;
						break;
					}
				}
			}
		}
		
		if(!$v_update_record){
			//print 'Hit here';
			$v_full_name_arr = explode('@',$p_full_name);
			if(count($v_full_name_arr) > 1){
				//print ' '.count($v_full_name_arr).' ';
				foreach($v_full_name_arr as $v_row_name){
					$v_row_name = trim($v_row_name);
					$v_search_name = str_replace($v_search_patt, '*', strtoupper($v_row_name));
					$v_search_name = '*'.$v_search_name.'*';
					$v_search_name = str_replace('****','*',$v_search_name);
					$v_search_name = str_replace('***','*',$v_search_name);
					$v_search_name = str_replace('**','*',$v_search_name);
					$v_ldap = \E::get('obj_system_module')->ldap_search_fullname($v_search_name);
					if($v_ldap && is_array($v_ldap)){
						foreach($v_ldap as $v_ldap_row){
							$v_ldap_ic = str_replace('-','',$v_ldap_row['new_ic']);
							$v_imp_id = str_replace('-','',$p_new_ic_no);
							if($v_ldap_ic == $v_imp_id){
								//print $v_search_name . '<br/>';
								
								$v_update['usr_id'] = $p_usr_id;
								$v_update['usr_email'] = $v_ldap_row['email'];
								$v_update['usr_short_name'] = $v_ldap_row['ldap_id'];
								
								$v_update_result = \E::get('obj_system_module')->user_edit($v_update);
								$v_update_record = true;
								//print ' -> Yes Updated ';
								break;
							}
						}
						if($v_update_record) break;
					}
				}
				//print '<br/>';
			}
		}
	}
?>