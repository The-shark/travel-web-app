<?php include('bookingserver.php')?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Booking Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/formstyle.css">
    <script src="main.js"></script>
</head>
<body>
<div class="header">
  	<h2>Book place</h2>
  </div>
    
<form method="post" action="bookingform.php">
    
  
  <div class="input-group">
    <label>First Name</label>
    <input type="text" name="fname" required>
  </div>
  <div class="input-group">
    <label>Last Name</label>
    <input type="text" name="lname" required>
  </div>
  <div class="input-group">
    <label>Phone</label>
    <input type="number" name="phone" required>
  </div>
  <div class="input-group">
    <label>Email</label>
    <input type="text" name="email" required>
  </div>
  <div class="input-group">
    <label>Arrival date</label>
    <input type="date" name="arrival" required>
  </div>
  <div class="input-group">
    <label>Departure date</label>
    <input type="date" name="departure" required>
  </div>
  <div class="input-group">
    <label>Number of adults</label>
    <input type="number" name="adults">
  </div>
  <div class="input-group">
    <label>Number of children</label>
    <input type="number" name="children">
    </div>
    
  <div class="input-group">
    <label>Questions/Comments</label>
    <textarea type="text" name="comments" style="width : 400px;" rows="4"></textarea>
  </div>
  <div class="input-group">
    <button type="submit" class="btn" name="book">Book</button>
  </div>
</form>
    
</body>
</html>



