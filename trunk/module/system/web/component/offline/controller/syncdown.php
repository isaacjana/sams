<?PHP
$v_var = array(
			"sync_down" => 'sync down loh...',
		 );
 
$v_db_common_share[] = "t_sys_agency";
$v_db_common_share[] = "t_sys_agency_dept";
$v_db_common_share[] = "t_sys_agency_dept_lbl";
$v_db_common_share[] = "t_sys_agency_lbl";
$v_db_common_share[] = "t_sys_agency_sec";
$v_db_common_share[] = "t_sys_agency_sec_lbl";
$v_db_common_share[] = "t_sys_agency_unit";
$v_db_common_share[] = "t_sys_agency_unit_lbl";
$v_db_common_share[] = "t_sys_holiday";
$v_db_common_share[] = "t_sys_holiday_lbl";
$v_db_common_share[] = "t_sys_imp_sync_log";
$v_db_common_share[] = "t_sys_loc_country";
$v_db_common_share[] = "t_sys_loc_country_lbl";
$v_db_common_share[] = "t_sys_loc_district";
$v_db_common_share[] = "t_sys_loc_district_lbl";
$v_db_common_share[] = "t_sys_loc_division";
$v_db_common_share[] = "t_sys_loc_division_lbl";
$v_db_common_share[] = "t_sys_loc_state";
$v_db_common_share[] = "t_sys_loc_state_lbl";
$v_db_common_share[] = "t_sys_loc_station";
$v_db_common_share[] = "t_sys_loc_station_lbl";
$v_db_common_share[] = "t_sys_log";
$v_db_common_share[] = "t_sys_user";
$v_db_common_share[] = "t_sys_user_2";
$v_db_common_share[] = "t_sys_user_agency_history";
$v_db_common_share[] = "t_sys_user_position";
$v_db_common_share[] = "t_sys_user_title";
$v_db_common_share[] = "t_sys_user_title_history";
$v_db_common_share[] = "t_sys_user_title_lbl";
$v_db_common_share[] = "version";
 
\V::append_data( 'header', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object, $v_var ) );
\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var ) );

\V::output_view();
?>