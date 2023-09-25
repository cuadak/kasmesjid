   <!-- Kosongkan Tabel -->
  <?php
    include '../../db/koneksi.php';
    mysqli_query($koneksi,"truncate table jan");
    mysqli_query($koneksi,"truncate table feb");
    mysqli_query($koneksi,"truncate table mar");
    mysqli_query($koneksi,"truncate table apr");
    mysqli_query($koneksi,"truncate table mei");
    mysqli_query($koneksi,"truncate table jun");
    mysqli_query($koneksi,"truncate table jul");
    mysqli_query($koneksi,"truncate table agus");
    mysqli_query($koneksi,"truncate table sep");
    mysqli_query($koneksi,"truncate table okt");
    mysqli_query($koneksi,"truncate table nov");
    mysqli_query($koneksi,"truncate table dese");
    echo"
    <script>
    window.location=(href='../operasi.php')
    </script>"
    ?>
