<?php
	include "koneksi.php";
	?>
<html>
<head>
	<title>Print Document</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<table border="1" width="90%" style="border-collapse:collapse;" align="center">
    	<tr class="tableheader">
        	<th rowspan="1">ID SEPATU</th>
            <th>NAMA SEPATU</th>
            <th>TIPE</th>
            <th>STOK</th>
            </tr>
        <?php
        $data = "SELECT * FROM jual"; 
        $result=mysqli_query($mysqli,$data);
        while($hasil = mysqli_fetch_array($result))
        { 
            ?>
        <tr id="rowHover">
        	<td width="10%" align="center"><?php echo $hasil['id']; ?></td>
            <td width="25%" id="column_padding"><?php echo $hasil['nama_sepatu']; ?></td>
            <td width="25%" id="column_padding"><?php echo $hasil['tipe']; ?></td>
            <td width="25%" id="column_padding"><?php echo $hasil['stok']; ?></td>
                    </tr>
        <?php } ?>
    </table>
    <script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
    
</body>
</html>
