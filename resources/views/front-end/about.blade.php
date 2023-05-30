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
<h2 class="product-title">About Us</h2>
<ol class="breadcrumb">
<li><a href="./">Home /</a></li>
<li style="color:white;" class="current">About Us</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<section id="about" class="section-padding">
<div class="container">
<div class="row">
<div class="col-md-12 col-lg-12 col-xs-12">
<div class="about-wrapper">

<p class="intro-desc">
	<?php
	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("SELECT * FROM tbl_about LIMIT 1");
	$stmt->execute();
	$result = $stmt->fetchAll();

    foreach($result as $row)
    {
	
	echo $row['about'];


	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>


</p>

</div>
</div>

</div>
</div>
</section>










<?php
include('includes/footer.php');
?>