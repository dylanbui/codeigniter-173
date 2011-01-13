<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'libraries/Page_controller'.EXT;
require_once APPPATH.'libraries/Front_controller'.EXT;
require_once APPPATH.'libraries/Admin_controller'.EXT;


function get_setting_table($key,$language)
{
    $CI = &get_instance();
    $CI->load->module_model('administrator.career.setting_model');
    return $CI->setting_model->get_setting_value($key,$language);
}
