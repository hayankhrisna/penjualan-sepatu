<?php
session_start(); //memulai session
include "koneksi.php";// memanggil file koneksi.php untuk menghubungkan ke database
 //memberikan perintah query sql menampilkan data berdasarkan id yang dipilih

$data = mysqli_query($mysqli, "SELECT * FROM klasemen WHERE id='$_GET[id]'");
$datashow = mysqli_fetch_array($data);
 // menampilkan data yang sudah di pilih untuk di edit
?>

<html>
<title>UPDATE DATA</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<!-- untuk membuat tampilan update-->
<br>
<center>
    <div class="container">
        <div class="card col-sm-8" style="background-color: #17a2b8;">
			  <div class="card-body">
                <h2 class="text-center title-login">EDIT DATA</h2>
                <div class="container">
                    <div class="card col-sm-8" style="background-color: #f5f5dc;">
			            <div class="card-body">
                        <form action="updatesql.php" class="inner-login" method="post">

                            <div class="form-group">
				                <label for="input-id" class="cal-sm-2">ID</label>
                                <input type "text" name="id" class="form-control" value="<?php echo $_GET['id'];?>">
                            </div>

                            <div class="form-group">
				                <label for="input-id" class="cal-sm-2">NAME</label>
                                <input type "text" name="name" class="form-control" value="<?php echo $datashow['name']; ?>">
                            </div>

                            <div class="form-group">
				                <label for="input-id" class="cal-sm-2">p</label>
                                <input type "text" name="p" class="form-control" value="<?php echo $datashow['p']; ?>">
                            </div>

                            <div class="form-group">
				                <label for="input-id" class="cal-sm-2">w</label>
                                <input type "text" name="w" class="form-control" value="<?php echo $datashow['w']; ?>">
                            </div>

                            <div class="form-group">
				                <label for="input-id" class="cal-sm-2">d</label>
                                <input type "text" name="d" class="form-control" value="<?php echo $datashow['d']; ?>">
                            </div>

                            <div class="form-group">
				                <label for="input-id" class="cal-sm-2">l</label>
                                <input type "text" name="l" class="form-control" value="<?php echo $datashow['l']; ?>">
                            </div>

                            <div class="form-group">
				                <label for="input-id" class="cal-sm-2">f</label>
                                <input type "text" name="f" class="form-control" value="<?php echo $datashow['f']; ?>">
                            </div>

                            <div class="form-group">
				                <label for="input-id" class="cal-sm-2">a</label>
                                <input type "text" name="a" class="form-control" value="<?php echo $datashow['a']; ?>">
                            </div>

                            <div class="form-group">
				                <label for="input-id" class="cal-sm-2">gd</label>
                                <input type "text" name="gd" class="form-control" value="<?php echo $datashow['gd']; ?>">
                            </div>

                            <div class="form-group">
				                <label for="input-id" class="cal-sm-2">pts</label>
                                <input type "text" name="pts" class="form-control" value="<?php echo $datashow['pts']; ?>">
                            </div>

                            <input class="btn btn-success" type="submit" name="update" id="simpan" value="Simpan" />
                            <a class="btn btn-success" href="tampil.php" role="button">BACK</a>
                        </form>
                        </center>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
