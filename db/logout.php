<?php
// untuk melakukan proses keluar session
session_start();
session_unset();
session_destroy();
header("location: ../index.html");

?>
