<?php
session_start();
$x=$_SESSION['vid'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>

<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cinzel:900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kanit:300" rel="stylesheet">
	
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">	
	<!-- Vanilla css -->
	<link rel="stylesheet" type="text/css" href="case_style.css">
</head>
<body>	
		<nav class="navbar navbar-expand-lg navbar-light sticky-top navbar-custom">
			<a class="navbar-brand" href="#">User Dashboard</a>
			<button class="navbar-toggler justify-content-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				

				<ul class="navbar-nav mr-auto w-100 justify-content-end px-4">
					<li class="nav-item active"><a href="../user_dashboard.php" class="nav-link" >HOME</a></li>
					<li class="nav-item"><a href="fir.php" class="nav-link">FIR</a></li>
					<li class="nav-item"><a href="case.php" class="nav-link">CASE</a></li>
					<li class="nav-item"><a href="ps.php" class="nav-link">POLICE STATION</a></li>
					<li class="nav-item "><a href="contact.php" class="nav-link">CONTACT US</a></li>
				</ul> 
				<a href="../../php/user_logout.php"><button type="button" class="btn btn-danger" >LOG OUT</button></a>
			</div>
			<div class="session_btn">
				<button type="button" class="btn btn-outline-danger" disabled hidden><?php echo $x; ?> </button>
			</div>
		</nav>

		<div class="content">
			
<?php  
        include("../sub_admin_dashboard_menus/connectioni.php");  
        $rs1=mysqli_query($con,"SELECT * FROM `user_signup` WHERE vid='$x'");
        
        while ($row=mysqli_fetch_array($rs1)) 
		{
		$vid=$row[2];	
		}	

       
		$rs=mysqli_query($con,"SELECT * FROM `case_diary` WHERE vid='$vid'");
		 	
		while($row=mysqli_fetch_array($rs))
		{  
  			
  			$case_status=$row[23];
  			$fid=$row[1];
  			$vid=$row[13];
  			$subject=$row[7];
  			
 
?>	
		<div class="card bg-light my-5 mx-auto " style="max-width: 40rem;">
				<div class="card-header align-middle ">
					<h5>SUBJECT:</h5> <?php echo $subject;  ?>
					<h5>FIR ID:</h5>  <?php echo $fid;  ?>
					<h5>VICTIM ID:</h5>  <?php echo $vid;  ?>
					<h5>CASE STATUS:</h5>  <?php echo $case_status;  ?><br><br>
				<div class="text-center">		
					<a href="case.php"><button type="button" class="btn btn-outline-success center-block">Go To Previous Page</button></a>
				</div>	
				</div>
				
			
			</div>



		<?php } ?>
		</div>

		
		
		<footer id="site-footer">
			<div class="container">
				<div class="row text-center custom-list">
					<div class="col-sm-4">
						<ul class="list-unstyled">
						<li><a href="../../index.php" class="nav-link">Home</a></li>
						<li><a href="../user_dashboard.php" class="nav-link">User Dashboard</a></li>
						
					</ul>
					</div>
					<div class="col-sm-4">
						<ul class="list-unstyled">
							<li><a href="fir.php" class="nav-link">File a FIR</a></li>
							<li><a href="case.php" class="nav-link">Case Status</a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<ul class="list-unstyled">
							<li><a href="ps.php" class="nav-link">Police Station Details</a></li>
							<li><a href="contact.php" class="nav-link">Contact Us</a></li>
						</ul>
					</div>
					
				</div>
				
			</div>
			
			<div class="social-networks">
				<a href="https://www.twitter.com/ocms" class="twitter"><i class="fab fa-twitter"></i></a>
				<a href="https://www.facebook.com/ocms" class="facebook"><i class="fab fa-facebook-f"></i></a>
				<a href="mailto:ocms@gmail.com?subject=Mail from Our Site" class="google"><i class="fab fa-google-plus-g"></i></a>
			</div>
			<div class="footer-copyright">
            	<p>&copy;2019 All Rights Reserved | Designed By <a href="https://www.linkedin.com/in/manashjb/"><span>Manash Jyoti Baruah</span></a> </p>
        	</div>


		</footer>


<!-- Bootstrap js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>