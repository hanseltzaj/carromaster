<?php
    include("db.php");
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query1 = "SELECT * FROM categoria WHERE idCategoria = $id";
        $result = mysqli_query($conn, $query1);
        $row = mysqli_fetch_array($result);
        $ncat = $row['nCategoria'];

        $query2 = "SELECT * FROM producto WHERE producto.nCategoria = '$ncat'";
        $result2 = mysqli_query($conn, $query2);
        if(mysqli_num_rows($result2) == 0){   
            $query3 = "DELETE FROM categoria WHERE idCategoria=$id";
            $result3 = mysqli_query($conn, $query3);
            if(!$result3){
                die("Query Failed");
            }
            header("Location: admincategorias.php");
        }
        else
        {
            header("Location: admincategorias.php");
        }
    }
?>