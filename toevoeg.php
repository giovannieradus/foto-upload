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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>ArchiveFashion</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img style='max-height:55px; max-height:55px;' src='Img/Logo.png'></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item active">
          <a class="nav-link" href="index.php">Pieces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="toevoeg.php">Add</a>
        </li>
    </ul>
 <?php
 if(isset($_SESSION[Username])){
 echo "
 <form class='form-inline my-2 my-lg-0' action='search.php' method='POST'>
 <input class='form-control mr-sm-2' type='search' name='naam' placeholder='Search'>
 <a href='profile.php' class='btn btn-secondary' style='margin-right:5px;' type='submit'>Profile</a>
 <a href='uitlog.php' class='btn btn-danger' type='submit'>Log Off</a>
 </form>";
 }
 else{
  echo "<form class='form-inline my-2 my-lg-0' action='search.php' method='POST'>
  <input class='form-control mr-sm-2' type='search' name='naam' placeholder='Search'>
  <a href='login.php' class='btn btn-danger' type='submit'>Log In</a>
  </form>";
 }
 ?>
  
  </div>
</nav>
  <div class="container">
    <div class="row">
      <div class="col-lg">
        <div class="form-group">
<script>
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                document.getElementById("foto1").style.maxWidth = "400px";
            document.getElementById("foto1").style.maxHeight = "400px";
        }

                reader.onload = function (e) {
                    $('#foto1')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
           
</script>
<img src="Img/download.png" width="300px" height="300px" id="foto1"  alt="your image" />
          </div>
      </div>
      <div class="col-md">
        <form method="POST" action="toevoeg1.php" enctype="multipart/form-data">
              <label for="exampleFormControlFile1">Foto</label>
            <div class="form-group">
              <input type="file" accept='image/*' class="form-control-file" name="Foto1" id="Foto1"
            onchange="readURL(this);">
        </div>
         <div class="form-group">
                <label for="Merk">Datum</label>
                <input type="date" class="form-control" id="datum" name="datum">
              </div>
            <div class="form-group">
                <label for="event">Event</label>
            <?php
              $sql=mysql_query("SELECT 'Naam', 'ID_Event' FROM `EVENT`");
if(mysql_num_rows($sql)){
$select= '<select name="select">';
while($rs=mysql_fetch_array($sql)){
      $select.='<option value="'.$rs['ID_Event'].'">'.$rs['Naam'].'</option>';
  }
}
$select.='</select>';
echo $select;
?>
 </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          
        </form>
      </div>
    
    </div>
  </div>
</body>
</html>