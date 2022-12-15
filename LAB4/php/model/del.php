<?php
$id = $_GET['id'];

require "condb.php";

try{
    $sql = "DELETE FROM tb_student WHERE std_id = '$id' ";
    $resuly = mysqli_query($link,$sql);
    echo "delete successful !!";
} catch (\Throwable $th) {
    echo $e . "Error no : " . mysqli_errno($link);
}
