<!DOCTYPE html>
<html lang="spanish">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/logo.png" type="image/png">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/kt-2.5.1/datatables.min.css"/>
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Catálogo de productos</title>
</head>
<?php include("db.php");?>
<body>
    <header>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href=""> <img class="logito" src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" style="font-size:1.1em;" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="font-size:1.1em;" href="#" id="navbarDropdown all" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categorías
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item category_item" id="all" href="#">Todas las categorías</a>
                                <?php
                                    $query = "SELECT * FROM categoria";
                                    $resultTask = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_array($resultTask)){ ?> 
                                        <div class="category_item" id="<?php echo $row['nCategoria']; ?>">
                                        <a class="dropdown-item" href="#"><?php echo $row['nCategoria']; ?></a>
                                        </div>
                                    <?php } ?>
                            </div>
                        </li>
                        <li class="nav-item">
                            <p class="nav-link" style="font-size:1.1em;">Clic en el carrito para ver su pedido</p>
                        </li>
                        <li class="nav-item dropdown">
                            <img src="img/cart.jpeg" class="nav-link dropdown-toggle img-fluid" height="70px"
                                    width="70px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"></img>
                            <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                <table id="lista-carrito" class="table">
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                                <center>
                                <a href="#" id="vaciar-carrito" class="btn btn-danger btn-block">Vaciar Carrito</a>
                                <a href="#" id="procesar-pedido" class="btn btn-primary btn-block">Procesar Compra</a>
                                </center>
                            </div>
                        </li>
                    </ul>
                </div>
            
            </nav>
        </div>
    </header>
    
    <main>
        <div class="mx-auto text-center">
            <h1 class="display-4 mt-4">NUESTROS PRODUCTOS</h1>
            <p class="lead"><img src="img/contraentrega.png" width="80em" alt=""> Paga al recibir  o <img src="img/pagotarjeta.jpg" width="80em" alt=""> Paga con tarjeta</p>
            
        </div>
        <center>
        <div class="block_container">
        <div class="container productos" id="lista-productos">
            
            <div class="row center-xs">                
                <?php
                    $query = "SELECT * FROM producto";
                    $resultTask = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($resultTask)){ ?> 
                       <div class="animal_item <?php echo $row['nCategoria'];?>">
                        
                            
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-bold"><?php echo $row['nProducto']; ?></h4>
                                </div>
                                <div class="card-body">
                                    <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" height="180px" class="card-img-top">
                                    <h1 class="card-title pricing-card-title precio">Q <span class=""><?php echo $row['pProducto']; ?></span></h1>
                                    <p><?php echo $row['dProducto']; ?></p>
                                    <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="<?php echo $row['idProducto']; ?>">Comprar</a>
                                </div>
                            </div>
                        
                        </div>
                        <?php } ?>
            </div>
            
        </div>
        </div>
        </center>
    </main>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/pedido.js"></script>
    <script src="js/categories.js"></script>

</body>

<div style="background-color: lightblue;">
            <footer id="sticky-footer" class="py-4 text-black">
                <div class="container text-center">
                    <small>Copyright &copy; librería el Peregrino</small>
                </div>
            </footer>
        </div>
</html>