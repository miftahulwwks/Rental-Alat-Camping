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
		<h1>Member</h1>
		<table class="table table-striped">
			<thead>
				<tr class="table table-dark">
					<th>Number</th>
					<th>Kode Member</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>No Identitas</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					include "connector.php";

					$sql = "SELECT * FROM Member";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
						$num = 0;
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {
					    	$num++;
				?>
				<tr>
					<td><?=$num?></td>
					<td><?=$row["kode_member"]?></td>
					<td><?=$row["nama"]?></td>
					<td><?=$row["alamat"]?></td>
					<td><?=$row["no_identitas"]?></td>
					<td><a href="index.php?page=mbr_upd&id=<?=$row["member_id"]?>">Edit</a> | <a href="index.php?page=mbr_del&id=<?=$row["member_id"]?>">Delete</a></td>
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
		<p><a href="location: index.php?page=mbr_add">Add</a></p>
	</div>
</body>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
</html>