<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hiring Servent</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Find Your Servent For Hiring</h2>
				
			</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
			<!-- <ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM pets WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['pet_id'] ?>">
						<img class="thumb" src="admin/css/<?php echo 'images'.$rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'Kshs.'.$rws['price'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['pet_id'] ?>"><?php echo 'Car Make>'.$rws['pet_type'];?></a>
						</h1>
						<h2>Car Name/Model: <span class="property_size"><?php echo $rws['pet_name'];?></span></h2>
					</div>
				</li>
			<?php
				}
			?>
			</ul> -->
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card" style="width: 100%;">
						<a href="">
						  <img class="card-img-top" src="admin/css/141509ebef390eb08440e594892f1560" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Servent Name</h5>
						    <p class="card-text">Servent Type > Hourly Rate:80 Taka</p>
						    <a href="#" class="btn btn-primary">Hire Now</a>
						  </div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="width: 100%;">
						<a href="">
						  <img class="card-img-top" src="admin/css/ba63aa0762728629790af731c8108127.jpg" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Servent Name</h5>
						    <p class="card-text">Servent Type > Hourly Rate:80 Taka</p>
						    <a href="#" class="btn btn-primary">Hire Now</a>
						  </div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="width: 100%;">
						<a href="">
						  <img class="card-img-top" src="admin/css/53889dfff71c0b24dd76849fe5bbad5c.jpg" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Servent Name</h5>
						    <p class="card-text">Servent Type > Hourly Rate:80 Taka</p>
						    <a href="#" class="btn btn-primary">Hire Now</a>
						  </div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="width: 100%;">
						<a href="">
						  <img class="card-img-top" src="admin/css/094b2a3d1526178188f39d10eef9fd88.jpg" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Servent Name</h5>
						    <p class="card-text">Servent Type > Hourly Rate:80 Taka</p>
						    <a href="#" class="btn btn-primary">Hire Now</a>
						  </div>
						</a>
					</div>
				</div>
			</div>
		</div>
		
		
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OTHERS</li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OUR Servent TYPES</li>
						<li><a href="#">Part Time</a></li>
						<li><a href="#">Full time</a></li>
					</ul>
				</li>

				<li class="about">
					<p>Servent team is an organized company that rents Servent  to clients at lower costs. </p>
					<ul>
						<li><a href="http://facebook.com/sonko" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/sonko" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/+sonko" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by developers.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>