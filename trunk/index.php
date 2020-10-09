<?php
namespace moonlight;

/**
 * Load environment variables
 */
include 'config/environment.php';

/**
 * Initiliaze system setting.
 * Usually there is NO NEED to change the init.php during system setup.
 */
require MOONLIGHT_KERNEL_PATH . 'init.php';
debug_msg( 'Initializing', __FILE__ );

/**
 * Start the application.
 */
try{
	
	// creat new main controller and start the process.
	$v_controller = new \moonlight\controller();
	$v_controller->start();
	
} catch ( \X $e){
	
	// add error log
	$e->log();
	
	// finally, stop the whole process and exit.
	$v_controller->force_terminate( $e->getMessage() );
}
?>