<?php
session_start();
$x=$_SESSION['vid'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
  <!-- Fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC:900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
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
	<link rel="stylesheet" type="text/css" href="contact_style.css">
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
			 <h1 class="hello">Don't Bother to Say Hi !</h1>
    <div class="card-group">
      
  <div class="card">
    
    <div class="card-body text-center py-5">
      <i class="fas fa-map-marker-alt fa-4x"></i>
      <h4 class="card-title py-3">Address</h4>
      <h5 class="card-text">Ganeshguri, Guwahati</h5>
      <h5 class="card-text">Assam</h5>
      
    </div>
    
  </div>
  <div class="card">
    
    <div class="card-body text-center  py-5">
      <i class="fas fa-phone fa-4x"></i>
      <div class="htext">
      <h4 class="card-title py-3" >Phone</h4>
  </div>
      <h5 class="card-title">Mobile : 8636543178 / 8446326157</h5>
      <h5 class="card-title">Landline : 0361-269-4021 / 0361-444-6611</h5>
    </div>
    
  </div>
  <div class="card ">
   
    <div class="card-body py-5">
    	<div class="text-center">
      <i class="far fa-comment-dots fa-4x"></i>
  </div>
     <h4 class="card-title py-3 text-center">Social Network</h4>
      
      <table style="text-align: center; font-weight: bold; font-family: 'Montserrat', sans-serif; ">
      	<tr>
      		<td><img src="../../img/flat-social-media-icons/gmail.png" style="height: 40px; width: 40px;">&nbsp;&nbsp;&nbsp;&nbsp;</td>
      		<td>ocms@gmail.com</td>
      	</tr>
      	<tr>
      		<td><img src="../../img/flat-social-media-icons/facebook.png" style="height: 40px; width: 40px;">&nbsp;&nbsp;&nbsp;&nbsp;</td>
      		<td>www.facebook.com/ocms</td>
      	</tr>
      	<tr>
      		<td><img src="../../img/flat-social-media-icons/twitter.png" style="height: 40px; width: 40px;">&nbsp;&nbsp;&nbsp;&nbsp;</td>
      		<td>www.twitter.com/ocms</td>
      	</tr>
      	<tr>
      		<td><img src="../../img/flat-social-media-icons/whatsapp.png" style="height: 40px; width: 40px;">&nbsp;&nbsp;&nbsp;&nbsp;</td>
      		<td>(+91)8638043871</td>
      	</tr>
      	
      </table>


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