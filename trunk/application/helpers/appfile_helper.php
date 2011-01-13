<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function list_files($dir='', $skip_files = null, $recursive=false, $only_directories=false)
{
    if (empty($dir) || !is_dir($dir)) {
        return false;
    }

    $file_list = array();

    // need to use the '@' in case we can't open the directory
    // otherwise it still throws a notice.
    if (!$handle = @opendir($dir)) {
        return false;
    }

    while (($file = readdir($handle)) !== false) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        if (is_file($dir.'/'.$file)) {
            if ($only_directories) {
                continue;
            }
            if (empty($skip_files)) {
                $file_list[] = $file;
                continue;
            }
            if (!empty($skip_files)) {
                if (is_array($skip_files) && !in_array($file, $skip_files)) {
                    $file_list[] = $file;
                }
                if (!is_array($skip_files) && $file != $skip_files) {
                    $file_list[] = $file;
                }
            }
            continue;
        }

        if (is_dir($dir.'/'.$file) && !isset($file_list[$file])) {
            if ($recursive) {
                $file_list[$file] = list_files($dir.'/'.$file, $skip_files, $recursive, $only_directories);
            }
        }
    }
    closedir($handle);
    if (!$recursive) {
        natcasesort($file_list);
    }

    return $file_list;
}
/* End of file Appfile_helper.php */
/* Location: ./application/helpers/Appfile_helper.php */