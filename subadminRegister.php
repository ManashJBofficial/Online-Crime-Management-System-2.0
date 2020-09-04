<!DOCTYPE html>
<html>
<head>
	<title>Sub-Admin Registration</title>

  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cinzel:900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

<!-- Materialize CSS -->
  <link rel="stylesheet" type="text/css" href="css/materialize/materialize.min.css"> 
<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- Bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
<!-- vanilla css -->
	<link rel="stylesheet" type="text/css" href="css/subadminRegisterStyle.css">
</head>
<body>

 
  <div class="content">
	<section class="justify-content-center">
	<div class="signup-form ">
    <form action="php/createsubadmin.php" method="POST">
		<h2>Create Sub-Admin</h2>
        <div class="form-group">
			<div class="form-row">
    			<div class="col">
      				<input type="text" class="form-control" placeholder="First name" name="first_name">
    			</div>
    			<div class="col">
      				<input type="text" class="form-control" placeholder="Last name" name="last_name">
    			</div>
  			</div>      	
       </div>
       <div class="form-group">
        	<input type="text" class="form-control" name="ioid" placeholder="Investigating Officer id" required="required">
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="uname" placeholder="Username" required="required">
        </div>
	

		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
        </div> 
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="age" placeholder="Age" required="required">
        </div>
          <div class="form-group">
			<div class="form-row">
    			<div class="col">
      				<input type="text" class="form-control" placeholder="City" name="city">
    			</div>
    			<div class="col">
      				<input type="text" class="form-control" placeholder="State" name="state">
    			</div>
    			<div class="col">
      				<input type="text" class="form-control" placeholder="Zip Code" name="zcode">
    			</div>
  			</div>      	
       </div>
		<div class="form-group">
        	<input type="text" class="form-control" name="phoneno" placeholder="Phone no" required="required">
        </div>

        <div class="custom-control custom-radio custom-control-inline">
		  <input type="radio" id="customRadioInline1" name="gender" value="m" class="custom-control-input">
		  <label class="custom-control-label" for="customRadioInline1">Male</label>
		</div>
		<div class="custom-control custom-radio custom-control-inline">
		  <input type="radio" id="customRadioInline2" name="gender" value="f" class="custom-control-input">
		  <label class="custom-control-label" for="customRadioInline2">Female</label>
		</div>
		<div class="form-group">
            <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>

</section>
</div>
  <div class="fixed-action-btn">
    <a href="dashboard/admin_dashboard.php" class="btn-floating waves-effect waves-red red white-text btn-large pulse">Home</a>
  </div>

<footer id="site-footer">
      <div class="container">
        <div class="row text-center custom-list">
          <div class="col-sm-4">
            <ul class="list-unstyled">
            <li><a href="dashboard/admin_dashboard.php" class="nav-link">Home</a></li>
            <li><a href="dashboard/admin_dashboard_menus/case_admin.php" class="nav-link">Assign Case</a></li>
            
          </ul>
          </div>
          <div class="col-sm-4">
            <ul class="list-unstyled">
              <li><a href="dashboard/admin_dashboard_menus/update_sa.php" class="nav-link">Update Sub-admin</a></li>
              <li><a href="subadminRegister.php" class="nav-link">Create Sub-Admin</a></li>
            </ul>
          </div>
          <div class="col-sm-4">
            <ul class="list-unstyled">
              <li><a href="dashboard/admin_dashboard_menus/update_ps.php" class="nav-link">Update Police Station</a></li>
              <li><a href="dashboard/admin_dashboard_menus/ps_section/add_ps.php" class="nav-link">Add Police Station</a></li>
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
	<script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
<!-- Materialize js -->
  <script type="text/javascript" src="js/materialize/materialize.min.js"></script>
  
</body>
</html>