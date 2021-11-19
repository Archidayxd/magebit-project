<?php

include('dbcon.php');

class delete extends dbcon {

    public function deleteItemById($id) {
        $query = "DELETE FROM email WHERE Id = '$id'";

        $con = $this->connect();

        $data = mysqli_query($con, $query);

        if ($data) {
            echo "successfully deleted! <a href='tables.php'>BACK</a>";
        } else {
            echo "Failed to delete";
        }
    }
}

$delete = new delete;
$delete->deleteItemById($_GET["id"]);
