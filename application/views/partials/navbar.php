<!-- Page Header Start-->
<div class="page-main-header">
    <div class="main-header-right row m-0">
        <div class="main-header-left">
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
        </div>
        <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
                <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                <li class="onhover-dropdown p-0">
                    <button class="btn btn-primary-light" type="button" id="btn-cerrar-sesion">Cerrar sesión</a></button>
                </li>
            </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
    </div>
</div>
<!-- Page Header Ends-->
<!-- Page Body Start-->
<div class="page-body-wrapper sidebar-icon">
    <!-- Page Sidebar Start-->
    <header class="main-nav">
        <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="<?php echo base_url() ?>template/assets/images/dashboard/1.png" alt="">
            <div class="badge-bottom"><span class="badge badge-primary"></span></div>
            <a href="<?php echo base_url() ?>">
                <h6 class="mt-3 f-14 f-w-600">BIENVENIDO/A <br> <?= mb_strtoupper($this->session->userdata('nombre')) ?></h6>
                <h6 class="mt-3 f-14 f-w-600">NUMERO DE CELULAR:<?= mb_strtoupper($this->session->userdata('numerocelular')) ?></h6>
                <h6 class="mt-3 f-14 f-w-600">CEDULA: <?= mb_strtoupper($this->session->userdata('cedula')) ?></h6>
                <h6 class="mt-3 f-14 f-w-600">FECHA DE NACIMIENTO:<?= mb_strtoupper($this->session->userdata('fechanacimiento')) ?> </h6>
                
            </a>
            <!-- <p class="mb-0 font-roboto">Cabildo</p> -->
        </div>
        <nav>
           
                <div class="main-navbar">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>  
                    <div class="main-navbar">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="mainnav">
                        <ul class="nav-menu custom-scrollbar">
                            <li class="back-btn">
                                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                            </li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h6>General</h6>
                                </div>
                            </li>
                            <li><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>"><i data-feather="list"></i><span>Menu</span></a></li>
                            <!-- <li><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>Expediente/Informacion"><i data-feather="list"></i><span>EXPEDIENTE</span></a></li>
                            <li><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>Inventario/Informacion"><i data-feather="list"></i><span>CREAR INVENTARIO</span></a></li>
                             -->
                        
                            
                            <
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </div>
            
        </nav>
    </header>

    <!-- Page Sidebar Ends-->