<?php 
include('application\views\master.php');
plantilla::inicio();
 ?>
<div class="container">
<div class="row">
  <div class="col col-md-6">
         <h3>Crear Producto</h3>
         <form  action="<?php echo base_url('index.php?/Producto/guardar'); ?>" method="post" enctype="multipart/form-data">
          

          <div class="form-group input-group">
          	<span class="input-group-addon">Nombre:</span>
          	<input type="text" class="form-control" name="Nombre" placeholder="Ingresar Nombre del Producto" required alt="Nombre del Producto">
          </div>


          <div class="form-group input-group">
          	<span class="input-group-addon">Precio:</span>
          	<input type="number" class="form-control"  name="Precio" placeholder="Ingresar Precio del Producto" required alt="Precio del Producto">
          </div>


          <div class="form-group input-group">
          	<span class="input-group-addon">Descripcion:</span>
          	<input type="text" class="form-control" name="Descripcion" placeholder="Ingresar Descripcion del Producto" required alt="Descripcion del Producto" required>
          </div>


          <div class="form-group input-group">
          	<span class="input-group-addon">Foto:</span>
          	<input type="file" class="form-control" name="Foto" accept="image/jpeg" alt="Foto del Producto" required>
          </div>


          <div class="form-group input-group">
          	<span class="input-group-addon">Fecha:</span>
          	<input type="date" class="form-control" name="Fecha_Vencimiento" placeholder="Año/Mes/Dia" required alt="Fecha de vencimiento del Producto" required>
          </div>

        <input type="submit" value="Guardar">



         </form>
         </div>

       </div>

</div>