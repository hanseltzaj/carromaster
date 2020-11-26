<?php
    include("db.php");
    if(isset($_POST['save_task']))
    {
        $titulo = $_POST['title'];
        $categoria = $_POST['categoria'];
        $descripcion = $_POST['description'];
        $precio = $_POST['precio'];
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

        $query = "INSERT INTO producto(nProducto, dProducto, pProducto, imagen, nCategoria) VALUES('$titulo', '$descripcion', '$precio', '$imagen', '$categoria')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed");
        }
        header("Location: adminindex.php");
    }
?>