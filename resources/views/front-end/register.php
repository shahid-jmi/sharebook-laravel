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
<h2 class="product-title">Create Account</h2>
<ol class="breadcrumb">
<li><a href="./">Home /</a></li>
<li style="color:white;" class="current">Register</li>
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
Register
</h3>
<form name="frm1" class="login-form" action="app/register.php" method="POST" autocomplete="off" onsubmit="return checkall();">
	<?php require 'constants/check_reply.php'; ?>
	<span id="name_status"></span>
	 <span id="email_status"></span>
<div class="form-group">
<div class="input-icon">
<i class="lni-user"></i>
<input type="text" id="UserName" class="form-control" name="user_name" required placeholder="Username" onkeyup="checkname();">

</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="lni-envelope"></i>
<input type="email" id="UserEmail" class="form-control" name="user_email" required placeholder="Email Address" onkeyup="checkemail();">

</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="lni-lock"></i>
<input type="password" name="password" required class="form-control" placeholder="Password">
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="lni-lock"></i>
<input type="password" name="confirmpassword" required class="form-control" placeholder="Retype Password">
</div>
</div>

<div class="text-center">
<input id="btnSubmit" type="submit"  onclick="return val_a();" value="Register" class="btn btn-common log-btn">
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


<script src="assets/js/password-validate.js"></script>

<script type="text/javascript">

function checkname()
{
 var name=document.getElementById( "UserName" ).value;
	
 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'constants/check-data.php',
  data: {
   user_name:name,
  },
  success: function (response) {
   $( '#name_status' ).html(response);
   if(response == '<div class="alert alert-warning">Username is already registered</div>')	
   {
   
   	 
    return false;	
   }
   else
   {

    return true;		
   }
  }
  });
 }
 else
 {

 }
}

function checkemail()
{
 var email=document.getElementById( "UserEmail" ).value;
	
 if(email)
 {
  $.ajax({
  type: 'post',
  url: 'constants/check-data.php',
  data: {
   user_email:email,
  },
  success: function (response) {
   $( '#email_status' ).html(response);
   if(response == '<div class="alert alert-warning">Email is already registered</div>')	
   {

   	
   	 
    return false;

   }
   else
   {


    
    return true; 


   }
  }
  });
 }
 else
 {

 }
}


function checkall() {


var titleElement = document.getElementById("UserName");

    if(titleElement.innerHTML.length>3){
        return false;
    }


}


</script>

</body>

</html>