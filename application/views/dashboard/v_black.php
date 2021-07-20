<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Website CMS| Dashboard </title>


<!--GoogleFont: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!--Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
<!--Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!--TempusdominusBootstrap 4 -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!--iCheck-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!--JQVMap-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/jqvmap/jqvmap.min.css">
<!--Themestyle -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/adminlte.min.css">
<!--overlayScrollbars-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!--Daterange picker -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker.css">
<!--summernote -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/summernote/summernote-bs4.min.css">
<!-- CodeMirror -->
<link rel="stylesheet" href="assets/plugins/codemirror/codemirror.css">
  <link rel="stylesheet" href="assets/plugins/codemirror/theme/monokai.css">
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="assets/plugins/simplemde/simplemde.min.css">

</head>
<body class="hold-transition dark-mode sidebar-mini layout-boxed">


<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="assets/dist/img/hxh.png" alt="AdminLTELogo" height="60" width="60">
  </div>


<!--Navbar-->
<nav class="main-header navbar navbar-expand navbar-dark">
<!--Left navbar links -->
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button">
<i class="fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="profil" class="nav-link">Contact</a>
      </li>
</ul>
<!--user header Dropdown Menu-->
<ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown user-menu">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <img src="<?php echo base_url();?>assets/dist/img/killua.jpg"class="user-image" alt="User Image">
Hak Akses :<b><?php echo $this->session->userdata('level') ?></b>
</a>        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right"> 
        <div class="dropdown-divider"></div>
        <a href="<?php echo base_url().'profil' ?>"class="dropdown-item"><i class="fas fa-user mr-2"></i>Profil </a>
        <div class="dropdown-divider"></div>
        <a href="<?php echo base_url().'dashboard/keluar' ?>"class="dropdown-item"><i class="fas fa-users mr-2"></i>Keluar</a>
                </div>
            </li>
        </ul>
    </nav>
<!--/.navbar -->

<!--Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!--Brand Logo -->
<a href="index2" class="brand-link">
<img src="<?php echo base_url();?>assets/dist/img/AdminLTELogo.png" alt="website CMS" class="brand-image img-circle elevation-3" style="opacity:.1">
<span class="brand-text font-weight-light"> H X H </span>
</a>


<!--Sidebar -->
<div class="sidebar">
<!--Sidebar user panel (optional) -->
<div class="user-panel mt-3pb-3 mb-3 d-flex">

<div class="image">
<img src="<?php echo base_url();?>assets/dist/img/killua.jpg"class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">

<?php
$id_user= $this->session->userdata('id');
$user = $this->db->query("select * from pengguna where pengguna_id='$id_user'")->row();
?>
<a href="profil"class="d-block"><?php echo $user->pengguna_nama; ?></a>
<a href="#"><i class="fa fa-circle text-success"></i>Online</a> 
</div>
</div>


<!--Sidebar Menu -->
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<!--Menu Dashboard -->
<li class="nav-item">
<a href="<?php echo base_url().'dashboard'?>" class="nav-link">
<i class="nav-icon fas fa-tachometer-alt"></i><p>Dashboard</p></a>
</li>


<!--Menu Dashboard -->
<li class="nav-item">
<a href="<?php echo base_url().'edit'?>" class="nav-link">
<i class="nav-icon fas fa-th"></i><p>Text Editor</p></a>
</li>

 
<!--Menu Artikel -->
<li class="nav-item">
<a href="<?php echo base_url().'ecom'?>" class="nav-link">
<i class="nav-icon fas fa-file"></i><p>E-Commerce</p></a>
</li>

<!--Menu Profil -->
<li class="nav-item">
<a href="<?php echo base_url().'product'?>" class="nav-link">
<i class="nav-icon fas fa-user"></i><p>Inventory</p></a>
</li>

<!--Menu Pages -->
<li class="nav-item">
<a href="<?php echo base_url().'mailbox'?>" class="nav-link">
<i class="nav-icon fas fa-copy"></i><p>E-mail</p></a>
</li>


<!--Menu Pengguna -->
<li class="nav-item">
<a href="<?php echo base_url().'tanggal'?>" class="nav-link">
<i class="nav-icon fas fa-users"></i><p>Calendar</p></a>
</li>



<!--Menu penggaturan website -->
<li class="nav-item">
<a href="<?php echo base_url().'aturan'?>" class="nav-link">
<i class="nav-icon fas fa-edit"></i><p>Website Setting</p></a>
</li>





<!--Menu ganti password-->
<li class="nav-item">
<a href="<?php echo base_url().'timeline'?>" class="nav-link">
<i class="nav-icon fas fa-lock"></i><p>Timeline</p></a>
</li>

<!--Menu keluar -->
<li class="nav-item">
<a href="<?php echo base_url().'dashboard/keluar'?>" class="nav-link">
<i class="nav-icon fas fa-share"></i><p>Quit</p></a>
</li>
</ul> 
</nav>
</div><!--/.sidebar-menu -->
</aside><!--/.sidebar -->
