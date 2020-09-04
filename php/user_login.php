<?php 
   session_start();
	include ("connection.php");
	
	$db=mysqli_select_db($con,$dbname);

	if(isset($_POST['submit'])){
		$vid = $_POST ['vid'];
		$uname = $_POST ['uname'];
		$pass = $_POST ['pass'];
		if($vid=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the Victim ID')</script>";  
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

		$q ="SELECT * FROM `user_signup` WHERE vid ='$vid' and uname ='$uname' and pass = '$pass'";
		
		$rw =mysqli_query($con,$q);
		$num = mysqli_num_rows($rw);
		if($num == 1){
                  $_SESSION['vid'] = $vid;

				header('Location: ../dashboard/user_dashboard.php');
		}
	else {
		echo "<script>alert('WRONG USERNAME OR PASSWORD !')</script>";
		?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=../userLogin.php">
		<?php

	}


}
 ?>