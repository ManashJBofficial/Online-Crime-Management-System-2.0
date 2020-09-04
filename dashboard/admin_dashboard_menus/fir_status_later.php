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
		
		$status = $_POST [ 'status'];
		$fid = $_POST [ 'fid'];
		$vid = $_POST [ 'vid'];

	$register_query = "INSERT INTO `fir_status`(`status`, `fid`,`vid`) VALUES ('$status','$fid','$vid')";

	try{
			$register_result = mysqli_query($conn, $register_query);
			if($register_result){
				if(mysqli_affected_rows($conn)>0){
					echo "<script>alert('STATUS UPDATED !')</script>";
					?>
					<META HTTP-EQUIV="Refresh" CONTENT="0; URL=case_admin.php">
					<?php
				}else{
					echo("Error in Submitting!");
					 }		
		
				}
		}catch(Exception $ex){
									echo("error".$ex->getMessage());
							}
}

			 
?>