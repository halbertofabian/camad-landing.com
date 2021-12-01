<?php
if (isset($_POST['btnEncuesta'])) {

    //Lo primerito, creamos una variable iniciando curl, pasándole la url
    $ch = curl_init(HTTP_HOST . 'api/api.php/create/encuesta');

    //especificamos el POST (tambien podemos hacer peticiones enviando datos por GET
    curl_setopt($ch, CURLOPT_POST, 1);

    //le decimos qué paramáetros enviamos (pares nombre/valor, también acepta un array)
    curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);

    //le decimos que queremos recoger una respuesta (si no esperas respuesta, ponlo a false)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //recogemos la respuesta
    $respuesta = curl_exec($ch);

    echo json_encode($respuesta, true);
}
