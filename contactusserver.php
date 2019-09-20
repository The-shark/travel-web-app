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

if(isset($_POST['contactus'])){ // Fetching variables of the form which travels in URL
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $phonenumber = $_POST['phonenumber'];
  $message = $_POST['message'];
  if($place !=''||$county !=''){

$sql = "INSERT INTO contactus (name, mail, phonenumber, message)
VALUES ('".$name."', '".$mail."', '".$phonenumber."', '".$message."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  }
}
$conn->close();