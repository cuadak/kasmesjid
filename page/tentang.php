<?php include_once ('../db/sesi.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kas Mesjid - Tentang</title>
  <link rel="icon" type="image/png" href="img/icons/favicon.png"/>
  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top" onload="setInterval('reloadwaktu()');">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dasbor.php">
        <div class="sidebar-brand-icon">
          <i class="fas fa-mosque"></i>
        </div>
        <div class="sidebar-brand-text mx-3">KAS MESJID</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="dasbor.php">
          <i class="fas fa-chart-line"></i>
          <span>Dasbor</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Kas
      </div>

       <!-- Item Navigasi- Menu Kas Bulanan -->
       <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKas" aria-expanded="true" aria-controls="collapseKas">
          <i class="fas fa-calendar-plus"></i>
          <span>Kas Bulanan</span>
        </a>
        <div id="collapseKas" class="collapse" aria-labelledby="headingKas" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bulan:</h6>
            <a class="collapse-item" href="bulan_jan/bulan_jan.php">Januari</a>
            <a class="collapse-item" href="bulan_feb/bulan_feb.php">Februari</a>
            <a class="collapse-item" href="bulan_mar/bulan_mar.php">Maret</a>
            <a class="collapse-item" href="bulan_apr/bulan_apr.php">April</a>
            <a class="collapse-item" href="bulan_mei/bulan_mei.php">Mei</a>
            <a class="collapse-item" href="bulan_jun/bulan_jun.php">Juni</a>
            <a class="collapse-item" href="bulan_jul/bulan_jul.php">Juli</a>
            <a class="collapse-item" href="bulan_agus/bulan_agus.php">Agustus</a>
            <a class="collapse-item" href="bulan_sep/bulan_sep.php">September</a>
            <a class="collapse-item" href="bulan_okt/bulan_okt.php">Oktober</a>
            <a class="collapse-item" href="bulan_nov/bulan_nov.php">November</a>
            <a class="collapse-item" href="bulan_des/bulan_des.php">Desember</a>
          </div>
        </div>
      </li>

       <!-- Item Navigasi - Menu Operasi -->
       <li class="nav-item">
        <a class="nav-link" href="operasi.php">
          <i class="fas fa-wrench"></i>
          <span>Operasi</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Lainnya
      </div>

      <!-- Item Navigasi - Menu Tentang -->
      <li class="nav-item active">
        <a class="nav-link" href="tentang.php">
          <i class="fas fa-question-circle"></i>
          <span>Tentang</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="img/avatar.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="ganti_password.php">
                  <i class="fas fa-user-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ganti Password
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- untuk bagian waktu -->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <p id="getwaktu"></p>
            </div>
          </div>
          <!-- akhir row waktu -->

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Tentang</h1>

          <div class="row">

            <div class="col-lg-6">

              <!-- Biodata Pembuat Aplikasi -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Biodata Pembuat Aplikasi</h6>
                </div>
                <div class="card-body">
                  <h6>
                    ***********************************************************************************</br>
                    *************************//\\ Nama : Muhammad Fadli S. //\\*************************</br>
                    *************************//\\ NIM : 11755101961 //\\********************************</br>
                    *************************//\\ E-mail : fadlimuhammad23@gmail.com //\\*************</br>
                    *************************//\\ Teknik Elektro //\\***************************************</br>
                    *************************//\\ Konsentrasi Komputer //\\******************************</br>
                    *************************//\\ Pemrograman Web 2020 //\\***************************</br>
                    *************************//\\ UIN SUSKA RIAU //\\***********************************</br>
                    ***********************************************************************************
                  </h6>
                  </div>
              </div>

              <!-- Sosial Media -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Sosial Media</h6>
                </div>
                <div class="card-body">
                <span><a target="_blank" href="https://www.facebook.com/fadlieleQ" class="btn btn-facebook"><i class="fab fa-facebook"></i> Facebook</a></span>
                <span><a target="_blank" href="https://twitter.com/Leviosdota" class="btn btn-primary"><i class="fab fa-twitter"></i> Twitter</a></span>
                <span><a target="_blank" href="https://steamcommunity.com/id/levios/" class="btn btn-dark"><i class="fab fa-steam"></i> Steam</a></span>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
            <!-- Aplikasi Kas Mesjid & Penggunaan -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Aplikasi Kas Mesjid</h6>
                </div>
                <div class="card-body">
                <h5>Fitur Aplikasi:</br></h5>
                <h6>
                Menginput Data:</br>
                Cukup dengan menekan "Tambah" pada halaman kas tiap bulan dan masukkan tanggal, uraian, masuk, keluar dan saldo.</br>
                Untuk penginputan data saldo, jumlahnya dari uang masuk dikurangi uang keluar.</br></br>
                Menghapus Data:</br>
                Cukup dengan menekan "Hapus" pada halaman kas tiap bulan di kolom "Aksi".</br></br>
                Mengedit Data:</br>
                Cukup dengan menekan "Edit" pada halaman kas tiap bulan di kolom "Aksi".</br></br>
                Mengekspor Data Tabel menjadi PDF:</br>
                Cukup dengan menekan "Ekspor ke pdf" pada halaman kas tiap bulan. </br>
                Disediakan juga untuk mengekspor semua data tabel menjadi 1 file pdf pada halaman "Operasi".</br></br>
                Mengosongkan Tabel:</br>
                Cukup dengan menekan "Kosongkan Tabel" pada halaman kas tiap bulan.</br>
                Disediakan juga untuk mengosongkan semua data tabel pada halaman "Operasi".</br></br>
                Mengganti Password Admin:</br>
                Fitur ganti password berada di ujung kanan atas halaman pada menu dropdown Admin.</br>
                </h6>
                </div>
              </div>

            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Pemrograman Web 2020 Oleh Muhammad Fadli S.</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah Anda ingin Logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Klik Logout untuk keluar dari aplikasi kas mesjid</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="../db/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <script>
  // pengambilan waktu
      function reloadwaktu() {
        var waktu = new Date();
        var tanggal = waktu.getDate();
        var month = new Array();
            month[0] = "Januari";
            month[1] = "Februari";
            month[2] = "Maret";
            month[3] = "April";
            month[4] = "Mei";
            month[5] = "Juni";
            month[6] = "Juli";
            month[7] = "Agustus";
            month[8] = "September";
            month[9] = "Oktober";
            month[10] = "November";
            month[11] = "Desember";
        var bulan   = month[waktu.getMonth()];
        var tahun   = waktu.getFullYear();
        var jam     = waktu.getHours();
        var menit   = waktu.getMinutes();
        var detik  = waktu.getSeconds();
        document.getElementById('getwaktu').innerHTML =
        "Tanggal, Waktu : " + tanggal + " " + bulan + " " + tahun + ", "
        + jam + ":" + menit + ":" + detik;
      }
      </script>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
