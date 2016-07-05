<?php 
session_start();
include('conexion.php');
$db=new mysqli($servidor, $usuari, $clau, $bbdd);
if(!isset($_SESSION["mail"])){
        header('location:login.php');
    }else{
        include('informaciobasica.php');
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
    <!--AÑADIDO Y DUPLICADOS-->
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
            <script src="js/script.js"></script>
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
                            <li>Bienvenido a EasyBets, tu web de apuestas.</li>
                            <li>El Barcelona gana su 28ª Copa del Rey tras vencer al Sevilla (2-0) en la prórroga.</li>
                            <li>El Sevilla gana su quinta Europa League aplastando al Liverpool.</li>
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
                                <li><a href="estadisticas.php"><i class="fa fa-area-chart"></i>Estadisticas<span class="badge badge-success" id="CountApu">Count</span></a></li>
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
                                <li class="active"><a href="index.php"><i class="fa fa-ellipsis-v fa-fw">
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
                                        </i><span class="menu-title">Solicitar coins</span></a>
                                </li>
                                <li><a href="canjear.php"><i class="fa fa-ticket fa-fw">
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
                                        Apuesta</div>
                                </div>
                                <ol class="breadcrumb page-breadcrumb pull-right">
                                    <li><i class="fa fa-home"></i>&nbsp;<a href="index.php">Inicio</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                                    <li class="hidden"><a href="#">Apuesta</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                                    <li class="active">Apuesta</li>
                                </ol>
                                <div class="clearfix">
                                </div>
                            </div>
                            <!--END TITLE & BREADCRUMB PAGE-->
                            <!--BEGIN CONTENT-->
                            <div class="page-content">
                                <div id="tab-general">
                                      <?php
                                      if (isset($_POST["report"])) {
                                            //Consulta
                                            $id_apuesta = $_POST["id_apuesta"];
                                            $query = "SELECT * FROM Usuaris,InfoApuestas WHERE Usuaris.id_Usuari=$id_Usuari AND InfoApuestas.id_apuesta =$id_apuesta";
                                            $db->query($query);
                                            $id_res = $db->query($query);
                                            while ($row = mysqli_fetch_array($id_res)) {
                                                $queryI = "UPDATE InfoApuestas SET avis = 1 WHERE id_apuesta = $id_apuesta";
                                                if (mysqli_query($db, $queryI)) {
                                                    echo "<b>Report realizado</b></br>";
                                                   ?><script>alert("Report realizado");window.location = "index.php"</script>;<?php
                                                } else {
                                                    echo "Error al realizar el reporte</br>";
                                                    echo "Error: " . mysqli_error($db);
                                                }
                                            }
                                            mysqli_close($db);
                                        }
                                    if (isset($_POST["odd"])) {
                                        //Identenficador usuario
                                        $id_Usuari = $_POST["id_Usuari"];
                                        //Ident. apuesta
                                        $id_apuesta = $_POST["id_apuesta"];
                                        //Coins Apostados >200!
                                        $coins = $_POST["coins"];
                                        //Cuota elegida
                                        @$cuota = $_POST["odds"];
                                        $cuotaF = substr($cuota, 0, -1); //Final
                                        //Resultado
                                        $resultado = substr($cuota, -1);

                                        //Comprobar 
                                        $query = "SELECT DISTINCT Coins,resultado FROM Usuaris,Apuestas,InfoApuestas WHERE Usuaris.id_Usuari=$id_Usuari AND Apuestas.ref_infoapuestas =$id_apuesta AND Usuaris.id_Usuari =Apuestas.ref_usuario";
                                        $db->query($query);
                                        $id_res = $db->query($query);
                                        //Si existen apuestas
                                        if ($db->affected_rows != 0) {
                                            while ($row = mysqli_fetch_array($id_res)) {
                                                //Si no selecciona una cuota
                                                if($cuotaF != ""){
                                                //No permitidas apuestas inferiores a 200 o sin coins suficientes
                                                if ($resultado == $row['resultado']) {
                                                
                                                    //En el caso que ya haya realizado una apuesta por este evento no puede Apostar a diferente cuota apostados 
                                                    if ($row['Coins'] >= $coins && $coins >= 200) {
                                                        //Insert
                                                        $queryI = "INSERT INTO Apuestas (ref_usuario, ref_infoapuestas,cuota,coinsapostados, resultado) VALUES ('$id_Usuari','$id_apuesta',$cuotaF,$coins,'$resultado')";
                                                        if (mysqli_query($db, $queryI)) {
                                                            echo "<b>Apuesta realizada</b></br>";
                                                            echo "Si ganas obtendrás ".$coins*$cuotaF."coins<br>";
                                                            ?><script>alert("Apuesta Realizada");window.location = "index.php"</script>><?php
                                                        } else {
                                                            echo "Error al realizar la apuesta</br>";
                                                            echo "Error: " . mysqli_error($db);
                                                        }
                                                        //Modificar
                                                        $queryM = "UPDATE Usuaris SET Coins= Coins - $coins WHERE id_Usuari = $id_Usuari";

                                                        if (mysqli_query($db, $queryM)) {
                                                            echo "<b><br>Coins actualizados</b></br>";
                                                        } else {
                                                            echo "Error al modificar coins del usuario</br>";
                                                            echo "Error: " . mysqli_error($db);
                                                        }
                                                    } else {
                                                        echo "Coins insuficientes</br>";
                                                        break;
                                                    }
                                                } else {
                                                    echo "<b>No puedes realizar la misma apuesta por diferente cuota. Debes Apostar tan solo por una cuota<b></br>";
                                                    ?><script>alert("Debe apostar tan solo por una cuota"); window.location = 'index.php';</script><?php
                                                    break;
                                                }
                                                }else{
                                                    echo "<p><b>Error: Debe Seleccionar una cuota<b></p>";
                                                    echo "<form action='odds.php' method='post'><input type='hidden' name='id_apuesta' value=" .$id_apuesta. "><input type='submit' value='Volver'/></form>";
                                                    //header('location:http://easybets.esy.es/EasyBets_Web');
                                                }
                                            }
                                            mysqli_close($db);
                                        } else {
                                             //Consulta
                                            $query = "SELECT Coins FROM Usuaris WHERE id_Usuari='$id_Usuari'";
                                            $db->query($query);
                                            $id_res = $db->query($query);
                                            //Recorre y muestra 
                                            while ($row = mysqli_fetch_array($id_res)) {
                                                //Si no selecciona una cuota
                                                if($cuotaF != ""){
                                                //No permitidas apuestas inferiores a 200 o sin coins suficientes

                                                    if ($row['Coins'] >= $coins && $coins >= 200) {
                                                        //Insert
                                                        $queryI = "INSERT INTO Apuestas (ref_usuario, ref_infoapuestas,cuota,coinsapostados, resultado) VALUES ('$id_Usuari','$id_apuesta',$cuotaF,$coins,'$resultado')";
                                                        if (mysqli_query($db, $queryI)) {
                                                            echo "<b>Apuesta realizada</b></br>";
                                                            echo "Si ganas obtendrás ".$coins*$cuotaF."coins<br>";
                                                            ?><script>alert("Apuesta Realizada");window.location = "index.php"</script>><?php
                                                        } else {
                                                            echo "Error al realizar la apuesta</br>";
                                                            echo "Error: " . mysqli_error($db);
                                                        }
                                                        //Modificar
                                                        $queryM = "UPDATE Usuaris SET Coins= Coins - $coins WHERE id_Usuari = $id_Usuari";

                                                        if (mysqli_query($db, $queryM)) {
                                                            echo "<b>Coins actualizados</b></br>";
                                                        } else {
                                                            echo "Error al modificar coins del usuario</br>";
                                                            echo "Error: " . mysqli_error($db);
                                                        }
                                                    } else {
                                                        echo "Coins insuficientes</br>";
                                 
                                                    }
                                                }else{
                                                    echo "<p><b>Error: Debe Seleccionar una cuota<b></p>";
                                                     echo "<form action='odds.php' method='post'><input type='hidden' name='id_apuesta' value=" .$id_apuesta. "><input type='submit' value='Volver'/></form>";
                                                     
                                                    //header('location:http://easybets.esy.es/EasyBets_Web');
                                                }
                                            }
                                            mysqli_close($db);
                                        }
                                        //Reportar evento
                                        
                                    } else {
                                        //Muestra del deporte seleccionado el evento escogido 
                                        @$selec = $_POST["evento"];
                                        @$id_apu = $_POST['id_apuesta'];
                                        $query = "SELECT * from InfoApuestas WHERE id_apuesta = '$selec' OR id_apuesta = '$id_apu'";
                                        $db->query($query);
                                        $id_res = $db->query($query);
                                        echo "<form name='apuesta' class='form-horizontal' role='form' enctype='multipart/form-data' action='odds.php' method='POST'>";
                                        //Recorre y muestra formulario de apuesta
                                        while ($row = mysqli_fetch_array($id_res)) {
                                            echo "<h3>".$row["Local"]." vs ".$row["Visitant"]."</h3><p><b>Hora del evento </b>".$row['DataHora']."</p>";
                                            echo '<blockquote class="blockquote">';
                                            echo "<h4> Cuotas </h4>";
                                            echo "<input type='radio' name='odds' value=" . $row["CuotaL"] . 'L' . ">  " . $row["Local"] ."<label> - " . $row["CuotaL"] . "</label><hr>";
                                            //Empate solo disponible en Futbol
                                            if ($row["Esport"] == "Futbol") {
                                                echo "<input type='radio' name='odds' value=" . $row["CuotaE"] . 'E' . ">  Empate <label> - " . $row["CuotaE"] . "</label><hr>";
                                            }
                                            echo  "<input type='radio' name='odds' value=" . $row["CuotaV"] . 'V' . ">  ". $row["Visitant"] . "<label>  - " . $row["CuotaV"] . "</label>";

                                            echo "<input type='hidden' name='id_apuesta' value=" . $row["id_apuesta"] . "> </blockquote>";
                                        }
                                        $mail = $_SESSION["mail"];
                                        $query2 = "SELECT * from Usuaris WHERE Correu = '$mail'";
                                        $db->query($query2);
                                        $id_res2 = $db->query($query2);
                                        //Recorre y muestra 
                                        while ($row = mysqli_fetch_array($id_res2)) {
                                            $id_Usuari = $row["id_Usuari"];
                                            //Abrir script para aumentar o disminuir
                                            echo '<div class=""><h4>Coins a apostar</h4><div class="form-row col-sm-4"><label for="c2">Manualmente</label><div class="input-group"><span class="input-group-addon">Coins</span><input type="number"  id="movedor" class="form-control currency" min="200" value ="200" max="' . $row['Coins'] . '" onchange="editarbarra(this.value);show_value2(this.value)"></div></div>';
                                            echo'<div class="range range-primary col-sm-9"><p id="slider_value2" " style="color:green;font-weight:bold;"></p>Apuesta minima: 200<input class="bar" id="barra" type="range" min="200" max="' . $row['Coins'] . '" step="1" name="coins" value="100" onmousemove="show_value2(this.value)">Coins disponibles: ' . $row["Coins"] . '<input type="hidden" name="id_Usuari" value=' . $id_Usuari . '></div></div>';
                                        }
                                        echo "<div class=''><input type='submit' class='col-md-3 col-sm-12 btn btn-success' name='odd' value='Realizar apuesta'>";
                                        echo "<div class='col-sm-2'></div>";
                                        echo "<input type='submit' class='col-md-3 col-sm-12 btn btn-danger' name='report' value='Reportar evento'>";
                                        echo "</div></form>";
                                        mysqli_close($db);
                                    }
                                    ?>
                                </div>
                                <!-- Bootstrap FAQ - END -->
                            </div>  

                            <div class="sr-only" id="area-chart-spline"></div>

                        </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/script.js"></script>
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
