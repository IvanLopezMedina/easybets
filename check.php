<?php
        session_start();
   		$mail=$_POST['email'];
    	$pwd=$_POST['password'];
		include('conexion.php');
        $db=new mysqli($servidor, $usuari, $clau, $bbdd);
		$query="SELECT Correu FROM Usuaris WHERE Correu='$mail' AND Contrasenya=MD5('$pwd')";
    	$db->query($query);
    if($db->affected_rows!=0){

                $query="SELECT * from Usuaris WHERE Correu = '$mail'";
            $db->query($query);
        $id_res = $db->query($query);
while($row = mysqli_fetch_array($id_res))

{
                    @$id_Usuari= $row["id_Usuari"];
            @$root = $row['root'];
            if($root == 1){
                echo "<center><font COLOR=green><a href='http://localhost/easybetsweb/admin/'>Acceso admin</a></font><br><center>";
            $_SESSION["root"] = $mail;
            }if($root == 0){
            echo "<center><font COLOR=green>Acceso permitido</font><center>";
            $_SESSION["mail"] = $mail;
            $_SESSION["password"] = $pwd;
            }

        }


    }else{
        echo "<center><font COLOR=red>Acceso denegado</font><br><center>";
    }

?>

	
