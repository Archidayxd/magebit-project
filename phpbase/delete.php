<?php

include('dbcon.php');

class delete extends dbcon
{

    public function deleteItemById($id)
    {
        $query = "DELETE FROM email WHERE Id = '$id'";

        $con = $this->connect();

        $data = mysqli_query($con, $query);

        if ($data) {
            echo "The file was successfully deleted <a href='table.php'>BACK</a>";
        } else {
            echo "Failed to delete";
        }
    }
}

$delete = new delete;
$delete->deleteItemById($_GET["id"]);
