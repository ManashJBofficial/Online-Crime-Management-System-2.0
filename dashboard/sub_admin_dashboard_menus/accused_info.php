<?php
session_start();
$x=$_SESSION['ioid'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sub-Admin Dashboard</title>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cinzel:900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kanit:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">	
	<!-- Vanilla css -->
	<link rel="stylesheet" type="text/css" href="a_style.css">
</head>
<body>
	
	
		<nav class="navbar navbar-expand-lg navbar-light sticky-top navbar-custom">
			<a class="navbar-brand" href="#">Sub-Admin Dashboard</a>
			<button class="navbar-toggler justify-content-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				

				<ul class="navbar-nav mr-auto w-100 justify-content-end px-4">
					<li class="nav-item active"><a href="../sub_admin_dashboard.php" class="nav-link">HOME</a></li>
					<li class="nav-item"><a href="case_sa.php" class="nav-link">CASE</a></li>
					<li class="nav-item"><a href="cd_sa.php" class="nav-link">CASE-DIARY</a></li>
					<li class="nav-item"><a href="accused_sa.php" class="nav-link">ACCUSED</a></li>
					
				</ul> 
				<a href="../../php/sub_admin_logout.php"><button type="button" class="btn btn-danger">LOG OUT</button></a>
				<button type="button" class="btn btn-secondary " disabled hidden><?php echo $x; ?></button>
			</div>
		</nav>

		<div class="content">
			

  			<?php  
			include("connectioni.php");
		$view_users_query=mysqli_query($con,"SELECT * FROM `case_admin_confirm` WHERE ioid='$x'");
        if($row=mysqli_fetch_array($view_users_query))
        	$fid=$row['fid'];
        
       $rs=mysqli_query($con,"SELECT * FROM `case_diary` WHERE fid='$fid'");
			
		while($row=mysqli_fetch_array($rs))
			{
              
  			
  			$fid=$row[1];
  			$ipc=$row[6];
  			$a_id=$row[19];
  			$a_name=$row[20];
?>

			
			<section class="container-fluid">
				<section class="row justify-content-center">
					<section class="col-12 col-sm-6 col-md-6">
						<form class="form-container" action="accused_info_later.php" method="POST" enctype="multipart/form-data">
							<h2 class="text-center font-weight-bold">ADD ACCUSED INFO</h2>
							
						<div class="form-row">
							<div class="col">
			    				<label for="fid">FIR Id</label>
			      				<input type="text" class="form-control" placeholder="Enter FIR id" name="fid" id="fid" value="<?php echo $fid;  ?>">
			    			</div>
			    			<div class="col">
  								<label for="cs_id">Charge-Sheet ID</label>
        						<input type="text" class="form-control" name="cs_id" placeholder="Enter Charge-Sheet ID"  id="cs_id" value="<?php echo rand(1000,9999);  ?>">
        					</div>
			    			
			    			
  						</div>
  						<div class="form-group">
							
			    				<label for="ipc">Offense IPC Number</label>
			      				<input type="text" class="form-control" placeholder="Enter IPC" name="ipc" id="ipc" value="<?php echo $ipc;  ?>">
			    			</div>
			    			
			    			
  						
  							
						<div class="form-row">
			    			<div class="col">
			    				<label for="a_id">Accused ID</label>
			      				<input type="text" class="form-control" placeholder="Enter Accused ID" name="a_id" id="a_id" value="<?php echo $a_id;  ?>">
			    			</div>
			    			<div class="col">
			    				<label for="a_name">Accused Name</label>
			      				<input type="text" class="form-control" placeholder="Enter Accused Name" name="a_name" id="a_name" value="<?php echo $a_name;  ?>">
			    			</div>
  						</div>
  							<div class="form-group">
  								<label for="a_address">Accused Address</label>
        						<textarea class="form-control" rows="5" id="a_address" name="a_address"></textarea>
        					</div>
        					
							<div class="form-group">
            					<button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Submit</button>
        					</div>
						</form>
						
					</section>					
				</section>
			</section>
			<?php } ?>

		</div>
	
		<footer id="site-footer">
			<div class="container">
				<div class="row text-center custom-list">
					<div class="col-sm-4">
						<ul class="list-unstyled">
						<li><a href="../../index.php" class="nav-link">Home</a></li>
						<li><a href="../sub_admin_dashboard.php" class="nav-link">Sub-Admin Dashboard</a></li>
						
					</ul>
					</div>
					<div class="col-sm-4">
						<ul class="list-unstyled">
							<li><a href="case_sa.php" class="nav-link">Manage Case</a></li>
							<li><a href="cd_sa.php" class="nav-link">Manage Case Diary</a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<ul class="list-unstyled">
							<li><a href="accused_sa.php" class="nav-link">Accused Info</a></li>
							
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

<script type="text/javascript" src="case_sa_script.js"></script>
</body>
</html>