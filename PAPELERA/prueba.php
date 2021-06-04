<script>

var checkbox = document.getElementById('lobo');
checkbox.addEventListener("change", validaCheckbox, false);

function validaCheckbox()
{    
    var checked = checkbox.checked;
    var contador = 10;

    if(checked){
        // console.log('Funciona')
        // alert('checkbox1 esta seleccionado');
        contador++;
        document.getElementById("resultado").innerHTML = contador + ' '+'Selected'
        alert($('#checkbox:checked').size());
    }

    if(!checked){
        // console.log('Funciona')
        // alert('checkbox1 esta seleccionado');
        contador+1;
        document.getElementById("resultado").innerHTML = contador
        alert($('#checkbox:checked').size());
    } 
}

checked.foreach(function(prueba, index){
    console.log(`${index} : ${prueba}`);
})

</script>