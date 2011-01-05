<?php
class User_Profile extends DataMapper 
{
	var $table = NULL;
	
	function User_Profile()
	{
		$CI = & get_instance();
		$this->table = $CI->config->item('DX_table_prefix').$CI->config->item('DX_user_profile_table');
		parent::__construct();
	}	
	
	function create_profile($user_id)
	{
//		$this->db->set('user_id', $user_id);
//		return $this->db->insert($this->_table);
		$this->user_id = $user_id;
		return $this->save();
	}

	function get_profile_field($user_id, $fields)
	{
		$this->select($fields);
		$this->where('user_id', $user_id);
		return $this->get();
	}

	function get_profile($user_id)
	{
		$this->where('user_id', $user_id);
		return $this->get();
	}

	function set_profile($user_id, $data)
	{
		$this->where('user_id', $user_id);
		return $this->update($data);
	}

	function delete_profile($user_id)
	{
		$this->where('user_id', $user_id);
		return $this->delete();
	}
}

?>