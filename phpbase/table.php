<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="search.php" method="GET">
        <input type="text" name="search" required value="<?php if (isset($_GET['search'])) {
                                                                echo $_GET['search'];
                                                            } ?>">
        <button type="submit">Search</button>
    </form>
    <?php
    require("dbcon.php");
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    if (isset($_GET["order"])) {
        $order = $_GET["order"];
    } else {
        $order = "Id";
    }

    if (isset($_GET["sort"])) {
        $sort = $_GET["sort"];
    } else {
        $sort = "ASC";
    }

    $sql = "SELECT * FROM email ORDER BY $order $sort";
    $result = $con->query($sql);

    if (!empty($result->num_rows) && $result->num_rows > 0) {
        $sort == "DESC" ? $sort = "ASC" : $sort = "DESC";

        echo " <table>
            <tr>
                <th><a href='?order=Id&&sort=$sort'>Id</a></th>
                <th><a href='?order=email&&sort=$sort'>Email</a></th>
                <th><a href='?order=time&&sort=$sort'>Time</a></th>
                <th>Delete</th>
            </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Id"] . "</td><td>" . $row["email"] . "</td><td>" . $row["time"] . "</td><td> <a href='delete.php?rn=$row[Id]'>Delete </a>" . "</tr>";
        }
    } else {
        echo "0 results";
    }
    require("search.php");
    $con->close();
    ?>

    </table>
</body>

</html>