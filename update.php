<?php

   ob_start();
  session_start();
require_once 'actions/db_connect.php';

  // if session is not set this will redirect to login page
  if( isset($_SESSION['user']) ) {
   
  // select logged-in admin detail
  $query = "SELECT * FROM admin WHERE id=".$_SESSION['user'];
  $res = mysqli_query($conn, $query);
  $userRow = mysqli_fetch_assoc($res);
  $userID = $userRow['id'];
  $userD = $userRow['delete'];
    
}else{

    $userD = 0;
}

// require_once 'actions/db_connect.php';

 

if($_GET['id']) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM event WHERE id = {$id}";

    $result = $conn->query($sql);

    $data = $result->fetch_assoc();

    $conn->close();

 

?>

 
<?php include('header.php'); ?>
</div>
</nav> 

    <center class="container">



<form class="form-control" action="actions/a_update.php" method="post">

    <h2>Update Event</h2>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Event Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Event Name" name="name" value="<?php echo $data['name']?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Start Date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputPassword3" placeholder="start date" name="start_date" value="<?php echo $data['start_date']?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">End Date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputPassword3" placeholder="end_date" name="end_date" value="<?php echo $data['end_date']?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Event Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Event Description" name="description" value="<?php echo $data['description']?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Image URL</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="image" name="image" value="<?php echo $data['image']?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Header Img URL</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Header Img" name="header_img" value="<?php echo $data['header_img']?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Capacity</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPassword3" placeholder="Capacity" name="capacity" value="<?php echo $data['capacity']?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Contact Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputPassword3" placeholder="Contact Email" name="contact_email" value="<?php echo $data['contact_email']?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Contact Phone</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPassword3" placeholder="Contact Phone" name="contact_phone" value="<?php echo $data['contact_phone']?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Address" name="address" value="<?php echo $data['address']?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">City</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="City" name="city" value="<?php echo $data['city']?>" />
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">URL</label>
    <div class="col-sm-10">
      <input type="URL" class="form-control" id="inputPassword3" placeholder="url" name="url" value="<?php echo $data['url']?>" />
    </div>
  </div>

  <!-- <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Map </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Map" name="map" value=" -->
    <!--   <?php echo $data['map']?> -->
      <!-- "  -->
      <!-- /> -->
 <!--    </div>
  </div> -->

  <div class="center">
     <label for="inputState">Type</label>
      <select id="inputState" class="form-control" name="type" value="<?php echo $data['type']?>" />
        <option selected value="Art">Art</option>
        <option selected value="Concert">Music</option>
        <option selected value="Sport">Sport</option>
        <option selected value="Concert">Festival</option>
      </select>
  </div>

  <div class="form-group row">
    <div class="col-sm-12">

       <input type="hidden" name="id" value="<?php echo $data["id"]?>" />

      <button type="submit" class="btn btn-primary btn-center">Update</button>
    </div>
  </div>

</form>

</center>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>

 

<?php

}

?>