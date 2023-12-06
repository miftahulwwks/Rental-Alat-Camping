<?php 
include "connector.php";

$peminjaman_id = mysqli_real_escape_string($conn,$_GET["id"]);

// sql to delete a record
$sql = "DELETE FROM peminjaman WHERE peminjaman_id='$peminjaman_id'";

if (mysqli_query($conn, $sql)) {
    #echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("index.php?page=pjm")
 ?>