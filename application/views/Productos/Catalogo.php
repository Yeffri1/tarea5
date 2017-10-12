<?php 
include('C:\AppServ\www\web\tarea5\application\views\master.php');
plantilla::inicio();

$id = isset($_GET['id'])? $_GET['id']:null;
if($_GET['id'])
{
	echo $id;
} 
    
function obtener_imgenes()
{
  $CI =& get_instance();
  $result = $CI->db->query('Select * from productos');
  return $result->result();

}
?>


  <div class="container">

      <h1 class="my-4 text-center text-lg-left">Galeria de Fotos de los Productos</h1>

      <div class="row text-center text-lg-left">

      	<?php
      	$data_img = obtener_imgenes();
      	$i = 0;
         foreach($data_img as $data)
         {
         	$url = base_url("index.php?/Producto/Editar/{$data->Id}");
          echo" 
          <div class='col-lg-3 col-md-4 col-xs-6'>
             <a  class='d-block mb-4 h-100' href='{$url}'>
               <img width='400' style='padding:5px; margin:15px;' height='300' class='img-responsive img-fluid img-thumbnail' src='Fotos/{$data->Id}.jpg' alt=''>
                <p>{$data->Nombre}</p>
             </a>
            
             </div>
           ";
           $i++;
        }
     ?>

      </div>

    </div>


