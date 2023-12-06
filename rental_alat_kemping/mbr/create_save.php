<?php 
include "connector.php";

$kode_member = mysqli_real_escape_string($conn,$_POST["kode_member"]);
$nama = mysqli_real_escape_string($conn,$_POST["nama"]);
$alamat = mysqli_real_escape_string($conn,$_POST["alamat"]);
$no_identitas = mysqli_real_escape_string($conn,$_POST["no_identitas"]);

$sql = "INSERT INTO member (kode_member, nama, alamat, no_identitas) 
VALUES ('$kode_member', '$nama', '$alamat', '$no_identitas')";

if (mysqli_query($conn, $sql)) {
    #echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("location: index.php?page=mbr")
 ?>