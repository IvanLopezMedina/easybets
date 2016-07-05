<?php
include('conexion.php');
$db=new mysqli($servidor, $usuari, $clau, $bbdd);
$date = date("Y-m-d H:i:s");
$query="SELECT * from Usuaris JOIN Apuestas on ref_usuario = id_Usuari JOIN InfoApuestas on ref_infoapuestas = id_apuesta WHERE Correu = '$user' AND DataHora > '$date'";
        $db->query($query);
        $id_res = $db->query($query);
        $contador = 0;
           if (mysqli_num_rows($id_res)==0){
            echo "No hay apuestas <br>";
        }else{
        echo '
  <h2></h2>          
  <div class="table-responsive">  
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Local</th>
        <th>Visitante</th>
        <th>Hora Partido </th>
        <th>Resultado Apuesta </th>
        <th>Cuota Apuesta </th>
        <th>Coins Apostados</th>
      </tr>
    </thead>
    <tbody>';
    $contador = 0;
        while($row = mysqli_fetch_array($id_res)){
            $coinsapostados = $row["coinsapostados"];
            $cuota = $row["cuota"];
            $color= "blue";
            $direccio= $row['Direccio'];
            $local = $row['Local'];
            $visitante = $row['Visitant'];
            $resultado = $row['resultado'];
            $datahora = $row['DataHora'];
            $dataarray[$contador] = $row['DataHora'];
            $contador ++;
            $cuota = $row['cuota'];

    echo '<tr style="color:'.$color.'">
        <td>'.$local.'</td>
        <td>'.$visitante.'</td>
        <td>'.$datahora.'</td>
        <td>'.$resultado.'</td>
        <td>'.$cuota.'</td>
        <td>'.$coinsapostados.'</td>      </tr>';
        } 
    echo '</tbody>
        </table></div>';
}
?>
