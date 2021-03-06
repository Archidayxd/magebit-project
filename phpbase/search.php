<?php

include('DbCon.php');

class SearchClass extends DbCon
{

    public function search($requestArr)
    {
        $searchQuery = $requestArr["search"];

        if (isset($requestArr["order"])) {
            $order = $requestArr["order"];
        } else {
            $order = "Id";
        }

        if (isset($requestArr["sort"])) {
            $sort = $requestArr["sort"];
        } else {
            $sort = "ASC";
        }

        $con = $this->connect();

        $query = "SELECT * FROM email WHERE CONCAT(email) LIKE '%$searchQuery%' ORDER BY $order $sort";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) > 0) {
            $sort == "DESC" ? $sort = "ASC" : $sort = "DESC";
            echo "
            <a href='table.php'>BACK</a>
            <table>
                <tr>
                    <th><a href='?search=$searchQuery&order=Id&sort=$sort'>Id</th>
                    <th><a href='?search=$searchQuery&order=Email&sort=$sort'>Email</th>
                    <th><a href='?search=$searchQuery&order=Time&sort=$sort'>Time</th>
                    <th>Delete</th>
                </tr>
                ";
            foreach ($query_run as $row) {
                echo "
                <tr>
                    <td>$row[Id]</td>
                    <td>$row[email]</td>
                    <td>$row[time]</td>
                    <td><a href='delete.php?id=$row[Id]'>Delete</a></td>
                </tr>

        ";
            }
        } else {
            echo "No result <a href='table.php'>BACK</a>";
        }
        echo "</table>";
    }
}

$searchClass = new SearchClass;
$searchClass->search($_GET);
