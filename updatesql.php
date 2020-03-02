<?php
session_start();
include "koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database
 
if(isset($_POST['update'])){
$id       = $_POST['id'];
$name 	  = $_POST['name'];
$p        = $_POST['p'];
$w        = $_POST['w'];
$d        = $_POST['d'];
$l        = $_POST['l'];
$f        = $_POST['f'];
$a        = $_POST['a'];
$gd       = $_POST['gd'];
$pts      = $_POST['pts'];

$data = mysqli_query($mysqli, "UPDATE klasemen SET id='$id', name='$name', p='$p', w='$w', d='$d', l='$l', f='$f', a='$a', gd='$gd', pts='$pts'  WHERE id='$id'") or die ("data salah : ".mysqli_error($mysqli));
 
if ($data) {
    include "berhasilupdatedata.php"; //beralih ke link berhasilupdatedata.php
} else {
echo "Gagal Input Data!!! <br>";
echo "<a href='tampil.php'>Kembali</a>"; //kembali ke halaman tampil.php
}
}
?>
