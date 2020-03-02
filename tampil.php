<?php
@session_start(); //memulai session
if(!isset($_SESSION['username']))
{
	header("location:./index.php");
}
include "koneksi.php";// memanggil file koneksi.php untuk menghubungkan ke database
?>
<!-- script untuk tampilan admin -->
<html>
<head>
<title>Tampil</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body background="images/hitam.jpg">
<!-- untuk memanggil navbar.php -->
<?php
include "navbar.php";
?>

<br>
<!-- untuk membuat bentuk container -->
		<div class="container" >
        	<div class="card col-sm-11" style="background-color: #007bff;">
				<div class="card-body">
				
				<h3><p align="center"><b>DAFTAR DATA SEPATU</b></p></h3><br>
				
				<!-- Membuat tabel -->
				<table class="table table-striped" style="background-color: #f5f5dc;">
					<thead>
					<tr>
					
					<td align="left"><b>ID</b></td>
					<td align="left"><b>NAMA SEPATU</b></td>
					<td align="left"><b>TIPE</b></td>
					<td align="left"><b>STOK</b></td>
					</tr>
					</thead>
<tbody>
	<?php 
	$data = mysqli_query($mysqli,"SELECT * FROM jual"); // memberikan perintah query sql untuk menampilkan semua data di tabel jual
	//perintah untuk menampilkan semua data yang ada di tabel jual menggunakan perulangan
	while ($show = mysqli_fetch_array($data)) {
	?>
	<tr>
	<td><?php echo $show['id'];?></td>
	<td><?php echo $show['nama_sepatu'];?></td>
	<td><?php echo $show['tipe'];?></td>
	<td><?php echo $show['stok'];?></td>

	<td>
		<center>
		<div class="btn-group" role="group" aria-label="Basic example">
			<a class="btn btn-warning" href="update.php?id=<?php echo $show['id'];?>"><p align="right">Edit</p> <!-- untuk ke tampilan edit -->
			<a class="btn btn-success" href="deletesql.php?id=<?php echo $show['id'];?>">Delete</a></a> <!-- untuk menghapus data -->
		</div>
		</center>
	</td>
	</tr>
	<?php } ?>
</tbody>
</table>
</body>
</html>
