<!DOCTYPE html>
<html lang="spanish">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="img/logo.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" href="css/stylesheet.css">
  <script src="https://kit.fontawesome.com/248401fc7e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/kt-2.5.1/datatables.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <title>Login</title>
</head>
<body class="bg-image">
<header class="static">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                </div>
                <div class="col-md-4 col-12 text-center"> 
                <h2 class="my-md-3 site-title text-white"><img src="img/portada.png" width="200px" alt=""></h2>
                </div>
            </div>
        </div>
    </header>
  <div class="container">
    <form action="autentica.php" method="post">
        <a href="index.php"><i class="fa fa-arrow-left"></i>Regresar</a>
        <center>
          <h2>AUTENTICACIÓN</h2> <br> <br>
        </center>
      <div class="input-group">
        <i class="fa fa-user-o icons" aria-hidden="false"></i>
        <input type="text" REQUIRED name="usuario" placeholder="Usuario" class="form-control">
      </div>
      <br>
      <div class="input-group">
        <i class="fa fa-lock icons" aria-hidden="false"></i>
        <input type="password" REQUIRED name="password" placeholder="Contraseña" class="form-control">
      </div>
      <button type="submit" name="submit" style="width: 100%; cursor: pointer; border: transparent;
      height: 35px;
      background-color: #009DE6;
      color: #fff;
      font-family: sans-serif;
      margin-bottom: 10px;
      font-weight: bold;
      outline: 0;">Ingresar</button>
    </form>
  </div>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/sweetalert2.min.js"></script>
</body>
</html>