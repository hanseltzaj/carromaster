const compra = new Carrito();
const listaCompra = document.querySelector("#lista-compra tbody");
const carrito = document.getElementById('carrito');
const procesarCompraBtn = document.getElementById('procesar-compra');
const nit = document.getElementById('nit');
const cliente = document.getElementById('cliente');
const departamento = document.getElementById('departamento');
const municipio = document.getElementById('municipio');
const direccion = document.getElementById('direccion');
const telefono = document.getElementById('telefono');
const correo = document.getElementById('correo');
const nombretarjeta = document.getElementById('nombretarjeta');
const tarjetanumero = document.getElementById('tarjetanumero');
const ccv = document.getElementById('ccv');
const fechatarjeta = document.getElementById('fechatarjeta');

cargarEventos();

function cargarEventos() {
    document.addEventListener('DOMContentLoaded', compra.leerLocalStorageCompra());
    carrito.addEventListener('click', (e)=>{compra.eliminarProducto(e)});
    compra.calcularTotal();
    procesarCompraBtn.addEventListener('click', procesarCompra);
    carrito.addEventListener('change', (e)=>{compra.obtenerEvento(e)});
    carrito.addEventListener('keyup', (e)=>{compra.obtenerEvento(e)});
}

function procesarCompra(e){
    e.preventDefault();
    if(compra.obtenerProductosLocalStorage().length === 0){
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'No hay productos, selecciona alguno',
            showConfirmButton: false,
            timer: 2000
        }).then(function(){
            window.location = "comprar.php";
        })
    }
    else if(nit.value === '' || cliente.value === '' || departamento.value === '' || municipio.value === '' || direccion.value === '' || telefono.value === '' || correo.value === ''){
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Ingrese todos los campos requeridos',
            showConfirmButton: false,
            timer: 2000
        })
    }
    else {
        
            if(nombretarjeta.value != '' || tarjetanumero.value != '' || ccv.value != '' || fechatarjeta.value != ''){
                if(nombretarjeta.value === '' || tarjetanumero.value === '' || ccv.value === '' || fechatarjeta.value === ''){
                Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Ingrese todos los campos para la tarjeta',
                showConfirmButton: false,
                timer: 2000
            })
             }
            else
        {
            let listaproductos = compra.obtenerProductosLocalStorage();
            var data = { nitc:nit.value, clie:cliente.value, depa:departamento.value, munic:municipio.value, dire:direccion.value, tel:telefono.value, emc:correo.value, 
                ntar:nombretarjeta.value, numtar:tarjetanumero.value, codtar:ccv.value, fetar:fechatarjeta.value, listaprod:listaproductos};
            $.ajax({
                url: "insertacompra.php",
                data: data,
                method: 'post',
                dataType: 'json',
                success : function(response){

                },
                error: function(error){

                }
            });
            Swal.fire({
                position: 'top-end',
                type: 'success',
                title: 'Compra completada, nos comunicaremos en breve',
                timer: 3000,
                showConfirmButton: false
                }).then(function(){
                    compra.vaciarLocalStorage();
                    window.location = "comprar.php";
                    })
        }
    }
    else
    {
        let listaproductos = compra.obtenerProductosLocalStorage();
        var data = { nitc:nit.value, clie:cliente.value, depa:departamento.value, munic:municipio.value, dire:direccion.value, tel:telefono.value, emc:correo.value, 
                    ntar:nombretarjeta.value, numtar:tarjetanumero.value, codtar:ccv.value, fetar:fechatarjeta.value, listaprod:listaproductos};
        $.ajax({
            url: "insertacompra.php",
            data: data,
            method: 'post',
            dataType: 'json',
            success : function(response){
            },
            error: function(error){
            }                
        });

        Swal.fire({
            position: 'top-end',
            type: 'success',
            title: 'Compra completada, nos comunicaremos en breve',
            timer: 3000,
            showConfirmButton: false
            }).then(function(){
                compra.vaciarLocalStorage();
                window.location = "comprar.php";
                })
    }    
    }
}