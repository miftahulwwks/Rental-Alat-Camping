
	<div class="container">
		<h1>Barang | Tambah Data Baru</h1>
		<form action="index.php?page=brg_add_save" method="POST">
			<div class="form-group">
				<label for="kode_barang">Kode Barang:</label>
				<input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
			</div>
			<div class="form-group">
				<label for="nama">Nama:</label>
				<input type="text" class="form-control" id="nama" name="nama" required>
			</div>
			<div class="form-group">
				<label for="jenis">Jenis:</label>
				<input type="text" class="form-control" id="jenis" name="jenis" required>
			</div>
			<div class="form-group">
				<label for="merk">Merk:</label>
				<input type="text" class="form-control" id="merk" name="merk" required>
			</div>
			<div class="form-group">
				<label for="th_stok">Tahun Stok:</label>
				<input type="Number" class="form-control" id="th_stok" name="th_stok" required>
			</div>
			<div class="form-group">
				<label for="jumlah">Jumlah:</label>
				<input type="Number" class="form-control" id="jumlah" name="jumlah" required>
			</div>
			<div class="form-group">
				<label for="ket">Keterangan:</label>
				<input type="text" class="form-control" id="ket" name="ket" required>
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>
