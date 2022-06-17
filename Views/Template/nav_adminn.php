<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Tienda Virtual Happy Food">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Happy Food">
    <link rel="shortcut icon" href="<?= media();?>/images/portada.png">
    <title><?= $data['page_tag'] ?></title>
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/bootstrap-select.min.css"> 
    <link rel="stylesheet" type="text/css" href="<?= media();?>/js/datepicker/jquery-ui.min.css"> 
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/stylemenu.css">
    
    <!----===== Boxicons CSS ===== -->
    <!-- <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> -->
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body class="app sidebar-mini">
    <div id="divLoading" >
      <div>
        <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
      </div>
    </div>
    <header class="app-header">
      <!-- <a class="app-header__logo" href="<?= base_url(); ?>/dashboard">Happy Food</a> -->
      <!-- Sidebar toggle button-->
      <!-- <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"><i class="fas fa-bars"></i></a> -->
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <!-- <p class=""><?= $_SESSION['userData']['nombres']; ?></p> -->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><!--<i class="fa fa-user fa-lg"></i>--></a>
          <!-- <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="<?= base_url(); ?>/opciones"><i class="fa fa-cog fa-lg"></i> Configuración</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>/usuarios/perfil"><i class="fa fa-user fa-lg"></i> <?= $_SESSION['userData']['nombres']; ?></a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>/logout"><i class="fa fa-sign-out fa-lg"></i> Salir</a></li>
          </ul> -->
        </li>
      </ul>
    </header>
    <nav class="sidebar open">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="<?= media();?>/images/portada.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Servicios Web</span>
                    <span class="profession"><?= $_SESSION['userData']['nombrerol']; ?></span>
                </div>
            </div>          
            <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"><i class='fa fa-sort-desc toggle'></i></a>
            
        </header>
        
        <div class="menue-bar">
            <div class="menue">
                <!-- <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li> -->
                <li class="">
                    <a class="opt" href="<?= base_url(); ?>">
                        <!-- <i class='bx bx-home-alt icon' ></i> -->
                        <i class="fa fa-shopping-cart icon"></i>
                        <span class="text nav-text">Tienda</span>
                    </a>
                </li>
                <ul class="menu-links">
                    <?php //if(!empty($_SESSION['permisos'][1]['r'])){ ?>
                    <li class="">
                        <a class="opt" href="<?= base_url(); ?>/dashboard">
                            <!-- <i class='bx bx-home-alt icon' ></i> -->
                            <i class="fa fa-line-chart icon"></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <?php //} ?>
                    <?php if(!empty($_SESSION['permisos'][2]['r'])){ ?>
                    <li class="">
                        <a class="opt" href="<?= base_url(); ?>/usuarios">
                            <i class="fa fa-user icon"></i>
                            <span class="text nav-text">Usuarios</span>
                            
                        </a>
                    </li>
                    <?php } ?>
                    <!-- <?php if(!empty($_SESSION['permisos'][2]['r'])){ ?>
                    <li class="">
                        <a class="opt" href="<?= base_url(); ?>/roles">
                            <i class="fa fa-id-card-o icon"></i>
                            <span class="text nav-text">Roles</span>
                        </a>
                    </li>
                    <?php } ?> -->
                    <!-- <li class="treeview">
                        <a class="opt" href="#" data-toggle="treeview">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Usuarios</span>
                            <i class="treeview-indicator fa fa-angle-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a class="" href="<?= base_url(); ?>/usuarios"><i class="icon fa fa-circle-o"></i> Usuarios</a></li>
                            <li><a class="" href="<?= base_url(); ?>/roles"><i class="icon fa fa-circle-o"></i> Roles</a></li>
                        </ul>
                    </li> -->
                    <!-- <?php if(!empty($_SESSION['permisos'][3]['r'])){ ?>
                    <li class="">
                        <a class="opt" href="<?= base_url(); ?>/clientes">
                            <i class="fa fa-users icon"></i>
                            <span class="text nav-text">Clientes</span>
                        </a>
                    </li>
                    <?php } ?> -->
                    <?php if(!empty($_SESSION['permisos'][4]['r'])){ ?>
                    <li class="">
                        <a class="opt" href="<?= base_url(); ?>/servicios">
                            <i class="fa fa-th icon"></i>
                            <span class="text nav-text">Servicios</span>
                        </a>
                    </li> 
                    <?php }
                    if(!empty($_SESSION['permisos'][6]['r'])){
                    ?>
                    
                    <li class="">
                        <a class="opt" href="<?= base_url(); ?>/categorias">
                            <i class="fa fa-tags icon"></i>
                            <span class="text nav-text">Categoría</span>
                        </a>
                    </li> 
                    <?php } ?>
                    <?php if(!empty($_SESSION['permisos'][5]['r']) && $_SESSION['userData']['idrol']!=3){ ?>
                    <li class="">
                        <a class="opt" href="<?= base_url(); ?>/pedidos">
                            <i class="fa fa-cubes icon"></i>
                            <span class="text nav-text">Pedidos</span>
                        </a>
                    </li>
                    <?php } ?>
                    <!-- <?php if(!empty($_SESSION['permisos'][MSUSCRIPTORES]['r'])){ ?>
                    <li class="">
                        <a class="opt" href="<?= base_url(); ?>/suscriptores">
                            <i class="fa fa-life-ring icon"></i>
                            <span class="text nav-text">Suscriptores</span>
                        </a>
                    </li>
                    <?php } ?>-->
                    <!-- <?php if(!empty($_SESSION['permisos'][MDCONTACTOS]['r'])){ ?>
                    <li class="">
                        <a class="opt" href="<?= base_url(); ?>/suscriptores">
                            <i class="fa fa-paper-plane icon"></i>
                            <span class="text nav-text">Solicitudes</span>
                        </a>
                    </li>
                    <?php }
                    // var_dump($_SESSION['userData']['idrol']) ?>  -->
                    <!-- <?php if($_SESSION['userData']['idrol']==3){ ?>
                    <li class="">
                        <a class="opt" href="<?= base_url(); ?>/paginas">
                            <i class="fa fa-paper-plane icon"></i>
                            <span class="text nav-text">Ascender</span>
                        </a>
                    </li>
                    <?php } ?> -->
                    <!--<?php if(!empty($_SESSION['permisos'][MDPAGINAS]['r'])){ ?>
                    <li class="">
                        <a class="opt" href="<?= base_url(); ?>/paginas">
                            <i class="fa fa-columns icon"></i>
                            <span class="text nav-text">Páginas</span>
                        </a>
                    </li>
                    <?php } ?> -->
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a class="opt" href="<?= base_url(); ?>/logout">
                        <i class="fa fa-sign-out icon"></i>
                        <span class="text nav-text">Salir</span>
                    </a>
                </li>

                <!-- <li class="modes">
                    <div class="sune-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="modes-text text">Dark mode</span>

                    <div class="toggles-switchs">
                        <span class="switchs"></span>
                    </div>
                </li> -->
                
            </div>
        </div>
    </nav>





