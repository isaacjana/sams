<?php
$result = array();
foreach($v_dept_info as $v_row){
	array_push($result, array(	"id"=>$v_row['ad_id'], 
								"label"=>$v_row['kwd_value'], 
								"value" => strip_tags($v_row['kwd_value'])));
}
echo \U::array_to_json($result);
?>