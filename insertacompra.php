<?php
    $nitcliente = $_POST['nitc'];
    $nombre = $_POST['clie'];
    $depaCliente = $_POST['depa'];
    $muniCliente = $_POST['munic'];
    $direccion = $_POST['dire'];
    $telefono = $_POST['tel'];
    $correo = $_POST['emc'];
    $nomtarjeta = $_POST['ntar'];
    $numtarjeta = $_POST['numtar'];
    $codtarjeta = $_POST['codtar'];
    $fechatarjeta = $_POST['fetar'];
    $productos = $_POST['listaprod'];
    require("db.php");

    $query1 = "SELECT * FROM compra";
    $result = mysqli_query($conn, $query1);
    $idcompra = mysqli_num_rows($result) + 1;

    $query2 = "INSERT INTO compra (idCompra) VALUES ('$idcompra')";
    $result = mysqli_query($conn, $query2);
    if(!$result){
        die("Query Failed");
    }

    $query5 = "SELECT * FROM cliente";
    $result = mysqli_query($conn, $query5);
    $idcliente = mysqli_num_rows($result) + 1;

    $query3 = "INSERT INTO cliente (idCliente, nitCliente, nCliente, depaCliente, muniCliente, dCliente, tCliente, cCliente, nTarjeta, numTarjeta, codTarjeta, fechaTarjeta) VALUES ($idcliente, '$nitcliente', '$nombre', '$depaCliente', '$muniCliente', '$direccion', 
            '$telefono', '$correo', '$nomtarjeta', '$numtarjeta', '$codtarjeta', '$fechatarjeta')";
    $result = mysqli_query($conn, $query3);
    if(!$result){
        die("Query Failed");
    }
    $total = 0;
    for ($i = 0; $i < count($productos) ; $i++) {
        $np = $productos[$i]['titulo'];
        $prp = $productos[$i]['cantidad'];
        $pp = $productos[$i]['precio'];
        $total = $total + ($prp*$pp);
        $query4 = "INSERT INTO venta(nProducto, vCantidad, precio, idCompra) VALUES ('$np', $prp, $pp, $idcompra)";
        $result = mysqli_query($conn, $query4);
        if(!$result){
            die("Query Failed");
        }
    }
    
    $query6 = "INSERT INTO recibo(idCompra, idCliente, Total, Estado) VALUES ($idcompra, $idcliente, $total, 'Sin Procesar')";
    $result = mysqli_query($conn, $query6);
        if(!$result){
            die("Query Failed");
        }
?>