<?php
    $datos = file_get_contents("test-data.json");
    $contactos = json_decode($datos, true);
    //echo ($contactos);

    $fecha = $contactos[$i]['last_access'];
    //echo  ($fecha);

    for ($i = 0; $i < count($contactos); $i++) {
        $fecha = $contactos[$i]['last_access'];
        echo  ($fecha) ?> <br> <?php ;

    }
    
    // include 'datos.php';
    foreach ($contactos as $valor ) {
        $contenido = $valor['name'] . $valor['mail'];
        //echo ($contenido);
    }
?>


<table id="tablaContactos" class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Compañia</th>
      <th scope="col">Role</th>
      <th scope="col">Porcentaje</th>
      <th scope="col">Tiempo desde el ultimo acceso</th>
    </tr>
  </thead>

  <tbody>
  <?php  for ($i = 0; $i < count($contactos); $i++) {  ?>
    <tr>
      <th scope="row"><input type="checkbox"></th>
      <td><?php echo $contactos[$i]['name'] ?></td>
      <td><?php echo $contactos[$i]['mail'] ?></td>
      <td><?php echo $contactos[$i]['company'] ?></td>
      <td><?php echo $contactos[$i]['role'] ?></td>
      <td><?php echo $contactos[$i]['profile_rate'] ?></td>
      <td><?php echo $contactos[$i]['last_access'] ?></td>
      
    </tr>

    <?php } ?>
  </tbody>
</table>
