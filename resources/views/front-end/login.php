<?php
require 'constants/config.php';
require 'constants/check-login.php';
?>
<?php
include('includes/header.php');
?>


<div class="page-header" style="background: url(assets/img/banner.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Access Account</h2>
<ol class="breadcrumb">
<li><a href="./">Home /</a></li>
<li style="color:white;" class="current">Login</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<section class="register section-padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5 col-md-12 col-xs-12">
<div class="register-form login-area">
<h3>
Login
</h3>
<form  class="login-form" action="app/login.php" method="POST" autocomplete="off">
	<?php require 'constants/check_reply.php'; ?>


<div class="form-group">
<div class="input-icon">
<i class="lni-envelope"></i>
<input type="text" id="UserEmail" class="form-control" name="user_email" required placeholder="Email Address">

</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="lni-lock"></i>
<input type="password" name="password" required class="form-control" placeholder="Password">
</div>
</div>

<div class="form-group mb-3">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" required name="check" id="checkedall">
<label class="custom-control-label" for="checkedall">Im not a robot</label>
</div>
<a class="forgetpassword" href="forgot-password">Forgot Password?</a>
</div>


<div class="text-center">
<input id="btnSubmit" type="submit" value="Login" class="btn btn-common log-btn">
</div>
</form>
</div>
</div>
</div>
</div>
</section>



<?php
include('includes/footer.php');
?>