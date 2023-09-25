   <!-- Kosongkan Tabel -->
  <?php
    include '../../db/koneksi.php';
    mysqli_query($koneksi,"truncate table dese");
    echo"
    <script>
    window.location=(href='../bulan_des/bulan_des.php')
    </script>"
    ?>
