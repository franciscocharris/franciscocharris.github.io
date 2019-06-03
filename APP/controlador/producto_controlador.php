<?php
class producto_controlador{

	public function    __construct(){
		require_once "modelo/producto_modelo.php";
	}
	public function lisProducto(){
	$datos = producto_modelo::mdl_listarProducto();
		require_once "vista/producto/listadoProducto.php";
		//echo "aqui se cargara el listado de usuario";
	}
//el sgite metodo carga el formulario para crear usuario
	public function frmCrearProducto(){
	require_once "vista/producto/crearProducto.php";	
	}
	//el siguiente metodo gestionara los datos del formualrio enviandolos al metodo
	public function regProducto(){
		extract($_POST);

		$ruta = "./Recursos/imagen/";
		$nombre_foto = $_FILES["foto"]["name"];
		$nombre_tmp = $_FILES["foto"]["tmp_name"];

		if (move_uploaded_file($nombre_tmp, $ruta."".$nombre_foto)){	
				$respuesta = producto_modelo::mdl_regProducto($nombre, $precio, $escripcion,$nombre_foto);
			if($respuesta==1){
				echo "<br/>Se ha registrado un nuevo producto";
			}else{
				echo "<br/>Error al registrar"; 
			}
		}else{
			echo "error al subir";
		}
	}
	public function eliminar(){
		//si el id no existe en la url, entra en el sino y lo redirecciona a la pagina principal
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$r = producto_modelo::mdl_eliminarProducto($id);
		//cuamdo se elimine, lo redireccionamos al listado
		header("Location: ?controlador=producto&accion=lisProducto");
	}else{
		header("Location: /APP");
	}
		}
		public function frmEditar(){
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$datos = producto_modelo::mdl_consultarProductoByID($id);
			require_once "vista/producto/frmEditar.php";
		}else{
			header("Location: /APP");
	}
		}
		public function edtProducto(){
			extract($_POST);
			$r = producto_modelo::mdl_editarProducto($nombre,$precio,$escripcion,$foto,$id);
			if($r > 0){
				echo "se ha editado el producto";
			}else{
				echo "error en la edicion";
			}
		}

}