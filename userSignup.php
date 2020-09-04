<!DOCTYPE html>
<html>
<head>
	<title>User Signup</title>

  <!-- Materialize CSS -->
  <link rel="stylesheet" type="text/css" href="css/materialize/materialize.min.css"> 
<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- Bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
<!-- vanilla css -->
	<link rel="stylesheet" type="text/css" href="css/userSignupStyle.css">
</head>
<body>
	<section class="justify-content-center">
	<div class="signup-form ">
    <form action="php/userconfirm.php" method="POST"  name="RegForm">
		<h2>User Signup</h2>
        <div class="form-group">
			<div class="form-row">
    			<div class="col">
      				<input type="text" class="form-control" placeholder="First name" name="first_name" id="first_name" required="required">
    			</div>
    			<div class="col">
      				<input type="text" class="form-control" placeholder="Last name" name="last_name" id="last_name" required="required">
    			</div>
  			</div>      	
       </div>
       <div class="form-group">
        	<input type="text" class="form-control" name="vid" placeholder="Victim id"  id="vid" required="required">
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="uname" placeholder="Username"  id="uname" required="required">
        </div>
	

		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password"  id="pass" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password"  id="cpass" required="required">
        </div> 
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email"  id="email" required="required">
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="age" placeholder="Age"  id="age" required="required">
        </div>
          <div class="form-group">
			<div class="form-row">
    			<div class="col">
      				<input type="text" class="form-control" placeholder="City" name="city" id="city" required="required">
    			</div>
    			<div class="col">
      				<input type="text" class="form-control" placeholder="State" name="state" id="state" required="required">
    			</div>
    			<div class="col">
      				<input type="text" class="form-control" placeholder="Zip Code" name="zcode" id="zcode" required="required">
    			</div>
  			</div>      	
       </div>
		<div class="form-group">
        	<input type="text" class="form-control" name="phoneno" placeholder="Phone no"  id="phoneno" required="required">
        </div>

        <div class="custom-control custom-radio custom-control-inline">
		  <input type="radio" id="customRadioInline1" name="gender" value="m" class="custom-control-input" id="gender" checked>
		  <label class="custom-control-label" for="customRadioInline1">Male</label>
		</div>
		<div class="custom-control custom-radio custom-control-inline">
		  <input type="radio" id="customRadioInline2" name="gender" value="f" class="custom-control-input" id="gender">
		  <label class="custom-control-label" for="customRadioInline2">Female</label>
		</div>
		<div class="form-group">
            <button type="submit" name="submit" onClick="return valid()" class="btn btn-success btn-lg btn-block">Register Now</button>
    </div>
    </form>
	<div class="text-center">Already have an account? <a href="userLogin.php">Sign in</a></div>
</div>
</section>
    <div class="fixed-action-btn">
      <a href="index.php" class="btn-floating waves-effect waves-red red white-text btn-large pulse">Home</a>
    </div>
<!-- Bootstrap js -->
	<script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
<!-- Materialize js -->
  <script type="text/javascript" src="js/materialize/materialize.min.js"></script>
  <!-- Form Validation js -->
  <script type="text/javascript" src="js/register_form_valid.js"></script>

</body>
</html>