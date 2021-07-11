<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	 public function __construct(){
        parent::__construct();

        $this->load->library(array('session','email','form_validation'));
        $this->load->model(array('M_welcome'));
        $this->load->helper(array('url','form'));
        
    }
	public function index()
	{
	
		$this->load->library(array('session','email','form_validation','upload'));
        $this->load->model(array('M_welcome'));
        $this->load->helper(array('url','form'));
        // $data['lista_provedor']=$this->M_welcome->m_traer_listado_proveedores();
		$data['producto'] = $this->M_welcome->get_v_detalle();        
		$data['categoria'] = $this->M_welcome->get_list_cat();    
        // $data['listrepprov'] = $this->M_welcome->get_listrepprov();
		$data['base_url']=$this->config->item('base_url');
		$data['title'] = 'Almacen | Admin';
		$this->load->view('categoria',$data);
	}
}