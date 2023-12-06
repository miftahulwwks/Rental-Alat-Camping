<?php 
include "connector.php";

$tanggal_pinjam = mysqli_real_escape_string($conn,$_POST["tanggal_pinjam"]);
$tanggal_kembali = mysqli_real_escape_string($conn,$_POST["tanggal_kembali"]);
$status = mysqli_real_escape_string($conn,$_POST["status"]);
$keterangan = mysqli_real_escape_string($conn,$_POST["keterangan"]);

$sql = "INSERT INTO peminjaman (tanggal_pinjam, tanggal_kembali, status, keterangan) 
VALUES ('$tanggal_pinjam', '$tanggal_kembali', '$status', '$keterangan')";

if (mysqli_query($conn, $sql)) {
    #echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("location: index.php?page=pjm");
 ?>