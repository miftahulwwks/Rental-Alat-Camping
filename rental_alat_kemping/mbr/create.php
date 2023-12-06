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
		<h1>Peminjaman Alat Camping</h1>
		<form action="index.php?page=mbr_add_save" method="POST">
			<div class="form-group">
				<label for="kode_member">ID Number:</label>
				<input type="text" class="form-control" id="kode_member" name="kode_member" required>
			</div>
			<div class="form-group">
				<label for="nama">Nama:</label>
				<input type="text" class="form-control" id="nama" name="nama" required>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat:</label>
				<input type="text" class="form-control" id="alamat" name="alamat">
			</div>
			<div class="form-group">
				<label for="no_identitas">No Identitas:</label>
				<input type="text" class="form-control" id="no_identitas" name="no_identitas">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
</html>