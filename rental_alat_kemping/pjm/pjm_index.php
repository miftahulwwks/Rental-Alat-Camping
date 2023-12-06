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
		<table class="table table-striped">
			<thead>
				<tr class="table table-dark">
					<th>Number</th>
					<th>Tanggal Pinjam</th>
					<th>Tanggal Kembali</th>
					<th>Status</th>
					<th>Keterangan</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					include "connector.php";

					$sql = "SELECT * FROM Peminjaman";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
						$num = 0;
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {
					    	$num++;
				?>
				<tr>
					<td><?=$num?></td>
					<td><?=$row["tanggal_pinjam"]?></td>
					<td><?=$row["tanggal_kembali"]?></td>
					<td><?=$row["status"]?></td>
					<td><?=$row["keterangan"]?></td>
					<td><a href="index.php?page=pjm_upd&id=<?=$row["peminjaman_id"]?>">Edit</a> | <a href="index.php?page=pjm_del&id=<?=$row["peminjaman_id"]?>">Delete</a></td>
				</tr>
				<?php
					    }
					} else {
				?>
				<tr>
					<td colspan="7">-</td>
				</tr>
				<?php
					}

					mysqli_close($conn);
				?>
				
			</tbody>
		</table>
		<p><a href="index.php?page=pjm_add">Add</a></p>
	</div>
</body>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
</html>