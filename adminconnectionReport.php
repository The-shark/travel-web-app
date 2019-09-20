<?php
$connection =	mysqli_connect('localhost' , 'root' ,'' ,'safiri');




if(isset($_POST['place'])){
	
	
	$place = $_POST['place'];
    $county = $_POST['county'];
    $country = $_POST['country'];
    $problems = $_POST['problems'];
	$id = $_POST['id'];

	//  query to update data 
	 
	/*$result  = mysqli_query($connection , "UPDATE suggestplace SET email='$email' ,
	place='$place' , county = '$county' , country = '$country' , why = '$why' WHERE id='$id'");
	if($result){
		echo 'data updated';
	}*/

}
?>