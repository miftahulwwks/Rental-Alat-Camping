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
		<form action="index.php?page=pjm_add_save" method="POST">
			<div class="form-group">
				<label for="tanggal_pinjam">Tanggal Pinjam:</label>
				<input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required>
			</div>
			<div class="form-group">
				<label for="tanggal_kembali">Tanggal Kembali:</label>
				<input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" required>
			</div>
			<div class="form-group">
				<label for="status">Status:</label>
				<input type="text" class="form-control" id="status" name="status">
			</div>
			<div class="form-group">
				<label for="keterangan">Keterangan:</label>
				<input type="text" class="form-control" id="keterangan" name="keterangan">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
</html>