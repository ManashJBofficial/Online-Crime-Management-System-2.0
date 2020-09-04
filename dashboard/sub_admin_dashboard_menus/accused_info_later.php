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
		
		
		$fid = $_POST [ 'fid'];
		$a_id = $_POST [ 'a_id'];
		$a_name = $_POST [ 'a_name'];
		$a_address = $_POST [ 'a_address'];
		$cs_id = $_POST [ 'cs_id'];
		$ipc = $_POST [ 'ipc'];
		
		
		
		

	$register_query = "INSERT INTO `accused_info`(`fid`, `a_id`, `a_name`, `a_address`, `cs_id`, `ipc`) VALUES ('$fid','$a_id','$a_name','$a_address','$cs_id','$ipc')";



	try{
			$register_result = mysqli_query($conn, $register_query);
			if($register_result){
				if(mysqli_affected_rows($conn)>0){
					echo "<script>alert('Data Entered Successfully !')</script>";
				?>
					<META HTTP-EQUIV="Refresh" CONTENT="0; URL=../sub_admin_dashboard.php">
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