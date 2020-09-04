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
	<link rel="stylesheet" type="text/css" href="case_diary_style.css">
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
       $rs=mysqli_query($con,"SELECT * FROM `fir` WHERE fid='$edit_record'");
			
		while($row=mysqli_fetch_array($rs))
			{

        //include("../admin_dashboard_menus/connectioni.php");  
        //$view_users_query="select * from fir";//select query for viewing users.  
        //$run=mysqli_query($con,$view_users_query);//here run the sql query.
        //while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        //{  
              
  			$ps_name=$row[1];
  			$fid=$row[2];
  			$vid=$row[3];
  			$subject=$row[4];
  			$i_date=$row[5];
  			$i_time=$row[6];
  			$f_date=$row[11];
  			$f_time=$row[12];
  			$w_name=$row[9];
  			$w_address=$row[10];
  			$a_name=$row[8];
  			$c_details=$row[13];
  			$f_name=$row[14];
  			$l_name=$row[15];


  			


?>
			<section class="container-fluid">
				<section class="row justify-content-center">
					<section class="col-12 col-sm-6 col-md-6">
						<form class="form-container" action="case_diary_later.php" method="POST" enctype="multipart/form-data">
							<h2 class="text-center font-weight-bold">PROCESS CASE DIARY</h2>
  						<!--<h3 class="text-left my-4">Details of Complaint</h3>-->
  						
  						<div class="form-group pt-4">
  							<label for="ps_name">Police Station Name</label>
			      			<select id="ps_name" class="form-control" name="ps_name" >
			      					<option value="">--Select <?php echo $ps_name;  ?> From the List--</option>
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
						<div class="form-row">
			    			<div class="col">
			    				<label for="fid">FIR Id</label>
			      				<input type="text" class="form-control" placeholder="Enter FIR id" name="fid" id="fid" required="required" value="<?php echo $fid;  ?>">
			    			</div>
			    			<div class="col">
			    				<label for="ioid">Investigation Officer Id</label>
			      				<input type="text" class="form-control" placeholder="Enter IO id" name="ioid" id="ioid" required="required" value="<?php echo $x;  ?>">
			    			</div>
  						</div>
  							<div class="form-group">
  								<label for="io_name">Investigation Officer Name</label>
        						<input type="text" class="form-control" name="io_name" placeholder="Enter IO Name" required="required" id="io_name">
        					</div>
							<div class="form-row">
								<div class="col">
			    				<label for="cd_submit_date">Case-Diary Submit Date</label>
			      				<input type="date" class="form-control" placeholder="Enter Case-Diary Submit Date" name="cd_submit_date" id="cd_submit_date">
			      			</div>
							<div class="col">
			    				<label for="v_location">Visited Location</label>
			      				<input type="text" class="form-control" placeholder="Enter Visited Location" name="v_location" id="v_location">
			      			</div>
			    			</div>
			    			<div class="form-group">
  								<label for="ipc">Offense IPC</label>
        						<input type="text" class="form-control" name="ipc" placeholder="Use '/' to separate from each other" required="required" id="ipc">
        					</div>
							<h3 class="text-left my-4">Case Summery</h3>
							<div class="form-group">
			    				<label for="subject">Subject</label>
			      				<input type="text" class="form-control" placeholder="Subject" name="subject" id="subject" value="<?php echo $subject;  ?>">
			    			</div>
							<div class="form-row">
								<div class="col">
			    				<label for="i_date">Incident Date</label>
			      				<input type="date" class="form-control" placeholder="Incident Date" name="i_date" id="i_date" value="<?php echo $i_date;  ?>">
			      			</div>
			      			<div class="col">
			    				<label for="i_time">Incident Time</label>
			      				<input type="time" class="form-control" placeholder="Subject" name="i_time" id="i_time" value="<?php echo $i_time;  ?>">
			      			</div>
			    			</div>
			    			<div class="form-row">
								<div class="col">
			    				<label for="f_date">FIR Submit Date</label>
			      				<input type="date" class="form-control" placeholder="FIR Submit Date" name="f_date" id="f_date" value="<?php echo $f_date;  ?>">
			      			</div>
			      			<div class="col">
			    				<label for="f_time">FIR Submit Time</label>
			      				<input type="time" class="form-control" placeholder="FIR Submit Time" name="f_time" id="f_time" value="<?php echo $f_time;  ?>">
			      			</div>
			    			</div>
			    			
			    			<div class="form-group">
			    			
			    				<label for="c_details">Details According To FIR</label>
			      				<textarea class="form-control" rows="5" id="c_details" name="c_details"><?php echo $c_details;  ?></textarea>		
			    			</div>
			    			<h3 class="text-left my-4">Victim</h3>
  						<div class="form-row">
			    			<div class="col">
			    				<label for="vid">Victim ID</label>
			      				<input type="text" class="form-control" placeholder="Enter Victim ID" name="vid" id="vid" value="<?php echo $vid;  ?>">
			    			</div>
			    			<div class="col">
			    			
			    				<label for="v_name">Victim Name</label>
			      				<input type="text" class="form-control" placeholder="Enter Victim Name" name="v_name" id="v_name" value="<?php echo $f_name;  ?> <?php echo $l_name;  ?>">			
			    		</div>
			    		</div>	
			    		<div class="form-group">
  							
			    				<label for="v_statement">Victim Statements</label>
        						<textarea class="form-control" rows="5" id="v_statement" name="v_statement"></textarea>
			    		</div>
			    		<h3 class="text-left my-4">Witness</h3>
        				<div class="form-row">
        					<div class="col">
			    				<label for="w_name">Witness Name(s)</label>
			      				<input type="text" class="form-control" placeholder="Enter Witness Name" name="w_name" id="w_name" value="<?php echo $w_name;  ?>">
			    			</div>
			    			<div class="col">
			    				<label for="w_address">Witness Address(s)</label>
			      				<input type="text" class="form-control" placeholder="Enter Witness Address" name="w_address" id="w_address" value="<?php echo $w_address;  ?>">
			    			
			    		</div>
			    		</div>	
  						<div class="form-group">
  							
			    				<label for="w_statement">Witness Statements(s)</label>
        						<textarea class="form-control" rows="5" id="w_statement" name="w_statement"></textarea>
			    		</div>
						<h3 class="text-left my-4">Accused/Suspect</h3>
			    		<div class="form-row">
			    			<div class="col">
			    				<label for="a_id">Accused ID</label>
			      				<input type="text" class="form-control" placeholder="Enter Accused ID" name="a_id" id="a_id">
			    			</div>
			    			<div class="col">
			    			
			    				<label for="a_name">Accused Name</label>
			      				<input type="text" class="form-control" placeholder="Enter Accused Name" name="a_name" id="a_name" value="<?php echo $a_name;  ?>">			
			    		</div>
			    		</div>	
			    		<div class="form-group">
  							
			    				<label for="a_statement">Accused Statements</label>
        						<textarea class="form-control" rows="5" id="a_statement" name="a_statement"></textarea>
			    		</div>
			    		<h3 class="text-left my-4">IO Statement On the Case</h3>
			    		<div class="form-group">
			    				<label for="io_statement">IO Statement</label>
        						<textarea class="form-control" rows="5" id="io_statement" name="io_statement"></textarea>
			    		</div>
			    		<h3 class="text-left my-4">Case Status</h3>
			    		<div class="form-group">			    			
			    				<label for="case_status">Case Status</label>
			      				<textarea class="form-control" rows="5" id="case_status" name="case_status"></textarea>		
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