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

if(isset($_POST['feedback'])){ // Fetching variables of the form which travels in URL
  
  $place = $_POST['place'];
  $county = $_POST['county'];
  $country = $_POST['country'];
  $price = $_POST['price'];
  $best = $_POST['best'];
  if($place !=''||$county !=''){

$sql = "INSERT INTO adminsuggest (place, county, country, price, best)
VALUES ('".$place."', '".$county."', '".$country."', '".$price."', '".$best."')";

if ($conn->query($sql) === TRUE) {
  echo "Information added successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  }
}
$conn->close();

?> 