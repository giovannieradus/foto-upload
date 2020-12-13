<?php
require 'config.php';

require 'session.php';
$Select = $_POST['select'];
$Datum = $_POST['datum'];
$User_ID = $_SESSION['ID_Gebruiker'];
$Foto1 = $_FILES['Foto1']; 
$Naam1 = $Foto1['name'];
$date = date('Y-m-d');
if (isset($Foto1)){

    $file_name =  $Foto1['name'];
    $file_type =  $Foto1['type'];
    $file_size =  $Foto1['size'];
    $file_tem_loc = $Foto1['tmp_name'];
    $file_store = "Img/" . $file_name;  

    if(move_uploaded_file($file_tem_loc, $file_store)){
        echo 'jaja';
    }
    else{
        echo "foutje";
    }
}


$query = "INSERT INTO `FOTOS` VALUES (NULL,'$Naam1','$User_ID','$date','$Select')";



if (mysqli_query($mysqli ,$query)) {
    header("Location: index.php");
   
   

}
else {
    echo 'Try again, Remove the quote signs';
    echo $query;
}
?>