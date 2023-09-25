<?php
	include('../../db/koneksi.php');
	
	$tanggal=$_POST['tanggal'];
    $uraian=$_POST['uraian'];
	$masuk=$_POST['masuk'];
	$keluar=$_POST['keluar'];
	$saldo=$_POST['saldo'];
	
	mysqli_query($koneksi,"insert into nov (tanggal, uraian, masuk, keluar, saldo) values ('$tanggal', '$uraian', '$masuk', '$keluar', '$saldo')");
	header('location: bulan_nov.php');

?>