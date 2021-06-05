<?php
include '../saleslayer/partials/header.php';
require '../saleslayer/users/users.php';
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
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>

                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
            </nav>
        </div>

        <p>
            <a href="create.php" class="btn btn-outline-success">Add Contact</a>
        </p>

        <div class="contador-checkbox">

        <div class="totalchecked">0 selected</div>

        </div>

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

                                                <!-- <td> <div class="avatar">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" alt="Avatar" class="md-avatar rounded-circle">                
                            </div>
                        </td> -->


                        <td><?php echo $user['name'] ?></td>
                        <td>
                            <a href="mailto:<?php echo $user['mail'] ?>"><?php echo $user['mail']?></a>
                        </td>
                        <td><?php echo $user['company'] ?></td>
                        <td><?php echo $user['role'] ?></td>
                        <td><?php echo $user['profile_rate'] ?> %</td>
                        <td><?php echo $user['last_access'] ?></td>                        
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


<?php
include '../saleslayer/partials/footer.php'
?>
