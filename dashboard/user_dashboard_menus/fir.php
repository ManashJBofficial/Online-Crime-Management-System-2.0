<?php
session_start();
$x=$_SESSION['vid'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	
	<!--- Font Awesome -->
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
	<link rel="stylesheet" type="text/css" href="fir_style.css">
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
				<a href="../../php/user_logout.php"><button type="button" class="btn btn-danger">LOG OUT</button></a>
			</div>
			
			<div class="session_btn">
				<button type="button" class="btn btn-outline-danger" hidden disabled><?php echo $x; ?> </button>
			</div> 
		</nav>

		<div class="content">
			<section class="container-fluid">
				<section class="row justify-content-center">
					<section class="col-12 col-sm-6 col-md-6">
						<form class="form-container" action="./../../php/fir_back.php" method="POST" enctype="multipart/form-data">
							<h2 class="text-center font-weight-bold">FILE FIR</h2>
							<h3 class="text-left my-4">Submit To Police Station</h3>
						<div class="form-row">
			    			<div class="col">
			    				<label for="ward_no">Ward No</label>
			      				<input type="text" class="form-control" placeholder="Enter Ward No" name="ward_no" id="ward_no" required="required">
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
  						<h3 class="text-left my-4">Details of Complaint/Information to Police</h3>
  							
						<div class="form-row">
			    			<div class="col">
			    				<label for="fid">FIR Id</label>
			      				<input type="text" class="form-control" placeholder="Enter FIR id" name="fid" id="fid" value="<?php echo(mt_rand(999,9999));?>">
			    			</div>
			    			<div class="col">
			    				<label for="vid">Victim Id</label>
			      				<input type="text" class="form-control" placeholder="Enter Victim id" name="vid" id="vid">
			    			</div>
  						</div>
  							<div class="form-group">
  								<label for="subject">Subject</label>
        						<input type="text" class="form-control" name="subject" placeholder="Enter Subject" required="required" id="subject" required="required">
        					</div>


						<div class="form-row">
			    			<div class="col">
			    				<label for="i_date">Incident Date</label>
			      				<input type="date" class="form-control" placeholder="Enter Incident Date" name="i_date" id="i_date" required="required">
			    			</div>
			    			<div class="col">
			    				<label for="i_time">Incident Time</label>
			      				<input type="time" class="form-control" placeholder="Enter Incident Time" name="i_time" id="i_time" required="required">
			    			</div>
			    			<div class="col">
			    				<label for="i_place">Incident Place</label>
			      				<input type="text" class="form-control" placeholder="Enter Incident Place" name="i_place" id="i_place" required="required">
			    			</div>
  						</div> 
  							<div class="form-group">
  								<label for="a_name">Accused Name</label>
        						<input type="text" class="form-control" name="a_name" placeholder="Enter Accused Name" id="a_name">
        					</div> 
        				<div class="form-group">
			    			
			    				<label for="w_name">Witness Name(s)</label>
			      				<input type="text" class="form-control" placeholder="Enter Witness Name" name="w_name" id="w_name" required="required">
			    			
			    		</div>	
  						<div class="form-group">
  							
			    				<label for="w_address">Witness Address(s)</label>
        						<textarea class="form-control" rows="5" id="w_address" name="w_address" required="required"></textarea>
			    		</div>



        				<div class="form-row">
			    			<div class="col">
			    				<label for="f_date">FIR Submit Date</label>
			      				<input type="date" class="form-control" placeholder="Enter FIR Submission Date" name="f_date" id="f_date" required="required">
			    			</div>
			    			<div class="col">
			    				<label for="f_time">FIR Submit Time</label>
			      				<input type="time" class="form-control" placeholder="Enter FIR Submission Time" name="f_time" id="f_time" required="required">
			    			</div>
  						</div>
  							<div class="form-group">
  								<label for="c_details">Complaint Details</label>
        						<textarea class="form-control" rows="5" id="c_details" name="c_details" required="required"></textarea>
        					</div>
        					<h3 class="text-left my-4">Your Details</h3>
						<div class="form-row">
			    			<div class="col">
			    				<label for="f_name">First Name</label>
			      				<input type="text" class="form-control" placeholder="First name" name="f_name" id="f_name" required="required">
			    			</div>
			    			<div class="col">
			    				<label for="l_name">Last Name</label>
			      				<input type="text" class="form-control" placeholder="Last name" name="l_name" id="l_name" required="required">
			    			</div>
			    			<div class="col">	
			      				<label class="radio-inline"><input type="radio" name="relation" value="Son of" checked >S/O</label>
								<label class="radio-inline"><input type="radio" name="relation" value="Daughter of">D/O</label>
								<label class="radio-inline"><input type="radio" name="relation" value="Wife of">W/O</label>
							</div>
							<div class="col">
			      				<input type="text" class="form-control" placeholder="Name" name="r_name" id="r_name" required="required">
			    			</div>
			  			</div> 
			  			<div class="form-row">
			    			<div class="col">
			    				<label for="city">City</label>
			      				<input type="text" class="form-control" placeholder="Enter City" name="city" id="city" required="required">
			    			</div>
			    			<div class="col">
			    				<label for="state">State</label>
			      				<input type="text" class="form-control" placeholder="Enter State" name="state" id="state" required="required">
			    			</div>
			    			<div class="col">
			    				<label for="p_code">Postal Code</label>
			      				<input type="text" class="form-control" placeholder="Enter Postal Code" name="p_code" id="p_code" required="required">
			    			</div>
  						</div>
  							<div class="form-group">
  								<label for="address">Address</label>
        						<textarea class="form-control" rows="3" id="address" name="address" required="required"></textarea>
        					</div>
        					<div class="form-group">
  								<label for="phone">Phone No</label>
        						<input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" required="required" id="phone">
        					</div>
        					<div class="form-group">
  								<label for="e_id">Email</label>
        						<input type="text" class="form-control" name="e_id" placeholder="Enter Email Address" required="required" id="e_id">
        					</div>
							<div class="form-row">
								<label for="id_proof">Identity Proof</label><br>
								<div class="col">
									<div class="custom-control custom-radio custom-control-inline">
		  							<input type="radio" id="voter_no" name="identity" value="Voter Card" class="custom-control-input" id="voter_no" checked>
		  							<label class="custom-control-label" for="voter_no">Voter No</label>
									</div>
								</div>
								<div class="col">
									<div class="custom-control custom-radio custom-control-inline">
		  							<input type="radio" id="pan_no" name="identity" value="Pan Card" class="custom-control-input" id="pan_no" >
		  							<label class="custom-control-label" for="pan_no">Pan No</label>
									</div>
								</div>
								<div class="col">
									<div class="custom-control custom-radio custom-control-inline">
		  							<input type="radio" id="adhar_no" name="identity" value="Adhar Card" class="custom-control-input" id="adhar_no">
		  							<label class="custom-control-label" for="adhar_no">Adhar No</label>
									</div>
								</div>
							</div>

							<div class="form-group">
			      				<input type="text" class="form-control" placeholder="Enter Number of your above mentioned Identity Proof" name="identity_no" id="identity_no" required="required">
			    			</div>


        					<div class="form-check checked">
								<label class="form-check-label my-3">
							    	<input type="checkbox" class="form-check-input" value="true" required="required">I, hereby verify that the above details i gave in the FIR are to be true to my knowledge. 
								</label>
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