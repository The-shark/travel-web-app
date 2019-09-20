 <?php
  include 'adminconnectionFeedback.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feedback Update</title>
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
  <h2>Feedback Update</h2>
  <p>View feedback:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Email</th>
        <th>Name of staff</th>
        <th>Place</th>
        <th>County</th>
        <th>Countrty</th>
        <th>Good service</th>
        <th>Comments</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
          $table  = mysqli_query($connection ,'SELECT * FROM feedback');
          while($row  = mysqli_fetch_array($table)){ ?>
              <tr id="<?php echo $row['id']; ?>">
                <td data-target="email"><?php echo $row['email']; ?></td>
                <td data-target="nameofstaff"><?php echo $row['nameofstaff']; ?></td>
                <td data-target="place"><?php echo $row['place']; ?></td>
                <td data-target="county"><?php echo $row['county']; ?></td>
                <td data-target="country"><?php echo $row['country']; ?></td>
                <td data-target="goodservice"><?php echo $row['goodservice']; ?></td>
                <td data-target="comments"><?php echo $row['comments']; ?></td>
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
                <label>Name of staff</label>
                <input type="text" id="nameofstaff" class="form-control">
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
                <label>Good service</label>
                <input type="text" id="goodservice" class="form-control">
              </div>
              <div class="form-group">
                <label>Comments</label>
                <input type="text" id="comments" class="form-control">
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

</body>

<script>
  $(document).ready(function(){

    //  append values in input fields
      $(document).on('click','a[data-role=update]',function(){
            var id  = $(this).data('id');
            var email = $('#'+id).children('td[data-target= email]').text();
            var nameofstaff = $('#'+id).children('td[data-target= nameofstaff]').text();
            var place  = $('#'+id).children('td[data-target=place]').text();
            var county  = $('#'+id).children('td[data-target=county]').text();
            var country  = $('#'+id).children('td[data-target=country]').text();
            var goodservice  = $('#'+id).children('td[data-target=goodservice]').text();
            var comments = $('#'+id).children('td[data-target= comments]').text();

            $('# email').val( email);
            $('# nameofstaff').val( nameofstaff);
            $('#place').val(place);
            $('#county').val(county);
            $('#country').val(country);
            $('#goodservice').val(goodservice);
            $('# comments').val( comments);
            $('#id').val(id);
            $('#myModal').modal('toggle');
      });

      // now create event to get data from fields and update in database 

       $('#save').click(function(){
          var id  = $('#id').val(); 
         var  email =  $('# email').val();
         var  nameofstaff =  $('# nameofstaff').val();
          var place =  $('#place').val();
          var county =   $('#county').val();
          var country =   $('#country').val();
          var goodservice =   $('#goodservice').val();
          var comments=   $('#comments').val();

          $.ajax({
              url      : 'adminconnectionFeedback.php',
              method   : 'post', 
              data     : { email :  email ,nameofstaff:nameofstaff, place: place , county : county ,
                country : country ,goodservice:goodservice, comments : comments , id: id},
              success  : function(response){
                            // now update user record in table 
                             $('#'+id).children('td[data-target= email]').text( email);
                             $('#'+id).children('td[data-target= nameofstaff]').text( nameofstaff);
                             $('#'+id).children('td[data-target=place]').text(place);
                             $('#'+id).children('td[data-target=county]').text(county);
                             $('#'+id).children('td[data-target=country]').text(country);
                             $('#'+id).children('td[data-target=goodservice]').text(goodservice);
                             $('#'+id).children('td[data-target= comments]').text( comments);
                             $('#myModal').modal('toggle'); 

                         }
          });
       });
  });
</script>
</html>
