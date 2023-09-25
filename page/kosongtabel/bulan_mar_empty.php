   <!-- Kosongkan Tabel -->
  <?php
    include '../../db/koneksi.php';
    mysqli_query($koneksi,"truncate table mar");
    echo"
    <script>
    window.location=(href='../bulan_mar/bulan_mar.php')
    </script>"
    ?>
