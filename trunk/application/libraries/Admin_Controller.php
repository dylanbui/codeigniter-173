<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Admin_Controller extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('admin_auth');
		$this->_global_template = "admin_template";
		$this->_global_layout = "main_layout";
		
		// Show error and exit if the user does not have sufficient permissions
	    if( ! $this->_check_access() )
	    {
		  	show_error("You don't permission for this action !!!");
		    exit;
	    }
	}

	private function _check_access()
	{
	    // These pages get past permission checks
	    $ignored_pages = array(
	    		'adm_administrator/administrator/index',
	    		'adm_administrator/auth/index',
	    		'adm_administrator/auth/login', 
	    		'adm_administrator/auth/logout'
   		);

	    // Check if the current page is to be ignored
//	    $current_page = $this->uri->segment(1).'/'.$this->uri->segment(2, 'index').'/'.$this->uri->segment(3, 'index');
	    $current_page = $this->_current_module.'/'.$this->_current_controller.'/'.$this->_current_action;

	    // Dont need to log in, this is an open page
		if(in_array($current_page, $ignored_pages))
		{
			return TRUE;
		}

		else if (!$this->admin_auth->is_logged_in())
		{
			// ket thuc chuong trinh
			// thong bao link nay khong ton tai
			show_404();
			exit();
		}
		else 
		{
			$this->_current_user = $this->session->userdata;
			$this->_data['_current_user'] = $this->_current_user;
			return TRUE;
		}
		
		// Kiem tra permission cua account

		// Admins can go straight in
//		else if ($this->user->group === 'admin')
//		{
//			return TRUE;
//		}

		// Well they at least better have permissions!
//		else if ($this->user)
//		{
//			// We are looking at the index page. Show it if they have ANY admin access at all
//			if($current_page == 'admin/index' && $this->permissions)
//			{
//				return TRUE;
//			}
//
//			else
//			{
//				// Check if the current user can view that page
//				 return in_array($this->module, $this->permissions);
//			}
//		}

		// god knows what this is... erm...
		return FALSE;
	}
	
	
}