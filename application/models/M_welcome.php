<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_welcome extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('America/Lima');
	}

	# VALIDACION LOGIN..
	function login_validation($data){
			$this->db->where('Email', $data['email']);
			// $this->db->where('Password', $data['password']);
	$q = $this->db->get('jam_usuario_tiendas');

	if($q->num_rows() > 0){		
		$user = $q->row();
		# Validando password..
		if(password_verify($data['password'], $user->Password)){
			$this->session_user($user);
			return TRUE;
		}
	}
	return FALSE;
	}
	# APERTURA DE SESSION..
	function session_user($user){
		$data = array(
			'is_logued_in_admin' 	=> 		TRUE,
			'adm_id_usuario' 	=> 		$user->Id_usuario,
			'adm_email'			=>		$user->Email,
			'adm_password' 		=> 		$user->Contraseña,
			'adm_nombre'		=> 		$user->Nombre,
			'adm_apellido'		=> 		$user->Apellido_paterno,
			'adm_foto_perfil' 	=>		$user->Foto_perfil
			
		);

		$this->session->set_userdata($data);
		return true;
	}
	function getDropSession($id){
			$this->db->where('id', $id);
		if( $this->db->delete('jam_ci_session')){
			return TRUE;
		}
		return FALSE;
	}
	// function get_datos(){
	// 	$this->db->where('Estado_prod', 1);		
	// $query =$this->db->get('producto');	

	// return $query;
	
	// }
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
		return $query->result_array();
	}	
	function get_listrepprov(){
				$this->db->join('proveedor', 'proveedor.Id_Proveedor = producto.Id_proveedor');
				$this->db->where('Estado_prod', 1);		
		$query =$this->db->get('producto');	
		return $query->result_array();
	}
	function getcrateformproducto($data){
		$query =$this->db->insert('producto',$data);
        return $query;
	}
}

