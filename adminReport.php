 <?php
  include 'adminconnectionReport.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reported places</title>
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
  <h2>Reported place</h2>
  <p>View reported places:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Place</th>
        <th>County</th>
        <th>Country</th>
        <th>Problems</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
          $table  = mysqli_query($connection ,'SELECT * FROM reportplace');
          while($row  = mysqli_fetch_array($table)){ ?>
              <tr id="<?php echo $row['id']; ?>">
                <td data-target="place"><?php echo $row['place']; ?></td>
                <td data-target="county"><?php echo $row['county']; ?></td>
                <td data-target="country"><?php echo $row['country']; ?></td>
                <td data-target="problems"><?php echo $row['problems']; ?></td>
                
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
                <label>Problems</label>
                <input type="text" id="Why" class="form-control">
              </div>
                <input type="hidden" id="id" class="form-control">


          </div>
          <div class="modal-footer">
           
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
            
            var place  = $('#'+id).children('td[data-target=place]').text();
            var county  = $('#'+id).children('td[data-target=county]').text();
            var country  = $('#'+id).children('td[data-target=country]').text();
            var problems  = $('#'+id).children('td[data-target=problems]').text();

            
            $('#place').val(place);
            $('#county').val(county);
            $('#country').val(country);
            $('#problems').val(problems);
            $('#id').val(id);
            $('#myModal').modal('toggle');
      });

      // now create event to get data from fields and update in database 

       $('#save').click(function(){
          var id  = $('#id').val(); 
        
          var place =  $('#place').val();
          var county =   $('#county').val();
          var country =   $('#country').val();
          var problems =   $('#problems').val();

          $.ajax({
              url      : 'adminconnectionReport.php',
              method   : 'post', 
              data     : { place: place , county : county ,country : country ,problems : problems , id: id},
              success  : function(response){
                            // now update user record in table 
                            
                             $('#'+id).children('td[data-target=place]').text(place);
                             $('#'+id).children('td[data-target=county]').text(county);
                             $('#'+id).children('td[data-target=country]').text(country);
                             $('#'+id).children('td[data-target=problems]').text(problems);
                             $('#myModal').modal('toggle'); 

                         }
          });
       });
  });
</script>
</html>
