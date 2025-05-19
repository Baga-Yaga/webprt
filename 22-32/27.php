<!DOCTYPE html>
<html>
<body>
<form method="POST" action="" enctype =multipart/form-data> 
	Select :<input type="file" name="myfile"></input>
	<input value="Upload File! " type="submit" ></input>

</form>

<?php

$allowed = ['jpg','png'];
if($_SERVER['REQUEST_METHOD']=="POST"){
	if(isset($_FILES['myfile']) &&  $_FILES['myfile']['error'] == 0){
		$filename = $_FILES['myfile']['name'];
		$tmppath = $_FILES['myfile']['tmp_name'];
		$uploadDir = "uploads/";

        $fileExt = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        $destination = $uploadDir . $filename;
        

        if(!is_dir($uploadDir)){
            mkdir($uploadDir);
        }
        if(in_array ($fileExt,$allowed)){
            if(move_uploaded_file($tmppath, $destination)){
            echo "File movesd Successfully";
            }
            else {
            echo "Failed to move file..";
            }
        }else {
            echo "choose only jpg ,png";
        }

        

        }

        else{
            echo "select valid file to upload!!";
        }
}



?>

</body>

</html>