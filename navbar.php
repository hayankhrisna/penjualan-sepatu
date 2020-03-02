<?php
@session_start(); //memulai session
if(!isset($_SESSION['username']))
{
	header("location:./index.php");
}
include "koneksi.php";// memanggil file koneksi.php untuk menghubungkan ke database
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Login</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	
</head>
<!-- membuat tampilan navbar/menu -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #9ACD32;">
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        
      <li class="nav-item">
        <a class="nav-link" href="tambah.php"><b>TAMBAH DATA SEPATU</b></a>
      </li>
      <li class="nav-item">
	  	<a class="nav-link" href="print.php"><b>PRINT</b></a>
	  </li>
		
    </ul>
    <span class="navbar-text">
		<i><b>
    <!--untuk memanggil username supaya bisa tampil di navbar-->
		<?php
		echo "Hi, ";
    echo $_SESSION['username'] . " !";
		?>
		</i></b>

		<a href="logout.php">
          <span class="btn btn-warning">Log Out</span>
    </a>

		</span>
  </div>
</nav>

</body>
</html>