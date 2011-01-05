<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Public_Controller extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->_global_template = "site_template";
		$this->_global_layout = "main_layout";
	}		
	
}