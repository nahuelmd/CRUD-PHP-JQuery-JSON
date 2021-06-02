<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link href="/assets/css/styles.css" rel="stylesheet" >
    <link href="cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" >
    


    <title>Document</title>
</head>
<body>
    
    
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

        <?php
        include 'datos.php';
        ?>



    </div>
    
    


    
    <!-- JS JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js" ></script>
    <script>
        $(document).ready(function() {
        $('#tablaContactos').DataTable();
        } );
    </script>
    <!-- JS DE BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- JS DE DATATABLES -->
    <script src="cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    //
</body>
</html>