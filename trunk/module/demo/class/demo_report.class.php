<?php
namespace moonlight\demo;

class demo_report {
	private $co_db;

	public function __construct( $p_co_db ){
		$this->co_db = $p_co_db;
	}

	public function __destruct(){
		unset($this->co_db);
	}

	public function report_peristiwa_list(){
		return $this->co_db->report_peristiwa_list();
	}

	public function report_race_list(){
		return $this->co_db->report_race_list();
	}

	public function report_award_list(){
		return $this->co_db->report_award_list();
	}

	public function report_source_list(){
		return $this->co_db->report_source_list();
	}

	public function report_race_rows($p_val){
		return $this->co_db->report_race_rows($p_val);
	}

	public function report_award_rows($p_val){
		return $this->co_db->report_award_rows($p_val);
	}	

	public function report_pingat_list(){
		return $this->co_db->report_pingat_list();
	}	

	public function report_parti_list(){
		return $this->co_db->report_parti_list();
	}
}

?>