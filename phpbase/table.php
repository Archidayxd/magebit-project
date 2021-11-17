<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="GET">
        <input type="text" name="search" required value="<?php if (isset($_GET['search'])) {
                                                                echo $_GET['search'];
                                                            } ?>">
        <button type="submit">Search</button>
    </form>
    <table>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Time</th>
            <th>Delete</th>
        </tr>
        <?php
        require("dbcon.php");
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        $sql = "SELECT * FROM email";
        $result = $con->query($sql);

        if (!empty($result->num_rows) && $result->num_rows > 0) {
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