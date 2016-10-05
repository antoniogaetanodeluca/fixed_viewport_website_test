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
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700,300,800,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
	<script src="<?php echo $path_js; ?>/jquery-2.2.1.min.js"></script>
	<script src="<?php echo $path_js; ?>/bootstrap.min.js"></script>
	<script src="<?php echo $path_js; ?>/jquery.mmenu.min.js"></script>
	<script src="<?php echo $path_js; ?>/custom.js"></script>
	<title>Hide</title>
</head>

<body>

	<div>
		<div class="container">

		<header>
			<?php include("inc/header.php"); ?>
		</header>		


			<div class="main">
				<div class="main-left">
					<section class="content-box margin-15">
						<img src="assets/img/img1.jpg" class="img-responsive"/>
					</section>
				</div>

				<div class="main-center">
					<section class="content-box content-box-center">
						<header><h2 class="text-uppercase">about</h2></header>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</section>

					<section class="content-box content-box-center">
						<header><h2 class="text-uppercase"><h2 class="text-uppercase">awards</h2></header>
						<ul>
							<li><img src="assets/img/ico1.jpg"/></li>
							<li><img src="assets/img/ico2.jpg"/></li>
							<li><img src="assets/img/ico3.jpg"/></li>
						</ul>
					</section>

					<section class="content-box content-box-center">
						<header><h2 class="text-uppercase">recommends</h2></header>
						<ul>
							<li><img src="http://placehold.it/56x56"></li>
							<li><img src="http://placehold.it/56x56"></li>
							<li><img src="http://placehold.it/56x56"></li>
							<li><img src="http://placehold.it/56x56"></li>
						</ul>
					</section>

					<section class="content-box content-box-center">
						<header>
							<h2 class="text-uppercase">process</h2>
							<h3 class="text-capitalize">Messenger bag process:<span> from sketch to finished product</span></h3>
						</header>
						<div class="row">
							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
								<img src="assets/img/img3.jpg" class="img-responsive" />
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
								<img src="assets/img/img4.jpg" class="img-responsive" />
							</div>
						</div>
					</section>

					<section class="content-box content-box-last">
						<header>
							<h3 class="text-capitalize">Military Duffle bag process:<span> from sketch to finished product</span></h3>
						</header>
						<div class="row">
							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
								<img src="assets/img/img3.jpg" class="img-responsive" />
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
								<img src="assets/img/img4.jpg" class="img-responsive" />
							</div>
						</div>
					</section>
				</div>

				<div class="main-right products-box">

					<div class="">
						<div class="">
							<div class="item featured">
								<div class="item-fav">
									<a href="#"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a>
								</div>
								<div class="item-image" />
									<img src="assets/img/img2.jpg" class="img-responsive"/>
								</div>
								<div class="item-info  text-center">
									<span class="text-capitalize">the zip-top briefcase</span>
									<a href="#" class="" alt="explore item">explore</a>
								</div>
							</div>
						</div>
					</div>

					<div class="select-items">
						<div class="">
							<h3 class="text-left text-uppercase pull-left">products</h3>
						</div>
						<div class="">
							
							<select>
							  <option value="popular">popular</option>
							  <option value="price">price</option>
							</select>
							<div class="clearfix"></div>
						</div>
					</div>

					<div class="products-list">
						<ul class="list-items">
							<li>
								<a href="#"><img src="assets/img/bag1.jpg"/></a>
								<div class="product-info">
									<h2 class="text-capitalize">messenger bag</h2>
									<span class="pull-right price" itemprop="price">&euro; 350,00</span>
									<div class="clearfix"></div>
								</div>
							</li>
						
							<li>
								<a href="#"><img src="assets/img/bag2.jpg" /></a>
								<div class="product-info">
									<h2 class="text-capitalize">messenger bag</h2>
									<span class="pull-right price">&euro; 130,00</span>
									<div class="clearfix"></div>
								</div>
							</li>

							<li>						
								<a href="#"><img src="assets/img/bag3.jpg"/></a>
								<div class="product-info">
									<h2 class="text-capitalize">messenger bag</h2>
									<span class="pull-right price">&euro; 100,00</span>
									<div class="clearfix"></div>
								</div>
							</li>

							<li>
								<a href="#"><img src="assets/img/bag4.jpg"/></a>
								<div class="product-info">
									<h2 class="text-capitalize">messenger bag</h2>
									<span class="pull-right price">&euro; 100,00</span>
									<div class="clearfix"></div>
								</div>
							</li>
						</ul>
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
