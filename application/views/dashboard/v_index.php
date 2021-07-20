
<!--Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!--Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
<div data-aos="fade-up">

<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">
<b> Dashboard</b><small> Control Panel</small>
</h1>
</div><!--/.col -->
</div><!--/.row -->

</div><!--/.aos -->

</div><!--/.container-fluid-->
</div><!--/.content-header -->

<!--Main content-->
<section class="content">
<div class="container-fluid">
<div class="row">
<section class="col-lg-12 connectedSortable">
<!--Custom tabs (Charts with tabs)-->
<div class="card">
<div class="card-header">
<h3 class="card-title"><i class="fas fa-home"></i> Dashboard</h3>
</div><!--/.card-header -->
<div class="card-body">
  <?php
                  $id_user = $this->session->userdata('id');
                  $user = $this->db->query("select*from pengguna where pengguna_id='$id_user'")->row();            
  ?>
Anda Berhasil Login <br>
Anda login sebagai <?php echo $user->pengguna_nama; ?><br>
Id Pengguna : <?php echo $this->session->userdata('id') ?><br>
Username:<?php echo $this->session->userdata('username')?><br>
level :<?php echo $this->session->userdata('level') ?><br>
<ol class="breadcrumb float-sm-center">
<li class="breadcrumb-item">Tugas UAS Klik Tombol    
           
            <li class="breadcrumb-item"><a href="<?php echo site_url('product/');?>">
						<button class="btn btn-sm btn-info">UAS </button>
					</a></li>
          </ol>
</div><!--/.card-body -->
</div><!--/.card -->
</section> <!-- col-lg-12 connectedSortable -->
</div> <!-- row --> 
</div> <!-- container-fluid -->
</section> <!-- content -->
</div>
  <!-- /.content-wrapper -->
        