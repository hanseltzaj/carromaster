<?php
    session_start();
	error_reporting(0);

	$varsesion = $_SESSION['usuario'];
	
	if($varsesion == null || $varsesion = ''){
		echo 'No tiene autorización';
		die();
    }
?>
<?php include("db.php")?>
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
  <title>Gestión de productos</title>
</head>
<body>
<header>
<div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"> <img class="logito" src="img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="adminindex.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admincategorias.php">Categorías</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adminhistorial.php">Historial de Ventas</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="adminventas.php">Ventas por efectuar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admindescartadas.php">Ventas descartadas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cierra.php">Salir</a>
                    </li>
                </ul>
            </div>
        </nav>
</div>
</header>
    <div class="container p-8 espacioarriba">
        <div class="row">
                <div class="card card-body">
                <center><h2>INGRESO PRODUCTO</h2></center>
                    <form action="save.php" method="POST" enctype="multipart/form-data">
                        <center>
                        <div class="form-group">
                            Nombre del producto: 
                            <input type="text" REQUIRED name="title" clas="form-control" placeholder="Título" autofocus>
                        </div>
                        </center>
                        <center>
                        <div class="form-group">
                            Categría: 
                            <select id="agileinfo-nav_search" name="categoria" class="border" REQUIRED>
								<?php
                                	$query = "SELECT * FROM categoria";
                                	$resultTask = mysqli_query($conn, $query);
                                	while($row = mysqli_fetch_array($resultTask)){ ?>
										<option value="<?php echo $row['nCategoria']?>"><?php echo $row['nCategoria']?></option>
                            	<?php } ?>
						    </select>
                        </div>
                        </center>      
                        <div class="form-group">
                            Descripción del producto: 
                            <textarea name="description" REQUIRED rows="2" class="form-control" placeholder="Descripción"></textarea>
                        </div>
                        <center>
                        <div class="form-group">
                            Precio del producto: 
                            Q<input type="text" REQUIRED name="precio" clas="form-control" placeholder="Precio" autofocus>
                        </div>
                        </center>
                        <center>
                        Imagen: <input type="file" REQUIRED name="imagen"/>
                        <input type="submit" class="btn btn-success btn-bloc" name="save_task" value="Guardar">
                        </center>
                    </form>
                </div>
            <div class="container">
            <br>
            <br>
            <br>
            </div>
            <div class="container">
            <center><h2>PRODUCTOS EXISTENTES</h2></center>
                    <table id="tablita" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Categoría</th>
                                <th>Precio</th>
                                <th>Imagen</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM producto";
                                $resultTask = mysqli_query($conn, $query);
                                while($row = mysqli_fetch_array($resultTask)){ ?>
                                    <tr>
                                        <td><center><?php echo $row['nProducto']; ?></center></td>
                                        <td><center><?php echo $row['dProducto']; ?></center></td>
                                        <td><center><?php echo $row['nCategoria']; ?></center></td>
                                        <td><center><?php echo $row['pProducto']; ?></center></td>
                                        <td><center><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" alt=""></center></td>
                                        <td>
                                            <center>
                                            <a href="edit.php?id=<?php echo $row['idProducto']?>" class="btn btn-primary">
                                                <i class="fas fa-marker"></i> Editar
                                            </a>
                                            <a href="delete.php?id=<?php echo $row['idProducto']?>" class="btn btn-danger">
                                                <i class="far fa-trash-alt"></i> Eliminar
                                            </a>
                                            </center>
                                        </td>
                                    </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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