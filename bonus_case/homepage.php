<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Referensi Instansi</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/main.css">
</head>
<body>
	
	<div class="container" style="margin-top:20px">
		<h2>Referensi > Instansi</h2>
		
		<hr>
		
		<table class="table table-striped table-hover table-sm table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>No</th>
					<th>Aksi</th>
					<th>Instansi</th>
					<th>Deskripsi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				
				$sql = mysqli_query($db, "SELECT * FROM data_instansi ORDER BY id DESC") or die(mysqli_error($db));
				
				if(mysqli_num_rows($sql) > 0){
					$no = 1;
					while($data = mysqli_fetch_assoc($sql)){
						
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>
								<a href="edit.php?id='.$data['id'].'" class="badge badge-warning">Edit</a>
								<a href="delete.php?id='.$data['id'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
							<td>'.$data['nama_instansi'].'</td>
							<td>'.$data['deskripsi'].'</td>
						</tr>
						';
						$no++;
					}
				
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script type="text/javascript" src="assets/bootstrap-4.3.1/js/bootstrap.min.js"></script>
	
</body>
</html>