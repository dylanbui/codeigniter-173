<?php

class Users extends DataMapper 
{
	var $table = NULL;
	
	function Users()
	{
		$this->table = TB_USERS;
		parent::__construct();
	}		
	
	// General function
	function get_all($offset = 0, $row_count = 0)
	{
		$users_table = $this->_table;
		$roles_table = $this->_roles_table;
		
		if ($offset >= 0 AND $row_count > 0)
		{
			$this->db->select("$users_table.*", FALSE);
			$this->db->select("$roles_table.name AS role_name", FALSE);
			$this->db->join($roles_table, "$roles_table.id = $users_table.role_id");
			$this->db->order_by("$users_table.id", "ASC");
			
			$query = $this->db->get($this->_table, $row_count, $offset); 
		}
		else
		{
			$query = $this->db->get($this->_table);
		}
		
		return $query;
	}

	function get_user_by_id($user_id)
	{
//		$this->db->where('id', $user_id);
//		return $this->db->get($this->_table);
		return $this->get_by_id($user_id);
	}

	function get_user_by_username($username)
	{
//		$this->db->where('username', $username);
//		return $this->db->get($this->_table);
		return $this->get_by_username($username);
	}
	
	function get_user_by_email($email)
	{
//		$this->db->where('email', $email);
//		return $this->db->get($this->_table);
		return $this->get_by_email($email);
	}
	
	function get_login($login)
	{
		$this->where('username', $login);
		$this->or_where('email', $login);
		return $this->get();
	}
	
	function check_ban($user_id)
	{
		$this->select('1', FALSE);
		$this->where('id', $user_id);
		$this->where('banned', '1');
		return $this->get();
	}
	
	function check_username($username)
	{
		$this->select('1', FALSE);
		$this->where('LOWER(username)=', strtolower($username));
		return $this->get();
	}

	function check_email($email)
	{
		$this->select('1', FALSE);
		$this->where('LOWER(email)=', strtolower($email));
		return $this->get();
	}
		
	function ban_user($user_id, $reason = NULL)
	{
		$data = array(
			'banned' 		=> 1,
			'ban_reason' 	=> $reason
		);
		return $this->set_user($user_id, $data);
	}
	
	function unban_user($user_id)
	{
		$data = array(
			'banned' 		=> 0,
			'ban_reason' 	=> NULL
		);
		return $this->set_user($user_id, $data);
	}
		
	function set_role($user_id, $role_id)
	{
		$data = array(
			'role_id' => $role_id
		);
		return $this->set_user($user_id, $data);
	}

	// User table function

	function create_user($data)
	{
		$data['created'] = date('Y-m-d H:i:s', time());
		foreach ($data as $key => $value)
			$this->{$key} = $value;		
		return $this->save();
	}

	function get_user_field($user_id, $fields)
	{
		$this->select($fields);
		$this->where('id', $user_id);
		return $this->get();
	}

	function set_user($user_id, $data)
	{
		$this->where('id', $user_id)->get();
		return $this->update($data);
	}
	
	function delete_user($user_id)
	{
		$this->where('id', $user_id)->get();
		$this->delete();
//		return $this->db->affected_rows() > 0;
	}
	
	// Forgot password function

	function newpass($user_id, $pass, $key)
	{
		$data = array(
			'newpass' 			=> $pass,
			'newpass_key' 	=> $key,
			'newpass_time' 	=> date('Y-m-d h:i:s', time() + $this->config->item('DX_forgot_password_expire'))
		);
		return $this->set_user($user_id, $data);
	}

//	function activate_newpass($user_id, $key)
//	{
////		$this->db->set('password', 'newpass', FALSE);
////		$this->db->set('newpass', NULL);
////		$this->db->set('newpass_key', NULL);
////		$this->db->set('newpass_time', NULL);
////		$this->db->where('id', $user_id);
////		$this->db->where('newpass_key', $key);
//		
//		$data['password'] = FALSE;
//		$data['newpass'] = FALSE;
//		$data['newpass'] = NULL;
//		$data['newpass_key'] = NULL;
//		$data['newpass_time'] = NULL;
//		
//		$this->where('id', $user_id);
//		$this->where('newpass_key', $key);
//		return $this->update($data);
//	}

//	function clear_newpass($user_id)
//	{
//		$data = array(
//			'newpass' 			=> NULL,
//			'newpass_key' 	=> NULL,
//			'newpass_time' 	=> NULL
//		);
//		return $this->set_user($user_id, $data);
//	}
	
	// Change password function
	function change_password($user_id, $new_pass)
	{
//		$this->db->set('password', $new_pass);
		$this->where('id', $user_id)->get();
		return $this->db->update(array('password' => $new_pass));
	}

}

?>