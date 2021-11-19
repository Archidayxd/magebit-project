<?php

include('dbcon.php');

class GetData extends dbcon {

    public function getFormData($postMessage) {

        $con = $this->connect();

        if (isset($postMessage["email"])) {
            $email = $postMessage["email"];

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $sql = "INSERT INTO `email`(`email`) VALUES ('$email')";
                mysqli_query($con, $sql);
                header('Location: ../success.php');
            } else {
                echo "error";
            }
        }
    }
}

$getData = new GetData;
$getData->getFormData($_POST);

//     if ($result == true) {
//         echo "<h3>Succes!!!</h3>";
//     } else {
//         echo "<h3>Failed!</h3>";
//     }
// }
