<?php 


// Función para conectarnos a nuestra base de datos
function Conexion(){
	try {
		$conexion = new PDO('mysql:host=sql301.elmejorhosting.online;dbname=lmjr_22383493_diario;charset=UTF8', 'lmjr_22383493', '10052723');
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}

// Limpiar datos
function LimpiarDatos($datos){
	$datos = filter_var($datos, FILTER_SANITIZE_STRING);
	$datos = trim($datos);
	return $datos;
}

// Validar usuario
function ObtenerUsuario($conexion, $usuario){
	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
	$statement->execute(array(':usuario' => $usuario));
	$result = $statement->fetch();
	// var_dump($result);
	return $result;
}

// Insertar nuevo usuario
function NuevoUsuario($conexion, $nombre, $apellido, $usuario, $pass){
	$statement = $conexion->prepare('INSERT INTO usuarios (id, nombre, apellido, usuario, pass) VALUES(NULL, :nombre, :apellido, :usuario, :pass)');
	$statement->execute(array(
		':nombre' => $nombre,
		':apellido' => $apellido,
		':usuario' => $usuario,
		':pass' => $pass
	));
}

// Login

function Login($conexion, $usuario, $pass){
	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :pass LIMIT 1');
	$statement->execute([
		':usuario' => $usuario,
		':pass' => $pass
	]);
	$result = $statement->fetch();
	return $result;
}

// Crear nueva nota
function NuevaNota($conexion, $titulo, $nota, $usuario){
	$statement = $conexion->prepare('INSERT INTO notas (titulo, notas, usuario, fecha) VALUES(:titulo, :nota, :usuario, :fecha)');
	$statement->execute([
		':titulo' => $titulo,
		':nota' => $nota,
		':usuario' => $usuario,
		':fecha' => NULL
	]);
}

// Obtener notas del usuario
function ObtenerNotasUsuario($conexion, $usuario){
	$statement = $conexion->prepare('SELECT * FROM notas WHERE usuario = :usuario ORDER by idNotas DESC');
	$statement->execute( [':usuario' => $usuario] );
	$results = $statement->fetchAll();
	return $results;
}

// Eliminar nota
function DeleteNota($conexion, $id, $usuario){
	$statement = $conexion->prepare('DELETE FROM notas WHERE idNotas = :id AND usuario = :usuario');
	$statement->execute( array(':id' => $id, ':usuario' => $usuario) );
}


// Ver nota por Usuario y ID

function VerNota($conexion, $usuario, $id){
	$stat = $conexion->prepare('SELECT * FROM notas WHERE usuario = :usuario AND idNotas = :id LIMIT 1');
	$stat->execute(array(':usuario' => $usuario, ':id' => $id));
	$result = $stat->fetch();
	return $result;
}

// Modificar nota
function ModificarNota($conexion, $titulo, $nota, $id){
	$statement = $conexion->prepare('UPDATE notas SET titulo = :titulo, notas = :nota WHERE idNotas = :id');
	$statement->execute(array(
		':titulo' => $titulo,
		':nota' => $nota,
		':id' => $id
	));
}


?>