<?php

include('DbCon.php');

class Delete extends DbCon
{

    public function deleteItemById($id)
    {
        $sql = "DELETE FROM email WHERE Id = '$id'";

        $con = $this->connect();
        $result = $con->query($sql);

        if ($result) {
            echo "The file was successfully deleted <a href='table.php'>BACK</a>";
        } else {
            echo "Failed to delete";
        }
    }
}

$delete = new Delete;
$delete->deleteItemById($_GET["id"]);
