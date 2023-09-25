   <!-- Kosongkan Tabel -->
  <?php
    include '../../db/koneksi.php';
    mysqli_query($koneksi,"truncate table jul");
    echo"
    <script>
    window.location=(href='../bulan_jul/bulan_jul.php')
    </script>"
    ?>
