   <!-- Kosongkan Tabel -->
  <?php
    include '../../db/koneksi.php';
    mysqli_query($koneksi,"truncate table nov");
    echo"
    <script>
    window.location=(href='../bulan_nov/bulan_nov.php')
    </script>"
    ?>
