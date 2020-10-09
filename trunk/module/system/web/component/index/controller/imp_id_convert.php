<?PHP

	try{
		$obj_imp = new \moonlight\impian\impian;
	}catch(\Exception $e){
		//echo 'Caught exception: ',  $e->getMessage(), "\n"; 
		print $e->getMessage();
		exit;
	}
	
	$v_start = 0;
	$v_num_rec = 100;
	$v_run_count = 0;
	$v_cond['employee_id@empty'] = true;
	$v_usr_info = \E::get('obj_system_module')->user_list_with_no_post($v_cond, null, $v_start, $v_num_rec);
	while(is_array($v_usr_info) && $v_run_count <= 300){
		
		foreach($v_usr_info as $v_row){
			if(trim($v_row['usr_new_ic_no']) != ''){
				unset($v_search);
				$v_search['emp_nw_ic_no'] = str_replace('-','',$v_row['usr_new_ic_no']);
				$v_tran = 200;
				$v_count = 0;
				$v_imp_info = $obj_imp->sync_ptk($v_search,$v_count,$v_tran);
				
				if(is_array($v_imp_info)){
					$v_update['usr_id'] = $v_row['usr_id'];
					$v_update['employee_id'] = $v_imp_info[0]['employee_id'];
					$v_update['usr_from'] = 'imp';
					$v_update_result = \E::get('obj_system_module')->user_edit($v_update);
					
					print 'user Id:'.$v_row['usr_id'].' @@@ ';
					print 'Employee Id:'.$v_imp_info[0]['employee_id'].' <br/> ';
				}
			}
		}
		
		// break;
		$v_start += $v_num_rec;
		$v_usr_info = \E::get('obj_system_module')->user_list_with_no_post($v_cond, null, $v_start, $v_num_rec);
		++$v_run_count;
	}
	
	print "Run Time: $v_run_count<br/>";
	
?>