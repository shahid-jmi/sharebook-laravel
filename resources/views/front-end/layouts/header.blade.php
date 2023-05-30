<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo "site_title"; ?></title>
	<link rel="stylesheet" type="text/css" href="{{url('public/front-end/fonts/line-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/front-end/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/front-end/css/slicknav.css')}}">	
	<link rel="stylesheet" type="text/css" href="{{url('public/front-end/css/color-switcher.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/front-end/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/front-end/css/owl.carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/front-end/css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/front-end/css/responsive.css')}}">
	<link rel="icon" href="{{url('public/icon/favicon.ico')}}">
</head>
<body>

<header id="header-wrap">

	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-5 col-xs-12">
				</div>
				<div class="col-lg-5 col-md-7 col-xs-12">
					<div class="header-top-right float-right">
						
								<a href="<?php echo "myrole" ; ?>" class="header-top-button"><i class="lni-user"></i> My Account</a> |
							<a href="logout" class="header-top-button"><i class="lni-enter"></i> Log Out</a>
							



</div>
</div>
</div>
</div>
</div>


<nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
<div class="container">

<div class="navbar-header">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
</button>
<a href="index.php"><img src="{{url('public/front-end/img/logo.png')}}"></a>
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto w-100 justify-content-center">
<li class="nav-item">
<a class="nav-link" href="./">
Home
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="listings">
Listings
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="faq">
FAQ
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact">
Contact
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="about">
About
</a>
</li>

</ul>
<div class="post-btn">
    {{-- <?php
	// if ($logged == "1") {
	// 	print '<a class="btn btn-common" href="'.$myrole.'/upload"><i class="lni-pencil-alt"></i> Post an Ad</a>';

	// 	}else{

	// 	print '<a class="btn btn-common" href="login"><i class="lni-lock"></i> Login to Post</a>';

	// 	}

      ?> --}}
	<a class="btn btn-common" href="/upload"><i class="lni-pencil-alt"></i> Post an Ad</a>
</div>
</div>
</div>

<ul class="mobile-menu">
<li>
<a class="active" href="./">
Home
</a>
<li>
<a href="listings">
Listings
</a>
<li>
<li>
<a  href="faq">
FAQ
</a>
<li>
<li>
<a href="contact">
Home
</a>
<li>
<li>
<a class="about" href="about">
About
</a>
<li>
</ul>

</nav>

