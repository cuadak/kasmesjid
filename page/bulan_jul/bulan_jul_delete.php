<?php
    	include('../../db/koneksi.php');
    	$id=$_GET['id'];
    	mysqli_query($koneksi,"delete from jul where id='$id'");
		header('location: bulan_jul.php');
     
    ?>