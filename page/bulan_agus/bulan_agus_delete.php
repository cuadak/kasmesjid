<?php
    	include('../../db/koneksi.php');
    	$id=$_GET['id'];
    	mysqli_query($koneksi,"delete from agus where id='$id'");
		header('location: bulan_agus.php');
     
    ?>