<!DOCTYPE html>
<html lang="en">
<head>
<?php require 'session.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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

 
</video>
  <div class="container">
  
  <form class="form-inline" method="POST"  action="index_event.php" enctype="multipart/form-data">
  <h1 id='textje'>Selecteer Je Event!</h1>
<div class="form-group">
<label class='mx-sm-3 mb-2' id='event' for="event">Event:</label>
<?php

require_once 'config.php';
require 'session.php';

$id = $_SESSION['ID_Gebruiker'];
$mysqli = mysqli_connect('localhost', 'root', 'root', 'db_beroeps');
$sql = "SELECT EVENT_GEBRUIKERS.ID_Event, EVENT.Naam FROM `EVENT_GEBRUIKERS`, `EVENT` WHERE EVENT.ID_Event = EVENT_GEBRUIKERS.ID_Event AND `ID_Gebruiker` = $id ";
$result = mysqli_query($mysqli, $sql);
echo "<select class='mx-sm-3 mb-2 form-control form-control-md' name='select'>";
while ($row = mysqli_fetch_array($result)) {
echo "<option value='" . $row['ID_Event'] . "'>" . $row['Naam'] . "</option>";
}
echo "</select>";
?>
</div>
<div class="form-group mx-sm-3 mb-2">
<button type="submit" class="btn btn-light ">Zoek!</button>
</div>
</form>
<video autoplay muted loop id="myVideo">
  <source src="sheck.mp4" type="video/mp4">
  </div>
  <style>
form{
  margin: auto;
  margin-top: 220px;
  width: 35%;

}
#event{
  color: white;
  font-weight: bold;
  font-size: 20px;
  
}
#myVideo {
  object-fit: cover;
  width: 100vw;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  z-index: -3;
}
@media screen and (max-width: 600px) {
  form{
  margin: auto;
  margin-top: 220px;
  width: 69%;

}
}

</body>
</html>


