<?php
if ($this->session->has_userdata('user_id')) {
	redirect('Main/dashboard');
} else {
?>

	<!DOCTYPE html>
	<html lang="en">
	<script type="text/javascript">
		function zoom() {
			document.body.style.zoom = "100%"
		}
	</script>



	<head>
		<title>Forward Sports</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<style>
			* {
				margin: 0;
				padding: 0;
				border: none;
				outline: none;
				box-sizing: border-box;
			}

			img {
				max-width: 100%;
				display: block;
			}

			#app {
				display: flex;
				height: 100vh;
				/* background: #1c1c1c;
	 */
				background: url(<?php echo base_url(''); ?>Assets/img/bg.jpg) no-repeat center center / cover;
				align-items: center;
				justify-content: center;
				font-family: "Roboto", sans-serif;
			}

			section {
				width: 400px;
				height: 500px;
				padding: 50px 70px;
				background: #000;
				border-radius: 9px 0 0 9px;
				box-shadow: 0 2px 4px -2 rgba(0, 0, 0, 0.6);
			}

			section form {
				display: grid;
				grid-template-rows: 50px 300px 50px;
			}

			section form fieldset {
				margin-top: 30px;
			}

			section form h1 {
				color: #f9fbfc;
				font-size: 32px;
				text-align: center;
			}

			section form .name,
			section form .password {
				display: flex;
			}

			section form .name input:last-of-type,
			section form .password input:last-of-type {
				margin-left: 10px;
			}

			section form .email p {
				color: #a9a9b7;
				font-size: 12px;
				margin-top: 10px;
				margin-bottom: 10px;
			}

			section form input {
				width: 100%;
				padding: 8px;
				display: block;
				color: #a9a9b7;
				margin-top: 15px;
				background: none;
				border-radius: 6px;
				border: 1px solid #393b63;
			}

			section form input:focus {
				color: #f9fbfc;
				border: 1px solid #7159c1;
			}

			section form input::placeholder {
				color: #a9a9b7;
			}

			section form button {
				width: 100%;
				height: 30px;
				color: #f9fbfc;
				cursor: pointer;
				border-radius: 8px;
				background: #7159c1;
				text-transform: uppercase;
				transition: background 500ms ease-in-out;
			}

			section form button:hover {
				background: #5e49a6;
			}

			@media screen and (max-width: 750px) {
				aside {
					display: none;
				}
			}

			aside {
				width: 410px;
				height: 500px;
				border-left: 1px solid #200101;
				transition: transform 2s ease-in-out;
				animation: moveRight 2s;
				border-radius: 0 9px 9px 0;
				animation-fill-mode: forwards;
				box-shadow: 0 2px 4px -2 rgba(0, 0, 0, 0.6);
				background: url(http://192.168.10.3:8002/media/twitter_profile_image.png) no-repeat center center / cover;
			}

			@keyframes moveRight {
				0% {
					transform: translateX(-400px);
				}

				100% {
					transform: translateX(0);
				}
			}
		</style>
	</head>

	<body style="background-color: #666666;" onload="zoom()">

		<div id="app">

			<section class="form-container">


				<h3 style="color: white;text-align:center"><b>Login</b></h3>
				<?php if ($this->session->flashdata('info')) { ?>
					<div class="alert alert-danger alert-dismissible show fade">
						<div class="alert-body">
							<button class="close" data-dismiss="alert">
								<span>&times;</span>
							</button>
							<span style="font-size: small;"> <?php echo $this->session->flashdata('info'); ?></span>
						</div>
					</div>
				<?php } ?>
				<form method="POST" name="form1" class="login100-form validate-form" action="<?php echo base_url(
																																																																																		'index.php/Main/process_login'
																																																																																	); ?>">
					<fieldset>
						<div class="Username">
							<label style="color: white;font-weight: bold;display: block;margin-top: 2%;font-size:small">Username</label>
							<input type="text" id="username" name="username" class="form-control" style="font-size: small;" placeholder="Enter Username" required>
							<span style="color: white;font-size:small">
								Your unique username to app
							</span>
						</div>
						<div class="Username">
							<label style="color: white;font-weight: bold;display: block;margin-top: 1%;font-size:small">Password</label>
							<input type="password" id="password" name="password" style="font-size: small;" class="form-control" placeholder="Enter Password" required>
						</div>


						<br>
						<button type="submit" style="background-color: black;color: white;font-weight: bold;border: 1px solid purple;" class="login-button">Login</button>
						<br><br>
					</fieldset>

				</form>
			</section>
			<aside></aside>
		</div>





		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>/assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>/assets/login/vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>/assets/login/vendor/bootstrap/js/popper.js"></script>
		<script src="<?php echo base_url(); ?>/assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>/assets/login/vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>/assets/login/vendor/daterangepicker/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>/assets/login/vendor/daterangepicker/daterangepicker.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>/assets/login/vendor/countdowntime/countdowntime.js"></script>
		<!--===============================================================================================-->
		<script src="js/main.js"></script>

	</body>

	</html>
<?php
}

?>