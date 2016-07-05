<?php
function validar_dni($dni){
    $letra = substr($dni, -1);
    $numeros = substr($dni, 0, -1);
    if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
        return 'valido';
    }else{
        return 'no valido';
    }
}
function verificarpassword($pwd){
    $tamaño = strlen($pwd);

    if ($tamaño >= 8){
        return 'valido';
    
    }else{
        return 'no valido';
    }
}
function verificarmail($direccion){
   $sintaxis='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
   if(preg_match($sintaxis,$direccion))
      return 'valido';
   else
      return 'no valido';
}
        $nombre=$_POST['nombre'];
        $dir=$_POST['direccion'];
   		$mail=$_POST['email'];
    	$pwd=$_POST['password'];
        $dni=$_POST['dni'];
        $date= date('Y/m/d');
		include('conexion.php');
        $db=new mysqli($servidor, $usuari, $clau, $bbdd);
        $compr = "SELECT Correu FROM Usuaris WHERE Correu = '$mail'";
        $db->query($compr);

    if($db->affected_rows==0){
        if(verificarpassword($pwd) == 'valido' && verificarmail($mail) == 'valido' && validar_dni($dni) == 'valido' && !empty($pwd) && !empty($nombre)){
        $query = "INSERT INTO Usuaris (Correu,Contrasenya,Nom,DataCreacio,Estat,Direccio,Coins,DNI) VALUES ('$mail', MD5('$pwd'),'$nombre','$date',1,'$dir',2000,'$dni')";

        $db->query($query);
        
        echo "<center><font color=green>Registro realizado</font><br><center>";
    }else{
        if (verificarpassword($pwd) != 'valido'){
            echo "<center><font color=red>La contraseña ha de tener 8 caracteres</font><br><center>";
        }
        echo "<center><font color=red>Datos Incorrectos o vacios</font><br><center>";
    }
    }else{
        echo "<center><font color=red>Correo ya utilizado</font><br><center>";
    }


?>

