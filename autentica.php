<?php
    include("db.php");
    if(isset($_POST['submit']))
    {
        $usuario = $_POST['usuario'];
        $contra = $_POST['password'];
        $contra = hash('sha512', $contra);
        $query = "SELECT * FROM usuario WHERE nUsuario = '$usuario' and cUsuario = '$contra'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            session_start();
	        $_SESSION['usuario'] = 'Administrador';
            header("Location: adminindex.php");
        }
        else
        {
            header("Location: loginadmin.php");
        }
    }
?>