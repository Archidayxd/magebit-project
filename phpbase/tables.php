<?php
include("dbcon.php");
include("emails.php");
include("view.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="search.php" method="GET" style="display: inline-block;">
        <input type="text" name="search" required value="<?php if (isset($_GET['search'])) {
                                                                echo $_GET['search'];
                                                            } ?>">
        <button type="submit">Search</button>
    </form>
    <table>
        <?php
        $emails = new view();
        $emails->showAllEmails();
        ?>
    </table>
</body>

</html>