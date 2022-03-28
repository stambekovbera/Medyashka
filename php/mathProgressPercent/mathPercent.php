<?php
require "../../connectPHP/connect.php";
$dbContentsFirst = $mysql->query("SELECT 'id' FROM `firstbook`");
$contents = array();
foreach ($dbContentsFirst as $content) {
    $contents[] = $content;
}
$dbContentsSecond = $mysql->query("SELECT 'id' FROM `secondbook`");
foreach ($dbContentsSecond as $content) {
    $contents[] = $content;
}
$dbContentsThird = $mysql->query("SELECT 'id' FROM `thirdbook`");
foreach ($dbContentsThird as $content) {
    $contents[] = $content;
}
$dbContentsFourth = $mysql->query("SELECT 'id' FROM `fourthbook`");
foreach ($dbContentsFourth as $content) {
    $contents[] = $content;
}

$totalPages = count($contents);
$pagesRead = (int)$_COOKIE['firstBookLastPage'] + (int)$_COOKIE['secondBookLastPage'] + (int)$_COOKIE['thirdBookLastPage'] + (int)$_COOKIE['fourthBookLastPage'];

$onePercent = $totalPages / 100;

$percentProgress = $pagesRead / $onePercent;

if (isset($_COOKIE['userID'])) {
    $userID = $_COOKIE['userID'];
    $mysql->query("UPDATE `users` SET `percentProgress` = '$percentProgress' WHERE `users`.`id` = '$userID'");
}

echo $percentProgress;