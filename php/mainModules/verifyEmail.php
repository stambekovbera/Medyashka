<?php
require "../../connectPHP/connect.php";

$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

if (isset($mysql)) {
    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        $key = rand(111111, 999999);

        $mysql->query("UPDATE `users` SET `keyCode` = '$key' WHERE `users`.`email` = '$email'");

        $message = "Был выполнен запрос на восстановление пароля. \n\n Код для восстановление пароля: " . $key . "\n\n Никому не сообщайте этот код!";
        $from = 'medyahska_ugmk@bk.ru';
        $headers = "From: $from" . "\r\n" .
            "Reply-To: $from" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

        if (mail($email, 'Восстановление пароля', $message, $headers)) {
            $response = [
                'message' => "",
                'status' => true,
            ];
        } else {
            $response = [
                'message' => "Что-то пошло не так, попробуйте еще раз!",
                'status' => false,
            ];
        }
    } else {
        $response = [
            'message' => "Этот E-Mail не зарегистрирован!",
            'status' => false,
        ];
    }

    echo json_encode($response);
}