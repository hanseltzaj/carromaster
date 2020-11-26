<!DOCTYPE html>
<html lang="spanish">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="img/logo.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/style.css">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <script src="https://kit.fontawesome.com/248401fc7e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/kt-2.5.1/datatables.min.css"/>
  <title>Gestión de categorías</title>
</head>
<body>
<header class="static">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                </div>
                <div class="col-md-4 col-12 text-center"> 
                    <h2 class="my-md-3 site-title text-white"><img src="img/portadabelhsa.png" width="200px" alt=""></h2>
                </div>
            </div>
        </div>
    </header>
<?php

    include("db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM categoria WHERE idCategoria = $id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $title = $row['nCategoria'];
        }
    }
    if (isset($_POST['updateCategory'])) {
        $id = $_GET['id'];
        $title = $_POST['titleCategory'];

        $querysin = "SELECT * FROM categoria WHERE idCategoria = $id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $anterior = $row['nCategoria'];
        }

        $query = "UPDATE categoria set nCategoria = '$title' WHERE idCategoria=$id";
        mysqli_query($conn, $query);
        $query2 = "UPDATE producto set producto.nCategoria = '$title' WHERE producto.nCategoria='$anterior'";
        
        mysqli_query($conn, $query2);
        
        echo'<script type="text/javascript">window.location.href="admincategorias.php";</script>';
    }
?>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                <center><h2>MODIFICACIÓN DE CATEGORÍAS</h2></center>
                    <form action="editcategory.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                        Nombre de Categoría:<input type="text" REQUIRED name="titleCategory" value="<?php echo $title; ?>" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                        
                            <button class="btn btn-success" name="updateCategory">
                                Actualizar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablita').DataTable({
            language: {
                processing:     "Procesando...",
                search:         "Buscar:",
                lengthMenu:    "Mostrar _MENU_ registros",
                info:           "Mostrando de _START_ a _END_ de _TOTAL_ registros",
                infoEmpty:      "Mostrando de 0 a 0 de 0 registros",
                infoFiltered:   "(filtrado de _MAX_ entradas totales)",
                infoPostFix:    "",
                loadingRecords: "Cargando registros...",
                zeroRecords:    "Ningún registro coincide",
                emptyTable:     "Sin registros",
                paginate: {
                    first:      "primero",
                    previous:   "anterior",
                    next:       "siguiente",
                    last:       "último"
                },
                aria: {
                    sortAscending:  ": mostrar en orden ascendente",
                    sortDescending: ": mostrar en orden descendente"
                }
            }
        } );
	});
</script>
</html>