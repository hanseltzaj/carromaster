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
  <title>Ventas descartadas</title>
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
            <div class="container">
            <center><h2>VENTAS DESCARTADAS</h2></center>

                    <table id="tablita" class="table table-bordered responsive">
                        <thead>
                            <tr>
                                <th>Datos del Cliente</th>
                                <th>Productos</th>
                                <th>Importe</th>
                                <th>Fecha de compra</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM recibo WHERE estado='Descartado'";
                                $resultTask = mysqli_query($conn, $query);
                                while($row = mysqli_fetch_array($resultTask)){ 
                                    $idclie = $row['idCliente'];
                                    $query2 = "SELECT * FROM cliente WHERE idCliente=$idclie";
                                    $resultTask2 = mysqli_query($conn, $query2);
                                    $row2 = mysqli_fetch_array($resultTask2); ?>
                                    <tr>
                                        <td><center>
                                        Nit del cliente : <p><?php echo $row2['nitCliente'];?></p>
                                        Nombre del cliente : <p><?php echo $row2['nCliente'];?></p>
                                        Departamento : <p><?php echo $row2['depaCliente'];?></p>
                                        Municipio :<p><?php echo $row2['muniCliente'];?></p>
                                        Dirección : <p><?php echo $row2['dCliente'];?></p>
                                        Teléfono : <p><?php echo $row2['tCliente'];?></p>
                                        Correo electrónico : <p><?php echo $row2['cCliente'];?></p>    
                                        </center></td>
                                        <?php 
                                            $idcomp = $row['idCompra'];
                                            $query3 = "SELECT * FROM venta WHERE idCompra=$idcomp";
                                            $resultTask3 = mysqli_query($conn, $query3);?>
                                            <td><center>
                                            <?php
                                                while($row3 = mysqli_fetch_array($resultTask3)){?>
                                                <p>- <?php echo $row3['nProducto'];?></p>
                                                <p>Cantidad: <?php echo $row3['vCantidad'];?></p>
                                                <p>P/U: Q <?php echo $row3['precio'];?></p>
                                                <?php } ?>
                                            </td></center>
                                            <td><center>
                                        <p>Q <?php echo $row['Total'];?></p>
                                        </center></td>
                                        
                                        <td><center>
                                        <?php 
                                        $query4 = "SELECT * FROM compra WHERE idCompra=$idcomp";
                                        $resultTask4 = mysqli_query($conn, $query4);
                                        $row4 = mysqli_fetch_array($resultTask4); ?>
                                        <p><?php echo $row4['fCompra'];?></p>
                                        </center></td>
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