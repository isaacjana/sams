<?php
namespace moonlight\demo;

class demo_nomination {
	private $co_db;

	public function __construct( $p_co_db ){
		$this->co_db = $p_co_db;
	}
 
	public function __destruct(){
		unset($this->co_db);
	}

	// public function setting_user_list(){
	// 	return $this->co_db->setting_user_list();
	// } 
	public function nomination_add_bahagian_a( $p_id ){
		$p_id['current_usr_id'] = \E::get_session('usr_id');
		$p_id['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		return $this->co_db->nomination_add_bahagian_a( $p_id );
	}
	public function nomination_edit_bahagian_a( $p_id ){
		$p_id['current_usr_id'] = \E::get_session('usr_id');
		$p_id['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		return $this->co_db->nomination_edit_bahagian_a( $p_id );
	}
	public function nomination_add_bahagian_b( $p_id ){
		$p_id['current_usr_id'] = \E::get_session('usr_id');
		$p_id['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		return $this->co_db->nomination_add_bahagian_b( $p_id );
	}

	public function nomination_add_bahagian_f( $p_id ){
		return $this->co_db->nomination_add_bahagian_f( $p_id );
	}
	public function nomination_add_position( $p_id ){
		return $this->co_db->nomination_add_position( $p_id );
	}

	public function nomination_add_apc( $p_id ){
		return $this->co_db->nomination_add_apc( $p_id );
	}

	public function nomination_add_performance( $p_id ){
		return $this->co_db->nomination_add_performance( $p_id );
	}

	public function nomination_add_over_mark( $p_id ){
		return $this->co_db->nomination_add_over_mark( $p_id );
	}

	public function nomination_add_association( $p_id ){
		return $this->co_db->nomination_add_association( $p_id );
	}

	public function nomination_add_volunteer( $p_id ){
		return $this->co_db->nomination_add_volunteer( $p_id );
	}

	public function nomination_add_sport( $p_id ){
		return $this->co_db->nomination_add_sport( $p_id );
	}

	public function nomination_add_history( $p_id ){
		return $this->co_db->nomination_add_history( $p_id );
	}

	public function nomination_add_asas_pencalonan( $p_id ){
		return $this->co_db->nomination_add_asas_pencalonan( $p_id );
	}

	public function nomination_add_politic( $p_id ){
		return $this->co_db->nomination_add_politic( $p_id );
	}

	public function nomination_get_sumbangan_jabatan( $p_id){
		return $this->co_db->nomination_get_sumbangan_jabatan( $p_id);
	}

	public function nomination_get_sumbangan_masyarakat( $p_id){
		return $this->co_db->nomination_get_sumbangan_masyarakat( $p_id);
	}

	public function nomination_get_sumbangan_negeri( $p_id){
		return $this->co_db->nomination_get_sumbangan_negeri( $p_id);
	}

	public function nomination_get_sumbangan_negara( $p_id){
		return $this->co_db->nomination_get_sumbangan_negara( $p_id);
	}

	public function nomination_get_penghargaan_dianugerah( $p_id){
		return $this->co_db->nomination_get_penghargaan_dianugerah( $p_id);
	}

	public function nomination_get_keturunan(){
		return $this->co_db->nomination_get_keturunan();
	}

	public function nomination_get_daerah(){
		return $this->co_db->nomination_get_daerah();
	}

	public function nomination_get_bandar(){
		return $this->co_db->nomination_get_bandar();
	}

	public function nomination_get_bahagian(){
		return $this->co_db->nomination_get_bahagian();
	}

	public function nomination_get_negeri(){
		return $this->co_db->nomination_get_negeri();
	}

	public function nomination_get_kewarganegaraan(){
		return $this->co_db->nomination_get_kewarganegaraan();
	}

	public function nomination_user_list(){
		return $this->co_db->nomination_user_list();
	}

	public function nomination_get_pencadang( $p_id){
		return $this->co_db->nomination_get_pencadang( $p_id);
	}

	public function nomination_user_detail( $p_id ){
		return $this->co_db->nomination_user_detail( $p_id );
	}

	public function nomination_shru_edit_list( $p_id ){
		return $this->co_db->nomination_shru_edit_list( $p_id );
	}		

	public function nomination_user_status( $p_id ){
		return $this->co_db->nomination_user_status( $p_id );
	}	

	public function nomination_user_detail_two( $p_id ){
		return $this->co_db->nomination_user_detail_two( $p_id );
	}	

	public function nomination_shru_route( $p_id ){
		return $this->co_db->nomination_shru_route( $p_id );
	}	

	public function nomination_shru_list(){
		return $this->co_db->nomination_shru_list();
	}		

	public function nomination_route_shru( $p_id ){

		$p_id['current_usr_id'] = \E::get_session('usr_id');
		$p_id['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		return $this->co_db->nomination_route_shru($p_id);
	}		

	public function nomination_route_shru_profile( $p_id ){
		return $this->co_db->nomination_route_shru_profile( $p_id );
	}	
	
	public function nomination_get_bahagian_a( $p_id ){
		return $this->co_db->nomination_get_bahagian_a( $p_id );
	}

	public function nomination_new_nom_id(){
		return $this->co_db->nomination_new_nom_id();
	}

	public function nomination_get_award_type(){
		return $this->co_db->nomination_get_award_type();
	}
	public function nomination_get_singkatan( $p_id ){
		return $this->co_db->nomination_get_singkatan( $p_id );
	}
	public function nomination_check_nom_profile( $p_id ){
		return $this->co_db->nomination_check_nom_profile( $p_id );
	}
	public function nomination_get_folio_no( $p_id ){
		return $this->co_db->nomination_get_folio_no( $p_id );
	}
	public function nomination_add_pencalonan( $p_value ){
		$p_value['current_usr_id'] = \E::get_session('usr_id');
		$p_value['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		return $this->co_db->nomination_add_pencalonan( $p_value );
	}
	public function nomination_update_folio_no( $p_id ){
		return $this->co_db->nomination_update_folio_no( $p_id );
	}
	public function nomination_update_pencalonan( $p_id ){
		return $this->co_db->nomination_update_pencalonan( $p_id );
	}

	public function nomination_user_pengesah( $p_id ){
		return $this->co_db->nomination_user_pengesah( $p_id );
	}

	public function nomination_pengesah_edit( $p_id ){
		return $this->co_db->nomination_pengesah_edit( $p_id );
	}

	public function nomination_penilai_pengesah_list(){
		return $this->co_db->nomination_penilai_pengesah_list();
	}

	public function nomination_pengesah( $p_id ){

		$p_id['current_usr_id'] = \E::get_session('usr_id');
		$p_id['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		return $this->co_db->nomination_pengesah($p_id);
	}

	public function nomination_pengesah_profile( $p_id ){
		return $this->co_db->nomination_pengesah_profile( $p_id );
	}	

	public function nomination_user_detail_penilai_satu( $p_id ){
		return $this->co_db->nomination_user_detail_penilai_satu( $p_id );
	}

	public function nomination_penilai_satu_edit( $p_id ){
		return $this->co_db->nomination_penilai_satu_edit( $p_id );
	}

	public function nomination_penilai_satu_list(){
		return $this->co_db->nomination_penilai_satu_list();
	}

	public function nomination_penilai_satu( $p_id ){

		$p_id['current_usr_id'] = \E::get_session('usr_id');
		$p_id['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		return $this->co_db->nomination_penilai_satu($p_id);
	}	

	public function nomination_penilai_satu_profile( $p_id ){
		return $this->co_db->nomination_penilai_satu_profile( $p_id );
	}	

	public function nomination_user_detail_penilai_dua( $p_id ){
		return $this->co_db->nomination_user_detail_penilai_dua( $p_id );
	}

	public function nomination_penilai_dua_edit( $p_id ){
		return $this->co_db->nomination_penilai_dua_edit( $p_id );
	}

	public function nomination_penilai_dua_list(){
		return $this->co_db->nomination_penilai_dua_list();
	}

	public function nomination_penilai_dua( $p_id ){

		$p_id['current_usr_id'] = \E::get_session('usr_id');
		$p_id['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		return $this->co_db->nomination_penilai_dua($p_id);
	}

	public function nomination_penilai_dua_profile( $p_id ){
		return $this->co_db->nomination_penilai_dua_profile( $p_id );
	}	
	public function nomination_attachment_add( $p_id){
		$p_id['current_usr_id'] = \E::get_session('usr_id');
		$p_id['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		return $this->co_db->nomination_attachment_add($p_id);
	}	

	public function nomination_attachment_edit( $p_id){
		$p_id['current_usr_id'] = \E::get_session('usr_id');
		$p_id['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		return $this->co_db->nomination_attachment_edit($p_id);
	}								

	public function nomination_get_markah_prestasi( $p_id){
		return $this->co_db->nomination_get_markah_prestasi($p_id);
	}

	public function nomination_get_apc( $p_id){
		return $this->co_db->nomination_get_apc($p_id);
	}

	public function nomination_get_overmark( $p_id){
		return $this->co_db->nomination_get_overmark($p_id);
	}

	public function nomination_get_history_success( $p_id){
		return $this->co_db->nomination_get_history_success($p_id);
	}

	public function nomination_get_history_x_success( $p_id){
		return $this->co_db->nomination_get_history_x_success($p_id);
	}

	public function nomination_get_activity( $p_id){
		return $this->co_db->nomination_get_activity($p_id);
	}

	public function nomination_get_association( $p_id){
		return $this->co_db->nomination_get_association($p_id);
	}
	
	public function nomination_get_volunteer( $p_id){
		return $this->co_db->nomination_get_volunteer($p_id);
	}
	
	public function nomination_get_sport( $p_id){
		return $this->co_db->nomination_get_sport($p_id);
	}

	public function nomination_get_position( $p_id){
		return $this->co_db->nomination_get_position($p_id);
	}

	public function nomination_get_politic( $p_id){
		return $this->co_db->nomination_get_politic($p_id);
	}
	
	
	public function nomination_att_doc_create( $p_id){
		$p_id['current_usr_id'] = \E::get_session('usr_id');
		$p_id['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		return $this->co_db->nomination_att_doc_create($p_id);
	}		
	public function nomination_att_doc_update( $p_id){
		$p_id['current_usr_id'] = \E::get_session('usr_id');
		$p_id['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		return $this->co_db->nomination_att_doc_update($p_id);
	}	
	public function nomination_get_att_doc( $p_id){
		return $this->co_db->nomination_get_att_doc($p_id);
	}	
	public function nomination_check_att_doc( $p_id){
		return $this->co_db->nomination_check_att_doc($p_id);
	}	

	public function nomination_shru_reason( $p_id ){
		return $this->co_db->nomination_shru_reason( $p_id );
	}	

	public function nomination_shru_reason_satu( $p_id ){
		return $this->co_db->nomination_shru_reason_satu( $p_id );
	}	

	public function nomination_shru_reason_dua( $p_id ){
		return $this->co_db->nomination_shru_reason_dua( $p_id );
	}	

	public function nomination_shru_reason_pencadang( $p_id ){
		return $this->co_db->nomination_shru_reason_pencadang( $p_id );
	}

	public function nomination_shru_edit( $p_id ){
		return $this->co_db->nomination_shru_edit( $p_id );
	}		

	public function nomination_get_awd_type( $p_id ){
		return $this->co_db->nomination_get_awd_type( $p_id );
	}	

	public function nomination_get_bahagian_b( $p_id ){
		return $this->co_db->nomination_get_bahagian_b( $p_id );
	}	

	public function nomination_check_bahagian_b( $p_id ){
		return $this->co_db->nomination_check_bahagian_b( $p_id );
	}	

	public function nomination_edit_bahagian_b( $p_id ){
		$p_id['current_usr_id'] = \E::get_session('usr_id');
		$p_id['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		return $this->co_db->nomination_edit_bahagian_b( $p_id );
	}

	public function nomination_get_tindakan(){
		return $this->co_db->nomination_get_tindakan();
	}

	public function nomination_get_tarikh( $p_id ){
		return $this->co_db->nomination_get_tarikh( $p_id );
	}

	public function nomination_get_award(){
		return $this->co_db->nomination_get_award();
	}

	public function nomination_get_criteria( $p_id ){
		return $this->co_db->nomination_get_criteria( $p_id );
	}	

	public function nomination_add_pencadang( $p_id ){
		return $this->co_db->nomination_add_pencadang( $p_id );
	}				
}

?> 