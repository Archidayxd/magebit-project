<?php
include("dbcon.php");

$id = $_GET["rn"];
$query = "DELETE FROM email WHERE Id = '$id'";

$data = mysqli_query($con, $query);

if ($data) {
    echo "succesfuly seleted! <a href='table.php'>BACK</a>";
} else {
    echo "Failed to delete";
}
