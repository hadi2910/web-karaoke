<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "karaoke";

$connect = new mysqli($hostname, $username, $password, $db);

if ($connect->connect_error) {
    die("Error : " . $connect->connect_error);
}
