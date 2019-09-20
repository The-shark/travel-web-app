<?php
$servername="localhost";
$username="root";
$password="";
$dbname="safiri";

$conn = new mysqli($servername,$username, $password, $dbname);

if (!$conn){
    die("Connection failed:".mysqli_connect_error());
}

if(isset($_POST['fed_staff'])){ // Fetching variables of the form which travels in URL
    $email= $_POST['email'];
    $nameofstaff = $_POST['nameofstaff'];
     $place = $_POST['place'];
    $county = $_POST['county'];
    $country = $_POST['country'];
    $goodservice = $_POST['goodservice'];
    $comments = $_POST['comments'];

    if($place !=''||$county !=''){

$sql = "INSERT INTO feedback (email, nameofstaff, place, county,
 country, goodservice, comments) VALUES ('$email', '$nameofstaff', 
 '$place', '$county', '$country','$goodservice', '$comments')";

 if (mysqli_query($conn, $sql)){

    echo "Feedback added successfully";
 }
 else{
     echo "Error:" .$sql. "<br>" .mysqli_error($conn);
 }
    }
}
 mysqli_close($conn);
  ?>