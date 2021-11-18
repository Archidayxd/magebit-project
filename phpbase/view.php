<?php

class view extends email
{
    public function showAllEmails()
    {
        $datas = $this->getAllEmails();
        foreach ($datas as $data) {
            echo "<tr><td>" . $data["Id"] . "</td><td>" . $data["email"] . "</td><td>" . $data["time"] . "</td><td> <a href='delete.php?rn=$data[Id]'>Delete </a>" . "</tr>";
        }
    }
}
