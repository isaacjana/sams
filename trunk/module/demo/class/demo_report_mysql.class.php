<?php
namespace moonlight\demo;

class demo_report_mysql {
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

	public function report_peristiwa_list(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_peristiwa";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}	

	public function report_pingat_list(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "code_award_type
					ORDER BY awd_order_imp ASC"; 				

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}	

	public function report_parti_list(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_parti"; 				

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function report_race_list(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "code_race";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function report_award_list(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "code_award_type";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function report_source_list(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						nom_source
					FROM " . $this->get_db_table_prefix() . "nom_profile
					GROUP BY nom_source
					";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function report_race_rows($p_val){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_profile
					WHERE
						race_id=\"" . \U::safe_sql_string( $p_val['race_id'] ) . "\"
						AND nom_source=\"" . \U::safe_sql_string( $p_val['nom_source'] ) . "\"
					";					

		$v_result = $this->co_db_root->execute_query($v_query);
		$rows=0;
		foreach ($v_result as $row) {
			$rows++;
		}

		return $rows;
	}
	
	public function report_award_rows($p_val){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_profile
					WHERE
						awd_type_id=\"" . \U::safe_sql_string( $p_val['awd_type_id'] ) . "\"
						AND nom_source=\"" . \U::safe_sql_string( $p_val['nom_source'] ) . "\"
					";					

		$v_result = $this->co_db_root->execute_query($v_query);
		$rows=0;
		foreach ($v_result as $row) {
			$rows++;
		}

		return $rows;
	}	

	public function report_audit_trail($p_val){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_audit_trail
					WHERE
						_rec_created_date >=\"" . \U::safe_sql_string( $p_val['date_from'] ) . "\"
						AND _rec_created_date <=\"" . \U::safe_sql_string( $p_val['date_to'] ) . "\"
					";					

		$v_result = $this->co_db_root->execute_query($v_query);
		$rows=0;
		foreach ($v_result as $row) {
			$rows++;
		}

		return $rows;
	}
}
?>