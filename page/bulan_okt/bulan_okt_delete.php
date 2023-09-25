<?php
    	include('../../db/koneksi.php');
    	$id=$_GET['id'];
    	mysqli_query($koneksi,"delete from okt where id='$id'");
		header('location: bulan_okt.php');
     
    ?>