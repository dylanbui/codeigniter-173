<?php

class Dashboard extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();
		
	}
	
	function index()
	{
		// Path : [module_name]/[current view path]
//		$this->loadView('adm_login/login/login_form');
		$this->main();
	}
	
	function main()
	{
		$this->loadView('adm_administrator/dashboard/main');
	}	
	
	function validate_credentials()
	{		
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		
		if($query) // if the user's credentials validated...
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('site/members_area');
		}
		else // incorrect username or password
		{
			$this->index();
		}
	}	
	
}