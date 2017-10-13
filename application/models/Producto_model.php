<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Producto_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	

	function guardar_producto($Nombre,$Precio,$Descripcion,$Fecha_Vencimiento)
	{
		$data = array("Nombre"=>$Nombre,"Precio"=>$Precio,"Descripcion"=>$Descripcion,"Fecha_Vencimiento"=>$Fecha_Vencimiento);
		$v=$this->db->insert('productos',$data);
		return $v;
	}
	
}


 ?>