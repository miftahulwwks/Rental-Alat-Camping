<?php 
	include "connector.php";

	$peminjaman_id = mysqli_real_escape_string($conn,$_GET["id"]);

	$sql = "SELECT * FROM peminjaman WHERE peminjaman_id = '$peminjaman_id'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
    	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rental Database Access</title>
	<meta charset="utf-8">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Peminjaman Alat Camping | Update</h1>
		<form action="index.php?page=pjm_upd_save&id=<?=$peminjaman_id?>" method="POST">
			<form action="create_save.php" method="POST">
			<div class="form-group">
				<label for="tanggal_pinjam">Tanggal Pinjam:</label>
				<input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" value="<?=$row['tanggal_pinjam']?>" required>
			</div>
			<div class="form-group">
				<label for="tanggal_kembali">Tanggal Kembali:</label>
				<input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" value="<?=$row['tanggal_kembali']?>" required>
			</div>
			<div class="form-group">
				<label for="status">Status:</label>
				<input type="text" class="form-control" id="status" name="status" value="<?=$row['status']?>" required>
			</div>
			<div class="form-group">
				<label for="Keterangan">Keterangan:</label>
				<input type="text" class="form-control" id="Keterangan" name="Keterangan" value="<?=$row['keterangan']?>" required>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
</html>
<?php
	    }
	} else {

	}

	mysqli_close($conn);
?>