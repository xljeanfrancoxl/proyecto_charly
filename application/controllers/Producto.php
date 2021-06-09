<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	 public function __construct(){
        parent::__construct();

        $this->load->library(array('session','email','form_validation','upload'));
        $this->load->model(array('M_welcome'));
        $this->load->helper(array('url','form'));
        
    }
	public function index()
	{   
        $this->load->helper(array('url','form'));
		// $this->load->model(array('M_welcome'));
		//$data['nom_producto'] = $this->M_welcome->listar_producto();
        $data['base_url']=$this->config->item('base_url');
		$data['title'] = 'Producto | Admin';
		$data['producto'] = $this->M_welcome->get_v_detalle();
		$this->load->view('Producto',$data);
	}

	public function add_nuevo_proveedor(){
		// $this->load->model(array('M_welcome'));
        $this->load->library(array('form_validation')); //opcionales
        $this->load->helper(array('url','form')); //opcionales
        $this->form_validation->set_rules('add_name','','required');
		if($this->form_validation->run() == TRUE){
            $prod = array(
				// "Id_proveedor" =>1,
                "Nom_proveedor" => $this->input->post('add_name'),
                "Dni_proveedor" => $this->input->post('add_dni'),
                "Email_proveedor" => $this->input->post('add_email'),
                "Razon_social_proveedor" => $this->input->post('add_razon_social'),
                "Ruc_proveedor" => $this->input->post('add_ruc'),
                "Telefono_proveedor" => $this->input->post('add_telefono')
            );

            if($this->M_welcome->add_proveedores($prod)){
                header('Location:/almacen/index.php/producto');
            };
        }
	}
	public function add_nuevo_producto(){
		$this->load->model(array('M_welcome'));
        $this->load->library(array('form_validation')); //opcionales
        $this->load->helper(array('url','form')); //opcionales
        $this->form_validation->set_rules('add_nombre','','required');
		if($this->form_validation->run() == TRUE){
            $prod = array(
				// "Id_proveedor" =>1,
                "Nom_producto" => $this->input->post('add_nombre'),
                "Precio_prod" => $this->input->post('add_precio'),
                "Cant_prod" => $this->input->post('add_cantidad'),
                "Id_marca" => $this->input->post('add_marca'),
                "Ubicacion" => $this->input->post('add_ubicacion'),
                "nom_categoria" => $this->input->post('add_categoria'),
                "Descripcion" => $this->input->post('add_descripcion'),
                "Id_proveedor" => $this->input->post('add_proveedor'),
                "Estado_prod" => 1
            );

            if($this->M_welcome->add_producto($prod)){
                header('Location:/almacen/index.php/producto');
            };
        }
	}
    public function traer_datos_modal_editarproducto(){
       // $this->load->model(array('M_welcome'));
        // $this->load->helper(array('url','form'));
        if($this->input->is_ajax_request()){
            $info=$this->M_welcome->m_traer_datos_modal_editarproducto($this->input->post('Id_producto'));
            echo json_encode($info);
        }else{
            show_404();
        }
    }
    public function deleteProduct(){
        // $this->load->model(array('M_welcome'));
        // $this->load->helper(array('url','form'));
       
        if ($this->input->is_ajax_request()) {
            $info=$this->M_welcome->delete_producto_x_tienda($this->input->post());
            echo json_encode($info);
        }else{
            show_404();
        }
       // $this->M_welcome->delete_producto_x_tienda($id);
    }
	// public function agregar_producto($data){
	// 	$this->load->model(array('M_welcome'));
	// 	 if($this->M_welcome->actualizo_producto($data)){
 //                header('Location:/almacen/index.php/producto');
 //            };
	// }
}
