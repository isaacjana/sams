<?php
namespace moonlight\demo;

class demo_user {
	private $co_db;

	public function __construct( $p_co_db ){
		$this->co_db = $p_co_db;
	}

	public function __destruct(){
		unset($this->co_db);
	}

	public function user_acl_get( $p_id ){
		return $this->co_db->user_acl_get( $p_id );
	}

	public function user_acl_list( $p_order=null, $p_start = null, $p_num_of_rec = null, $p_value = null ){
		return $this->co_db->user_acl_list( $p_order, $p_start, $p_num_of_rec, $p_value );
	}

	public function user_acl_list_total( $p_value = null ){
		return $this->co_db->user_acl_list_total( $p_value );
	}

	public function user_acl_add( $p_value ){
		$p_value['current_usr_id'] = \E::get_session('usr_id');
		$p_value['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		$v_id = $this->co_db->user_acl_add( $p_value );

		return $v_id;
	}

	public function user_acl_edit( $p_value ){
		$p_value['current_usr_id'] = \E::get_session('usr_id');
		$p_value['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		$this->co_db->user_acl_edit( $p_value );
	}

	public function user_acl_del( $p_value, $p_del_method ){
		if($p_del_method=="0"){
			$p_value['current_usr_id'] = \E::get_session('usr_id');
			$p_value['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
			$v_result = $this->co_db->user_acl_soft_del( $p_value );
		}else{
			$v_result = $this->co_db->user_acl_hard_del( $p_value );
		}

		return $v_result;
	}

	public function user_get_admin_usr_id(){
		return $this->co_db->user_get_admin_usr_id();
	}
}
?>