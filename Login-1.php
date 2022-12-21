<?php
require_once './config.php';
require_once './functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
$pageName = "Login";
require_once './layout/head.php';

if (!isset($_SESSION)) {
    session_start();
}


?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="./Login-System/style.css">

</head>



<body>
<?php
require "./layout/header.php";
?>

<html lang="en">
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


  </head>

<div id="form">
  <div class="container">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
      <div id="userform">
        <ul class="nav nav-tabs nav-justified" role="tablist">
        <!-- <li class="active"><a href="#signup"  role="tab" data-toggle="tab">Sign up</a></li>
          <li><a href="#login"  role="tab" data-toggle="tab">Log in</a></li> -->

          
          <li class="active"><a href="#signup"  role="tab" data-toggle="tab">Sign up</a></li>
          <li><a href="#login"  role="tab" data-toggle="tab">Log in</a></li>
        
        </ul>
        <div class="tab-content">
        
          <div class="tab-pane fade in" id="login">
          <h1 class="text-uppercase text-center font-weight-bold"> Log in</h1>

          
            <form id="loginForm">
              <div class="form-group">
                <label for="email-login"> Your Email<span class="req">*</span> </label>
                <input type="email" class="form-control" name="email" id="email-login" required data-validation-required-message="Please enter your email address." autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label for="password-login"> Password<span class="req">*</span> </label>
                <input type="password" class="form-control" name="password" id="password-login" required data-validation-required-message="Please enter your password" autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="mrgn-30-top">
                <button type="submit" class="btn btn-larger btn-block">
                Log in
                </button>
              </div>
            </form>




            <!-- <form id="login">
              <div class="form-group">
                <label> Your Email<span class="req">*</span> </label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label> Password<span class="req">*</span> </label>
                <input type="password" class="form-control" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="mrgn-30-top">
                <button type="submit" class="btn btn-larger btn-block">
                Log in
                </button>
              </div>
            </form> -->







          </div>
		  <div class="tab-pane fade active in" id="signup">
            <h1 class="text-uppercase text-center "> Sign Up</h1>



            <form id="registrationForm">
              <div class="row">
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group" >
                    <label for="fname-registration">First Name<span class="req">*</span> </label>
                    <input type="text" class="form-control" name="fname" id="fname-registration"  required data-validation-required-message="Please enter your name." autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label  for="lname-registration"> Last Name<span class="req">*</span> </label>
                    <input type="text" class="form-control" name="lname" id="lname-registration"  required data-validation-required-message="Please enter your name." autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label  for="email-registration"> Your Email<span class="req">*</span> </label>
                <input type="email" class="form-control" name="email" id="email-registration" required data-validation-required-message="Please enter your email address." autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
			  <div class="form-group">
                <label  for="password-registration"> Password<span class="req">*</span> </label>
                <input type="password" class="form-control" name="password" id="password-registration" required data-validation-required-message="Please enter your password" autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
			  <div class="form-group">
                <label  for="password-confirm-registration">Confirm Password<span class="req">*</span> </label>
                <input type="password" class="form-control" name="password-confirm" id="password-confirm-registration" required data-validation-required-message="Please enter your password" autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
         
              <div class="mrgn-30-top">
                <button type="submit" class="btn btn-larger btn-block">
                Sign up
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container --> 
</div>


<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
<!-- partial -->
  <script  src="./Login-System/script.js"></script>
  <script src="./register/javascript/app.register.js"></script>
    <script src="./register/javascript/app.login.js"></script>

  <?php

require_once './layout/scripts.php';
// require_once './footer.php';

?>


  
</body>
</html>