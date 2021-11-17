<?php
include("dbcon.php");

$id = $_GET["rn"];
$query = "DELETE FROM email WHERE Id = '$id'";

$data = mysqli_query($con, $query);

if ($data) {
    echo "Deleted from database";
} else {
    echo "Failed to delete";
}
