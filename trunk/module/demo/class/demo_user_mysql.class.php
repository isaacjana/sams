<?php
namespace moonlight\demo;

class demo_user_mysql {
	private $co_db_root;

	public function __call($name, $arguments){
		$v_tmp_arr = explode("_", $name);
		$v_call_obj = $v_tmp_arr[0];
		if(isset($this->co_db_root)){
			return call_user_func_array(array($this->co_db_root, $name), $arguments);
		}
	}

	public function __construct( &$p_co_db ){
		$this->co_db_root = $p_co_db;
	}

	public function user_acl_get( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();
		// QUERY - acl group table
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "acl_user_group 
					WHERE _rec_status = \"SHOW\" 
					AND usr_id=?
					AND 1=?
					";
		$this->co_db_root->set_prepare_statement($v_query);

		$v_param[0]['data_type'] = 'str';
		$v_param[0]['data'] =  $p_id;
		$v_param[1]['data_type'] = 'int';
		$v_param[1]['data'] =  1;

		// $v_query = 	"SELECT 
						// *
					// FROM " . $this->get_db_table_prefix() . "acl_user_group 
					// WHERE _rec_status = \"SHOW\" 
					// AND usr_id=[[usr_id]]
					// AND 1=[[dummy1]]
					// ";
		// $this->co_db_root->set_prepare_statement($v_query);

		// $v_param['dummy1']['data_type'] = 'int';
		// $v_param['usr_id']['data_type'] = 'str';
		// $v_param['usr_id']['data'] =  $p_id;
		// $v_param['dummy1']['data'] =  1;

		$this->co_db_root->bind_param($v_param);
		$v_result = $this->co_db_root->execute_statement();
		if($v_result && is_array($v_result)){
			$v_result[0]['_rec_modified_on'] = $this->co_db_root->__to_display_date($v_result[0]['_rec_modified_on']);
		}

		return $v_result;

		// QUERY - acl group table
/* 		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "acl_user_group 
					WHERE _rec_status = \"SHOW\" 
					AND usr_id=\"" . \U::safe_sql_string( $p_id ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);
		if($v_result && is_array($v_result)){
			$v_result[0]['_rec_modified_on'] = $this->co_db_root->__to_display_date($v_result[0]['_rec_modified_on']);
		}

		return $v_result; */
	}

	/*
	 * Function to retrieve the list of user
	 */
	public function user_acl_list( $p_order=null, $p_start = null, $p_num_of_rec = null, $p_value = null ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		$v_cond = '';
		//publish status, mainly for frontend.
		if(!empty($p_value['_rec_status'])){
			$v_cond .=" AND u._rec_status=\"" . \U::safe_sql_string( $p_value['_rec_status'] ) . "\" ";
		}

		//group filter
		if(!empty($p_value['group'])){
			$v_cond .=" AND u.group_id=\"" . \U::safe_sql_string( $p_value['group'] ) . "\" ";
		}

		//user filter
		if(!empty($p_value['search'])){
			$v_cond .=" AND u.usr_id IN (\"" . implode('","', $p_value['search']) . "\") ";
		}

		// ORDER BY - Coding
		$v_order_by = '';
		if($p_order != null){
			foreach($p_order as $v_value){
				if($v_order_by == '') $v_order_by = ' ORDER BY '.\U::safe_sql_string($v_value['order_by']).' '.\U::safe_sql_string($v_value['sort_by']);
				else $v_order_by .= ', ' . \U::safe_sql_string($v_value['order_by']) . ' ' .\U::safe_sql_string($v_value['sort_by']);
			}
		}

		// LIMIT - Coding
		$v_limit = '';
		if($p_start !== null && $p_num_of_rec !== null){
			$v_limit = ' LIMIT ' . \U::safe_sql_string($p_start) . ', ' . \U::safe_sql_string($p_num_of_rec);
		}

		// QUERY - Coding
		$v_query = 	"SELECT 
						usr_id,
						kwd_value,
						u._rec_modified_on
					FROM " . $this->get_db_table_prefix() . "acl_user_group u
					LEFT JOIN " . $this->get_db_table_prefix() . "acl_group_lbl l
					ON u.group_id = l.kwd_code
					WHERE u._rec_status = \"SHOW\"
					{$v_cond}
					AND l.kwd_lang=\"".$v_lang_info."\" " . $v_order_by . $v_limit;
		$v_result = $this->co_db_root->execute_query($v_query);
		if($v_result && is_array($v_result)){
			foreach($v_result as $v_key=>$v_value){
				$v_result[$v_key]['_rec_modified_on'] = $this->co_db_root->__to_display_date($v_result[$v_key]['_rec_modified_on']);
			}
		}

		return $v_result;
	}

