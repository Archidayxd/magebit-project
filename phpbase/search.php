<?php

include('dbcon.php');

class searchClass extends dbcon
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
?>
            <a href='table.php'>BACK</a>
            <table>
                <tr>
                    <th><a href='?search=<?= $searchQuery ?>&order=Id&sort=<?= $sort ?>'>Id</th>
                    <th><a href='?search=<?= $searchQuery ?>&order=email&sort=<?= $sort ?>'>Email</a></th>
                    <th><a href='?search=<?= $searchQuery ?>&order=time&sort=<?= $sort ?>'>Time</a></th>
                    <th>Delete</th>
                </tr>
                <?php
                foreach ($query_run as $row) {
                ?>
                    <tr>
                        <td><?= $row['Id']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['time']; ?></td>
                        <td><?= "<a href='delete.php?id=$row[Id]'>Delete </a>" ?></td>
                    </tr>

            <?php
                }
            } else {
                echo "No result <a href='table.php'>BACK</a>";
            }
            ?><table><?php
                    }
                }

                $searchClass = new searchClass;
                $searchClass->search($_GET);
