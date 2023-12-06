<?php 
include "connector.php";

$peminjaman_id = mysqli_real_escape_string($conn,$_POST["status_barang"]);
$member_id = mysqli_real_escape_string($conn,$_POST["nama"]);
$barang_id = mysqli_real_escape_string($conn,$_POST["nama_barang"]);


$sql = "INSERT INTO peminjaman_detail (peminjaman_id, member_id, barang_id )
VALUES ('$peminjaman_id','$member_id', '$barang_id' )";

if (mysqli_query($conn, $sql)) {
    #echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("location: index.php?page=peminjaman_detail")
 ?>