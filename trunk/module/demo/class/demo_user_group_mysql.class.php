<?php
namespace moonlight\demo;

class demo_user_group_mysql {
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

	public function user_group_get( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - acl group table
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "acl_group 
					WHERE _rec_status = \"SHOW\" 
					AND group_id=\"" . \U::safe_sql_string( $p_id ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);
		if($v_result && is_array($v_result)){
			foreach($v_result as $v_key=>$v_value){
				$v_result[$v_key]['_rec_modified_on'] = $this->co_db_root->__to_display_date($v_result[$v_key]['_rec_modified_on']);
			}
		}


		// QUERY - label table
		$v_query = 	"SELECT 
						kwd_lang,
						kwd_value
					FROM " . $this->get_db_table_prefix() . "acl_group_lbl l
					LEFT JOIN " . $this->get_db_table_prefix() . "acl_group g
					ON g.group_id = l.kwd_code
					WHERE g._rec_status = \"SHOW\" 
					AND g.group_id=\"" . \U::safe_sql_string( $p_id ) . "\"
					";
		$v_result_lbl = $this->co_db_root->execute_query($v_query);

		if($v_result_lbl && is_array($v_result_lbl)){
			foreach($v_result_lbl as $v_value){
				$v_result[0]['kwd_value'][$v_value['kwd_lang']] = $v_value['kwd_value'];
			}
		}

		return $v_result;
	}

