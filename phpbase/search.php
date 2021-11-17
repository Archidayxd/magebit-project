<?php
require("dbcon.php");
if (isset($_GET['search'])) {
    $filtervalues = $_GET['search'];
    $query = "SELECT * FROM email WHERE CONCAT(email) LIKE '%$filtervalues%'";
    $query_run = mysqli_query($con, $query);


    if (mysqli_num_rows($query_run) > 0) {
?>
        <a href='table.php'>BACK</a>
        <table>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Time</th>
                <th>Delete</th>
            </tr>
            <?php
            foreach ($query_run as $row) {
            ?>
                <tr>
                    <td><?= $row['Id']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['time']; ?></td>
                    <td><?= "<a href='delete.php?rn=$row[Id]'>Delete </a>" ?></td>
                </tr>

        <?php
            }
        } else {
            echo "No result <a href='table.php'>BACK</a>";
        }
        ?><table><?php
                }
