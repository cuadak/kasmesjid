   <!-- Kosongkan Tabel -->
  <?php
    include '../../db/koneksi.php';
    mysqli_query($koneksi,"truncate table mei");
    echo"
    <script>
    window.location=(href='../bulan_mei/bulan_mei.php')
    </script>"
    ?>
