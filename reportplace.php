<?php include('reportserver.php'); ?>
      
<html>
<head>
  <title>Report Place</title>
  <link rel="stylesheet" type="text/css" href="css/formstyle.css">
</head>
<body>
  <div class="header">
  	<h2>Report a place</h2>
  </div>
	
  <form method="post" action="reportplace.php">
      
	<div class="input-group">
  	  <label>Your email</label>
  	  <input type="text" name="email" required>
  	</div> 
  	<div class="input-group">
  	  <label>Name of place</label>
  	  <input type="text" name="place" required>
  	</div>
  	<div class="input-group">
  	  <label>County</label>
  	  <input type="text" name="county" required>
  	</div>
  	<div class="input-group">
  	  <label>Country</label>
  	  <input type="text" name="country">
  	</div>
  	<div class="input-group">
  	  <label>Issues with this place</label>
  	  <textarea type="text" name="problems" style="width : 400px;" rows="4"></textarea>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="rep_place">Report</button>
  	</div>
  </form>
</body>
</html>