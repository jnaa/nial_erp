<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    
    
    
    
    
    
	public function index()
	{
            
            
            $data['title']='Nial_Erp';
		$this->load->view('main',$data);
	}
}

