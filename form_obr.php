<?php
header('Content-Type: text/html; charset=utf-8');

$host = "localhost";
$db = "ytvrbfvm_030";
$user = "ytvrbfvm_030";
$password = "123456L";

$name = $_POST["name"];
$phone = $_POST["phone"];
$district = $_POST["district"];


$mysqli = mysqli_connect($host, $user, $password, $db);

if ($mysqli == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}else {
    // print("Соединение установлено успешно");
    // $result = $mysqli->query("SELECT * FROM `call_request` WHERE `phone`='$phone'");

    $result = $mysqli->query("INSERT INTO `call_request`(`name`, `phone`, `district`) VALUES ('$name', '$phone', '$district')");
    if($result == 0) {
        print("exist");
    } else {
        print("ok");
    }   
}