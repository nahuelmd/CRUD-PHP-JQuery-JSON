<?php

ob_start();

include '../saleslayer/partials/header.php';
require '../saleslayer/users/users.php';
$users = getUsers();
?>


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
        <div class="spacer200"></div>
        <!-- <p> <a href="create.php" class="btn btn-outline-success" id="botoncreate">Add Contact</a></p> -->
        
        <div class="text-company-filter">
            <p>Company:</p>
        </div>
        
        <div class="contador-checkbox">

            <div class="round">

                <input class="totalchecked" id="checkall" type="checkbox" style="text-align: center;"  >
                
                <label class="totalchecked2"  for="checkall"></label>

                <p class="selected-text">selected</p>

            </div>
            
            
            <!-- <div class="totalchecked2"> selected</div> -->

        </div>
        
            
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" id="botoncreate" data-toggle="modal" data-target="#exampleModal">
        Add contact
        </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">                
                <?php      
                $user = [
                    'id' => '',
                    'name' => '',
                    'mail' => '',
                    'compañy' => '',
                    'role' => '',
                    'profile_rate' => '',
                    'last_access' => '',
                ];
                $errors = [
                    'name' => "",
                    'mail' => "",
                    'company' => "",
                    'role' => "",
                    'profile_rate' => "",
                    'last_access' => "",
                ];
                $isValid = true;
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {    
                    $user = array_merge($user, $_POST);
                    $isValid = validateUser($user, $errors);
                    if($isValid){
                    $user = createUser(($_POST));    
                    uploadImage($_FILES['userfile'], $user);    
                    
                    
                    }
                    header("Location: clean-form.php");
                    
                }
                ?>
                <?php include '_form.php'; ?>



    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="boton-cancel" data-dismiss="modal">Cancel</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
    </div>
    </div>
    </div>


    <div class="table-container">
        <form action="delete-multi.php" method="POST">
        <table id="tablaContactos" class="table">
            <thead>
                <tr>
                    <th>Select</th>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Mail</th>
                    <th>All</th>
                    <th>Role</th>
                    <th>Rate</th>
                    <th>Last Acces</th>
                    <th class="hide-crud">CRUD</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                    <td>    
                        <div class="round2">

                            <input id="contador" type='checkbox' class="checkbox" name='checkbox[]' value='<?= $user['id'] ?>' >
                            <label class="check-tabla" id="contador" for=""></label>
                        </div>
                            
                            
                        </form>
                        
                    </td>
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
                        <td><?php echo $limpio ." days ago" ?></td>                        
                        <td class="hide-crud">
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

        <button type='submit' value='delete records' id="delete" name='delete'><i class="fas fa-trash"></i></button>
        

    </div>

</div>



</div>



<?php
include '../saleslayer/partials/footer.php';
ob_end_flush();
?>
