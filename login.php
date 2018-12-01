<?php
		ob_start();
		session_start();

        $koneksi = new mysqli("localhost","root","","db_websdm");
        if (isset ($_SESSION['admin']) || isset ($_SESSION['user'])) {

            header("location:index.php");
        }else{        
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Database SDM</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/login/images/FullSizeRender.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
					<div class="row text-center ">
           				<div class="col-md-12">
							<img src="assets/login/images/logo.png" height="70" width="120">
						</div>
					</div>

					<span class="login100-form-title p-b-34 p-t-50" style="font-size: 22px">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="Username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="Password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type = "submit" name="Login" value="Login">
							Login
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/js/main.js"></script>

</body>
</html>


<?php

	if (isset($_POST['Login'])) {

		$Username = $_POST['Username'];
		$Password = $_POST['Password'];

		$sql = $koneksi->query("select * from tb_admin where Username = '$Username' and Password = '$Password'");

		$data = $sql->fetch_assoc();

		$ketemu = $sql->num_rows;

		if($ketemu >=1) {

			session_start();

				if($data['Level']=="admin") {

					$_SESSION['admin'] = $data["ID"];

					header("location:index.php");

				}elseif($data['Level']=="user") {

					$_SESSION['user']== $data["ID"];

					header("location:index.php");

				}
		}else{

					?>
						<script type="text/javascript">
							alert ("Username dan Password tidak cocok. Silahkan coba lagi!")
						</script>
					
					<?php
		}
		
	}
}

?>