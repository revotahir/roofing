    <!-- Sidenav Menu Start -->
    <div class="sidenav-menu">

<!-- Brand Logo -->
<a href="<?=base_url('dashboard')?>" class="logo">
    <span class="logo-light">
        <span class="logo-lg"><img src="<?=base_url()?>assets/images/small-logo-white.webp" style="height:50px" alt="logo"></span>
        <span class="logo-sm"><img src="<?=base_url()?>assets/images/small-logo-white.webp" style="height:50px" alt="small logo"></span>
    </span>

    <span class="logo-dark">
        <span class="logo-lg"><img src="<?=base_url()?>assets/images/logo.webp" style="height:50px" alt="dark logo"></span>
        <span class="logo-sm"><img src="<?=base_url()?>assets/images/logo.webp" style="height:50px" alt="small logo"></span>
    </span>
</a>

<!-- Sidebar Hover Menu Toggle Button -->
<button class="button-sm-hover">
    <i class="ti ti-circle align-middle"></i>
</button>

<!-- Full Sidebar Menu Close Button -->
<button class="button-close-fullsidebar">
    <i class="ti ti-x align-middle"></i>
</button>

<div data-simplebar>

    <!--- Sidenav Menu -->
    <ul class="side-nav" style="padding:0px">
        <li class="side-nav-title">Navigation</li>

        <li class="side-nav-item">
            <a  href="<?=base_url('dashboard')?>"  class="side-nav-link">
                <span class="menu-icon"><i data-lucide="airplay"></i></span>
                <span class="menu-text"> Dashboard </span>
            </a>
            
        </li>
        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarAppsEmail" aria-expanded="false" aria-controls="sidebarAppsEmail" class="side-nav-link">
                <span class="menu-icon"><i data-lucide="user"></i></span>
                <span class="menu-text"> Managers </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarAppsEmail">
                <ul class="sub-menu">                      
                    <li class="side-nav-item">
                        <a href="<?=base_url('add-new-manager')?>" class="side-nav-link">
                            <span class="menu-text">Add New Manager</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="<?=base_url('manager-list')?>" class="side-nav-link">
                            <span class="menu-text">Manager List</span>
                        </a>
                    </li>                          
                </ul>
            </div>
        </li>
        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarClients" aria-expanded="false" aria-controls="sidebarClients" class="side-nav-link">
                <span class="menu-icon"><i data-lucide="users"></i></span>
                <span class="menu-text"> Clients </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarClients">
                <ul class="sub-menu">                      
                    <li class="side-nav-item">
                        <a href="<?=base_url('add-new-client')?>" class="side-nav-link">
                            <span class="menu-text">Add New Client</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="<?=base_url('client-list')?>" class="side-nav-link">
                            <span class="menu-text">Client List</span>
                        </a>
                    </li>                          
                </ul>
            </div>
        </li>
        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarJobs" aria-expanded="false" aria-controls="sidebarJobs" class="side-nav-link">
                <span class="menu-icon"><i data-lucide="briefcase-business"></i></span>
                <span class="menu-text"> Jobs </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarJobs">
                <ul class="sub-menu">                      
                    <li class="side-nav-item">
                        <a href="<?=base_url('add-new-job')?>" class="side-nav-link">
                            <span class="menu-text">Add New Job</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="<?=base_url('job-list')?>" class="side-nav-link">
                            <span class="menu-text">Manage Job</span>
                        </a>
                    </li>                          
                </ul>
            </div>
        </li>

    </ul>

    <div class="clearfix"></div>
</div>
</div>
<!-- Sidenav Menu End -->

<!-- Topbar Start -->
<header class="app-topbar">
<div class="page-container topbar-menu">
    <div class="d-flex align-items-center gap-1">

        <!-- Brand Logo -->
        <a href="<?=base_url('dashboard')?>" class="logo">
            <span class="logo-light">
                <span class="logo-lg"><img src="<?=base_url()?>assets/images/small-logo-white.webp" style="height:50px" alt="logo"></span>
                <span class="logo-sm"><img src="<?=base_url()?>assets/images/small-logo-white.webp" style="height:50px" alt="small logo"></span>
            </span>

            <span class="logo-dark">
                <span class="logo-lg"><img src="<?=base_url()?>assets/images/logo.webp" style="height:50px" alt="dark logo"></span>
                <span class="logo-sm"><img src="<?=base_url()?>assets/images/logo.webp" style="height:50px" alt="small logo"></span>
            </span>
        </a>

        <!-- Sidebar Menu Toggle Button -->
        <button class="sidenav-toggle-button px-2">
            <i data-lucide="menu" class="font-22"></i>
        </button>

        <!-- Horizontal Menu Toggle Button -->
        <button class="topnav-toggle-button px-2" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
            <i data-lucide="menu" class="font-22"></i>
        </button>

       

        
    </div>

    <div class="d-flex align-items-center gap-1">

        <div class="topbar-item d-none d-sm-flex">
            <button class="topbar-link" id="light-dark-mode" type="button">
                <i data-lucide="moon" class="font-22 light-mode"></i>
                <i data-lucide="sun" class="font-22 dark-mode"></i>
            </button>
        </div>


     

        <!-- User Dropdown -->
        <div class="topbar-item nav-user">
            <div class="dropdown">
                <a class="topbar-link dropdown-toggle drop-arrow-none px-0" data-bs-toggle="dropdown" data-bs-offset="0,19" type="button" aria-haspopup="false" aria-expanded="false">
                    <img src="<?=base_url()?>assets/images/avatar.png" width="32" class="rounded-circle me-lg-2 d-flex" alt="user-image">
                    <span class="d-lg-flex flex-column gap-1 d-none">
                        <span class="my-0"><?=$this->session->userdata['loginData']['userName']?></span>
                    </span>
                    <i data-lucide="chevron-down" class="d-none d-sm-flex" height="12"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="mdi mdi-account-circle-outline me-1 font-17 align-middle"></i>
                        <span class="align-middle">My Account</span>
                    </a>

                    <!-- item-->
                    <a href="<?=base_url('logout')?>" class="dropdown-item active fw-semibold text-danger">
                        <i class="mdi mdi-logout me-1 font-17 align-middle"></i>
                        <span class="align-middle">Sign Out</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Button Trigger Customizer Offcanvas -->
        <div class="topbar-item">
            <button class="topbar-link" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" type="button">
                <i data-lucide="settings" class="font-22"></i>
            </button>
        </div>
    </div>
</div>
</header>
<!-- Topbar End -->