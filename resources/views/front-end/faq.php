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
<h2 class="product-title">FAQ</h2>
<ol class="breadcrumb">
<li><a href="./">Home /</a></li>
<li style="color:white;" class="current">FAQ</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<div class="faq section-padding">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="head-faq text-center">
<h2 class="section-title">Frequently Asked Questions</h2>
</div>

<div class="panel-group" id="accordion">
<?php
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
 	$stmt = $conn->prepare("SELECT * FROM tbl_faqs ORDER BY id");
	$stmt->execute();
	$result = $stmt->fetchAll();

    foreach($result as $row)
    {
    	?>
    	<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row['id']; ?>">
<?php echo $row['quest']; ?>
</a>
</h4>
</div>
<div id="collapse<?php echo $row['id']; ?>" class="panel-collapse collapse">
<div class="panel-body">
<p>
<?php echo $row['answ']; ?>
</p>
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
</div>
</div>
</div>







<?php
include('includes/footer.php');
?>