<?php
namespace moonlight\demo;

class demo_shortlist {
	private $co_db;

	public function __construct( $p_co_db ){
		$this->co_db = $p_co_db;
	}

	public function __destruct(){
		unset($this->co_db);
	}

	public function shortlist_user_list(){
		return $this->co_db->shortlist_user_list();
	}

	public function shortlist_verify_list(){
		return $this->co_db->shortlist_verify_list();
	}	

	public function shortlist_print_list(){
		return $this->co_db->shortlist_print_list();
	}		

	public function shortlist_detail( $p_id ){
		return $this->co_db->shortlist_detail( $p_id );
	}	

	public function shortlist_shru_verify_detail( $p_id ){
		return $this->co_db->shortlist_shru_verify_detail( $p_id );
	}

	public function shortlist_get_letter_head(){
		return $this->co_db->shortlist_get_letter_head();
	}

	public function shortlist_shru( $p_id ){

		$p_id['current_usr_id'] = \E::get_session('usr_id');
		$p_id['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		return $this->co_db->shortlist_shru($p_id);
	}	

	public function shortlist_verifier( $p_id ){

		$p_id['current_usr_id'] = \E::get_session('usr_id');
		$p_id['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		return $this->co_db->shortlist_verifier($p_id);
	}

	public function shortlist_shru_profile( $p_id ){
		return $this->co_db->shortlist_shru_profile( $p_id );
	}

	public function shortlist_get_award(){
		return $this->co_db->shortlist_get_award();
	}

	public function shortlist_shru_edited($p_id){
		return $this->co_db->shortlist_shru_edited($p_id);
	}			


}

?>