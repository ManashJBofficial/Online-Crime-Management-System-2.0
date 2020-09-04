<?php
	$servername = "localhost";
	$username="root";
	$password="";
	$dbname="crime_management";

try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
echo("successful in connection \n");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection\n");
}
if(isset($_POST['submit'])){
		$first_name = $_POST ['first_name'];
		$last_name = $_POST [ 'last_name'];
		$ioid = $_POST [ 'ioid'];
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

	$register_query = "INSERT INTO `create_subadmin`(`first_name`, `last_name`, `ioid`, `uname`, `pass`, `cpass`, `email`, `age`, `city`, `state`, `zcode`, `phoneno`, `gender`) VALUES ('$first_name','$last_name','$ioid','$uname','$pass','$cpass','$email','$age','$city','$state','$zcode','$phoneno','$gender')";

	try{
			$register_result = mysqli_query($conn, $register_query);
			if($register_result){
				if(mysqli_affected_rows($conn)>0){
					echo "<script>alert('Registration Successful !')</script>";

					?>
				<META HTTP-EQUIV="Refresh" CONTENT="0; URL=../dashboard/admin_dashboard.php">
					<?php
				}else{
					echo("error in registration");
					 }		
		
				}
		}catch(Exception $ex){
									echo("error".$ex->getMessage());
							}
						}
			 
?>