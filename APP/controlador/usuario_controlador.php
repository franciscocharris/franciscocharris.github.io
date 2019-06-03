<?php
class usuario_controlador{

	public function    __construct(){
		require_once "modelo/usuario_modelo.php";
	}
	public function lisUsuario(){
	$datos = usuario_modelo::mdl_listarUsuario();
		require_once "vista/usuario/listadoUsuarios.php";
		//echo "aqui se cargara el listado de usuario";
	}
//el sgite metodo carga el formulario para crear usuario
	public function frmCrearUsuario(){
	require_once "vista/usuario/crearUsuario.php";	
	}
	//el siguiente metodo gestionara los datos del formualrio enviandolos al metodo
	public function regUsuario(){
		extract($_POST);
		$respuesta = usuario_modelo::mdl_regUsuario($nombre,$correo,$telefono);
		if ($respuesta==1) {
			echo "<br /> se a registrado un usuario";
		}else{
			echo "<br /> error al registrar";
		}
	}
	public function eliminar(){
		//si el id no existe en la url, entra en el sino y lo redirecciona a la pagina principal
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$r = usuario_modelo::mdl_eliminarUsuario($id);
		//cuamdo se elimine, lo redireccionamos al listado
		header("Location: ?controlador=usuario&accion=lisUsuario");
	}else{
		header("Location: /APP");
	}
		}
	public function frmEditar(){
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$datos = usuario_modelo::mdl_consultarUsuarioByID($id);
			require_once "vista/usuario/frmEditar.php";
		}else{
			header("Location: /APP");
	}
		}
		public function edtUsuario(){
			extract($_POST);
			$r = usuario_modelo::mdl_editarUsuario($nombre,$correo,$telefono,$id);
			if($r > 0){
				echo "se ha editado el usuario";
			}else{
				echo "error en la edicion";
			}
		}
		public function validar(){
		extract($_POST);
		$r = usuario_modelo::mdl_validarUsuario($usuario,$password);
		if ($r > 0 ) {
			//header("Location: /APP");
			echo "todo correcto";
		}else{
			echo "verifique su usuario y contraseña";
		}
	}
	//el siguiente metodo gestionara los datos del formualrio enviandolos al metodo
		public function frmContactar(){
		extract($_POST);
		$respuesta = usuario_modelo::mdl_Contactar($nombre,$correo,$telefono,$mensaje);
		if ($respuesta==1) {
			echo "<br /> se a registrado tu sugerencia";
		}else{
			echo "<br /> error al registrar";
		}
	}
	
}