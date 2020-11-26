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
    <title>Página principal</title>
</head>
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
                        <li class="nav-item">
                            <a class="nav-link" style="font-size:1.1em;" href="comprar.php" >
                                Compra en línea
                            </a>
                        </li>
                    </ul>
                </div>
            
            </nav>
        </div>
    </header>
    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/slide02.png" alt="First slide">   
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/slide03.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/slide04.png" alt="Third slide">
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </main>

    <footer class="page-footer font-small font-roboto blue-grey lighten-5">
        <div style="background-color: lightblue;">
            <div class="container">
                <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0">Síguenos en las redes sociales</h6>
                    </div>
                    <div class="col-md-6 col-lg-7 text-center text-md-right">   
                        <a class="fb-ic" href="https://es-la.facebook.com/corporacionbelhsa/">
                            <i class="fab fa-facebook-f white-text mr-4"> </i>
                        </a>
                        <a class="ins-ic">
                            <i class="fab fa-instagram white-text"> </i>
                        </a>
                    </div>  
                </div>
            </div>
        </div>
        <div class="container text-center text-md-left mt-5">
            <div class="row mt-4 dark-grey-text">
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <img src="img/logo.png" style="width:13em; height: 13em;" alt="">
                </div>
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <h6 class="text-uppercase font-weight-bold">VISIÓN</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p style="text-align: justify;">Ser el proveedor #1 en Materiales y equipos eléctricos, Iluminación, y Herramientas, logrando la satisfacción total del consumidor con la CALIDAD en los productos y servicios que ofrecemos.</p>
                </div>
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <h6 class="text-uppercase font-weight-bold">MISIÓN</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p style="text-align: justify;">Somos una empresa Innovadora en CALIDAD de Materiales y Mano de obra, siempre buscando que nuestros Productos sean preferidos por los clientes  y que cada contacto de BELHSA al consumidor final sea una experiencia positiva.</p>
                </div>
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <h6 class="text-uppercase font-weight-bold">Contáctanos</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> 13 av. 3-46 zona 3, Quetzaltenango</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> ventas@belhsa.com.gt</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> (502) 7765 1212</p>
                    <p>
                        <i class="fas fa-print mr-3"></i> (502) 7765 1213</p>
                </div>
            </div>
        </div>

        <div style="background-color: lightblue;">
            <footer id="sticky-footer" class="py-4 text-black">
                <div class="container text-center">
                    <small>Copyright &copy; librería el Peregrino</small>
                </div>
            </footer>
        </div>
    </footer>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/pedido.js"></script>
    <script src="js/categories.js"></script>
</body>
</html>