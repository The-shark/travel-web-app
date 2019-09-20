<?php include('feedbackserver.php') ?>
<html>
<head>
  <title>Feedback on staff</title>
  <link rel="stylesheet" type="text/css" href="css/formstyle.css">
</head>
<body>
  <div class="header">
  	<h2>Feeback on staff</h2>
  </div>
	
  <form method="post" action="feedbackstaff.php">

		 <div class="input-group">
  	  <label>Your email</label>
  	  <input type="text" name="email">
  	</div> 
  	<div class="input-group">
  	  <label>Name of employee</label>
  	  <input type="text" name="nameofstaff">
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
					<label>Good service?</label>
					<select name="goodservice" id= "goodservice">
					<option value="">Select One</option>
    <option value="yes">Yes</option>
    <option value="no">No</option>
  </select>
              </div>
  	<div class="input-group">
  	  <label>Feedback</label>
  	  <textarea type="text" name="comments" style="width : 400px;" rows="4"></textarea>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="fed_staff">Feedback</button>
  	</div>
  </form>
</body>
</html>