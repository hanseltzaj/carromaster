<?php
    include("db.php");
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "UPDATE recibo SET estado='Descartado' WHERE idRecibo=$id";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed");
        }
        header("Location: adminventas.php");
    }
?>