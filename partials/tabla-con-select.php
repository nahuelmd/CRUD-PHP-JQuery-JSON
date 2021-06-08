<!-- PRUEBA BOOSTRAP 4 -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


<!-- JS JQUERY -->
<script src="../assets/js/jquery-3.5.1.js" ></script>
<script src="../assets/js/jquery.min.js" ></script>
<script src="../assets/js/jquery.dataTables.min.js" ></script>



<!-- <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js" ></script> -->
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js" ></script>

    <script>
    $(document).ready(function() {
            var mytable = $('#tablaContactos').DataTable({
            ajax: 'test-data.json',
            columndDefs: [
                {
                    target: 0,
                    checkboxes: {
                        seletRow: true
                    }
                }
            ],
            select:{
                style: 'multi'
            },
            order:[[1, 'asc']]
        });
        $("#myform").on('submit', function(e){
            var form = this
            var rowsel = mytable.column(0).checkboxes.selected();
            $each(rowsel, function(index, rowId){
                $(form).append(
                    $('<input>').attr('type', 'hidden').attr('name', 'id[]').val(rowID)
                )
            })
            $("#view-rows").text(rowsel.join(","))
            $("#view-form").text($(form).serialize())
            $('input[name="id\[\]"]', form).remove()
            e.preventDefault()
        })
    } );
    </script>


    
    <!-- Muestra cantidad de checkbox marcados -->
    <script>        
    $('input[type=checkbox]').change(function(){
        var number = $('input[type=checkbox]:checked').length;
        $('.totalchecked').html(number + ' selected'  );            
    });
    </script>




    
    

</body>
</html>