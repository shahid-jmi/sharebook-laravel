<?php
require 'constants/config.php';
require 'constants/check-login.php';

if (isset($_GET['page'])) {
$page = $_GET['page'];
if ($page=="" || $page=="1")
{
$page1 = 0;
$page = 1;
}else{
$page1 = ($page*18)-18;
}         
}else{
$page1 = 0;
$page = 1;  
}

if (isset($_GET['search']) && isset($_GET['city']) && isset($_GET['keyword']) && $_GET['search'] == "✓") {

$searched = "1";
$title = "Search Results";
$cat = $_GET['category'];
$city = $_GET['city'];
$keyword = '%'.$_GET['keyword'].'%';

if ($city == "all" && $cat == "all") {

$query_1 = "SELECT * FROM tbl_ads LEFT JOIN tbl_users ON tbl_ads.author = tbl_users.user_id WHERE status = 'active' AND title LIKE :keyword ORDER BY enc_id DESC LIMIT $page1,18";

$query_2 = "SELECT * FROM tbl_ads LEFT JOIN tbl_users ON tbl_ads.author = tbl_users.user_id WHERE status = 'active' AND title LIKE :keyword ORDER BY enc_id DESC";

}else if ($city == "all" && $cat != "all") {

$query_1 = "SELECT * FROM tbl_ads LEFT JOIN tbl_users ON tbl_ads.author = tbl_users.user_id WHERE status = 'active' AND category = '$cat' AND title LIKE :keyword ORDER BY enc_id DESC LIMIT $page1,18";

$query_2 = "SELECT * FROM tbl_ads LEFT JOIN tbl_users ON tbl_ads.author = tbl_users.user_id WHERE status = 'active' AND category = '$cat' AND title LIKE :keyword ORDER BY enc_id DESC";

}else if ($city != "all" && $cat != "all") {

$query_1 = "SELECT * FROM tbl_ads LEFT JOIN tbl_users ON tbl_ads.author = tbl_users.user_id WHERE status = 'active' AND city = '$city' AND title LIKE :keyword ORDER BY enc_id DESC LIMIT $page1,18";

$query_2 = "SELECT * FROM tbl_ads LEFT JOIN tbl_users ON tbl_ads.author = tbl_users.user_id WHERE status = 'active' AND city = '$city' AND title LIKE :keyword ORDER BY enc_id DESC";

}



}else{

$title = "Listings";
$query_1 = "SELECT * FROM tbl_ads LEFT JOIN tbl_users on tbl_ads.author = tbl_users.user_id WHERE tbl_ads.status = 'active' ORDER BY enc_id DESC LIMIT $page1,18";

$query_2 = "SELECT * FROM tbl_ads LEFT JOIN tbl_users on tbl_ads.author = tbl_users.user_id WHERE tbl_ads.status = 'active' ORDER BY enc_id DESC";

$searched = "0";
}
?>

<?php
include('includes/header.php');
?>


<div class="page-header" style="background: url(assets/img/banner.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title"><?php echo $title; ?></h2>
<ol class="breadcrumb">
<li><a href="./">Home /</a></li>
<li style="color:white;" class="current"><?php echo $title; ?></li>
</ol>
</div>
</div>
</div>
</div>
</div>



<section class="featured section-padding">

<div class="container">
	<div class="row">
<div class="col-sm-12">
	<div class="product-filter">
<form action="listings" method="GET" autocomplete="off">
<div class="row">
<div class="col-sm-3">
<input type="text" 
<?php
if ($searched == "1") {
	print ' value="'.$_GET['keyword'].'" ';
}
?>
style="margin-top: 15px; margin-bottom: 15px;"  class="form-control" name="keyword" placeholder="What are you looking for ?">
</div>

<div class="col-sm-3">
<select style="height:44px; margin-top: 15px; margin-bottom: 15px;" class="form-control"  name="category" required>

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
		print '<option';

		if ($searched == "1") {

			if ($cat == $row['category']) {
				print ' selected ';			}
		} 
		print '

		value="'.$row['category'].'">'.$row['category'].'</option>';
	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>

