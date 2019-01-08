<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
	<head>
    <title>Alveo Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1024">
    <meta name="keywords" content="HTML5, Bootstrap 3, CSS3, javascript, PHP, Responsive, Mobile">
    <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="css/Montserrat.css">
    <link rel="stylesheet" href="css/Crimson Text.css">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="img/alveo.png" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script>
    	$(document).ready(function(){
    		$("#search-text").keyup(function(){
    			$.post("getresults.php",
    			{
    				search_text: $("#search-text").val(),
    				location: $("#location").val(),
    				proj_type: $("#proj_type").val(),
    				price_range: $("#price_range").val()
    			},
    			function(data){
    				$("#row-span12").html(data);
    			});
    		});
    	});
    	$(document).ready(function(){
    		$("#location,#proj_type,#price_range").change(function(){
    			$.post("getresults.php",
    			{
    				search_text: $("#search-text").val(),
    				location: $("#location").val(),
    				proj_type: $("#proj_type").val(),
    				price_range: $("#price_range").val()
    			},
    			function(data){
    				$("#row-span12").html(data);
    			});
    		});
    	});
    </script>
	</head>
	<body>
		<header id="header">
			<!-- Section title -->
			<h1 class="sr-only">Alveo | Home page</h1>			
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
			        <li class="active"><a class="smoothScroll" href="#home">Home <span class="sr-only">(current)</span></a></li>
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
			<section id="home">
				<!-- Section title -->
				<h1 class="sr-only">Home section</h1>
				<div class="home-content">
					<div class="container">
						<form autocomplete="off">
							<div class="row">
								<div class="col-xs-11 justify-content-center">
									<h3>Search Projects</h3>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-11 justify-content-center">
									<div id="custom-search-input">
		                <div class="input-group">
		                  <input id="search-text" name="search-text" type="text" class="search-query form-control" placeholder="Search">
		                  <span class="input-group-btn">
		                    <button disabled name="search" type="submit">
		                      <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		                    </button>
		                  </span>
		                </div>
		              </div>
		            </div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-xs-offset-1">
									<div class="search-category">
	                  <select id="location" name="location" class="form-control">
	                  	<option value="" hidden>Location</option>
	                  	<option value="Alabang">Alabang</option>
	                  	<option value="Alta Vista">Alta Vista</option>
	                  	<option value="Bacolod">Bacolod</option>
	                  	<option value="Cagayan de Oro">Cagayan de Oro</option>
	                    <option value="Cavite">Cavite</option>
	                    <option value="Cebu">Cebu</option>
	                    <option value="Davao">Davao</option>
	                    <option value="Laguna">Laguna</option>
	                    <option value="Makati City">Makati City</option>
	                    <option value="Manila">Manila</option>
	                    <option value="Negros Occidental">Negros Occidental</option>
	                    <option value="Pampanga">Pampanga</option>
	                    <option value="Pasig City">Pasig City</option>
	                    <option value="Quezon City">Quezon City</option>
	                    <option value="Tagaytay">Tagaytay</option>
	                    <option value="Taguig">Taguig</option>
	                  </select>
	                </div>
	              </div>
	              <div class="col-xs-4">
		            	<div class="search-category">
	                  <select id="proj_type" name="proj_type" class="form-control">
	                  	<option value="" hidden>Project Type</option>
	                    <option value="Lot">Lot</option>
	                    <option value="Condominium">Condominium</option>
	                    <option value="House & Lot">House & Lot</option>
	                    <option value="Townhome">Townhome</option>
	                    <option value="Offices">Offices</option>
	                    <option value="Commercial Lots">Commercial Lots</option>
	                  </select>
	                </div>
	              </div>
	              <div class="col-xs-4">
		            	<div class="search-category">
	                  <select id="price_range" name="price_range" class="form-control">
	                  	<option value="" hidden>Price Range</option>
	                  	<option value="Below 500K">Below ₱500K</option>
	                  	<option value="500K to 10M">₱1M to ₱10M</option>
	                  	<option value="11M to 50M">₱11M to ₱50M</option>
	                  	<option value="51M to 100M">₱51M to ₱100M</option>
	                  	<option value="100M Above">₱100M Above</option>
	                  </select>
	                </div>
	              </div>
							</div>
						</form>
					</div>
				</div>
			</section>
			<div class="container">
				<div class="sep"></div>
			</div>
			<section id="services">
				<!-- Section title -->
				<h1 class="sr-only">Services section</h1>
				<div class="container" id="property-listings">
					<div class="row">
						<div id="row-span12" class="span12">
							<?php
								// $pageno var to calculate offset
								// Get the current page number
								if (isset($_GET['pageno'])) {
									$pageno = $_GET['pageno'];
								} else {
									$pageno = 1;
								}

								// Formula for pagination
								$no_of_records_per_page = 8;
								$offset = ($pageno - 1) * $no_of_records_per_page;

								// Get the total number of pages
								$total_pages_sql = mysqli_query($connection, "SELECT COUNT(*) FROM properties");
								$total_rows = mysqli_fetch_array($total_pages_sql)[0];
								$total_pages = ceil($total_rows / $no_of_records_per_page);

								// Constructing the SQL Query for pagination
								$sql = mysqli_query($connection, "SELECT * FROM properties LIMIT $offset, $no_of_records_per_page");
								$count = 0;
								while($result = mysqli_fetch_array($sql)){
									if($count == 2){
							?>
										<div class="row"><div class="col-xs-12"></div></div>
							<?php $count = 0;}?>
										<div class="span6">
												<!-- Begin Listing-->
												<article class="property-item clearfix">
													<figure>
														<div class="item-zoom">
															<img alt="image" class="img-responsive" src="<?php echo $result['property_pic'];?>">
														</div>
														<figcaption>
															<?php echo $result['property_description'];?>
														</figcaption>
														<div class="icon-details">
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
													</figure>
													<div class="detail">
														<h4 class="title" title="<?php echo $result['property_name'];?>">
															<?php echo $result['property_name'];?>
														</h4>
														<span class="detail-label">Location</span>
														<span class="detail-data">
															<?php echo $result['property_location'];?>
														</span>
														<span class="bb"></span>
														<span class="detail-label">Space</span>
														<span class="detail-data">
															<?php echo $result['property_space'];?>
														</span>
														<span class="bb"></span>
														<span class="detail-label">Amenities</span>
														<span class="detail-data dd-amenities">
															<?php echo $result['property_amenities'];?>
														</span>
														<span class="bb"></span>
														<span class="detail-label">Starting Price</span>
														<span class="detail-data">
															₱<?php echo $result['property_price'];?> to ₱<?php echo $result['property_maxprice'];?>
														</span>
														<span class="bb"></span>
														<form action="property.php" method="get">
															<button type="submit" class="btn btn-info btn-lg btn-block" name="property" value="<?php echo $result['property_id']; ?>">Inquire Now</button>
														</form>
													</div>
												</article>
					              <!-- End Listing-->
											</div>
							<?php $count++;} mysqli_close($connection);?>
						</div>
					</div>
				</div>
				<div class="container pg">
					<ul class="pagination">
		        <li><a href="?pageno=1">First</a></li>
		        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
		            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
		        </li>
		        <?php
		        	for($page = 1; $page <= $total_pages; $page++) {
		        ?>
		        		<li><a href="?pageno=<?php echo $page; ?>"><?php echo $page; ?></a></li>
		        <?php
		        	}
		        ?>
		        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
		            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
		        </li>
		        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
		    </ul>
				</div>
			</section>
		</main>
		<footer id="footer">
			<!-- Section title -->
			<h1 class="sr-only">Footer section</h1>
			<div class="container">
				<div class="row">
					<div class="col-xs-6">
						<p>All information, pictures and images on this site are copyrighted material and owned
							by their respective creators or owners.<br>
							All plans, information in this website are for identification and references only. All
							details are subject to change without prior notice and do not form part of an offer or
							contract.</p>
						<br>
					</div>
					<div id="call" class="col-xs-4 col-xs-offset-2">
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
					<h4 id="phil-prop">PHILIPPINES PROPERTIES <span id="yr">2018</span></h4>
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
	</body>
</html>