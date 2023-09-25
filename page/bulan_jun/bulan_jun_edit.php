<?php
    	include('../../db/koneksi.php');
     
    	$id=$_GET['id'];
     
		$tanggal=$_POST['tanggal'];
    	$uraian=$_POST['uraian'];
		$masuk=$_POST['masuk'];
		$keluar=$_POST['keluar'];
		$saldo=$_POST['saldo'];
     
    	mysqli_query($koneksi,"update jun set tanggal='$tanggal', uraian='$uraian', masuk='$masuk', keluar='$keluar', saldo='$saldo' where id='$id'");
    	header('location: bulan_jun.php');
     
    ?>