<?php
require 'constants/config.php';
require 'constants/check-login.php';
require 'constants/verify_token.php';


?>


<?php
include('includes/header.php');
?>


<div class="page-header" style="background: url(assets/img/banner.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Reset Password</h2>
<ol class="breadcrumb">
<li><a href="./">Home /</a></li>
<li style="color:white;" class="current">Reset Password</li>
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
Reset Password
</h3>
<form  name="frm1" class="login-form" action="app/new-password.php" method="POST" autocomplete="off">
	<?php require 'constants/check_reply.php'; ?>

<?php
if ($rec == "0") {

	print '     <div class="alert alert-warning">
              Token is invalid or already used
            <a class="close" href="#"></a>
        </div>';

}else{

	if ($token_expired == "0") {
		$_SESSION['setmail'] = $email;
		$_SESSION['role'] = $role;
		?>
		<div class="form-group">
<div class="input-icon">
<i class="lni-code"></i>
<input type="text" class="form-control" value="<?php echo $token; ?>" disabled readonly required placeholder="">

</div>
</div>

<div class="form-group">
<div class="input-icon">
<i class="lni-lock"></i>
<input type="password" name="password" required class="form-control" placeholder="New Password">
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="lni-lock"></i>
<input type="password" name="confirmpassword" required class="form-control" placeholder="Retype New Password">
</div>
</div>

<div class="text-center">
<input id="btnSubmit" type="submit"  onclick="return val_a();" value="Change Password" class="btn btn-common log-btn">
</div>
</form>
<?php

	}else{

			print '     <div class="alert alert-warning">
            The token <strong>'.$token.'</strong> Expired on '.$expires.'
            <a class="close" href="#"></a>
        </div>';
		
	}
}

?>

</form>
</div>
</div>
</div>
</div>
</section>



<?php
include('includes/footer.php');
?>