<?php

class Administrator extends Admin_Controller {
	
	function __construct()
	{
		redirect('adm_administrator/auth/login');
	}
	
//	function index()
//	{
////		redirect('adm_administrator/auth/login');
//	}

}