<?php
// db config is keep inside .php so that it can be encrypted by ioncube for security reason.

$v_moonlight_db['type']			= 'mysql';
$v_moonlight_db['host']			= 'localhost';
$v_moonlight_db['database']		= 'sams';
$v_moonlight_db['table_prefix']	= 't_';
$v_moonlight_db['user']			= 'root';
$v_moonlight_db['password']		= 'password';
// $v_moonlight_db['connection_type']		= 'mysqli';
$v_moonlight_db['connection_str']		= 'mysql:host=localhost;dbname=sams';
$v_moonlight_db['connection_type']		= 'pdo';

$v_doc_db['type'] = 'mysql';
$v_doc_db['host'] = '192.168.1.99';
$v_doc_db['database'] = 'sams';
$v_doc_db['table_prefix'] = 't_doc_';
$v_doc_db['user'] = 'root';
$v_doc_db['password'] = 'password';
$v_doc_db['connection_type'] = 'mysqli';
$v_doc_att_db['type'] = 'sftp';
$v_doc_att_db['org_name'] = 'sams';
$v_doc_att_db['arc_by'] = 'DAY'; 

?>