	/*
	 * Function to retrieve the list of articles
	 */
	public function user_group_list( $p_order=null, $p_start = null, $p_num_of_rec = null ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// ORDER BY - Coding
		$v_order_by = '';
		if($p_order != null){
			foreach($p_order as $v_value){
				if($v_order_by == '') $v_order_by = ' ORDER BY '.\U::safe_sql_string( $v_value['order_by'] ).' '.\U::safe_sql_string( $v_value['sort_by'] );
				else $v_order_by .= ', ' . \U::safe_sql_string( $v_value['order_by'] ) . ' ' .\U::safe_sql_string( $v_value['sort_by'] );
			}
		}

		// LIMIT - Coding
		$v_limit = '';
		if($p_start !== null && $p_num_of_rec !== null){
			$v_limit = ' LIMIT ' . \U::safe_sql_string($p_start) . ', ' . \U::safe_sql_string($p_num_of_rec);
		}

		// QUERY - Coding
		$v_query = 	"SELECT 
						l.kwd_code,
						kwd_value,
						g._rec_modified_on
					FROM " . $this->get_db_table_prefix() . "acl_group_lbl l
					LEFT JOIN " . $this->get_db_table_prefix() . "acl_group g
					ON g.group_id = l.kwd_code
					WHERE g._rec_status = \"SHOW\"
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
	public function user_group_list_total(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						COUNT(kwd_code) AS 'total_rec'
					FROM " . $this->get_db_table_prefix() . "acl_group_lbl l
					LEFT JOIN " . $this->get_db_table_prefix() . "acl_group g
					ON g.group_id = l.kwd_code
					WHERE g._rec_status = \"SHOW\"
					AND l.kwd_lang=\"".$v_lang_info."\" ";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result[0]['total_rec'];
	}

	/*
	 * Function to add user group
	 */
	public function user_group_add( $p_value ){
		for($v_c=0; $v_c<$p_value['comp_count']; $v_c++){
			$v_fields_list .= 'group_com_' . \U::safe_sql_string( $p_value['acl'][$v_c]['name'] ) . ', ';
			$v_value_list .= '"' . \U::safe_sql_string( $p_value['acl'][$v_c]['value'] ) . '", ';
		}

		$v_query = 	"INSERT INTO 
						" . $this->get_db_table_prefix() . "acl_group(
						" . $v_fields_list . "
						_rec_created_on,
						_rec_created_by,
						_rec_modified_on,
						_rec_modified_by,
						_rec_status
					)VALUE(
						" . $v_value_list . "
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
	* Function to add user group label
	*/
	public function user_group_lbl_add( $p_value ){
		$v_rec_value="(
					\"" . \U::safe_sql_string( $p_value['id'] ) . "\",
					\"" . \U::safe_sql_string( $p_value['current_datetime'] ) . "\",
					\"" . \U::safe_sql_string( $p_value['current_usr_id'] ) . "\",
					\"" . \U::safe_sql_string( $p_value['current_datetime'] ) . "\",
					\"" . \U::safe_sql_string( $p_value['current_usr_id'] ) . "\",
					";
		$v_rec_value_list = "";
		$v_lang_info = \E::get('obj_curr_module')->get_supported_lang();
		foreach($v_lang_info as $v_lang){
			if($v_rec_value_list!=""){
				$v_rec_value_list .= ",";
			}
			$v_rec_value_list .= $v_rec_value;
			$v_rec_value_list .= "\"" . \U::safe_sql_string( $v_lang ) . "\",";
			$v_rec_value_list .= "\"" . \U::safe_sql_string( $p_value['group_name'][$v_lang] ) . "\"";
			$v_rec_value_list .= ")";
		}

		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "acl_group_lbl(
						kwd_code,
						_rec_created_on,
						_rec_created_by,
						_rec_modified_on,
						_rec_modified_by,
						kwd_lang,
						kwd_value
					)VALUE{$v_rec_value_list}";

		$v_result = $this->co_db_root->execute_query($v_query);
	}

	/*
	* Function to update user group details
	*/
	public function user_group_edit( $p_value ){
		for($v_c=0; $v_c<$p_value['comp_count']; $v_c++){
			$v_update_list .= 'group_com_'.$p_value['acl'][$v_c]['name'].' = "' . \U::safe_sql_string( $p_value['acl'][$v_c]['value'] ) . '", ';
		}

		$v_query = 	"UPDATE 
					" . $this->get_db_table_prefix() . "acl_group 
					SET
						{$v_update_list}
						_rec_modified_on = \"" . \U::safe_sql_string( $p_value['current_datetime'] ) . "\",
						_rec_modified_by = \"" . \U::safe_sql_string( $p_value['current_usr_id'] ) . "\"
					WHERE 
						group_id = \"" . \U::safe_sql_string( $p_value['id'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);
	}

	/*
	 * Function to update user group label
	 */
	public function user_group_lbl_edit( $p_value ){
		$v_lang_info = \E::get('obj_curr_module')->get_supported_lang();
		foreach($v_lang_info as $v_lang){
			$v_query = 	"UPDATE 
							" . $this->get_db_table_prefix() . "acl_group_lbl
						SET 
							kwd_value = \"" . \U::safe_sql_string( $p_value['group_name'][$v_lang] ) . "\",
							_rec_created_on = \"" . \U::safe_sql_string( $p_value['current_datetime'] ) . "\",
							_rec_created_by = \"" . \U::safe_sql_string( $p_value['current_usr_id'] ) . "\",
							_rec_modified_on = \"" . \U::safe_sql_string( $p_value['current_datetime'] ) . "\",
							_rec_modified_by = \"" . \U::safe_sql_string( $p_value['current_usr_id'] ) . "\"
						WHERE
							kwd_code = \"" . \U::safe_sql_string( $p_value['id'] ) . "\"
						AND
							kwd_lang = \"" . \U::safe_sql_string( $v_lang ) . "\"
						";

			$v_result = $this->co_db_root->execute_query($v_query);
		}
	}

	/*
	 * Function to soft delete user group
	 */
	public function user_group_soft_del( $p_value ){
		$v_query = 	"UPDATE 
						" . $this->get_db_table_prefix() . "acl_group 
					SET
						_rec_deleted_on = \"" . \U::safe_sql_string( $p_value['current_datetime'] ) . "\",
						_rec_deleted_by = \"" . \U::safe_sql_string( $p_value['current_usr_id'] ) . "\",
						_rec_status = \"DELETED\"
					WHERE 
						group_id = \"" . \U::safe_sql_string( $p_value['id'] ) . "\"
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
	public function user_group_hard_del( $p_value ){
		$v_query = 	"DELETE FROM 
						" . $this->get_db_table_prefix() . "acl_group_lbl 
					WHERE 
						kwd_code = \"" . \U::safe_sql_string( $p_value['id'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);

		$v_query = 	"DELETE FROM 
					" . $this->get_db_table_prefix() . "acl_group 
					WHERE 
						group_id = \"" . \U::safe_sql_string( $p_value['id'] ) . "\"
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