	/*
	* Function to count the total of articles
	*/
	public function user_acl_list_total( $p_value ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		$v_cond = '';
		//publish status, mainly for frontend.
		if(!empty($p_value['_rec_status'])){
			$v_cond .=" AND u._rec_status=\"" . \U::safe_sql_string( $p_value['_rec_status'] ) . "\" ";
		}

		//group filter
		if(!empty($p_value['group'])){
			$v_cond .=" AND u.group_id=\"" . \U::safe_sql_string( $p_value['group'] ) . "\" ";
		}

		// QUERY - Coding
		$v_query = 	"SELECT 
							COUNT(kwd_code) AS 'total_rec'
					FROM " . $this->get_db_table_prefix() . "acl_group_lbl l
					LEFT JOIN " . $this->get_db_table_prefix() . "acl_user_group u
					ON u.group_id = l.kwd_code
					WHERE u._rec_status = \"SHOW\"
					{$v_cond}
					AND l.kwd_lang=\"".$v_lang_info."\" ";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result[0]['total_rec'];
	}

	/*
	 * Function to add user acl
	 */
	public function user_acl_add( $p_value ){
		$v_query = 	"REPLACE INTO 
					" . $this->get_db_table_prefix() . "acl_user_group(
						usr_id,
						group_id,
						usr_news_notification,
						_rec_created_on,
						_rec_created_by,
						_rec_modified_on,
						_rec_modified_by,
						_rec_status
					)VALUE(
						\"" . \U::safe_sql_string( $p_value['usr_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['usr_group'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['usr_news_notification'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['current_datetime'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['current_usr_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['current_datetime'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['current_usr_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['_rec_status'] ) . "\"
					)";
		$v_result = $this->co_db_root->execute_query($v_query);
		return $this->co_db_root->get_last_insert_id();
	}

	/*
	 * Function to update user acl details
	 */
	public function user_acl_edit( $p_value ){
		$v_query = 	"UPDATE 
						" . $this->get_db_table_prefix() . "acl_user_group 
					SET
						group_id = \"" . \U::safe_sql_string( $p_value['usr_group'] ) . "\", 
						usr_news_notification = \"" . \U::safe_sql_string( $p_value['usr_news_notification'] ) . "\", 
						_rec_modified_on = \"" . \U::safe_sql_string( $p_value['current_datetime'] ) . "\",
						_rec_modified_by = \"" . \U::safe_sql_string( $p_value['current_usr_id'] ) . "\"
					WHERE 
						usr_id = \"" . \U::safe_sql_string( $p_value['id'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);
	}

	/*
	 * Function to soft delete user group
	 */
	public function user_acl_soft_del( $p_value ){
		$v_query = 	"UPDATE 
						" . $this->get_db_table_prefix() . "acl_user_group 
					SET
						_rec_deleted_on = \"" . \U::safe_sql_string( $p_value['current_datetime'] ) . "\",
						_rec_deleted_by = \"" . \U::safe_sql_string( $p_value['current_usr_id'] ) . "\",
						_rec_status = \"DELETED\"
					WHERE 
						usr_id = \"" . \U::safe_sql_string( $p_value['id'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);

		if($v_result){
			return true;
		}else{
			return false;
		}
	}

	/*
	 * Function to hard delete user group
	 */
	public function user_acl_hard_del( $p_value ){
		$v_query = 	"DELETE FROM 
						" . $this->get_db_table_prefix() . "acl_user_group 
					WHERE 
						usr_id = \"" . \U::safe_sql_string( $p_value['id'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);

		if($v_result){
			return true;
		}else{
			return false;
		}
	}
}
?>