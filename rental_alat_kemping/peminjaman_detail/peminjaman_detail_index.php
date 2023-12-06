
	<div class="container">
		<h1>Peminjaman Detail </h1>
		<table class="table table-striped">
			<thead>
				<tr class="table table-dark">
					<th>Nomor</th>
					<th>Nama Member</th>
					<th>Nama Barang</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					include "connector.php";

					$sql = "SELECT * FROM Peminjaman_detail";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
						$num = 0;
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {
					    	$num++;
					    	echo "<tr>";
					    	echo "<td>".$num."</td>";
				
							//Get data from member table
					    	$sql_member = "SELECT * FROM member where member_id='$row[member_id]'";
							$result_member = mysqli_query($conn, $sql_member);

							if (mysqli_num_rows($result_member) > 0) {
								# code...
								while ($row_member = mysqli_fetch_assoc($result_member)) {
									# code...
									echo "<td>".$row_member['nama']." </td>";
								}
							} else {
								echo "<td>-</td>";
							}

					    	//Get data from mk table
							$sql_barang = "SELECT * FROM barang where barang_id='$row[barang_id]'";
							$result_barang = mysqli_query($conn, $sql_barang);

							if (mysqli_num_rows($result_barang) > 0) {
								# code...
								while ($row_barang = mysqli_fetch_assoc($result_barang)) {
									# code...
									echo "<td>".$row_barang['nama']."</td>";
								}
							} else {
								echo "<td>-</td>";
							}

							$sql_peminjaman = "SELECT * FROM peminjaman where peminjaman_id='$row[peminjaman_id]'";
							$result_peminjaman = mysqli_query($conn, $sql_peminjaman);

							if (mysqli_num_rows($result_peminjaman) > 0) {
								# code...
								while ($row_peminjaman = mysqli_fetch_assoc($result_peminjaman)) {
									# code...
									echo "<td>".$row_peminjaman['status']."</td>";
								}
							} else {
								echo "<td>-</td>";
							}
							echo "<td><a href='index.php?page=peminjaman_detail_upd&id=".$row['member_id']."'>Ubah</a> | <a href='index.php?page=peminjaman_del&id=".$row["member_id"]."'>Hapus</a></td>";
							echo "</tr>";
					    }
					} else {
						echo "<tr>";
						echo "<td colspan='6'>-</td>";
						echo "</tr>";
					}

					mysqli_close($conn);
				?>
			</tbody>
		</table>
		<p><a href=" index.php?page=peminjaman_detail_add">Tambah Data</a></p>
	</div>
