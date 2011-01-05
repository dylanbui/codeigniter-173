<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Admin_Controller extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->_global_template = "admin_template";
		$this->_global_layout = "main_layout";		
	}		
	
}