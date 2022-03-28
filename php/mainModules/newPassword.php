<?php
require "../../connectPHP/connect.php";

$newPass = filter_var(trim($_POST['newPass']), FILTER_SANITIZE_STRING);
$userEmail = $_COOKIE['recoveryPassEmail'];
$passHash = password_hash($newPass, PASSWORD_BCRYPT);
if (isset($mysql)) {
    $mysql->query("UPDATE `users` SET `password` = '$passHash' WHERE `users`.`email` = '$userEmail'");
    $response = [
        'message' => "Пароль успешно изменен. Войдите!",
        'status' => true,
    ];
    echo json_encode($response);
}