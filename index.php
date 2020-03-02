<?php
if(isset($_GET["pesan"])){
    $pesan=$_GET["pesan"];
}
if(isset($_POST["submit"])){
    $username= htmlentities(strip_tags(trim($_POST["username"])));
    $password= htmlentities(strip_tags(trim($_POST["password"])));
    $pesan_error="";
    if(empty($username)){
        $pesan_error .= "Username belum terisi <br>";
    }
    if(empty($password)){
        $pesan_error .= "Password belum terisi <br>";
    }

    include("koneksi.php");
    $username= mysqli_real_escape_string($mysqli, $username);
    $password= mysqli_real_escape_string($mysqli, $username);
    $password_sha1= sha1($password);

    $query= "SELECT*FROM user_admin WHERE username='$username' AND password='$password_sha1'";
    $hasil= mysqli_query($mysqli, $query);

    if(mysqli_num_rows($hasil)==0){
        $pesan_error .= "Coba Lagi";
    }
    mysqli_free_result($hasil);
    mysqli_close($mysqli);
    if($pesan_error===""){
        session_start();
        $_SESSION["nama"]= $username;
        header("Location: tampil.php");
    }
}
else{
    $pesan_error="";
    $username="";
    $password="";
}

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
	<style> /* css untuk mengatur tampilan login supaya berada di tengah */
		#index{
   			margin-top: 100px;
			margin-left: 380px;
		}
	</style> 
</head>

<body background="images/sepatu.jpg"> <!-- untuk memberi background -->
<div id="index"> <!-- memanggil id css index -->
	<div class="container"> <!-- supaya tampilan tidak full satu layar/kepotong -->
    	<div class="card col-sm-6"  style="background-color: #dc3545;"> <!-- membuat tabel latar -->
			<div class="card-body"> <!-- membuat tabel latar -->
			
            <form action="ceklogin.php" class="inner-login" method="post"> <!-- supaya bisa di proses di ceklogin.php -->
        		
            	<img src= "images/sepatukulogo.jpg" style= "width: 400px; height: 300px">
                <div class="form-group"> <!-- agar tulisan username dan inputan bisa satu grup -->
					<label for="input-id" class="cal-sm-2">USERNAME</label>
               		<input type "text" name="username" class="form-control" 
                    value="<?php echo $username ?> ">
           		</div>
        		<div class="form-group"><!-- agar tulisan password dan inputan bisa satu grup -->
					<label for="input-id" class="cal-sm-2">PASSWORD</label>
                	<input type="password" name="password" class="form-control" 
                    value="<?php echo $password ?> ">
				</div>
					<input type="submit" name="submit" class="btn btn-success btn-lg btn-block" value="LOGIN" style="background-color: #17a2b8;" /><br> 
			</form>
			
            
			</div>
		</div>
	</div>
</div>

</center> 	
</body>
</html>