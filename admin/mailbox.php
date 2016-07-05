<?php
session_start();
include('conexion.php');
$db = new mysqli($servidor, $usuari, $clau, $bbdd);
if (!isset($_SESSION["root"])) {
    header('location:login.php');
} else {
    $user = $_SESSION["root"];
    $query = "SELECT * from Usuaris WHERE Correu = '$user'";
    $db->query($query);
    $id_res = $db->query($query);
    while ($row = mysqli_fetch_array($id_res)) {
        $id_Usuari = $row["id_Usuari"];
        $coins = $row["Coins"];
        $usuari = $row["Nom"];
        $direccio = $row['Direccio'];
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
                <a id="totop" href="#"><i class="fa fa-envelope-o"></i></a>
                <!--END BACK TO TOP-->
                <!--BEGIN TOPBAR-->
                <div id="header-topbar-option-demo" class="page-header-topbar">
                    <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
                        <div class="navbar-header">
                            <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                            <a id="logo" href="index.php" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">EasyBets</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
                        <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                            <ul class="nav navbar navbar-top-links navbar-right mbn">
                                <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-green" id="alerts">3</span></a>
                                </li>
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
                                <li><a href="index.php"><i class="fa fa-ellipsis-v fa-fw">
                                            <div class="icon-bg bg-orange"></div>
                                        </i><span class="menu-title">Administrar Usuarios</span></a></li>
                                <li ><a href="noticias.php"><i class="fa fa-newspaper-o fa-fw">
                                            <div class="icon-bg bg-orange"></div>
                                        </i><span class="menu-title">Noticias</span></a></li>
                                <li class="active"><a href="mailbox.php"><i class="fa fa-envelope-o fa-fw">
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
                                    MailBox</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-envelope-o"></i>&nbsp;<a href="index.php">MailBox</a>&nbsp;&nbsp;

                            </ol>
                            <div class="clearfix">
                            </div>
                        </div>
                        <!--END TITLE & BREADCRUMB PAGE-->
                        <!--BEGIN CONTENT-->
                        <div class="page-content">
                            <div id="tab-general">
    <?php
    if (isset($_POST["resuelta"])) {
        $id_contacto = $_POST["id_contacto"];
        $query = "UPDATE Contacto SET Atendido= 1 WHERE id_Contacto = $id_contacto";
        if (mysqli_query($db, $query)) {
            echo "<b><br>Duda resuelta</b></br>";
            ?><script>alert("Duda Resuelta");window.location = 'mailbox.php'</script>;<?php
        } else {
            echo "Error al modificar estado de contacto</br>";
            echo "Error: " . mysqli_error($db);
        }
        mysqli_close($db);
    } else {


        $query = "SELECT * FROM Contacto WHERE Atendido = 0";
        $db->query($query);
        $id_res = $db->query($query);
        echo '                        
        <div id="sum_box" class="row mbl">
                            <div class="col-md-12">
                                <div class="panel task  mbm">
                                    <div class="panel-body">
  <h2>Dudas recibidas</h2>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Usuario</th>
        <th>Email</th>
        <th>Asunto</th>
        <th>Pregunta</th>
      </tr>
    </thead>
    <tbody>';
        while ($row = mysqli_fetch_array($id_res)) {
            echo "<form name='consultas' class='form-horizontal' role='form' enctype='multipart/form-data' action='mailbox.php' method='POST'>";
            $id = $row['id_Contacto'];
            $nombre = $row['nombre'];
            $email = $row['email'];
            $asunto = $row['asunto'];
            $mensaje = $row['mensaje'];
            echo"<tr >
        <td>$nombre</td>
        <td>$email</td>
        <td>$asunto</td>
        <td>$mensaje</td>
        <td><a href='mailto:$email?Subject=Resolución%20Incidencia%20EasyBets,%20Saludos%20$nombre' target='_top'>Responder</a></td>
        <td>    <input type='hidden' name='id_contacto' value=" . $id . ">
        <input type='submit' class='btn btn-primary btn-lg' name= 'resuelta' value='Resuelta'></td>
      </tr></form>";
        }
        echo '</tbody></table></div></div></div></div>';
        mysqli_close($db);
    }
    ?>                 

                            </div>
                            <div class="sr-only" id="area-chart-spline" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!--END CONTENT-->
        <!--BEGIN FOOTER-->

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
    <?php
}
?>
