<?php

class Auth extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->library('form_validation');
		$this->load->library('admin_auth');
		
	}
	
	function index()
	{
		// Path : [module_name]/[current view path]
//		$this->loadView('adm_login/login/login_form');
		$this->login();
	}
	
	function login()
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
	
//	function _set_session($data)
//	{
//		// Get role data
//		$role_data = $this->_get_role_data($data->role_id);
//	
//		// Set session data array
//		$user = array(						
//			'DX_user_id'						=> $data->id,
//			'DX_username'						=> $data->username,
//			'DX_role_id'						=> $data->role_id,			
//			'DX_role_name'					=> $role_data['role_name'],
//			'DX_parent_roles_id'		=> $role_data['parent_roles_id'],	// Array of parent role_id
//			'DX_parent_roles_name'	=> $role_data['parent_roles_name'], // Array of parent role_name
//			'DX_permission'					=> $role_data['permission'],
//			'DX_parent_permissions'	=> $role_data['parent_permissions'],			
//			'DX_logged_in'					=> TRUE
//		);
//
//		$this->ci->session->set_userdata($user);
//	}
	
	
	
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
	
//	function is_logged_in()
//	{
//		$is_logged_in = $this->session->userdata('is_logged_in');
//		if(!isset($is_logged_in) || $is_logged_in != true)
//		{
//			echo 'You don\'t have permission to access this page. <a href="../login">Login</a>';	
//			die();		
//			//$this->load->view('login_form');
//		}		
//	}

}