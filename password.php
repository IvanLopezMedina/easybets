<?php
   		$mail=$_POST['email'];
    	$pwd=$_POST['password'];
       // $date= date('Y/m/d');
		$db=new mysqli("localhost","root","root","easybets");
        $compr = "SELECT Correu FROM usuaris WHERE Correu = '$mail'";
        $db->query($compr);

    if($db->affected_rows!=0){
        $query = "UPDATE usuaris SET Contrasenya=MD5('$pwd') WHERE Correu = '$mail'";
        $db->query($query);
        echo "<center><font color=green>Password modificado</font><br><center>";
    }else{
        echo "<center><font color=red>Error al realizar la modificación</font><br><center>";
    }

?>

