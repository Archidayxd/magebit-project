<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/main.css">
    <title>Document</title>
    <link rel="stylesheet" href="/fonts/style.css">
</head>

<body>
    <div class="container">
        <div class="left">
            <?php
            require("components/header.php");
            ?>
            <div class="subscription-box">
                <div class="subscription-form">
                    <?php
                    require("components/subscription_box.php");
                    ?>
                    <?php
                    require("components/footer.php")
                    ?>
                </div>
            </div>
        </div>
        <div class="right"></div>
    </div>
    <script src="/scripts/script.js"></script>
</body>

</html>