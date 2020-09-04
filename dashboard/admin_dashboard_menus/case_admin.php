<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>

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
	<link rel="stylesheet" type="text/css" href="case_admin_style.css">
</head>
<body>
	
	
		<nav class="navbar navbar-expand-lg navbar-light sticky-top navbar-custom">
			<a class="navbar-brand" href="#">Admin Dashboard</a>
			<button class="navbar-toggler justify-content-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				
				
				<ul class="navbar-nav mr-auto w-100 justify-content-end px-4 ">
					<li class="nav-item active"><a href="../admin_dashboard.php" class="nav-link ">HOME</a></li>
					<li class="nav-item"><a href="update_sa.php" class="nav-link ">UPDATE SUB-ADMIN</a></li>
					<li class="nav-item"><a href="case_admin.php" class="nav-link ">ASSIGN CASE</a></li>
					<li class="nav-item"><a href="update_ps.php" class="nav-link ">UPDATE POLICE STATION</a></li>
								
				</ul> 
				
				<a href="../../php/admin_logout.php"><button type="button" class="btn btn-danger">LOG OUT</button></a>
			</div>
		</nav>
		<!--Content-->
		<div class="content">

			<?php  
        include("../admin_dashboard_menus/connectioni.php");  
        $view_users_query="select * from fir";//select query for viewing users.  
        $run=mysqli_query($con,$view_users_query);//here run the sql query.
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
              
  			$ward_no=$row[0];
  			$ps_name=$row[1];
  			$fid=$row[2];
  			$vid=$row[3];
  			$subject=$row[4];
  			$i_date=$row[5];
  			$i_time=$row[6];
  			$i_place=$row[7];
  			$a_name=$row[8];
  			$w_name=$row[9];
  			$w_address=$row[10];
  			$f_date=$row[11];
  			$f_time=$row[12];
  			$c_details=$row[13];
  			$f_name=$row[14];
  			$l_name=$row[15];
  			$relation=$row[16];
  			$r_name=$row[17];
  			$city=$row[18];
  			$state=$row[19];
  			$p_code=$row[20];
  			$address=$row[21];
  			$phone=$row[22];
  			$e_id=$row[23];
  			$identity = $row[24];
			$identity_no = $row[25];

?>	
 		

		
			<div class="card bg-light my-5 mx-auto" style="max-width: 50rem;">
				<div class="card-header align-middle ">
					<h5><b>SUBJECT:</b> <?php echo $subject;  ?></h5> 
					
					<p class="float-right align-middle">
						<a href="fir_status.php?edit=<?php echo $fid ?>"><button type="button" class="btn btn-outline-danger">FIR STATUS</button></a>
						<a href="case_admin_confirm.php?edit=<?php echo $fid ?>"><button type="button" class="btn btn-outline-success" ><i class="fas fa-check  fa-lg px-3"></i></button></a>
					</p>
				</div>
				<div class="card-body ">
					<p>
				<b>Applicant/Victim Name:</b> <?php echo $f_name;  ?> <?php echo $l_name;  ?><br>
				 <b>FIR ID:</b> <?php echo $fid;  ?><br>
				 <b>Victim ID:</b> <?php echo $vid;  ?><br>	
				 <!--Ward No:<?php echo $ward_no;  ?><br>-->     	   
				<b>Police Station Name:</b><?php echo $ps_name;  ?><br>
				<!-- Incident Date: <?php echo $i_date;  ?><br>
				 Incident Time: <?php echo $i_time;  ?><br>
				 Incident Place: <?php echo $i_place;  ?><br>
				 Accused Name: <?php echo $a_name;  ?><br>
				 Witness(s) Name: <?php echo $w_name;  ?><br>
				 Witness(s) Address: <?php echo $w_address;  ?><br>
				 FIR Submit Date: <?php echo $f_date;  ?><br>
				 FIR Submit Time: <?php echo $f_time;  ?><br> -->
				<b>Complaint Details:</b> <?php echo $c_details;  ?><br>
				<!-- <?php echo $relation;  ?>: <?php echo $r_name;  ?> <br>-->
				<!-- City: <?php echo $city  ?> <br>
				 State: <?php echo $state  ?> <br>
				 Postal Code: <?php echo $p_code  ?> <br>
				 Address: <?php echo $address  ?> <br>-->
				 <b>Phone No:</b> <?php echo $phone  ?> <br>
				 <b>Email:</b> <?php echo $e_id  ?> <br>
				 <b> Id Proof:</b> <?php echo $identity  ?><br>
				<b> <?php echo $identity  ?> Number:</b> <?php echo $identity_no ?><br>
				
				
				    
				    </p>
				</div>
			</div>
		<?php } ?>	
		</div>

		<!--Footer -->
		<footer id="site-footer">
			<div class="container">
				<div class="row text-center custom-list">
					<div class="col-sm-4">
						<ul class="list-unstyled">
						<li><a href="../admin_dashboard.php" class="nav-link">Home</a></li>
						<li><a href="case_admin.php" class="nav-link">Assign Case</a></li>
						
					</ul>
					</div>
					<div class="col-sm-4">
						<ul class="list-unstyled">
							<li><a href="update_sa.php" class="nav-link">Update Sub-admin</a></li>
							<li><a href="../../subadminRegister.php" class="nav-link">Create Sub-Admin</a></li>
						</ul>
					</div>

					<div class="col-sm-4">
						<ul class="list-unstyled">
							<li><a href="update_ps.php" class="nav-link">Update Police Station</a></li>
							<li><a href="ps_section/add_ps.php" class="nav-link">Add Police Station</a></li>
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
<!--Vanilla js -->
<script type="text/javascript" src="case_admin_script.js"></script>
</body>
</html>