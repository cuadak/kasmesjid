<?php
    	include('../../db/koneksi.php');
    	$id=$_GET['id'];
    	mysqli_query($koneksi,"delete from nov where id='$id'");
		header('location: bulan_nov.php');
     
    ?>