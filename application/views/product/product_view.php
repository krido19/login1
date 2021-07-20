
    <section class="content"style="position: relative; height: 100%; width: 100%;">
<!--Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!--Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">
			<center>
				Instructur List<hr><br>
			</center>
		</h1>
		<a href="<?php echo site_url('product/add_new/');?>">
						<button class="btn btn-sm btn-info">Add instructor + </button>
					</a>
		</div><!--/.col -->
</div><!--/.row -->
</div><!--/.container-fluid-->
</div><!--/.content-header -->

		
		<table class="table table-striped">
			<thead>
			<tr>
					<th scope="col">No</th>
					<th scope="col">NIP</th>
					<th scope="col">Nama Pegawai</th>
					<th scope="col">Jenis Kelamin</th>
					<th scope="col">Alamat Pegawai</th>
					<th scope="col">Tempat Lahir</th>
					<th scope="col">Tanggal Lahir</th>
					<th scope="col">Status Pegawai</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$no = $this->uri->segment('3') + 1;
				foreach ($product as $row):
					
			?>
			<tr>
			<th scope="row"><?php echo $no++;?></th>
				<td><?php echo $row->nip;?></td>
				<td><?php echo $row->nama;?></td>
				<td><?php echo $row->jenis;?></td>
				<td><?php echo $row->alamat;?></td>
				<td><?php echo $row->lahir;?></td>
				<td><?php echo $row->tanggal;?></td>
				<td><?php echo $row->status;?></td>
				<td>
					<a href="<?php echo site_url('product/get_edit/'.$row->product_id);?>">
						<button class="btn btn-sm btn-info">Edit</button>            
      </a>
					<a href="<?php echo site_url('product/delete/'.$row->product_id); ?>">
					<button class="btn btn-sm btn-danger">Delete</button>
                    </a>

				</td>
				</tr>

			<?php endforeach;?>
		</tbody>

		</table>

		<br>
<?php echo $this->pagination->create_links(); 
	?>

	</div>
	
	</div>
  <!-- /.content-wrapper -->
  </section>
  <!--load jquery js file -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<!-- load bootstrap js file -->
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

		</div>  <!--col-md-6 offset-md-3 -->
   </div>
