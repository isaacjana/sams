<?php
namespace moonlight\demo;

class demo_setting {
	private $co_db;

	public function __construct( $p_co_db ){
		$this->co_db = $p_co_db;
	}

	public function __destruct(){
		unset($this->co_db);
	}

	public function setting_user_list(){
		return $this->co_db->setting_user_list();
	}

	public function setting_user_detail( $p_id ){
		return $this->co_db->setting_user_detail( $p_id );
	}

	public function setting_user_acl_get( $p_id ){
		return $this->co_db->setting_user_acl_get( $p_id );
	}

	public function setting_user_acl_add( $p_value ){
		$p_value['current_usr_id'] = \E::get_session('usr_id');
		$p_value['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		$v_id = $this->co_db->setting_user_acl_add( $p_value );

		return $v_id;
	}

	public function setting_user_acl_edit( $p_value ){
		$p_value['current_usr_id'] = \E::get_session('usr_id');
		$p_value['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		$this->co_db->setting_user_acl_edit( $p_value );
	}

	public function setting_user_group_get( $p_id ){
		return $this->co_db->setting_user_group_get( $p_id );
	}

	public function setting_code_role(){
		return $this->co_db->setting_code_role();
	}
	public function setting_group_access_get( $p_id ){
		return $this->co_db->setting_group_access_get( $p_id );
	}
	public function setting_folio_no(){
		return $this->co_db->setting_folio_no();
	}
	public function setting_doc_version(){
		return $this->co_db->setting_doc_version();
	}

	public function setting_tarikh_pencalonan( $p_id ){
		return $this->co_db->setting_tarikh_pencalonan( $p_id );
	}	

	public function setting_tarikh_pencalonan_update( $p_id ){
		return $this->co_db->setting_tarikh_pencalonan_update( $p_id );
	}	
}

?>