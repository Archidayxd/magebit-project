<?php

class View extends email
{
    public function showAllEmails()
    {
        $con = $this->getAllEmails();
        echo "
        <form action='download.php' method='POST'>
            ";
        foreach ($con as $data) {
            echo "<tr><td><input type='checkbox' name='xport[]' value='{$data['Id']}'>" . $data["Id"] . "</td><td>" . $data["email"] . "</td><td>" . $data["time"] . "</td><td> <a href='delete.php?id=$data[Id]'>Delete </a>" . "</tr>";
        }
        echo "<button type='sumbit'>Export CSV</button>
        </form>";
    }
}
