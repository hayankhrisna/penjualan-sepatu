<?php
session_start(); //memulai session
if(!isset($_SESSION['username']))
{
	header("location:./index.php");
}
include "koneksi.php";// memanggil file koneksi.php untuk menghubungkan ke database
?>
<html>
<head>
<title>Tampil</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body background="images/nike.jpg">

<?php
include "navbar.php";
?>

<br><br>
<div class="container">
<div class="jumbotron" style="background-color: #e83e8c;">
<h3 class="display-4">Berhasil Menyimpan Data ! </h3>
<hr class="my-4">

<a class="btn btn-success" href="tampil.php" role="button">BACK</a>
</div>
</div>
</body>
</html>