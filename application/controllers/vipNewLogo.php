<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vipNewLogo extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
        }
         
        
        
	public function index(){
            
            $this->_set('title', "VIP New Logo | P: 949-221-0010 | Assured Performance Network");
            
//            test javascript and css files
            $this->_set('js', "/resources/common/js/vip");
            $this->_set('css', "/resources/common/css/vip"); 
            $this->_set('active', array('', '', '', '', '', '', ''));                 
            
            $this->load->view('basic/header/header', $this->_data);
            $this->load->view('basic/content/vipNewLogo');
            $this->load->view('basic/footer/footer');
                
	}
}