<?php

class Roles extends DataMapper 
{
	var $table = NULL;
	
	function Roles()
	{
		$CI = & get_instance();
		$this->table = $CI->config->item('DX_table_prefix').$CI->config->item('DX_roles_table');
		parent::__construct();
	}	
	
	function get_all()
	{
		$this->order_by('id', 'asc');
		return $this->get();
	}
	
	function get_role_by_id($role_id)
	{
		return $this->get_where(array('id' => $role_id));
	}
	
	function create_role($name, $parent_id = 0)
	{
		$data = array(
			'name' => $name,
			'parent_id' => $parent_id
		);
		foreach ($data as $key => $value)
			$this->{$key} = $value;		
		$this->save();
	}
	
	function delete_role($role_id)
	{
		$this->get_where(array('id' => $role_id));
		$this->delete();
	}
}

?>