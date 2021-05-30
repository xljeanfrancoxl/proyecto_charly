<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 public function __construct(){
        parent::__construct();

        //$this->load->library(array('session','email','form_validation','upload'));
        $this->load->model(array('M_welcome'));
        //$this->load->helper(array('url','form'));
        
    }
	public function index()
	{
		
		$data['title'] = 'Almacen | Admin';
		$this->load->view('welcome_message',$data);
	}
}
