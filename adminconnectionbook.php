<?php
$connection =	mysqli_connect('localhost' , 'root' ,'' ,'safiri');




if(isset($_POST['email'])){
	
    $email= $_POST['email'];
    $nameofstaff= $_POST['nameofstaff'];
	$place = $_POST['place'];
    $county = $_POST['county'];
    $country = $_POST['country'];
    $goodservice = $_POST['goodservice'];
    $comments= $_POST['comments'];
	$id = $_POST['id'];

	//  query to update data 
	 
	$result  = mysqli_query($connection , "UPDATE feedback SET email='$email' ,nameofstaff='$nameofstaff',
	place='$place' , county = '$county' , country = '$country' , goodservice = '$goodservice',
    comments='$comments' WHERE id='$id'");
	if($result){
		echo 'data updated';
	}

}
?>