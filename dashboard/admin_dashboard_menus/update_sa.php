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
	<link href="https://fonts.googleapis.com/css?family=Kanit:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	
	
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">	
	<!-- Vanilla css -->
	<link rel="stylesheet" type="text/css" href="sa_style.css">
</head>
<body>
	
	
		<nav class="navbar navbar-expand-lg navbar-light sticky-top navbar-custom">
			<a class="navbar-brand" href="#">Admin Dashboard</a>
			<button class="navbar-toggler justify-content-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				

				<ul class="navbar-nav mr-auto w-100 justify-content-end px-4">
					<li class="nav-item active"><a href="../admin_dashboard.php" class="nav-link">HOME</a></li>
					<li class="nav-item"><a href="#" class="nav-link">UPDATE SUB-ADMIN</a></li>
					<li class="nav-item"><a href="case_admin.php" class="nav-link">ASSIGN CASE</a></li>
					<li class="nav-item"><a href="update_ps.php" class="nav-link">UPDATE POLICE STATION</a></li>
								
				</ul> 
				<a href="../../php/admin_logout.php"><button type="button" class="btn btn-danger">LOG OUT</button></a>
			</div>
		</nav>

		<div class="content">
			<a href="../../subadminRegister.php"><button class="btn btn-warning btn-lg" id="ps_btn">Create Sub-Admin </button></a>
			<div class="table-scrol">  
				<h1 align="center">All the Sub-Admins</h1>  
				<p><br></p>
				  
				<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
				    <table class="table table-bordered text-center table-hover" style="table-layout: fixed">  
				        <thead class="thead-dark">  
					        <tr>  
					            <th style="width:6%">First Name</th>  
					            <th style="width:6%">Last Name</th>  
					            <th style="width:5%">IO id</th>  
					            <th style="width:10%">Username</th>  
					            <th style="width:8%">Password</th>  
					            <th style="width:8%">Confirm Password</th>  
					            <th style="width:13%">Email</th>  
					            <th style="width:4%">Age</th> 
					            <th style="width:7%">City</th> 
					            <th style="width:6%">State</th>
					            <th style="width:6%">Zip Code</th>
					            <th style="width:10%">Phone no</th>
					            <th style="width:6%">Gender</th>
					            <th style="width:8%">Action </th>
					            <th style="width:8%">Action </th>
					            


					        </tr>  
				        </thead>  
<?php  
        include("connectioni.php");  
        $view_users_query="select * from create_subadmin";//select query for viewing users.  
        $run=mysqli_query($con,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
              
  			$first_name=$row[0];
  			$last_name=$row[1];
  			$ioid=$row[2];
  			$uname=$row[3];
  			$pass=$row[4];
  			$cpass=$row[5];
  			$email=$row[6];
  			$age=$row[7];
  			$city=$row[8];
  			$state=$row[9];
  			$zcode=$row[10];
  			$phoneno=$row[11];
  			$gender=$row[12];

?>	
 	
<tr>  
<!--here showing results in the table -->  
            <td><?php echo $first_name;  ?></td> 
            <td><?php echo $last_name;  ?></td>  
            <td><?php echo $ioid;  ?></td>  
            <td><?php echo $uname;  ?></td>
            <td><?php echo $pass;  ?></td>
            <td><?php echo $cpass;  ?></td>
            <td><?php echo $email;  ?></td>
            <td><?php echo $age;  ?></td>  
            <td><?php echo $city;  ?></td>
            <td><?php echo $state;  ?></td>
            <td><?php echo $zcode;  ?></td>
            <td><?php echo $phoneno;  ?></td>
            <td><?php echo $gender;  ?></td>

			<td><a href="sa_edit.php?edit=<?php echo $uname ?>"><button class="btn btn-danger">Edit</button></a>
			</td>
		
            <td><a href="sa_delete.php?delete=<?php echo $uname ?>" onclick="return checkDelete()"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  	
        <?php } ?>				     							     							        
				  
		</table>  
		<script type="text/javascript">
			function checkDelete() {
				return confirm("Are you sure you want to Delete the data?");
			}
		</script>
		</div>  
	</div>  	
		</div>
		
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



</body>
</html>