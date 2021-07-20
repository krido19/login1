<!--Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!--Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">

</div><!--/.row -->
</div><!--/.container-fluid-->
</div><!--/.content-header -->
<div class="col-md-6 offset-md-3">
<h1 class="m-0">
            <center>Edit Instructor<hr><br></center>
        </h1>
            <form action="<?php echo site_url('product/update');?>" method="post">
                <div class="form-group">
                    <label>NIP</label>
                    <input type="number" name="nip" class="form-control" value="<?php echo $nip;?>">            
  				</div>    
				  <div class="form-group">
                    <label> Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $nama;?>">            
  				</div>         
  				

				  <label>Jenis Kelamin</label>
						<div class="form-check">	
							<input class="form-check-input" value="Laki-laki" name="jenis" type="checkbox"  placeholder="status" id="flexRadioDefault1">
							<label class="form-check-label" for="flexCheckChecked">
								 Laki-Laki
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" value="Perempuan" name="jenis" type="checkbox"  placeholder="status" id="flexRadioDefault1" >
							<label class="form-check-label" for="flexCheckChecked">
								Perempuan
							</label>
							</div>  

                  <div class="form-group">            
      			<label>Alamat</label>            
     			 <input type="text" name="alamat" class="form-control" value="<?php echo$alamat;?>">            
  				</div> 
                  <div class="form-group">            
      			<label>Tempat Lahir</label>            
     			 <input type="text" name="lahir" class="form-control" value="<?php echo$lahir;?>">            
  				</div> 
                  <div class="form-group">  

      			<label>Tanggal Lahir</label>       
				  <div class="input-group date">
 					<div class="input-group-addon">
           			<span class="glyphicon glyphicon-th"></span>
       				</div>     
     			 <input type="text" name="tanggal" class="form-control datepicker" 
				  value="<?php echo$tanggal;?>">            
  				</div> 


                
				  <label>Status</label>
					<div class="form-check">	
							<input class="form-check-input" value="Tetap" name="status" type="radio"  placeholder="status" id="flexRadioDefault1">
							<label class="form-check-label" for="flexRadioDefault1">
								 Tetap
							</label>
							</div>
							<div class="form-check">
							<input class="form-check-input" value="Tidak Tetap" name="status" type="radio"  placeholder="status" id="flexRadioDefault1">
							<label class="form-check-label" for="flexRadioDefault1">
								Tidak Tetap
							</label>
							</div>         
 				 <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">        
  <button type="submit" class="btn btn-primary mt-3">Update</button>
   </form>
       </div>  <!--col-md-6 offset-md-3 -->
   </div>
<!--load jquery js file -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<!-- load bootstrap js file -->
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

		</div>  <!--col-md-6 offset-md-3 -->
   </div>