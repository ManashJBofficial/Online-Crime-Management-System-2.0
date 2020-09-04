<?php
	
	include('connectioni.php');
	$dbname="crime_management";
	$conn=mysqli_connect($servername, $username,$password,$dbname);
    mysqli_select_db($conn,$dbname);

if(isset($_POST['submit'])){
    		$fid = $_POST['fid'];
    		$cause =$_POST['cause'];
		

	$register_query="INSERT INTO `fir_rejected`(`fir id`, `cause`) VALUES ('$fid','$cause')";
	mysqli_query($conn,$register_query) or die(mysqli_error($conn));
	
	if($register_query){
		header('Location:case_admin.php');
	}
	else {
		echo "Error in DATA ENTRY!";
	}
	}
	?>