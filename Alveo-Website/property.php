<?php
	include 'connection.php';
	$sql = mysqli_query($connection, "SELECT * FROM properties WHERE property_id = ".$_GET['property']);
	$result = mysqli_fetch_array($sql, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
	<head>
    <title>Alveo Properties</title>
   	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1024">
    <meta name="keywords" content="HTML5, Bootstrap 3, CSS3, javascript, PHP, Responsive, Mobile">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="css/Montserrat.css">
    <link rel="stylesheet" type="text/css" href="css/Crimson Text.css">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="img/alveo.png" type="image/x-icon">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	</head>
	<body>
		<header id="header">
			<!-- Section title -->
			<h1 class="sr-only">Alveo | Property page</h1>
			<nav class="navbar navbar-default navbar-fixed-top">
			  <!-- Section title -->
			  <h1 class="sr-only">Main navigation</h1>
				<div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand smoothScroll" href="index.php">
			        <h3>PHILIPPINES PROPERTIES</h3>
			      </a>
			    </div>
					<!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="main-navbar">
			      <ul class="nav navbar-nav navbar-right">
			        <li><a class="smoothScroll" href="index.php">Home
			        <span class="sr-only">(current)</span></a></li>
			        <li><a class="smoothScroll" href="#services">Projects</a></li>
			        <li><a class="smoothScroll" href="#">Locations</a></li>
			        <li><a class="smoothScroll" href="#">Articles</a></li>
			        <li><a class="smoothScroll" href="#">Buying Guide</a></li>
			        <li><a class="smoothScroll" href="#footer">Contact Us</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container -->
			</nav>
		</header>
		<main>
			<section id="property">
				<!-- Section title -->
				<h1 class="sr-only">Home section</h1>
				<div class="property-content">
					<div class="container">
						<div class="row">
							<div class="col-xs-7">
								<img id="pic0" alt="image" src=<?php echo "\"".$result['property_pic']."\"";?>>
							</div>
							<div class="col-xs-5">
								<h1>
									<?php echo $result['property_name'];?>
								</h1>
								<span class="detail-label">
									<?php echo $result['property_location'];?>
								</span>
								<div class="icon-details fnt-17-777">
									<span title="Bathroom" class="mrg">
										<img alt="image" src="img/Bathroom.png">
										<?php echo $result['bathrooms'];?>
									</span>
									<span title="Bed" class="mrg">
										<img alt="image" src="img/Bed.png">
										<?php echo $result['bedrooms'];?>
									</span>
									<span title="Garage">
										<img alt="image" src="img/Garage.png">
										<?php echo $result['garages'];?>
									</span>
								</div>
								<div class="fnt-19-00b8d4">
									<span class="detail-label">
										₱<?php echo $result['property_price'];?> to ₱<?php echo $result['property_maxprice'];?>
									</span>
								</div>
								<div class="img-3">
									<img id="pic1" onclick="change_pic(this.id);" class="img-per" src=<?php echo "\"".$result['property_pic1']."\"";?>>
									<img id="pic2" onclick="change_pic(this.id);" class="img-per" src=<?php echo "\"".$result['property_pic2']."\"";?>>
									<img id="pic3" onclick="change_pic(this.id);" src=<?php echo "\"".$result['property_pic3']."\"";?>>
								</div>
								<div class="bb-2"></div>
								<button type="button" class="btn btn-info btn-lg btn-block">Inquire Now</button>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="video">
				<div class="property-video">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<iframe width="100%" height="480" src=<?php echo "\"".$result['property_vid']."\"";?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="portfolio">
				<div class="container">
					<div class="row" id="above">
						<h2>Amenities</h2>
					</div>
					<div class="row" id="below">
						<ul>
							<?php $res_array = explode(",", $result['property_amenities']);
								foreach($res_array as $amenities){
							?>
								<li><h4><?php echo "• ".$amenities;?></h4><li>
							<?php }?>
						</ul>
					</div>
				</div>
				<div class="slider-container">
					<figure class="project grabbable active">
						<img class="img-responsive" src="img/portfolio/01.jpg" alt="Project Image">
					</figure>
					<figure class="project grabbable">
						<img class="img-responsive" src="img/portfolio/02.jpg" alt="Project Image">
					</figure>
					<figure class="project grabbable">
						<img class="img-responsive" src="img/portfolio/03.jpg" alt="Project Image">
					</figure>
					<figure class="project grabbable">
						<img class="img-responsive" src="img/portfolio/04.jpg" alt="Project Image">
					</figure>
					<figure class="project grabbable">
						<img class="img-responsive" src="img/portfolio/05.jpg" alt="Project Image">
					</figure>
					<figure class="project grabbable">
						<img class="img-responsive" src="img/portfolio/06.jpg" alt="Project Image">
					</figure>
				</div>
			</section>
			<section id="map">
				<div class="property-map">
					<iframe src=<?php echo "\"".$result['property_map']."\"";?> frameborder="0" allowfullscreen></iframe>
				</div>
			</section>
			<section id="about">
				<div class="property-about">
					<div class="container">
						<div class="row">
							<div class="col-xs-6">
								<h4>ABOUT THE PROJECT</h4>
								<p><?php echo $result['property_description'];?></p>
							</div>
							<div class="col-xs-5 col-xs-offset-1">
								<h4>Mortgage Calculator</h4>
								<p>Use this simple mortgage calculator to estimate your mortgage payment for your home loans.</p>
								<iframe src="mini.php" height="200" frameborder="0" scrolling="no"></iframe>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer id="footer">
			<!-- Section title -->
			<h1 class="sr-only">Footer section</h1>
			<div class="container">
				<div class="row">
					<div class="col-xs-6">
						<p>All information, pictures and images on this site are copyrighted material and owned<br>
							by their respective creators or owners.</p>
						<p>All plans, information in this website are for identification and references only. All<br>
							details are subject to change without prior notice and do not form part of an offer or<br>
							contract.</p>
						<br>
					</div>
					<div class="col-xs-4 col-xs-offset-2" style="color: #0288D1; text-align: right; font-weight: 600;">
						<p>Call this number if you have questions.</p>
						<p>+(63) 9999 888877</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<small class="copyright">Copyright © <span id="year">2018</span> ALVEO###.com</small>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3 justify-content-center">
						<h4>PHILIPPINES PROPERTIES <span id="yr" style="color: #707070;">2018</span></h4>
					</div>
				</div>
			</div>
		</footer>
		<!-- Scripts -->
		<script type="text/javascript" src="js/smooth-scroll.min.js"></script>
		<script type="text/javascript" src="js/modernizr.mq.js"></script>
		<script type="text/javascript" src="js/slick.min.js"></script>
		<!-- Latest compiled and minified JavaScript Bootstrap-->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- Custom JS -->
		<script type="text/javascript" src="js/custom.js"></script>
		<script>
			function change_pic(id) {
				var clicked_pic = document.getElementById(id).getAttribute("src");
				var big_pic = document.getElementById("pic0").getAttribute("src");

				document.getElementById("pic0").setAttribute("src", clicked_pic);
				document.getElementById(id).setAttribute("src", big_pic);
			}
		</script>
	</body>
</html>