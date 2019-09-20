<?php
  include 'adminconnectionUsers.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>View users</title>
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
  <h2>View users</h2>
  <p>User information:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Username</th>
        <th>Email</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
          $table  = mysqli_query($connection ,'SELECT * FROM users');
          while($row  = mysqli_fetch_array($table)){ ?>
              <tr id="<?php echo $row['id']; ?>">
                <td><?php echo $row['username']; ?></td>
                <td data-target="email"><?php echo $row['email']; ?></td>
                
              </tr>
         <?php }
       ?>
       
    </tbody>
  </table>

  
</div>

    

</html>
