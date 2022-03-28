<?php
    $par1_ip = "127.0.0.1";
    $par2_name = "root";
    $par3_pass = "";
    $par4_db = "medyashka";

    $mysql = mysqli_connect($par1_ip, $par2_name, $par3_pass, $par4_db);

    if ($mysql == false) {
        echo "Ошибка подключения!";
    }
?>