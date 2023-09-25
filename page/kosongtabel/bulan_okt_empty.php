   <!-- Kosongkan Tabel -->
  <?php
    include '../../db/koneksi.php';
    mysqli_query($koneksi,"truncate table okt");
    echo"
    <script>
    window.location=(href='../bulan_okt/bulan_okt.php')
    </script>"
    ?>
