<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* The MX_Controller class is autoloaded as required */

class MY_Controller extends MX_Controller
{
	protected $_data = array();
	protected $_global_template;
	protected $_global_layout;

	protected $_current_user;
	protected $_current_module;
	protected $_current_controller;
	protected $_current_action;
	
	
	public function __construct()
	{
		parent::__construct();
		
		$this->benchmark->mark('my_controller_start');
		
        $this->_current_module = $this->router->fetch_module();
        $this->_current_controller = $this->router->fetch_class();
        $this->_current_action = $this->router->fetch_method();
        
        $this->benchmark->mark('my_controller_end');		
	}
	
	public function __destruct()
	{
		
	}

	public function loadView($path,$return = FALSE)
	{
		// Van su dung duoc
//		$this->_data['main_content'] = $this->load->view($path,$this->_data,TRUE);
		$this->_data['main_content'] = $this->parser->parse($path,$this->_data,TRUE);
		// Tra ve content ma khong co layout, dung cho turong hop goi Ajax
		if($return) return $this->_data['main_content'];
		$this->load->view("{$this->_global_template}/{$this->_global_layout}", $this->_data);
	}
	
//	public function loadView($view,$viewPath = NULL,$return = FALSE)
//	{
//		if(is_null($viewPath))
//			$viewPath = "{$this->_current_module}/{$this->_current_controller}";
//		
//		$view = $viewPath.'/'.$view;
//		// Van su dung duoc
////		$this->_data['main_content'] = $this->load->view($path,$this->_data,TRUE);
////		$this->_data['main_content'] = $this->parser->parse($view,$this->_data,TRUE);
//		$this->_data['main_content'] = $this->render($view,$this->_data);		
//		// Tra ve content ma khong co layout, dung cho turong hop goi Ajax
//		if($return) return $this->_data['main_content'];
//		$this->load->view('global_template/' . $this->_global_template, $this->_data);
//	}	
	
	public function render($fullPath,$data = array())
	{
		return $this->parser->parse($fullPath,$data,TRUE);		
	}
	
	
	/**
     * get data from session
     * @param String
     * @return Mixed
     */
    protected function _get_session($name){
        return $this->session->userdata($name);
    }

    /**
     * set data to session
     * @param String
     * @return void
     */
    protected function _set_session($name, $value){
        $this->session->set_userdata($name, $value);
    }
    
    /**
     * unset data to session
     * @param String
     * @return void
     */
    protected function _unset_session($name){
        $this->session->unset_userdata($name);
    }	
}