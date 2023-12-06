<?php 
include "connector.php";

$barang_id = mysqli_real_escape_string($conn,$_GET["id"]);

$kode_barang = mysqli_real_escape_string($conn,$_POST["kode_barang"]);
$nama = mysqli_real_escape_string($conn,$_POST["nama"]);
$jenis = mysqli_real_escape_string($conn,$_POST["jenis"]);
$merk = mysqli_real_escape_string($conn,$_POST["merk"]);
$th_stok = mysqli_real_escape_string($conn,$_POST["th_stok"]);
$jumlah = mysqli_real_escape_string($conn,$_POST["jumlah"]);
$ket = mysqli_real_escape_string($conn,$_POST["ket"]);

$sql = "UPDATE barang SET kode_barang='$kode_barang', nama='$nama', jenis='$jenis', merk='$merk', th_stok='$th_stok', jumlah='$jumlah', ket='$ket' WHERE barang_id='$barang_id'";

if (mysqli_query($conn, $sql)) {
    #echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("location: index.php?page=brg")
 ?>