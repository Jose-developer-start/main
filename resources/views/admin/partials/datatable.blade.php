 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>


       <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
                 <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
                  <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>






    <script>
/*+++++++++++++++++++++++++++++++++++++++++  Funciones de la libreria datatable  +++++++++++++++++++++++++*/
        $(document).ready( function () {
            $('#table_id').DataTable({
                "language": {
                "url" : "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
                },
                "lengthMenu": [[5, 10, 20,50, -1], [5, 10, 20,50, "All"]]
            });
        } );

          $(document).ready( function () {
            $('#table_rep').DataTable({
                retrieve: true,
    paging: false,
               dom: 'Bfrtip',
        buttons: [
             'excel', 'pdf', 'print'
        ],
                "language": {
                "url" : "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
                },

            });
        } );



        // funcion de buscador, mostrar y paginacion para proveedor
         $(document).ready( function () {
            $('#table_proveedor').DataTable({
                "language": {
                "url" : "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
                },
                "lengthMenu": [[5, 10, 20,50, -1], [5, 10, 20,50, "All"]]
            });
        } );

         // funcion de buscador, mostrar y paginacion para usuarios
           $(document).ready( function () {
            $('#table_usuarios').DataTable({
                "language": {
                "url" : "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
                },
                "lengthMenu": [[5, 10, 20,50, -1], [5, 10, 20,50, "All"]]
            });
        } );
           // funcion de buscador, mostrar y paginacion para inventario
           $(document).ready( function () {
            $('#table_inventario').DataTable({
                "language": {
                "url" : "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
                },
                "lengthMenu": [[5, 10, 20,50, -1], [5, 10, 20,50, "All"]]
            });
        } );

              // funcion de buscador, mostrar y paginacion para Categorias
           $(document).ready( function () {
            $('#table_categoria').DataTable({
                "language": {
                "url" : "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
                },
                "lengthMenu": [[5, 10, 20,50, -1], [5, 10, 20,50, "All"]]
            });
        } );


                  // funcion de buscador, mostrar y paginacion para Marcas
           $(document).ready( function () {
            $('#table_marcas').DataTable({
                "language": {
                "url" : "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
                },
                "lengthMenu": [[5, 10, 20,50, -1], [5, 10, 20,50, "All"]]
            });
        } );

                     // funcion de buscador, mostrar y paginacion para Reporte  reportes
           $(document).ready( function () {
            $('#table_reportes').DataTable({
                "language": {
                "url" : "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
                },
                "lengthMenu": [[5, 10, 20,50, -1], [5, 10, 20,50, "All"]]
            });
        } );
    </script>

<link rel="" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
<link rel="" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

<link rel="" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">




