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

$sql = "UPDATE booking SET email='$email', mobile_number='$mobile_number', event_date='$event_date', starting_time='$starting_time', finish_time='$finish_time', type_of_event='$type_of_event', adiitional_information='$adiitional_information' WHERE Nama='$Nama'";
$query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query)
    header("location: tampil.php");
else
    echo ("Gagal Edit Data");
