<?php
class conexion{

	private static $con=null;
//metodo constructor se ejecuta cuando se crea un obheto de una clase
	public function __construct(){
		
	}

	public static function getconexion(){
		if (!isset(self::$con)) {
			self::$con = new PDO('mysql:host=localhost;dbname=bd_prueba', "root", "");
            self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
        return self::$con;
	}
}

$conectar=new conexion();//instancia o objeto de tipo conexion