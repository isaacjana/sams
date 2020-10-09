<?php
namespace moonlight\demo;

class demo_shortlist_mysql {
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

	public function shortlist_user_list(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_profile
					WHERE nom_status = '10' OR nom_status = '17' OR nom_status = '18' OR nom_status = '19' OR nom_status = '20'
					ORDER BY _rec_created_on DESC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function shortlist_get_letter_head(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "code_letter_head
					WHERE code_id = '1'";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}	

	public function shortlist_verify_list(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_profile
					WHERE nom_status = '19' OR nom_status = '17' OR nom_status = '18' OR nom_status = '20'
					ORDER BY _rec_created_on DESC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}	

	public function shortlist_print_list(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_profile
					WHERE nom_status = '19'
					ORDER BY _rec_created_on DESC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function shortlist_detail( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_profile
					WHERE nom_id=\"" . \U::safe_sql_string( $p_id ) . "\"
					";	

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result[0];
	}	

	public function shortlist_shru_verify_detail( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_shru_verify
					WHERE nom_id=\"" . \U::safe_sql_string( $p_id ) . "\"
					";	

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result[0];
	}	

	public function shortlist_shru_profile( $p_id ){
		$v_query = 	"UPDATE 
						" . $this->get_db_table_prefix() . "nom_profile 
					SET
						nom_status = \"" . \U::safe_sql_string( $p_id['meeting_status'] ) . "\",
						awd_type_id = \"" . \U::safe_sql_string( $p_id['awd_type_id'] ) . "\"
					WHERE 
						nom_id = \"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);
	}

	public function shortlist_shru( $p_id ){
		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_shru_verify(
						nom_id,
						meeting_status,
						meeting_remarks,
						tarikh_keputusan,
						_rec_created_on,
						_rec_created_by
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['meeting_status'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['meeting_remarks'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['tarikh_keputusan'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_datetime'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_usr_id'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
	}	

	public function shortlist_verifier( $p_id ){
		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_verifier_verify(
						nom_id,
						meeting_status,
						meeting_remarks,
						_rec_created_on,
						_rec_created_by
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['meeting_status'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['meeting_remarks'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_datetime'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_usr_id'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
	}

	public function shortlist_get_award(){
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

	public function shortlist_shru_edited( $p_id ){
		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_shru_verify_edited(
						nom_id,
						meeting_status,
						meeting_remarks,
						tarikh_keputusan,
						_rec_created_on,
						_rec_created_by
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['meeting_status'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['meeting_remarks'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['tarikh_keputusan'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_datetime'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_usr_id'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);

		$v_query = 	"UPDATE 
					" . $this->get_db_table_prefix() . "nom_shru_verify
						SET
							is_edited = \"" . \U::safe_sql_string( $p_id['is_edited'] ) . "\"
						WHERE
							nom_id=\"" . \U::safe_sql_string( $p_id['nom_id']  ) . "\"
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