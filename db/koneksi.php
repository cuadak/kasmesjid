<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "kasmesjid";
    $koneksi = mysqli_connect($host, $username, $password, $database);

    if(!$koneksi){
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
