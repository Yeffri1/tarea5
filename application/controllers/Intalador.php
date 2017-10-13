<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Intalador extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		 $this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('Intalador/Intalar');
	}
	function Create()
	{
      $cn = mysqli_connect($_POST['txtservidor'],$_POST['txtUsuario'],$_POST['txtPassword']);
      if($_POST && $cn==true)
      {
       $informacion2 = "<?php
       if (!defined('BASEPATH')) exit('No direct script access allowed');";
	   $informacion2.="\n";
       $informacion2.="$"."active_group = 'default';";
	   $informacion2.="\n";
       $informacion2.="$"."active_record = TRUE;";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['hostname'] = '{$_POST['txtservidor']}';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['username'] = '{$_POST['txtUsuario']}';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['password'] = '{$_POST['txtPassword']}';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['database'] = '{$_POST['txtdb']}';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['dbdriver'] = 'mysql';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['dbprefix'] = '';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['pconnect'] = TRUE;";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['db_debug'] = TRUE;";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['cache_on'] = FALSE;";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['cachedir'] = '';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['char_set'] = 'utf8';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['dbcollat'] = 'utf8_general_ci';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['swap_pre'] = '';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['autoinit'] = TRUE;";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['stricton'] = FALSE; ?> ";"";
      file_put_contents('application/config/database.php', $informacion2);
	
	  $sql = "CREATE DATABASE IF NOT EXISTS {$_POST['txtdb']};";
	  mysqli_query($cn,$sql);
	
	  $sql1 = "use {$_POST['txtdb']};";
	  mysqli_query($cn,$sql1);

	
		 
		 	$sql3 = "CREATE TABLE `productos` (
            `Id` int(11) NOT NULL auto_increment,
            `Nombre` varchar(50) NOT NULL,
            `Precio` int(11) NOT NULL,
            `Descripcion` varchar(100) NOT NULL,
            `Fecha_Vencimiento` date NOT NULL,
            PRIMARY KEY  (`Id`)
           )ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28;"; 
           mysqli_query($cn,$sql3);

    $this->load->view('Productos/Catalogo');
 
  } 
 else if(!$cn)
 {
	 echo "No hubo conexion";
 }
 else
 {
   echo "No hubo post";
 }


 }


}

 ?>