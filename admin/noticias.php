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
                    <li ><a href="index.php"><i class="fa fa-ellipsis-v fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Administrar Usuarios</span></a></li>
                    <li class="active"><a href="noticias.php"><i class="fa fa-newspaper-o fa-fw">
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
                            Noticias</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="index.php">Noticias</a>&nbsp;&nbsp;
                        
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                               <?php
                    if (isset($_POST["enviar"])) {
                        $titular = $_POST["titular"];
                        $categoria = $_POST["deporte"];
                        $cuerpo = $_POST["content"];
//Crear select con curdate para que aparezcan  los de hoy y proximos
                        $query = "INSERT INTO Noticias (titulo,categoria,cuerpo) VALUES ('$titular','$categoria','$cuerpo')";
                        $db->query($query);
                        if ($db->affected_rows != 0) {
                            echo "<center><font color=green>Noticia insertada</font><br></center>";
                            ?><script> window.location ='noticias.php'</script><?php
                        } else {
                            echo "<center><font color=red>Error al insertar noticia</font><br></center>";
                        }

                        mysqli_close($db);
                    }
                    if (isset($_POST["modificar"])) {
                        @$id_noticia = $_POST["id_noticia"];
                        @$cuerpo = $_POST["cuerpo"];
                        @$titulo = $_POST["titulo"];
                        @$categoria = $_POST["categoria"];
                        $queryM = "UPDATE Noticias SET cuerpo='$cuerpo', titulo='$titulo', categoria ='$categoria' WHERE id_noticia = $id_noticia ";
                        echo $id_noticia;
                        if (mysqli_query($db, $queryM)) {
                            echo "<b>Noticia Modificada</b></br>";
                            ?><script> window.location ='noticias.php'</script><?php
                        } else {
                            echo "Error al modificar el usuario</br>";
                            echo "Error: " . mysqli_error($db);
                        }
                        mysqli_close($db);
                    }
                    echo ' <h2>Insertar noticia</h2>
                                          <form class="form-horizontal" role="form" enctype="multipart/form-data" name="noticia" action="noticias.php" method="POST">
                                                <center>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="titular">
                                                                Titular</label>
                                                            <div class="input-group col-xs-12">
                                                                <input type="text" class="form-control" name="titular" placeholder="" required="required" /></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="subject">
                                                                Deporte</label>
                                                            <select id="deporte" name="deporte" class="form-control" required="required">
                                                                <option value="Futbol" selected="">Fútbol</option>
                                                                <option value="Basket">Basket</option>
                                                                <option value="Tennis">Tennis</option>
                                                            </select>
                                                        </div>
                                           
                                                        <div class="form-group">
                                                            <label for="name">
                                                                Cuerpo de la noticia</label>
                                                            <textarea name="content" id="content" class="form-control" rows="9" cols="25" ></textarea>
                                                        </div>
                                                    </div>
                                                           </center>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-primary btn-lg" name="enviar" id="btnContactUs">
                                                            Enviar Noticia</button>
                                                    </div>
                                         
                                            </form></div>';
$query2="SELECT * from Noticias";
        @$db->query($query2);
        @$id_res2 = $db->query($query2);
        echo "</div><div style='opacity:0.9' class='panel panel-blue'>
                        <h2>Modificar Noticias </h2>";
        while($row = mysqli_fetch_array($id_res2)){
            $id_noticia= $row["id_noticia"];
            $titulo = $row["titulo"];
            $categoria = $row["categoria"];
            $cuerpo= $row['cuerpo'];
    echo "<form name='modificar' action='noticias.php' method='POST'>
    <input type='hidden' name='id_noticia' value='$id_noticia'>
                        <div class='form-group'>
                                <label for='user'>Titulo:</label>
                                <input type='text' class='form-control' name='titulo' value='$titulo' required>
                            </div>
                        <div class='form-group'>
                                <label for='user'>Categoria:</label>
                                <input type='text' class='form-control' name='categoria' value='$categoria' required>
                            </div>
                            <div class='form-group'>
                                <label for='user'>Cuerpo:</label>
                                <input type='text' class='form-control' name='cuerpo' value='$cuerpo' required>
                            </div>
                            <br><a href='noticias.php'><br><input class='btn btn-primary' type='submit' name='modificar' value='Modificar'></a>

        </form><br><br>";
        }
?>
                            <div class="sr-only" id="area-chart-spline" style="width: 100%;"></div>
                       
                <!--END CONTENT-->
                


                        <!--END PAGE WRAPPER-->
        
</div></div>
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
