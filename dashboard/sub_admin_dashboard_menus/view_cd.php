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
	<link rel="stylesheet" type="text/css" href="view_fir_style.css">
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
        $edit_record = $_GET['edit'];
       $rs=mysqli_query($con,"SELECT * FROM `case_diary` WHERE fid='$edit_record'");
			
		while($row=mysqli_fetch_array($rs))
			{
              
  		$ps_name = $row[0];
		$fid = $row[1];
		$ioid = $row[2];
		$io_name =$row[3];
		$cd_submit_date = $row[4];
		$v_location = $row[5];
		$ipc = $row[6];
		$subject = $row[7];
		$i_date =$row[8];
		$i_time =$row[9];
		$f_date =$row[10];
		$f_time =$row[11];
		$c_details = $row[12];
		$vid = $row[13];
		$v_name = $row[14];
		$v_statement =$row[15];
		$w_name = $row[16];
		$w_address = $row[17];
		$w_statement = $row[18];
		$a_id = $row[19];
		$a_name = $row[20];
		$a_statement = $row[21];
		$case_status = $row[22];


?>	
 		

		
			<div class="card bg-light mx-auto my-5 " style="max-width: 40rem;">
				<div class="card-header align-middle ">
					<h5>CASE DIARY: <?php echo $fid;  ?></h5> 
					
					
				</div>
				
				<div class="card-body">
					<p>
				<i><b>Victim Name:</b> <?php echo $v_name;  ?><br>
				<b>Witness(s) Name:</b> <?php echo $w_name;  ?><br>
				<b>Accused Name:</b> <?php echo $a_name;  ?></i><br><br>
				<b>Police Station Name:</b> <?php echo $ps_name;  ?><br>
				<b>Offense IPC:</b> <?php echo $ipc;  ?><br>

				<b>Officer in Charge Name:</b> <?php echo $io_name;  ?><br>
				<b>Case-Diary Submit Date:</b> <?php echo $cd_submit_date;  ?><br>
				<b>Visited Place:</b> <?php echo $v_location;  ?><br><br>
				
				<i><b>Subject:</b> <?php echo $subject;  ?><br></i>
				<b>Incident Date:</b> <?php echo $i_date;  ?><br>
				<b>Incident Time:</b> <?php echo $i_time;  ?><br>
				<b> FIR Submit Date:</b> <?php echo $f_date;  ?><br>
				<b> FIR Submit Time:</b> <?php echo $f_time;  ?><br> 
				<b> Complaint Details:</b> <?php echo $c_details;  ?><br><br>

				<b>Victim ID:</b> <?php echo $vid;  ?><br>
				<b>Victim Statement:</b> <?php echo $v_statement;  ?><br>
				<b>Witness(s) Name:</b> <?php echo $w_name;  ?><br>
				<b> Witness(s) Address:</b> <?php echo $w_address;  ?><br>
				<b>Witness Statement:</b> <?php echo $w_statement;  ?><br>			
				<b>Accused Id:</b> <?php echo $a_id;  ?><br>
				<b>Accused Statement:</b> <?php echo $a_statement;  ?><br>	    
				    </p>
				</div>
				<p class="float-right text-center">
						
						<a href="cd_sa.php"><button type="button" class="btn btn-outline-success" >Go To Previous Menu</button></a>
					</p>
			
			</div>

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