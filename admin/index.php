<?php 
session_start();
include('conexion.php');
$db=new mysqli($servidor, $usuari, $clau, $bbdd);
if(!isset($_SESSION["root"])){
        header('location:login.php');
    }else{
        $user = $_SESSION["root"];
        $query="SELECT * from Usuaris WHERE Correu = '$user'";
        $db->query($query);
        $id_res = $db->query($query);
        while($row = mysqli_fetch_array($id_res)){
            $id_Usuari= $row["id_Usuari"];
            $coins = $row["Coins"];
            $usuari = $row["Nom"];
            $direccio= $row['Direccio'];
            $dni = $row['DNI'];
            $mail = $user;
            $pwd = $row['Contrasenya'];
            $estat = $row['Estat'];
            $dataeliminar = $row['DataEliminacio'];
            $premium = $row['Premium'];
        }


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>EasyBets - Web de apuestas deportivas online</title>
    <meta charset="UTF-8">
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
                    <ul class="nav navbar navbar-top-links navbar-right mbn">
                        <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="images/avatar/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs" id="user"><?php echo $usuari ?></span>&nbsp;<span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-user pull-right">
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
                    </i><span class="menu-title">Administrar Usuarios</span></a></li>
                    <li ><a href="noticias.php"><i class="fa fa-newspaper-o fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Noticias</span></a></li>
                    <li ><a href="mailbox.php"><i class="fa fa-envelope-o fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">MailBox</span></a></li>
                </ul>
            </div>
        </nav>
            <!--END SIDEBAR MENU-->
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Administrar Usuarios</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="index.php">Administrar Usuarios</a>&nbsp;&nbsp;
                        
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
<?php
if (isset($_POST['revisado'])){
    $id = $_POST['id'];
    $query = "UPDATE InfoApuestas SET Avis = 0 WHERE id_apuesta = $id";
    $db->query($query);
    
    if(mysqli_query($db,$query)){
        echo "<b>Apuesta Revisada</b></br>";
    }else{
        echo "Problemas al revisar la apuesta</br>";
        echo "Error: ".mysqli_error($db); 
    }
}
                   $query="SELECT * FROM InfoApuestas WHERE InfoApuestas.avis = 1";
        $db->query($query);
        $id_res = $db->query($query);
        echo '                        <div id="sum_box" class="row mbl">
                            <div class="col-md-12">
                                <div class="panel task  mbm">
                                    <div class="panel-body">
  <h2>Eventos a revisar</h2>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Local</th>
        <th>Visitante</th>
        <th>Fecha/Hora</th>
        <th>Puntuación Local</th>
        <th>Puntuación Visitante</th>
        <th>Resultado</th>
        <th>Deporte</th>
        <th>Categoria</th>
        <th>Estado</th>
        <th>CuotaL</th>
        <th>CuotaE</th>
        <th>CuotaV</th>
      </tr>
    </thead>
    <tbody>';
        while($row = mysqli_fetch_array($id_res)){
            $id= $row['id_apuesta'];
            $local = $row['Local'];
            $visitant = $row['Visitant'];
            $data = $row['DataHora'];
            $p1 = $row['PuntuacioL'];
            $p2 = $row['PuntuacioV'];
            $res = $row['Resultat'];
            $esport =$row['Esport'];
            $cat =$row['Categoria'];
            $estat =$row['Estat'];
            $cuotaL =$row['CuotaL'];
            $cuotaV =$row['CuotaV'];  
            $cuotaE =$row['CuotaE'];
    echo '<tr >
        <td>'.$id.'</td>
        <td>'.$local.'</td>
        <td>'.$visitant.'</td>
        <td>'.$data.'</td>
        <td>'.$p1.'</td>
        <td>'.$p2.'</td>
        <td>'.$res.'</td>
        <td>'.$esport.'</td>
        <td>'.$cat.'</td>
        <td>'.$estat.'</td>
        <td>'.$cuotaL.'</td>
        <td>'.$cuotaE.'</td>
        <td>'.$cuotaV.'</td>       
        <td><form action="index.php" method="post"><input type="hidden" value='.$id.' name="id"><input name="revisado" type="submit" value="Revisado" class="btn btn-primary"> </form></td>
      </tr>';
        } 
    echo '</tbody></table></div></div></div></div>';

$date = date("Y-m-d H:i:s");
$query="SELECT * from Usuaris JOIN Apuestas on ref_usuario = id_Usuari JOIN InfoApuestas on ref_infoapuestas = id_apuesta WHERE DataHora < '$date'";
        $db->query($query);
        $id_res = $db->query($query);
        $contador = 0;
        echo '<div id="sum_box" class="row mbl">
                            <div class="col-md-12">
                                <div class="panel task  mbm">
                                    <div class="panel-body">
  <h2>Historial Apuestas Usuarios</h2>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Local</th>
        <th>Visitante</th>
        <th>Hora Partido </th>
        <th>Puntuación Local</th>
        <th>Puntuación Visitante</th>
        <th>Resultado Partido</th>
        <th>Resultado Apostado</th>
        <th>Resultado Apuesta </th>
        <th>Coins Apostados</th>
        <th>Coins Ganados </th>
      </tr>
    </thead>
    <tbody>';
        while($row = mysqli_fetch_array($id_res)){
            $coinsapostados = $row["coinsapostados"];
            $cuota = $row["cuota"];
            $resultado = $row["resultado"];
            $resultadopartido = $row["Resultat"];
            if ($resultado == $resultadopartido){
                $ganado = "Ganador";
                $color= "green";
                $coinsganados = $coinsapostados * $cuota;
            }else{
                $ganado = "Perdida";
                $color = "red";
                $coinsganados = "-".$coinsapostados;
            }
            $direccio= $row['Direccio'];
            $local = $row['Local'];
            $visitante = $row['Visitant'];
            $puntuaciolocal = $row['PuntuacioL'];
            $puntuaciovisitante = $row['PuntuacioV'];
            $datahora = $row['DataHora'];
            $contador ++;

    echo '<tr style="color:'.$color.'">
        <td>'.$local.'</td>
        <td>'.$visitante.'</td>
        <td>'.$datahora.'</td>
        <td>'.$puntuaciolocal.'</td>
        <td>'.$puntuaciovisitante.'</td>
        <td>'.$resultadopartido.'</td>
        <td>'.$resultado.'</td>
        <td>'.$ganado.'</td>
        <td>'.$coinsapostados.'</td>
        <td>'.$coinsganados.'</td>
      </tr>';
     }
    echo '</tbody>
        </table></div></div></div></div></div>';


  echo '<div id="sum_box" class="row mbl">
                            <div class="col-md-12">
                                <div class="panel task  mbm">
                                    <div class="panel-body">
  <h2>Control de usuarios</h2> ';
echo '<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Correo</th>
        <th>Nombre</th>
        <th>DNI</th>
        <th>Fecha Creacion</th>
        <th>Dirección</th>
        <th>Estado</th>
        <th>Premium</th>
      </tr>
    </thead>
    <tbody></div>';

$query="SELECT * from Usuaris";
        $db->query($query);
        $id_res = $db->query($query);
        while($row = mysqli_fetch_array($id_res)){
            $id= $row['id_Usuari'];
            $mail = $row['Correu'];
            $estat = $row['Estat'];
            $data = $row['DataCreacio'];
            $dni = $row['DNI'];
            $direc = $row['Direccio'];
            $premium =$row['Premium'];
            $nom =$row['Nom'];

    echo '<tr >
        <td>'.$id.'</td>
        <td>'.$mail.'</td>
        <td>'.$nom.'</td>
        <td>'.$dni.'</td>
        <td>'.$data.'</td>
        <td>'.$direc.'</td>
        <td>'.$estat.'</td>
        <td>'.$premium.'</td>
      </tr>';
        } 
    echo '</tbody></table></div></div></div></div>';
?>                 
                   

<div class="sr-only" id="area-chart-spline" style="width: 100%;"></div>
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
<?php

}
?>
