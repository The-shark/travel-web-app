 <?php
  include 'adminconnectionbook.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bookings</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<br/>
<br/>
<br/>
<br/>
  <h2>Bookings</h2>
  <p>View bookings:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Arrival date</th>
        <th>Departure Date</th>
        <th>Number of adults</th>
        <th>Number of children</th>
        <th>Questions/Comments</th>
       
      </tr>
    </thead>
    <tbody>
      <?php
          $table  = mysqli_query($connection ,'SELECT * FROM booking');
          while($row  = mysqli_fetch_array($table)){ ?>
              <tr id="<?php echo $row['id']; ?>">
              <td data-target="fname"><?php echo $row['fname']; ?></td>
              <td data-target="lname"><?php echo $row['lname']; ?></td>
              <td data-target="phone"><?php echo $row['phone']; ?></td>
                <td data-target="email"><?php echo $row['email']; ?></td>
                
                <td data-target="arrival"><?php echo $row['arrival']; ?></td>
                <td data-target="departure"><?php echo $row['departure']; ?></td>
                <td data-target="adults"><?php echo $row['adults']; ?></td>
                <td data-target="children"><?php echo $row['children']; ?></td>
                <td data-target="comments"><?php echo $row['comments']; ?></td>
                
              </tr>
         <?php }
       ?>
       
    </tbody>
  </table>

  
</div>

    

</body>


</html>
