<?php
namespace moonlight\demo;

class demo_attendance {
	private $co_db;

	public function __construct( $p_co_db ){
		$this->co_db = $p_co_db;
	}

	public function __destruct(){
		unset($this->co_db);
	}

	public function attendance_user_list(){
		return $this->co_db->attendance_user_list();
	}

	public function attendance_detail( $p_id ){
		return $this->co_db->attendance_detail( $p_id );
	}

	public function attendance_shru( $p_id ){

		$p_id['current_usr_id'] = \E::get_session('usr_id');
		$p_id['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		return $this->co_db->attendance_shru($p_id);
	}

	public function attendance_profile( $p_id ){
		return $this->co_db->attendance_profile( $p_id );
	}	

}

?>