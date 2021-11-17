<?php
require("dbcon.php");

if (isset($_GET["order"])) {
    $order = $_GET["order"];
} else {
    $order = "asset_num";
}

if (isset($_GET["sort"])) {
    $sort = $_GET["sort"];
} else {
    $sort = "ASC";
}

$resultset = $con->query("SELECT * FROM email ORDER BY $order $sort");

if (!empty($resultset->num_rows) && $resultset->num_rows > 0) {
    echo "
    <table border = '1'>
    <tr>
    <th>Id</th>
    <th>Email</th>
    <th>Time</th>
    <th>Delete</th>
    </tr>
    ";
    while ($row = $resultset->fetch_assoc()) {
        echo "<tr><td>" . $row["Id"] . "</td><td>" . $row["email"] . "</td><td>" . $row["time"] . "</td><td> <a href='delete.php?rn=$row[Id]'>Delete </a>" . "</tr>";
        echo "</table>";
    };
} else {
    echo "No results";
}
