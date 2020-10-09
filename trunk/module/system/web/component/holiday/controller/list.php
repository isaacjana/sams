<?PHP
$v_param = $this->get_param();
$v_year = isset($v_param[0]) && preg_match('/^[0-9]{4,4}$/', $v_param[0]) ? $v_param[0] : date('Y');
$v_var['year'] = $v_year;


$v_cond['year'] = $v_year;
$v_holiday_info = \E::get('obj_system_module')->holiday_list($v_cond);
print '<div style="color:black;border:1px solid black">';
foreach($v_holiday_info as $v_row){
	if(!preg_match("/^.*PROFILE$/",   $v_row['hol_key'])){
		$v_assign = true;
		
		if(isset($v_temp[$v_row['hol_date']]) &&  $v_temp[$v_row['hol_date']]['hol_key'] == $v_year.'_MISC' ){
			$v_temp[$v_row['hol_date']]['kwd_value'] .= '&#10;'.$v_row['kwd_value'];
			//&#10; -> new line 
			//&#xA; -> new line
			$v_assign = false;
		}
		
		if($v_assign){
			if($v_temp[$v_row['hol_date']]['hol_key'] != $v_year.'_MISC' ){
				$v_temp[$v_row['hol_date']] = array(
											'hol_id' => $v_row['hol_id'],
											'hol_key' => $v_row['hol_key'],
											'kwd_value' => $v_row['kwd_value'],
											'kwd_lang' => $v_row['kwd_lang']
											);
			}else{
				 // => $v_row['kwd_value'
			}
		}
	}
}
print '</div>';
$v_holiday_info = $v_temp;
$v_var['holiday_info'] = $v_holiday_info;

\V::append_data( 'header', \V::load_view( $this->get_view_file_path( 'menu', 'share' ), $v_object ) );
\V::append_data( 'body', \V::load_box( \E::get( 'obj_system_lang')->get('HOLIDAY_LIST'), \V::load_view( $this->get_view_file_path(), $v_object, $v_var ), 'box_form.php' ) );

\V::output_view();
?>