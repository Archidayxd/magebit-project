<?php

class email extends dbcon
{
    protected function getAllEmails()
    {

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
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;

        if ($numRows > 0) {
            $sort == "DESC" ? $sort = "ASC" : $sort = "DESC";
            echo "
            <tr>
                <th><a href='?order=Id&&sort=$sort'>Id</th>
                <th><a href='?order=email&&sort=$sort'>Email</a></th>
                <th><a href='?order=time&&sort=$sort'>Time</a></th>
                <th>Delete</th>
            </tr>";
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
}
