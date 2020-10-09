<?php
namespace moonlight\demo;

class demo_attendance_mysql {
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

	public function attendance_user_list(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_profile
					WHERE nom_status = '19' OR nom_status = '21' OR nom_status = '22'
					ORDER BY _rec_created_on DESC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function attendance_detail( $p_id ){
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

	public function attendance_shru( $p_id ){
		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_attendance(
						nom_id,
						tarikh_jawapan,
						status_tawaran,
						_rec_created_on,
						_rec_created_by
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['tarikh_jawapan'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['status_tawaran'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_datetime'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_usr_id'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
	}

	public function attendance_profile( $p_id ){
		$v_query = 	"UPDATE 
						" . $this->get_db_table_prefix() . "nom_profile 
					SET
						nom_status = \"" . \U::safe_sql_string( $p_id['status_tawaran'] ) . "\"
					WHERE 
						nom_id = \"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);
	}	

}
?>