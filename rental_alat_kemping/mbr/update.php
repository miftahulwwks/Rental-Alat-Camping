<?php 
	include "connector.php";

	$member_id = mysqli_real_escape_string($conn,$_GET["id"]);

	$sql = "SELECT * FROM member WHERE member_id = '$member_id'";
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
		<form action="index.php?page=mbr_upd_save&id=<?=$member_id?>" method="POST">
			<div class="form-group">
				<label for="kode_member">Kode Member:</label>
				<input type="text" class="form-control" id="kode_member" name="kode_member" value="<?=$row['kode_member']?>" required>
			</div>
			<div class="form-group">
				<label for="first_name">Nama:</label>
				<input type="text" class="form-control" id="nama" name="nama" value="<?=$row['nama']?>" required>
			</div>
			<div class="form-group">
				<label for="last_name">Alamat:</label>
				<input type="text" class="form-control" id="alamat" name="alamat" value="<?=$row['alamat']?>">
			</div>
			<div class="form-group">
				<label for="address">No Identitas:</label>
				<input type="text" class="form-control" id="no_identitas" name="no_identitas" value="<?=$row['no_identitas']?>">
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