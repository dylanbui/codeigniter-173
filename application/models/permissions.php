<?php

class Permissions Extends DataMapper 
{
	var $table = NULL;
	
	function Permissions()
	{
		$this->table = TB_PERMISSIONS;
		parent::__construct();
	}	
	
	/**
	 * Serialize an array
	 *
	 * This function first converts any slashes found in the array to a temporary
	 * marker, so when it gets unserialized the slashes will be preserved
	 *
	 * @access	private
	 * @param	array
	 * @return	string
	 */	
	function _serialize($data)
	{
		if (is_array($data))
		{
			foreach ($data as $key => $val)
			{
				$data[$key] = str_replace('\\', '{{slash}}', $val);
			}
		}
		else
		{
			$data = str_replace('\\', '{{slash}}', $data);
		}
		
		return serialize($data);
	}
	
	/**
	 * Unserialize
	 *
	 * This function unserializes a data string, then converts any
	 * temporary slash markers back to actual slashes
	 *
	 * @access	private
	 * @param	array
	 * @return	string
	 */		
	function _unserialize($data)
	{
		$data = unserialize(stripslashes($data));
		
		if (is_array($data))
		{
			foreach ($data as $key => $val)
			{
				$data[$key] = str_replace('{{slash}}', '\\', $val);
			}
			
			return $data;
		}
		
		return str_replace('{{slash}}', '\\', $data);
	}
	
	// Get permissions from array of role_id
	function get_permissions($roles_id)
	{
//		$this->db->where_in('role_id', $roles_id);
//		return $this->db->get($this->_table);
		$this->where_in('role_id', $roles_id)->get();
	}
	
	// Get permissions from array of role_id
	// Returning array(roles_id) of array(permissions). 
	
	// Dont be confused, 
	// role_id permission data is saved as array in 'data' field in the table.	
	// Since we want to get permission from many role_id, 
	// hence it will returning array(roles_id) of array(permissions).
	function get_permissions_data($roles_id, $array_key = 'role_id', $unserialize = TRUE)
	{
		$result = array();
			
		$query = $this->get_permissions($roles_id);
		
		foreach ($query->result() as $row)
		{
			$result[$row->id] = $row->data;
		
			if ($unserialize)
			{
				$result[$row->id] = $this->_unserialize($result[$row->id]);
			}
		}
		
		return $result;
	}
	
	// Get permission query
	function get_permission($role_id)
	{
//		$this->db->where('role_id', $role_id);
//		return $this->db->get($this->_table);
		return $this->get_where(array('role_id' => $role_id));
	}
	
	// Get permission data 
	// Returning array from 'data' field.
	function get_permission_data($role_id, $unserialize = TRUE)
	{
		$result = array();
	
		$row = $this->get_permission($role_id);
		
		if ($row->result_count() > 0)
		{
			$result = $row->data;
			
			if ($unserialize)
			{				
				$result = $this->_unserialize($row->data);
			}
		}
		
		return $result;
	}
	
	// Get permission data value
	// Returning value from 'data' field array.
	function get_permission_value($role_id, $key)
	{
		$result = NULL;
	
		$data = $this->get_permission_data($role_id);
		
		if ( ! empty($data))
		{	
			if (array_key_exists($key, $data))
			{
				$result = $data[$key];
			}
		}
		
		return $result;
	}
	
	// Create permission record
	function create_permission($role_id, $data)
	{
		$data['role_id'] = $role_id;
//		return $this->db->insert($this->_table, $data);
		foreach ($data as $key => $value)
			$this->{$key} = $value;
		return $this->save();
	}
	
	// Set permission record
	function set_permission($role_id, $data, $auto_create = TRUE)
	{
		if ($auto_create)
		{			
//			$this->db->select('1', FALSE);
//			$this->db->where('role_id', $role_id);
//			$query = $this->db->get($this->_table);
			$this->select('1', FALSE);
			$query = $this->get_where(array('role_id' => $role_id));
						
			// Check if role_id exist
			if ($query->num_rows() == 0)
			{
				// Create permission
				$query = $this->create_permission($role_id, $data);
			}
			else
			{
				// Update permission
				$query = $this->where('role_id', $role_id)->update($data);
//				$query = $this->db->update($this->_table, $data);
			}
		}
		else
		{
			// Update permission
//			$this->db->where('role_id', $role_id);
//			$query = $this->db->update($this->_table, $data);
			$query = $this->where('role_id', $role_id)->update($data);
		}
		
		return $query;
	}
	
	// Set permission data
	// $permission_data is an array that will be set into 'data' field in permissions table
	function set_permission_data($role_id, $permission_data, $serialize = TRUE)
	{		
		if ($serialize)
		{
			$permission_data = $this->_serialize($permission_data);
		}
		
		$data['data'] = $permission_data;
		
		return $this->set_permission($role_id, $data);
	}
	
	function set_permission_value($role_id, $key, $value)
	{
		// Get role_id permission data first. 
		// So the previously set permission array key won't be overwritten with new array with key $key only, 
		// when calling set_permission_data later.
		$permission_data = $this->get_permission_data($role_id);
	
		// Set value in permission data array
		$permission_data[$key] = $value;
		
		// Set permission data for role_id
		return $this->set_permission_data($role_id, $permission_data);
	}
	
	function check_permission($role_id)
	{
		$this->db->select('1', FALSE);
		return $this->get_where(array('role_id' => $role_id));
//		return $this->db->get($this->_table);
	}
}

?>