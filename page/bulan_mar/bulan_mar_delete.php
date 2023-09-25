<?php
    	include('../../db/koneksi.php');
    	$id=$_GET['id'];
    	mysqli_query($koneksi,"delete from mar where id='$id'");
		header('location: bulan_mar.php');
     
    ?>