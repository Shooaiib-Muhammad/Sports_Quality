<html>

<?php 

if ($this->session->userdata('userStus')!=0) {
redirect('Welcome/Dashboard');
  //header("location:Admin/Dashboard.php");


}else{

$this->load->View('header');


?>


<head>
  <title></title>
</head>
<body>


<!-- <script  type="text/javascript">
    function changeImg(imgNumber) {
      var myImages = ["<?php echo base_url();?>assets/Css/fgbg.jpg", "<?php echo base_url();?>assets/Css/b2.jpg", "<?php echo base_url();?>assets/Css/b3.jpg", "<?php echo base_url();?>assets/Css/b4.jpg", "<?php echo base_url();?>assets/Css/b1.jpg", "<?php echo base_url();?>assets/Css/b5.jpg", "<?php echo base_url();?>assets/Css/b6.jpg","<?php echo base_url();?>assets/Css/b7.jpg","<?php echo base_url();?>assets/Css/b8.jpg"]; 
      var imgShown = document.body.style.backgroundImage;
      var newImgNumber =Math.floor(Math.random()*myImages.length);
      document.body.style.backgroundImage = 'url('+myImages[newImgNumber]+')';
    }
    window.onload=changeImg;
  </script> -->




<link rel="icon" href="<?php echo base_url();?>assets/Css/fwrd.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="<?php echo base_url();?>assets/Css/fwrd.ico" type="image/x-icon"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<style type="text/css">
@use postcss-cssnext;

/* config.css */

:root {
  --baseColor: #606468;
}

/* helpers/align.css */

.align {
  align-items: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

/* helpers/grid.css */

:root {
  --gridMaxWidth: 20rem;
  --gridWidth: 90%;
}

.grid {
  margin-left: auto;
  margin-right: auto;
  max-width: var(--gridMaxWidth);
  width: var(--gridWidth);
}

/* helpers/hidden.css */

.hidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

/* helpers/icon.css */

:root {
  --iconFill: var(--baseColor);
}

.icons {
  display: none;
}

.icon {
  display: inline-block;
  fill: var(--iconFill);
  font-size: 1rem;
  height: 1em;
  vertical-align: middle;
  width: 1em;
}

/* layout/base.css */

:root {
  --htmlFontSize: 100%;
--bodyBackgroundColor: #2c3338;
  --bodyColor: var(--baseColor);
  --bodyFontFamily: 'Open Sans';
  --bodyFontFamilyFallback: sans-serif;
  --bodyFontSize: 0.875rem;
  --bodyFontWeight: 400;
  --bodyLineHeight: 1.5;
}

* {
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
  font-size: var(--htmlFontSize);
  height: 100%;
}

body {
background-image:url("<?php echo base_url();?>assets/css/b1.jpg");
  background-color: var(--bodyBackgroundColor);
  color: var(--bodyColor);
  font-family: var(--bodyFontFamily), var(--bodyFontFamilyFallback);
  font-size: var(--bodyFontSize);
  font-weight: var(--bodyFontWeight);
  height: 100%;
  line-height: var(--bodyLineHeight);
  margin: 0;
  min-height: 100vh;
  background-size: cover;
background-repeat: no-repeat;
}

/* modules/anchor.css */

:root {
  --anchorColor: #eee;
}

a {
  color: var(--anchorColor);
  outline: 0;
  text-decoration: none;
}

a:focus,
a:hover {
  text-decoration: underline;
}

/* modules/form.css */

:root {
  --formFieldMargin: 0.875rem;
}

input {
  background-image: none;
  border: 0;
  color: inherit;
  font: inherit;
  margin: 0;
  outline: 0;
  padding: 0;
  transition: background-color 0.3s;
}

input[type='submit'] {
  cursor: pointer;
}

.form {
  margin: calc(var(--formFieldMargin) * -1);
}

.form input[type='password'],
.form input[type='text'],
.form input[type='submit'] {
  width: 100%;
}

.form__field {
  display: flex;
  margin: var(--formFieldMargin);
}

.form__input {
  flex: 1;
}

/* modules/login.css */

:root {
  --loginBorderRadus: 0.25rem;
  --loginColor: #eee;

  --loginInputBackgroundColor: #3b4148;
  --loginInputHoverBackgroundColor: #434a52;

  --loginLabelBackgroundColor: #363b41;

  --loginSubmitBackgroundColor: #ea4c88;
  --loginSubmitColor: #eee;
  --loginSubmitHoverBackgroundColor: #d44179;
}

.login {
  color: var(--loginColor);
}

.login label,
.login input[type='text'],
.login input[type='password'],
.login input[type='submit'] {
  border-radius: var(--loginBorderRadus);
  padding: 1rem;
}

.login label {
  background-color: var(--loginLabelBackgroundColor);
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.login input[type='password'],
.login input[type='text'] {
  background-color: var(--loginInputBackgroundColor);
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}

.login input[type='password']:focus,
.login input[type='password']:hover,
.login input[type='text']:focus,
.login input[type='text']:hover {
  background-color: var(--loginInputHoverBackgroundColor);
}

.login input[type='submit'] {
  background-color: var(--loginSubmitBackgroundColor);
  color: var(--loginSubmitColor);
  font-weight: 700;
  text-transform: uppercase;
}

.login input[type='submit']:focus,
.login input[type='submit']:hover {
  background-color: var(--loginSubmitHoverBackgroundColor);
}

/* modules/text.css */

:root {
  --paragraphMarginBottom: 1.5rem;
  --paragraphMarginTop: 1.5rem;
}

p {
  margin-bottom: var(--paragraphMarginBottom);
  margin-top: var(--paragraphMarginTop);
}

.text--center {
  text-align: center;
}
html, body{height:100%;}


</style>

 <script type="text/javascript" src="Js/jquery.js"></script>
 
</head> 
<body class="align" >

<div class="grid">
<div >
<script src="<?php echo base_url();?>assets/js/sweetalert.js"></script>
 <?php if ($this->session->flashdata('info')): ?>
 <script>
 swal({
                title: "Oops!",
                text: "<?php echo $this->session->flashdata('info'); ?>",
                button: true,
                icon: 'warning',
              });
            </script>
        <?php endif; ?>



<form action="<?php echo base_url('Login/ValidateUser'); ?>" method="POST" class="form login" style="width: 100%;background-color: rgba(1, 1, 1, 0.6);height: 70%; border-radius:5px;">
<center><img src="<?php echo base_url();?>assets/Css/forward.png" style="height: 50%; width: 80%;"/></center>
<!-- <div class="form__field">
        <img src="Css/Forward.png" style="height: 100px; width: 320px; margin-top: -10px; border-radius: 5px;">
      </div> -->
      
      <div class="form__field">
        <label for="login__username"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Username</span></label>
        <input id="login__username" type="text" name="username" class="form__input" placeholder="Enter your username" required style="background-color:#ffffff; color:#282828;">
      </div>

      <div class="form__field">
        <label for="login__password"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock" style="background-color:#ffffff;"></use></svg><span class="hidden">Password</span></label>
        <input id="login__password" type="password" name="password" class="form__input" placeholder="Enter your password" required style="background-color:#ffffff; color:#282828;">
      </div>
<div class="form__field">
<input type="submit" name="Login" style="background-color:#12c1ed;" value="LogIn">
      </div>

    </form>
  </div>
</div>
  <svg xmlns="http://www.w3.org/2000/svg" class="icons"><symbol id="arrow-right" viewBox="0 0 1792 1792"><path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z"/></symbol><symbol id="lock" viewBox="0 0 1792 1792"><path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z"/></symbol><symbol id="user" viewBox="0 0 1792 1792"><path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z"/></symbol></svg>

</body>

<script type="text/javascript">
    function myFunction() {
    var x = document.getElementById("login__password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
	<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60e941acd6e7610a49aa90c9/1fa7ih3lh';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>
<?php
$this->load->View('AdminFooter');
    ?>
<?php

}
?>