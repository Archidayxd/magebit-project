<?php

include("dbcon.php");

class DownloadCsv extends dbcon
{

    public function download()
    {
        $con = $this->connect();

        if (!isset($_POST['xport']) or !is_array($_POST['xport'])) {
            exit("No rows are selected <a href='table.php'>BACK</a>");
        }

        $filename = "emails_list.csv";
        $fp = fopen('php://output', 'w');

        $sql = "SELECT * FROM email";
        $result = $con->query($sql);
        while ($row = mysqli_fetch_row($result)) {
            $header[] = $row[0];
        }

        header('Content-type: application/csv');
        header('Content-Disposition: attachment; filename=' . $filename);

        $ids = $_POST['xport'];
        array_walk($ids, function (&$value) {
            $value = (int)$value;
        });

        $ids = implode(', ', $ids);

        $query = "SELECT * FROM email WHERE Id IN ($ids)";
        $result = $con->query($query);
        while ($row = mysqli_fetch_row($result)) {
            fputcsv($fp, $row);
        }
        exit;
    }
}

$DownloadCsv = new DownloadCsv;
$DownloadCsv->download();
