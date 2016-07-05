<?php
session_start();
if(isset($_SESSION["mail"])){
        header('location:index.php');
    }else{

    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login</title>
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
    <script src="js/script.js"></script>
</head>
<body style="background: url('images/bg/bg.jpg') fixed center; background-size:cover">
    <div  class="page-form"><br><br>
        <div style="opacity:0.9" class="panel panel-blue">
            <div class="panel-body pan">
            <!--Acces.html-->
                <form name="form" class="form-horizontal" method="POST" action="login.php">
                <div class="form-body pal">
                    <div class="col-md-12 text-center">
                        <img style="width:100%" src="images/gallery/logo1.png"><br><br><br><br>
                    </div>
                    <div class="form-group">

                        <label for="email" class="col-md-3 control-label">
                            Email:</label>
                        <div class="col-md-9">
                            <div class="input-icon right">
                                <i class="fa fa-user"></i>
                                <input id="email" name="email" type="text" placeholder="Introduzca su correo" autofocus class="form-control" required/></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">
                            Contraseña:</label>
                        <div class="col-md-9">
                            <div class="input-icon right">
                                <i class="fa fa-lock"></i>
                                <input id="password" name="password" type="password" placeholder="Contraseña" class="form-control" required/></div>
                        </div>
                    </div>
                    <div class="form-group mbn">
                        <div class="col-lg-12" align="right">
                            <div class="form-group mn">
                                <div class="col-lg-3">
                                    &nbsp;
                                </div>
                                <div class="col-lg-9">
                                    <a href="login.php" class="btn btn-default">Volver atrás</a>&nbsp;&nbsp;
                                    <button onclick="login()" type="button" name="enviar" class="btn btn-default">
                                        Acceder</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <span id="add"></span>
                        </div>
            <div class="col-lg-12 text-center">
            <p>
             <a href="registro.php" >Registro</a>
             <span>|</span>
              <a href="remember.php">Recordar Contraseña</a>
            </p>

            </div>
        </div>
        </div>
        </div>
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
<?php
    
    }
?>
</body>
</html>
