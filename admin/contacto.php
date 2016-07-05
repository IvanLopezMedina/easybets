<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>EasyBets - Web de apuestas deportivas online</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="styles/animate.css">
    <link type="text/css" rel="stylesheet" href="styles/all.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <link type="text/css" rel="stylesheet" href="styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="styles/pace.css">
    <link type="text/css" rel="stylesheet" href="styles/jquery.news-ticker.css">
        <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
</head>
<body>
    <div>
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="index.php" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">EasyBets</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                    <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Buscar" class="form-control text-white"/></div>
                </form>
                <div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left text-white">Noticias:</span>
                    <ul id="news-update" class="ticker list-unstyled">
                        <li>Bienvenido a EasyBets, tu web de apuestas.</li>
                        <li>El Barcelona gana su 28ª Copa del Rey tras vencer al Sevilla (2-0) en la prórroga.</li>
                        <li>El Sevilla gana su quinta Europa League aplastando al Liverpool.</li>
                    </ul>
                </div>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-green" id="alerts">3</span></a>
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-envelope fa-fw"></i><span class="badge badge-orange" id="messsages">7</span></a>
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="   fa fa-circle-o"></i><span class="badge badge-yellow"></span>Tus coins</a>
                    </li>
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="images/avatar/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs" id="user">Usuario</span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="modify.php"><i class="fa fa-user"></i>Mi cuenta</a></li>
                            <li><a href="calendario.php"><i class="fa fa-calendar"></i>Calendario</a></li>
                            <li><a href="estadisticas.php"><i class="fa fa-area-chart"></i>Estadisticas<span class="badge badge-success" id="CountApu">Count</span></a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                     <div class="clearfix"></div>
                    <li ><a href="index.php"><i class="fa fa-ellipsis-v fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Dashboard</span></a></li>
                    <li><a href="eventos.php"><i class="fa fa-flag-checkered fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Eventos</span></a>
                      <ul class="nav nav-pills nav-stacked";>
                        <li class="active"><a href="futbol.php">
                        <div class="icon-bg bg-orange"></div><i class="fa fa-life-ring"></i>
                        <span class="menu-title ">Fútbol</span></a></li>
                      </ul>
                      <ul  class="nav nav-pills nav-stacked">
                        <li class="active"><a href="tennis.php">
                        <div class="icon-bg"></div><i class="fa fa-circle-o"></i>
                        <span class="menu-title">Tennis</span></a></li>
                      </ul>
                      <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="basquet.php">
                        <div class="icon-bg bg-orange"></div><i class="fa  fa-dribbble"></i>
                        <span class="menu-title">Básquet</span></a></li>
                      </ul>
                    </li>

                    <li><a href="calendario.php"><i class="fa fa-calendar fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Calendario Deportivo</span></a>
                    </li>
                    <li><a href="livescores.php"><i class="fa fa-trophy fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Resultados en directo</span></a>
                    </li>
                    <li><a href="gift.php"><i class="fa fa-gift fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Premios</span></a>
                    </li>
                    <li><a href="shop.php"><i class="fa fa-shopping-cart fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Tienda</span></a>
                    </li>
                 <li><a href="change.php"><i class="fa fa-credit-card fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Solicitar coins</span></a>
                    </li>
                   <li><a href="canjear.php"><i class="fa fa-ticket fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Canjear coins</span></a>
                    </li>
                   <li><a href="faq.php"><i class="fa fa-support fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">F.A.Q</span></a>
                    </li>
                    <li class="active"><a href="contacto.php"><i class="fa fa-group fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Contacto</span></a>
                    </li>
                </ul>
            </div>
        </nav>
            <!--END SIDEBAR MENU-->
            <!--BEGIN CHAT FORM-->
            
            <!--END CHAT FORM-->
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="container">
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Contacto</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="index.php">Inicio</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="contacto.php">Contacto</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Contacto</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">
                                Nombre</label>
                            <div class="input-group">
                                <span class="input-group-addon"><img src="images/icons/usericon.png"></img>
                                </span>
                                <input type="email" class="form-control" id="nombre" placeholder="Introduce tu nombre" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Dirección de correo</label>
                            <div class="input-group">
                                <span class="input-group-addon"><img src="images/icons/mailicon.png"></img>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Introduce tu correo" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Asunto</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Escoja una:</option>
                                <option value="acceso">No puedo acceder a mi cuenta</option>
                                <option value="coins">Me han desaparecido coins</option>
                                <option value="producto">No me llega un producto</option>
                                <option value="otros">Otros</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Mensaje</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Enviar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>



<!-- Bootstrap FAQ - END -->

</div>  
                            
                    <div class="sr-only" id="area-chart-spline"></div>
                </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                </div>
                <footer class="footer-distributed">

            <div class="footer-left">

                <h3>Easy<span>Bets</span></h3>

                <p class="footer-links">
                    <a href="#">Inicio</a>

                    ·
                    <a href="#">Terminos y condiciones</a>
                    ·
                    <a href="#">Sobre Nosotros</a>
                    ·
                    <a href="#">FAQ</a>
                    ·
                    <a href="#">Contacto</a>
                </p>

                <p class="footer-company-name">EasyBets &copy; 2016</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Calle Falsa nº 123</span> Barcelona, España</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+34 117260988</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:contacto@easybets.com">contacto@easybets.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>Sobre la compañia</span>
                    EasyBets és una casa de apuestas deportivas online, con gran variedad de deportes y premios reales.
                </p>

                <div class="footer-icons">

                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                    <a href="#"><span class="fa fa-github"></span></a>

                </div>

            </div>

        </footer>
                <!--END FOOTER-->
                        <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src="script/jquery-1.10.2.min.js"></script>
    <script src="script/jquery-migrate-1.2.1.min.js"></script>
    <script src="script/jquery-ui.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/bootstrap-hover-dropdown.js"></script>
    <script src="script/html5shiv.js"></script>
    <script src="script/respond.min.js"></script>
    <script src="script/jquery.metisMenu.js"></script>
    <script src="script/jquery.slimscroll.js"></script>
    <script src="script/jquery.cookie.js"></script>
    <script src="script/icheck.min.js"></script>
    <script src="script/custom.min.js"></script>
    <script src="script/jquery.news-ticker.js"></script>
    <script src="script/jquery.menu.js"></script>
    <script src="script/pace.min.js"></script>
    <script src="script/holder.js"></script>
    <script src="script/responsive-tabs.js"></script>
    <script src="script/jquery.flot.js"></script>
    <script src="script/jquery.flot.categories.js"></script>
    <script src="script/jquery.flot.pie.js"></script>
    <script src="script/jquery.flot.tooltip.js"></script>
    <script src="script/jquery.flot.resize.js"></script>
    <script src="script/jquery.flot.fillbetween.js"></script>
    <script src="script/jquery.flot.stack.js"></script>
    <script src="script/jquery.flot.spline.js"></script>
    <script src="script/zabuto_calendar.min.js"></script>
    <script src="script/index.js"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src="script/highcharts.js"></script>
    <script src="script/data.js"></script>
    <script src="script/drilldown.js"></script>
    <script src="script/exporting.js"></script>
    <script src="script/highcharts-more.js"></script>
    <script src="script/charts-highchart-pie.js"></script>
    <script src="script/charts-highchart-more.js"></script>
    <!--CORE JAVASCRIPT-->
    <script src="script/main.js"></script>
</body>
</html>

