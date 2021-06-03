<!-- JS JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js" ></script>
    <script>
        $(document).ready(function() {
        $('#tablaContactos').DataTable();
        } );
    </script>
    
    <!-- Muestra cantidad de checkbox marcados -->
    <script>        
    $('input[type=checkbox]').change(function(){
        var number = $('input[type=checkbox]:checked').length;
        $('.totalchecked').html(number + ' selected'  );            
    });
    </script>



    <!-- JS DE BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- JS DE DATATABLES -->
    <script src="cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

</body>
</html>