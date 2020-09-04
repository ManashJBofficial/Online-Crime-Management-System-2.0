<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cinzel:900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kanit:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<!-- Vanilla css -->
	<link rel="stylesheet" type="text/css" href="ps_edit_style.css">
</head>
<body>
	
	
		<nav class="navbar navbar-expand-lg navbar-light sticky-top navbar-custom">
			<a class="navbar-brand" href="#">Admin Dashboard</a>
			<button class="navbar-toggler justify-content-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				

				<ul class="navbar-nav mr-auto w-100 justify-content-end px-4">
					<li class="nav-item active"><a href="../../admin_dashboard.php" class="nav-link">HOME</a></li>
					<li class="nav-item"><a href="../update_sa.php" class="nav-link">UPDATE SUB-ADMIN</a></li>
					<li class="nav-item"><a href="../case_admin.php" class="nav-link">ASSIGN CASE</a></li>
					<li class="nav-item"><a href="../update_ps.php" class="nav-link">UPDATE POLICE STATION</a></li>
								
				</ul> 
				<a href="../../php/admin_logout.php"><button type="button" class="btn btn-danger">LOG OUT</button></a>
			</div>
		</nav>
		<?php 
			include("../connectioni.php");
			$edit_record = $_GET['edit'];
			$rs=mysqli_query($con,"SELECT * FROM `police_station` WHERE ps_id='$edit_record'");
			
			while($row=mysqli_fetch_array($rs))
			{

		?>

		<div class="content">
			<section class="justify-content-center">
			<div class="signup-form ">
		    <form action="ps_edit_later.php" method="POST">
				<h2>Edit Police Station</h2>
		        <div class="form-group">
					<div class="form-row">
		    			<div class="col">
		      				<input type="text" class="form-control" placeholder="Id" name="ps_id" value="<?php echo $row['ps_id']; ?>">
		    			</div>
		    			<div class="col">
		      				<input type="text" class="form-control" placeholder="Police Station Name" name="ps_name" value="<?php echo $row['ps_name']; ?>">
		    			</div>
		  			</div>      	
		       </div>
		       <div class="form-group">
		        	<input type="text" class="form-control" name="oc_name" placeholder="Officer in Charge" required="required" value="<?php echo $row['oc_name']; ?>">
		        </div>
		        <div class="form-group">
		        	<input type="text" class="form-control" name="ps_ph" placeholder="Phone Number" required="required" value="<?php echo $row['ps_ph']; ?>">
		        </div>
			

				<div class="form-group">
		            <input type="text" class="form-control" name="ps_city" placeholder="City" required="required" value="<?php echo $row['ps_city']; ?>">
		        </div>
				<div class="form-group">
		            <input type="text" class="form-control" name="state" placeholder="State" required="required" value="<?php echo $row['state']; ?>">
		        </div> 
		        <div class="form-group"><a href="ps_edit_later.php">
		            <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Update</button></a>
		        </div>
		    </form>
		</div>

		</section>	     						

<?php 

		}
?>
			
</div>
		
	<footer id="site-footer">
			<div class="container">
				<div class="row text-center custom-list">
					<div class="col-sm-4">
						<ul class="list-unstyled">
						<li><a href="../../admin_dashboard.php" class="nav-link">Home</a></li>
						<li><a href="../case_admin.php" class="nav-link">Assign Case</a></li>
						
					</ul>
					</div>
					<div class="col-sm-4">
						<ul class="list-unstyled">
							<li><a href="../update_sa.php" class="nav-link">Update Sub-admin</a></li>
							<li><a href="../../../subadminRegister.php" class="nav-link">Create Sub-Admin</a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<ul class="list-unstyled">
							<li><a href="../update_ps.php" class="nav-link">Update Police Station</a></li>
							<li><a href="add_ps.php" class="nav-link">Add Police Station</a></li>
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