	<?php include('suggestserver.php')?>
	<?php include('userconnectionsuggest.php')?>
<html>
<head>
	
  <title>Suggest Place</title>
	<link rel="stylesheet" type="text/css" href="css/formstyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="header">
  	<h2>Suggest a place</h2>
  </div>
	
  <form method="post" action="suggestplace.php">
	
	<div class="input-group">
  	  <label>Email</label>
  	  <input type="text" name="email">
  	</div>
  	<div class="input-group">
  	  <label>Name of place</label>
  	  <input type="text" name="place">
  	</div>
  	<div class="input-group">
  	  <label>County</label>
  	  <input type="text" name="county">
  	</div>
  	<div class="input-group">
  	  <label>Country</label>
  	  <input type="text" name="country">
		</div>
		
  	<div class="input-group">
  	  <label>Why this place</label>
  	  <textarea type="text" name="why" style="width : 350px;" rows="4"></textarea>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="sug_place">Suggest</button>
  	</div>
	</form>
	
	<!--table for suggest-->

<div class="container">

<br/>
<br/>
<br/>
<br/>
  <h2>Suggest Update</h2>
  <p>View suggested places:</p>            
  <table class="table">
    <thead>
      <tr>
      
        <th>Place</th>
        <th>County</th>
        <th>Country</th>
				<th>Price per night($)</th>
				<th>Best Attraction</th>
       
      </tr>
    </thead>
    <tbody>
      <?php
          $table  = mysqli_query($connection ,'SELECT * FROM adminsuggest');
          while($row  = mysqli_fetch_array($table)){ ?>
              <tr id="<?php echo $row['id']; ?>">
               
                <td data-target="place"><?php echo $row['place']; ?></td>
                <td data-target="county"><?php echo $row['county']; ?></td>
                <td data-target="country"><?php echo $row['country']; ?></td>
								<td data-target="price"><?php echo $row['price']; ?></td>
								<td data-target="best"><?php echo $row['best']; ?></td>
              </tr>
         <?php }
       ?>
       
    </tbody>
  </table>

  
</div>
</body>
</html>