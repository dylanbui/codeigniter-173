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
		// Path : [module_name]/[current view path]
		if (!$this->admin_auth->is_logged_in())
		{
			$val = $this->form_validation;
			
			// Set form validation rules
			$val->set_rules('email', 'Email', 'trim|required|email|xss_clean');
			$val->set_rules('password', 'Password', 'trim|required|xss_clean');
			
			if ($val->run() AND $this->admin_auth->login($val->set_value('email'), $val->set_value('password'),FALSE))
			{
				// Redirect to homepage
				redirect('adm_dashboard');
			}
		}
		
		// Hien thi form login - khong can layout
		echo $this->render('adm_administrator/auth/login_form',$this->_data);
		return;

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