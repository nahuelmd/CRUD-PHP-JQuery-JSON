<?php
include '../saleslayer/partials/header.php';
require '../saleslayer/users/users.php';
$users = getUsers();
?>
<!-- Vertically centered modal -->


<div class="main-container">
    <div class="d-flex" id="myLinks">
        <div id="sidebar-container" class="" >
            <div class="logo">
                <img src="/assets/img/logo.png" alt="">
                <h4 class="font-weight-bold" ><span id="esconderlogo">Dashboard Kit</span></h4>
            </div>

            <div class="user-section">
                <div class="avatar">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" alt="Avatar" class="md-avatar rounded-circle">                
                </div>
                <div class="user-info">
                    <h5><span id="esconderNombreAdmin">Sierra Ferguson</span></h5>
                    <p><span id="esconderMailAdmin">s.ferguson@gmail.com</span></p>
                </div>
            </div>
            <div class="menu">
                <a href="#" class="d-block p-2" ><i class="bi bi-columns-gap mr-2 lead"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span id="esconderTitulo" >Dashboard</span> </a>
                <a href="#" class="d-block p-2"><i class="bi bi-view-stacked mr-2 lead"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span id="esconderTitulo2" >Tasks</span> </a>
                <a href="#" class="d-block p-2"><i class="bi bi-envelope mr-2 lead"></i> &nbsp;&nbsp;&nbsp;&nbsp;<span id="esconderTitulo3" >Email</span></a>
                <a href="#" class="d-block p-2"><i class="bi bi-person mr-2 lead"></i> &nbsp;&nbsp;&nbsp;&nbsp;<span id="esconderTitulo4" >Contacts</span></a>
                <a href="#" class="d-block p-2"><i class="bi bi-chat-left mr-2 lead"></i> &nbsp;&nbsp;&nbsp;&nbsp;<span id="esconderTitulo5" >Chats</span></a>                
                <a href="#" class="d-block p-2"><i class="bi bi-layout-three-columns mr-2 lead"></i> &nbsp;&nbsp;&nbsp;&nbsp;<span id="esconderTitulo6" >Deals</span></a>
            </div>
            <div class="settings-section">
                <a href="#" class="d-block p-2"><i class="bi bi-three-dots mr-2 lead"></i>&nbsp;&nbsp;&nbsp;&nbsp; <span id="esconderSettings" >Settings</span> </a>                                
            </div>
            <div class="bottom-section">

                <a href="javascript:void(0);" onclick="myFunction()" class="d-block p-2"><i id="bottom-icon" class="bi bi-layout-sidebar-inset mr-2 lead"></i>&nbsp;&nbsp;&nbsp;&nbsp; <span id="esconderHider">Togle Sidebar</span> </a>                                

            </div>  
        </div>
         
    </div> 

    <div class="right-side-section w-100">


        <div class="notification-section">
            <div class="circulo"></div>
            <div class="bell">
                <i id="bell" class="far fa-bell"></i>
            </div>            
        </div>
        <p> <a href="create.php" class="btn btn-outline-success" id="botoncreate">Add Contact</a></p>
        <div class="contador-checkbox">
        <div class="totalchecked">0 selected <i class="fas fa-trash"></i> </div>
        </div>

        <main class="container">

        <button class="btn btn-success" data-toggle="modal" data-target="#tituloVentana" > PRUEBA</button>

        <div class="modal" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
    
                    <div class="modal-header">
                        <h5 id="tituloVentana">ESTE ES EL TITULO</h5>
                        <button class="close" data-dismiss="modal" arial-label="Cerrar" >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-success" ></div>
                            <h6><strong>Dus tados se guardaron</strong></h6>
                    </div>
    
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="button" data-dismiss="modal"  >
                            cerrar
                        </button>
                        <button class="btn btn-success" type="button" >
                            Acceptar
                        </button>
                    </div>
    
                </div>
            </div>
        </div>

        </main>



    <div class="table-container">
        <table id="tablaContactos" class="table">
            <thead>
                <tr>
                    <th>Select</th>
                    <th>Avatar</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Compañia</th>
                    <th>Role</th>
                    <th>Porcentaje</th>
                    <th>Last Acces</th>
                    <th>CRUD</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td> <input type="checkbox"></td>
                        <td>
                            <?php if (isset($user['extension'])): ?>
                                <img src="<?php echo "users/images/${user['id']}.${user['extension']}" ?>" alt="">
                            <?php endif; ?>
                        </td>

                        <td><?php echo $user['name'] ?></td>
                        <td>
                            <a href="mailto:<?php echo $user['mail'] ?>"><?php echo $user['mail']?></a>
                        </td>
                        <td><?php echo $user['company'] ?></td>
                        <td><?php echo $user['role'] ?></td>
                        <td><?php echo $user['profile_rate'] ?> %</td>
                        <?php  
                            $ultimoAcceso = $user['last_acces'];
                            $fecha_actual = date("Y-m-d");
                            $resta = strtotime($ultimoAcceso) - strtotime($fecha_actual);
                            $diferencia = intval($resta / 86400000);
                            $limpio = abs($diferencia);
                        
                        
                        ?>
                        <td><?php echo $limpio ." ago" ?></td>                        
                        <td>
                            <a href="view.php?id=<?php echo $user['id']?>" class="btn btn-sm btn-outline-info" >VIEW</a>
                            <a href="update.php?id=<?php echo $user['id']?>" class="btn btn-sm btn-outline-secondary" >UPDATE</a>
                            <!-- <a href="delete.php?id=<?php //echo $user['id']?>" class="btn btn-sm btn-outline-danger" >DELETE</a> -->
                            <form action="delete.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $user['id']?>">
                                <button class="btn btn-sm btn-outline-danger" >Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach;;?>
            </tbody>
        </table>
    </div>
    
    </div>


</div>


<?php
include '../saleslayer/partials/footer.php'
?>
