<?php

$serverName = "localhost:3307";
$userName = "foo";
$password  = "bar";
$dbName = "emails";


$con = mysqli_connect($serverName, $userName, $password, $dbName);

if (mysqli_connect_errno()) {
    echo "Failed to connect!";
    exit();
} else {
    echo "Connection subsccesful";
}
