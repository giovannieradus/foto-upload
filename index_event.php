<!DOCTYPE html>
<html lang="en">
<head>
<?php require 'session.php';
      require 'config.php';
      echo $_SESSION['ID_Gebruiker'];
      ?>
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

  <div class="container">
<?php

require_once 'config.php';
require 'session.php';
$Select = $_POST['select'];

$query = "SELECT * FROM `FOTOS` WHERE ID_EVENT =  $Select" ;
$result = mysqli_query($mysqli, $query);
if (mysqli_num_rows($result) == 0)
{
echo "<p>Er zijn geen resultaten gevonden.</p>";
}
while ($rij = mysqli_fetch_array ($result) )
{
  foreach ($result as $item) {
    echo "
  
      <img class='content-image' src='Img/" . $item['Bestand'] . "'>

<style>

.content{
  margin: 0 auto;
}




.content-image{
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 20px;
  max-width: 700px;
max-height: 700px;
}
.content .content-overlay {
  background: rgba(0,0,0,0.5);
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  opacity: 0;
  -webkit-transition: all 0.4s ease-in-out 0s;
  -moz-transition: all 0.4s ease-in-out 0s;
  transition: all 0.4s ease-in-out 0s;
}

.fadeIn-top{
  top: 20%;
}
@media screen and (max-width: 600px) {
  .card {
    max-width: 500px; height: auto;
  }
  .content-image{
    display: block;
    margin-left: auto;
    margin-right: auto;
    max-width: 300px;
  max-height: 300px;
  }
  #button1{
    color:white;
    font-size:12px;
  }
}

.content-details {
  position: absolute;
  text-align: center;
  padding-left: 1em;
  padding-right: 1em;
  width: 100%;
  top: 50%;
  left: 50%;
  opacity: 0;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}
#button1{
  color:white;
  font-family: 'Alata', sans-serif;
  font-size:18px;
}
</style>
";
}
}

?>

  </div> 
</body>
</html>


