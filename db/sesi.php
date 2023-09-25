<?php

// deklarasi koneksi ke Database
session_start();
include_once ('koneksi.php');
if($_SESSION['inpuser'] == ""){
  echo "<script>
  window.alert('Silahkan Login terlebih dahulu');
  window.location=(href='../page/login.php')
  </script>";
}

?>