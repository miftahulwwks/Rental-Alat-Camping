
	<div class="container">
		<h1>Nilai | Tambah Data Baru</h1>
		<form action="index.php?page=peminjaman_detail_add_save" method="POST">
			<div class="form-group">
				<label for="nama">Nama Peminjam:</label>
				<select class="form-control" name="nama" id="nama">
					<?php
						include "connector.php";

						//Get data from member table
					    $sql_member = "SELECT * FROM member";
						$result_member = mysqli_query($conn, $sql_member);

						if (mysqli_num_rows($result_member) > 0) {
							# code...
							while ($row_member = mysqli_fetch_assoc($result_member)) {
								# code...
								echo "<option value='".$row_member[member_id]."'>".$row_member['nama']."</option>";
							}
						} else {
							echo "<option value='-'>-</option>";
						}
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="nama_barang">Nama Barang:</label>
				<select class="form-control" name="nama_barang" id="nama_barang">
					<?php
						//Get data from barang table
						$sql_barang = "SELECT * FROM barang";
						$result_barang = mysqli_query($conn, $sql_barang);

						if (mysqli_num_rows($result_barang) > 0) {
							# code...
							while ($row_barang = mysqli_fetch_assoc($result_barang)) {
								# code...
								echo "<option value='".$row_barang[barang_id]."'>".$row_barang['nama']."</option>";
							}
						} else {
							echo "<option value='-'>-</option>";
						}

			
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="status_barang">Status:</label>
				<select class="form-control" name="status_barang" id="status_barang">
					<?php
						//Get data from barang table
						$sql_peminjaman = "SELECT * FROM peminjaman";
						$result_peminjaman = mysqli_query($conn, $sql_peminjaman);

						if (mysqli_num_rows($result_peminjaman) > 0) {
							# code...
							while ($row_peminjaman = mysqli_fetch_assoc($result_peminjaman)) {
								# code...
								echo "<option value='".$row_peminjaman[peminjaman_id]."'>".$row_peminjaman['status']."</option>";
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
