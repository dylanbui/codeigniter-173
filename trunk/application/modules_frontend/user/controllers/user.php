<?php

class User extends MY_Controller 
{

	function __construct()
	{
		parent::__construct();

	}
	
	function index()
	{
		redirect('user/auth');
	}

}
?>