
@extends('front-end.layouts.main')

@section('main-container')
<div>
    <h1>index page</h1>
</div>


{{-- <div id="hero-area">
<div class="overlay"></div>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12 col-lg-9 col-xs-12 text-center">
<div class="contents">
<h1 class="head-title">Welcome to ShareBook</h1>
<p>Buy and sell you pre used books here.</p>
<div class="search-bar">
<div class="search-inner">
<form class="search-form" action="listings" autocomplete="off">
<div class="form-group">
<input type="text" name="keyword" class="form-control" placeholder="What are you looking for ?">
</div>
<div class="form-group inputwithicon">
<div class="select" >
<select name="city" required>
<option value="all">All Cities</option>
<?php
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("SELECT * FROM tbl_cities ORDER BY city");
	$stmt->execute();
	$result = $stmt->fetchAll();

    foreach($result as $row)
    {
		print '<option value="'.$row['city'].'">'.$row['city'].'</option>';
	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>
</select>
</div>
<i class="lni-target"></i>
</div>
<div class="form-group inputwithicon">
<div class="select" >
<select name="category" required>
<option value="all">All Categories</option>
<?php
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("SELECT * FROM tbl_categories ORDER BY category");
	$stmt->execute();
	$result = $stmt->fetchAll();

    foreach($result as $row)
    {
		print '<option value="'.$row['category'].'">'.$row['category'].'</option>';
	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>
</select>
</div>
<i class="lni-menu"></i>
</div>
<button type="submit" name="search" value="✓" class="btn btn-common" type="button"><i class="lni-search"></i> Search Now</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</header>





<section class="featured section-padding">
<div class="container">
<h1 class="section-title">Latest Products</h1>
<div class="row">

	<?php require 'constants/fetch-latest-ads.php'; ?>


</div>
</div>
</section>


<section class="featured-lis section-padding">
<div class="container">
<div class="row">
<div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
<h3 class="section-title">Featured Products</h3>
<div id="new-products" class="owl-carousel owl-theme">

<?php require 'constants/fetch-featured-ads.php'; ?>

</div>
</div>
</div>
</div>
</section>


<section class="works section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h3 class="section-title">How It Works?</h3>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<div class="works-item">
<div class="icon-box">
<i class="lni-users"></i>
</div>
<p>Create an Account</p>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<div class="works-item">
<div class="icon-box">
<i class="lni-bookmark-alt"></i>
</div>
<p>Post Ad Free</p>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<div class="works-item">
<div class="icon-box">
<i class="lni-thumbs-up"></i>
</div>
<p>Deal Done</p>
</div>
</div>
<hr class="works-line">
</div>
</div>
</section> --}}

@endsection
