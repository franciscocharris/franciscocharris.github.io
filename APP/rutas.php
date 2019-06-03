<?php
//la funcionalidad de ese archivo es importar el archivo correspondiente ubicado dentro de la carpeta controlador
//(definido en la logica de nuestro proyecto) y cargar el respectivo metodo para mostrar el contenido 
function cargarContenido($cn,$ac){
	//la siguiente linea valida que exista el archivo
	//en caso de no existir botara un error 001
	if (file_exists("Controlador/".$cn."_controlador.php")) {

     require_once "Controlador/".$cn."_controlador.php";
     $obj = $cn."_controlador";
     $instancia= new $obj();
     //valida que el metodo existe en la clase
     //sino existe manda mensaje de error 002
  
     if (method_exists($instancia, $ac)) {
     	$instancia->$ac();
     }else{
     	echo "el metodo no existe 002 , llamando al ejercito ...";
     }
    }else{
    	echo "el contenido no existe 001 ,llamando a la policia ...";
    }
}
//cnt = usuario , acc=lisUsurio
cargarContenido($cnt,$acc);//llamamos al metodo
?>