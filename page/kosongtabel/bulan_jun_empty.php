   <!-- Kosongkan Tabel -->
  <?php
    include '../../db/koneksi.php';
    mysqli_query($koneksi,"truncate table jun");
    echo"
    <script>
    window.location=(href='../bulan_jun/bulan_jun.php')
    </script>"
    ?>
