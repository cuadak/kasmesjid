   <!-- Kosongkan Tabel -->
  <?php
    include '../../db/koneksi.php';
    mysqli_query($koneksi,"truncate table jan");
    echo"
    <script>
    window.location=(href='../bulan_jan/bulan_jan.php')
    </script>"
    ?>
