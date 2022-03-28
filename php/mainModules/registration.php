<?php
require "../../connectPHP/connect.php";

$fullname = filter_var(trim($_POST['userName']), FILTER_SANITIZE_STRING);
$age = filter_var(trim($_POST['age']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$passHash = password_hash($pass, PASSWORD_BCRYPT);
$position = "";

if (isset($mysql)) {
    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
    $user = mysqli_fetch_assoc($result);
    if ($user) {
        $response = [
            'message' => "Этот E-Mail уже зарегистрирован. Войдите!",
            'status' => false,
        ];
    } else {
        $response = [
            'message' => "Регистрация прошла успешно!",
            'status' => true,
        ];
        if ($age >= 3 && $age <= 7) {
            $position = "Дошкольник";
            $mysql->query("INSERT INTO `users` (`fullname`, `position`, `email`, `password`) VALUES ('$fullname', '$position', '$email', '$passHash')");
        } else if ($age >= 8 && $age <= 17) {
            $position = "Школьник";
            $mysql->query("INSERT INTO `users` (`fullname`, `position`, `email`, `password`) VALUES ('$fullname', '$position', '$email', '$passHash')");
        } else if ($age > 17) {
            $position = "Взрослый";
            $mysql->query("INSERT INTO `users` (`fullname`, `position`, `email`, `password`) VALUES ('$fullname', '$position', '$email', '$passHash')");
        }
    }
    echo json_encode($response);
}
