<?php
include_once 'config.php';
require_once 'php/registro.controlador.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the apple mobile web app capable -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- set the HandheldFriendly -->
    <meta name="HandheldFriendly" content="True">
    <!-- set the apple mobile web app status bar style -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- set the description -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="GRUPO SEAD ONLINE">
    <!-- Page Title -->
    <title>GRUPO SEAD ONLINE</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- include the site stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7cUbuntu:400,700" rel="stylesheet">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="css/fonts-icons.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="css/plugin-resets.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="css/color.css">


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://kit.fontawesome.com/531795bb8a.js" crossorigin="anonymous"></script>
    <style>
        .table-borderless>tbody>tr>td,
        .table-borderless>tbody>tr>th,
        .table-borderless>tfoot>tr>td,
        .table-borderless>tfoot>tr>th,
        .table-borderless>thead>tr>td,
        .table-borderless>thead>tr>th {
            border: none;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <form id="formulario" action="/cuestionario/cuestionario-beneficiario/accion" method="POST">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-10 ol-lg-11 col-md-12 col-sm-12">
                    <nav class="navbar navbar-dark p-3" style="background-color: #0351A0;">
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <h4><a class="text-white" href="#">MÁS INFORMACIÓN</a></h4>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <h4><a class="text-white" href="tel:8331304192"><i class="fas fa-phone-volume fa-lg"></i> 8333998457 </a></h4>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <h4><a class="text-white" href="mailto: info@camad.edu.mx"><i class="fas fa-envelope fa-lg"></i> info@gruposead.edu.mx</a></h4>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <h4>
                                <a class="text-white" href="https://www.facebook.com/GrupoEducativoSEAD" target="_blank">
                                    <i class="fab fa-facebook-square fa-lg"></i>
                                </a>
                                <a class="text-white" href="https://www.instagram.com/grupoeducativosead/" target="_blank">
                                    <i class="fab fa-instagram-square fa-lg"></i>
                                </a>
                                <a class="text-white" href="https://www.tiktok.com/@gruposead" target="_blank">
                                    <i class="fab fa-tiktok fa-lg"></i>
                                </a>
                                <a class="text-white" href="https://twitter.com/SeadGrupo" target="_blank">
                                    <i class="fab fa-twitter-square fa-lg"></i>
                                </a>
                                <a class="text-white" href="https://www.youtube.com/channel/UC2o3wTPl4USnTuPBIebIqNQ" target="_blank">
                                    <i class="fab fa-youtube-square fa-lg"></i>
                                </a>
                                <a class="text-white" href="https://api.whatsapp.com/send?phone=+528333998457" target="_blank">
                                    <i class="fab fa-whatsapp-square fa-lg"></i>
                                </a>
                            </h4>
                        </div>
                    </nav>
                    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light">
                        <a class="navbar-brand" href="#">
                            <img src="<?php echo HTTP_HOST ?>images/logo_sead_2.png" alt="Logo sead" class="img-responsive mr-5" width="200">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-5">
                                <li class="nav-item mr-5">
                                    <a class="nav-link h4" href="#">NOSOTROS</a>
                                </li>
                                <li class="nav-item mr-5">
                                    <a class="nav-link h4" href="#">TERMINA TU PREPA</a>
                                </li>
                                <li class="nav-item mr-5">
                                    <a class="nav-link h4" href="#">CONTACTANOS</a>
                                </li>
                                <li class="nav-item mr-5">
                                    <a class="nav-link h4" href="#">BLOG</a>
                                </li>
                                <li class="nav-item mr-5">
                                    <a class="nav-link h4" href="#">LOGIN</a>
                                </li>
                                <li class="nav-item mr-5 active">
                                    <a class="nav-link h4" href="#">VALIDA</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="container-fluid mb-5 shadow">
                        <div class="row p-5" style="background-color: #EEEEEE;">
                            <div class="col-xl-9 col-sm-12 col-12">
                                <h1 class="text-dark text-center">SOLICITUD DE ASPIRANTE A LA ACREDITACIÓN DE PREPARATORIA</h1>
                            </div>
                            <div class="col-xl-3 col-sm-12 col-12">
                                <img class="img-responsive m-auto" src="./images/logo-prepa-x-experiencia.png" width="100%" alt="">
                            </div>
                            <div class="col-xl-12 col-sm-12 col-12">
                                <h3 class="text-dark">por Experiencia laboral y/o conocimientos adquiridos de manera autodidacta Acuerdo 286</h3>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_estado_tramite">Estado de la republica en el que se desea realizar el tramite*: </label>
                                    <select class="form-control input-lg" name="sct_estado_tramite" id="sct_estado_tramite" required>
                                        <option value="">-Seleccionar estado--</option>
                                        <option value="Aguascalientes">Aguascalientes</option>
                                        <option value="Baja California">Baja California</option>
                                        <option value="Baja California Sur">Baja California Sur</option>
                                        <option value="Campeche">Campeche</option>
                                        <option value="Chiapas">Chiapas</option>
                                        <option value="Chihuahua">Chihuahua</option>
                                        <option value="CDMX">Ciudad de México</option>
                                        <option value="Coahuila">Coahuila</option>
                                        <option value="Colima">Colima</option>
                                        <option value="Durango">Durango</option>
                                        <option value="Estado de México">Estado de México</option>
                                        <option value="Guanajuato">Guanajuato</option>
                                        <option value="Guerrero">Guerrero</option>
                                        <option value="Hidalgo">Hidalgo</option>
                                        <option value="Jalisco">Jalisco</option>
                                        <option value="Michoacán">Michoacán</option>
                                        <option value="Morelos">Morelos</option>
                                        <option value="Nayarit">Nayarit</option>
                                        <option value="Nuevo León">Nuevo León</option>
                                        <option value="Oaxaca">Oaxaca</option>
                                        <option value="Puebla">Puebla</option>
                                        <option value="Querétaro">Querétaro</option>
                                        <option value="Quintana Roo">Quintana Roo</option>
                                        <option value="San Luis Potosí">San Luis Potosí</option>
                                        <option value="Sinaloa">Sinaloa</option>
                                        <option value="Sonora">Sonora</option>
                                        <option value="Tabasco">Tabasco</option>
                                        <option value="Tamaulipas">Tamaulipas</option>
                                        <option value="Tlaxcala">Tlaxcala</option>
                                        <option value="Veracruz">Veracruz</option>
                                        <option value="Yucatán">Yucatán</option>
                                        <option value="Zacatecas">Zacatecas</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 col-12">
                                <div class="card-header text-center" style="background-color: #0087C8;">
                                    <strong class="h2" style="color:aliceblue">DATOS PERSONALES </strong>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_curp">Clave Única de Registro de Población(CURP)</label>
                                    <input type="text" class="form-control input-lg" name="sct_curp" id="sct_curp" placeholder="Ingresa tu curp">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_correo">Correo electronico*:</label>
                                    <input type="email" class="form-control input-lg" name="sct_correo" id="sct_correo" required placeholder="ejemplo@ejemplo.com">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_nombre">Nombres*:</label>
                                    <input type="text" class="form-control input-lg" name="sct_nombre" id="sct_nombre" required placeholder="Ingresa tu(s) nombre(s)">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_app">Primer apellido*:</label>
                                    <input type="email" class="form-control input-lg" name="sct_app" id="sct_app" required placeholder="Ingresa tu primer apellido">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_apm">Segundo apellido*:</label>
                                    <input type="email" class="form-control input-lg" name="sct_apm" id="sct_apm" required placeholder="Ingresa tu segundo apellido">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_sexo">Sexo*: </label>
                                    <select class="form-control input-lg" name="sct_sexo" id="sct_sexo" required>
                                        <option value="">Selecciona</option>
                                        <option>Hombre</option>
                                        <option>Mujer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_fecha_nac">Fecha de nacimiento*:</label>
                                    <input type="date" class="form-control input-lg" name="sct_fecha_nac" id="sct_fecha_nac" required placeholder="Selecciona">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_lugar_nac">Lugar de nacimiento*: </label>
                                    <select class="form-control input-lg" name="sct_lugar_nac" id="sct_lugar_nac" required>
                                        <option value="">Selecciona</option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 col-12">
                                <div class="card-header text-center" style="background-color: #EEEEEE;">
                                    <strong class="h2 text-dark">AUTORIZACIÓN PARA REALIZAR EL TRAMITE </strong>
                                </div>
                                <h4 class="text-dark text-justify">Autorizar a la persona que se indica a continuación, a efectode que mi nombre y represetanción, pueda recibir toda clase de notificaciones, asi como para realizar los tramites relacionados a la presente solicitud de revalidación, y/o equivalencia de estudios, y los que en su caso, se requieran durante el procedimiento respectivo.</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_nom_comp">Nombre completo*:</label>
                                    <input type="text" class="form-control input-lg" name="sct_nom_comp" id="sct_nom_comp" required placeholder="Ingresa nombre completo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 col-12">
                                <div class="card-header text-center" style="background-color: #0087C8;">
                                    <strong class="h2" style="color:aliceblue">DIRECCIÓN DEL SOLICITANTE </strong>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_estado">Estado*:</label>
                                    <select class="form-control input-lg" name="sct_estado" id="sct_estado" required>
                                        <option>Selecciona</option>
                                        <option value="Aguascalientes">Aguascalientes</option>
                                        <option value="Baja California">Baja California</option>
                                        <option value="Baja California Sur">Baja California Sur</option>
                                        <option value="Campeche">Campeche</option>
                                        <option value="Chiapas">Chiapas</option>
                                        <option value="Chihuahua">Chihuahua</option>
                                        <option value="Ciudad de México">Ciudad de México</option>
                                        <option value="Coahuila de Zaragoza">Coahuila</option>
                                        <option value="Colima">Colima</option>
                                        <option value="Durango">Durango</option>
                                        <option value="México">Estado de México</option>
                                        <option value="Guanajuato">Guanajuato</option>
                                        <option value="Guerrero">Guerrero</option>
                                        <option value="Hidalgo">Hidalgo</option>
                                        <option value="Jalisco">Jalisco</option>
                                        <option value="Michoacán de Ocampo">Michoacán</option>
                                        <option value="Morelos">Morelos</option>
                                        <option value="Nayarit">Nayarit</option>
                                        <option value="Nuevo León">Nuevo León</option>
                                        <option value="Oaxaca">Oaxaca</option>
                                        <option value="Puebla">Puebla</option>
                                        <option value="Querétaro">Querétaro</option>
                                        <option value="Quintana Roo">Quintana Roo</option>
                                        <option value="San Luis Potosí">San Luis Potosí</option>
                                        <option value="Sinaloa">Sinaloa</option>
                                        <option value="Sonora">Sonora</option>
                                        <option value="Tabasco">Tabasco</option>
                                        <option value="Tamaulipas">Tamaulipas</option>
                                        <option value="Tlaxcala">Tlaxcala</option>
                                        <option value="Veracruz de Ignacio de la Llave">Veracruz</option>
                                        <option value="Yucatán">Yucatán</option>
                                        <option value="Zacatecas">Zacatecas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_municipio">Municipio o Alcaldia*:</label>
                                    <select class="form-control input-lg" name="sct_municipio" id="sct_municipio" required>
                                        <option>Selecciona</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_colonia">Colonia*:</label>
                                    <select class="form-control input-lg" name="sct_colonia" id="sct_colonia" required>
                                        <option>Selecciona</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_calle">Calle*:</label>
                                    <input type="text" class="form-control input-lg" name="sct_calle" id="sct_calle" required placeholder="Ingresa tu calle">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_num_ext">Numero exterior*:</label>
                                    <input type="number" class="form-control input-lg" name="sct_num_ext" id="sct_num_ext" required placeholder="Numero exterior">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_num_int">Numero interior:</label>
                                    <input type="number" class="form-control input-lg" name="sct_num_int" id="sct_num_int" placeholder="Numero interior">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_codigo_postal">Codigo postal*:</label>
                                    <input type="number" class="form-control input-lg" name="sct_codigo_postal" id="sct_codigo_postal" required placeholder="Ingresa tu codigo postal">
                                </div>
                            </div>
                            <div class="col-xl-1 col-md-1 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_lada_tel_fijo">Lada*:</label>
                                    <input type="number" class="form-control input-lg" name="sct_lada_tel_fijo" id="sct_lada_tel_fijo" required placeholder="Lada">
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-1 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_tel_fijo">Telefono fijo*:</label>
                                    <input type="number" class="form-control input-lg" name="sct_tel_fijo" id="sct_tel_fijo" required placeholder="Telefono fijo">
                                </div>
                            </div>
                            <div class="col-xl-1 col-md-1 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_lada_tel_movil">Lada*:</label>
                                    <input type="number" class="form-control input-lg" name="sct_lada_tel_movil" id="sct_lada_tel_movil" required placeholder="Lada">
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-1 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_tel_movil">Telefono móvil*:</label>
                                    <input type="number" class="form-control input-lg" name="sct_tel_movil" id="sct_tel_movil" required placeholder="Telefono móvil">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 col-12">
                                <div class="card-header text-center" style="background-color: #EEEEEE;">
                                    <strong class="h2 text-dark">INSTITUCIÓN DONDE SE CURSARON LOS ESTUDIOS PREVIOS </strong>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_inst_nom">Nombre de la institución donde cursaste los estudios:</label>
                                    <input type="text" class="form-control input-lg" name="sct_inst_nom" id="sct_inst_nom" placeholder="Ingresa el nombre de la institución">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_inst_tipo">Tipo de institución*:</label>
                                    <select class="form-control input-lg" name="sct_inst_tipo" id="sct_inst_tipo" required>
                                        <option>Selecciona</option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_inst_pais">Pais*:</label>
                                    <select class="form-control input-lg" name="sct_inst_pais" id="sct_inst_pais" required>
                                        <option>Selecciona</option>
                                        <option value="México">México</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_inst_estado">Estado*:</label>
                                    <select class="form-control input-lg" name="sct_inst_estado" id="sct_inst_estado" required>
                                        <option>Selecciona</option>
                                        <option value="Aguascalientes">Aguascalientes</option>
                                        <option value="Baja California">Baja California</option>
                                        <option value="Baja California Sur">Baja California Sur</option>
                                        <option value="Campeche">Campeche</option>
                                        <option value="Chiapas">Chiapas</option>
                                        <option value="Chihuahua">Chihuahua</option>
                                        <option value="Ciudad de México">Ciudad de México</option>
                                        <option value="Coahuila de Zaragoza">Coahuila</option>
                                        <option value="Colima">Colima</option>
                                        <option value="Durango">Durango</option>
                                        <option value="México">Estado de México</option>
                                        <option value="Guanajuato">Guanajuato</option>
                                        <option value="Guerrero">Guerrero</option>
                                        <option value="Hidalgo">Hidalgo</option>
                                        <option value="Jalisco">Jalisco</option>
                                        <option value="Michoacán de Ocampo">Michoacán</option>
                                        <option value="Morelos">Morelos</option>
                                        <option value="Nayarit">Nayarit</option>
                                        <option value="Nuevo León">Nuevo León</option>
                                        <option value="Oaxaca">Oaxaca</option>
                                        <option value="Puebla">Puebla</option>
                                        <option value="Querétaro">Querétaro</option>
                                        <option value="Quintana Roo">Quintana Roo</option>
                                        <option value="San Luis Potosí">San Luis Potosí</option>
                                        <option value="Sinaloa">Sinaloa</option>
                                        <option value="Sonora">Sonora</option>
                                        <option value="Tabasco">Tabasco</option>
                                        <option value="Tamaulipas">Tamaulipas</option>
                                        <option value="Tlaxcala">Tlaxcala</option>
                                        <option value="Veracruz de Ignacio de la Llave">Veracruz</option>
                                        <option value="Yucatán">Yucatán</option>
                                        <option value="Zacatecas">Zacatecas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_inst_municipio">Municipio*:</label>
                                    <select class="form-control input-lg" name="sct_inst_municipio" id="sct_inst_municipio" required>
                                        <option>Selecciona</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="sct_inst_colonia">Colonia*:</label>
                                    <select class="form-control input-lg" name="sct_inst_colonia" id="sct_inst_colonia" required>
                                        <option>Selecciona</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Calle:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" placeholder="Ingrese la calle">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Numero exterior:</label>
                                    <input type="number" class="form-control input-lg" name="" id="" placeholder="Numero exterior">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Código postal:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" placeholder="Ingresa codigo postal">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Telefono:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" placeholder="Ingrese el telefono">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Correo electrónico:</label>
                                    <input type="email" class="form-control input-lg" name="" id="" placeholder="ejemplo@ejemplo.com">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 col-12">
                                <div class="card-header text-center" style="background-color: #0087C8;">
                                    <strong class="h2" style="color:aliceblue">EXPERIENCIA LABORAL </strong>
                                </div>
                                <h4 class="text-dark text-justify">Contesta de acuerdo a tu experiencia laboral mas reciente a la mas antigúa</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Nombre de la empresa*:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" required placeholder="Ingresa nombre de la empresa">
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Cargo o puesto desempeñado*:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" required placeholder="Ingrese el puesto o cargo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Tiempo que presto sus servicios*:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" required placeholder="Ejemplo: dia, mes y año a dia mes y año">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Telefono de la empresa*:</label>
                                    <input type="number" class="form-control input-lg" name="" id="" required placeholder="Ingrese el telefono">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Cuenta con un comprobante de su servicio en la empresa*:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" required placeholder="Observaciones">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Nombre de la empresa*:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" required placeholder="Ingresa nombre de la empresa">
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Cargo o puesto desempeñado*:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" required placeholder="Ingrese el puesto o cargo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Tiempo que presto sus servicios*:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" required placeholder="Ejemplo: dia, mes y año a dia mes y año">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Telefono de la empresa*:</label>
                                    <input type="number" class="form-control input-lg" name="" id="" required placeholder="Ingrese el telefono">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Cuenta con un comprobante de su servicio en la empresa*:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" required placeholder="Observaciones">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Nombre de la empresa*:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" required placeholder="Ingresa nombre de la empresa">
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Cargo o puesto desempeñado*:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" required placeholder="Ingrese el puesto o cargo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Tiempo que presto sus servicios*:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" required placeholder="Ejemplo: dia, mes y año a dia mes y año">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Telefono de la empresa*:</label>
                                    <input type="number" class="form-control input-lg" name="" id="" required placeholder="Ingrese el telefono">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Cuenta con un comprobante de su servicio en la empresa*:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" required placeholder="Observaciones">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 col-12">
                                <div class="card-header text-center" style="background-color: #EEEEEE;">
                                    <strong class="h2 text-dark">FORMACIÓN EXTRACURRICULAR </strong>
                                </div>
                                <h4 class="text-dark text-justify">En caso de contar con cursos, diplomados o estudios adicionales hacer mencion de los mismos.</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Curso:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" placeholder="Curso">
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Curso:</label>
                                    <input type="number" class="form-control input-lg" name="" id="" placeholder="Curso">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Institución o escuela que impartio:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" placeholder="Institución">
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Institución o escuela que impartio:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" placeholder="Institución">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Fecha:</label>
                                    <input type="date" class="form-control input-lg" name="" id="" placeholder="Fecha">
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Fecha:</label>
                                    <input type="date" class="form-control input-lg" name="" id="" placeholder="Fecha">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Anotaciones:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" placeholder="Anotaciones">
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="h3 text-dark" for="">Anotaciones:</label>
                                    <input type="text" class="form-control input-lg" name="" id="" placeholder="Anotaciones">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 col-12">
                                <div class="card-header text-center" style="background-color: #0087C8;">
                                    <strong class="h2" style="color:aliceblue">DOCUMENTOS PRESENTADOS </strong>
                                </div>
                                <h4 class="text-dark text-justify">Deberá seleccionar si cuenta o no con cada uno de los documentos que se presentan a continuación y las observaciones pertinentes de lo contrario no podra guardar la solicitud.</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 col-12">
                                <table class="table table-borderless table-responsive-sm">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>DOCUMENTOS</th>
                                            <th>PRESENTADO</th>
                                            <th>OBSERVACIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">ACTA DE NACIMIENTO O DOCUEMENTO EQUIVALENTE*</td>
                                            <td>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="sct_doc_acta1" name="sct_doc_acta" class="custom-control-input">
                                                    <label class="custom-control-label" for="sct_doc_acta1">Si</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="sct_doc_acta2" name="sct_doc_acta" class="custom-control-input" required>
                                                    <label class="custom-control-label" for="sct_doc_acta2">No</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-lg" name="sct_observaciones_acta" id="sct_observaciones_acta" placeholder="Ingrese tus observaciones">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">INDENTIFICACIÓN OFICIAL(INE)*</td>
                                            <td>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="sct_doc_ine1" name="sct_doc_ine" class="custom-control-input">
                                                    <label class="custom-control-label" for="sct_doc_ine1">Si</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="sct_doc_ine2" name="sct_doc_ine" class="custom-control-input" required>
                                                    <label class="custom-control-label" for="sct_doc_ine2">No</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-lg" name="sct_observaciones_ine" id="sct_observaciones_ine" placeholder="Ingrese tus observaciones">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">CLAVE ÚNICA DE REGISTRO DE POBLACIÓN(CURP)*</td>
                                            <td>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="sct_doc_curp1" name="sct_doc_curp" class="custom-control-input">
                                                    <label class="custom-control-label" for="sct_doc_curp1">Si</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="sct_doc_curp2" name="sct_doc_curp" class="custom-control-input" required>
                                                    <label class="custom-control-label" for="sct_doc_curp2">No</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-lg" name="sct_observaciones_curp" id="sct_observaciones_curp" placeholder="Ingrese tus observaciones">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">ANTECEDENTE ACADÉMICO QUE ACREDITE LA SECUNDARIA*</td>
                                            <td>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="sct_doc_ant_acd1" name="sct_doc_ant_acd" class="custom-control-input">
                                                    <label class="custom-control-label" for="sct_doc_ant_acd1">Si</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="sct_doc_ant_acd2" name="sct_doc_ant_acd" class="custom-control-input" required>
                                                    <label class="custom-control-label" for="sct_doc_ant_acd2">No</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-lg" name="sct_observaciones_ant_acd" id="sct_observaciones_ant_acd" placeholder="Ingrese tus observaciones">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">CERTIFICADO PARCIAL DE BACHILLERATO*</td>
                                            <td>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="sct_doc_crt_bach1" name="sct_doc_crt_bach" class="custom-control-input">
                                                    <label class="custom-control-label" for="sct_doc_crt_bach1">Si</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="sct_doc_crt_bach2" name="sct_doc_crt_bach" class="custom-control-input" required>
                                                    <label class="custom-control-label" for="sct_doc_crt_bach2">No</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-lg" name="sct_observaciones_crt_bach" id="sct_observaciones_crt_bach" placeholder="Ingrese tus observaciones">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">BOLETAS O CONSTANCIA DE GRADOS DE BACHILLERATO*</td>
                                            <td>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="sct_doc_cntc_bach1" name="sct_doc_cntc_bach" class="custom-control-input">
                                                    <label class="custom-control-label" for="sct_doc_cntc_bach1">Si</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="sct_doc_cntc_bach2" name="sct_doc_cntc_bach" class="custom-control-input" required>
                                                    <label class="custom-control-label" for="sct_doc_cntc_bach2">No</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-lg" name="sct_observaciones_cntc_bach" id="sct_observaciones_cntc_bach" placeholder="Ingrese tus observaciones">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">PAGO DE DERECHOS*</td>
                                            <td>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="sct_doc_derechos1" name="sct_doc_derechos" class="custom-control-input">
                                                    <label class="custom-control-label" for="sct_doc_derechos1">Si</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="sct_doc_derechos2" name="sct_doc_derechos" class="custom-control-input">
                                                    <label class="custom-control-label" for="sct_doc_derechos2">No</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-lg" name="sct_observaciones_derechos" id="sct_observaciones_derechos" placeholder="Ingrese tus observaciones">
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 col-12">
                                <h5 class="text-dark text-justify">Los documentos se encuentran marcados como obligatorios*, son documentos requeridos para el tramite y se pueden presentar en la institución evaluadora o de manera digital en caso de ser proceso a distancia, la falta de alguno de ellos motivará una prevención al titular del trámite para su desahogo en un plazo de 5 días hábiles, de conformidad con lo dispuesto en el linamiento 10 del acuerdo 286 publicado en el Diario Oficial del la Federación el 30 de Octubre de 2000 y su posible desechamiento según linamiento 11 del mismo acuerdo.</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 col-12 mb-5">
                                <button type="submit" class="btn btn-danger float-right btn-lg">GUARDAR CUESTIONARIO</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js" defer></script>
    <script src="js/jquery.main.js" defer></script>
    <script>
        $(document).ready(function() {
            $("#sct_estado").on("change", function(e) {
                e.preventDefault()
                var estado = $(this).val();
                if (estado == "") {
                    return;
                }
                $('#sct_municipio option').remove();
                $.ajax({
                    type: "GET",
                    url: `https://api-cp.multiservicios-web.com.mx/query/get_municipio_por_estado/${estado}?token=cf683454-21ac-40c1-a32f-daaa44796206`,
                    dataType: "json",
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        const dataArray = res.response.municipios
                        console.log(dataArray)
                        $("#sct_municipio").append(`<option value="">Seleccionar</option>`);
                        dataArray.forEach(element => {
                            $("#sct_municipio").append(`<option value="${element}">${element}</option>`);
                        });

                    }
                });
            });
            $("#sct_municipio").on("change", function(e) {
                e.preventDefault()
                var municipio = $(this).val();
                if (municipio == "") {
                    return;
                }
                $('#sct_colonia option').remove();
                $.ajax({
                    type: "GET",
                    url: `https://api-cp.multiservicios-web.com.mx/query/get_colonia_por_municipio/${municipio}?token=cf683454-21ac-40c1-a32f-daaa44796206`,
                    dataType: "json",
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        const dataArray = res.response.colonia
                        console.log(dataArray)
                        $("#sct_colonia").append(`<option value="">Seleccionar</option>`);
                        dataArray.forEach(element => {
                            $("#sct_colonia").append(`<option value="${element}">${element}</option>`);
                        });

                    }
                });
            });


            $("#sct_inst_estado").on("change", function(e) {
                e.preventDefault()
                var estado = $(this).val();
                if (estado == "") {
                    return;
                }
                $('#sct_inst_municipio option').remove();
                $.ajax({
                    type: "GET",
                    url: `https://api-cp.multiservicios-web.com.mx/query/get_municipio_por_estado/${estado}?token=cf683454-21ac-40c1-a32f-daaa44796206`,
                    dataType: "json",
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        const dataArray = res.response.municipios
                        console.log(dataArray)
                        $("#sct_inst_municipio").append(`<option value="">Seleccionar</option>`);
                        dataArray.forEach(element => {
                            $("#sct_inst_municipio").append(`<option value="${element}">${element}</option>`);
                        });

                    }
                });
            });
            $("#sct_inst_municipio").on("change", function(e) {
                e.preventDefault()
                var municipio = $(this).val();
                if (municipio == "") {
                    return;
                }
                $('#sct_inst_colonia option').remove();
                $.ajax({
                    type: "GET",
                    url: `https://api-cp.multiservicios-web.com.mx/query/get_colonia_por_municipio/${municipio}?token=cf683454-21ac-40c1-a32f-daaa44796206`,
                    dataType: "json",
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        const dataArray = res.response.colonia
                        console.log(dataArray)
                        $("#sct_inst_colonia").append(`<option value="">Seleccionar</option>`);
                        dataArray.forEach(element => {
                            $("#sct_inst_colonia").append(`<option value="${element}">${element}</option>`);
                        });

                    }
                });
            });


        });
    </script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>