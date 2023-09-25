<!-- script CSS -->
<style media="screen">

.judul {
  padding: 2mm;
  text-align: center;
  font-size-adjust: auto;
}

</style>

<!-- script  HTML dan PHP query -->
<page>
  <div class="judul">
    <h1>Kas Mesjid Bulan Oktober</h1>
  </div>

  <!-- tabel barang masuk -->
  <table border="1" align="center">
  <tr>
      <th>No.</th>
      <th>Tanggal</th>
      <th>Uraian</th>
      <th>Masuk</th>
      <th>Keluar</th>
      <th>Saldo</th>
    </tr>
    <tbody>
    <?php
    // untuk menampilkan data dari tabel
    $no = 1;
    include '../../db/koneksi.php';
    $data = mysqli_query($koneksi,"select * from okt");
    while($d = mysqli_fetch_array($data))
        {
        ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo (date("d-M-Y", strtotime($d['tanggal']))); ?></td>
        <td><?php echo $d['uraian']; ?></td>
        <td><?php echo "Rp. ". number_format($d['masuk'], 0, ",", "."); ?></td>
        <td><?php echo "Rp. ". number_format($d['keluar'], 0, ",", "."); ?></td>
        <td><?php echo "Rp. ". number_format($d['saldo'], 0, ",", "."); ?></td>
      </tr>
     <?php
    }
    ?>
    </tbody>
    <tr>
    <th></th>
    <th></th>
    <th>Total :</th>
    <th>
      <?php 
      $pdo = new PDO('mysql:host=localhost;dbname=kasmesjid', 'root', '');
      $res1 = $pdo->prepare('SELECT SUM(masuk) AS totMasuk FROM okt');
      $res1->execute();
      $row = $res1->fetch(PDO::FETCH_ASSOC);
      echo "Rp. ". number_format($row['totMasuk'], 0, ",", ".");;
      ?>
    </th>
    <th>
      <?php 
      $res1 = $pdo->prepare('SELECT SUM(keluar) AS totKeluar FROM okt');
      $res1->execute();
      $row = $res1->fetch(PDO::FETCH_ASSOC);
      echo "Rp. ". number_format($row['totKeluar'], 0, ",", ".");;
      ?>
    </th>
    <th>
      <?php 
      $res1 = $pdo->prepare('SELECT SUM(saldo) AS totSaldo FROM okt');
      $res1->execute();
      $row = $res1->fetch(PDO::FETCH_ASSOC);
      echo "Rp. ". number_format($row['totSaldo'], 0, ",", ".");;
      ?>
    </th>
    </tr>
    </table>
</page>

