<?php
$connection =	mysqli_connect('localhost' , 'root' ,'' ,'safiri');




if(isset($_POST['email'])){
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$id = $_POST['id'];

	//  query to update data 
	 
	$result  = mysqli_query($connection , "UPDATE users SET username='$username' , email = '$email' WHERE id='$id'");
	if($result){
		echo 'data updated';
	}

}
?>