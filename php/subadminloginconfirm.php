<?php 
   session_start();
	include ("connection.php");
	$dbname="crime_management";
	$db=mysqli_select_db($con,$dbname) or die("Failed to connect to MySQL: " . mysql_error());

	if(isset($_POST['submit'])){
		$ioid = $_POST['ioid'];
		$uname = $_POST ['uname'];
		$pass = $_POST ['pass'];

if($ioid=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the officer in Charge ID')</script>";  
exit();//this use if first is not work then other will not show 
	}
		if($uname=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the Username')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }   

	$q ="SELECT * FROM `create_subadmin` WHERE ioid ='$ioid' and uname ='$uname' and pass = '$pass'";
		
		$rw =mysqli_query($con,$q);
		$num = mysqli_num_rows($rw);
		if($num == 1 ){
                  $_SESSION['ioid'] = $ioid;


				header('Location: ../dashboard/sub_admin_dashboard.php');
		}
	else {
		echo "<script>alert('WRONG USERNAME OR PASSWORD !')</script>";
		?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=../subadminLogin.php">
		<?php
	}


}
 ?>