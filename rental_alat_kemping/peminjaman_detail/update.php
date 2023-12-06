<?php 
	include "connector.php";

	$member_id = mysqli_real_escape_string($conn,$_GET["id"]);

	$sql = "SELECT * FROM peminjaman_detail WHERE member_id = '$member_id'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
    	
?>

	<div class="container">
		<h1>Nilai | Ubah Data Nilai</h1>
		<form action="index.php?page=nilai_upd_save&id=<?=$member_id?>" method="POST">
			<div class="form-group">
				<label for="member_id">Nama Member:</label>
				<select class="form-control" name="member_id" id="member_id">
					<?php
						//Get data from students table
					    $sql_member = "SELECT * FROM member";
						$result_member = mysqli_query($conn, $sql_member);

						if (mysqli_num_rows($result_member) > 0) {
							# code...
							while ($row_member = mysqli_fetch_assoc($result_member)) {
								# code...
								if ($row['member_id'] == $row_member['member_id']) {
									# code...
									echo "<option value='".$row_member['member_id']."' selected>".$row_member['nama']." </option>";
								} else {
									echo "<option value='".$row_member['member_id']."'>".$row_member['nama']." </option>";
								}
							}
						} else {
							echo "<option value='-'>-</option>";
						}
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="barang_id">Nama Barang:</label>
				<select class="form-control" name="barang_id" id="barang_id">
					<?php
						//Get data from mk table
						$sql_barang = "SELECT * FROM barang";
						$result_barang = mysqli_query($conn, $sql_barang);

						if (mysqli_num_rows($result_barang) > 0) {
							# code...
							while ($row_barang = mysqli_fetch_assoc($result_barang)) {
								# code...
								if ($row['barang_id'] == $row_barang['barang_id']) {
									# code...
									echo "<option value='".$row_barang['barang_id']."' selected>".$row_barang['nama']."</option>";
								} else {
									echo "<option value='".$row_barang['barang_id']."'>".$row_barang['nama']."</option>";
								}
							}
						} else {
							echo "<option value='-'>-</option>";
						}

						mysqli_close($conn);
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="peminjaman_id">Status:</label>
				<select class="form-control" name="peminjaman_id" id="peminjaman_id">
					<?php
						//Get data from mk table
						$sql_peminjaman = "SELECT * FROM peminjaman";
						$result_peminjaman = mysqli_query($conn, $sql_peminjaman);

						if (mysqli_num_rows($result_peminjaman) > 0) {
							# code...
							while ($row_peminjaman = mysqli_fetch_assoc($result_peminjaman)) {
								# code...
								if ($row['peminjaman_id'] == $row_peminjaman['peminjaman_id']) {
									# code...
									echo "<option value='".$row_peminjaman['peminjaman_id']."' selected>".$row_peminjaman['status']."</option>";
								} else {
									echo "<option value='".$row_peminjaman['peminjaman_id']."'>".$row_peminjaman['status']."</option>";
								}
							}
						} else {
							echo "<option value='-'>-</option>";
						}

						mysqli_close($conn);
					?>
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>

<?php
	    }
	} else {

	}

	mysqli_close($conn);
?>