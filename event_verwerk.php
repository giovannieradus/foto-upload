<?php
require 'config.php';

require 'session.php';
$gebruikerid = $_SESSION['ID_Gebruiker'];
$eventid = $_POST['select'];

$Foto1 = $_FILES['Foto1']; 

if (isset($Foto1)){

    $file_name =  $Foto1['name'];
    $file_type =  $Foto1['type'];
    $file_size =  $Foto1['size'];
    $file_tem_loc = $Foto1['tmp_name'];
    $file_store = "Ticket/" . $file_name;  

    if(move_uploaded_file($file_tem_loc, $file_store)){
        echo 'jaja';
    }
    else{
        echo "foutje";
    }
}


$query = "INSERT INTO `EVENT_GEBRUIKERS`(`ID_Gebruiker`, `ID_Event`) VALUES ('$gebruikerid','$eventid')";



if (mysqli_query($mysqli ,$query)) {
    header("Location: index.php");
   
   

}
else {
    echo 'Try again, Remove the quote signs';
}
?>