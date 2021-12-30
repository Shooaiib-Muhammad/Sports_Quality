<?php
if ($this->session->has_userdata('user_id')) {
    redirect('Main/dashboard');
} else {
     ?>


<!-- <!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            Login - - Forward Sports Pvt. Ltd.
        </title>
        <meta name="description" content="Login">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
   
        <meta name="apple-mobile-web-app-capable" content="yes" />
    
        <meta name="msapplication-tap-highlight" content="no">
 
        <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/vendors.bundle.css">
        <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/app.bundle.css">
       
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>/assets/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>/assets/img/favicon/favicon-32x32.png">
        <link rel="mask-icon" href="<?php echo base_url(); ?>/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
      
        <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/page-login.css">
    </head>
    <body>
        <div class="blankpage-form-field">

        <div class="container mt-5">
      
      <?php if ($this->session->flashdata('info')) { ?>
    <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                      <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                      </button>
                      <?php echo $this->session->flashdata('info'); ?>
                    </div>
                  </div>
                  <?php } ?>
            <div class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4">
                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                    <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                    <span class="page-logo-text mr-1">Forward Sports</span>
                    <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                </a>
            </div>
            <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">

     
            <form method="POST" name="form1" class="login100-form validate-form" action="<?php echo base_url(
                'index.php/Main/process_login'
            ); ?>">
                    <div class="form-group">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username" required>
                        <span class="help-block">
                            Your unique username to app
                        </span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
                        <span class="help-block">
                            Your password
                        </span>
                    </div>
    
                    <button type="submit" class="btn btn-default float-right">Secure login</button>
                </form>
            </div>
            <div class="blankpage-footer text-center">
           
            </div>
        </div>
        <div class="login-footer p-2">
            <div class="row">
      
            </div>
        </div>
        <video poster="<?php echo base_url(); ?>/assets/img/backgrounds/clouds.png" id="bgvid" playsinline autoplay muted loop>
            <source src="<?php echo base_url(); ?>/assets/media/video/cc.webm" type="video/webm">
            <source src="<?php echo base_url(); ?>/assets/media/video/cc.mp4" type="video/mp4">
        </video>
    
        <script src="<?php echo base_url(); ?>/assets/js/vendors.bundle.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/app.bundle.js"></script>
    
    </body>
</html> -->

<?php
if ($this->session->has_userdata('user_id')) {
    redirect('Main/dashboard');
} else {
     ?>

<!DOCTYPE html>
<html lang="en">

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
	/* background: #1c1c1c; http://192.168.10.3:8002/media/Lab3.jpg
	 */
  background: url(https://www.kiwa.com/48f7e8/globalassets/global/services/woman-laboratory.jpg) no-repeat center center / cover;
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
 section form .name, section form .password {
	 display: flex;
}
 section form .name input:last-of-type, section form .password input:last-of-type {
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
 @media screen and (max-width: 800px) {
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

<body style="background-color: #666666;">

<div id="app">

      <section class="form-container">
   

          <h3 style="color: white;text-align:center"><b>LMS Login</b></h3>
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

<?php
}

?>
