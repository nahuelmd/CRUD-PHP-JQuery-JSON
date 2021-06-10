<!-- PRUEBA BOOSTRAP 4 -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


<!-- JS JQUERY -->
<script src="../assets/js/jquery-3.5.1.js" ></script>

<script src="../assets/js/jquery.dataTables.min.js" ></script>
<script src="/assets/js/bootstrap.bundle.min.js.map" ></script>



<!-- <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js" ></script> -->
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js" ></script>

    <script>
    $(document).ready(function() {


        $('#tablaContactos').DataTable({
           "language": {
            search: '<i class="fas fa-search" aria-hidden="true"></i>',
            searchPlaceholder: 'Search for a contact'
            }
        });
        
    } );
    </script>
    

    <!-- CHECK ALL -->
    <script>
    $('#checkall').change(function(){
        $('.checkbox').prop("checked", $(this).prop("checked"))
    })
    </script>


    
    <!-- Muestra cantidad de checkbox marcados -->
    <script>        
    $('input[type=checkbox]').change(function(){
        var number = $('input[id=contador]:checked').length;
        console.log(number)
        $('head').append(`<style>.totalchecked2::after{ content:'${number}' }</style>`);
        //  $('.totalchecked2').html(number + ' selected'  ); 
         $('.totalchecked2').html(number ); 
        
        // var pepa = document.querySelector("#jamon");
        // pepa.style.color = "red";
        // pepa.style.attr(data-content) = "red";

    });
    
    
    
    </script>

    <script>
        // var number = 5
        // $('head').append(`<style>#jamon::after{ content:'${number}' }</style>`);
    </script>




    <!-- HIDE MENU -->
    <script>
        window.onload = function myFunction() {
            var x = document.getElementById("sidebar-container");
            var titulo = document.getElementById("esconderTitulo");   
            var titulo2 = document.getElementById("esconderTitulo2");   
            var titulo3 = document.getElementById("esconderTitulo3");   
            var titulo4 = document.getElementById("esconderTitulo4");   
            var titulo5 = document.getElementById("esconderTitulo5");        
            var titulo6 = document.getElementById("esconderTitulo6");
            var settings = document.getElementById("esconderSettings");
            var nombre = document.getElementById("esconderNombreAdmin");   
            var mail = document.getElementById("esconderMailAdmin"); 
            var logo = document.getElementById("esconderlogo");
            var hidder = document.getElementById("esconderHider");
            var buscador = document.querySelector("#tablaContactos_wrapper > div:nth-child(1) > div:nth-child(2)");
            
            
            var trash = document.getElementById("delete");
            var contadorCheckbox = document.querySelector("body > div > div.right-side-section.w-100 > div.contador-checkbox");
            

            
            
            
            if (titulo.style.display == "inline") {
                
                x.style.width = "4vw";
                titulo.style.display = "none";
                titulo2.style.display = "none";
                titulo3.style.display = "none";
                titulo4.style.display = "none";
                titulo5.style.display = "none";
                titulo6.style.display = "none";
                settings.style.display = "none";
                nombre.style.display = "none";
                mail.style.display = "none";
                logo.style.display = "none";
                hidder.style.display = "none";
                buscador.style.left = "4vw";
                
                
                
                trash.style.left= "300px";
                contadorCheckbox.style.left= "170px";
                
                


            } else {
                

                    x.style.width = "20vw";
                    titulo.style.display = "inline";
                    titulo2.style.display = "inline";
                    titulo3.style.display = "inline";
                    titulo4.style.display = "inline";
                    titulo5.style.display = "inline";
                    titulo6.style.display = "inline";
                    settings.style.display = "inline";
                    nombre.style.display = "inline";
                    mail.style.display = "inline";
                    logo.style.display = "inline";
                    hidder.style.display = "inline";
                    
                    
                    trash.style.left= "612px";
                    contadorCheckbox.style.left= "470px";
                    
                    

                
            }

        }

        function myFunction() {
            var x = document.getElementById("sidebar-container");
            var titulo = document.getElementById("esconderTitulo");   
            var titulo2 = document.getElementById("esconderTitulo2");   
            var titulo3 = document.getElementById("esconderTitulo3");   
            var titulo4 = document.getElementById("esconderTitulo4");   
            var titulo5 = document.getElementById("esconderTitulo5");        
            var titulo6 = document.getElementById("esconderTitulo6");
            var settings = document.getElementById("esconderSettings");
            var nombre = document.getElementById("esconderNombreAdmin");   
            var mail = document.getElementById("esconderMailAdmin"); 
            var logo = document.getElementById("esconderlogo");
            var hidder = document.getElementById("esconderHider");
            var buscador = document.querySelector("#tablaContactos_wrapper > div:nth-child(1) > div:nth-child(2)");
            
            
            var trash = document.getElementById("delete");
            var contadorCheckbox = document.querySelector("body > div > div.right-side-section.w-100 > div.contador-checkbox");
            
            

            
            
            if (titulo.style.display === "inline") {
                console.log('Lo como inline');
                x.style.width = "4vw";
                titulo.style.display = "none";
                titulo2.style.display = "none";
                titulo3.style.display = "none";
                titulo4.style.display = "none";
                titulo5.style.display = "none";
                titulo6.style.display = "none";
                settings.style.display = "none";
                nombre.style.display = "none";
                mail.style.display = "none";
                logo.style.display = "none";
                hidder.style.display = "none";
                buscador.style.left = "4vw";
                buscador.style.width = "96vw";

                
                trash.style.left= "300px";
                contadorCheckbox.style.left= "170px";
                

            } else {
                console.log('PASO ya ALGO');
                console.log('PASO va a pasar ALGO');

                    x.style.width = "20vw";
                    titulo.style.display = "inline";
                    titulo2.style.display = "inline";
                    titulo3.style.display = "inline";
                    titulo4.style.display = "inline";
                    titulo5.style.display = "inline";
                    titulo6.style.display = "inline";
                    settings.style.display = "inline";
                    nombre.style.display = "inline";
                    mail.style.display = "inline";
                    logo.style.display = "inline";
                    hidder.style.display = "inline";
                    buscador.style.left = "20vw";
                    buscador.style.width = "80vw";

                    
                    trash.style.left= "612px";
                    contadorCheckbox.style.left= "470px";
                    
                
            }

        }
    </script>


<!-- MODAL== -->
    <script>
        $('#ventanaModal').on('shown.bs.modal', function () {
  $('#tituloVentana').trigger('focus')
})
    </script>

<!-- Select filter -->
<script src="/assets/js/ddtf.js"></script>
<script>
jQuery('#tablaContactos').ddTableFilter();
</script>


<!-- LABEL DE FORM -->
<script>
        $(function() {
    $(".form-control").focus(function() {
    $(this).prev("label").css("color", "var(--defaultPrimario)").css("visibility", "visible"); //hide label of clicked item 
    }).blur(function() {
    $(this).prev("label").css("color", "var(--grisClaroform)").css("visibility", "hidden");
    });

    });
</script>


<!-- FILTRO CON ICONOS -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="/assets/js/bootstrap-select.js"></script>

<script>
$(document).ready(function() {
  // Initiate with custom caret icon
  $('select.form-control').form-control({
    caretIcon: 'glyphicon glyphicon-menu-down'
  });
});

</script>

    
    

</body>
</html>