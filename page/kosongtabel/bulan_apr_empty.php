   <!-- Kosongkan Tabel -->
  <?php
    include '../../db/koneksi.php';
    mysqli_query($koneksi,"truncate table apr");
    echo"
    <script>
    window.location=(href='../bulan_apr/bulan_apr.php')
    </script>"
    ?>
