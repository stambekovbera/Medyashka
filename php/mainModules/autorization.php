<?php
require "../../connectPHP/connect.php";

$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);


if (isset($mysql)) {
    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($pass, $user['password'])) {
            $userObj = [
                "userID" => $user['id'],
                "fullname" => $user['fullname'],
                "position" => $user['position'],
                "percentProgress" => $user['percentProgress'],
                "firstBookLastPage" => $user['firstBookLastPage'],
                "secondBookLastPage" => $user['secondBookLastPage'],
                "thirdBookLastPage" => $user['thirdBookLastPage'],
                "fourthBookLastPage" => $user['fourthBookLastPage'],
            ];
            $jsonUser = json_encode($userObj);
            echo $jsonUser;
        }
    }
}
?>