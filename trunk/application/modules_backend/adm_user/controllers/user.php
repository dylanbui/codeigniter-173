<?php

class User extends Admin_Controller 
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');		

	}
	
	function index()
	{
		$this->show();
	}
	
	function show($offset = 0)
	{
		$this->load->model('users', 'users');			
		
		// Search checkbox in post array
		foreach ($_POST as $key => $value)
		{
			// If checkbox found
			if (substr($key, 0, 9) == 'checkbox_')
			{
				// If ban button pressed
				if (isset($_POST['ban']))
				{
					// Ban user based on checkbox value (id)
					$this->users->ban_user($value);
				}
				// If unban button pressed
				else if (isset($_POST['unban']))
				{
					// Unban user
					$this->users->unban_user($value);
				}
				else if (isset($_POST['reset_pass']))
				{
					// Set default message
					$this->_data['reset_message'] = 'Reset password failed';
				
					// Get user and check if User ID exist
					if ($query = $this->users->get_user_by_id($value) AND $query->num_rows() == 1)
					{		
						// Get user record				
						$user = $query->row();
						
						// Create new key, password and send email to user
						if ($this->dx_auth->forgot_password($user->username))
						{
							// Query once again, because the database is updated after calling forgot_password.
							$query = $this->users->get_user_by_id($value);
							// Get user record
							$user = $query->row();
														
							// Reset the password
							if ($this->dx_auth->reset_password($user->username, $user->newpass_key))
							{							
								$this->_data['reset_message'] = 'Reset password success';
							}
						}
					}
				}
			}				
		}
		
		/* Showing page to user */
		
		// Get offset and limit for page viewing
//		$offset = (int) $this->uri->segment(3);
		// Number of record showing per page
		$row_count = 5;
		
		// Get all users
		$this->_data['users'] = $this->users->get_all($offset, $row_count)->result();
		
		// Pagination config
		$p_config['paging_template'] = "{$this->_global_template}/parser/paging";
		$p_config['base_url'] = 'adm_user/user/show/%d';
		
		$p_config['uri_segment'] = 4;
		$p_config['num_links'] = 2;
		$p_config['total_rows'] = $this->users->get_all()->num_rows();
		$p_config['per_page'] = $row_count;
				
		// Init pagination
		$this->pagination->initialize($p_config);		
		// Create pagination links
		$this->_data['pagination'] = $this->pagination->create_links();
		// Load view
		$this->loadView('adm_user/user/show');
	}

	
	function password()
	{
		$this->admin_auth->change_password("123456","123456");
		
		print "<pre>";
		print_r('Thay doi xong');
		print "</pre>";
		exit();
	}
}
?>