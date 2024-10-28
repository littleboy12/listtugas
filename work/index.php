<?php include_once('../_header.php'); ?>

<div class="container" style="margin-top: 80px;">
		<div class="row">
			<h2>Beranda</h2>
			<small>Selamat Datang <?=$_SESSION['user']?> List Tugas Kelas 12</small>

			<div class="text-end mb-4">
				<a href="" class="btn btn-warning btn-sm" style="border-radius: 100%; color: white;"><i class="fas fa-sync-alt"></i></a>
				<a href="post.php" class="btn btn-success btn-sm" style="border-radius: 5px;"><i class="fas fa-file-upload"></i>&nbsp; Post Tugas</a>
			</form>
			</div>

			<div class="table-responsive">
			<table id="example" class="table table-bordered table-hover mt-4 mb-4" style="width:100%;">
			    <thead>
				    <tr>  
				    	<th>No</th>
				        <th>File Name</th>
				        <th>Guru</th>
				        <th>Tanggal</th>
				        <th>Action</th>   
				     </tr>
			    </thead>
			    <tbody>
				    <?php
				    $no = 1;
				    $row = $conn->query("SELECT * FROM `file` ORDER BY name ASC") or die(mysqli_error());
				    while($fetch = $row->fetch_array()){
				    ?>
			     	<tr>
			        <?php 
			        $name = explode('/', $fetch['file']);
			        ?>
				        <td><?php echo $no++?></td>
				        <td><?php echo $fetch['name']?></td>
				        <td><?php echo $fetch['guru']?></td>
				        <td><?php echo $fetch['tgl']?></td>
				        <td>
				        	<a href="download.php?file=<?php echo $name[1]?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-download"></span><span class="fas fa-download"></span></a>
				        	<a href="del.php?id=<?=$fetch['file_id']?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span></a>
				        </td>
			      </tr>
			      <?php
			    }
			    ?>
			  </tbody>
			</table>
			</div>
			<br>
			<br>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>