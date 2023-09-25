<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - Kas Mesjid</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/login_util.css">
	<link rel="stylesheet" type="text/css" href="css/login_main.css">
<!--===============================================================================================-->
</head>
<body>
	 
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/mesjid.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" action="" method="POST">
					<div class="login100-form-avatar">
						<img src="img/avatar.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Admin Kas Mesjid
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="inpuser" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="inppass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<span class="login100-form-btn">
						<input type="submit" class="login100-form-btn" name="login" value="Login">
						</span>
					</div>
					</form>
						
					<div class="text-center w-full p-t-25 p-b-230">
						<a href="../db/lupapass.php" class="txt1">
							Lupa Password?
						</a>
					</div>

			<!-- validasi akun -->
			<?php
            // deklarasi koneksi ke Database
            session_start();
            include_once ('../db/koneksi.php');

            if (isset($_POST['login'])) {
              $namauser = $_POST['inpuser'];
              $passuser = $_POST['inppass'];

              $sql   = "SELECT * FROM login WHERE username = '$namauser' AND password = '$passuser'";
              $query = $koneksi->query($sql);
              $data  = $query->fetch_array(MYSQLI_ASSOC);

              $_SESSION['inpuser']  = $namauser;
              $_SESSION['password'] = $passuser;

              if ($data['username'] == $namauser && $data['password'] == $passuser) {

                header("location: dasbor.php");

              } else {

                echo 
                "<script>
                window.alert('Username atau password yang anda masukkan salah!');
                window.location=(href='../page/login.php')
                </script>"
                ;

              }

            }

			?>
			

			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/login_main.js"></script>

</body>
</html>