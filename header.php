<!DOCTYPE html>

<html>

<head>

<title>Codereview 14 Event-side 
</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta http-equiv="refresh" content="index.php">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3 fixed-top">
  
    <a class="navbar-brand" href="<?php echo URLROOT; ?>"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarsExampleDefault">

      <!-- navbar links when signed in -->
      <ul class="navbar-nav mr-auto">
        <?php if(isset($_SESSION['user'])) { ?> 

          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact US</a>
          </li>
          <li class="nav-item bg-dark">
                    <div class="dropdown">
                <div class="nav-link dropdown bg-dark">
                <a class="dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Event's Type
                </a>
                <div class="dropdown-menu btn-inverse" aria-labelledby="dropdownMenuButton">
                  <?php
                  echo '<a class="dropdown-item" href="index.php">All Events</a>';
                 echo '<a class="dropdown-item" href="singlepage.php?id=Concert">Music</a>';
                  echo '<a class="dropdown-item" href="singlepage.php?id=Art">Art</a>';
                  echo '<a class="dropdown-item" href="singlepage.php?id=Festival">Festival</a>';
                  echo '<a class="dropdown-item" href="singlepage.php?id=Sport">Sport</a>';
                  ?>
                  
                </div>
              </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="create.php">create</a>
          </li>

        </ul>
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" href="#">Hi, 
              <?php echo $userRow['name']; ?> (Account) - <i class="far fa-user"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php?logout"><button type="button" class="btn btn-danger"> Sign Out </button></a>
          </li>
        

        <!-- navbar links when signed out -->

        <?php } else { ?>    

          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact US</a>
          </li>
          <li class="nav-item bg-dark">
                    <div class="dropdown bg-dark">
                <div class="nav-link dropdown bg-dark">
                <a class="dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Event's Type
                </a>
                <div class="dropdown-menu btn-inverse darken" aria-labelledby="dropdownMenuButton">
                  <?php
                  echo '<a class="dropdown-item" href="index.php">All Events</a>';
                 echo '<a class="dropdown-item" href="singlepage.php?id=Concert">Music</a>';
                  echo '<a class="dropdown-item" href="singlepage.php?id=Art">Art</a>';
                  echo '<a class="dropdown-item" href="singlepage.php?id=Festival">Festival</a>';
                  echo '<a class="dropdown-item" href="singlepage.php?id=Sport">Sport</a>';
                  ?>
                  
                </div>
              </div>
          </li>

        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>

        
        <?php } ?>
        
      </ul>
    </div>

  </nav>

  <div class="container-fluid" id="all_container" style="margin-top: 5em;">