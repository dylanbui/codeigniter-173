<?php

class Administrator extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		redirect('adm_administrator/auth/login');
	}

}