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
        $data['lista_provedor']=$this->M_welcome->m_traer_listado_proveedores();
		$data['producto'] = $this->M_welcome->get_v_detalle();        
        $data['listrepprov'] = $this->M_welcome->get_listrepprov();
        // var_dump($data['listrepprov']);
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
    
	// public function add_nuevo_producto(){
	// 	$this->load->model(array('M_welcome'));
    //     $this->load->library(array('form_validation')); //opcionales
    //     $this->load->helper(array('url','form')); //opcionales
    //     $this->form_validation->set_rules('add_nombre','','required');
	// 	if($this->form_validation->run() == TRUE){
    //         $prod = array(
	// 			// "Id_proveedor" =>1,
    //             "Nom_producto" => $this->input->post('add_nombre'),
    //             "Precio_prod" => $this->input->post('add_precio'),
    //             "Cant_prod" => $this->input->post('add_cantidad'),
    //             "Id_marca" => $this->input->post('add_marca'),
    //             "Ubicacion" => $this->input->post('add_ubicacion'),
    //             "nom_categoria" => $this->input->post('add_categoria'),
    //             "Descripcion" => $this->input->post('add_descripcion'),
    //             "Id_proveedor" => $this->input->post('add_proveedor'),
    //             "Estado_prod" => 1
    //         );

    //         if($this->M_welcome->add_producto($prod)){
    //             header('Location:/almacen/index.php/producto');
    //         };
    //     }
	// }
    public function traer_datos_modal_editarproducto(){
      
        if($this->input->is_ajax_request()){
            $info=$this->M_welcome->m_traer_datos_modal_editarproducto($this->input->post('Id_producto'));
            echo json_encode($info);
        }else{
            show_404();
        }
    }
    public function deleteProduct(){
        
       
        if ($this->input->is_ajax_request()) {
            $info=$this->M_welcome->delete_producto_x_tienda($this->input->post());
            echo json_encode($info);
        }else{
            show_404();
        }
       // $this->M_welcome->delete_producto_x_tienda($id);
    }
    public function agregar_productos(){
        if ($this->input->is_ajax_request()) {
            $info=$this->M_welcome->m_getagregar_productos($this->input->post());
            echo json_encode($info);
        }else{
            show_404();
        }  
    }
    public function ingresoProduct(){
        // $this->load->model(array('M_welcome'));
        // $this->load->helper(array('url','form'));
       
        if ($this->input->is_ajax_request()) {
            $info=$this->M_welcome->ingreso_producto_x_tienda($this->input->post());
            echo json_encode($info);
        }else{
            show_404();
        }
       // $this->M_welcome->delete_producto_x_tienda($id);
    }
    public function editlistaproducto(){
        if ($this->input->is_ajax_request()) {
            $info=$this->M_welcome->get_edit_lista_producto($this->input->post());
            echo json_encode($info);
        }else{
            show_404();
        }
    }
	

    public function crateformproducto(){
		 $Nom_producto = $this->input->post('add_nombre');
         $Precio_prod =$this->input->post('add_precio');
         $Cant_prod =$this->input->post('add_cantidad');
         $Id_marca =$this->input->post('add_marca');
         $Ubicacion =$this->input->post('add_ubicacion');
         $nom_categoria =$this->input->post('add_categoria');
         $Descripcion =$this->input->post('add_descripcion');
         $Id_proveedor =$this->input->post('add_proveedor');
         $Cod_factura=$this->input->post('add_guia');
         $obj1 = array(
            // "Id_proveedor" =>1,
            "Nom_producto" => $Nom_producto,
            "Precio_prod" => $Precio_prod,
            "Cant_prod" => $Cant_prod,
            "Id_marca" => $Id_marca,
            "Ubicacion" => $Ubicacion,
            "nom_categoria" => $nom_categoria,
            "Descripcion" => $Descripcion,
            "Id_proveedor" => $Id_proveedor,
            "Cod_factura"=>$Cod_factura,
            "Estado_prod" => 1
        );
        $this->load->model('M_welcome');
        $insert=$this->M_welcome->getcrateformproducto($obj1);
        echo json_encode($insert);
	}	
}
