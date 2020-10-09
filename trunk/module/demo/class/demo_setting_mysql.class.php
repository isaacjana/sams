<?php
namespace moonlight\demo;

class demo_setting_mysql {
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

	public function setting_user_list(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "sys_user
					WHERE _rec_status='SHOW'
					ORDER BY usr_id DESC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function setting_user_detail( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "sys_user
					WHERE usr_id=\"" . \U::safe_sql_string( $p_id ) . "\"
					";	

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result[0];
	}

	public function setting_group_access_get( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();
		// QUERY - acl group table
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "demo_acl_group 
					WHERE group_level=?
					AND 1=?
					";
		$this->co_db_root->set_prepare_statement($v_query);

		$v_param[0]['data_type'] = 'int';
		$v_param[0]['data'] =  $p_id;
		$v_param[1]['data_type'] = 'int';
		$v_param[1]['data'] =  1;

		$this->co_db_root->bind_param($v_param);
		$v_result = $this->co_db_root->execute_statement();

		return $v_result[0];
	}

	public function setting_user_group_get( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();
		// QUERY - acl group table
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "code_role 
					WHERE role_id=?
					AND 1=?
					";
		$this->co_db_root->set_prepare_statement($v_query);

		$v_param[0]['data_type'] = 'str';
		$v_param[0]['data'] =  $p_id;
		$v_param[1]['data_type'] = 'int';
		$v_param[1]['data'] =  1;

		$this->co_db_root->bind_param($v_param);
		$v_result = $this->co_db_root->execute_statement();

		return $v_result[0]['role_name'];
	}

	public function setting_user_acl_get( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();
		// QUERY - acl group table
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "demo_acl_user_group 
					WHERE _rec_status = \"SHOW\" 
					AND usr_id=?
					AND 1=?
					";
		$this->co_db_root->set_prepare_statement($v_query);

		$v_param[0]['data_type'] = 'str';
		$v_param[0]['data'] =  $p_id;
		$v_param[1]['data_type'] = 'int';
		$v_param[1]['data'] =  1;

		$this->co_db_root->bind_param($v_param);
		$v_result = $this->co_db_root->execute_statement();
		if($v_result && is_array($v_result)){
			return $v_result[0]['group_level'];
		}

		

	}


	/*
	 * Function to add user acl
	 */
	public function setting_user_acl_add( $p_value ){
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "demo_acl_user_group(
						usr_id,
						group_level,
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
	public function setting_user_acl_edit( $p_value ){
		$v_query = 	"UPDATE 
						" . $this->get_db_table_prefix() . "demo_acl_user_group 
					SET
						group_level = \"" . \U::safe_sql_string( $p_value['usr_group'] ) . "\", 
						usr_news_notification = \"" . \U::safe_sql_string( $p_value['usr_news_notification'] ) . "\", 
						_rec_modified_on = \"" . \U::safe_sql_string( $p_value['current_datetime'] ) . "\",
						_rec_modified_by = \"" . \U::safe_sql_string( $p_value['current_usr_id'] ) . "\"
					WHERE 
						usr_id = \"" . \U::safe_sql_string( $p_value['usr_id'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);
	}


	public function setting_code_role(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "code_role
					ORDER BY role_id ASC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}
	public function setting_folio_no(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_folio_no n
					LEFT JOIN " . $this->get_db_table_prefix() . "code_form_category f
					ON n.form_id = f.form_id
					LEFT JOIN " . $this->get_db_table_prefix() . "code_award_category a
					ON n.awdc_category_id = a.awdc_category_id
					ORDER BY folio_id ASC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}
	public function setting_doc_version(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_doc_version d
					LEFT JOIN " . $this->get_db_table_prefix() . "code_form_category f
					ON d.form_id = f.form_id
					ORDER BY version_id ASC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function setting_tarikh_pencalonan( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_tarikh_pencalonan
					WHERE tarikh_pencalonan_id = '1'";	

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result[0];
	}

	public function setting_tarikh_pencalonan_update( $p_id ){
		$v_query = 	"UPDATE 
						" . $this->get_db_table_prefix() . "nom_tarikh_pencalonan 
					SET
						tarikh_dari = \"" . \U::safe_sql_string( $p_id['tarikh_dari'] ) . "\",
						tarikh_hingga = \"" . \U::safe_sql_string( $p_id['tarikh_hingga'] ) . "\"
					WHERE 
						tarikh_pencalonan_id = \"" . \U::safe_sql_string( $p_id['v_id'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result[0];
	}	
}
?>