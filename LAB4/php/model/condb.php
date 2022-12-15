<?php
$host = "db"; // service from docker
$user = "root";
$pass = "1234";
$db = "db_std";

try {
    $link = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($link, "SET NAMES utf8");
} catch (Exception $e) {
    echo "An error is" . $e . " ::  " . mysqli_error($link);
}
