<?php
require_once "conexion.php";
//require_once"rutas.php";

if(isset($_GET['controlador']) && isset($_GET['accion'])){
	$cnt=$_GET['controlador'];
	$acc=$_GET['accion'];
}else{
	$cnt="inicio"; //cnt=controlador
	$acc="index";  //acc=accion
}

$URL="http://localhost/APP";
require_once "vista/plantilla.php";