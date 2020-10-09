<?php
// db config is keep inside .php so that it can be encrypted by ioncube for security reason.

$v_moonlight_db['type']			= 'mysql';
$v_moonlight_db['host']			= 'localhost';
$v_moonlight_db['database']		= 'sams';
$v_moonlight_db['table_prefix']	= 't_sys_';
$v_moonlight_db['user']			= 'root';
$v_moonlight_db['password']		= 'password';
// $v_moonlight_db['connection_type']		= 'mysqli';
$v_moonlight_db['connection_str']		= 'mysql:host=localhost;dbname=sams';
$v_moonlight_db['connection_type']		= 'pdo';

?>