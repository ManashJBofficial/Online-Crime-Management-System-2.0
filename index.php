<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home Page</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
	<link rel="icon" type="image/png" href="img/favicon_io/favicon.ico">
<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
<!-- Bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
<!-- vanilla css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
</head>
<body>

<!-- Wrapper -->
	<div class="wrapper" id="box"> 
<!-- Sidebar -->
		
      <span class="open-slide">
        <a href="#" onclick="openSlideMenu()">
          <svg width ="30" height ="30">
            <path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
           </svg>
        </a>
      </span> 
 		<div id="side-menu" class="side-nav">
	    	<a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
	    	<a href="#">Home</a>
	      	<a href="adminLogin.php">Admin Login</a>
	      	<a href="subadminLogin.php">Sub-Admin Login</a>
	      	<a href="userSignup.php">User Signup</a>
	      	<a href="userLogin.php">User Login</a>
    	</div>

	
      
<!-- Page Content -->
	<div id="content">
		<div class="jumbotron text-center">
			  <h1 class="display-4">Welcome to Online Crime Management System</h1>

		</div>
<div id="particles-js"></div>

		
	</div>

<!-- PreLoader -->
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div> 
<!-- PreLoader End -->
	
</div>
 <!-- Wrapper End -->
	<script type="text/javascript" src="js/particles/particles.js"></script>
	<script type="text/javascript" src="js/particles/app.js"></script>
	<!-- jquery -->
	<script type="text/javascript" src="js/jquery/jquery.js"></script>
<!-- Bootstrap js -->
	<script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
<!-- vanilla js -->
	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>