<?php 
include "connector.php";

$kode_barang = mysqli_real_escape_string($conn,$_POST["kode_barang"]);
$nama = mysqli_real_escape_string($conn,$_POST["nama"]);
$jenis = mysqli_real_escape_string($conn,$_POST["jenis"]);
$merk = mysqli_real_escape_string($conn,$_POST["merk"]);
$th_stok = mysqli_real_escape_string($conn,$_POST["th_stok"]);
$jumlah = mysqli_real_escape_string($conn,$_POST["jumlah"]);
$ket = mysqli_real_escape_string($conn,$_POST["ket"]);

$sql = "INSERT INTO barang (kode_barang, nama, jenis, merk, th_stok, jumlah, ket)
VALUES ('$kode_barang', '$nama', '$jenis', '$merk', '$th_stok', '$jumlah', '$ket')";

if (mysqli_query($conn, $sql)) {
    #echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("location: index.php?page=brg")
 ?>