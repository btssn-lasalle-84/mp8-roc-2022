<?php
$hostname = "localhost";
$username = "matthieu";
$conn = mysqli_connect ($hostname, $username);
if($conn ->connect_error)
{
        echo("Connection failed: " . $conn->connect_error);
        exit();
}
/*printf("Version du serveur : %s\n", mysqli_get_server_info($conn));*/
$nomDeBase = "roc1";
mysqli_select_db($conn,$nomDeBase );
$req2 = mysqli_query($conn, 'SELECT pourcentage FROM recyclable where idPoubelle =1');
$donnees2 = mysqli_fetch_array($req2) ; 
$pourcentage1 = $donnees2['pourcentage'];
echo $pourcentage1;

?>