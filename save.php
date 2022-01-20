<?php
include'database.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$department=$_POST['department'];
	$sql = "INSERT INTO `user_data`( `name`, `email`, `phone`, `department`) 
    VALUES ('$name','$email','$phone','$department')";
   

	if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
        
        
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
 