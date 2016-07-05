<?php 
session_start();
include('conexion.php');
$db=new mysqli($servidor, $usuari, $clau, $bbdd);
if(!isset($_SESSION["mail"])){
        header('location:login.php');
    ?>
    <script>
        $(#id).hide();
    </script>
    }else{ include('informaciobasica.php'); ?>
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
                                </li>
                                <?php
                        }else{?>
                                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class=""></i><span >No-Premium</span></a>
                                    </li>
                                    <?php   
                        }?>
                                        <li class="dropdown">
                                            <a data-hover="dropdown" href="#" class="dropdown-toggle"></span>
                                                <?php echo $coins."  "?><img src="images/gallery/gold.png"></a>
                                        </li>
                                        <li class="dropdown topbar-user">
                                            <a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="images/avatar/48.jpg" alt="" class="img-responsive img-circle" />&nbsp;<span class="hidden-xs" id="user"><?php echo $usuari ?></span>&nbsp;<span class="caret"></span></a>
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
                <nav id="sidebar" role="navigation" data-step="2" data-position="right" class="navbar-default navbar-static-side">
                    <div class="sidebar-collapse menu-scroll">
                        <ul id="side-menu" class="nav">
                            <div class="clearfix"></div>
                            <li><a href="index.php"><i class="fa fa-ellipsis-v fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Principal</span></a></li>
                            <li><a href="eventos.php"><i class="fa fa-flag-checkered fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Eventos</span></a>
                                <ul class="nav nav-pills nav-stacked" ;>
                                    <li class="active">
                                        <a href="futbol.php">
                                            <div class="icon-bg bg-orange"></div><i class="fa fa-life-ring"></i>
                                            <span class="menu-title ">Fútbol</span></a>
                                    </li>
                                </ul>
                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active">
                                        <a href="tennis.php">
                                            <div class="icon-bg"></div><i class="fa fa-circle-o"></i>
                                            <span class="menu-title">Tennis</span></a>
                                    </li>
                                </ul>
                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active">
                                        <a href="basquet.php">
                                            <div class="icon-bg bg-orange"></div><i class="fa  fa-dribbble"></i>
                                            <span class="menu-title">Básquet</span></a>
                                    </li>
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
                            <li class="active"><a href="change.php"><i class="fa fa-ticket fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Datos Bancarios</span></a>
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
                                    Comprar Productos</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a href="index.php">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                                <li class="hidden"><a href="#">Datos Bancarios</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                                <li class="active">Datos Bancarios</li>
                            </ol>
                            <div class="clearfix">
                            </div>
                        </div>
                        <!--END TITLE & BREADCRUMB PAGE-->
                        <!--BEGIN CONTENT-->
                        <div class="page-content">
                            <div id="tab-general">
                                <?php
                        if(isset($_POST["cambiar"])){
                            $id_Usuari = $_POST["id_Usuari"];
                            $cuenta = $_POST["cuenta"];
                            $fecha = $_POST["fecha"];
                            $cvv = $_POST["cvv"];

                            if(!empty($cuenta) && !empty($fecha) && !empty($cvv)){
                                $queryI= "INSERT INTO CompteBancari (numero,data,cvv,ref_usuari) VALUES ($cuenta,'$fecha',$cvv,$id_Usuari)";
                                
                                if(mysqli_query($db,$queryI)){
                                    echo "<b>Datos de la cuenta bancaria insertados</b></br>";
                                }else{
                                    echo "Problemas al insertar datos bancarios</br>";
                                    echo "Error: ".mysqli_error($db); 
                                }
                                $queryM= "UPDATE Usuaris SET Premium=1 WHERE id_Usuari = '$id_Usuari' ";
                                
                                $product = $_POST['product'];
                                if(mysqli_query($db,$queryM)){
                                    echo "<form name='cambiar' action='change.php' method='POST'>";
                                    echo "<b>Usuario modificado correctamente</b></br>";
                                    echo '<input type="hidden" name="product" value='.$product.'>';

                                    echo "<a href='change.php'><br><input type='submit' name='Finalizar Compra' value='Finalizar Compra'></a>";
                                    echo "</form>";
                                }else{
                                    echo "Error al hacer la activación Premium</br>";
                                    echo "Error: ".mysqli_error($db); 
                                }
                            }else{
                                ?>
                                    <script>
                                        alert("Omple les dades!!!");
                                        window.location = 'change.php'
                                    </script>
                                    <?php
                            }
                            mysqli_close($db);
                        }else{
                            $user =$_SESSION["mail"];
                            $query="SELECT * from Usuaris WHERE Correu = '$user'";
                            $db->query($query);
                            $id_res = $db->query($query);
                            echo "<form name='cambiar' action='change.php' method='POST'>";
                            while($row = mysqli_fetch_array($id_res)){
                                $id_Usuari= $row["id_Usuari"];
                                $nombre= $row["Nom"];
                                $dni= $row["DNI"];
                                $mail= $row["Correu"];
                                $direccio= $row["Direccio"];
                                @$product = $_POST['product'];
                                if($row['Premium'] == 0){
                                
                                echo '<div class="row">
                                      <div class="span">
                                      <h2>Datos Bancarios</h3>
                                        <input type="hidden" name="id_Usuari" value='.$id_Usuari.'>
                                        <input type="hidden" name="product" value='.$product.'>

                                        <p>Numero de cuenta <br><input class="form-control" type="text" name="cuenta"></p>
                                        <p>Fecha de caducidad <br><input class="form-control" type="month" name="fecha"></p>
                                        <p>Numero CVV <br><input class="form-control"type="text" name="cvv" ></p>
                                        ';
                                echo "<a href='change.php'><br><input type='submit' class='btn btn-primary' name='cambiar' value='Validar datos'></a>";
                                echo "<a href='change.php'><br><input type='submit' class='btn btn-danger' name='eliminar' value='Eliminar Datos'></a>";
                                echo "</form>";
                                }
                                if($row['Premium'] == 1){
                                    $user =$_SESSION["mail"];
                                    if (isset($_POST['eliminar'])){
                                        $queryM= "DELETE from CompteBancari WHERE ref_usuari = $id_Usuari";
                                mysqli_query($db,$queryM);
                                    echo "<b>Cuenta Bancaria eliminada de nuestra base de datos</b></br>";
                                    }
                                    if (!isset($_POST['revisarcompte'])){
                                        $query="SELECT * from CompteBancari JOIN Usuaris ON ref_usuari = id_Usuari WHERE Correu = '".$user."'";
                                        
                                        $db->query($query);
                                        $id_res = $db->query($query);
                                        while($row = mysqli_fetch_array($id_res)){
                                            $numero= $row["numero"];
                                            $cvv= $row["cvv"];
                                            $data= $row["data"];
                                            $id_Usuari = $row["ref_usuari"];
                                            
                                        }
                                        
                                        echo "<form name='cambiar' action='change.php' method='POST'>";
                                        echo '<div class="row">
                                        <div class="span">
                                        <h2>Revisar Datos Bancarios</h3>
                                        <input type="hidden" name="id_Usuari" value='.$id_Usuari.'>
                                        <input type="hidden" name="product" value='.$product.'>

                                        <p>Numero de cuenta <br><input class="form-control" type="text" value="'.@$numero.'" name="cuenta"></p>
                                        <p>Fecha de caducidad <br><input class="form-control" type="month" value="'.@$data.'" name="fecha"></p>
                                        <p>Numero CVV <br><input class="form-control"type="text" name="cvv" value="'.@$cvv.'"></p>
                                        ';
                                        echo "<input type='submit' class='col-sm-4 btn btn-primary form-control' name='revisarcompte' value='Validar datos ' >";
                                        echo "<a href='change.php'><br><input type='submit' class='col-sm-4 btn btn-danger form-control' name='eliminar' value='Eliminar Datos'></a>";
                                        echo "</form>";
                                }else{
                                    $query="SELECT * from CompteBancari JOIN Usuaris ON ref_usuari = id_Usuari WHERE Correu = '".$user."'";
                                        
                                        $db->query($query);
                                        if($db->affected_rows==0){
                                            $id_Usuari = $_POST["id_Usuari"];
                                            $cuenta = $_POST["cuenta"];
                                            $fecha = $_POST["fecha"];
                                            $cvv = $_POST["cvv"];
                                            if (!empty($_POST['cuenta']) && (!empty($_POST['cvv'])) && (!empty($_POST['fecha']))){
                                            $queryI= "INSERT INTO CompteBancari (numero,data,cvv,ref_usuari) VALUES ($cuenta,'$fecha',$cvv,$id_Usuari)";
                                            
                                            if(mysqli_query($db,$queryI)){
                                                echo "<b>Datos de la cuenta bancaria insertados</b></br>";
                                                ?>
                                        <script>
                                            alert("Volviendo a la tienda para verificar compra");
                                            window.location.replace("shop.php");
                                        </script>
                                        <?php
                                            }else{
                                                echo "Problemas al insertar datos bancarios</br>";
                                                echo "Error: ".mysqli_error($db); 
                                            }
                                        }else{
                                            ?>
                                            <script>
                                                alert("Rellene todos sus datos bancarios");
                                                window.location = 'change.php';
                                            </script>
                                            <?php
                                        }
                                        }else{
                                    $product = $_POST['product'];
                                    if (!empty($_POST['cuenta']) && (!empty($_POST['cvv'])) && (!empty($_POST['fecha']))){
                                    $queryM= "UPDATE CompteBancari SET numero = ".$_POST['cuenta'].", data = '".$_POST['fecha']."', cvv = ".$_POST['cvv']." WHERE ref_usuari = '$id_Usuari'";
                                
                                
                                mysqli_query($db,$queryM);
                                    echo "<b>Cuenta Bancaria modificada correctamente</b></br>";
                                    $date = date("Y-m-d\TH:i:sP");
                                    $time = explode("T", $date);
                                    $time2 = explode("+", $time[1]);
                                    $queryI= "INSERT INTO productes_usuari (ref_usuari,ref_producte,DataHora) VALUES ($id_Usuari,$product,'$time[0] $time2[0]')";
                                    echo "producto".$product;
                                
                                if(mysqli_query($db,$queryI)){
                                    echo "<b>Compra Realizada</b></br>";
                                }else{
                                    echo "Problemas al insertar datos bancarios</br>";
                                    echo "Error: ".mysqli_error($db); 
                                }
                                $user = $_SESSION["mail"];
                                $query="SELECT * from Usuaris JOIN productes_usuari on id_Usuari = ref_usuari JOIN Productes on ref_producte = id_Producto WHERE Correu = '$user' AND id_Producto = $product";
                                $db->query($query);
                                $id_res = $db->query($query);
                                while(@$row = @mysqli_fetch_array($id_res)){
                                    $addcoins = $row['addcoins'];
                                }
                                @$sumacoins = $coins + @$addcoins;
                                $query2= "Update Usuaris SET Coins = $sumacoins WHERE Correu = '$user'";
                                }else{
                                    ?>
                                                <script>
                                                    alert("Rellene todos sus datos bancarios");
                                                    window.location = 'change.php';
                                                </script>
                                                <?php
                                }
                                if(mysqli_query($db,$query2)){
                                    echo "<b>Coins ingresados</b></br>";
                                    ?>
                                                    <script>
                                                        window.location.replace("shop.php");
                                                    </script>
                                                    <?php
                                }else{
                                    echo "Problemas al insertar datos bancarios</br>";
                                    echo "Error: ".mysqli_error($db); 
                                
                                }
                            }
                        }
                    }
                                //Campo hidden con ident o mdiante correo el update ?= (esta hidden ahora)
                               
                        
                            }            
?>
                            </div>


                            <!-- Bootstrap FAQ - END -->
                        </div>
                    </div>
                </div>

                <div class="sr-only" id="area-chart-spline" style="width: 100%; height: 300px"></div>

                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div class="sr-only" id="area-chart-spline"></div>
                <footer class="footer-distributed">

                    <div class="footer-left">

                        <h3>Easy<span>Bets</span></h3>

                        <p class="footer-links">
                            <a href="index.php">Inicio</a> ·
                            <a href="#">Terminos y condiciones</a> ·
                            <a href="#">Sobre Nosotros</a> ·
                            <a href="faq.php">FAQ</a> ·
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
                            <span>Sobre la compañia</span> EasyBets és una casa de apuestas deportivas online, con gran variedad de deportes y premios reales.
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
}
?>