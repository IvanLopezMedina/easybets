<?php 
session_start();
include('conexion.php');
$db=new mysqli($servidor, $usuari, $clau, $bbdd);
if(!isset($_SESSION["mail"])){
        header('location:login.php');
    }else{
        include('informaciobasica.php');
        $query="SELECT * from CompteBancari WHERE ref_usuari = '$id_Usuari'";
        $db->query($query);
        $id_res = $db->query($query);
        while($row = mysqli_fetch_array($id_res)){
            $numero = $row['numero'];
        }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>EasyBets - Web de apuestas deportivas online</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Loading Fonts-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
    
    <!--Loading css-->
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <link type="text/css" rel="stylesheet" href="styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="styles/jquery.news-ticker.css">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">  
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
                    <div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left text-white">Noticias:</span>
                        <ul id="news-update" class="ticker list-unstyled">
<?php
        $query="SELECT * from Noticias";
        $db->query($query);
        $id_res = $db->query($query);
        $c=0;
        while($row = mysqli_fetch_array($id_res)){
            $titular= $row["titulo"];
            $categoria = $row["categoria"];
            echo $categoria;
            $cuerpo = $row["cuerpo"];
            echo "<li>".$titular." - ".$categoria.": ". $cuerpo ."</li>"
            ;
        }
?>
                        </ul>
                    </div>
                    <ul class="nav navbar navbar-top-links navbar-right mbn">
                        <?php
                        if ($premium == 1){ ?>
                        <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-star-o"></i><span >Premium</span></a>
                        </li> <?php
                        }else{?>
                        <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class=""></i><span >No-Premium</span></a>
                        </li> <?php   
                        }?>
                        <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"></span><?php echo $coins."  "?><img src="images/gallery/gold.png"></a>
                        </li>
                        <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="images/avatar/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs" id="user"><?php echo $usuari ?></span>&nbsp;<span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-user pull-right">
                                <li><a href="modify.php"><i class="fa fa-user"></i>Mi cuenta</a></li>
                                <li><a href="calendario.php"><i class="fa fa-calendar"></i>Calendario</a></li>
                                <li><a href="rankings.php"><i class="fa fa-trophy"></i>Rankings</a></li>
                                <li class="divider"></li>
                                <li><a href="logout.php"><i class="fa fa-key"></i>Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--END TOPBAR -->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                     <div class="clearfix"></div>
                    <li ><a href="index.php"><i class="fa fa-ellipsis-v fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Principal</span></a></li>
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
                    </i><span class="menu-title">Datos Bancarios</span></a>
                    </li>
                   <li class="active"><a href="canjear.php"><i class="fa fa-ticket fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Canjear coins</span></a>
                    </li>
                   <li><a href="faq.php"><i class="fa fa-support fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">F.A.Q.</span></a>
                    </li>
                    <li><a href="contacto.php"><i class="fa fa-group fa-fw">
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
                            Canjear Coin por Euro</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="index.php">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Futbol</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Futbol</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                    <?php
                    if (isset($_POST['convertir'])){
                        $coinsdadas = $_POST['movedor'];
                        $euros = $_POST['euroshidden'];
                        $restacoins = $coins - $coinsdadas;
                        if (!empty($numero)){
                        $queryI= "Update Usuaris SET Coins =  $restacoins where Correu = '$user'";
                        if(mysqli_query($db,$queryI)){
                            echo "<b>Llamada al TPV para transacción bancaria. <br>Coins actualizadas</b></br>";
                            ?><script>alert("Conversión Satisfactoria");window.location = "canjear.php"</script>;<?php
                        }else{
                            echo "Problemas al adquirir el premio</br>";
                            echo "Error: ".mysqli_error($db); 
                        }
                    }else{
                        ?><script> alert('Debe tener una cuenta bancaria válida para procesar la operación'); window.location = 'change.php'</script> <?php
                    }
                    }else{
                     echo "La conversión utiliza la siguiente formula: <br><b>(Número de Coins / 10000) - (Número de Coins / 10000  * 15/100)</b><br>";
                     $euros = ($coins/10000) - ($coins/10000 * 0.15);
                     echo "<form name='apuesta' class='form-horizontal' role='form' enctype='multipart/form-data' action='canjear.php' method='POST'>";
                    //Recorre y muestra 
                        //Abrir script para aumentar o disminuir
                     if ($coins < 300000){
                        echo "<p style='color:red'>Necesitas 300.000 coins mínimo para utilizar esta función</p>";
                     }else{
                        echo '<h4>Cantidad a convertir</h4><div class="form-row col-sm-4"><div class="input-group"><span class="input-group-addon">Coins</span><input type="number"  name="movedor" id="movedor" class="form-control currency" min="300000" value ="300000" max="' . $row['Coins'] . '" onchange="editarbarra2(this.value);show_value3(this.value)"></div><div class="input-group"><span class="input-group-addon">Euros</span><span id="valoracion" name="valoracion" class="form-control currency">25.5</span><input type="hidden" name="euroshidden" id="euroshidden" value="25.5"/></div></div>';
                        echo'<div class="range range-primary col-sm-10"><p id="slider_value2" " style="color:green;font-weight:bold;"></p>Coins Mínimos: 300000<input class="bar" id="barra" type="range" min="300000" max="' . $coins . '" step="1" name="coins" value="100" onmousemove="show_value3(this.value)">Coins disponibles: ' . $coins . '<input type="hidden" name="id_Usuari" value=' . $id_Usuari . '></div></div>';
                    echo "<input type='submit' class='btn-lg col-lg-4 btn btn-primary' name='convertir' value='Convertir a Euros'>";
                    echo "</form>";
                }
                }
                     ?>
                </div>


<!-- Bootstrap FAQ - END -->
</div>
                            
                    <div class="sr-only" id="area-chart-spline"></div>
                
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
<div class="sr-only" id="area-chart-spline"></div>
                <footer class="footer-distributed">

            <div class="footer-left">

                <h3>Easy<span>Bets</span></h3>

                <p class="footer-links">
                    <a href="index.php">Inicio</a>
                    ·
                    <a href="#">Terminos y condiciones</a>
                    ·
                    <a href="#">Sobre Nosotros</a>
                    ·
                    <a href="faq.php">FAQ</a>
                    ·
                    <a href="contacto.php">Contacto</a>
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
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
    <script src="script/holder.js"></script>
    <script src="script/responsive-tabs.js"></script>
    <script src="script/jquery.flot.js"></script>
    <script src="script/index.js"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <!--CORE JAVASCRIPT-->
    <script src="script/main.js"></script>
</body>
</html>
<?php
}
?>
