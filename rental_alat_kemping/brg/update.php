<?php 
	include "connector.php";

	$barang_id = mysqli_real_escape_string($conn,$_GET["id"]);

	$sql = "SELECT * FROM barang WHERE barang_id = '$barang_id'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
    	
?>

	<div class="container">
		<h1>Barang | Ubah Data Barang</h1>
		<form action="index.php?page=brg_upd_save&id=<?=$barang_id?>" method="POST">
			<div class="form-group">
				<label for="kode_barang">Kode Barang:</label>
				<input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?=$row['kode_barang']?>" required>
			</div>
			<div class="form-group">
				<label for="nama">Nama:</label>
				<input type="text" class="form-control" id="nama" name="nama" value="<?=$row['nama']?>" required>
			</div>
			<div class="form-group">
				<label for="jenis">Jenis:</label>
				<input type="text" class="form-control" id="jenis" name="jenis" value="<?=$row['jenis']?>" required>
			</div>
			<div class="form-group">
				<label for="merk">Merk:</label>
				<input type="text" class="form-control" id="merk" name="merk" value="<?=$row['merk']?>" required>
			</div>
			<div class="form-group">
				<label for="th_stok">Tahun Stok:</label>
				<input type="Number" class="form-control" id="th_stok" name="th_stok" value="<?=$row['th_stok']?>" required>
			</div>
			<div class="form-group">
				<label for="jumlah">Jumlah:</label>
				<input type="Number" class="form-control" id="jumlah" name="jumlah" value="<?=$row['jumlah']?>" required>
			</div>
			<div class="form-group">
				<label for="ket">Keterangan:</label>
				<input type="text" class="form-control" id="ket" name="ket" value="<?=$row['ket']?>" required>
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