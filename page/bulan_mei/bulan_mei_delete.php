<?php
    	include('../../db/koneksi.php');
    	$id=$_GET['id'];
    	mysqli_query($koneksi,"delete from mei where id='$id'");
		header('location: bulan_mei.php');
     
    ?>