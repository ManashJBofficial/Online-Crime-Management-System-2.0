<?php
	include('../connectioni.php');
	
	$dbname="crime_management";
	
	$con =mysqli_connect($servername, $username,$password,$dbname);
    mysqli_select_db($con,$dbname);


			$ps_id=$_POST['ps_id'];
  			$ps_name=$_POST['ps_name'];
  			$oc_name=$_POST['oc_name'];
  			$ps_ph=$_POST['ps_ph'];
  			$ps_city=$_POST['ps_city'];
  			$state=$_POST['state'];

	

	$query ="UPDATE `police_station` SET `ps_id`='$ps_id',`ps_name`='$ps_name',`oc_name`='$oc_name',`ps_ph`='$ps_ph',`ps_city`='$ps_city',`state`='$state' WHERE ps_id= '$ps_id'";
 mysqli_query($con,$query);

	if($query)
	{	
		header('Location:../update_ps.php');
	}
	else
	{
		echo "Error".mysql_error();
	}

	
	?>