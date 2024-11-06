<?php
    $con = mysqli_connect("localhost", "root", "selley", "miniSistema");

    if(mysqli_connect_errno()) {
        echo "<p>No se pudo realizar la conexión" . mysqli_connect_error() . "</p>";
    }
?>