<?php

class view extends email
{
    public function showAllEmails()
    {
        $datas = $this->getAllEmails();
?>
        <form action="download.php" method="POST">
            <!-- <a class="exportCSV" href="download.php">Export to CSV</a> -->
            <?php
            foreach ($datas as $data) {
                echo "<tr><td><input type='checkbox' name='xport[]' value='{$data['Id']}'>" . $data["Id"] . "</td><td>" . $data["email"] . "</td><td>" . $data["time"] . "</td><td> <a href='delete.php?id=$data[Id]'>Delete </a>" . "</tr>";
            }
            ?>
            <button type="sumbit">Export CSV</button>
        </form>
<?php
    }
}
