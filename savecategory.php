<?php
    include("db.php");
    if(isset($_POST['save_category']))
    {
        $titulo = $_POST['titulo'];

        $query = "INSERT INTO categoria(nCategoria, eCategoria) VALUES('$titulo', 1)";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed");
        }
        header("Location: admincategorias.php");
    }
?>