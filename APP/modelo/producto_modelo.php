<?php
class producto_modelo{
//el sgt metodo guardara un producto en la base de datos
	public static function mdl_regProducto($nombre,$precio,$descripcion,$foto){
		$con = conexion::getConexion();
		$fecha=date("Y-m-d");//hora y fecha del sistema
	//lo siguiente se plantea el DML
	$query= "INSERT INTO t_producto
	(pro_nombre,pro_precio,pro_escripcion,pro_foto)
	VALUES 
	('$nombre','$precio','$descripcion','$foto')";

    $consulta = $con -> prepare($query);
    //la sgt linea , ejecuta la consulta
    $r = $consulta -> execute();
    return $r;
	}
	public static function mdl_listarProducto(){
		$con = conexion::getConexion();
		$query = "SELECT * FROM t_producto";
		$consulta = $con -> prepare($query);
		$consulta -> execute();
		$datos = $consulta->fetchALL();
		return $datos;
	}
	public static function mdl_eliminarProducto($id){
		$con = conexion::getConexion();
		$query = "DELETE  FROM t_producto WHERE pro_id = $id";
		$consulta = $con -> prepare($query);
		$r = $consulta -> execute();
		return $r;
	}
	public static function mdl_consultarProductoByID($id){
		$con = conexion::getConexion();
		$query = "SELECT * FROM t_producto WHERE pro_id = $id";
		$consulta = $con -> prepare($query);
		$consulta -> execute();
		$datos = $consulta->fetch();
		return $datos;
	}
	public static function mdl_editarProducto($nombre,$precio,$escripcion,$foto,$id){
		$con = conexion::getConexion();
		$query = " UPDATE  t_producto SET
			pro_nombre = '$nombre',
			pro_precio = '$precio',
			pro_escripcion = '$escripcion',
			pro_foto = '$foto'
		WHERE pro_id = $id";
		$consulta = $con -> prepare($query);
		$r = $consulta -> execute();
		return $r;
}
}