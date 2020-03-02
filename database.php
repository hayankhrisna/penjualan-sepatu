<?php
//Menggunakan data type resource untuk melakukan koneksi ke database mysql xampp
$databasehost = "localhost";
$databaseuser = "root";
$databasepass = "";
$check= mysqli_connect($databasehost, $databaseuser, $databasepass);


if(!$check){
    die("Koneksi gagal, ada masalah pada: ".mysqli_connect_errno()."-".mysqli_connect_error());
}
//CREATE database baru
$mysqlquery= "CREATE DATABASE IF NOT EXISTS tokosepatuku";
$hasilquery= mysqli_query($check, $mysqlquery);

if(!$hasilquery){
    die("mysqlquery Error: ".mysqli_errno($check)."-".mysqli_error($check));
}
else{
    echo "Database <b> 'tokosepatuku' </b> berhasil dibuat, silahkan cek pada phpmyadmin...<br>";
}

//Select database tokosepatuku untuk melakukan ddl
$hasilquery= mysqli_select_db($check, "tokosepatuku");

if(!$hasilquery){
    die("mysqlquery Error: ".mysqli_errno($check)."-".mysqli_error($check));
}
else{
    echo "Database <b> 'tokosepatuku' </b> berhasil dipilih...<br>";
}

//Buat sebuah tabel user_admin sebagai user
$mysqlquery= "DROP TABLE IF EXISTS user_admin";
$hasil_mysqlquery= mysqli_query($check, $mysqlquery);

if(!$hasil_mysqlquery){
    die("mysqlquery Error: ".mysqli_errno($check)."-".mysqli_error($check));
}
else{
    echo "Tabel <b> 'user_admin'</b> berhasil dihapus, silahkan cek pada phpmyadmin...<br>";
}
//CREATE tabel user_admin
$mysqlquery= "CREATE TABLE user_admin (username VARCHAR(50), password CHAR(40), level VARCHAR(20))";
$hasil_mysqlquery= mysqli_query($check, $mysqlquery);

if(!$hasil_mysqlquery){
    die("mysqlquery Error: ".mysqli_errno($check)."-".mysqli_error($check));
}
else{
    echo "Tabel <b> 'user_admin'</b> berhasil dibuat, silahkan cek pada phpmyadmin...<br>";
}
//Inisiasi username dan password untuk user admin
$username = "hayan","rama";
$password = sha1("hayanhayan","ramarama");
$level= "admin","user";


//INSERT data ke tabel user_admin
$mysqlquery = "INSERT INTO user_admin VALUES ('$username','$password','$level')";
$hasil_mysqlquery= mysqli_query($check, $mysqlquery);

if(!$hasil_mysqlquery){
    die("mysqlquery Error: ".mysqli_errno($check)."-".mysqli_error($check));
}
else{
    echo "Tabel <b> 'user_admin'</b> berhasil diisi, silahkan cek, silahkan cek pada phpmyadmin...<br>";
}


//Tutup koneksi ke mysql
mysqli_close($check);
?>