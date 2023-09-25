   <!-- Kosongkan Tabel -->
  <?php
    include '../../db/koneksi.php';
    mysqli_query($koneksi,"truncate table agus");
    echo"
    <script>
    window.location=(href='../bulan_agus/bulan_agus.php')
    </script>"
    ?>
