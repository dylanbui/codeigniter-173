<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Base URL
 *
 * Returns the "base_url" item from your config file
 *
 * @access    public
 * @return    string
 */
function base_url($module=''){
    $CI =& get_instance();
    $ret = $CI->config->slash_item('base_url');
    if($module != ''){
        $arr = Modules::search_path($module);
        $module_dir = $arr[3].'/'.$arr[0];
        $ret .= 'application/modules/'.$module_dir.'/assets/';
    }
    return $ret;
}

function set_flash_message($msg,$name=''){
    $CI =& get_instance();
    $CI->session->set_flashdata($name?$name:'flash_message', $msg);
    return true;
}

function get_flash_message($name=''){
    $CI =& get_instance();
    return $CI->session->flashdata($name?$name:'flash_message');
}

function custom_menu_link($name='', $link='#', $link_type='uri', $target='inpage', $current=FALSE, $classname=''){
    $extra = '';
    if($target == LINK_TARGET_BLANK)
        $extra = 'target="_blank"';
    if($target == LINK_TARGET_LIGHTBOX)
        $extra = 'rel="thickbox"';
    
    $prefix = '';
    if($link_type == LINK_TYPE_CONTENT)
        $prefix = 'contents/';
    return '<a href="'.site_url($prefix.$link).'" '.$extra.($current?(' class="'.$classname.' active"'):(' class="'.$classname.'"')).'>'.h($name).'</a>';
}