<?php

class Welcome extends Public_Controller {

	function Welcome()
	{
		parent::__construct();
	}
	
	function index()
	{
		$this->load->view('welcome/welcome/welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */