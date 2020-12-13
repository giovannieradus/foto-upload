<?php
if (isset($_POST['Inlog'])){

require_once 'config.php';

$Gebruikersnaam = $_POST['Username'];
$Wachtwoord = $_POST['Password'];


$opdracht = " SELECT * FROM LOGIN WHERE Gebruikersnaam = '$Gebruikersnaam' 
AND Wachtwoord = '$Wachtwoord'";


$result = mysqli_query($mysqli, $opdracht);


if (mysqli_num_rows($result) > 0)
{
    session_start();
    $_SESSION['Gebruikersnaam']  = $Gebruikersnaam;
    $_SESSION['ID_Gebruiker'] = mysqli_fetch_array($result)['ID_Gebruiker'];
    $_SESSION['Level'] = mysqli_fetch_array($result)['Level'];
    header("location:index.php");
}
else
{
    
    header("location:login.php");
    
}

}

?>