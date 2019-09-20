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

if(isset($_POST['rep_place'])){ // Fetching variables of the form which travels in URL
  $place = $_POST['place'];
  $county = $_POST['county'];
  $country = $_POST['country'];
  $problems = $_POST['problems'];
  if($place !=''||$county !=''){

$sql = "INSERT INTO reportplace (place, county, country, problems)
VALUES ('".$place."', '".$county."', '".$country."', '".$problems."')";

if ($conn->query($sql) === TRUE) {
  echo "Report sent successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  }
}
$conn->close();

?> 