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
<h2 class="product-title">Contact Us</h2>
<ol class="breadcrumb">
<li><a href="./">Home /</a></li>
<li style="color:white;" class="current">Contact Us</li>
</ol>
</div>
</div>
</div>
</div>
</div>





<section id="content" class="section-padding">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-xs-12">

<form class="contact-form"  action="app/send-message" autocomplete="off">
<h2 class="contact-title">
Send us a message
</h2>
<div class="row">
<div class="col-md-12">
	<?php require 'constants/check_reply.php'; ?>
<div class="row">
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div class="form-group">
<input type="text" class="form-control" id="name" required name="name" placeholder="Name" required data-error="Please enter your name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div class="form-group">
<input type="email" name="email" class="form-control" id="email" required placeholder="Email" required data-error="Please enter your email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div class="form-group">
<input type="text" class="form-control" id="msg_subject" required name="phone" placeholder="Phone" required data-error="Please enter your phone">
<div class="help-block with-errors"></div>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<textarea class="form-control" placeholder="Massage" name="message" required rows="7" data-error="Write your message" required></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
</div>
 </div>
<div class="col-md-12">
<button type="submit"  class="btn btn-common">Submit Now</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">

<div class="information">
<h3>Contact Info</h3>
<div class="contact-datails">
<ul class="list-unstyled info">
<li><span>Address : </span><p><?php echo $site_address; ?></p></li>
<li><span>Email : </span><p><?php echo $site_email; ?></p></li>
<li><span>Phone : </span><p><?php echo $site_phone; ?></p></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>


<?php
include('includes/footer.php');
?>