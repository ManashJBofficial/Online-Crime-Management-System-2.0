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

	$ps_id = $_POST [ 'ps_id'];
	$ps_name = $_POST [ 'ps_name'];
	$oc_name = $_POST [ 'oc_name'];
	$ps_ph = $_POST [ 'ps_ph'];
	$ps_city = $_POST [ 'ps_city'];
	$state = $_POST [ 'state'];

$register_query="INSERT INTO `police_station`(`ps_id`, `ps_name`, `oc_name`, `ps_ph`, `ps_city`, `state`) VALUES ('$ps_id','$ps_name','$oc_name','$ps_ph','$ps_city','$state')";
	}


try{
			$register_result = mysqli_query($conn, $register_query);
			if($register_result){
				if(mysqli_affected_rows($conn)>0){
					
					header('Location:../dashboard/admin_dashboard_menus/update_ps.php');
				}else{
					echo("error in registration");
					 }		
		
				}
		}catch(Exception $ex){
									echo("error".$ex->getMessage());
							}
			 


?>