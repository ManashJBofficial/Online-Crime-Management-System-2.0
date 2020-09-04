<?php
	include('connectioni.php');
	
	$dbname="crime_management";
	
	$con =mysqli_connect($servername, $username,$password,$dbname);
    mysqli_select_db($con,$dbname);

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$ioid = $_POST['ioid'];
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zcode = $_POST['zcode'];
	$phoneno = $_POST['phoneno'];
	$gender = $_POST['gender'];

	

	$query ="UPDATE `create_subadmin` SET `first_name`='$first_name',`last_name`='$last_name',`ioid`='$ioid',`uname`='$uname',`pass`='$pass',`cpass`='$cpass',`email`='$email',`age`='$age',`city`='$city',`state`='$state',`zcode`='$zcode',`phoneno`='$phoneno',`gender`='$gender' WHERE uname='$uname'";
	mysqli_query($con,$query);

	if($query)
	{
		header('Location:update_sa.php');
	}
	else
	{
		echo "Error".mysql_error();
	}

	
	?>