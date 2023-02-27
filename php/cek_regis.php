<?php
session_start();
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


$sql = "INSERT INTO admin (username, password, email) VALUES ('$username', '$password', '$email')";

$query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
    $_SESSION['username'] = $username;
    header("location: login.php?message=register");
}
