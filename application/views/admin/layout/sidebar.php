<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link href="<?php echo base_url('assets/images/icon1.png');?>" rel="icon">
    <meta name="author" content="">

    <title>Dashboard Admin | Obi Kumpa</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/admin/css/sb-admin-2.min.css');?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="bi bi-bullseye"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Obi Kumpa</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('admin');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Mod Vehicle
            </div>

            <!-- Nav Item - Bus -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo site_url('admin/modbus');?>"><i class="bi bi-bus-front"></i><span> Bus</span></a>
            </li>

            <!-- Nav Item - Truk -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo site_url('admin/modtruk');?>"><i class="bi bi-truck-front"></i><span> Truk</span></a>
            </li>

            <!-- Nav Item - Bus -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo site_url('admin/modmobil');?>"><i class="bi bi-car-front"></i><span> Mobil</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Map
            </div>

            <!-- Nav Item - Map -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo site_url('admin/map');?>"><i class="bi bi-map-fill"></i><span> Map</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Livery
            </div>

             <!-- Nav Item - Bus -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo site_url('admin/liverybus');?>"><i class="bi bi-bus-front"></i><span> Bus</span></a>
            </li>

            <!-- Nav Item - Truk -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo site_url('admin/liverytruk');?>"><i class="bi bi-truck-front"></i><span> Truk</span></a>
            </li>

            <!-- Nav Item - Bus -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo site_url('admin/liverymobil');?>"><i class="bi bi-car-front"></i><span> Mobil</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        