<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_welcome extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('America/Lima');
	}
	#traer los datos de productp
	function get_v_detalle(){

		    $this->db->where('Estado_prod', 1);		
	$query =$this->db->get('producto');	

	return $query->result_array();
	}
	function add_proveedores($prod){
		$this->db->insert('proveedor',$prod);
        return true;
	}
	function add_producto($data){
		$this->db->insert('producto',$data);
        return true;
	}
	function delete_producto_x_tienda($post){
		$data=array(
			'Estado_prod'=>0
		);			
			$this->db->where('Id_producto', $post['Id_producto']);	
		return $this->db->update('producto',$data);
	}
	function m_getagregar_productos($post){
		$data=array(
			'cant_prod'=>$post['cantidadactual']
		);			
			$this->db->where('Id_producto', $post['Id_producto']);	
		return $this->db->update('producto',$data);
	}
	function ingreso_producto_x_tienda($post){
		$data=array(
			'Cant_prod'=>$post['']
		);			
			$this->db->where('Id_producto', $post['Id_producto']);	
		return $this->db->update('producto',$data);
	}
	function m_traer_listado_proveedores(){
				 $this->db->select('Id_proveedor,Nom_proveedor');
		 return  $this->db->get('proveedor') -> result_array();
		 
	}
	function m_traer_datos_modal_editarproducto($Id_producto){
		$data=array(
			'Id_producto' => $Id_producto
		);
				//$this->db->where('Id_producto', $post['Id_producto']);	
		$query = $this->db->get_where('producto', $data);
		return $query->result_array();
	}
	function get_edit_lista_producto($post){
				
				$this->db->set('Nom_producto', $post['Nom_producto']);
				$this->db->set('Precio_prod', $post['Precio_prod']);
				$this->db->set('Cant_prod', $post['Cant_prod']);
				$this->db->set('Descripcion', $post['Descripcion']);
				$this->db->where('Id_producto', $post['idProdOc']);	
		$query =$this->db->update('producto');	
	}		
}

