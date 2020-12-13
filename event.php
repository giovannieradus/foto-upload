<!DOCTYPE html>
<html lang="en">
<head>
<?php require 'session.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" 
      type="image/png" 
      href="Img/Logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="htstps://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Foto-Upload</title>
</head>
<body>
<nav id='nav' class="navbar navbar-expand-lg navbar-light bg-light mynav shadow-lg p-3 mb-5 bg-white rounded ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
      aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Foto-Upload</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="index.php">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="toevoeg.php">Foto Uploaden</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="eventaanmeld.php">Event Aanmelden</a>
        </li>
        <?php 
        if($_SESSION['ID_Gebruiker'] == '5'){
        echo '<li class="nav-item">
        <a class="nav-link" href="event.php">Event Aanmaken</a>
      </li>';
        }
        ?>
      </ul>
      <div class="navbar-nav ml-auto">
        <a href="loguit.php" class="nav-item nav-link">Loguit</a>
      </div>
    </div>
  </nav>
  </li>
  </li>
  </ul>
  </div>
  </nav>
  <div class="container">
    <div class="row">
    <div class="col-md"></div>
      <div class="col-md">
        <form method="POST" action="event1.php" enctype="multipart/form-data">
         <div class="form-group">
                <label for="Merk">Naam</label>
                <input type='text' class="form-control" id="naam" name="naam">
              </div>
              <div class="form-group">
                <label for="Merk">Datum</label>
                <input type="date" class="form-control" id="datum" name="datum">
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          
        </form>
      </div>
      <div class="col-md"></div>
    </div>
  </div>
</body>
</html>