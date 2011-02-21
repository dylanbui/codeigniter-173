<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/



/* End of file hooks.php */
/* Location: ./system/application/config/hooks.php */


//$hook['pre_controller'] = array(
//    'class'    => 'Auth_Hooks',
//    'function' => 'main',
//    'filename' => 'auth_hooks.php',
//    'filepath' => 'hooks',
//
//);

// http://www.jigniter.com/profiling-your-codeigniter-applications/

$hook['post_controller_constructor'] = array(
	'class'    => '',
	'function' => 'enable_profiler',
	'filename' => 'profiler.php',
	'filepath' => 'hooks',
	'params'   => array()
);
 
