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



$app->post("/create/encuesta", function () use ($app) {

	$query = "INSERT INTO tbl_encuesta_est 
	(est_estado_tramite,est_curp,est_correo,est_nombre,est_app,est_apm,est_sexo,est_fecha_nac,est_lugar_nac,est_nom_comp,
	est_estado,est_municipio,est_colonia,est_calle,est_num_ext,est_num_int,est_codigo_postal,est_lada_tel_fijo,est_tel_fijo,
	est_lada_tel_movil,est_tel_movil,est_inst_nom,est_inst_tipo,est_inst_pais,est_inst_estado,est_inst_municipio,est_inst_colonia,
	est_inst_calle,est_inst_num_ext,est_inst_cod_pos,est_inst_tel,est_inst_correo,est_exp_nom_emp1,est_exp_cargo1,est_exp_tiempo1,
	est_exp_tel1,est_exp_comprobante1,est_exp_nom_emp2,est_exp_cargo2,est_exp_tiempo2,est_exp_tel2,est_exp_comprobante2,
	est_exp_nom_emp3,est_exp_cargo3,est_exp_tiempo3,est_exp_tel3,est_exp_comprobante3,est_ext_curso1,est_ext_inst1,est_ext_fecha1,
	est_ext_anot1,est_ext_curso2,est_ext_inst2,est_ext_fecha2,est_ext_anot2,est_doc_acta,est_observaciones_acta,est_doc_ine,
	est_observaciones_ine,est_doc_curp,est_observaciones_curp,est_doc_ant_acd,est_observaciones_ant_acd,est_doc_crt_bach,
	est_observaciones_crt_bach,est_doc_cntc_bach,est_observaciones_cntc_bach,est_doc_derechos,est_observaciones_derechos) 
	VALUES(
		'{$app->request->post("est_estado_tramite")}',
		'{$app->request->post("est_curp")}',
		'{$app->request->post("est_correo")}',
		'{$app->request->post("est_nombre")}',
		'{$app->request->post("est_app")}',
		'{$app->request->post("est_apm")}',
		'{$app->request->post("est_sexo")}',
		'{$app->request->post("est_fecha_nac")}',
		'{$app->request->post("est_lugar_nac")}',
		'{$app->request->post("est_nom_comp")}',
		'{$app->request->post("est_estado")}',
		'{$app->request->post("est_municipio")}',
		'{$app->request->post("est_colonia")}',
		'{$app->request->post("est_calle")}'
		'{$app->request->post("est_num_ext")}'
		'{$app->request->post("est_num_int")}'
		'{$app->request->post("est_codigo_postal")}'
		'{$app->request->post("est_lada_tel_fijo")}'
		'{$app->request->post("est_tel_fijo")}'
		'{$app->request->post("est_lada_tel_movil")}'
		'{$app->request->post("est_tel_movil")}'
		'{$app->request->post("est_inst_nom")}'
		'{$app->request->post("est_inst_tipo")}'
		'{$app->request->post("est_inst_pais")}'
		'{$app->request->post("est_inst_estado")}'
		'{$app->request->post("est_inst_municipio")}'
		'{$app->request->post("est_inst_colonia")}'
		'{$app->request->post("est_inst_calle")}'
		'{$app->request->post("est_inst_num_ext")}'
		'{$app->request->post("est_inst_cod_pos")}'
		'{$app->request->post("est_inst_tel")}'
		'{$app->request->post("est_inst_correo")}'
		'{$app->request->post("est_exp_nom_emp1")}'
		'{$app->request->post("est_exp_cargo1")}'
		'{$app->request->post("est_exp_tiempo1")}'
		'{$app->request->post("est_exp_tel1")}'
		'{$app->request->post("est_exp_comprobante1")}'
		'{$app->request->post("est_exp_nom_emp2")}'
		'{$app->request->post("est_exp_cargo2")}'
		'{$app->request->post("est_exp_tiempo2")}'
		'{$app->request->post("est_exp_tel2")}'
		'{$app->request->post("est_exp_comprobante2")}'
		'{$app->request->post("est_exp_nom_emp3")}'
		'{$app->request->post("est_exp_cargo3")}'
		'{$app->request->post("est_exp_tiempo3")}'
		'{$app->request->post("est_exp_tel3")}'
		'{$app->request->post("est_exp_comprobante3")}'
		'{$app->request->post("est_ext_curso1")}'
		'{$app->request->post("est_ext_inst1")}'
		'{$app->request->post("est_ext_fecha1")}'
		'{$app->request->post("est_ext_anot1")}'
		'{$app->request->post("est_ext_curso2")}'
		'{$app->request->post("est_ext_inst2")}'
		'{$app->request->post("est_ext_fecha2")}'
		'{$app->request->post("est_ext_anot2")}'
		'{$app->request->post("est_doc_acta")}'
		'{$app->request->post("est_observaciones_acta")}'
		'{$app->request->post("est_doc_ine")}'
		'{$app->request->post("est_observaciones_ine")}'
		'{$app->request->post("est_doc_curp")}'
		'{$app->request->post("est_observaciones_curp")}'
		'{$app->request->post("est_doc_ant_acd")}'
		'{$app->request->post("est_observaciones_ant_acd")}'
		'{$app->request->post("est_doc_crt_bach")}'
		'{$app->request->post("est_observaciones_crt_bach")}'
		'{$app->request->post("est_doc_cntc_bach")}'
		'{$app->request->post("est_observaciones_cntc_bach")}'
		'{$app->request->post("est_doc_derechos")}'
		'{$app->request->post("est_observaciones_derechos")}'
		)";


	$pps = Conexion::conectar()->prepare($query);
	// $pps->execute();

	// echo json_encode($pps->errorInfo());

	if ($pps->execute()) {
		return array("status" => true, "mensaje" => "Su regitro se a guardado correctamente!");
	} else {
		return array("status" => false, "mensaje" => "Hubo un error al guardar su registro, intentelo nuevaente");
	}
});

$app->run();
