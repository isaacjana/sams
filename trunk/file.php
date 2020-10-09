<?php
/**
 * Load environment variables
 */
include 'config/environment.php';

/**
 * Set the DNS & FOLDER path which from config.ini
 */
$v_config = parse_ini_file(MOONLIGHT_CONFIG_PATH, true);
define( 'MOONLIGHT_DNS_PATH', $v_config['path']['dns'] ); 
define( 'MOONLIGHT_FOLDER_PATH', $v_config['path']['folder'] );

if(MOONLIGHT_FOLDER_PATH != '/'){
	$v_uri = str_replace( MOONLIGHT_FOLDER_PATH, '', $_SERVER['REQUEST_URI'] );
}else{
	$v_uri = substr($_SERVER['REQUEST_URI'], 1);
}
$v_arr_uri = explode( '/', $v_uri );


// image information
$v_arr_file = array_slice( $v_arr_uri , 2 );
$v_file_path = 'module/' . $v_arr_uri[0] . '/' . $v_arr_uri[1] . '/theme/' . implode('/', $v_arr_file);

// kernel image ( /kernel/res/
if ( $v_arr_uri[0]=='k' ){
	$v_arr_file = array_slice( $v_arr_uri , 1 );
	$v_file_path = MOONLIGHT_KERNEL_PATH . 'res/' . implode('/', $v_arr_file);
}

// load image
if ( file_exists($v_file_path) ){
	$v_file_name = $v_arr_uri[ count($v_arr_uri)-1 ];
	$v_tmp = explode('.', $v_file_name );
	$v_file_extension = strtolower( end($v_tmp)) ;
}else{
	$v_file_path = \R::get_image_real_path('FILE_NOT_FOUND');
	$v_file_name = \U::get_file_name( $v_file_path );
	$v_file_extension = \U::get_file_name( $v_file_name );
}


// content type
switch ( strtolower($v_file_extension) ){
	case 'jpg':
	case 'jpeg':
	case 'pjpeg':
		$v_file_type = 'image/jpg';
		break;
	case 'png':
		$v_file_type = 'image/png';
		break;
	case 'gif':
		$v_file_type = 'image/gif';
		break;
	case 'bmp':
		$v_file_type = 'image/vnd.wap.wbmp';
		break;
	default:
		$v_file_type = 'image/jpg';
}

// http header
header("Pragma: no-cache");
header("Content-Type: $v_file_type");
header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + 2592000));

// finally, the content
echo file_get_contents( $v_file_path );

?>