</select>
</div>

<div class="col-sm-4">

<select class="form-control"  style="height:44px; margin-top: 15px; margin-bottom: 15px;"  name="city" required>

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
		print '<option';

		if ($searched == "1") {

			if ($city == $row['city']) {
				print ' selected ';			}
		} 
		print ' value="'.$row['city'].'">'.$row['city'].'</option>';
	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>
    
</select>

</div>
<input type="hidden" value="✓" name="search">
<div class="col-sm-2">
<input type="submit" style="height:44px; margin-top: 15px; margin-bottom: 15px;  width:100%"  class="btn btn-common" value="Search">
</div>
</form>

</div>
</div>
</div>
</div>

<div class="row">


<?php

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare($query_1);

	if ($title == "Search Results") {
    $stmt->bindParam(':keyword', $keyword);

	}
	$stmt->execute();
	$result = $stmt->fetchAll();

    foreach($result as $row)
    {
      $ad_id = $row['ad_id'];
      $directory = "uploads/ads/$ad_id/";
      $files = scandir ($directory);
      $firstFile = $directory . $files[2];
      $approved = $row['verified'];
      $featured = $row['featured'];

    	?>
    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="featured-box">
<figure>

<div class="icon">
	<?php
	if ($approved == "YES") {
	print '<span class="bg-green"><i class="lni-check-mark-circle"></i></span>';

	}

	if ($featured == "yes") {
		print '<span ><i class="lni-star"></i></span>';
	}
	?>
</div>
<a href="ad/<?php echo $row['ad_id']; ?>"><img class="img-fluid" src="<?php echo $firstFile; ?>" alt=""></a>
</figure>
<div class="feature-content">
	
<div class="product">
<a ><?php echo $row['category']; ?></a>
</div>
<h4 class="list-limit"><a href="ad/<?php echo $row['ad_id']; ?>"><?php echo $row['title']; ?></a></h4>
<div class="meta-tag">
<span>
<a ><i class="lni-user"></i> <?php echo $row['username']; ?>

</a>
	<?php
	if ($approved == "YES") {
	print '<i class="lni-check-mark-circle"></i>';

	}
	?>
</span>
<span>
<a><i class="lni-map-marker"></i> <?php echo $row['city']; ?></a>
</span>

</div>
<p class="dsc limit-text-desc"><?php echo $row['short_desc']; ?></p>
<div class="listing-bottom">
<h3 style="font-size:18px;" class="price float-left"><?php echo number_format($row['price']); ?> <?php echo $currency; ?></h3>
<a href="ad/<?php echo $row['ad_id']; ?>" class="btn btn-common float-right">View</a>
</div>
</div>
</div>
</div>

<?php
		

	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


    ?>


</div>
</div>
<div class="pagination-bar">
<nav>
<ul class="pagination justify-content-center">

	  <?php
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
    $stmt = $conn->prepare($query_2);
  	if ($title == "Search Results") {
    $stmt->bindParam(':keyword', $keyword);

	}
    $stmt->execute();
    $result = $stmt->fetchAll();
    $rec = count($result);

    $total_pages = $rec /18;
    $total_pages = ceil($total_pages);

    if ($total_pages > 1) {

        for ($b=1;$b<=$total_pages;$b++) {

        	if ($searched == "1") {
       print '<li class="page-item"><a class="page-link '; if ($b == $page) { print ' active '; } print '" href="listings?keyword='.$_GET['keyword'].'&category='.$_GET['category'].'&city='.$_GET['city'].'&search="✓"&page='.$b.'">'.$b.'</a></li>';

        	}else{

        	print '<li class="page-item"><a class="page-link '; if ($b == $page) { print ' active '; } print '" href="listings?page='.$b.'">'.$b.'</a></li>';

        	}



        }
                                 

    }

            
  }catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>

</ul>
</nav>
</div>
</section>



<?php
include('includes/footer.php');
?>