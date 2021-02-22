<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sub-Admin Login</title>
	<!-- Materialize CSS -->
  <link rel="stylesheet" type="text/css" href="css/materialize/materialize.min.css"> 
<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- Bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
<!-- vanilla css -->
	<link rel="stylesheet" type="text/css" href="css/subadminLoginstyle.css">
</head>
<body>
	<section class="container-fluid">
		<section class="row justify-content-center">
			<section class="col-12 col-sm-6 col-md-3">
				<img src="img/user.png" class="bg">
				<form class="form-container" action="php/subadminloginconfirm.php" method="POST" name="LoginForm">
						<h2 class="text-center font-weight-bold">Sub-Admin Login</h2>
			  			<div class="form-group">
					    <input type="text" class="form-control" id="text" placeholder="ioid" name="ioid">
					    <input type="text" class="form-control" id="text"  placeholder="Username" name="uname">
					    </div>
					 	<div class="form-group">
					    
					   <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
					  	</div>
					  	<button type="submit" class="btn btn-primary btn-block" name="submit" onclick="return valid_login()">Login</button>
				</form>
				<p class="my-5 text-center">For demo purpose - <br>
				SubAdmin ioid is: j2314<br>
				SubAdmin Username is : julia2 <br>
				SubAdmin Password is: 1234</p>
			</section>
		</section>
		
	</section>
	<div class="fixed-action-btn">
    <a href="index.php" class="btn-floating waves-effect waves-red red white-text btn-large pulse">Home</a>
  </div>
<!-- Bootstrap js -->
	<script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
	<!-- Materialize js -->
  <script type="text/javascript" src="js/materialize/materialize.min.js"></script>
  <!-- Form Validation js -->
  <script type="text/javascript" src="./js/login_form_valid.js"></script>
</body>
</html>