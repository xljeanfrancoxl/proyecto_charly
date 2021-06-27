<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 public function __construct(){
        parent::__construct();

        $this->load->library(array('session','email','form_validation','upload'));
        $this->load->model(array('M_welcome'));
        $this->load->helper(array('url','form'));
        
    }
	public function index()
	{
		$this->session->userdata('is_logued_in_admin') == TRUE || redirect($base_url.'../welcome/login');
		// $this->load->helper('form');
		$this->load->library(array('session','email','form_validation','upload'));
        $this->load->model(array('M_welcome'));
        $this->load->helper(array('url','form'));
		$data['base_url']=$this->config->item('base_url');
		$data['title'] = 'Almacen | Admin';
		$this->load->view('login',$data);
	}

	public function login(){

        # validacion de session..
        // $this->session->userdata('is_logued_in_admin') == FALSE || redirect('welcome/index');

        # permisos..

        # roles..
        $this->form_validation->set_rules('login_email', '', 'trim|required');
        $this->form_validation->set_rules('login_password', '', 'required');
        if($this->form_validation->run() == TRUE){
            $data = array(
                'email' => $this->input->post('login_email'),
                'password' => $this->input->post('login_password')
            );
        }
       
        if($this->form_validation->run() == TRUE){
            if($this->M_welcome->login_validation($data) == TRUE){
                $this->session->set_flashdata('message', 'SESION INICIADA CON EXITO');
                redirect('producto/index');
            }else{
                $this->session->set_flashdata('error', 'Usuario o Contraseña Incorrecto');
                redirect('welcome/login');
            }
        }else{
            // $data['error'] = (validation_errors() != '') ? validation_errors(): $this->session->flashdata('error');
            //$data['tienda_usuario']=$this->session->userdata('adm_tienda_id');
            $data['title'] = 'INCACLIC | Login Admin';
            $data['imagenes_ftp']=$this->config->item('imagenes_ftp');
            $data['base_url']=$this->config->item('base_url');
            // var_dump($data);
            $this->load->view('login',$data);
        // $this->load->view('admin/base/footer',$data);  
        }
    }
	public function close_session(){
        if($this->session->userdata('is_logued_in_admin')){
            $session_id = $this->session->session_id;

            if($this->M_welcome->getDropSession($session_id)){
                $this->session->sess_destroy();

                redirect($base_url);    
            }else{
                echo json_encode("FALSE");
            }
        }
    }
}
