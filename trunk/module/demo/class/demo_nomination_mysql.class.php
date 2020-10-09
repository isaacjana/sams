<?php
namespace moonlight\demo; 

class demo_nomination_mysql {
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

	public function nomination_user_list(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*,
						l._rec_created_on as _rec_created_on
					FROM " . $this->get_db_table_prefix() . "nom_profile l
					LEFT JOIN " . $this->get_db_table_prefix() . "code_award_type g
					ON g.awd_type_id = l.awd_type_id
					WHERE l._rec_created_by = \"" . \E::get_session('usr_id') . "\"
					ORDER BY l._rec_created_on DESC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_user_detail( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*, l.nom_status AS nom_stat
					FROM " . $this->get_db_table_prefix() . "nom_profile l
					LEFT JOIN " . $this->get_db_table_prefix() . "nom_service g
					ON g.nom_id = l.nom_id
					LEFT JOIN " . $this->get_db_table_prefix() . "nom_performance h
					ON l.nom_id = h.nom_id
					LEFT JOIN " . $this->get_db_table_prefix() . "nom_apc m
					ON l.nom_id = m.nom_id
					LEFT JOIN " . $this->get_db_table_prefix() . "nom_over_mark o
					ON l.nom_id = o.nom_id										
					LEFT JOIN " . $this->get_db_table_prefix() . "nom_history n
					ON l.nom_id = n.nom_id					
					LEFT JOIN " . $this->get_db_table_prefix() . "nom_ex_activity e
					ON l.nom_id = e.nom_id
					LEFT JOIN " . $this->get_db_table_prefix() . "nom_association a
					ON l.nom_id = a.nom_id
					LEFT JOIN " . $this->get_db_table_prefix() . "nom_volunteer v
					ON l.nom_id = v.nom_id
					LEFT JOIN " . $this->get_db_table_prefix() . "nom_sport s
					ON l.nom_id = s.nom_id
					LEFT JOIN " . $this->get_db_table_prefix() . "nom_politic c
					ON l.nom_id = c.nom_id
					LEFT JOIN " . $this->get_db_table_prefix() . "nom_position p
					ON l.nom_id = p.nom_id
					LEFT JOIN " . $this->get_db_table_prefix() . "code_race r
					ON l.race_id = r.race_id
					LEFT JOIN " . $this->get_db_table_prefix() . "code_city y
					ON l.city_id = y.city_id
					LEFT JOIN " . $this->get_db_table_prefix() . "code_division d
					ON l.division_id = d.division_id
					LEFT JOIN " . $this->get_db_table_prefix() . "code_state st
					ON l.state_id = st.state_id
					LEFT JOIN " . $this->get_db_table_prefix() . "sys_user u
					ON l._rec_created_by = u.usr_id
					WHERE l.nom_id=\"" . \U::safe_sql_string( $p_id ) . "\"
					";	

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result[0];
	}

	public function nomination_get_markah_prestasi( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_performance
					WHERE nom_id = \"" . \U::safe_sql_string( $p_id ) . "\"";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_get_apc( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_apc
					WHERE nom_id = \"" . \U::safe_sql_string( $p_id ) . "\"";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_get_overmark( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_over_mark
					WHERE nom_id = \"" . \U::safe_sql_string( $p_id ) . "\"";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_get_history_success( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_history
					WHERE nom_status = 'BERJAYA' AND nom_id = \"" . \U::safe_sql_string( $p_id ) . "\"";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_get_history_x_success( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_history
					WHERE nom_status = 'TAKBERJAYA' AND nom_id = \"" . \U::safe_sql_string( $p_id ) . "\"";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_get_activity( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_ex_activity
					WHERE nom_id = \"" . \U::safe_sql_string( $p_id ) . "\"";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_get_awd_type( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "code_award_type
					WHERE awd_type_id=\"" . \U::safe_sql_string( $p_id ) . "\" 
					";	

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result[0];
	}

		public function nomination_get_association( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_association
					WHERE nom_id = \"" . \U::safe_sql_string( $p_id ) . "\"";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

		public function nomination_get_volunteer( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_volunteer
					WHERE nom_id = \"" . \U::safe_sql_string( $p_id ) . "\"";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

		public function nomination_get_sport( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_sport
					WHERE nom_id = \"" . \U::safe_sql_string( $p_id ) . "\"";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

		public function nomination_get_position( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_position
					WHERE nom_id = \"" . \U::safe_sql_string( $p_id ) . "\"";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

		public function nomination_get_politic( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_politic
					WHERE nom_id = \"" . \U::safe_sql_string( $p_id ) . "\"";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}


		public function nomination_get_sumbangan_jabatan ($p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_asas_calon
					WHERE sumbangan_type = 'JABATAN' AND nom_id = \"" . \U::safe_sql_string( $p_id ) . "\"";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

		public function nomination_get_sumbangan_masyarakat( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_asas_calon
					WHERE sumbangan_type = 'MASYARAKAT' AND nom_id = \"" . \U::safe_sql_string( $p_id ) . "\"";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

		public function nomination_get_sumbangan_negeri( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_asas_calon
					WHERE sumbangan_type = 'NEGERI' AND nom_id = \"" . \U::safe_sql_string( $p_id ) . "\"";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

		public function nomination_get_sumbangan_negara( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_asas_calon
					WHERE sumbangan_type = 'NEGARA' AND nom_id = \"" . \U::safe_sql_string( $p_id ) . "\"";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

		public function nomination_get_penghargaan_dianugerah( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_asas_calon
					WHERE sumbangan_type = 'PENGHARGAAN' AND nom_id = \"" . \U::safe_sql_string( $p_id ) . "\"";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}


	public function nomination_get_keturunan(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "code_race
					ORDER BY race_id ASC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_get_bandar(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "code_city
					ORDER BY city_id ASC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_get_bahagian(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "code_division
					ORDER BY division_id ASC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_get_daerah(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "code_district
					ORDER BY district_id ASC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_get_negeri(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "code_state
					ORDER BY state_id ASC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_get_kewarganegaraan(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "code_country WHERE nationality IS NOT NULL 
					ORDER BY country_id ASC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_add_bahagian_f( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_ex_activity(
						nom_id,
						act_organization,
						act_position,
						act_year,
						_rec_created_on,
						_rec_created_by,
						_rec_status
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['act_organization'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['act_position'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['act_year'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_on'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_by'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_status'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $this->co_db_root->get_last_insert_id();
	}

		public function nomination_add_position( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_position(
						nom_id,
						organization,
						position,
						negara_negeri,
						year,
						_rec_created_on,
						_rec_created_by,
						_rec_status
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['organization'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['position'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['negara_negeri'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['year'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_on'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_by'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_status'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $this->co_db_root->get_last_insert_id();
	}

	public function nomination_add_performance( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_performance(
						nom_id,
						perf_year,
						perf_mark,
						_rec_created_on,
						_rec_created_by,
						_rec_status
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['perf_year'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['perf_mark'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_on'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_by'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_status'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $this->co_db_root->get_last_insert_id();
	}

	public function nomination_add_apc( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_apc(
						nom_id,
						nom_year,
						nom_mark,
						_rec_created_on,
						_rec_created_by,
						_rec_status
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_year'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_mark'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_on'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_by'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_status'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $this->co_db_root->get_last_insert_id();
	}

	public function nomination_add_over_mark( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_over_mark(
						nom_id,
						over_year,
						over_mark,
						_rec_created_on,
						_rec_created_by,
						_rec_status
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['over_year'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['over_mark'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_on'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_by'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_status'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $this->co_db_root->get_last_insert_id();
	}

		public function nomination_add_association( $p_id ){

		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_association(
						nom_id,
						association_name,
						association_position,
						association_year,
						_rec_created_on,
						_rec_created_by,
						_rec_status
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['association_name'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['association_position'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['association_year'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_on'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_by'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_status'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $this->co_db_root->get_last_insert_id();
	}

		public function nomination_add_volunteer( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_volunteer(
						nom_id,
						activity,
						peringkat,
						volunteer_year,
						_rec_created_on,
						_rec_created_by,
						_rec_status
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['activity'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['peringkat'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['volunteer_year'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_on'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_by'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_status'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $this->co_db_root->get_last_insert_id();
	}

	public function nomination_add_sport( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_sport(
						nom_id,
						sport_type,
						peringkat,
						sport_year,
						_rec_created_on,
						_rec_created_by,
						_rec_status
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['sport_type'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['peringkat'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['sport_year'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_on'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_by'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_status'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $this->co_db_root->get_last_insert_id();
	}

	public function nomination_add_history( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_history(
						nom_id,
						award_title,
						negara_negeri,
						nom_year,
						nom_status,
						_rec_created_on,
						_rec_created_by,
						_rec_status
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['award_title'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['negara_negeri'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_year'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_status'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_on'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_by'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_status'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $this->co_db_root->get_last_insert_id();
	}

	public function nomination_add_asas_pencalonan( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_asas_calon(
						nom_id,
						sumbangan_penghargaan,
						sumbangan_type,
						_rec_created_on,
						_rec_created_by,
						_rec_status
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['sumbangan_penghargaan'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['sumbangan_type'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_on'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_by'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_status'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $this->co_db_root->get_last_insert_id();
	}

	public function nomination_add_politic( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_politic(
						nom_id,
						politic_position,
						politic_year,
						t_nom_politiccol,
						_rec_created_on,
						_rec_created_by,
						_rec_status
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['politic_position'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['politic_year'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['t_nom_politiccol'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_on'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_by'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_status'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $this->co_db_root->get_last_insert_id();
	}	

	public function nomination_shru_edit_list( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_profile l
					LEFT JOIN " . $this->get_db_table_prefix() . "nom_service g
					ON g.nom_id = l.nom_id
					LEFT JOIN " . $this->get_db_table_prefix() . "nom_performance h
					ON l.nom_id = h.nom_id
					LEFT JOIN " . $this->get_db_table_prefix() . "nom_apc m
					ON h.nom_id = m.nom_id					
					LEFT JOIN " . $this->get_db_table_prefix() . "nom_history n
					ON n.nom_id = m.nom_id					
					LEFT JOIN " . $this->get_db_table_prefix() . "nom_association p
					ON n.nom_id = p.nom_id
					WHERE l.nom_id=\"" . \U::safe_sql_string( $p_id ) . "\"
					";	

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result[0];
	}

	public function nomination_shru_edit( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_manual(
						nom_id,
						nama_penyokong,
						jawatan_penyokong,
						penyokong_add1,
						penyokong_add2,
						penyokong_add3,
						penyokong_add4,
						penyokong_contact,
						penyokong_date,
						ulasan_ketua,
						rekomen_nama,
						rekomen_jawatan,
						rekomen_alamat,
						rekomen_tel,
						rekomen_komen,
						rekomen_date,
						_rec_created_on,
						_rec_created_by,
						_rec_status
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nama_penyokong'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['jawatan_penyokong'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['penyokong_add1'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['penyokong_add2'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['penyokong_add3'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['penyokong_add4'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['penyokong_contact'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['penyokong_date'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['ulasan_ketua'] ) . "\",

						\"" . \U::safe_sql_string( $p_id['rekomen_nama'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['rekomen_jawatan'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['rekomen_alamat'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['rekomen_tel'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['rekomen_komen'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['rekomen_date'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_on'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_created_by'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_status'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
		// return $this->co_db_root->get_last_insert_id();
		return $v_result;

	}				

	public function nomination_shru_list(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_profile
					WHERE nom_status = '2' OR nom_status = '3' OR nom_status = '4'
					ORDER BY _rec_created_on DESC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}	

	public function nomination_user_status( $p_id ){
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


	public function nomination_shru_route( $p_id ){
		$v_query = 	"UPDATE 
						" . $this->get_db_table_prefix() . "nom_profile 
					SET
						nom_status = \"3\"
					WHERE 
						nom_id = \"" . \U::safe_sql_string( $p_id ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);

		if($v_result){
			return true;
		}else{
			return false;
		}
	}	

	public function nomination_route_shru_profile( $p_id ){
		$v_query = 	"UPDATE 
						" . $this->get_db_table_prefix() . "nom_profile 
					SET
						nom_status = \"" . \U::safe_sql_string( $p_id['nom_status'] ) . "\"
					WHERE 
						nom_id = \"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);
	}				

	public function nomination_route_shru( $p_id ){
		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_route_remark(
						nom_id,
						nom_status,
						route_remark,
						_rec_created_on,
						_rec_created_by
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_status'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['route_remark'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_datetime'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_usr_id'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
	}		

	public function nomination_new_nom_id(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query =	"SELECT * FROM 
					" . $this->get_db_table_prefix() . "nom_profile
					ORDER BY nom_id DESC
					";

		$v_result = $this->co_db_root->execute_query($v_query);
		if ($v_result) {
			$v_nom_id = $v_result[0]['nom_id'] + 1;

			return $v_nom_id;
		}
		
	}

	public function nomination_get_bahagian_a( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query =	"SELECT * FROM 
					" . $this->get_db_table_prefix() . "nom_profile
					WHERE nom_id=\"" . \U::safe_sql_string( $p_id ) . "\"
					";

		$v_result = $this->co_db_root->execute_query($v_query);
		if ($v_result) {
			return $v_result[0];
		}
		
	}

	public function nomination_get_pencadang( $p_id){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query =	"SELECT * FROM 
					" . $this->get_db_table_prefix() . "sys_user u 
					LEFT JOIN " . $this->get_db_table_prefix() . "nom_profile p
					ON u.usr_id = p._rec_created_by
					WHERE p.nom_id=\"" . \U::safe_sql_string( $p_id ) . "\"
					";

		$v_result = $this->co_db_root->execute_query($v_query);
		if ($v_result) {
			return $v_result[0];
		}	
		
	}

	public function nomination_add_bahagian_a( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_profile(
						awdc_category_id,
						form_id,
						nom_name,
						nom_title_designation,
						nom_old_ic,
						nom_new_ic,
						nom_passport_no,
						nom_passport_color,
						nom_gender,
						nom_dob,
						nom_age,
						race_id,
						nom_marital_status,
						nom_email,
						nom_address_1,
						nom_address_2,
						nom_address_3,
						nom_address_4,
						nom_postcode,
						city_id,
						division_id,
						state_id,
						nom_contact,
						nom_mobile,
						nom_status,
						_rec_created_on,
						_rec_created_by,
						nom_birth_country_id,
						nationality,
						nom_appl_date,
						_rec_status,
						nom_pob,
						nom_contact_office,
						nom_address_origin_1,
						nom_address_origin_2,
						nom_address_origin_3,
						nom_address_origin_4,
						nom_address_office_1,
						nom_address_office_2,
						nom_address_office_3,
						nom_address_office_4
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['awdc_category_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['form_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_name'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_title_designation'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_old_ic'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_new_ic'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_passport_no'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_passport_color'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_gender'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_dob'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_age'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['race_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_marital_status'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_email'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_address_1'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_address_2'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_address_3'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_address_4'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_postcode'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['city_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['division_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['state_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_contact'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_mobile'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_status'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_datetime'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_usr_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_birth_country_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nationality'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_appl_date'] ) . "\",
						\"SHOW\",
						\"" . \U::safe_sql_string( $p_id['nom_pob'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_contact_office'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_address_origin_1'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_address_origin_2'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_address_origin_3'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_address_origin_4'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_address_office_1'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_address_office_2'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_address_office_3'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_address_office_4'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $this->co_db_root->get_last_insert_id();
	}

	public function nomination_edit_bahagian_a( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"UPDATE 
					" . $this->get_db_table_prefix() . "nom_profile
					SET
						nom_name=\"" . \U::safe_sql_string( $p_id['nom_name'] ) . "\",
						nom_title_designation=\"" . \U::safe_sql_string( $p_id['nom_title_designation'] ) . "\",
						nom_old_ic=\"" . \U::safe_sql_string( $p_id['nom_old_ic'] ) . "\",
						nom_new_ic=\"" . \U::safe_sql_string( $p_id['nom_new_ic'] ) . "\",
						nom_passport_no=\"" . \U::safe_sql_string( $p_id['nom_passport_no'] ) . "\",
						nom_passport_color=\"" . \U::safe_sql_string( $p_id['nom_passport_color'] ) . "\",
						nom_gender=\"" . \U::safe_sql_string( $p_id['nom_gender'] ) . "\",
						nom_dob=\"" . \U::safe_sql_string( $p_id['nom_dob'] ) . "\",
						nom_age=\"" . \U::safe_sql_string( $p_id['nom_age'] ) . "\",
						race_id=\"" . \U::safe_sql_string( $p_id['race_id'] ) . "\",
						nom_marital_status=\"" . \U::safe_sql_string( $p_id['nom_marital_status'] ) . "\",
						nom_email=\"" . \U::safe_sql_string( $p_id['nom_email'] ) . "\",
						nom_address_1=\"" . \U::safe_sql_string( $p_id['nom_address_1'] ) . "\",
						nom_address_2=\"" . \U::safe_sql_string( $p_id['nom_address_2'] ) . "\",
						nom_address_3=\"" . \U::safe_sql_string( $p_id['nom_address_3'] ) . "\",
						nom_address_4=\"" . \U::safe_sql_string( $p_id['nom_address_4'] ) . "\",
						nom_postcode=\"" . \U::safe_sql_string( $p_id['nom_postcode'] ) . "\",
						city_id=\"" . \U::safe_sql_string( $p_id['city_id'] ) . "\",
						division_id=\"" . \U::safe_sql_string( $p_id['division_id'] ) . "\",
						state_id=\"" . \U::safe_sql_string( $p_id['state_id'] ) . "\",
						nom_contact=\"" . \U::safe_sql_string( $p_id['nom_contact'] ) . "\",
						nom_mobile=\"" . \U::safe_sql_string( $p_id['nom_mobile'] ) . "\",
						nom_status=\"" . \U::safe_sql_string( $p_id['nom_status'] ) . "\",
						_rec_modified_on=\"" . \U::safe_sql_string( $p_id['current_datetime'] ) . "\",
						_rec_modified_by=\"" . \U::safe_sql_string( $p_id['current_usr_id'] ) . "\",
						nom_birth_country_id=\"" . \U::safe_sql_string( $p_id['nom_birth_country_id'] ) . "\",
						nationality=\"" . \U::safe_sql_string( $p_id['nationality'] ) . "\",
						nom_appl_date=\"" . \U::safe_sql_string( $p_id['nom_appl_date'] ) . "\",
						_rec_status=\"SHOW\",
						nom_pob=\"" . \U::safe_sql_string( $p_id['nom_pob'] ) . "\",
						nom_contact_office=\"" . \U::safe_sql_string( $p_id['nom_contact_office'] ) . "\",
						nom_address_origin_1=\"" . \U::safe_sql_string( $p_id['nom_address_origin_1'] ) . "\",
						nom_address_origin_2=\"" . \U::safe_sql_string( $p_id['nom_address_origin_2'] ) . "\",
						nom_address_origin_3=\"" . \U::safe_sql_string( $p_id['nom_address_origin_3'] ) . "\",
						nom_address_origin_4=\"" . \U::safe_sql_string( $p_id['nom_address_origin_4'] ) . "\",
						nom_address_office_1=\"" . \U::safe_sql_string( $p_id['nom_address_office_1'] ) . "\",
						nom_address_office_2=\"" . \U::safe_sql_string( $p_id['nom_address_office_2'] ) . "\",
						nom_address_office_3=\"" . \U::safe_sql_string( $p_id['nom_address_office_3'] ) . "\",
						nom_address_office_4=\"" . \U::safe_sql_string( $p_id['nom_address_office_4'] ) . "\",
					WHERE
						nom_id=\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
					";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $this->co_db_root->get_last_insert_id();
	}

	public function nomination_add_bahagian_b( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_service(
						nom_id,
						nom_organization,
						first_app_date,
						app_date_service,
						job_title,
						job_level,
						app_level,
						service_class,
						service_group,
						job_grade,
						job_now,
						jurisdiction_area,
						small_district,
						district_id,
						division_id,
						gov_service_year,
						sarawak_service_year,
						residency_year,
						department,
						station,
						station_loc,
						station_year,
						office_address_1,
						office_address_2,
						office_address_3,
						office_address_4,
						office_contact,
						displinary_action,
						_rec_created_on,
						_rec_created_by,
						_rec_status
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_organization'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['first_app_date'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['app_date_service'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['job_title'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['job_level'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['app_level'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['service_class'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['service_group'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['job_grade'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['job_now'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['jurisdiction_area'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['small_district'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['district_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['division_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['gov_service_year'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['sarawak_service_year'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['residency_year'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['department'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['station'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['station_loc'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['station_year'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['office_address_1'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['office_address_2'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['office_address_3'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['office_address_4'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['office_contact'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['displinary_action'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_datetime'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_usr_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['_rec_status'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $this->co_db_root->get_last_insert_id();
	}

	
	public function nomination_get_award_type(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = "SELECT * FROM
					" . $this->get_db_table_prefix() . "code_award_type
					ORDER BY awd_order_imp ASC";

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}


	public function nomination_get_singkatan( $p_value){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = "SELECT * FROM
					" . $this->get_db_table_prefix() . "code_award_type
					WHERE awd_award = \"" . \U::safe_sql_string( $p_value ) . "\"
					";

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result[0];
	}
	public function nomination_check_nom_profile( $p_value ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = "SELECT * FROM
					" . $this->get_db_table_prefix() . "nom_profile
					WHERE nom_id = \"" . \U::safe_sql_string( $p_value ) . "\"
					";

		$v_result = $this->co_db_root->execute_query($v_query);

		if ($v_result) {
			return true;
		}else{
			return false;
		}
		
	}
	public function nomination_get_folio_no( $p_value ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = "SELECT * FROM
					" . $this->get_db_table_prefix() . "nom_folio_no
					WHERE form_id = \"" . \U::safe_sql_string( $p_value ) . "\"
					";

		$v_result = $this->co_db_root->execute_query($v_query);

		if ($v_result) {
			return $v_result[0];
		}
		
	}
	public function nomination_add_pencalonan( $p_value ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_profile(
						nom_id,
						awdc_category_id,
						form_id,
						awd_type_id,
						nom_source,
						nom_folio_no,
						nom_name,
						nom_new_ic,
						nom_status,
						_rec_created_on,
						_rec_created_by,
						_rec_status
					)VALUE(
						\"" . \U::safe_sql_string( $p_value['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['awdc_category_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['form_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['awd_type_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['jabatan'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['nom_folio_no'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['nom_name'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['ic_baru'] ) . "\",
						\"1\",
						\"" . \U::safe_sql_string( $p_value['current_datetime'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['current_usr_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['_rec_status'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $v_result;
	}
	public function nomination_update_folio_no( $p_value ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT * FROM
					" . $this->get_db_table_prefix() . "nom_folio_no
					WHERE form_id=\"" . \U::safe_sql_string( $p_value ) . "\"
					";	

		$v_result = $this->co_db_root->execute_query($v_query);

		$v_new_running_no = $v_result[0]['folio_running_no'] + 1;

		$v_query = 	"UPDATE
					" . $this->get_db_table_prefix() . "nom_folio_no
					SET folio_running_no = \"" . \U::safe_sql_string( $v_new_running_no ) . "\"
					WHERE form_id=\"" . \U::safe_sql_string( $p_value ) . "\"
					";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $v_result;
	}
	public function nomination_update_pencalonan( $p_value ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"UPDATE
					" . $this->get_db_table_prefix() . "nom_profile
					SET 
						
						awdc_category_id=\"" . \U::safe_sql_string( $p_value['awdc_category_id'] ) . "\",
						awd_type_id=\"" . \U::safe_sql_string( $p_value['awd_type_id'] ) . "\",
						nom_source=\"" . \U::safe_sql_string( $p_value['jabatan'] ) . "\",
						nom_folio_no=\"" . \U::safe_sql_string( $p_value['nom_folio_no'] ) . "\",
						nom_name=\"" . \U::safe_sql_string( $p_value['nom_name'] ) . "\",
						nom_new_ic=\"" . \U::safe_sql_string( $p_value['ic_baru'] ) . "\",
						_rec_modified_on=\"" . \U::safe_sql_string( $p_value['current_datetime'] ) . "\",
						_rec_modified_by=\"" . \U::safe_sql_string( $p_value['current_usr_id'] ) . "\",
						_rec_status=\"" . \U::safe_sql_string( $p_value['_rec_status'] ) . "\"
					WHERE form_id=\"" . \U::safe_sql_string( $p_value['form_id'] ) . "\"
					AND nom_id=\"" . \U::safe_sql_string( $p_value['nom_id'] ) . "\"
					";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $v_query;
	}

	public function nomination_user_pengesah( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_pengesah
					WHERE nom_id=\"" . \U::safe_sql_string( $p_id ) . "\"
					";	

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result[0];
	}

	public function nomination_penilai_pengesah_list(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_profile
					WHERE nom_status = '6' OR nom_status = '9' OR nom_status = '10' OR nom_status = '12' OR nom_status = '13' OR nom_status = '16'
					ORDER BY _rec_created_on DESC";					 

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_pengesah_profile( $p_id ){
		$v_query = 	"UPDATE 
						" . $this->get_db_table_prefix() . "nom_profile 
					SET
						nom_status = \"" . \U::safe_sql_string( $p_id['nom_status'] ) . "\",
						awd_type_id = \"" . \U::safe_sql_string( $p_id['awd_type_id'] ) . "\"
					WHERE 
						nom_id = \"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);
	}

	public function nomination_pengesah( $p_id ){
		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_pengesah(
						nom_id,
						syarat1,
						syarat2,
						syarat3,
						syarat4,
						syarat5,
						syarat6,
						syarat7,
						syarat8,
						komen_penilai,
						penilai_remarks,
						usr_id,
						_rec_created_on,
						_rec_created_by,
						pengesah_stat
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat1'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat2'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat3'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat4'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat5'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat6'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat7'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat8'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['komen_penilai'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['penilai_remarks'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_usr_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_datetime'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_usr_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['nom_status'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
	}

	public function nomination_pengesah_edit( $p_id ){
		$v_query = 	"UPDATE 
						" . $this->get_db_table_prefix() . "nom_pengesah 
					SET
						syarat1 = \"" . \U::safe_sql_string( $p_id['syarat1'] ) . "\",
						syarat2 = \"" . \U::safe_sql_string( $p_id['syarat2'] ) . "\",
						syarat3 = \"" . \U::safe_sql_string( $p_id['syarat3'] ) . "\",
						syarat4 = \"" . \U::safe_sql_string( $p_id['syarat4'] ) . "\",
						syarat5 = \"" . \U::safe_sql_string( $p_id['syarat5'] ) . "\",
						syarat6 = \"" . \U::safe_sql_string( $p_id['syarat6'] ) . "\",
						syarat7 = \"" . \U::safe_sql_string( $p_id['syarat7'] ) . "\",
						syarat8 = \"" . \U::safe_sql_string( $p_id['syarat8'] ) . "\",
						komen_penilai = \"" . \U::safe_sql_string( $p_id['komen_penilai'] ) . "\",
						penilai_remarks = \"" . \U::safe_sql_string( $p_id['penilai_remarks'] ) . "\",
						usr_id = \"" . \U::safe_sql_string( $p_id['current_usr_id'] ) . "\",
						pengesah_stat = \"" . \U::safe_sql_string( $p_id['nom_status'] ) . "\"
					WHERE 
						nom_id = \"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);
	}

	public function nomination_user_detail_penilai_satu( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_penilaian_pertama
					WHERE nom_id=\"" . \U::safe_sql_string( $p_id ) . "\"
					";	

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result[0];
	}

	public function nomination_penilai_satu_list(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_profile
					WHERE nom_status = '8' OR nom_status = '11' OR nom_status = '5' OR nom_status = '4' OR nom_status = '14' OR nom_status = '7'
					ORDER BY _rec_created_on DESC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_penilai_satu_profile( $p_id ){
		$v_query = 	"UPDATE 
						" . $this->get_db_table_prefix() . "nom_profile 
					SET
						nom_status = \"" . \U::safe_sql_string( $p_id['nom_status'] ) . "\"
					WHERE 
						nom_id = \"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);
	}

	public function nomination_penilai_satu( $p_id ){
		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_penilaian_pertama(
						nom_id,
						syarat1,
						syarat2,
						syarat3,
						syarat4,
						syarat5,
						syarat6,
						syarat7,
						syarat8,
						komen_penilai,
						penilai_remarks,
						usr_id,
						_rec_created_on,
						_rec_created_by
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat1'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat2'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat3'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat4'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat5'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat6'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat7'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat8'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['komen_penilai'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['penilai_remarks'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_usr_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_datetime'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_usr_id'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
	}

	public function nomination_penilai_satu_edit( $p_id ){
		$v_query = 	"UPDATE 
						" . $this->get_db_table_prefix() . "nom_penilaian_pertama 
					SET
						syarat1 = \"" . \U::safe_sql_string( $p_id['syarat1'] ) . "\",
						syarat2 = \"" . \U::safe_sql_string( $p_id['syarat2'] ) . "\",
						syarat3 = \"" . \U::safe_sql_string( $p_id['syarat3'] ) . "\",
						syarat4 = \"" . \U::safe_sql_string( $p_id['syarat4'] ) . "\",
						syarat5 = \"" . \U::safe_sql_string( $p_id['syarat5'] ) . "\",
						syarat6 = \"" . \U::safe_sql_string( $p_id['syarat6'] ) . "\",
						syarat7 = \"" . \U::safe_sql_string( $p_id['syarat7'] ) . "\",
						syarat8 = \"" . \U::safe_sql_string( $p_id['syarat8'] ) . "\",
						komen_penilai = \"" . \U::safe_sql_string( $p_id['komen_penilai'] ) . "\",
						penilai_remarks = \"" . \U::safe_sql_string( $p_id['penilai_remarks'] ) . "\",
						usr_id = \"" . \U::safe_sql_string( $p_id['current_usr_id'] ) . "\"
					WHERE 
						nom_id = \"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);
	}	

	public function nomination_user_detail_penilai_dua( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_penilaian_kedua
					WHERE nom_id=\"" . \U::safe_sql_string( $p_id ) . "\"
					";	

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result[0];
	}

	public function nomination_penilai_dua_list(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_profile
					WHERE nom_status = '9' OR nom_status = '12' OR nom_status = '5' OR nom_status = '6' OR nom_status = '15' OR nom_status = '8' OR nom_status = '11'
					ORDER BY _rec_created_on DESC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_penilai_dua_profile( $p_id ){
		$v_query = 	"UPDATE 
						" . $this->get_db_table_prefix() . "nom_profile 
					SET
						nom_status = \"" . \U::safe_sql_string( $p_id['nom_status'] ) . "\"
					WHERE 
						nom_id = \"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);
	}

	public function nomination_penilai_dua( $p_id ){
		// QUERY - Coding
		$v_query = 	"INSERT INTO 
					" . $this->get_db_table_prefix() . "nom_penilaian_kedua(
						nom_id,
						syarat1,
						syarat2,
						syarat3,
						syarat4,
						syarat5,
						syarat6,
						syarat7,
						syarat8,
						komen_penilai,
						penilai_remarks,
						usr_id,
						_rec_created_on,
						_rec_created_by
					)VALUE(
						\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat1'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat2'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat3'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat4'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat5'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat6'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat7'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['syarat8'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['komen_penilai'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['penilai_remarks'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_usr_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_datetime'] ) . "\",
						\"" . \U::safe_sql_string( $p_id['current_usr_id'] ) . "\"
					)";	

		$v_result = $this->co_db_root->execute_query($v_query);
	}

	public function nomination_penilai_dua_edit( $p_id ){
		$v_query = 	"UPDATE 
						" . $this->get_db_table_prefix() . "nom_penilaian_kedua 
					SET
						syarat1 = \"" . \U::safe_sql_string( $p_id['syarat1'] ) . "\",
						syarat2 = \"" . \U::safe_sql_string( $p_id['syarat2'] ) . "\",
						syarat3 = \"" . \U::safe_sql_string( $p_id['syarat3'] ) . "\",
						syarat4 = \"" . \U::safe_sql_string( $p_id['syarat4'] ) . "\",
						syarat5 = \"" . \U::safe_sql_string( $p_id['syarat5'] ) . "\",
						syarat6 = \"" . \U::safe_sql_string( $p_id['syarat6'] ) . "\",
						syarat7 = \"" . \U::safe_sql_string( $p_id['syarat7'] ) . "\",
						syarat8 = \"" . \U::safe_sql_string( $p_id['syarat8'] ) . "\",
						komen_penilai = \"" . \U::safe_sql_string( $p_id['komen_penilai'] ) . "\",
						penilai_remarks = \"" . \U::safe_sql_string( $p_id['penilai_remarks'] ) . "\",
						usr_id = \"" . \U::safe_sql_string( $p_id['current_usr_id'] ) . "\"
					WHERE 
						nom_id = \"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);
	}
	
	public function nomination_attachment_add($p_value){
		$v_query = 	"INSERT INTO  
						" . $this->get_db_table_prefix() . "nom_attachment(
						nom_id,
						att_name,
						att_desc,
						att_content_type,
						att_type,
						_rec_created_on,
						_rec_created_by
					)VALUE(
						\"" . \U::safe_sql_string( $p_value['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['att_name'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['att_name'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['att_type'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['att_type'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['current_datetime'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['current_usr_id'] ) . "\"
					)";
		$v_result = $this->co_db_root->execute_query($v_query);
		return $this->co_db_root->get_last_insert_id();
	}	
	public function nomination_attachment_edit($p_value){
		$v_query = 	"UPDATE  
						" . $this->get_db_table_prefix() . "nom_attachment
					SET
						att_name=\"" . \U::safe_sql_string( $p_value['att_name'] ) . "\",
						att_desc=\"" . \U::safe_sql_string( $p_value['att_name'] ) . "\",
						_rec_modified_on=\"" . \U::safe_sql_string( $p_value['current_datetime'] ) . "\",
						_rec_modified_by=\"" . \U::safe_sql_string( $p_value['current_usr_id'] ) . "\"
					WHERE
						nom_id=\"" . \U::safe_sql_string( $p_value['nom_id'] ) . "\"
						AND att_type=\"" . \U::safe_sql_string( $p_value['att_type'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);
		return $v_query;
	}
	public function nomination_get_attachment_id($p_value){
		$v_query = 	"SELECT * FROM
						" . $this->get_db_table_prefix() . "nom_attachment
					WHERE
						nom_id=\"" . \U::safe_sql_string( $p_value['nom_id'] ) . "\"
						AND att_type=\"" . \U::safe_sql_string( $p_value['att_type'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);
		return $this->co_db_root->get_last_insert_id();
	}

	public function nomination_check_att_doc( $p_value ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = "SELECT * FROM
					" . $this->get_db_table_prefix() . "nom_att_doc
					WHERE nom_id = \"" . \U::safe_sql_string( $p_value ) . "\"
					";

		$v_result = $this->co_db_root->execute_query($v_query);

		if ($v_result) {
			return true;
		}else{
			return false;
		}
		
	}

	public function nomination_att_doc_create($p_value){
		$v_query = 	"INSERT INTO  
						" . $this->get_db_table_prefix() . "nom_att_doc(
						nom_id,
						_rec_created_on,
						_rec_created_by
					)VALUE(
						\"" . \U::safe_sql_string( $p_value['nom_id'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['current_datetime'] ) . "\",
						\"" . \U::safe_sql_string( $p_value['current_usr_id'] ) . "\"
					)";
		$v_result = $this->co_db_root->execute_query($v_query);
		return $v_result;
	}

	public function nomination_att_doc_update($p_value){
		$v_query = 	"UPDATE
						" . $this->get_db_table_prefix() . "nom_att_doc
					SET
						" . \U::safe_sql_string( $p_value['doc_type'] ) . "_sftp_id= \"" . \U::safe_sql_string( $p_value['sftp_id'] ) . "\",
						" . \U::safe_sql_string( $p_value['doc_type'] ) . "_sftp_name= \"" . \U::safe_sql_string( $p_value['sftp_name'] ) . "\",
						_rec_modified_on=\"" . \U::safe_sql_string( $p_value['current_datetime'] ) . "\",
						_rec_modified_by=\"" . \U::safe_sql_string( $p_value['current_usr_id'] ) . "\"
					WHERE
						nom_id=\"" . \U::safe_sql_string( $p_value['nom_id'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);
		return $v_query;
	}	

	public function nomination_get_att_doc($p_value){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_att_doc
					WHERE nom_id=\"" . \U::safe_sql_string( $p_value['nom_id'] ) . "\"
					";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_shru_reason( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_route_remark
					WHERE nom_status = '4' AND nom_id=\"" . \U::safe_sql_string( $p_id ) . "\" 
					";	

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result[0];
	}

	public function nomination_shru_reason_satu( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_route_remark
					WHERE nom_status = '5' AND nom_id=\"" . \U::safe_sql_string( $p_id ) . "\" 
					";	

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result[0];
	}

	public function nomination_shru_reason_dua( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_route_remark
					WHERE nom_status = '6' AND nom_id=\"" . \U::safe_sql_string( $p_id ) . "\" 
					";	

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result[0];
	}

	public function nomination_shru_reason_pencadang( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_route_remark
					WHERE nom_status = '3' AND nom_id=\"" . \U::safe_sql_string( $p_id ) . "\" 
					";	

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result[0];
	}

	public function nomination_get_bahagian_b( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT * FROM 
					" . $this->get_db_table_prefix() . "nom_service
					WHERE 
					nom_id = \"" . \U::safe_sql_string( $p_id ) . "\"
					";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $v_result;
	}

	public function nomination_check_bahagian_b( $p_value ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = "SELECT * FROM
					" . $this->get_db_table_prefix() . "nom_service
					WHERE nom_id = \"" . \U::safe_sql_string( $p_value ) . "\"
					";

		$v_result = $this->co_db_root->execute_query($v_query);

		if ($v_result) {
			return true;
		}else{
			return false;
		}
		
	}
	public function nomination_edit_bahagian_b( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"UPDATE 
					" . $this->get_db_table_prefix() . "nom_service
					SET
						nom_organization=\"" . \U::safe_sql_string( $p_id['nom_organization'] ) . "\",
						first_app_date=\"" . \U::safe_sql_string( $p_id['first_app_date'] ) . "\",
						app_date_service=\"" . \U::safe_sql_string( $p_id['app_date_service'] ) . "\",
						job_title=\"" . \U::safe_sql_string( $p_id['job_title'] ) . "\",
						job_level=\"" . \U::safe_sql_string( $p_id['job_level'] ) . "\",
						app_level=\"" . \U::safe_sql_string( $p_id['app_level'] ) . "\",
						service_class=\"" . \U::safe_sql_string( $p_id['service_class'] ) . "\",
						service_group=\"" . \U::safe_sql_string( $p_id['service_group'] ) . "\",
						job_grade=\"" . \U::safe_sql_string( $p_id['job_grade'] ) . "\",
						job_now=\"" . \U::safe_sql_string( $p_id['job_now'] ) . "\",
						jurisdiction_area=\"" . \U::safe_sql_string( $p_id['jurisdiction_area'] ) . "\",
						small_district=\"" . \U::safe_sql_string( $p_id['small_district'] ) . "\",
						district_id=\"" . \U::safe_sql_string( $p_id['district_id'] ) . "\",
						division_id=\"" . \U::safe_sql_string( $p_id['division_id'] ) . "\",
						gov_service_year=\"" . \U::safe_sql_string( $p_id['gov_service_year'] ) . "\",
						sarawak_service_year=\"" . \U::safe_sql_string( $p_id['sarawak_service_year'] ) . "\",
						residency_year=\"" . \U::safe_sql_string( $p_id['residency_year'] ) . "\",
						department=\"" . \U::safe_sql_string( $p_id['department'] ) . "\",
						station=\"" . \U::safe_sql_string( $p_id['station'] ) . "\",
						station_loc=\"" . \U::safe_sql_string( $p_id['station_loc'] ) . "\",
						station_year=\"" . \U::safe_sql_string( $p_id['station_year'] ) . "\",
						office_address_1=\"" . \U::safe_sql_string( $p_id['office_address_1'] ) . "\",
						office_address_2=\"" . \U::safe_sql_string( $p_id['office_address_2'] ) . "\",
						office_address_3=\"" . \U::safe_sql_string( $p_id['office_address_3'] ) . "\",
						office_address_4=\"" . \U::safe_sql_string( $p_id['office_address_4'] ) . "\",
						office_contact=\"" . \U::safe_sql_string( $p_id['office_contact'] ) . "\",
						displinary_action=\"" . \U::safe_sql_string( $p_id['displinary_action'] ) . "\",
						_rec_created_on=\"" . \U::safe_sql_string( $p_id['current_datetime'] ) . "\",
						_rec_created_by=\"" . \U::safe_sql_string( $p_id['current_usr_id'] ) . "\",
						_rec_status=\"" . \U::safe_sql_string( $p_id['_rec_status'] ) . "\"
					WHERE
						nom_id=\"" . \U::safe_sql_string( $p_id['nom_id'] ) . "\"
					";	

		$v_result = $this->co_db_root->execute_query($v_query);
		return $v_query;
	}

	public function nomination_get_tindakan(){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "nom_tindakan
					ORDER BY tindakan_id ASC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_get_tarikh( $p_id ){
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

	public function nomination_get_award(){
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

	public function nomination_get_criteria( $p_id ){
		// Default Language
		$v_lang_info = \E::get('obj_curr_module')->get_lang();

		// QUERY - Coding
		$v_query = 	"SELECT 
						*
					FROM " . $this->get_db_table_prefix() . "eval_criteria
					WHERE form_id = \"" . \U::safe_sql_string( $p_id ) . "\" 
					ORDER BY cri_section ASC, cri_seq ASC";					

		$v_result = $this->co_db_root->execute_query($v_query);

		return $v_result;
	}

	public function nomination_add_pencadang($p_id){
		$v_query = 	"UPDATE
						" . $this->get_db_table_prefix() . "sys_user
					SET
						usr_full_name=\"" . \U::safe_sql_string( $p_id['usr_full_name'] ) . "\",
						usr_designation=\"" . \U::safe_sql_string( $p_id['usr_designation'] ) . "\",
						work_address=\"" . \U::safe_sql_string( $p_id['work_address'] ) . "\",
						mobile_no=\"" . \U::safe_sql_string( $p_id['mobile_no'] ) . "\",
						usr_agency=\"" . \U::safe_sql_string( $p_id['usr_agency'] ) . "\"
					WHERE
						usr_id=\"" . \U::safe_sql_string( $p_id['usr_id'] ) . "\"
					";
		$v_result = $this->co_db_root->execute_query($v_query);
		return $v_query;
	}				
}
?>