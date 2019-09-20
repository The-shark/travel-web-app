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
}else{
  echo "connection successful";
}

if(isset($_POST['book'])){ // Fetching variables of the form which travels in URL
  
  $fname = $_POST['fname'];
  $lname = $_POST['lname']; 
  $phone = $_POST['phone'];
   $email= $_POST['email'];
   $arrival = $_POST['arrival'];
   $departure = $_POST['departure'];
  $adults = $_POST['adults'];
  $children = $_POST['children'];
  $comments = $_POST['comments'];
  

$sql = "INSERT INTO booking ( fname, lname, phone, email, arrival, departure, adults, children, comments)
VALUES ( '$fname', '$lname', '$phone', '$email', '$arrival',
'$departure', '$adults', '$children', '$comments')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  
}
$conn->close();

?> 