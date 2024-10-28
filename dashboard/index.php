<?php include_once('../_header.php'); ?>

<div class="container" style="margin-top: 80px;">
		<div class="row">
			<h2>Beranda</h2>
			<small>Selamat Datang <?=$_SESSION['user']?> Web List Tugas Kelas 12</small>
			<div class="container">
			    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
			    <?php
		        	$query = mysqli_query($conn, "SELECT * FROM `file` ORDER BY file_id DESC LIMIT 1");
		        	$row = mysqli_fetch_array($query);
		    	?>
			      <div class="col">
			        <div class="card">
			          <div class="card-body text-white bg-primary">
			            <i class="fas fa-cloud-upload-alt fs-1"></i>
			            <h5 class="card-title">Tugas Terbaru Upload</h5>
			            <p class="card-text">Tugas Terbaru Dari Guru <strong><?=$row['guru']?></strong> Dan Di Unggah Ke Web Pada Tanggal <strong><?=$row['tgl']?></strong></p>
			            
			            <a href="../work/index.php" class="btn btn-primary btn-sm">Lihat Detail</a>
			          </div>
			        </div>
			      </div>
			      <div class="col">
			        <div class="card">
			          <div class="card-body text-white bg-danger">
			            <i class="fas fa-file-archive fs-1"></i>
			            <h5 class="card-title">File Terbaru Upload</h5>
			            <p class="card-text">File <strong><?=$row['name']?></strong> Baru Saja Di Unggah Ke Web Pada Tanggal <strong><?=$row['tgl']?></strong></p>

			            <a href="../work/index.php" class="btn btn-danger btn-sm">Lihat Detail</a>
			          </div>
			        </div>
			      </div>
			      <div class="col">
			        <div class="card">
			          <div class="card-body text-white bg-warning">
			            <i class="fas fa-file-import fs-1"></i>
			            <h5 class="card-title">Upload Tugas</h5>
			            <p class="card-text">Simpan Tugas Anda Pada Web Ini. Untuk Melakukan Penyimpannan Klick Tombol Di Bawah.</p>

			            <a href="../work/post.php" class="btn btn-warning btn-sm text-white">Lihat Detail</a>
			          </div>
			        </div>
			      </div>
			    </div>
			 </div>
		  	<div class="container">
		  		<div class="row mt-4">
		  			<center>
		  				<h2>Daftar Tugas</h2>
		  			</center>
		  			<div class="table-responsive">
		  			<table class="table table-hover table-bordered">
		  				<thead>
					    	<tr>
						        <th>File Name</th>
						        <th>Guru</th>
						        <th>Tanggal</th>   
					     	</tr>
			    		</thead>
			    		<tbody>
			    			<?php
			    			$row = $conn->query("SELECT * FROM `file` ORDER BY file_id DESC LIMIT 5") or die(mysqli_error());
						    while($fetch = $row->fetch_array()){
						    ?>
					     	<tr>
					        <?php 
					        $name = explode('/', $fetch['file']);
					        ?>
						        <td><?php echo $fetch['name']?></td>
						        <td><?php echo $fetch['guru']?></td>
						        <td><?php echo $fetch['tgl']?></td>
						        <tr class="mt-3">
					      	</tr>
					      	
					      <?php
					    }
					    ?>
					    	<tr class="mt-3">
				              	<td colspan="3">
				                	<div  class="text-center">
				                  	<a class="btn btn-primary btn-sm" href="../work/index.php">Lihat Lengkap</a>
				                	</div>
				              	</td>
				            </tr>
			    		</tbody>
		  			</table>
		  			</div>
		  		</div>
		  	</div>

		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>