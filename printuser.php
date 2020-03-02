<?php
include "koneksi.php";
?>

<html>
<head>
<title> Print Document </title>
<link href = "style.css" type = "text/css" rel = "stylesheet"/>
</head>
<body>
    <center><h1><br>SHOES CORNER<h1></center>
    <table border = "1" width = "90%" style = "border-collapse:collapse;" align = "center">
    <tr class = "tableheader">
    <th rowspan = "1" width = "70" height = "50"> Id Barang</th>
    <th> Nama Barang</th>
    <th> Stok</th>
    <th> Harga</th>
    <th> Gambar </th>
    </tr>
    
<?php
$data = "select * from jual";
$result = mysqli_query($mysqli, $data);
while($hasil = mysqli_fetch_array($result)){
    ?>
    <tr id = "rowHover">
    <td width = "10%" align = "center"><?php echo $hasil['id'];?></td>
    <td width = "25%" id = "column_padding"><center><?php echo $hasil['barang'];?></td>
    <td width = "10%" align = "center"><?php echo $hasil['stok'];?></td>
    <td width = "10%" id = "column_padding"><center><?php echo $hasil['harga'];?></td>  
    <td><center><img src = "<?php echo $hasil['gambar'];?>" width = "150" height = "150"></td>
    </tr>
    <?php
    }
    ?>

</table>
<script>
    window.load = print_d();
    function print_d(){
        window.print();
    }
    </script>
    <a class="btn btn-success" href="homeuser.php" role="button">BACK</a>
</body>
</html>