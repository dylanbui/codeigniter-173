<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * DX Auth Class
 *
 * Authentication library for Code Igniter.
 *
 * @author		Dexcell
 * @version		1.0.6
 * @based on	CL Auth by Jason Ashdown (http://http://www.jasonashdown.co.uk/)
 * @link			http://dexcell.shinsengumiteam.com/dx_auth
 * @license		MIT License Copyright (c) 2008 Erick Hartanto
 * @credits		http://dexcell.shinsengumiteam.com/dx_auth/general/credits.html
 */
 
class Admin_Auth
{
	// Private
	var $_banned;
	var $_ban_reason;
	var $_auth_error;	// Contain user error when login
	
	function Admin_Auth()
	{
		$this->ci =& get_instance();

		log_message('debug', 'DX Auth Initialized');

		// Load required library
		$this->ci->load->library('session');
		$this->ci->load->database();
		
		// Load Admin Auth language		
		$this->ci->lang->load('adm_auth');
		
		// Initialize
		$this->_init();
	}

	/* Private function */

	function _init()
	{
//		 Init helper config variable
//		$this->email_activation = $this->ci->config->item('DX_email_activation');
//		
//		$this->allow_registration = $this->ci->config->item('DX_allow_registration');
//		$this->captcha_registration = $this->ci->config->item('DX_captcha_registration');
//		
//		$this->captcha_login = $this->ci->config->item('DX_captcha_login');
//		
//		 URIs
//		$this->banned_uri = $this->ci->config->item('DX_banned_uri');
//		$this->deny_uri = $this->ci->config->item('DX_deny_uri');
//		$this->login_uri = $this->ci->config->item('DX_login_uri');
//		$this->logout_uri = $this->ci->config->item('DX_logout_uri');
//		$this->register_uri = $this->ci->config->item('DX_register_uri');
//		$this->activate_uri = $this->ci->config->item('DX_activate_uri');
//		$this->forgot_password_uri = $this->ci->config->item('DX_forgot_password_uri');
//		$this->reset_password_uri = $this->ci->config->item('DX_reset_password_uri');
//		$this->change_password_uri = $this->ci->config->item('DX_change_password_uri');	
//		$this->cancel_account_uri = $this->ci->config->item('DX_cancel_account_uri');	
//		
//		 Forms view
//		$this->login_view = $this->ci->config->item('DX_login_view');
//		$this->register_view = $this->ci->config->item('DX_register_view');
//		$this->forgot_password_view = $this->ci->config->item('DX_forgot_password_view');
//		$this->change_password_view = $this->ci->config->item('DX_change_password_view');
//		$this->cancel_account_view = $this->ci->config->item('DX_cancel_account_view');
//		
//		 Pages view
//		$this->deny_view = $this->ci->config->item('DX_deny_view');
//		$this->banned_view = $this->ci->config->item('DX_banned_view');
//		$this->logged_in_view = $this->ci->config->item('DX_logged_in_view');
//		$this->logout_view = $this->ci->config->item('DX_logout_view');		
//		
//		$this->register_success_view = $this->ci->config->item('DX_register_success_view');
//		$this->activate_success_view = $this->ci->config->item('DX_activate_success_view');
//		$this->forgot_password_success_view = $this->ci->config->item('DX_forgot_password_success_view');
//		$this->reset_password_success_view = $this->ci->config->item('DX_reset_password_success_view');
//		$this->change_password_success_view = $this->ci->config->item('DX_change_password_success_view');
//		
//		$this->register_disabled_view = $this->ci->config->item('DX_register_disabled_view');
//		$this->activate_failed_view = $this->ci->config->item('DX_activate_failed_view');
//		$this->reset_password_failed_view = $this->ci->config->item('DX_reset_password_failed_view');
	}
	
	function _gen_pass($len = 8)
	{
		// No Zero (for user clarity);
		$pool = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

		$str = '';
		for ($i = 0; $i < $len; $i++)
		{
			$str .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
		}

		return $str;
	}	

	/*
	* Function: _encode
	* Modified for DX_Auth
	* Original Author: FreakAuth_light 1.1
	*/
	function _encode($password)
	{
		$majorsalt = $this->ci->config->item('DX_salt');
		
		// if PHP5
		if (function_exists('str_split'))
		{
			$_pass = str_split($password);
		}
		// if PHP4
		else
		{
			$_pass = array();
			if (is_string($password))
			{
				for ($i = 0; $i < strlen($password); $i++)
				{
					array_push($_pass, $password[$i]);
				}
			}
		}

		// encrypts every single letter of the password
		foreach ($_pass as $_hashpass)
		{
			$majorsalt .= md5($_hashpass);
		}

		// encrypts the string combinations of every single encrypted letter
		// and finally returns the encrypted password
		return md5($majorsalt);
	}
	
	function _array_in_array($needle, $haystack) 
	{
	    // Make sure $needle is an array for foreach
	    if( ! is_array($needle)) 
			{
				$needle = array($needle);
			}
	    
			// For each value in $needle, return TRUE if in $haystack
	    foreach ($needle as $pin)
			{
				if (in_array($pin, $haystack)) 
					return TRUE;
			}
	    // Return FALSE if none of the values from $needle are found in $haystack
	    return FALSE;
	}

	
	function _email($to, $from, $subject, $message)
	{
		$this->ci->load->library('email');
		$email = $this->ci->email;

		$email->from($from);
		$email->to($to);
		$email->subject($subject);
		$email->message($message);

		return $email->send();
	}
	
	// Set last ip and last login function when user login
	function _set_last_ip_and_last_login($user_id)
	{
		$data = array();
		$data['last_ip'] = $this->ci->input->ip_address();
		$data['last_login'] = date('Y-m-d H:i:s', time());

		// Load model
		$this->ci->load->model('users', 'users');
		// Update record
		$this->ci->users->set_user($user_id, $data);
	}
	
	// Get role data from database by id, used in _set_session() function
	// $parent_roles_id, $parent_roles_name is an array.
	function _get_role_data($role_id)
	{
		// Load models
		$this->ci->load->model('roles', 'roles');
		$this->ci->load->model('permissions', 'permissions');
	
		// Clear return value
		$role_name = '';
		$parent_roles_id = array();
		$parent_roles_name = array();
		$permission = array();
		$parent_permissions = array();
		
		/* Get role_name, parent_roles_id and parent_roles_name */
		
		// Get role query from role id
		$query = $this->ci->roles->get_role_by_id($role_id);
		
		// Check if role exist
		if ($query->result_count() > 0)
		{
			// Get row
//			$role = $query->row();
			$role = $query;
	
			// Get role name
			$role_name = $role->name;
			$role_code = $role->code;
			
			/* 
				Code below will search if user role_id have parent_id > 0 (which mean role_id have parent role_id)
				and do it recursively until parent_id reach 0 (no parent) or parent_id not found.
				
				If anyone have better approach than this code, please let me know.
			*/
			
			// Check if role has parent id
			if ($role->parent_id > 0)
			{							
				// Add to result array
				$parent_roles_id[] = $role->parent_id;
				
				// Set variable used in looping
				$finished = FALSE;
				$parent_id = $role->parent_id;				

				// Get all parent id
				while ($finished == FALSE)
				{
					$i_query = $this->ci->roles->get_role_by_id($parent_id);
					
					// If role exist
					if ($i_query->result_count() > 0)
					{
						// Get row
//						$i_role = $i_query->row();
						$i_role = $i_query;
						
						// Check if role doesn't have parent
						if ($i_role->parent_id == 0)
						{
							// Get latest parent name
							$parent_roles_name[] = $i_role->name;
							// Stop looping
							$finished = TRUE;
						}
						else
						{
							// Change parent id for next looping
							$parent_id = $i_role->parent_id;
							
							// Add to result array
							$parent_roles_id[] = $parent_id;
							$parent_roles_name[] = $i_role->name;
						}
					}
					else
					{	
						// Remove latest parent_roles_id since parent_id not found
						array_pop($parent_roles_id);
						// Stop looping
						$finished = TRUE;
					}
				}			
			}
		}
		
		/* End of Get role_name, parent_roles_id and parent_roles_name */
		
		/* Get user and parents permission */
		
		// Get user role permission
		$permission = $this->ci->permissions->get_permission_data($role_id);
		
		// Get user role parent permissions
		if ( ! empty($parent_roles_id))
		{
			$parent_permissions = $this->ci->permissions->get_permissions_data($parent_roles_id);
		}
		
		/* End of Get user and parents permission */
		
		// Set return value
		$data['role_code'] = $role_code;
		$data['role_name'] = $role_name;
		$data['parent_roles_id'] = $parent_roles_id;
		$data['parent_roles_name'] = $parent_roles_name;
		$data['permission'] = $permission;
		$data['parent_permissions'] = $parent_permissions;
		
		return $data;
	}

	function _set_session($data)
	{
		// Get role data
		$role_data = $this->_get_role_data($data->role_id);
	
		// Set session data array
		$user = array(						
			'adm_user_id'						=> $data->id,
			'adm_username'						=> $data->username,
			'adm_role_id'						=> $data->role_id,
			'adm_role_code'					=> $role_data['role_code'],
			'adm_role_name'					=> $role_data['role_name'],
			'adm_parent_roles_id'		=> $role_data['parent_roles_id'],	// Array of parent role_id
			'adm_parent_roles_name'	=> $role_data['parent_roles_name'], // Array of parent role_name
			'adm_permission'					=> $role_data['permission'],
			'adm_parent_permissions'	=> $role_data['parent_permissions'],			
			'adm_logged_in'					=> TRUE
		);

		$this->ci->session->set_userdata($user);
	}

	/* Helper function */
	
	function check_uri_permissions($allow = TRUE)
	{
		// First check if user already logged in or not
		if ($this->is_logged_in())
		{
			// If user is not admin
			if ( ! $this->is_admin())
			{
				// Get variable from current URI
				$controller = '/'.$this->ci->uri->rsegment(1).'/';
				if ($this->ci->uri->rsegment(2) != '')
				{
					$action = $controller.$this->ci->uri->rsegment(2).'/';
				}
				else
				{
					$action = $controller.'index/';
				}
				
				// Get URI permissions from role and all parents
				// Note: URI permissions is saved in 'uri' key
				$roles_allowed_uris = $this->get_permissions_value('uri');
				
				// Variable to determine if URI found
				$have_access = ! $allow;
				// Loop each roles URI permissions
				foreach ($roles_allowed_uris as $allowed_uris)
				{										
					if ($allowed_uris != NULL)
					{
						// Check if user allowed to access URI
						if ($this->_array_in_array(array('/', $controller, $action), $allowed_uris))
						{
								$have_access = $allow;
								// Stop loop
								break;
						}
					}
				}
				
				if ( ! $have_access)
				{
					// User didn't have previlege to access current URI, so we show user 403 forbidden access
					$this->deny_access();
				}				
			}
		}
		else
		{
			// User haven't logged in, so just redirect user to login page
			$this->deny_access('login');
		}
	}
	
	/*
		Get permission value from specified key.
		Call this function only when user is logged in already.
		$key is permission array key (Note: permissions is saved as array in table).
		If $check_parent is TRUE means if permission value not found in user role, it will try to get permission value from parent role.
		Returning value if permission found, otherwise returning NULL
	*/
	function get_permission_value($key, $check_parent = TRUE)
	{
		// Default return value
		$result = NULL;
	
		// Get current user permission
		$permission = $this->ci->session->userdata('adm_permission');
		
		// Check if key is in user permission array
		if (array_key_exists($key, $permission))
		{
			$result = $permission[$key];
		}
		// Key not found
		else
		{
			if ($check_parent)
			{
				// Get current user parent permissions
				$parent_permissions = $this->ci->session->userdata('adm_parent_permissions');
				
				// Check parent permissions array				
				foreach ($parent_permissions as $permission)
				{
					if (array_key_exists($key, $permission))
					{
						$result = $permission[$key];
						break;
					}
				}
			}
		}
		
		return $result;
	}
	
	/*
		Get permissions value from specified key.
		Call this function only when user is logged in already.
		This will get user permission, and it's parents permissions.
				
		$array_key = 'default'. Array ordered using 0, 1, 2 as array key.
		$array_key = 'role_id'. Array ordered using role_id as array key.
		$array_key = 'role_name'. Array ordered using role_name as array key.
		
		Returning array of value if permission found, otherwise returning NULL.
	*/
	function get_permissions_value($key, $array_key = 'default')
	{
		$result = array();
		
		$role_id = $this->ci->session->userdata('adm_role_id');
		$role_name = $this->ci->session->userdata('adm_role_name');
		
		$parent_roles_id = $this->ci->session->userdata('adm_parent_roles_id');
		$parent_roles_name = $this->ci->session->userdata('adm_parent_roles_name');
		
		// Get current user permission
		$value = $this->get_permission_value($key, FALSE);
		
		if ($array_key == 'role_id')
		{
			$result[$role_id] = $value;
		}
		elseif ($array_key == 'role_name')
		{
			$result[$role_name] = $value;
		}
		else
		{
			array_push($result, $value);
		}
		
		// Get current user parent permissions
		$parent_permissions = $this->ci->session->userdata('adm_parent_permissions');
		
		$i = 0;
		foreach ($parent_permissions as $permission)
		{
			if (array_key_exists($key, $permission))
			{
				$value = $permission[$key];
			}
			
			if ($array_key == 'role_id')
			{
				// It's safe to use $parents_roles_id[$i] because array order is same with permission array
				$result[$parent_roles_id[$i]] = $value;
			}
			elseif ($array_key == 'role_name')
			{
				// It's safe to use $parents_roles_name[$i] because array order is same with permission array
				$result[$parent_roles_name[$i]] = $value;
			}			
			else
			{
				array_push($result, $value);
			}
			
			$i++;
		}
		
		return $result;
	}

//	function deny_access($uri = 'deny')
//	{
//		$this->ci->load->helper('url');
//	
//		if ($uri == 'login')
//		{
//			redirect($this->ci->config->item('DX_login_uri'), 'location');
//		}
//		else if ($uri == 'banned')
//		{
//			redirect($this->ci->config->item('DX_banned_uri'), 'location');
//		}
//		else
//		{
//			redirect($this->ci->config->item('DX_deny_uri'), 'location');			
//		}
//		exit;
//	}
	
	// Get user id
	function get_user_id()
	{
		return $this->ci->session->userdata('adm_user_id');
	}

	// Get username string
	function get_username()
	{
		return $this->ci->session->userdata('adm_username');
	}
	
	// Get user role id
	function get_role_id()
	{
		return $this->ci->session->userdata('adm_role_id');
	}
	
	// Get user role name
	function get_role_name()
	{
		return $this->ci->session->userdata('adm_role_name');
	}
	
	// Check is user is has admin privilege
	function is_admin()
	{
		return strtolower($this->ci->session->userdata('adm_role_name')) == 'admin';
	}
	
	// Check if user has $roles privilege
	// If $use_role_name TRUE then $roles is name such as 'admin', 'editor', 'etc'
	// else $roles is role_id such as 0, 1, 2
	// If $check_parent is TRUE means if roles not found in user role, it will check if user role parent has that roles
	function is_role($roles = array(), $use_role_name = TRUE, $check_parent = TRUE)
	{
		// Default return value
		$result = FALSE;
	
		// Build checking array
		$check_array = array();
		
		if ($check_parent)
		{
			// Add parent roles into check array
			if ($use_role_name)
			{
				$check_array = $this->ci->session->userdata('adm_parent_roles_name');
			}
			else
			{
				$check_array = $this->ci->session->userdata('adm_parent_roles_id');
			}
		}
		
		// Add current role into check array
		if ($use_role_name)
		{
			array_push($check_array, $this->ci->session->userdata('adm_role_name'));
		}
		else
		{
			array_push($check_array, $this->ci->session->userdata('adm_role_id'));
		}
		
		// If $roles not array then we add it into an array
		if ( ! is_array($roles))
		{
			$roles = array($roles);
		}
		
		if ($use_role_name)
		{
			// Convert check array into lowercase since we want case insensitive checking
			for ($i = 0; $i < count($check_array); $i++)
			{
				$check_array[$i] = strtolower($check_array[$i]);
			}
		
			// Convert roles into lowercase since we want insensitive checking
			for ($i = 0; $i < count($roles); $i++)
			{
				$roles[$i] = strtolower($roles[$i]);
			}
		}
		
		// Check if roles exist in check_array
		if ($this->_array_in_array($roles, $check_array))
		{
			$result = TRUE;
		}
		
		return $result;
	}

	// Check if user is logged in
	function is_logged_in()
	{
		return $this->ci->session->userdata('adm_logged_in');
	}
	
	// Check if user is a banned user, call this only after calling login() and returning FALSE
	function is_banned()
	{
		return $this->_banned;
	}
	
	// Get ban reason, call this only after calling login() and returning FALSE
	function get_ban_reason()
	{
		return $this->_ban_reason;
	}
	
	
	function get_auth_error()
	{
		return $this->_auth_error;
	}
	
	/* End of Helper function */
	
	/* Main function */

	// $login is username or email or both depending on setting in config file	
	function login($login, $password, $remember = TRUE)
	{
		// Load Models
		$this->ci->load->model('users', 'users');
			
		// Default return value
		$result = FALSE;
				
		if ( ! empty($login) AND ! empty($password))
		{
			// Get user query
			if ($row = $this->ci->users->get_user_by_email($login) AND $row->result_count() == 1)
			{
				// Check if user is banned or not
				if ($row->banned > 0)
				{
					// Set user as banned
					$this->_banned = TRUE;					
					// Set ban reason
					$this->_ban_reason = $row->ban_reason;
				}
				// If it's not a banned user then try to login
				else
				{					
					$password = $this->_encode($password);
					$stored_hash = $row->password;

					// Is password matched with hash in database ?
					if (crypt($password, $stored_hash) === $stored_hash)
					{
						// Log in user 
						$this->_set_session($row); 												
						
						// Set last ip and last login
						$this->_set_last_ip_and_last_login($row->id);
						
						// Set return value
						$result = TRUE;
					}
					else						
					{
						// Set error message
						$this->_auth_error = $this->ci->lang->line('auth_login_incorrect_password');
					}
				}				
			}
			else
			{
				// Set error message
				$this->_auth_error = $this->ci->lang->line('auth_login_username_not_exist');
			}
		}

		return $result;
	}

	function logout()
	{
		// Destroy session
		$this->ci->session->sess_destroy();		
	}

	function register($username, $password, $email)
	{		
		// Load Models
		$this->ci->load->model('users', 'users');

		$this->ci->load->helper('url');
		
		// Default return value
		$result = FALSE;

		// New user array
		$new_user = array(			
			'username'				=> $username,			
			'password'				=> crypt($this->_encode($password)),
			'email'						=> $email,
			'last_ip'					=> $this->ci->input->ip_address()
		);

		// Create user 
		$insert = $this->ci->users->create_user($new_user);
		
		if ($insert)
		{
			// Replace password with plain for email
			$new_user['password'] = $password;
			
			$result = $new_user;
			
			// Create email
			$from = "webmaster@yahoo.com";
			$subject = sprintf($this->ci->lang->line('auth_account_subject'), 'Website Name'); 
					
			// Send email with account details
			$this->_email($email, $from, $subject, $message);														
		}
		
		return $result;
	}

	function change_password($old_pass, $new_pass)
	{
		// Load Models
		$this->ci->load->model('users', 'users');
		
		// Default return value
		$result = FAlSE;

		// Search current logged in user in database
		if ($query = $this->ci->users->get_user_by_id($this->ci->session->userdata('adm_user_id')) AND $query->result_count() > 0)
		{
			// Get current logged in user
			$row = $query->row();

			$pass = $this->_encode($old_pass);

			// Check if old password correct
			if (crypt($pass, $row->password) === $row->password)
			{
				// Crypt and encode new password
				$new_pass = crypt($this->_encode($new_pass));
				
				// Replace old password with new password
				$this->ci->users->change_password($this->ci->session->userdata('adm_user_id'), $new_pass);
				
				$result = TRUE;
			}
			else 
			{
				$this->_auth_error = $this->ci->lang->line('auth_incorrect_old_password');
			}
		}
		
		return $result;
	}
	
	/* End of main function */
}

?>