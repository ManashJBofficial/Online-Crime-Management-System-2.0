<?php
	$servername = "localhost";
	$username="root";
	$password="";
	$dbname="crime_management";

try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
//echo("successful in connection \n");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection\n");
}
if(isset($_POST['submit'])){
		$first_name = $_POST ['first_name'];
		$last_name = $_POST [ 'last_name'];
		$vid = $_POST [ 'vid'];
		$uname = $_POST [ 'uname'];
		$pass = $_POST [ 'pass'];
		$cpass = $_POST [ 'cpass'];
		$email = $_POST [ 'email'];
		$age = $_POST [ 'age'];
		$city = $_POST [ 'city'];
		$state = $_POST [ 'state'];
		$zcode = $_POST [ 'zcode'];
		$phoneno = $_POST [ 'phoneno'];
		$gender = $_POST [ 'gender'];

	

	$register_query = "INSERT INTO `user_signup`(`first_name`, `last_name`, `vid`, `uname`, `pass`, `cpass`, `email`, `age`, `city`, `state`, `zcode`, `phoneno`, `gender`) VALUES ('$first_name','$last_name','$vid','$uname','$pass','$cpass','$email','$age','$city','$state','$zcode','$phoneno','$gender')";

	try{
			$register_result = mysqli_query($conn, $register_query);
			if($register_result){
				if(mysqli_affected_rows($conn)>0){
					echo "<script>alert(' USER REGISTRATION SUCCESSFULL !')</script>";
					
					?>
			<META HTTP-EQUIV="Refresh" CONTENT="0; URL=../userLogin.php">

<?php
				}else{
					echo("Error in registration");
					 }		
		
				}
		}catch(Exception $ex){
									echo("error".$ex->getMessage());
							}
						}
			 
?>