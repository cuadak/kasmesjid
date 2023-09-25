<?php
    	include('../../db/koneksi.php');
    	$id=$_GET['id'];
    	mysqli_query($koneksi,"delete from jun where id='$id'");
		header('location: bulan_jun.php');
     
    ?>