<?php session_start();

if (!isset($_SESSION['usuario'])) {
	header('Location: login.php');
}

require 'funciones.php';

$conexion = Conexion();
if (!$conexion) {
	header('Location: error.php');
}

$errores = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$titulo = $_POST['tituloNota'];
	$nota = $_POST['nota'];

	if (empty($titulo) OR empty($nota)) {
		$errores .= 'No has ingresado, todos los datos';
	}

	if(!$errores){
		NuevaNota($conexion, $titulo, $nota, $_SESSION['usuario']);
	}

}

require 'views/crear.php';

?>