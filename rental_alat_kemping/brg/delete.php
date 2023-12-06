<?php 
include "connector.php";

$barang_id = mysqli_real_escape_string($conn,$_GET["id"]);

// sql to delete a record
$sql = "DELETE FROM barang WHERE barang_id='$barang_id'";

if (mysqli_query($conn, $sql)) {
    #echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("location: index.php?page=brg")
 ?>