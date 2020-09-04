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
	<link rel="stylesheet" type="text/css" href="ps_style.css">
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
			<div class="table-scrol">  
        <h1 id="ps_header_text"  class="py-3" align="center">Police Station Details</h1> 
        
        
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
         
            <table class="table table-bordered text-center table-hover">  
                <thead class="thead-dark">  
                  <tr >  
                      <th style="width:6%">Police Station Id</th>  
                      <th style="width:8%">Police Station Name</th>  
                      <th style="width:10%">Officer in Charge</th>  
                      <th style="width:10%">Phone Number</th>  
                      <th style="width:7%">City</th>  
                      <th style="width:7%">State</th>  
                      
                  </tr>  
                </thead>  
<?php  
        include("../admin_dashboard_menus/connectioni.php");  
        $view_users_query="select * from police_station";//select query for viewing users.  
        $run=mysqli_query($con,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
              
        $ps_id=$row[0];
        $ps_name=$row[1];
        $oc_name=$row[2];
        $ps_ph=$row[3];
        $ps_city=$row[4];
        $state=$row[5];
?>    

<tr>  
<!--here showing results in the table -->  
            <td><?php echo $ps_id;  ?></td>  
            <td><?php echo $ps_name;  ?></td>  
            <td><?php echo $oc_name;  ?></td>  
            <td><?php echo $ps_ph;  ?></td>
            <td><?php echo $ps_city;  ?></td>
      <td><?php echo $state;  ?></td>
        </tr>   
        <?php 
        } 
      ?>                                                    
          
    </table>  


    </div>  
  </div>
  </div>

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