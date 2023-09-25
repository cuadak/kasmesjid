   <!-- Kosongkan Tabel -->
  <?php
    include '../../db/koneksi.php';
    mysqli_query($koneksi,"truncate table sep");
    echo"
    <script>
    window.location=(href='../bulan_sep/bulan_sep.php')
    </script>"
    ?>
