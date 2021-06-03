

        <!-- Muestra cantidad de checkbox marcados -->
        <script>        
            $('input[type=checkbox]').change(function(){
                var number = $('input[type=checkbox]:checked').length;
                $('.totalchecked').html(number + ' selected'  );            
            });
        </script>