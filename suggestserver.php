<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "safiri";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['sug_place'])){ // Fetching variables of the form which travels in URL
  $email = $_POST['email'];
  $place = $_POST['place'];
  $county = $_POST['county'];
  $country = $_POST['country'];
  $why = $_POST['why'];
  if($place !=''||$county !=''){

$sql = "INSERT INTO suggestplace (email, place, county, country, why)
VALUES ('".$email."','".$place."', '".$county."', '".$country."', '".$why."')";

if ($conn->query($sql) === TRUE) {
  echo "Suggestion sent successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  }
}
$conn->close();

?> 