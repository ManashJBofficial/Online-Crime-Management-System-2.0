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
		$ward_no = $_POST ['ward_no'];
		$ps_name = $_POST [ 'ps_name'];
		$fid = $_POST [ 'fid'];
		$vid = $_POST [ 'vid'];
		$subject = $_POST [ 'subject'];
		$i_date = $_POST [ 'i_date'];
		$i_time = $_POST [ 'i_time'];
		$i_place = $_POST [ 'i_place'];
		$a_name = $_POST [ 'a_name'];
		$w_name = $_POST [ 'w_name'];
		$w_address = $_POST [ 'w_address'];
		$f_date = $_POST [ 'f_date'];
		$f_time = $_POST [ 'f_time'];
		$c_details = $_POST [ 'c_details'];
		$f_name = $_POST [ 'f_name'];
		$l_name = $_POST [ 'l_name'];
		$relation = $_POST [ 'relation'];
		$r_name = $_POST [ 'r_name'];
		$city = $_POST [ 'city'];
		$state = $_POST [ 'state'];
		$p_code = $_POST [ 'p_code'];
		$address = $_POST [ 'address'];
		$phone = $_POST [ 'phone'];
		$e_id = $_POST [ 'e_id'];
		$identity = $_POST [ 'identity'];
		$identity_no = $_POST [ 'identity_no'];

	$register_query = "INSERT INTO `fir`(`ward_no`, `ps_name`, `fid`, `vid`, `subject`, `i_date`, `i_time`, `i_place`, `a_name`, `w_name`, `w_address`, `f_date`, `f_time`, `c_details`, `f_name`, `l_name`, `relation`, `r_name`, `city`, `state`, `p_code`, `address`, `phone`, `e_id`,`identity`,`identity_no`) VALUES ('$ward_no','$ps_name','$fid','$vid','$subject','$i_date','$i_time','$i_place','$a_name','$w_name','$w_address','$f_date','$f_time','$c_details','$f_name','$l_name','$relation','$r_name','$city','$state','$p_code','$address','$phone','$e_id','$identity','$identity_no')";



	try{
			$register_result = mysqli_query($conn, $register_query);
			if($register_result){
				if(mysqli_affected_rows($conn)>0){
					echo "<script>alert('FIR SUBMITTED SUCCESSFULLY !')</script>";
					
					?>
			<META HTTP-EQUIV="Refresh" CONTENT="0; URL=../dashboard/user_dashboard.php">

<?php
				}else{
					echo("error in registration");
					 }		
		
				}
		}catch(Exception $ex){
									echo("error".$ex->getMessage());
							}
}

		/*if(isset($_POST['upload_btn'])){
			$file = $_FILES['id_proof'];

			$fileName = $file['name'];
			$fileTmpName = $file['tmp_name'];
			$fileSize = $file['size'];
			$fileError = $file['error'];
			$fileType = $file['type'];

			$fileExt = explode('.', $fileName);
			$fileActualExt = strtolower(end($fileExt));

			$allowed = array('jpg', 'jpeg', 'png', 'pdf');

			if (in_array($fileActualExt, $allowed )) {
				if ($fileError === 0) {
					if ($fileSize < 50000) {
						$fileNameNew = uniqid('', true).".".fileActualExt;
						$fileDestination = '../uploads/'.$fileNameNew;
						move_uploaded_file($fileTmpName, $fileDestination);
						echo "Upload Successful !";
						//header("Location: ../dashboard/user_dashboard_menus_fir.php?uploadsuccess");
					}
					else {
						echo "Your file is too big !";
					}
					
				}
				else {
					echo "There was an error uploading your file !";
				}
			}
			else {
				echo "You Cannot upload files of this type !";
			}




		} */
/*if(isset($_POST['upload_btn'])){
	$fileExistsFlag = 0; 
     $fileName = $_FILES['id_proof']['name'];*/


     /* 
     *     Checking whether the file already exists in the destination folder 
     */
     /*$query = "SELECT id_proof FROM fir WHERE id_proof='$fileName'";     
     $result = $conn->query($query) or die("Error : ".mysqli_error($conn));
     while($row = mysqli_fetch_array($result)) {
          if($row['id_proof'] == $fileName) {
               $fileExistsFlag = 1;
          }          
     }*/
   
     /*
     *      If file is not present in the destination folder
     */
     /*if($fileExistsFlag == 0) { 
          $target = "../uploads/";          
          $fileTarget = $target.$fileName;     
          $tempFileName = $_FILES["id_proof"]["tmp_name"];     
          $result = move_uploaded_file($tempFileName,$fileTarget);
          /*
          *     If file was successfully uploaded in the destination folder
          */
       /*   if($result) { 
               echo "Your file <html><b><i>".$fileName ."</i></b></html> has been successfully uploaded";          
               $query = "INSERT INTO fir (filepath, id_proof) VALUES ('$fileTarget', '$fileName')";
               $conn->query($query) or die("Error : ".mysqli_error($conn));               
          }
          else {               
               echo "Sorry !!! There was an error in uploading your file";               
          }
          mysqli_close($conn);
     }
     /*
     *      If file is already present in the destination folder
     */
     /*else {
          echo "File <html><b><i>".$fileName."</i></b></html> already exists in your folder. Please rename the file and try again.";
          mysqli_close($conn);
     }    
     } */
			 
?>