 <?php
  include 'adminconnectionSuggest.php';
  include 'adminsuggestserver.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Suggest Update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/formstyle.css">
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
  <h2>Suggest Update</h2>
  <p>View suggested places:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Email</th>
        <th>Place</th>
        <th>County</th>
        <th>Countrty</th>
        <th>Why</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
          $table  = mysqli_query($connection ,'SELECT * FROM suggestplace');
          while($row  = mysqli_fetch_array($table)){ ?>
              <tr id="<?php echo $row['id']; ?>">
                <td data-target="email"><?php echo $row['email']; ?></td>
                <td data-target="place"><?php echo $row['place']; ?></td>
                <td data-target="county"><?php echo $row['county']; ?></td>
                <td data-target="country"><?php echo $row['country']; ?></td>
                <td data-target="why"><?php echo $row['why']; ?></td>
                <td><a href="#" data-role="update" data-id="<?php echo $row['id'] ;?>">Update</a></td>
              </tr>
         <?php }
       ?>
       
    </tbody>
  </table>

  
</div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label>Email</label>
                <input type="text" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label>Place</label>
                <input type="text" id="place" class="form-control">
              </div>

               <div class="form-group">
                <label>County</label>
                <input type="text" id="county" class="form-control">
              </div>
              <div class="form-group">
                <label>Country</label>
                <input type="text" id="country" class="form-control">
              </div>
              <div class="form-group">
                <label>Why</label>
                <input type="text" id="Why" class="form-control">
              </div>
                <input type="hidden" id="id" class="form-control">


          </div>
          <div class="modal-footer">
            <a href="#" id="save" class="btn btn-primary pull-right">Update</a>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

<!--form feedback --><html>
<head>
	
 
 
  <div class="header">
  	<h2>Feedback on place</h2>
  </div>
	
  <form method="post" action="adminsuggest.php">
	
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
  	  <label>Price per night ($)</label>
  	  <input type="number" name="price">
		</div>
  	<div class="input-group">
  	  <label>Best attraction</label>
  	  <textarea type="text" name="best" style="width : 350px;" rows="4"></textarea>
  	</div>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="feedback">Feedback</button>
  	</div>
  </form>

</body>

<script>
  $(document).ready(function(){

    //  append values in input fields
      $(document).on('click','a[data-role=update]',function(){
            var id  = $(this).data('id');
            var email = $('#'+id).children('td[data-target= email]').text();
            var place  = $('#'+id).children('td[data-target=place]').text();
            var county  = $('#'+id).children('td[data-target=county]').text();
            var country  = $('#'+id).children('td[data-target=country]').text();
            var why  = $('#'+id).children('td[data-target=why]').text();

            $('# email').val( email);
            $('#place').val(place);
            $('#county').val(county);
            $('#country').val(country);
            $('#why').val(why);
            $('#userId').val(id);
            $('#myModal').modal('toggle');
      });

      // now create event to get data from fields and update in database 

       $('#save').click(function(){
          var id  = $('#userId').val(); 
         var  email =  $('# email').val();
          var place =  $('#place').val();
          var county =   $('#county').val();
          var country =   $('#country').val();
          var why =   $('#why').val();

          $.ajax({
              url      : 'adminconnectionSuggest.php',
              method   : 'post', 
              data     : { email :  email , place: place , county : county ,country : country ,why : why , id: id},
              success  : function(response){
                            // now update user record in table 
                             $('#'+id).children('td[data-target= email]').text( email);
                             $('#'+id).children('td[data-target=place]').text(place);
                             $('#'+id).children('td[data-target=county]').text(county);
                             $('#'+id).children('td[data-target=country]').text(country);
                             $('#'+id).children('td[data-target=why]').text(why);
                             $('#myModal').modal('toggle'); 

                         }
          });
       });
  });
</script>
</html>
