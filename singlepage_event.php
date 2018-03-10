
<?php
$id = $_GET['id'];

?>


<?php
  ob_start();
  session_start();
    include_once 'actions/db_connect.php';

    if( isset($_SESSION['user']) ) {
   
  // select logged-in admin detail
  $query = "SELECT * FROM admin WHERE id=".$_SESSION['user'];
  $res = mysqli_query($conn, $query);
  $userRow = mysqli_fetch_assoc($res);
  $userID = $userRow['id'];

};


  $filter = "all";

  $query1 = "SELECT * FROM event WHERE id=".$id;
  $res1 = mysqli_query($conn, $query1);
  $row1 = mysqli_fetch_assoc($res1);
  $userID1 = $row1['id'];

   $query2 = "SELECT * FROM event ";

  $res2 = mysqli_query($conn, $query2);
  $row2 = mysqli_fetch_assoc($res2);

  ?>



 
<?php include('header.php'); ?>
</div>
</nav>




<div class="container hero">
    <div class="row">
         <h1 class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="text-shadow: 0 3px 04px;"><i>Vienna Events</i></h1>
    </div>
</div>

<div class="container">
        <div class="row single ">
                <div class='col-sm-12 center'>
                        <div class='card1 text-center cardsingle'>
                            <div class='card-header'><b><?php echo $row1["type"]; ?></b>
                            </div>
                              <img class="card-img" src='<?php echo $row1["header_img"]; ?>' alt='img load failed'>
                            <div class='container1 card-body'>
                                <h3><?php echo $row1["name"]; ?></h3>
                                <hr>
                                <p><?php echo $row1["description"]; ?></p>
                                <hr>
                                <p>Start: <?php echo $row1["start_date"] ?></p>
                                <p>End: <?php echo $row1["end_date"]; ?></p>
                                <hr>
                                <p>Link: <?php echo $row1["url"]; ?>"</p>
                                <hr>
                                <p>Tickets: max. <?php echo $row1["capacity"]; ?> tickets available</p>
                                <hr>
                                <div class='contact_details'>
                                    <p>Telephone: <?php echo $row1["contact_phone"]; ?>"</p>
                                    <p>E-Mail: <?php echo $row1["contact_email"]; ?></p>
                                    <p>Location: <?php echo $row1["address"]; ?></p>
                                    <p>Adress: <?php echo $row1["city"]; ?></p>
                                </div>
                             
                                 <!-- <div> 
                                 <a href='index.php'' class='btn btn-secondary btn-light '>Back</a>
                                 </div>
                                 <br>
                                <div>
                                  <a href='update.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                                  <a href='delete.php?id=".$row['id']."'><button type='button'>Delete Event</button></a>
                                  <a href='create.php'><button type='button'>Add Event</button></a>
                                </div> -->
                            </div>
                        </div>
                </div>  
        </div>
</div>


      <!-- <a href='index.php'><button type='button' class="btn btn-primary">Back</button></a>
 -->



<?php require_once 'footer.php'; ?>




<?php ob_end_flush(); ?>