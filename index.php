<?php

include '../saleslayer/partials/header.php';


require 'users.php';

$users = getUsers();

?>

<div class="main-container">
    
    
    <div class="d-flex">
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                
                <img src="/assets/img/logo.png" alt="">
                <h4 class="font-weight-bold" >Dashboard Kit</h4>
            </div>

            <div class="user-section">
                
                <div class="avatar">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" alt="Avatar" class="md-avatar rounded-circle">                
                </div>

                <div class="user-info">
                    <h5>Sierra Ferguson</h5>
                    <p>s.ferguson@gmail.com</p>
                </div>
            </div>

            <div class="menu">
                <a href="#" class="d-block p-2" ><i class="bi bi-columns-gap mr-2 lead"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</a>
                <a href="#" class="d-block p-2"><i class="bi bi-view-stacked mr-2 lead"></i>&nbsp;&nbsp;&nbsp;&nbsp;Tasks</a>
                <a href="#" class="d-block p-2"><i class="bi bi-envelope mr-2 lead"></i> &nbsp;&nbsp;&nbsp;&nbsp;Email</a>
                <a href="#" class="d-block p-2"><i class="bi bi-person mr-2 lead"></i> &nbsp;&nbsp;&nbsp;&nbsp;Contacts</a>
                <a href="#" class="d-block p-2"><i class="bi bi-chat-left mr-2 lead"></i> &nbsp;&nbsp;&nbsp;&nbsp;Chats</a>                
                <a href="#" class="d-block p-2"><i class="bi bi-layout-three-columns mr-2 lead"></i> &nbsp;&nbsp;&nbsp;&nbsp;Deals</a>
            </div>

            <div class="settings-section">
                <a href="#" class="d-block p-2"><i class="bi bi-three-dots mr-2 lead"></i>&nbsp;&nbsp;&nbsp;&nbsp; Settings</a>                                
            </div>

            <div class="bottom-section">
                <a href="#" class="d-block p-2"><i id="bottom-icon" class="bi bi-layout-sidebar-inset mr-2 lead"></i>&nbsp;&nbsp;&nbsp;&nbsp; Togle Sidebar</a>                                
            </div>  

            
        
        </div>
         
    </div> 
    
    <div class="right-side-section w-100">
        <div class="w-100" id="search-bar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <form class="d-flex">
                        <button class="btn btn-search position-absolute" type="submit"><i class="bi bi-search"></i></button>
                        <input id="search"  class="form-control me-2" type="search" placeholder=" Search for a contact" aria-label="Search">
                        
                    </form>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        
                    </ul>

                    </div>
                </div>
            </nav>
        </div>

        <div class="prueba">
            <h1>PRUEBA</h1>
        </div>

        <div class="contador-checkbox">

        <div class="totalchecked">0 selected</div>

        </div>

        <?php
        //include 'datos.php';
        ?>
        <table id="tablaContactos" class="table"  >
            <thead>
                <tr>
                    <th>Seleccionar</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Compañia</th>
                    <th>Role</th>
                    <th>Porcentaje</th>
                    <th>Tiempo desde ultimo acceso</th>
                    <th>CRUD</th>
                    
                </tr>
            
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td> <input type="checkbox"></td>
                        <td><?php echo $user['name'] ?></td>
                        <td>
                            <a href="mailto:<?php echo $user['mail'] ?>">

                            <?php
                                echo $user['mail']

                            ?>

                            </a>

                        </td>
                        <td><?php echo $user['company'] ?></td>
                        <td><?php echo $user['role'] ?></td>
                        <td><?php echo $user['profile_rate'] ?></td>
                        <td><?php echo $user['last_access'] ?></td>                        

                        <td>
                            <a href="view.php?mail=<?php echo $user['mail']?>" class="btn btn-sm btn-outline-info" >VIEW</a>
                            <a href="update.php?mail=<?php echo $user['mail']?>" class="btn btn-sm btn-outline-secondary" >UPDATE</a>
                            <a href="delete.php?mail=<?php echo $user['mail']?>" class="btn btn-sm btn-outline-danger" >DELETE</a>
                        </td>
                        
                    </tr>

                <?php endforeach;;?>
            </tbody>
        
        </table>




    </div>


    


    

</div>

    
<?php
include '../saleslayer/partials/footer.php'
?>
