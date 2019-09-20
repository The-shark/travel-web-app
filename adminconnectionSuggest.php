<?php
$connection =	mysqli_connect('localhost' , 'root' ,'' ,'safiri');




if(isset($_POST['email'])){
	
	$email= $_POST['email'];
	$place = $_POST['place'];
    $county = $_POST['county'];
    $country = $_POST['country'];
    $why = $_POST['why'];
	$id = $_POST['id'];

	//  query to update data 
	 
	$result  = mysqli_query($connection , "UPDATE suggestplace SET email='$email' ,
	place='$place' , county = '$county' , country = '$country' , why = '$why' WHERE id='$id'");
	if($result){
		echo 'data updated';
	}

}
?>