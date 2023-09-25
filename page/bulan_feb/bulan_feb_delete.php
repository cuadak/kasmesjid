<?php
    	include('../../db/koneksi.php');
    	$id=$_GET['id'];
    	mysqli_query($koneksi,"delete from feb where id='$id'");
		header('location: bulan_feb.php');
     
    ?>