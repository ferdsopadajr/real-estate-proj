<?php
	include 'connection.php';

	// get the data from the forms
	$query = $_REQUEST["search_text"];
	$location = $_REQUEST["location"];
	$proj_type = $_REQUEST["proj_type"];
	$price_range = $_REQUEST["price_range"];

	// to make sure nobody uses SQL injection
	$query = mysqli_real_escape_string($connection, $query);
	$location = mysqli_real_escape_string($connection, $location);
	$proj_type = mysqli_real_escape_string($connection, $proj_type);
	$price_range = mysqli_real_escape_string($connection, $price_range);

	// default db query
	$db_query = "SELECT * FROM properties";

	// search_text not empty
	if (!empty($query) && empty($location) && empty($proj_type) && empty($price_range)) {
		$db_query .= " WHERE `property_name` LIKE '%".$query."%' OR `property_location` LIKE '%".$query."%' OR `property_type` LIKE '%".$query."%' OR `property_space` LIKE '%".$query."%' OR `property_amenities` LIKE '%".$query."%' OR `property_price` LIKE '%".$query."%' OR `property_maxprice` LIKE '%".$query."%'";
	}
	// search_text, location not empty
	elseif (!empty($query) && !empty($location) && empty($proj_type) && empty($price_range)) {
		$db_query .= " WHERE `property_name` LIKE '%".$query."%' OR `property_location` LIKE '%".$query."%' OR `property_location` LIKE '%".$location."%' OR `property_type` LIKE '%".$query."%' OR `property_space` LIKE '%".$query."%' OR `property_amenities` LIKE '%".$query."%' OR `property_price` LIKE '%".$query."%' OR `property_maxprice` LIKE '%".$query."%'";
	}
	// search_text, location, proj_type not empty
	elseif (!empty($query) && !empty($location) && !empty($proj_type) && empty($price_range)) {
		$db_query .= " WHERE `property_name` LIKE '%".$query."%' OR `property_location` LIKE '%".$query."%' OR `property_location` LIKE '%".$location."%' OR `property_type` LIKE '%".$query."%' OR `property_type` LIKE '%".$proj_type."%' OR `property_space` LIKE '%".$query."%' OR `property_amenities` LIKE '%".$query."%' OR `property_price` LIKE '%".$query."%' OR `property_maxprice` LIKE '%".$query."%'";
	}
	// all not empty & price < 500k
	elseif (!empty($query) && !empty($location) && !empty($proj_type) && $price_range == "Below 500K") {
		$db_query .= " WHERE `property_name` LIKE '%".$query."%' OR `property_location` LIKE '%".$query."%' OR `property_location` LIKE '%".$location."%' OR `property_type` LIKE '%".$query."%' OR `property_type` LIKE '%".$proj_type."%' OR `property_space` LIKE '%".$query."%' OR `property_amenities` LIKE '%".$query."%' OR `property_price` LIKE '%".$query."%' OR `property_maxprice` LIKE '%".$query."%' OR `property_price` < 500000";
	}
	// all not empty & price 500k to 10m
	elseif (!empty($query) && !empty($location) && !empty($proj_type) && $price_range == "500K to 10M") {
		$db_query .= " WHERE `property_name` LIKE '%".$query."%' OR `property_location` LIKE '%".$query."%' OR `property_location` LIKE '%".$location."%' OR `property_type` LIKE '%".$query."%' OR `property_type` LIKE '%".$proj_type."%' OR `property_space` LIKE '%".$query."%' OR `property_amenities` LIKE '%".$query."%' OR `property_price` LIKE '%".$query."%' OR `property_maxprice` LIKE '%".$query."%' OR (`property_price` >= 500000 OR `property_maxprice` < 11000000)";
	}
	// all not empty & price 11m to 50m
	elseif (!empty($query) && !empty($location) && !empty($proj_type) && $price_range == "11M to 50M") {
		$db_query .= " WHERE `property_name` LIKE '%".$query."%' OR `property_location` LIKE '%".$query."%' OR `property_location` LIKE '%".$location."%' OR `property_type` LIKE '%".$query."%' OR `property_type` LIKE '%".$proj_type."%' OR `property_space` LIKE '%".$query."%' OR `property_amenities` LIKE '%".$query."%' OR `property_price` LIKE '%".$query."%' OR `property_maxprice` LIKE '%".$query."%' OR (`property_price` >= 11000000 OR `property_maxprice` < 51000000)";
	}
	// all not empty & price 51m to 100m
	elseif (!empty($query) && !empty($location) && !empty($proj_type) && $price_range == "51M to 100M") {
		$db_query .= " WHERE `property_name` LIKE '%".$query."%' OR `property_location` LIKE '%".$query."%' OR `property_location` LIKE '%".$location."%' OR `property_type` LIKE '%".$query."%' OR `property_type` LIKE '%".$proj_type."%' OR `property_space` LIKE '%".$query."%' OR `property_amenities` LIKE '%".$query."%' OR `property_price` LIKE '%".$query."%' OR `property_maxprice` LIKE '%".$query."%' OR (`property_price` >= 51000000 OR `property_maxprice` <= 100000000)";
	}
	// all not empty & price > 100m
	elseif (!empty($query) && !empty($location) && !empty($proj_type) && $price_range == "100M Above") {
		$db_query .= " WHERE `property_name` LIKE '%".$query."%' OR `property_location` LIKE '%".$query."%' OR `property_location` LIKE '%".$location."%' OR `property_type` LIKE '%".$query."%' OR `property_type` LIKE '%".$proj_type."%' OR `property_space` LIKE '%".$query."%' OR `property_amenities` LIKE '%".$query."%' OR `property_price` LIKE '%".$query."%' OR `property_maxprice` LIKE '%".$query."%' OR `property_maxprice` > 100000000";
	}
	// location, proj_type not empty & price < 500k
	elseif (empty($query) && !empty($location) && !empty($proj_type) && $price_range == "Below 500K") {
		$db_query .= " WHERE `property_location` LIKE '%".$location."%' OR `property_type` LIKE '%".$proj_type."%' OR `property_price` < 500000";
	}
	// location, proj_type not empty & price 500k to 10m
	elseif (empty($query) && !empty($location) && !empty($proj_type) && $price_range == "500K to 10M") {
		$db_query .= " WHERE `property_location` LIKE '%".$location."%' OR `property_type` LIKE '%".$proj_type."%' OR (`property_price` >= 500000 OR `property_maxprice` < 11000000)";
	}
	// location, proj_type not empty & price 11m to 50m
	elseif (empty($query) && !empty($location) && !empty($proj_type) && $price_range == "11M to 50M") {
		$db_query .= " WHERE `property_location` LIKE '%".$location."%' OR `property_type` LIKE '%".$proj_type."%' OR (`property_price` >= 11000000 OR `property_maxprice` < 51000000)";
	}
	// location, proj_type not empty & price 51m to 100m
	elseif (empty($query) && !empty($location) && !empty($proj_type) && $price_range == "51M to 100M") {
		$db_query .= " WHERE `property_location` LIKE '%".$location."%' OR `property_type` LIKE '%".$proj_type."%' OR (`property_price` >= 51000000 OR `property_maxprice` < 101000000)";
	}
	// location, proj_type not empty & price > 100m
	elseif (empty($query) && !empty($location) && !empty($proj_type) && $price_range == "100M Above") {
		$db_query .= " WHERE `property_location` LIKE '%".$location."%' OR `property_type` LIKE '%".$proj_type."%' OR `property_maxprice` > 100000000";
	}
	// location not empty
	elseif (empty($query) && !empty($location) && empty($proj_type) && empty($price_range)) {
		$db_query .= " WHERE `property_location` LIKE '%".$location."%'";
	}
	// location, proj_type not empty
	elseif (empty($query) && !empty($location) && !empty($proj_type) && empty($price_range)) {
		$db_query .= " WHERE `property_location` LIKE '%".$location."%' OR `property_type` LIKE '%".$proj_type."%'";
	}
	// location not empty & price < 500k
	elseif (empty($query) && !empty($location) && empty($proj_type) && $price_range == "Below 500K") {
		$db_query .= " WHERE `property_location` LIKE '%".$location."%' OR `property_price`  < 500000";
	}
	// location not empty & price 500k to 10m
	elseif (empty($query) && !empty($location) && empty($proj_type) && $price_range == "500K to 10M") {
		$db_query .= " WHERE `property_location` LIKE '%".$location."%' OR (`property_price` >= 500000 OR `property_maxprice` < 11000000)";
	}
	// location not empty & price 11m to 50m
	elseif (empty($query) && !empty($location) && empty($proj_type) && $price_range == "11M to 50M") {
		$db_query .= " WHERE `property_location` LIKE '%".$location."%' OR (`property_price` >= 11000000 OR `property_maxprice` < 51000000)";
	}
	// location not empty & price 51m to 100m
	elseif (empty($query) && !empty($location) && empty($proj_type) && $price_range == "51M to 100M") {
		$db_query .= " WHERE `property_location` LIKE '%".$location."%' OR (`property_price` >= 51000000 OR `property_maxprice` < 101000000)";
	}
	// location not empty & price > 100m
	elseif (empty($query) && !empty($location) && empty($proj_type) && $price_range == "100M Above") {
		$db_query .= " WHERE `property_location` LIKE '%".$location."%' OR `property_maxprice` > 100000000";
	}
	// proj_type not empty
	elseif (empty($query) && empty($location) && !empty($proj_type) && empty($price_range)) {
		$db_query .= " WHERE `property_type` LIKE '%".$proj_type."%'";
	}
	// proj_type not empty & price < 500k
	elseif (empty($query) && empty($location) && !empty($proj_type) && $price_range == "Below 500K") {
		$db_query .= " WHERE `property_type` LIKE '%".$proj_type."%' OR `property_price` < 500000";
	}
	// proj_type not empty & price 500k to 10m
	elseif (empty($query) && empty($location) && !empty($proj_type) && $price_range == "500K to 10M") {
		$db_query .= " WHERE `property_type` LIKE '%".$proj_type."%' OR (`property_price` >= 500000 OR `property_maxprice` < 11000000)";
	}
	// proj_type not empty & price 11m to 50m
	elseif (empty($query) && empty($location) && !empty($proj_type) && $price_range == "11M to 50M") {
		$db_query .= " WHERE `property_type` LIKE '%".$proj_type."%' OR (`property_price` >= 11000000 OR `property_maxprice` < 51000000)";
	}
	// proj_type not empty & price 51m to 100m
	elseif (empty($query) && empty($location) && !empty($proj_type) && $price_range == "51M to 100M") {
		$db_query .= " WHERE `property_type` LIKE '%".$proj_type."%' OR (`property_price` >= 51000000 OR `property_maxprice` < 101000000)";
	}
	// proj_type not empty & price > 100m
	elseif (empty($query) && empty($location) && !empty($proj_type) && $price_range == "100M Above") {
		$db_query .= " WHERE `property_type` LIKE '%".$proj_type."%' OR `property_maxprice` > 100000000";
	}
	// price < 500k
	elseif (empty($query) && empty($location) && empty($proj_type) && $price_range == "Below 500K") {
		$db_query .= " WHERE `property_price` < 500000";
	}
	// price 500k to 10m
	elseif (empty($query) && empty($location) && empty($proj_type) && $price_range == "500K to 10M") {
		$db_query .= " WHERE (`property_price` >= 500000 OR `property_maxprice` < 11000000)";
	}
	// price 11m to 50m
	elseif (empty($query) && empty($location) && empty($proj_type) && $price_range == "11M to 50M") {
		$db_query .= " WHERE (`property_price` >= 11000000 OR `property_maxprice` < 51000000)";
	}
	// price 51m to 100m
	elseif (empty($query) && empty($location) && empty($proj_type) && $price_range == "51M to 100M") {
		$db_query .= " WHERE (`property_price` >= 51000000 OR `property_maxprice` < 101000000)";
	}
	// price > 100m
	elseif (empty($query) && empty($location) && !empty($proj_type) && $price_range == "100M Above") {
		$db_query .= " WHERE `property_maxprice` > 100000000";
	}

	// execute query
	$sql = mysqli_query($connection, $db_query);
	
	if ($row = mysqli_num_rows($sql) > 0) {
		$count = 0; // count results for card positions

		while ($result = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
			if ($count == 2) {
?>
				<!-- Bottom gap for cards -->
				<div class="row"><div class="col-xs-12"></div></div>
<?php
				$count = 0;
			}
?>
			<!-- Cards -->
			<div class="span6">
				<!-- Begin Listing-->
				<article class="property-item clearfix">
					<figure>
						<div class="item-zoom">
							<img alt="image" class="img-responsive" src=<?php echo "\"".$result['property_pic']."\"";?>>
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
						<h4 class="title">
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
						<form action="property.php" method="post">
							<button type="submit" class="btn btn-info btn-lg btn-block" name="property" value=<?php echo "\"".$result['property_id']."\""; ?>>Inquire Now</button>
						</form>
					</div>
				</article>
        <!-- End Listing-->
			</div>
<?php
			$count++;
		}
	}elseif ($row = mysqli_num_rows($sql) == 0) {
?>
		<h2>No results found</h2>
<?php
	}
	mysqli_close($connection);
?>