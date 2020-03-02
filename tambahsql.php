
<?php
include "koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database
 
if(isset($_POST['simpan'])){
$id     = $_POST['id']; // memanggil nama variabel id untuk dibuat menjadi variabel baru $id
$nama_sepatu= $_POST['nama_sepatu'];
$tipe= $_POST['tipe'];
$stok= $_POST['stok'];

//menambahkan query sql tambah data untuk memasukkan data ke database
$data = mysqli_query($mysqli,"INSERT INTO jual SET id='$id', nama_sepatu='$nama_sepatu', tipe='$tipe', stok='$stok'") or die ("data salah : ".mysqli_error($mysqli));
 
//  untuk mengetahui apakah data berhasil disimpan atau belum
if ($data) {
    include "berhasilsimpandata.php"; // untuk beralih ke halaman berhasilsimpandata.php
} else {
echo "Gagal Input Data!!!";
echo "<br><a href='tampil.php'>Kembali</a>"; // berfungsi untuk ngelink ke halaman tampil.php
}
}
?>
