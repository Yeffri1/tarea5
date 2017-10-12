<?php 
include('C:\AppServ\www\web\tarea5\application\views\master.php');
plantilla::inicio();


$CI =& get_instance();
 $result = $CI->db->query("Select * from productos where Id='{$Id}'");
 $data = $result->row();
 ?>
 <div class="container">
 <h3 class="h3">Editar Productos</h3>

<div class="row">
  <div class="col col-md-6">
         <form  action="<?php echo base_url('index.php?/Producto/Actualizar') ?>" method="post" enctype="multipart/form-data">
          

          	<input readonly type="hidden" value="<?php echo $Id; ?>" class="form-control" name="id" >

          <div class="form-group input-group">
          	<span class="input-group-addon">Nombre:</span>
          	<input type="text" class="form-control" name="Nombre" value="<?php echo $data->Nombre ?>" placeholder="Ingresar Nombre del Producto" required alt="Nombre del Producto">
          </div>


          <div class="form-group input-group">
          	<span class="input-group-addon">Precio:</span>
          	<input type="text" class="form-control"  name="Precio" value="<?php echo $data->Precio ?>" placeholder="Ingresar Precio del Producto" required alt="Precio del Producto">
          </div>


          <div class="form-group input-group">
          	<span class="input-group-addon">Descripcion:</span>
          	<input type="text" class="form-control" value="<?php echo $data->Descripcion ?>" name="Descripcion" placeholder="Ingresar Descripcion del Producto" required alt="Descripcion del Producto" required>
          </div>


          <div class="form-group input-group">
          	<span class="input-group-addon">Foto:</span>
          	<input type="file" class="form-control"  name="Foto" accept="image/jpeg" alt="Foto del Producto" required>
          </div>


          <div class="form-group input-group">
          	<span class="input-group-addon">Fecha:</span>
          	<input type="date" class="form-control" value="<?php echo $data->Fecha_Vencimiento ?>" name="Fecha_Vencimiento"  placeholder="Año/Mes/Dia" required alt="Fecha de vencimiento del Producto" required>
          </div>

        <input type="submit" value="Editar">



         </form>
         </div>
         <div class="col col-md-5">
<div class='col-lg-3 col-md-4 col-xs-6'>
  <a  class='d-block mb-4 h-100' href='#'>
  	<?php
  	$mi_id = $data->Id;
      echo "<img src='Fotos/{$mi_id}.jpg' heigth='300' width='400'>";
   ?>
  </a>
</div>
</div>

       </div>



</div>

