<?php
require "../../connectPHP/connect.php";

$code = filter_var(trim($_POST['code']), FILTER_SANITIZE_STRING);

if (isset($mysql)) {
    $result = $mysql->query("SELECT * FROM `users` WHERE `keyCode` = '$code'");
    $user = mysqli_fetch_assoc($result);
    if ($user) {
        $response = [
            'message' => "",
            'status' => true,
        ];
    } else {
        $response = [
            'message' => "Вы ввели неправильный код, попробуйте снова!",
            'status' => false,
        ];
    }

    echo json_encode($response);
}