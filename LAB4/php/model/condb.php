<?php
$host = "db"; // service from docker
$user = "root";
$pass = "1234";
$db = "tb_student";

try{
$link = mysqli_connect($host,$user,$pass,$db);
mysqli_query($link, "SET NAME utf8");
} catch(Exception $e){
    echo "An error is" . $e . " ::  ". mysqli_error($link);
}

?>