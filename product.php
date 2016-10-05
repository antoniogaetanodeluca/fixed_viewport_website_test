<?php include("setup.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/jquery.mmenu.all.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/css/style.css" />
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
	<script src="<?php echo $path_js; ?>/jquery-2.2.1.min.js"></script>
	<script src="<?php echo $path_js; ?>/bootstrap.min.js"></script>
	<script src="<?php echo $path_js; ?>/jquery.mmenu.min.js"></script>
	<script src="<?php echo $path_js; ?>/custom.js"></script>
	<title>Product Page - Hide</title>
</head>

<body>

	<div>
		<header id="header">
			<?php include("inc/header.php"); ?>
		</header>

		<div class="container">


			<div class="row product-item">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<section class="content-box margin-20">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
					      <img src="assets/img/product.jpg" class="img-responsive"/>
					    </div>

					    <div class="item">
					      <img src="assets/img/product.jpg" class="img-responsive"/>
					      </div>
					    </div>
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>

						<!-- <img src="assets/img/product.jpg" class="img-responsive"/> -->
					</section>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="product-detail text-center">
						<h1>Waxed Canvas Messenger Bag</h1>
						<h2>By <span class="text-gray">Maria Cruz</span></h2>
						<span class="price">&euro; 399</span><hr class="hr-small" />
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="product-cta text-center">
						<span class="text-uppercase">choose your color</span>
						<ul class="product-options">
							<li><a href="#"><span class="product-color-a"></span></a></li>
							<li><a href="#"><span class="product-color-b"></span></a></li>
							<li><a href="#"><span class="product-color-c"></span></a></li>
							<li><a href="#"><span class="product-color-d"></span></a></li>
						</ul>

						<span class="text-uppercase">quantity</span>
						<div class="quantity">
							<a href="#" class="less"><i class="fa fa-minus" aria-hidden="true"></i></a>
							<span class="qty">1</span>
							<a href="#" class="more"><i class="fa fa-plus" aria-hidden="true"></i></a>
						</div>
						<a href="#" class="add-item" alt="add to bag">add to bag</a>
					</div>
				</div>
			</div>


			<footer id="footer">
				<?php include("inc/footer.php"); ?>
			</footer>


			<?php
				include("inc/analytics.php");
			?>

		</div>

	</div>

</body>

</html>
