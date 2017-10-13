<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Producto extends CI_Controller
{
	
	function __construct()
	{
       parent::__construct();

       $this->load->model('Producto_model');
       $this->load->helper('url');
	}
	function index()
	{
      $this->load->view('Productos/Catalogo');
	}
	function Create()
	{
      $this->load->view('Productos/Crear');
	}


	public function guardar()
	{
		if($_POST)
		{ $foto = $_FILES['Foto'];
			if($this->Producto_model->guardar_producto($_POST['Nombre'],$_POST['Precio'],$_POST['Descripcion'],$_POST['Fecha_Vencimiento']) && $foto['error']==0)
			{
				$cod = $this->db->insert_id();
               if(!is_dir('Fotos'))
               {
               	  mkdir('Fotos');
               }
               $ruta_foto = "Fotos/{$cod}.jpg";
               move_uploaded_file($foto['tmp_name'], $ruta_foto);
               $this->load->view('Productos/guardado');
			}
			else
			{
				$this->load->view('Productos/error');
			}
		}
		else{
			$this->load->view('Productos/error');
		}

    }
    public function Editar($id)
    {
       $datos = array("Id"=>$id);
    	$this->load->view('Productos/Editar',$datos);
    }
    public function Actualizar($id)
    {
     	if($_POST)
     	{
     		$foto = $_FILES['Foto'];
    		if($this->Producto_model->actualizar_producto($id,$_POST['Nombre'],$_POST['Precio'],$_POST['Descripcion'],$_POST['Fecha_Vencimiento']) && $foto['error']==0)
			{
               $ruta_foto = "Fotos/{$id}.jpg";
               move_uploaded_file($foto['tmp_name'], $ruta_foto);
               $this->load->view('Productos/guardado');
			}
			
     	}
     	else
     	{
     		$this->load->view('Productos/error');
     	}

    }
    

}

