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
<body background="images/converse.jpg">
<!--untuk memanggil navbar-->
<?php
include "navbar.php";
?>
<br>
<center>
<div class="container">
<div class="card col-sm-8" style="background-color: #17a2b8;"><!--membuat kotak luar-->
<div class="card-body">
    <h2 class="text-center title-login">TAMBAH BARANG</h2>
        <div class="container">
        <div class="card col-sm-8" style="background-color: #ffc107;"><!--membuat kotak dalam-->
	    <div class="card-body">
            <form action="tambahsql.php" class="inner-login" method="post">
            <div class="form-group">
				<label for="input-id" class="cal-sm-2">ID SEPATU</label><!--untuk menambah id yang akan ditambah-->
                <input type "text" name="id" class="form-control" value="">
            </div>
            <div class="form-group">
				<label for="input-id" class="cal-sm-2">NAMA SEPATU</label>
                <input type "text" name="nama_sepatu" class="form-control" value=""> <!--untuk menginput nama baju yang akan ditambah-->
            </div>
            <div class="form-group">
				<label for="input-id" class="cal-sm-2">WARNA DAN TIPE </label>
                <input type "text" name="tipe" class="form-control" value=""> <!--untuk menginput nama baju yang akan ditambah-->
            </div>
            <div class="form-group">
				<label for="input-id" class="cal-sm-2">STOK </label>
                <input type "text" name="stok" class="form-control" value=""> <!--untuk menginput nama baju yang akan ditambah-->
            </div>
             
            
             <input class="btn btn-success" type="submit" name="simpan" id="simpan" value="simpan" /> <!--untuk menyimpan data-->
            <input class="btn btn-success" type="reset" name="reset" id="reset" value="Batal" /></th> <!--untuk me reset data yg sudah di ketik-->
            <a class="btn btn-success" href="tampil.php" role="button">BACK</a>
            </form>
        </center>
        </div>
        </div>
        </div>
        </div>
</div>
</div>
</div>
</div>