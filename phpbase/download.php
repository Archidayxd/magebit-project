<?php
$serverName = "localhost:3307";
$userName = "foo";
$password  = "bar";
$dbName = "emails";

$con = mysqli_connect($serverName, $userName, $password, $dbName);

if (!isset($_POST['xport']) or !is_array($_POST['xport'])) {
    exit('No rows selected for export');
}

$filename = "emails_list.csv";
$fp = fopen('php://output', 'w');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM email";
$result = $con->query($sql);
while ($row = mysqli_fetch_row($result)) {
    $header[] = $row[0];
}

header('Content-type: application/csv');
header('Content-Disposition: attachment; filename=' . $filename);

$ids = $_POST['xport'];
array_walk($ids, function (&$value, $key) {
    $value = (int)$value;
});

$ids = implode(', ', $ids);

$query = "SELECT * FROM email WHERE Id IN ($ids)";
$result = $con->query($query);
while ($row = mysqli_fetch_row($result)) {
    fputcsv($fp, $row);
}
exit;
