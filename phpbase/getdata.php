<?php

include('dbcon.php');

class GetData extends dbcon
{

    public function getFormData($postMessage)
    {

        $con = $this->connect();

        if (isset($postMessage["email"])) {
            $email = $postMessage["email"];

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if (preg_match("/.co\s*$/", $email)) {
                    echo "We are not accepting subscriptions from Colombia emails";
                    $errorMessage = "We are not accepting subscriptions from Colombia emails";
                } else {
                    $sql = "INSERT INTO `email`(`email`) VALUES ('$email')";
                    mysqli_query($con, $sql);
                    header('Location: ../success.php');
                }
            } else {
                echo "error";
            }
        }
    }
}

$getData = new GetData;
$getData->getFormData($_POST);
