<?php
if (!isset($_POST['Inlog'])){

require_once 'config.php';

$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];


$opdracht = "INSERT INTO `LOGIN`
VALUES (NULL, '$Username', '$Password', '$Email','0')";




if (mysqli_query($mysqli ,$opdracht))
{
header("location:login.php");


}
else
{
    header("location:registratie.php");
    
}

}

?>