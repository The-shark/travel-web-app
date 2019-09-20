<?php
$connection =	mysqli_connect('localhost' , 'root' ,'' ,'safiri');




if(isset($_POST['place'])){
	
	
	$place = $_POST['place'];
    $county = $_POST['county'];
    $country = $_POST['country'];
    $price = $_POST['price'];
    $best = $_POST['best'];
	$id = $_POST['id'];

	//  query to update data 
	 
	$result  = mysqli_query($connection , "UPDATE adminsuggest SET place='$place' , county = '$county' , 
    country = '$country' , price = '$price', best= 'best' WHERE id='$id'");
	if($result){
		echo 'data updated';
	}

}
?>