<?php
if (!isset($_POST['contactar'])){

}else{
    $nombre = $_POST['nombre'];
    $correo = $_POST['email'];
    $asunto = $_POST['subject'];
    $mensaje = $_POST['message'];

    $queryI= "INSERT INTO Contacto (nombre,email,asunto,mensaje) VALUES ('$nombre','$correo','$asunto', '$mensaje')";
    if(mysqli_query($db,$queryI)){
        echo "<b>Consulta enviada</b></br>";
    }else{
        echo "Problemas al enviar la consulta</br>";
        echo "Error: ".mysqli_error($db); 
    }
}
?>
