<?php
if(empty($_SESSION['level'])){
    redirect('login');
}elseif($_SESSION['level'] != 'user'){
    redirect('admin');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin-2.min.css')?>" rel="stylesheet">
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-laptop"></i>
                </div>
                <div class="sidebar-brand-text mx-3">HELPDESK IT</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/user')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/user/create_tiket')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Buat Tiket</span></a>
            </li>
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Daftar Tiket</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <?php
                    //alasan kenapa model nya ada disini adalah karena ini bagian header templeate yg di require_once di setiap view
                    $this->load->database();
                    $wait = $this->db->query("SELECT status FROM tiket WHERE status = 'Waiting' and kd_karyawan = '".$_SESSION['kd_karyawan']."'");
                    $data = $wait->num_rows();
                    if($data > 0){
                    ?>
                    <a class="collapse-item" href="<?php echo base_url('index.php/user/tiket_waiting')?>">
                        Tiket Waiting <span class="badge badge-danger badge-counter"><?php echo $data?></span>
                    </a>
                    <?php }?>
                    <?php
                    $op = $this->db->query("SELECT status FROM tiket WHERE status = 'On process' and kd_karyawan = '".$_SESSION['kd_karyawan']."'");
                    $data = $op->num_rows();
                    if($data > 0){
                    ?>
                    <a class="collapse-item" href="<?php echo base_url('index.php/user/tiket_onprocess')?>">
                        Tiket On Process <span class="badge badge-warning badge-counter"><?php echo $data?></span>
                    </a>
                    <?php }?>
                    <?php
                    $done = $this->db->query("SELECT status FROM tiket WHERE status = 'Done' and kd_karyawan = '".$_SESSION['kd_karyawan']."'");
                    $data = $done->num_rows();
                    if($data > 0){
                    ?>
                    <a class="collapse-item" href="<?php echo base_url('index.php/user/tiket_done')?>">
                        Tiket Done <span class="badge badge-success badge-counter"><?php echo $data?></span>
                    </a>
                    <?php }?>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                   <?php
                                        if(empty($_SESSION['kd_karyawan'])){
                                            redirect('login');
                                        }else{
                                            echo $_SESSION['username'];
                                        }
                                    ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url('img/undraw_profile.svg')?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->