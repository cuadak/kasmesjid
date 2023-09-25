   <!-- Kosongkan Tabel -->
  <?php
    include '../../db/koneksi.php';
    mysqli_query($koneksi,"truncate table feb");
    echo"
    <script>
    window.location=(href='../bulan_feb/bulan_feb.php')
    </script>"
    ?>
