<?php

// include_once '../config.php';

if (isset($_POST['btnEncuesta'])) {

    $_POST['est_curp'] = strtoupper($_POST['est_curp']);
    $_POST['est_nombre'] = strtoupper($_POST['est_nombre']);
    $_POST['est_app'] = strtoupper($_POST['est_app']);
    $_POST['est_apm'] = strtoupper($_POST['est_apm']);
    $_POST['est_nom_comp'] = strtoupper($_POST['est_nom_comp']);
    $_POST['est_fecha_nac'] = date("Y-m-d", strtotime($_POST['est_fecha_nac']));
    $_POST['est_ext_fecha1'] = !empty($_POST['est_ext_fecha1']) ? date("Y-m-d", strtotime($_POST['est_ext_fecha1'])): "";
    $_POST['est_ext_fecha2'] = !empty($_POST['est_ext_fecha2']) ? date("Y-m-d", strtotime($_POST['est_ext_fecha2'])): "";
    //Lo primerito, creamos una variable iniciando curl, pasándole la url
    $ch = curl_init('http://localhost/camad-landing.com/api/api.php/create/encuesta');

    //especificamos el POST (tambien podemos hacer peticiones enviando datos por GET
    curl_setopt($ch, CURLOPT_POST, 1);

    //le decimos qué paramáetros enviamos (pares nombre/valor, también acepta un array)
    curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);

    //le decimos que queremos recoger una respuesta (si no esperas respuesta, ponlo a false)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //recogemos la respuesta
    $respuesta = curl_exec($ch);

    echo $respuesta;

    $error = curl_error($ch);

    //y finalmente cerramos curl
    curl_close($ch);
}
