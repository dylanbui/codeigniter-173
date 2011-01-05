<?php

class Layout extends Public_Controller 
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function header()
	{
		// Path : [module_name]/[current view path]
//		$this->load->view('layout/temp/layout_header');
//		$this->load->view('site_template/header');
		echo $this->render("{$this->_global_template}/header");
	}
	
	public function footer()
	{
		// Path : [module_name]/[current view path]
//		$this->load->view('layout/temp/layout_footer');		
//		$this->load->view('site_template/footer');
		echo $this->render("{$this->_global_template}/footer");
	}	

}
