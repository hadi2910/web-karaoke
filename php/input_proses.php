<?php
include 'connect.php';


$Nama = $_POST['Nama'];
$email = $_POST['email'];
$mobile_number = $_POST['mobile_number'];
$event_date = $_POST['event_date'];
$starting_time = $_POST['starting_time'];
$finish_time = $_POST['finish_time'];
$type_of_event = $_POST['type_of_event'];
$adiitional_information = $_POST['adiitional_information'];

$sql = "INSERT INTO booking VALUES ('$Nama', '$email', '$mobile_number', '$event_date', '$starting_time', '$finish_time', '$type_of_event', '$adiitional_information')";

$query = mysqli_query($connect, $sql);

if ($query)
    header("location: tampil.php");
else
    echo ("Gagal Input Data");
