<?php
$user = $_SESSION["mail"];
$resetcoins = 0;
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
        // Update de coins por los partidos apostados aún no validados
        $query="SELECT * from Usuaris JOIN Apuestas ON ref_usuario = id_Usuari JOIN InfoApuestas ON id_apuesta = ref_infoapuestas WHERE Correu = '$user'";
        $db->query($query);
        $id_res = $db->query($query);
        $sumatoriocoins = 0;
        while($row = mysqli_fetch_array($id_res)){
            $actualizado = $row['actualizado'];
            $coinsapostados = $row['coinsapostados'];
            $cuota = $row['cuota'];
            $resultadousuario = $row['resultado'];
            $resultado = $row['Resultat'];
            
            if ($actualizado == 0){
                $resetcoins = 1;
                if ($resultadousuario == $resultado){
                    $sumatoriocoins = $sumatoriocoins +($coinsapostados * $cuota);  
                    echo $sumatoriocoins;
                    $queryM = "UPDATE Apuestas SET actualizado = 1 WHERE ref_usuario = ".$row['ref_usuario']." AND ref_infoapuestas = ".$row['ref_infoapuestas']."";
            
            if (mysqli_query($db, $queryM)) {
                echo "<b>Coins actualizados</b>";
            } else {
            echo "Error al modificar coins del usuario</br>";
            echo "Error: " . mysqli_error($db);
        }
                }
            
            }
        }
        if ($resetcoins == 0 && $coins <= 0){
            $queryM = "UPDATE Usuaris SET Coins= 2000 WHERE Correu = '$user'";
            if (mysqli_query($db, $queryM)) {
                ?> <script> alert("Coins reestablecidos a 2000. ¡Ves con cuidado!. Recarga la plana para recibirlos.");
                window.location('index.php');</script><?php
            } else {
            echo "Error al modificar coins del usuario</br>";
            echo "Error: " . mysqli_error($db);
        }
        }
        $coinstotals = $coins + $sumatoriocoins;
        if ($sumatoriocoins != 0){
        $queryM = "UPDATE Usuaris SET Coins= $coinstotals WHERE Correu = '$user'";
            if (mysqli_query($db, $queryM)) {
                echo "<b>Coins actualizados</b>";
            } else {
            echo "Error al modificar coins del usuario</br>";
            echo "Error: " . mysqli_error($db);
        }
        }
        ?>
