<?php  

	include("connectioni.php"); 
	
	$delete_id=$_GET['delete'];  
	$delete_query="DELETE FROM `create_subadmin` WHERE uname='$delete_id'";//delete query 
	$run=mysqli_query($con,$delete_query);  
			
			if($run)  
			{ 	
				echo "<script>alert('RECORD DELETED !')</script>";
				?>
				<META HTTP-EQUIV="Refresh" CONTENT="0; URL=update_sa.php">
	<?php 


			}
		//javascript function to open in the same window   
		  //echo "<script>window.open('update_sa.php?deleted=user has been deleted','_self')</script>"; 

  
?>