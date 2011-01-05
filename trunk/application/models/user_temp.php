<?php

class User_Temp extends DataMapper 
{
	var $table = NULL;
	
	function User_Temp()
	{
		$CI = & get_instance();
		$this->table = $CI->config->item('DX_table_prefix').$CI->config->item('DX_user_temp_table');
		parent::__construct();
	}
	
	function get_all($offset = 0, $row_count = 0)
	{
		if ($offset >= 0 AND $row_count > 0)
		{
			$query = $this->get($row_count, $offset); 
		}
		else
		{
			$query = $this->get();
		}
		
		return $query;
	}		
	
	function get_user_by_username($username)
	{
		return $this->get_by_username($username);
	}
	
	function get_user_by_email($email)
	{
		return $this->get_by_email($email);
	}

	function get_login($login)
	{
		$this->where('username', $login);
		$this->or_where('email', $login);
		return $this->get();
	}

	function check_username($username)
	{
		$this->select('1', FALSE);
		$this->where('username', $username);
		return $this->get();
	}

	function check_email($email)
	{
		$this->select('1', FALSE);
		$this->where('email', $email);
		return $this->get();
	}

	function activate_user($username, $key)
	{
		return $this->get_where(array('username' => $username, 'activation_key' => $key));
//		return $this->get();
	}

	function delete_user($id)
	{
		$this->where('id', $id)->get();
		return $this->delete();
	}

	function prune_temp()
	{
		$CI = & get_instance();
		$this->where('UNIX_TIMESTAMP(created) <', time() - $CI->config->item('DX_email_activation_expire'))->get();
		return $this->delete();
	}

	function create_temp($data)
	{
		$data['created'] = date('Y-m-d H:i:s', time());
		foreach ($data as $key => $value)
			$this->{$key} = $value;
		return $this->save();
	}
}

?>