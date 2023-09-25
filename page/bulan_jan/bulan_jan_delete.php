<?php
    	include('../../db/koneksi.php');
    	$id=$_GET['id'];
    	mysqli_query($koneksi,"delete from jan where id='$id'");
		header('location: bulan_jan.php');
     
    ?>