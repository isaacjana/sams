<?PHP

$v_start = 100;
$v_per_tran = 1000;
$v_cond['usr_from'] = 'imp';
$v_cond['usr_short_name'] = '';
$v_order[0]['order_by'] = 'u.usr_id';
$v_order[0]['sort_by'] = 'ASC';
$v_info = \E::get('obj_system_module')->user_list_with_no_post($v_cond,$v_order,$v_start,$v_per_tran);

print '<pre>';
	print_r($v_info);
print '</pre>';
exit;

while($v_info && is_array($v_info)){
	foreach($v_info as $v_row){
		$p_full_name = $v_row['full_name'];
		$v_update_record  = false;
		$v_ldap = \E::get('obj_system_module')->ldap_search_fullname($p_full_name);
		if($v_ldap && is_array($v_ldap)){
			foreach($v_ldap as $v_ldap_row){
				$v_ldap_ic = str_replace('-','',$v_ldap_row['new_ic']);
				$v_imp_id = str_replace('-','',$v_row['usr_new_ic_no']);
				if($v_ldap_ic == $v_imp_id){
					//print $v_row['full_name'] . '<br/>';
					
					$v_update['usr_id'] = $v_row['usr_id'];
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
					$v_imp_id = str_replace('-','',$v_row['usr_new_ic_no']);
					if($v_ldap_ic == $v_imp_id){
						//print $v_search_name . '<br/>';
						
						$v_update['usr_id'] = $v_row['usr_id'];
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
			$v_full_name_arr = implode('@',$p_full_name);
			if(count($v_full_name_arr) > 1){
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
								break;
							}
						}
						if($v_update_record) break;
					}
				}
			}
		}
	}
	
	/*print '<pre>';
		print_r($v_info);
	print '</pre>';*/
	
	break;
	
	print '<br/>run here<br/>';
	$v_start += $v_per_tran;
	$v_info = \E::get('obj_system_module')->user_list($v_cond,$v_order,$v_start,$v_per_tran);
	
	
	$v_info = null;
}





print 'wei here';
//$v_result = \E::get('obj_system_module')->ldap_search_fullname('ABDUL RAHMAN BIN RAMBLI');
/*foreach($v_result as $v_row){
	print '<pre>';
		print_r($v_row);
	print '</pre>';
}*/
/*
print '<pre>';
	print_r($v_result);
print '</pre>';*/


print '<br/>Ok Liao';
?>