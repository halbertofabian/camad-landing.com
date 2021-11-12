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

</head>

<body>
    <div class="container-fluid">
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
                            <li class="nav-item mr-5 active">
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
                            <li class="nav-item mr-5">
                                <a class="nav-link h4" href="./cuestionario.php">VALIDA</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid mb-5 shadow">
                    <!-- main banner section start here -->
                    <div class="row bg-img-ful main-banner bg-img-parallax" style="background-image: url('./images/imagen-graduados-index.jpg');" data-scroll-index="0">
                        <div class="col-xs-12 col-sm-6 col-md-7 text-center">
                            <img src="./images/mapa-certificamos-a-nivel-nacional.png" class="mb-5" width="30%" alt="">
                            <div class="alert m-auto" style="background-color: #0351A0;">
                                <h1 class="heading">Termina tu prepa</h1>
                            </div>
                            <span class="title h3">Concluye tus estudios medio superior con validez oficial SEP</span>
                            <span class="arrow" style="background-image: url(images/arrow.png);"></span>
                        </div>
                        <div class="col-xl-4 col-sm-6 col-md-5">
                            <section class="quote-form" style="background-color: #0087C8;">
                                <h2 class="form-heading text-center text-uppercase text-white mb-5">Solicita más información</h2>
                                <form id="contactForm" data-toggle="validator" class="p-4">
                                    <fieldset>
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <input type="text" id="usr_nombre" placeholder="Nombre *" class="form-control" required data-error="NEW ERROR MESSAGE">
                                            </div>
                                            <div class="form-group col-12">
                                                <input type="text" id="usr_app" placeholder="Whatsapp o Celular *" class="form-control" required data-error="NEW ERROR MESSAGE">
                                            </div>
                                            <div class="form-group col-12">
                                                <select class="form-control" name="" id="" data-error="NEW ERROR MESSAGE">
                                                    <option>Modalidad</option>
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12">
                                                <input type="email" id="usr_correo" placeholder="Correo electrónico" class="form-control" data-error="NEW ERROR MESSAGE">
                                            </div>
                                            <div class="form-group col-12">
                                                <input type="number" id="usr_clave" placeholder="Edad" class="form-control" data-error="NEW ERROR MESSAGE">
                                            </div>
                                            <div class="form-group col-12">
                                                <select class="form-control" name="" id="" data-error="NEW ERROR MESSAGE">
                                                    <option>Estado</option>
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 text-center hidden">
                                                <div id="msgSubmit" class="form-message"></div>
                                            </div>

                                            <div class="form-group col-12">
                                                <button class="btn btn-danger btn-block" type="submit" id="form-submit">QUIERO MÁS INFORMACIÓN</button>
                                            </div>
                                            <div class="form-group col-12">
                                                <span class="title text-center">* Campo requerido / Aviso de privacidad</span>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </section>
                        </div>
                    </div>
                    <div class="row" style="background-color: #0351A0;">
                        <div class="col-xl-12 col-sm-12 col-12 text-center">
                            <h1 class="text-white display-3">Conoce los beneficios de terminar tu prepa SEAD</h1>
                        </div>
                    </div>
                    <div class="row about-section p-5" data-scroll-index="2">
                        <!-- about box start here -->
                        <div class="col-xl-4 col-sm-6 col-md-3 about-box">
                            <img class="img-responsive m-auto p-3" src="./images/check-validez-oficial.png" width="40%" alt="">
                            <span class="title text-uppercase text-center">Validez oficial</span>
                            <h4 class="text-dark">Todas nuestras modalidades de preparatoria cuentan con validez oficial SEP para continuar tus estudios superiores.</h4>
                        </div>
                        <div class="col-xl-4 col-sm-6 col-md-3 about-box">
                            <img class="img-responsive m-auto p-3" src="./images/inversion-asegurada.png" width="33%" alt="">
                            <span class="title text-uppercase text-center">Inversión asegurada</span>
                            <h4 class="text-dark">Aseguramos tu inversión garantizando tu acreditación, sin costos ocultos en una modalidad facil y sencilla.</h4>
                        </div>
                        <div class="col-xl-4 col-sm-6 col-md-4 about-box">
                            <img class="img-responsive m-auto p-3" src="./images/estudia-desde-casa.png" width="45%" alt="">
                            <span class="title text-uppercase text-center">Estudia desde casa</span>
                            <h4 class="text-dark">Es muy fácil terminar tus estudios de prepa desde cualquier parte de la Republica Mexicana, incluso desde el extranjero.</h4>
                        </div>
                    </div>

                    <div class="row services-section p-5" style="background-color: #0087C8;" data-scroll-index="3">
                        <div class="col-xl-12 col-sm-12 col-12 text-center">
                            <button type="button" class="btn btn-danger btn-lg mb-5">INSCRIBETE AHORA</button>
                            <h1 class="text-uppercase text-white display-6">Mira los testimoniales de nuestros egresados de diferentes ciudades de la republica.</h1>
                        </div>
                        <!-- about box start here -->
                        <div class="col-xs-12 col-sm-6 col-md-4 about-box mb-1">
                            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGrupoEducativoSEADoficial%2Fvideos%2F281178293252209%2F&show_text=false&width=560" width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 about-box mb-1">
                            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGrupoEducativoSEADoficial%2Fvideos%2F1033885583674131%2F&show_text=false&width=560" width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 about-box mb-1">
                            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGrupoEducativoSEADoficial%2Fvideos%2F2806693309354728%2F&show_text=false&width=560" width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                        </div>


                        <div class="col-xs-12 col-sm-6 col-md-4 about-box mb-1">
                            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGrupoEducativoSEADoficial%2Fvideos%2F2844744269000342%2F&show_text=false&width=560" width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 about-box mb-1">
                            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGrupoEducativoSEADoficial%2Fvideos%2F390583479053187%2F&show_text=false&width=560" width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 about-box mb-1">
                            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGrupoEducativoSEADoficial%2Fvideos%2F199357595090097%2F&show_text=false&width=560" width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                        </div>

                        <!-- about box end here -->
                    </div>
                    <div class="row text-center" style="background-color: #0351A0;">
                        <div class="container">
                            <h1 class="text-white display-4 mb-5">Elige que modalidad es la indicada para que termines tu prepa</h1>
                            <div class="row">
                                <div class="col-xl-4 col-sm-12 col-12">
                                    <img class="img-responsive m-auto" src="./images/logo-prepa-17.png" width="100%" alt="">
                                    <p></p>
                                    <a class="text-white" href="#">MÁS INFORMACIÓN</a>
                                </div>
                                <div class="col-xl-4 col-sm-12 col-12">
                                    <img class="img-responsive m-auto" src="./images/logo-prepa-express.png" width="80%" alt="">
                                    <p></p>
                                    <a class="text-white" href="#">MÁS INFORMACIÓN</a>
                                </div>
                                <div class="col-xl-4 col-sm-12 col-12">
                                    <img class="img-responsive m-auto" src="./images/logo-prepa-x-experiencia.png" width="80%" alt="">
                                    <p></p>
                                    <a class="text-white" href="#">MÁS INFORMACIÓN</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row text-center" style="background-color: #EEEEEE;" role="alert">
                        <div class="container">
                            <h1 class="text-dark display-4 mb-5">¿Por que somos la mejor opción para certificarte?</h1>
                            <div class="row">
                                <div class="col-xl-6 col-sm-12 col-12 text-left">
                                    <h3 class="text-dark"><i class="fas fa-check-circle" style="color: #0087C8;"></i> Certificado con validez oficial</h3>
                                </div>
                                <div class="col-xl-6 col-sm-12 col-12 text-left">
                                    <h3 class="text-dark"><i class="fas fa-check-circle" style="color: #0087C8;"></i> Estudia desde celular</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-sm-12 col-12 text-left">
                                    <h3 class="text-dark"><i class="fas fa-check-circle" style="color: #0087C8;"></i> Envios a toda la republica</h3>
                                </div>
                                <div class="col-xl-6 col-sm-12 col-12 text-left">
                                    <h3 class="text-dark"><i class="fas fa-check-circle" style="color: #0087C8;"></i> Contenidos siempre disponibles</h3>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-xl-6 col-sm-12 col-12 text-left">
                                    <h3 class="text-dark"><i class="fas fa-check-circle" style="color: #0087C8;"></i> Precios accesibles</h3>
                                </div>
                                <div class="col-xl-6 col-sm-12 col-12 text-left">
                                    <h3 class="text-dark"><i class="fas fa-check-circle" style="color: #0087C8;"></i> Garantia de acreditación</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row bg-img-full price-section" style="background-image: url('./images/fondo-graduados-azul-index.jpg');" data-scroll-index="4">
                        <div class="container">
                            <!-- main heading start here -->
                            <header class="main-heading row">
                                <div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center">
                                    <h1 class="text-uppercase display-2 text-white">Hazlo posible</h1>
                                    <p class="h3 text-white mb-5">Compra tu curso, termina tu prepa y mejora tu futuro</p>
                                    <div class="row">
                                        <?php

                                        $api_paquetes = file_get_contents(HTTP_HOST . "api/api.php/paquetes", true);

                                        $api_paquetes = json_decode($api_paquetes, true);

                                        //var_dump($api_paquetes);

                                        foreach ($api_paquetes as $key => $pqt) :
                                        ?>
                                            <div class="col-md-6 col-12">

                                                <div class="card">
                                                    <img class="card-img-top" src="./images/logo-prepa-express.png" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title text-primary"><?php echo $pqt['pqt_nombre'] ?></h4>
                                                        <div class="text-left">
                                                            <?php echo $pqt['pqt_descripcion'] ?>
                                                        </div>

                                                        <table class="table">
                                                            <tr>
                                                                <th>Duración</th>
                                                                <th><?php echo $pqt['pqt_duracion'] ?></th>
                                                            </tr>
                                                            <tr>
                                                                <th>Costo</th>
                                                                <?php

                                                                $incripcion = json_decode($pqt['pqt_costo'], true);


                                                                $totaPagoSemana = $incripcion['costo_semana'] * $incripcion['duracion_semana'];



                                                                $totalCurso = 0;
                                                                $totalCurso += $incripcion['costo_inscripcion'];
                                                                $totalCurso += $incripcion['costo_examen'];
                                                                $totalCurso += $incripcion['costo_guia'];
                                                                $totalCurso += $incripcion['costo_incorporacion'];
                                                                $totalCurso += $incripcion['costo_certificado'];
                                                                $totalCurso += $totaPagoSemana;

                                                                $totalCurso = number_format($totalCurso, 2);

                                                                $api_cupones = file_get_contents(HTTP_HOST . "api/api.php/cupones/" . $pqt['pqt_cupon_default'], true);

                                                                $api_cupones = json_decode($api_cupones, true);

                                                                $cupones = json_decode($api_cupones['cps_descuento_pagos']);



                                                                ?>
                                                                <th><?php echo '<s> $ ' . $totalCurso . ' MXN </s>' ?></th>
                                                            </tr>
                                                            <tr>

                                                                <th class="text-success">
                                                                    Total - Descuento
                                                                </th>
                                                                <th>
                                                                    <?php

                                                                    $totalCurso_ = str_replace(",", "", $totalCurso);
                                                                    $descuento = $totalCurso_ - ($totalCurso_ * $cupones[0] / 100);
                                                                    $descuento = ceil($descuento / 1);
                                                                    echo '<span class="text-primary"> $ ' . number_format($descuento, 2) . ' MXN </span>';

                                                                    ?>
                                                                </th>

                                                            </tr>
                                                            <tr>

                                                                <td colspan="2"><button type="button" class="btn btn-primary btn-block btnInteres" pqt_nombre="<?php echo $pqt['pqt_nombre'] ?>" pqt_id="<?php echo $pqt['pqt_sku'] ?>" data-toggle="modal" data-target="#mdlInscripcion">REGISTRARME</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><span>Registrate ahora y recibe una beca de hasta el <?php echo $cupones[0]  ?>% DCTO</span></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </header>
                            <!-- main heading end here -->
                        </div>
                    </div>
                    <div class="row" style="background-color: #0351A0;">
                        <div class="container text-center">
                            <h1 class="text-uppercase display-3 text-white">¡Unete a los miles de estudiantes que lo hicieron posible</h1>
                            <p class="h2 text-white mb-5">Nuestros egresados opinan</p>
                            <div class="row p-5">
                                <div class="col-xl-4 col-sm-12 col-12 text-dark">
                                    <div class="card">
                                        <img class="img-responsive" src="./images/banner_sead_3.png" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title"><i>-Dylan Salas</i></h4>
                                            <p class="card-text"><i>Muy buena atención y super recomendado por si les interesa terminar sus estudios.</i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-12 col-12 text-dark">
                                    <div class="card">
                                        <img class="img-responsive" src="./images/banner_sead_3.png" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title"><i>-Dylan Salas</i></h4>
                                            <p class="card-text"><i>Muy buena atención y super recomendado por si les interesa terminar sus estudios.</i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-12 col-12 text-dark">
                                    <div class="card">
                                        <img class="img-responsive" src="./images/banner_sead_3.png" alt="">
                                        <div class="card-body">
                                            <h4 class="card-title"><i>-Dylan Salas</i></h4>
                                            <p class="card-text"><i>Muy buena atención y super recomendado por si les interesa terminar sus estudios.</i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center p-5" style="background-color: #EEEEEE;">
                        <div class="col-xl-2 col-sm-12 col-12">
                            <img class="img-responsive m-auto" src="./images/logo-sep.png" width="100%" alt="">
                        </div>
                        <div class="col-xl-2 col-sm-12 col-12">
                            <img class="img-responsive m-auto" src="./images/Logo_de_la_Policia_Federal.png" width="50%" alt="">
                        </div>
                        <div class="col-xl-2 col-sm-12 col-12">
                            <img class="img-responsive m-auto" src="./images/logo-semar.png" width="100%" alt="">
                        </div>
                        <div class="col-xl-2 col-sm-12 col-12">
                            <img class="img-responsive m-auto" src="./images/logo-armada.png" width="50%" alt="">
                        </div>
                        <div class="col-xl-2 col-sm-12 col-12">
                            <img class="img-responsive m-auto" src="./images/logo-pemex.png" width="50%" alt="">
                        </div>
                        <div class="col-xl-2 col-sm-12 col-12">
                            <img class="img-responsive m-auto" src="./images/logo-cfe.png" width="100%" alt="">
                        </div>
                    </div>
                    <div class="row" style="background-color: #031568;">
                        <div class="col-xl-12 col-sm-12 col-12 text-center text-white">
                            <h4>Grupo Educativo SEAD Copyright &copy; 2021. Todos los derechos reservados. Aviso de privacidad | Terminos y condiciones.</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <span id="back-top" class="fa fa-angle-up main-bg-color"></span>
    <div class="popup-holder">
        <div id="popup1" class="lightbox">
            <!-- quote form start here -->
            <section class="quote-form" style="background-image: url(images/img02.jpg);">
                <h2 class="form-heading text-center text-uppercase">register now</h2>
                <span class="form-title text-center">Take your free trial</span>
                <form id="contactForm" data-toggle="validator">
                    <fieldset>
                        <div class="form-group">
                            <input type="text" id="name" placeholder="Your Name" class="form-control" required data-error="NEW ERROR MESSAGE">
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" placeholder="Your Email" class="form-control" required data-error="NEW ERROR MESSAGE">
                        </div>
                        <div class="form-group">
                            <input type="tel" id="phone" placeholder="Phone Number" class="form-control" required data-error="NEW ERROR MESSAGE">
                        </div>
                        <div id="msgSubmit" class="form-message hidden"></div>
                        <span class="info"><i class="fa fa-info-circle main-color" aria-hidden="true"></i> We will never share your personal info</span>
                        <button class="btn btn-default main-bg-color" type="submit" id="form-submit">GET A QUOTE</button>
                    </fieldset>
                </form>
            </section>
            <!-- quote form end here -->
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/plugins.js" defer></script>
    <script src="js/jquery.main.js" defer></script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <center>
                            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FGrupoEducativoSEADoficial%2Fvideos%2F437901364220188%2F&show_text=true&width=560" width="560" height="429" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="mdlInscripcion" tabindex="-1" aria-labelledby="mdlInscripcionLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mdlInscripcionLabel">ESTOY INTERESADO(A) EN <strong class="text-primary text-interes"></strong> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <form method="POST">
                            <fieldset>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <input type="text" id="_usr_nombre" name="usr_nombre" required placeholder="Nombre(s)" class="form-control">
                                    </div>
                                    <div class="form-group col-6">
                                        <input type="text" id="_usr_app" name="usr_app" required placeholder="Apellido parterno" class="form-control">
                                    </div>
                                    <div class="form-group col-6">
                                        <input type="text" id="_usr_apm" name="usr_apm" required placeholder="Apellido meterno" class="form-control">
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="email" id="_usr_correo" name="usr_correo" required placeholder="Correo electrónico" class="form-control">
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="password" id="_usr_clave" name="usr_clave" required placeholder="Contraseña" class="form-control">
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="tel" id="_usr_telefono" name="usr_telefono" required placeholder="Número de teléfono" class="form-control">
                                        <input type="hidden" id="pqt_id" name="usr_pqt_interes_sku">
                                        <input type="hidden" id="pqt_nombre" name="usr_pqt_interes_nombre">
                                    </div>
                                    <div id="msgSubmit" class="form-message hidden"></div>
                                    <!-- <span class="info"><i class="fa fa-info-circle main-color" aria-hidden="true"></i> We will never share your personal info</span> -->
                                    <div class="form-group col-12">
                                        <button class="btn btn-default main-bg-color float-right" type="submit" id="form-submit" name="btnRegistro">REGISTRARME</button>
                                    </div>
                                </div>
                            </fieldset>
                            <?php
                            $registro = new RegistroControlador();
                            $registro->ctrRegistroAlumno();
                            ?>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
    $(".btnInteres").on("click", function() {

        $(".text-interes").html($(this).attr("pqt_nombre").toUpperCase())
        $("#pqt_nombre").val($(this).attr("pqt_nombre"))
        $("#pqt_id").val($(this).attr("pqt_id"))
    })
</script>