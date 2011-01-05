<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


// define the site path BASE_DIR : c:\xampp\htdocs\mvc_v2
define ('BASE_DIR', realpath(dirname(__FILE__)));
	
// BASE_URL : /mvc_v2/
define ('BASE_URL', str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']));
 	
// the application directory path 
//define('DIR_APPLICATION', DIR_BASE.'/application/');
//define('DIR_LIBRARY', DIR_BASE . '/library/');
//define('DIR_TEMPLATE', DIR_APPLICATION . 'view/');
//define('DIR_LAYOUT', DIR_BASE . '/layouts/');

define('_TB_PREFIX', 'core_');
define('TB_CI_SESSIONS', _TB_PREFIX . 'ci_sessions');
define('TB_USERS', _TB_PREFIX . 'users');
define('TB_PERMISSIONS', _TB_PREFIX . 'permissions');
define('TB_ROLES', _TB_PREFIX . 'roles');


/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ', 							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 					'ab');
define('FOPEN_READ_WRITE_CREATE', 				'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 			'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./system/application/config/constants.php */