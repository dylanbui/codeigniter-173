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

	function add()
	{
		$this->loadView('adm_user/user/add');		
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