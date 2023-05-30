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
<h2 class="product-title">Forgot Password</h2>
<ol class="breadcrumb">
<li><a href="./">Home /</a></li>
<li style="color:white;" class="current">Forgot Password</li>
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
Forgot Password
</h3>
<form  class="login-form" action="app/find-acc.php" method="POST" autocomplete="off">
	<?php require 'constants/check_reply.php'; ?>

<p>Please enter your email address or username associated to your account, a link to reset password will be sent to your email</p><br>
<div class="form-group">
<div class="input-icon">
<i class="lni-user"></i>
<input type="text" class="form-control" name="user" required placeholder="Email Address or UserName">

</div>
</div>


<div class="form-group mb-3">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" required name="check" id="checkedall">
<label class="custom-control-label" for="checkedall">Im not a robot</label>
</div>
<a class="forgetpassword" href="login">Back to login</a>
</div>


<div class="text-center">
<input id="btnSubmit" type="submit" value="Find Account" class="btn btn-common log-btn">
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