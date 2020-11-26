    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
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