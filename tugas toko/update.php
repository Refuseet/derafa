<?php 

include 'koneksi.php';
$id = $_POST['idBarang'];
$kode = $_POST['kodeBarang'];
$nama = $_POST['namaBarang'];
$satuan = $_POST['satuanBarang'];
$stock = $_POST['stockBarang'];
$harga= $_POST['hargaBarang'];

mysqli_query($koneksi,"UPDATE tb_toko SET kodeBarang='$kode',namaBarang='$nama',satuanBarang='$satuan',stockBarang='$stock',hargaBarang='$harga' WHERE idBarang='$id'");



header("location:index.php?pesan=update");
?>