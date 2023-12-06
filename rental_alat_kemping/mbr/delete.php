<?php 
include "connector.php";

$member_id = mysqli_real_escape_string($conn,$_GET["id"]);

// sql to delete a record
$sql = "DELETE FROM member WHERE member_id='$member_id'";

if (mysqli_query($conn, $sql)) {
    #echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("location: index.php?page=mbr")
 ?>