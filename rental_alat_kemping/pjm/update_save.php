<?php 
include "connector.php";

$peminjaman_id = mysqli_real_escape_string($conn,$_GET["id"]);

$tanggal_pinjam = mysqli_real_escape_string($conn,$_POST["tanggal_pinjam"]);
$tanggal_kembali = mysqli_real_escape_string($conn,$_POST["tanggal_kembali"]);
$status = mysqli_real_escape_string($conn,$_POST["status"]);
$keterangan = mysqli_real_escape_string($conn,$_POST["keterangan"]);

$sql = "UPDATE peminjaman SET tanggal_pinjam='$tanggal_pinjam', tanggal_kembali='$tanggal_kembali', status='$status', keterangan='$keterangan' WHERE peminjaman_id='$peminjaman_id'";

if (mysqli_query($conn, $sql)) {
    #echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("index.php?page=pjm")
 ?>