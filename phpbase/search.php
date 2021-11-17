<?php
if (isset($_GET['search'])) {
    $filtervalues = $_GET['search'];
    $query = "SELECT * FROM email WHERE CONCAT(email) LIKE '%$filtervalues%'";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $row) {
?>
            <td><?= $row['Id']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['time']; ?></td>
<?php
        }
    } else {
        echo "No result";
    }
}
