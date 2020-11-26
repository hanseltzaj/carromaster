<?php

    $nombre = $_POST['clie'];
    require("db.php");
    $query = "INSERT INTO compra (idCompra) VALUES ('$nombre')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query Failed");
    }
?>