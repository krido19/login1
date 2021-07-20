

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
              <li class="breadcrumb-item active">Contact us</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body row">
       
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
            <?php
                  $id_user= $this->session->userdata('id');
                  $user = $this->db->query("select * from pengguna where pengguna_id='$id_user'")->row();
                  ?>
                  <a href="#"class="profile-username text-center"><h3><?php echo $user->pengguna_nama; ?></h3></a>                   
                    Id Pengguna : <?php echo $this->session->userdata('id' )  ?><br>
                    Username:<?php echo $this->session->userdata('username')?><br>
                    level :<?php echo $this->session->userdata('level') ?><br>
                                      <a href="#"class="text-muted text-center"><p><?php echo $user->job; ?></p></a>
              </p>
              <img class="profile-user-img img-fluid img-circle"
                       src="assets/dist/img/killua.jpg"
                       alt="User profile picture">
            </div>
          </div>
          
          <div class="col-7">
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="text" id="inputName" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputEmail">E-Mail</label>
              <input type="email" id="inputEmail" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputSubject">Subject</label>
              <input type="text" id="inputSubject" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputMessage">Message</label>
              <textarea id="inputMessage" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Send message">
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 