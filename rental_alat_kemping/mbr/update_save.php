<?php 
include "connector.php";

$member_id = mysqli_real_escape_string($conn,$_GET["id"]);

$kode_member = mysqli_real_escape_string($conn,$_POST["kode_member"]);
$nama = mysqli_real_escape_string($conn,$_POST["nama"]);
$alamat = mysqli_real_escape_string($conn,$_POST["alamat"]);
$no_identitas = mysqli_real_escape_string($conn,$_POST["no_identitas"]);

$sql = "UPDATE member SET kode_member='$kode_member', nama='$nama', alamat='$alamat', no_identitas='$no_identitas' WHERE member_id='$member_id'";

if (mysqli_query($conn, $sql)) {
    #echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("location: index.php?page=mbr")
 ?>