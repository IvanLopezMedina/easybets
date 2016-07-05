<?php
        $servidor="localhost";
        $usuari="root";
        $clau="root";
        $bbdd="easybets";
        @$conn=mysqli_connect($servidor,$usuari,$clau,$bbdd);
        mysqli_select_db($conn,$bbdd);
?>
