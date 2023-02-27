<?php
include 'connect.php';
$id = $_GET['id'];

$sql = "DELETE FROM booking WHERE Nama = '$id'";
$query = mysqli_query($connect, $sql);

if ($query)
    header("location: tampil.php");
else
    echo ("Hapus Data Gagal");
