<?php
$v_param['ic'] = ( !isset($_GET['ic']) || $_GET['ic'] == '' ) ? '' : $_GET['ic'];

/*get bearer token from gems*/ 
$v_url="http://scsgems2.tnt.sarawak.gov.my/gems_ws/gemsService/auth";

// $v_url="http://scsgems2.tnt.sarawak.gov.my/gems_ws/gemsService/auth";
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, $v_url."?LOGIN=stateaward&PWD=staTeAw@rd5757Test"); 
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curl, CURLOPT_HEADER, 1); 
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE); 
$v_result_auth=curl_exec($curl); 
$v_httpcode1 = curl_getinfo($curl, CURLINFO_HTTP_CODE); 
$v_result_auth_ary=explode(PHP_EOL, $v_result_auth); 
foreach($v_result_auth_ary as $v_key=>$v_each_header){ 
    if(strpos($v_each_header,'Authorization: Bearer ')===0){ 
        $v_auth_bearer=$v_each_header; 

    } 
} 

/*use bearer token to get the user profile*/ 
// $v_url="http://scsgems2.tnt.sarawak.gov.my/gems_ws/gemsService/profile";
$v_url="http://scsgems2.tnt.sarawak.gov.my/gems_ws/gemsService/pr/profile";  
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, $v_url."?OPTION=C&SearchUserId=".$v_param['ic']);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curl, CURLOPT_HTTPHEADER, array( 
                                            $v_auth_bearer 
                                            )); 
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
// curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($v_json_data)); 
$v_result_user=curl_exec($curl); 

$v_httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE); 
$v_result_user=json_decode($v_result_user,TRUE); 
$v_result_user=$v_result_user['RESULTS']; 
curl_close($curl);

// $v_singkatan = \E::get( 'obj_curr_module')->nomination_get_singkatan($v_param['pingat']);

$v_var = array( 
				"title" => (isset($v_result_user[0]['TitleStr'])? $v_result_user[0]['TitleStr']: ""),
				"tel_no" => (isset($v_result_user[0]['HandPhoneNo'])? $v_result_user[0]['HandPhoneNo']: ""),
				"email" => (isset($v_result_user[0]['Email'])? $v_result_user[0]['Email']: ""),
				"new_ic" => (isset($v_result_user[0]['NewIC'])? $v_result_user[0]['NewIC']: ""),
				"name" => (isset($v_result_user[0]['Name'])? $v_result_user[0]['Name']: ""),
				"awd_type_id" => (isset($v_singkatan['awd_type_id'])? $v_singkatan['awd_type_id']: ""),
				"param" => $v_param
				);

\V::append_data( 'body', \V::load_view( $this->get_view_file_path(), $v_object, $v_var )  );
\V::output_view('template_blank.php');
?>