<?php
$hostname = "localhost";
$username = "matthieu";
$conn = mysqli_connect ($hostname, $username);
if($conn ->connect_error)
{
        echo("Connection failed: " . $conn->connect_error);
        exit();
}

$nomDeBase = "roc1";
mysqli_select_db($conn,$nomDeBase );

$req = mysqli_query($conn, 'SELECT nbrSac FROM gris WHERE idPoubelle=3 ');
$donnees = mysqli_fetch_array($req) ; 
$sacGris1 = $donnees['nbrSac'];
echo $sacGris1;


  ?>