<?php
    	include('../../db/koneksi.php');
    	$id=$_GET['id'];
    	mysqli_query($koneksi,"delete from sep where id='$id'");
		header('location: bulan_sep.php');
     
    ?>