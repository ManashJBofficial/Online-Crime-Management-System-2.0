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
		
		$ps_name = $_POST [ 'ps_name'];
		$fid = $_POST [ 'fid'];
		$ioid = $_POST [ 'ioid'];
		$io_name = $_POST [ 'io_name'];
		$cd_submit_date = $_POST [ 'cd_submit_date'];
		$v_location = $_POST [ 'v_location'];
		$ipc = $_POST [ 'ipc'];
		$subject = $_POST [ 'subject'];
		$i_date = $_POST [ 'i_date'];
		$i_time = $_POST [ 'i_time'];
		$f_date = $_POST [ 'f_date'];
		$f_time = $_POST [ 'f_time'];
		$c_details = $_POST [ 'c_details'];
		$vid = $_POST [ 'vid'];
		$v_name = $_POST [ 'v_name'];
		$v_statement = $_POST [ 'v_statement'];
		$w_name = $_POST [ 'w_name'];
		$w_address = $_POST [ 'w_address'];
		$w_statement = $_POST [ 'w_statement'];
		$a_id = $_POST [ 'a_id'];
		$a_name = $_POST [ 'a_name'];
		$a_statement = $_POST [ 'a_statement'];
		$io_statement = $_POST [ 'io_statement'];
		$case_status = $_POST [ 'case_status'];
		

	$register_query = "INSERT INTO `case_diary`(`ps_name`, `fid`, `ioid`, `io_name`, `cd_submit_date`, `v_location`, `ipc`, `subject`,`i_date`,`i_time`,`f_date`,`f_time`, `c_details`, `vid`, `v_name`, `v_statement`, `w_name`, `w_address`, `w_statement`, `a_id`, `a_name`, `a_statement`,`io_statement`, `case_status`) VALUES ('$ps_name','$fid','$ioid','$io_name','$cd_submit_date','$v_location','$ipc','$subject','$i_date','$i_time','$f_date','$f_time','$c_details','$vid','$v_name','$v_statement','$w_name','$w_address','$w_statement','$a_id','$a_name','$a_statement','$io_statement','$case_status')";



	try{
			$register_result = mysqli_query($conn, $register_query);
			if($register_result){
				if(mysqli_affected_rows($conn)>0){
					echo "<script>alert('Data Entered Successfully !')</script>";
				?>
				<META HTTP-EQUIV="Refresh" CONTENT="0; URL=../sub_admin_dashboard.php">
				<?php
				}else{
					echo("Error in Data Entry");
					 }		
		
				}
		}catch(Exception $ex){
									echo("error".$ex->getMessage());
							}
}
			 
?>