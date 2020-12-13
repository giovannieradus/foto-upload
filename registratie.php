<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foto-Upload</title>
</head>
<body>
<style>
body{
 background-image: url("Img/background.jpg");
 filter: grayscale(100%);
 background-repeat: no-repeat;
 background-size: cover;
}
</style>
<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-3">
                    <div id="login-box" class="col-md-8">
                        <form id="login-form" class="form" action="registratie_verwerk.php" method="post">
                            <div class="form-group">
                                <label for="username" class="text-dark">Username:</label><br>
                                <input required type="text" name="Username" id="username" class="form-control">
                            </div>
            
                            <div class="form-group">
                                <label for="username" class="text-dark">Email:</label><br>
                                <input required type="text" name="Email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">Password:</label><br>
                                <input required type="password" name="Password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="Registreer" class="btn btn-dark btn-md" value="Registreer">
                                <a href="login.php" style="margin-left:13px;" class="btn btn-light btn-md">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
html{
}
body {
  margin: 0;
  padding: 0;
  height: 100vh;

}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 400px;
  background: rgba(255,255,255,0.8);
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>
</html>