<?php
/**
 * Set cookie security setting before session start
 */
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1);

/**
 * Start new session
 */
session_start();
if(!isset($_SESSION['vui']['usr_id'])) $_SESSION['vui']['usr_id'] = 'ANONYMOUS';
if(!isset($_SESSION['vui']['full_name'])) $_SESSION['vui']['full_name'] = 'Anonymous';

/**
 * Designer
 */
ini_set('display_errors', 				 0  );
define( 'MOONLIGHT_DEVELOPMENT_MODE', 	'0' );
define( 'DEBUG', 						'0' );
// define( 'DEVELOPER_IP', 				'10.18.7.89');  // Enable "DEVELOPER_IP" only for debug and maintenance purpose 
define( 'DEBUG_DISPLAY_SQL_ERROR', 		'1' );
define( 'MOONLIGHT_MOBILE_APPS', 		'1' );
error_reporting(E_ALL);

/**
 * Online/Offline Mode
 */
define( 'MOONLIGHT_OFFLINE', 			'0' );

/**
 * Set system path
 */
define( 'MOONLIGHT_ROOT_PATH', 			'' );
define( 'MOONLIGHT_LOADER', 			'../../../moonlight/loader.php' );
define( 'MOONLIGHT_KERNEL_PATH', 		'../../../moonlight/kernel/latest/' );
define( 'MOONLIGHT_JS_PATH', 			'../../../moonlight/js/' );
define( 'MOONLIGHT_PLUGIN_PATH', 		'../../../moonlight/plugin/' );
define( 'MOONLIGHT_MMAPI_PATH', 		'../../../moonlight/mmapi/' );

define( 'MOONLIGHT_MODULE_PATH', 		'module/' );
define( 'MOONLIGHT_CONFIG_PATH', 		'config/config.ini.php' );
define( 'MOONLIGHT_CACHE_PATH', 		'temp/cache' );

/**
 * Default view setting
 */
define( 'MOONLIGHT_DEFAULT_MODULE', 	'demo');
define( 'MOONLIGHT_DEFAULT_COMPONENT', 	'home');
define( 'MOONLIGHT_DEFAULT_ACTION', 	'index');
define( 'MOONLIGHT_DEFAULT_PARAM', 		'0');
define( 'LOAD_REPORT_CLASS', 		'0');

/**
 * Misc. Setting
 */
define( 'MOONLIGHT_IMG_REWRITE', 		true );
define( 'MOONLIGHT_CSS_REWRITE', 		true );

/**
 * Set date/time zone
 * Refer to PHP manual > List of Supported Timezones for more time zone code.
 */
date_default_timezone_set('Asia/Kuching');

/**
 * Display mode detection
 */
// Remove the remark for below codes if your application support for mobile apps
// include MOONLIGHT_PLUGIN_PATH . 'Mobile_Detect/Mobile_Detect.php';
// $o_mobile_detect = new \Mobile_Detect();
// $v_moonlight_mode = $o_mobile_detect->isMobile() ? 'mobile' : 'web';

 
// if( MOONLIGHT_MOBILE_APPS == 1 && $_SERVER['REQUEST_METHOD'] == 'POST' && 
	// isset($_POST['__MOONLIGHT_IS_NATIVE__']) && $_POST['__MOONLIGHT_IS_NATIVE__'] == true) {
	// $v_moonlight_mode = 'mobile_apps';
// }else if( MOONLIGHT_MOBILE_APPS == 1 && $_SERVER['REQUEST_METHOD'] == 'GET' && 
	// isset($_GET['__MOONLIGHT_IS_NATIVE__']) && $_GET['__MOONLIGHT_IS_NATIVE__'] == 1) {
	// $v_moonlight_mode = 'mobile_apps';
// }else if(isset($_SESSION['moonlight_mode']) && strtoupper($_SESSION['moonlight_mode']) == 'MOBILE'  ){
	// $v_moonlight_mode = 'mobile';
	
// }else if( isset($_SESSION['moonlight_mode']) && strtoupper($_SESSION['moonlight_mode']) == 'WEB' ){
	// $v_moonlight_mode = 'web';
	
// }else{
	// $v_moonlight_mode = $o_mobile_detect->isMobile() ? 'mobile' : 'web';
// }

// define( 'IS_MOBILE', $o_mobile_detect->isMobile() );
// define( 'MOONLIGHT_MODE', $v_moonlight_mode );

// Default mode is web, remark this code if your application is support for mobile apps
define( 'MOONLIGHT_MODE', 'web' );


/**
 * Load moonlight loader
 */
include MOONLIGHT_LOADER;
?>