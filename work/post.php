<?php include_once('../_header.php'); ?>

<div class="container" style="margin-top: 100px;">
	<div class="row">
		<h2>Post Tugas</h2>
		<small>Selamat Datang <?=$_SESSION['user']?> List Tugas Kelas 12</small>
		<div class="col-md-3 mt-4">
			<form class="form" method="POST" action="upload.php" enctype="multipart/form-data">
				<input type="file" name="upload" class="form-control mb-3" required autofocus>
				<div class="form-groub mb-3">
					<label for="guru">Guru Bidang: </label>
					<input type="text" name="guru" class="form-control" required>
				</div>
				<div class="form-groub mb-3">
					<label for="guru">Tanggal Pemberian Tugas: </label>
					<input type="date" name="tgl" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-success btn-sm mt-2" name="submit"><span class="fas fa-file-upload"></span>&nbsp; Upload</button> 
		</div>
	</div>
</div>