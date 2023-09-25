<?php
    	include('../../db/koneksi.php');
    	$id=$_GET['id'];
    	mysqli_query($koneksi,"delete from apr where id='$id'");
		header('location: bulan_apr.php');
     
    ?>