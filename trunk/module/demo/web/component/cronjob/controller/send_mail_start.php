<?php
include('cronjob_config.php');

print chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10);
print 'Start:'.chr(10);
if ($argc>1){
	if($argv[1]=="abc123"){
		//proceed	
	}
	else{
		echo $msg_invalid_key;
		exit;
	}
}else{
    echo $msg_not_allow;
    exit;
}
$v_here = file($v_dns_path.$v_module_path.'sams/cronjob/send_mail/');
print_r($v_here);
print chr(10).chr(10).chr(10);
print chr(10);

?>