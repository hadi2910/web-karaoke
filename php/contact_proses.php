<?php
include 'connect.php';


$Full_name = $_POST['Full_name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contact VALUES ('$Full_name', '$email', '$message')";

$query = mysqli_query($connect, $sql);

if ($query)
    header("location: contact_tampil.php");
else
    echo ("Gagal Input Data");