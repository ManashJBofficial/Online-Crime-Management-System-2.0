<?php 
	include ("connection.php");
	
	mysqli_select_db($con,$dbname);

	if(isset($_POST['submit'])){
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];

		/*if($uname=='')  
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
    	*/


		$q ="SELECT * FROM admin_login where uname='$uname' && pass ='$pass' "; /* or die("Failed to query database" .mysqli_error());*/
		
		$result = mysqli_query($con,$q);

		$num = mysqli_num_rows($result);
			if($num == 1){
				$_SESSION['name'] = $uname;
				header('Location: ../dashboard/admin_dashboard.php');
			}
			else{
				
				echo "<script>alert('WRONG USERNAME OR PASSWORD !')</script>";
				?>
				<META HTTP-EQUIV="Refresh" CONTENT="0; URL=../adminLogin.php">
	<?php 
			}

}
?>