<?php
class Login_Attempts extends DataMapper
{
	var $table = NULL;
	
	function Login_Attempts()
	{
		$CI = & get_instance();
		$this->table = $CI->config->item('DX_table_prefix').$CI->config->item('DX_login_attempts_table');
		parent::__construct();
	}

	function check_attempts($ip_address)
	{
		$this->select('1', FALSE);
		return $this->get_where(array('ip_address' => $ip_address));
	}
	
	// Increase attempts count
	function increase_attempt($ip_address)
	{
		// Insert new record
//		$data = array(
//			'ip_address' => $ip_address
//		);
//
//		$this->db->insert($this->_table, $data); 
		$this->ip_address = $ip_address;
		$this->save();
	}
	
	function clear_attempts($ip_address)
	{		
//		$this->db->where('ip_address', $ip_address);
//		$this->db->delete($this->_table);
		
		$this->get_where(array('ip_address' => $ip_address));
		// Delete user
		$this->delete();
	}	
	
}
?>