<?php

require_once 'vendor/autoload.php';
require_once 'vendor/conexion.php';

$app = new \Slim\Slim();


// Obetner todos los resultados
$app->get("/paquetes", function () use ($app) {

	$query = Conexion::conectar()->prepare("SELECT * FROM tbl_paquete_pqt WHERE  pqt_modalidad = ? AND pqt_estado_actividad = ? ");
	$query->bindValue(1, 'ONLINE');
	$query->bindValue(2, '1');
	$query->execute();
	//print_r($query->fetchAll(PDO::FETCH_ASSOC));
	echo json_encode($query->fetchAll(PDO::FETCH_ASSOC), true);
});

$app->get("/cupones/:cps_id", function ($cps_id) use ($app) {

	$query = Conexion::conectar()->prepare("SELECT * FROM tbl_cupones_cps WHERE cps_codigo = ?  ");
	$query->bindValue(1, $cps_id);
	$query->execute();
	//print_r($query->fetchAll(PDO::FETCH_ASSOC));
	echo json_encode($query->fetch(PDO::FETCH_ASSOC), true);
});

$app->get("/ultimoUsuario", function () use ($app) {

	$query = Conexion::conectar()->prepare("SELECT * FROM tbl_usuarios_usr ORDER BY usr_id DESC");
	$query->execute();
	//print_r($query->fetchAll(PDO::FETCH_ASSOC));
	echo json_encode($query->fetch(PDO::FETCH_ASSOC), true);
});


$app->post("/create/prospecto", function () use ($app) {

	$query = "INSERT INTO tbl_usuarios_usr (usr_matricula,usr_modalidad,usr_pqt_interes_nombre,usr_pqt_interes_sku,usr_nombre,usr_app,usr_apm,usr_telefono,usr_correo,usr_clave,usr_rol,usr_usuario_registro,usr_fecha_registro,usr_id_sucursal) 
	VALUES(
		'{$app->request->post("usr_matricula")}',
		'{$app->request->post("usr_modalidad")}',
		'{$app->request->post("usr_pqt_interes_nombre")}',
		'{$app->request->post("usr_pqt_interes_sku")}',
		'{$app->request->post("usr_nombre")}',
		'{$app->request->post("usr_app")}',
		'{$app->request->post("usr_apm")}',
		'{$app->request->post("usr_telefono")}',
		'{$app->request->post("usr_correo")}',
		'{$app->request->post("usr_clave")}',
		'{$app->request->post("usr_rol")}',
		'{$app->request->post("usr_usuario_registro")}',
		'{$app->request->post("usr_fecha_registro")}',
		'{$app->request->post("usr_id_sucursal")}'
		)";


	$pps = Conexion::conectar()->prepare($query);
	// $pps->execute();

	// echo json_encode($pps->errorInfo());

	if ($pps->execute()) {
		$result = array("status" => true, "message" => "Bienvenido a SEAD");
	} else {
		$result = array("status" => false, "message" => "El correo ya existe");
	}
	//var_dump($result);
	echo json_encode($result);
});

$app->get("/conferencias", function () use ($app) {
	$query = Conexion::conectar()->prepare("SELECT * FROM conferencias");
	$query->execute();
	//print_r($query->fetchAll(PDO::FETCH_ASSOC));
	echo json_encode($query->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
});
// Obetner resultados por id
$app->get("/conferencias/:id", function ($id) use ($app) {
	$query = Conexion::conectar()->prepare(
		"SELECT * FROM conferencias WHERE id = :conf_id	
		"
	);
	$query->bindParam(":conf_id", $id, PDO::PARAM_STR);

	$query->execute();
	//print_r($query->fetchAll(PDO::FETCH_ASSOC));
	echo json_encode($query->fetch(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE);
});

//Eliminar por id
$app->get("/delete/conference/:id", function ($id) use ($app) {
	$query = Conexion::conectar()->prepare(
		"DELETE  FROM conferencias WHERE id = :conf_id	
		"
	);
	$query->bindParam(":conf_id", $id, PDO::PARAM_STR);

	//var_dump($query->execute()>0);
	$query->execute();

	if ($query->rowCount()) {
		$result = array("status" => true, "message" => "Conferencia borrada");
	} else {
		$result = array("status" => false, "message" => "La conferencia no existe");
	}

	echo json_encode($result);
});


// Enviar datos 
$app->post("/create/conference", function () use ($app) {

	$query = "INSERT INTO conferencias 
	VALUES(
		'{$app->request->post("id")}',
		'{$app->request->post("nombre")}',
		'{$app->request->post("carrera")}',
		'{$app->request->post("horario")}'
		)";


	$pps = Conexion::conectar()->prepare($query);

	//print_r($pps->errorInfo());

	if ($pps->execute()) {
		$result = array("status" => true, "message" => "Conferencia creada");
	} else {
		$result = array("status" => false, "message" => "La conferencia ya existe");
	}
	//var_dump($result);
	echo json_encode($result);
});

$app->post("/update/conference", function () use ($app) {

	$query = "UPDATE  conferencias 
	SET
	nombre = '{$app->request->post("nombre")}',
	carrera = '{$app->request->post("carrera")}',
	horario ='{$app->request->post("horario")}'
	WHERE id = '{$app->request->post("id")}' ";


	$pps = Conexion::conectar()->prepare($query);

	//print_r($pps->errorInfo());

	if ($pps->execute()) {
		$result = array("status" => true, "message" => "Conferencia actualizada");
	} else {
		$result = array("status" => false, "message" => "La conferencia no existe");
	}
	//var_dump($result);
	echo json_encode($result);
});

$app->run();
