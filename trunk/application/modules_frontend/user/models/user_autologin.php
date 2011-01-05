<?php

class User_Autologin extends DataMapper 
{
	var $table = NULL;
	
	function User_Autologin()
	{
		$CI = & get_instance();
		$this->table = $CI->config->item('DX_table_prefix').$CI->config->item('DX_user_autologin');
		parent::__construct();
	}		

	function store_key($key, $user_id)
	{
		$user = array(
			'key_id' 		=> md5($key),
			'user_id' 		=> $user_id,
			'user_agent' 	=> substr($this->input->user_agent(), 0, 149),
			'last_ip' 		=> $this->input->ip_address()
		);
		foreach ($user as $key => $value)
			$this->{$key} = $value;
		return $this->save();		
	}

	function get_key($key, $user_id)
	{
		$auto_table = $this->_table;
		$users_table = $this->_users_table;
		
		$this->db->select("$users_table.id");
		$this->db->select("$users_table.username");
		$this->db->select("$users_table.role_id");
		$this->db->from($users_table);		
		$this->db->join($auto_table, "$auto_table.user_id = $users_table.id");
		$this->db->where("$users_table.id", $user_id);
		$this->db->where("$auto_table.key_id", md5($key));
		
		return $this->db->get();
	}

	function delete_key($key, $user_id)
	{
		$data = array(
			'key_id' 	=> md5($key),
			'user_id' => $user_id
		);
		
		$this->where($data);
		return $this->delete();
	}

	function clear_keys($user_id)
	{
		$this->where('user_id', $user_id);
		return $this->delete();
	}

	function prune_keys($user_id)
	{
		$CI = & get_instance();
		$data = array(
			'user_id'			=> $user_id,
			'user_agent' 	=> substr($CI->input->user_agent(), 0, 149),
			'last_ip' 		=> $CI->input->ip_address()
		);

		$this->where($data);
		return $this->delete();
	}
}

?>