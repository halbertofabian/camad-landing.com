<?php
define('HTTP_HOST_APP', 'http://localhost/camad.edu.mx/');
$folder = explode("/", $_SERVER['REQUEST_URI']);

define('FOLDER', $folder[1]);

// Definiendo la ruta de la web 
define('HTTP_HOST', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/' . FOLDER . '/');


date_default_timezone_set('America/Mexico_city');
$fecha = date('Y-m-d h:i:s');
define('FECHA', $fecha);

define("SUCURSAL_ID", '9f3b645d6b56fd6e1b79e9b92b903ea5');
define('SUB_FIJO', 'pb');

function preArray($array)
{
    echo "<pre>", print_r($array), "</pre>";
}