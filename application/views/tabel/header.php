<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Kursus</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- chartist CSS -->
    <link href="assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
               <div class="navbar-header" data-logobg="skin6" >
    <!-- ============================================================== -->
    <!-- Logo -->
    <!-- ============================================================== -->
    <a class="navbar-brand ms-4" href=" " style="display: flex; align-items: center;">
        <!-- Logo icon -->
        <b class="logo-icon">
            <!-- Dark Logo icon -->
            <img src="https://scontent.fpnk2-1.fna.fbcdn.net/v/t39.30808-6/259152362_103995842115252_1788315700249935323_n.png?_nc_cat=106&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=no7VXZPazGoQ7kNvgESluXH&_nc_zt=23&_nc_ht=scontent.fpnk2-1.fna&oh=00_AYBTDyo_BufyJo4VI8wj_KMM2RmHrgdqvE10FEylCuM_FQ&oe=66BCCF3A" alt="logo" style="height: 50px; width: 50px; animation: rotateLogo 2s infinite linear;">
        </b>
        <!--End Logo icon -->
        <!-- Logo text -->
        <span class="text" style="margin-left: 10px;">
            <!-- dark Logo text -->
            <h2 style="color: lightskyblue; margin: 0; font-family: 'Roboto', sans-serif;">Kursus</h2>
        </span>
    </a>
    <!-- ============================================================== -->
    <!-- End Logo -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- toggle and nav items -->
    <!-- ============================================================== -->
    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
       href="javascript:void(0)"><i class="ti-menu ti-close" style="font-size: 24px;"></i></a>
</div>

<!-- Add custom styles for animations -->
<style>
    @keyframes rotateLogo {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .navbar-header {
        transition: all 0.3s ease;
    }

    .navbar-header:hover {
        background-color: #34495E;
    }

    .nav-toggler:hover i {
        color: #1ABC9C;
        transform: scale(1.2);
        transition: transform 0.3s ease;
    }
</style>

                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white "
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <li class="nav-item search-box">
                            <a class="nav-link text-muted" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://scontent.fpnk2-1.fna.fbcdn.net/v/t39.30808-6/259152362_103995842115252_1788315700249935323_n.png?_nc_cat=106&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=no7VXZPazGoQ7kNvgESluXH&_nc_zt=23&_nc_ht=scontent.fpnk2-1.fna&oh=00_AYBTDyo_BufyJo4VI8wj_KMM2RmHrgdqvE10FEylCuM_FQ&oe=66BCCF3A" alt="user" class="profile-pic me-2">Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="welcome" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                       <li class="sidebar-item"> 
    <a class="sidebar-link waves-effect waves-dark sidebar-link"
       href="kursus" aria-expanded="false">
       <i class="mdi me-2 mdi-book-open"></i>
       <span class="hide-menu">Kursus</span>
    </a>
</li>
<li class="sidebar-item"> 
    <a class="sidebar-link waves-effect waves-dark sidebar-link"
       href="materi" aria-expanded="false">
       <i class="mdi me-2 mdi-file-document-box"></i>
       <span class="hide-menu">Materi</span>
    </a>
</li>
    
    <a href="#"
        class="btn btn-warning text-white mt-4" target="_blank">
        <i class="material-icons">logout</i>
    </a>
</li>

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <div class="sidebar-footer">
                <div class="row">
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i
                                class="ti-settings"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                                class="mdi mdi-gmail"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                                class="mdi mdi-power"></i></a>
                    </div>
                </div>
            </div>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            