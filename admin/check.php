<?php
        session_start();
   		$mail=$_POST['email'];
    	$pwd=$_POST['password'];
		include('conexion.php');
        $db=new mysqli($servidor, $usuari, $clau, $bbdd);
		$query="SELECT Correu FROM Usuaris WHERE Correu='$mail' AND Contrasenya=MD5('$pwd')";
    	$db->query($query);
    if($db->affected_rows!=0){
            echo "<center><font COLOR=green>Accesso permitido</font><center>";
            $_SESSION["mail"] = $mail;
            $_SESSION["password"] = $pwd;
    }else{
        echo "<center><font COLOR=red>Error de acceso</font><center>";
    }

?>

