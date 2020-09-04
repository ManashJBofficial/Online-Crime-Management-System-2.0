<?php
	
	include('connectioni.php');
	$dbname="crime_management";
	$conn=mysqli_connect($servername, $username,$password,$dbname);
    mysqli_select_db($conn,$dbname);

if(isset($_POST['submit'])){
    		$fid = $_POST['fid'];
    		$vid = $_POST['vid'];
    		$ioid = $_POST['ioid'];		
    		$a_id = $_POST['a_id'];   		
    		$subject = $_POST['subject'];			
    		$i_date = $_POST['i_date'];			
    		$f_date = $_POST['f_date'];			
    		$f_time = $_POST['f_time'];			
    		$c_details = $_POST['c_details'];
		

	$register_query="INSERT INTO `case_admin_confirm`(`fid`, `vid`, `ioid`, `a_id`, `subject`, `i_date`, `f_date`, `f_time`, `c_details`) VALUES ('$fid','$vid','$ioid','$a_id','$subject','$i_date','$f_date','$f_time','$c_details')";
	
	mysqli_query($conn,$register_query) or die(mysqli_error($conn));
	
	if($register_query){
		header('Location:case_admin.php');
	}
	else {
		echo "IO not Assigned!";
	}
	}
	?>