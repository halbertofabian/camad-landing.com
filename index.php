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



</head>

<body>
    <div id="wrapper">
        <!-- <div class="loader-container" id="loader">
            <div class="holder">
                <div class="la-line-scale la-2x">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div> -->
        <!-- header of the page start here -->
        <header id="header" class="dark-bg" data-scroll-index="0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <!-- header logo -->
                        <div class="logo pull-left">
                            <a href="<?php echo HTTP_HOST ?>">
                                <img src="<?php echo HTTP_HOST ?>images/logo_sead_2.png" alt="Logo sead" class="img-responsive" width="200">
                            </a>
                        </div>
                        <a href="#" class="nav-opener pull-right"><i class="fa fa-bars" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-xs-12 col-sm-8">
                        <!-- top list -->
                        <ul class="list-inline text-right top-list">
                            <li>
                                <i class="fa fa-envelope main-color"></i>
                                <strong>Contacto :</strong>
                                <a href="mailto: info@camad.edu.mx"> info@camad.edu.mx</a>
                            </li>
                            <li>
                                <i class="fa fa-phone main-color"></i>
                                <strong>Teléfono :</strong>
                                <a href="tel:8331304192">8331304192</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- page navigation start here -->
            <nav id="nav">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="nav-list list-inline">
                                <li><a href="#" data-scroll-nav="0" class="smooth">Inicio</a></li>
                                <li><a href="#" data-scroll-nav="2" class="smooth">Acerca de</a></li>
                                <li><a href="#" data-scroll-nav="3" class="smooth">Testimonios</a></li>
                                <li><a href="#" data-scroll-nav="4" class="smooth">Paquetes</a></li>
                                <li><a href="mailto:Mail@Example.com">Contacto</a></li>
                                <li><a href="#" class="text-danger" style="color:crimson" data-toggle="modal" data-target="#exampleModal">ESTAMOS EN VIVO</a></li>

                                <!-- <li class="button"><a href="#" class="btn btn-default main-bg-color text-uppercase smooth" data-scroll-nav="1">Iniciar sesión</a></li> -->
                                <li class="button"><a href="<?php echo HTTP_HOST_APP ?>" class="btn btn-default main-bg-color text-uppercase ">Iniciar sesión</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- page navigation end here -->
        </header>
        <!-- header of the page end here -->
        <!-- main content wrapping section start here -->
        <main id="main">
            <!-- main banner section start here -->
            <section class="bg-img-full main-banner bg-img-parallax" style="background-image: url('./images/banner_sead_2.png');" data-scroll-index="0">
                <span class="overlay"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-7">
                            <span class="title">Termina tus estudios medio superior con validez oficial SEP</span>
                            <h1 class="heading text-uppercase">Termina tu <span class="main-color">prepa en un examen</span></h1>
                            <span class="divider white"></span>
                            <div class="btn-holder">
                                <a href="#" class="btn btn-default main-bg-color text-uppercase" data-scroll-nav="2">Más información</a>
                            </div>
                            <span class="arrow" style="background-image: url(images/arrow.png);"></span>
                        </div>
                        <!-- <div class="col-xs-12 col-sm-6 col-md-5">
                          
                            <section class="quote-form" style="background-image: url(images/img02.jpg);" data-scroll-index="1">
                                <h2 class="form-heading text-center text-uppercase">Inscribete ahora</h2>
                                <span class="form-title text-center">100% ONLINE</span>
                                <form id="contactForm" data-toggle="validator">
                                    <fieldset>
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <input type="text" id="usr_nombre" placeholder="Nombre(s)" class="form-control" required data-error="NEW ERROR MESSAGE">
                                            </div>
                                            <div class="form-group col-6">
                                                <input type="text" id="usr_app" placeholder="Apellido parterno" class="form-control" required data-error="NEW ERROR MESSAGE">
                                            </div>
                                            <div class="form-group col-6">
                                                <input type="text" id="usr_app" placeholder="Apellido meterno" class="form-control" required data-error="NEW ERROR MESSAGE">
                                            </div>
                                            <div class="form-group col-12">
                                                <input type="email" id="usr_correo" placeholder="Correo electrónico" class="form-control" required data-error="NEW ERROR MESSAGE">
                                            </div>
                                            <div class="form-group col-12">
                                                <input type="password" id="usr_clave" placeholder="Contraseña" class="form-control" required data-error="NEW ERROR MESSAGE">
                                            </div>
                                            <div class="form-group col-12">
                                                <input type="tel" id="usr_telefono" placeholder="Número de teléfono" class="form-control" required data-error="NEW ERROR MESSAGE">
                                            </div>
                                            <div id="msgSubmit" class="form-message hidden"></div>
                                            
                                            <div class="form-group col-12">
                                                <button class="btn btn-default main-bg-color float-right" type="submit" id="form-submit">REGISTRARME</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </section>
                        </div> -->
                    </div>
                </div>
            </section>
            <!-- main banner section end here -->
            <!-- about section start here -->
            <section class="about-section pad-top-lg" data-scroll-index="2">
                <div class="container">
                    <!-- main heading start here -->
                    <header class="main-heading row">
                        <div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center">
                            <h2 class="heading text-uppercase"><span class="main-color">Conócenos</span> </h2>
                            <span class="divider center"></span>
                            <p>Somos una Institución dedicada a la educación, con validez oficial ante la Secretaria de Educación Publica, para adultos, trabajadores, padres o madres de familia y/o personas que dejaron sus estudios inconclusos y que desean continuar sus estudios superiores (llámese, Licenciatura o Ingeniería). </p>
                        </div>
                    </header>
                    <div class="row">
                        <!-- about box start here -->
                        <div class="col-xs-12 col-sm-6 col-md-3 about-box">
                            <span class="title text-uppercase">Experiencia</span>
                            <!-- <span class="title text-uppercase">Experiencia</span> -->
                            <span class="divider"></span>
                            <p>Contamos con experiencia en el ramo de la educación medio superior.</p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 about-box">
                            <span class="title text-uppercase">Precios Accesibles</span>
                            <!-- <span class="title text-uppercase">Experiencia</span> -->
                            <span class="divider"></span>
                            <p>Nuestros precios de modalidad online son justos y además te damos facilidades de pagos.</p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 about-box">
                            <span class="title text-uppercase">Educación</span>
                            <!-- <span class="title text-uppercase">Experiencia</span> -->
                            <span class="divider"></span>
                            <p>Hoy en día la Preparatoria prácticamente es la educación mínima básica.</p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 about-box">
                            <span class="title text-uppercase">Avanza</span>
                            <!-- <span class="title text-uppercase">Experiencia</span> -->
                            <span class="divider"></span>
                            <p>Continuar tus estudios y certificarte te permite tener mejores oportunidades.</p>
                        </div>
                        <!-- about box end here -->
                        <!-- about box start here -->
                        <!-- <div class="col-xs-12 col-sm-6 col-md-3 about-box">
                            <span class="title text-uppercase">02.</span>
                            <span class="title text-uppercase">our vision</span>
                            <span class="divider"></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust...</p>
                            <a href="#" class="more main-color text-uppercase">READ MORE...</a>
                        </div> -->
                        <!-- about box end here -->
                        <!-- about box start here -->
                        <!-- <div class="col-xs-12 col-sm-6 col-md-3 about-box">
                            <span class="title text-uppercase">03.</span>
                            <span class="title text-uppercase">Our mission</span>
                            <span class="divider"></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust...</p>
                            <a href="#" class="more main-color text-uppercase">READ MORE...</a>
                        </div> -->
                        <!-- about box end here -->
                        <!-- about box start here -->
                        <!-- <div class="col-xs-12 col-sm-6 col-md-3 about-box">
                            <span class="title text-uppercase">04.</span>
                            <span class="title text-uppercase">our process</span>
                            <span class="divider"></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust...</p>
                            <a href="#" class="more main-color text-uppercase">READ MORE...</a>
                        </div> -->
                        <!-- about box end here -->
                    </div>
                </div>
            </section>
            <!-- about section end here -->
            <!-- counter section start here -->
            <!-- <div class="counter-section text-center bg-img-full pad-top-lg pad-bottom-lg" style="background-image: url(images/img04.jpg);" data-scroll-index="2">
                <div class="container pad-top-xs">
                    <div class="row">
                        <div class="co-xs-12 col-sm-3 pad-bottom-xs">
                            <span class="counter main-color">246</span>
                            <span class="txt text-uppercase">clients</span>
                        </div>
                        <div class="co-xs-12 col-sm-3 pad-bottom-xs">
                            <span class="counter main-color">390</span>
                            <span class="txt text-uppercase">coffee</span>
                        </div>
                        <div class="co-xs-12 col-sm-3 pad-bottom-xs">
                            <span class="counter main-color">56</span>
                            <span class="txt text-uppercase">Awards</span>
                        </div>
                        <div class="co-xs-12 col-sm-3 pad-bottom-xs">
                            <span class="counter main-color">470</span>
                            <span class="txt text-uppercase">Brand</span>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- counter section end here -->
            <!-- services section starts here -->

            <section class="services-section pad-top-lg" data-scroll-index="3">
                <div class="container">
                    <!-- main heading start here -->
                    <header class="main-heading row">
                        <div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center">
                            <h2 class="heading text-uppercase"><span class="main-color">Testimonios</span> </h2>
                            <span class="divider center"></span>
                            <p>Conoce los testimoniales de nuestros Egresados.</p>
                        </div>
                    </header>
                    <div class="row">
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
                    <div class="row">
                        <div class="col-12">
                            <a href="#" class="btn btn-default btn-block main-bg-color text-uppercase smooth" data-scroll-nav="1">QUIERO REGISTRARME AHORA</a>

                        </div>
                    </div>
                </div>
            </section>
            <!-- services section end here -->
            <!-- price section start here -->
            <section class="bg-img-full price-section pad-top-lg" style="" data-scroll-index="4">
                <div class="container">
                    <!-- main heading start here -->
                    <header class="main-heading row">
                        <div class="col-xs-12 col-sm-10 col-sm-push-1 col-lg-8 col-lg-push-2 text-center">
                            <h2 class="heading text-uppercase"><span class="main-color">Nuestros paquetes</span> </h2>
                            <span class="divider center"></span>
                            <div class="row">
                                <?php

                                $api_paquetes = file_get_contents(HTTP_HOST . "api/api.php/paquetes", true);

                                $api_paquetes = json_decode($api_paquetes, true);

                                //var_dump($api_paquetes);

                                foreach ($api_paquetes as $key => $pqt) :
                                ?>
                                    <div class="col-md-6 col-12">

                                        <div class="card">

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
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <!-- price box start here -->
                            <!-- <div class="price-box">
                                <header class="header">
                                    <strong class="title text-uppercase">Startup</strong>
                                    <span class="price-txt">
                                        <span class="price main-color">$125</span>
                                        <span class="txt"> / Month</span>
                                    </span>
                                    <p>Best package for small awesome team</p>
                                </header>
                                <div class="box">
                                    <h3 class="text-uppercase">Small awesome team</h3>
                                    <span class="divider"></span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust...</p>
                                    <a href="#popup1" class="order text-uppercase lightbox">order now...</a>
                                </div>
                            </div> -->
                            <!-- price box end here -->
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <!-- price box start here -->
                            <!-- <div class="price-box">
                                <header class="header">
                                    <strong class="title text-uppercase">personal</strong>
                                    <span class="price-txt">
                                        <span class="price main-color">$225</span>
                                        <span class="txt"> / Month</span>
                                    </span>
                                    <p>Best package for single people</p>
                                </header>
                                <div class="box">
                                    <h3 class="text-uppercase">single people User</h3>
                                    <span class="divider"></span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust...</p>
                                    <a href="#popup1" class="order text-uppercase lightbox">order now...</a>
                                </div>
                            </div> -->
                            <!-- price box end here -->
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <!-- price box start here -->
                            <!-- <div class="price-box">
                                <header class="header">
                                    <strong class="title text-uppercase">Business</strong>
                                    <span class="price-txt">
                                        <span class="price main-color">$325</span>
                                        <span class="txt"> / Month</span>
                                    </span>
                                    <p>Best package for big awesome team</p>
                                </header>
                                <div class="box">
                                    <h3 class="text-uppercase">big awesome team</h3>
                                    <span class="divider"></span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indust...</p>
                                    <a href="#popup1" class="order text-uppercase lightbox">order now...</a>
                                </div>
                            </div> -->
                            <!-- price box end here -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- price section end here -->
            <!-- quote section start here -->
            <section class="bg-img-full bg-img-parallax quote-section pad-top-lg pad-bottom-lg" style="background-image: url(./images/banner_sead_3.png);">
                <span class="overlay"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-cs-12 col-sm-10 col-lg-8 col-sm-push-1 col-lg-push-2 text-center">
                            <span class="subtitle">Termina tus estudios medio superior con validez oficial SEP</span>
                            <h2 class="main-color text-uppercase">Prepa en 1 exámen</h2>
                            <span class="divider white center"></span>
                            <p>En nuestra modalidad online flexible puedes estudiar desde casa y presentar el examen totalmente en línea.</p>
                            <button class="btn btn-default main-bg-color text-uppercase smooth" data-scroll-nav="1">REGISTRARME</button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- quote section end here -->
        </main>
        <!-- main content wrapping section end here -->
        <!-- footer of the page start here -->
        <footer id="footer" class="dark-bg pad-top-xs pad-bottom-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <!-- footer logo -->
                        <div class="logo pull-left">
                            <a href="<?php echo HTTP_HOST ?>">
                                <img src="images/logo_sead_2.png" alt="logo sead " class="img-responsive" width="200">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8">
                        <!-- top list -->
                        <ul class="list-inline text-right top-list">
                            <li>
                                <i class="fa fa-envelope main-color"></i>
                                <strong>Contacto:</strong>
                                <a href="mailto:info@camad.edu.mx">info@camad.edu.mx</a>
                            </li>
                            <li>
                                <i class="fa fa-phone main-color"></i>
                                <strong>Télefono :</strong>
                                <a href="tel:8331304192">8331304192</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!-- footer bottom container -->
                    <div class="col-xs-12 col-sm-6 bottom">
                        <p>2021 © SEAD. All rights reserved.</p>
                    </div>
                    <!-- footer bottom container -->
                    <div class="col-xs-12 col-sm-6 bottom">
                        <ul class="list-inline text-right mt-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer of the page end here -->
        <!-- Back Top of the page -->
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