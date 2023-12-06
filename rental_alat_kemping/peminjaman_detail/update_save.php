<?php 
include "connector.php";

$member_id = mysqli_real_escape_string($conn,$_GET["id"]);

$member_id = mysqli_real_escape_string($conn,$_POST["nama"]);
$barang_id = mysqli_real_escape_string($conn,$_POST["matakuliah"]);
$peminjaman_id = mysqli_real_escape_string($conn,$_POST["status"]);

$sql = "UPDATE peminjaman_detail SET member_id='$member_id', barang_id='$barang_id', peminjaman_id=$peminjaman_id WHERE member_id='$member_id'";

if (mysqli_query($conn, $sql)) {
    #echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("index.php?page=peminjaman_detail")
 ?>