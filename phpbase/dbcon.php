<?php

class dbcon
{


    protected function connect()
    {
        $serverName = "localhost:3307";
        $userName = "foo";
        $password = "bar";
        $dbName = "emails";

        return new mysqli($serverName, $userName, $password, $dbName);
    }
}


// $con = mysqli_connect($serverName, $userName, $password, $dbName);

if (mysqli_connect_errno()) {
    echo "Failed to connect!";
    exit();
}
