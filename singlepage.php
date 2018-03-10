<?php
$id ='"'.$_GET['id'].'"';

?>


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


$filter = "all";

  $query1 = "SELECT * FROM event WHERE id=".$id;
  $res1 = mysqli_query($conn, $query1);
  $row1 = mysqli_fetch_assoc($res1);
  $userID1 = $row1['id'];

   $query2 = "SELECT * FROM event ";

  $res2 = mysqli_query($conn, $query2);
  $row2 = mysqli_fetch_assoc($res2);
  $type = '"'.$row2["type"].'"';

?>

<?php include('header.php'); ?>


<!-- <div class="container hero"> -->
    <div class="row">
         <h1 class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="text-shadow: 0 3px 04px;"><i>Vienna Events</i></h1>
    </div>
</div>

<div class="container">    
  <div class="row">

  
                  <?php

            $sql = "SELECT * FROM event WHERE type=".$id;

            $result = $conn->query($sql);

            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    if ($userD==1) {
                   
               echo "<div class='col-md-6 col-sm-6 col-lg-4'>
                            <div class='card'>
                              <img  src='".$row["image"]."'alt='image loading failed'>
                              <div class='container1 card-body'>
                                <h3 style='margin-right: 20px; margin-left: 20px;'>".$row['name']."</h3>
                                <p>Start: ".$row['start_date']."</p>
                                 <p>End: ".$row['end_date']."</p>
                                 <div> 
                                 <a href='singlepage_event.php?id=".$row['id']."'><button type='button' class='btn btn-secondary btn-light'>Read More</button></a>
                                 </div>
                                 <br>
                                <div>

                                  <a href='update.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                                  <a href='delete.php?id=".$row['id']."'><button type='button'>Delete Event</button></a>
                                 
                                </div>
                              </div>
                            </div>
                         </div>";
                }
                else{
                         
               echo "<div class='col-md-6 col-sm-6 col-lg-4'>
                            <div class='card'>
                              <img  src='".$row["image"]."'alt='image loading failed'>
                              <div class='container1 card-body'>
                                <h3 style='margin-right: 20px; margin-left: 20px;'>".$row['name']."</h3>
                                <p>Start: ".$row['start_date']."</p>
                                 <p>End: ".$row['end_date']."</p>
                                 <div> 
                                 <a href='singlepage_event.php?id=".$row['id']."'><button type='button' class='btn btn-secondary btn-light'>Read More</button></a>
                                 </div>
                                 <br>
                                <div>

                                 
                                </div>
                              </div>
                            </div>
                         </div>";
                     }   
                }
            } 
            else {
                echo "<div><center>No Data Avaliable</center></div>";
            }
            ?>
        </div>
    </div>


     


  </div>
</div>
<?php require_once 'footer.php'; ?>

<?php ob_end_flush(); ?>