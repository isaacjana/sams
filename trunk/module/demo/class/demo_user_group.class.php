<?php
namespace moonlight\demo;

class demo_user_group {
	private $co_db;

	public function __construct( $p_co_db ){
		$this->co_db = $p_co_db;
	}

	public function __destruct(){
		unset($this->co_db);
	}

	public function user_group_get( $p_id ){
		return $this->co_db->user_group_get( $p_id );
	}

	public function user_group_list( $p_order=null, $p_start = null, $p_num_of_rec = null, $p_publish=null, $p_cat=null ){
		return $this->co_db->user_group_list( $p_order, $p_start, $p_num_of_rec, $p_publish, $p_cat );
	}

	public function user_group_list_total(){
		return $this->co_db->user_group_list_total();
	}

	public function user_group_add( $p_value ){
		for($v_c=0; $v_c<$p_value['comp_count']; $v_c++){
			$p_value['acl'][$v_c]['name'] = $p_value['comp_name_'.$v_c];

			unset($v_acl);
			$v_acl = Array(
						$p_value['group_del_'.$v_c],
						$p_value['group_edit_'.$v_c],
						$p_value['group_add_'.$v_c],
						$p_value['group_read_'.$v_c]
					);

			$v_tmp_val = implode( $v_acl );
			$v_acl_val = bindec( $v_tmp_val );
			$p_value['acl'][$v_c]['value'] = $v_acl_val;
		}

		$p_value['current_usr_id'] = \E::get_session('usr_id');
		$p_value['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now

		$v_id = $this->co_db->user_group_add( $p_value );

		return $v_id;
	}

	public function user_group_lbl_add( $p_value ){
		$p_value['current_usr_id'] = \E::get_session('usr_id');
		$p_value['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		$this->co_db->user_group_lbl_add( $p_value );
	}

	public function user_group_edit( $p_value ){
		for($v_c=0; $v_c<$p_value['comp_count']; $v_c++){
			$p_value['acl'][$v_c]['name'] = $p_value['comp_name_'.$v_c];

			unset($v_acl);
			$v_acl = Array(
						$p_value['group_del_'.$v_c],
						$p_value['group_edit_'.$v_c],
						$p_value['group_add_'.$v_c],
						$p_value['group_read_'.$v_c]
					);

			$v_tmp_val = implode( $v_acl );
			$v_acl_val = bindec( $v_tmp_val );
			$p_value['acl'][$v_c]['value'] = $v_acl_val;
		}

		$p_value['current_usr_id'] = \E::get_session('usr_id');
		$p_value['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		$this->co_db->user_group_edit( $p_value );
	}

	public function user_group_lbl_edit( $p_value ){
		$p_value['current_usr_id'] = \E::get_session('usr_id');
		$p_value['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
		$this->co_db->user_group_lbl_edit( $p_value );
	}

	public function user_group_del( $p_value, $p_del_method ){
		if($p_del_method=="0"){
			$p_value['current_usr_id'] = \E::get_session('usr_id');
			$p_value['current_datetime'] = \E::get( 'obj_curr_module')->__now(); // Get the server date and time now
			$v_result = $this->co_db->user_group_soft_del( $p_value );
		}else{
			$v_result = $this->co_db->user_group_hard_del( $p_value );
		}

		return $v_result;
	}
}
?>