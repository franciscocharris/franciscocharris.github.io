<?php
class usuario_modelo{
//el sgt metodo guardara un usuario en la base de datos
	public static function mdl_regUsuario($nombre,$correo,$telefono){

		$con = conexion::getConexion();
		$fecha=date("Y-m-d");//hora y fecha del sistema
	//lo siguiente se plantea el DML
		$encriptar=sha1($telefono);
		//sha1,md5 pero no son seguros
		//hash_password() investigar
	$query= "INSERT INTO t_usarios
	(usu_nombre,usu_correo,usu_telefono,usu_password,usu_rol,usu_fch_rgt)
	VALUES 
	('$nombre','$correo',$telefono,'$encriptar', 2 ,'$fecha')";

    $consulta = $con -> prepare($query);
    //la sgt linea , ejecuta la consulta
    $r = $consulta -> execute();
    return $r;
	}
	public static function mdl_listarUsuario(){
		$con = conexion::getConexion();
		$query = "SELECT * FROM t_usarios";
		$consulta = $con -> prepare($query);
		$consulta -> execute();
		$datos = $consulta->fetchALL();
		return $datos;
	}
	public static function mdl_eliminarUsuario($id){
		$con = conexion::getConexion();
		$query = "DELETE  FROM t_usarios WHERE usu_id = $id";
		$consulta = $con -> prepare($query);
		$consulta -> execute();
		return $r;
	}
	public static function mdl_consultarUsuarioByID($id){
		$con = conexion::getConexion();
		$query = "SELECT * FROM t_usarios WHERE usu_id = $id";
		$consulta = $con -> prepare($query);
		$consulta -> execute();
		$datos = $consulta->fetch();
		return $datos;
	}
	public static function mdl_editarUsuario($nombre,$correo,$telefono,$id){
		$con = conexion::getConexion();
		$query = " UPDATE  t_usarios SET
			usu_nombre = '$nombre',
			usu_correo = '$correo',
			usu_telefono = $telefono
		WHERE usu_id = $id";
		$consulta = $con -> prepare($query);
		$r = $consulta -> execute();
		return $r;
	}
	public static function mdl_validarUsuario($usuario,$password){
		$con = conexion::getConexion();
		$query = "SELECT * FROM t_usarios 
				WHERE usu_correo = '$usuario' AND
		 		usu_password ='".sha1($password)."'";
		$consulta = $con -> prepare($query);
		$consulta -> execute();
		$datos = $consulta->fetch();
		return $datos;
	}
	public static function mdl_Contactar($nombre,$correo,$telefono,$mensaje){

		$con = conexion::getConexion();
		//hora y fecha del sistema
	//lo siguiente se plantea el DML
		
		//sha1,md5 pero no son seguros
		//hash_password() investigar
	$query= "INSERT INTO t_sugerencias
	(su_nombre,su_correo,su_telefono,su_mensaje)
	VALUES 
	('$nombre','$correo',$telefono,'$mensaje')";

    $consulta = $con -> prepare($query);
    //la sgt linea , ejecuta la consulta
    $r = $consulta -> execute();
    return $r;
	}
}