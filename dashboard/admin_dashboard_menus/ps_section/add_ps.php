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
	<link rel="stylesheet" type="text/css" href="add_ps_style.css">
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
				<a href="../..//../php/admin_logout.php"><button type="button" class="btn btn-danger">LOG OUT</button></a>
			</div>
		</nav>

		<div class="content">
			<section class="container-fluid">
				<section class="row justify-content-center">
					<section class="col-12 col-sm-6 col-md-6">
						<form class="form-container" action="../../../php/add_ps_back.php" method="POST">
							<h2 class="text-center font-weight-bold my-4">ADD POLICE STATION DETAILS</h2>
							
						<div class="form-row my-2">
			    			<div class="col">
			    				<label for="ps_id">Id</label>
			      				<input type="text" class="form-control" placeholder="Enter Id" name="ps_id" id="ps_id" required="required">
			    			</div>
			    			<div class="col">
			    				<label for="ps_name">Police Station Name</label>
			      				<select id="ps_name" class="form-control" name="ps_name" required="required">
			      					<option value="">--Select Police Station--</option>
			      					<option value="Sonapur">Sonapur</option>
			      					<option value="Khetri">Khetri</option>
			      					<option value="Basistha">Basistha</option>
			      					<option value="Hatigaon">Hatigaon</option>
			      					<option value="Dispur">Dispur</option>
			      					<option value="Bhangagarh">Bhangagarh</option>
			      					<option value="Panbazar">Panbazar</option>
			      					<option value="Paltanbazar">Paltanbazar</option>
			      					<option value="Latasil">Latasil</option>
			      					<option value="Chandmari">Chandmari</option>
			      					<option value="Geetanagar">Geetanagar</option>
			      					<option value="Noonmati">Noonmati</option>
			      					<option value="Pragjyotishpur">Pragjyotishpur</option>
			      					<option value="All_Women_P.S_Ghy_City">All Women P.S Ghy City</option>
			      					<option value="Sachal">Sachal</option>
			      					<option value="Azara">Azara</option>
			      					<option value="Gorchuk">Gorchuk</option>
			      					<option value="Fatasil_Ambari">Fatasil Ambari</option>
			      					<option value="Jalukbari">Jalukbari</option>
			      					<option value="Bharalumukh">Bharalumukh</option>
			      					<option value="Maligaon">Maligaon</option>
			      					<option value="Borjhar">Borjhar</option>
			      					<option value="Khanapara">Khanapara</option>
			      					<option value="Jorabat">Jorabat</option>
			      					<option value="Kamakhya">Kamakhya</option>
			      					<option value="Fancy Bazar">Fancy Bazar</option>
			      					<option value="Birubari">Birubari</option>
			      					<option value="I.S.B.T">I.S.B.T</option>
			      					<option value="Panikhaiti">Panikhaiti</option>
			      					<option value="Bhagadattapur">Bhagadattapur</option>
			      					<option value="Udalbakra">Udalbakra</option>
			      				</select>
			    			</div>
  						</div>  
  						
  							<div class="form-group">
  								<label for="oc_name">Name of Officer in Charge/IC</label>
        						<input type="text" class="form-control" name="oc_name" placeholder="Enter Name of OC/IC" required="required" id="oc_name">
        					</div>
  							
			  			<div class="form-row">
			    			<div class="col">
			    				<label for="ps_city">City</label>
			      				<input type="text" class="form-control" placeholder="Enter City" name="ps_city" id="ps_city" required="required">
			    			</div>
			    			<div class="col">
			    				<label for="state">State</label>
			      				<input type="text" class="form-control" placeholder="Enter State" name="state" id="state" required="required">
			    			</div>
  						</div>
  							
        					<div class="form-group">
  								<label for="ps_ph">Phone No</label>
        						<input type="text" class="form-control" name="ps_ph" placeholder="Enter Phone Number" required="required" id="ps_ph" required="required">
        					</div>
							<div class="form-group">
            					<button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Submit</button>
        					</div>
						</form>
						
					</section>					
				</section>
			</section>
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