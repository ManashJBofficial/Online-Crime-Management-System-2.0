<?php  if(!isset($_FILES['id_proof']))
    {
    echo '<p>Please select a file</p>';
    }
else
    {
    try    {
        upload();
        
        echo '<p>Thank you for submitting</p>';
		header('location:http://localhost/myProject/dashboard/user_dashboard.php');
        }
    catch(Exception $e)
        {
        echo '<h4>'.$e->getMessage().'</h4>';
        }
    }
	
	
function upload(){
/*** check if a file was uploaded ***/
if(is_uploaded_file($_FILES['id_proof']['tmp_name']) && getimagesize($_FILES['id_proof']['tmp_name']) != false)
    {
    /***  get the image info. ***/
    $size = getimagesize($_FILES['id_proof']['tmp_name']);
    /*** assign our variables ***/
    $type = $size['mime'];
	$image_id=$_POST['imageid'];
	$iname=$_POST['iname'];
    $imgfp = fopen($_FILES['id_proof']['tmp_name'], 'rb');
    $size = $size[3];
    $name = $_FILES['id_proof']['name'];
    $maxsize = 99999999;


    /***  check the file is less than the maximum file size ***/
    if($_FILES['id_proof']['size'] < $maxsize )
        {
        /*** connect to db ***/
        $dbh = new PDO("mysql:host=localhost;dbname=online_shop", 'root', '');

                /*** set the error mode ***/
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            /*** our sql query ***/
        $stmt = $dbh->prepare("INSERT INTO product_image (image_id ,iname, image) VALUES (? ,?, ?)");

        /*** bind the params ***/
        $stmt->bindParam(1, $image_id);
		$stmt->bindParam(2, $iname);
        $stmt->bindParam(3, $imgfp, PDO::PARAM_LOB);
        

        /*** execute the query ***/
        $stmt->execute();
        }
    else
        {
        /*** throw an exception is image is not of type ***/
        throw new Exception("File Size Error");
        }
    }
else
    {
    // if the file is not less than the maximum allowed, print an error
    throw new Exception("Unsupported Image Format!");
    }
}
?>