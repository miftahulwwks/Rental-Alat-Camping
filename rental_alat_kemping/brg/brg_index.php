
	<div class="container">
		<h1>Barang</h1>
		<table class="table table-striped">
			<thead>
				<tr class="table table-dark">
					<th>Nomor</th>
					<th>Kode Barang</th>
					<th>Nama</th>
					<th>Jenis</th>
					<th>Merk</th>
					<th>Tahun Stok</th>
					<th>Jumlah</th>
					<th>Keterangan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					include "connector.php";

					$sql = "SELECT * FROM Barang";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
						$num = 0;
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {
					    	$num++;
				?>
				<tr>
					<td><?=$num?></td>
					<td><?=$row["kode_barang"]?></td>
					<td><?=$row["nama"]?></td>
					<td><?=$row["jenis"]?></td>
					<td><?=$row["merk"]?></td>
					<td><?=$row["th_stok"]?></td>
					<td><?=$row["jumlah"]?></td>
					<td><?=$row["ket"]?></td>
					<td><a href="index.php?page=brg_upd&id=<?=$row["barang_id"]?>">Ubah</a> | <a href="index.php?page=brg_del&id=<?=$row["barang_id"]?>">Hapus</a></td>
				</tr>
				<?php
					    }
					} else {
				?>
				<tr>
					<td colspan="5">-</td>
				</tr>
				<?php
					}

					mysqli_close($conn);
				?>
				
			</tbody>
		</table>
		<p><a href="location: index.php?page=brg_add">Tambah Data</a></p>
	</div>
