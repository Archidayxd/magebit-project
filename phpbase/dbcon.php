<?php

class dbcon
{
    private $serverName;
    private $userName;
    private $password;
    private $dbName;

    protected function connect()
    {
        $this->serverName = "localhost:3307";
        $this->userName = "foo";
        $this->password = "bar";
        $this->dbName = "emails";


        $con = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);
        return $con;
    }
}




// $con = mysqli_connect($serverName, $userName, $password, $dbName);

if (mysqli_connect_errno()) {
    echo "Failed to connect!";
    exit();
}
