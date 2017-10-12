<?PHP
//Conexion

/**
* 
*/
class SubirImagen extends AnotherClass
{
	
	function __construct(argument)
	{
		# code...
	}
	function subir($archivo)
	{
          $fp = fopen($archivo['Foto']['tmp_name'], 'r'); //Abrimos la imagen
          
          $imagen = fread($fp, filesize($archivo['Foto']['tmp_name'])); //Extraemos el contenido de la imagen
          
          $imagen = addslashes($imagen);
          
          fclose($fp); //Cerramos imagen
           var_dump($imagen);
      	
    }

}

?>