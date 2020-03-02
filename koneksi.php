<?php
//koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "tokosepatuku"; //nama database

$mysqli = mysqli_connect ($server, $username, $password, $database);
if (mysqli_connect_errno()){
    echo 'Koneksi gagal, ada masalah pada: '.mysqli_connect_error();
    exit();
    mysqli_close($mysqli);
}
//akhir koneksi---------------
?>