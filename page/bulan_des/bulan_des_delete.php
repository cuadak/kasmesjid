<?php
    	include('../../db/koneksi.php');
    	$id=$_GET['id'];
    	mysqli_query($koneksi,"delete from dese where id='$id'");
		header('location: bulan_des.php');
     
    ?>