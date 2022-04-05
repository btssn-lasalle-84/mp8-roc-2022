
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
/*$requete = "SELECT * FROM mesures";
if ($result = mysqli_query($conn, $requete, MYSQLI_STORE_RESULT))
{
    while($ligne = mysqli_fetch_array($result))
    {
        $id = $ligne["id"];
        $date = $ligne["date"];
        $heure = $ligne["heure"];
        $temperature = $ligne["temperature"];
        echo " <br> $id ; $date / $heure /$temperature ".PHP_EOL ;
    }
}
*/
$req = mysqli_query($conn, 'SELECT nbrSac FROM  recyclable WHERE idPoubelle=1');
$donnees = mysqli_fetch_array($req) ; 
$sacPoubelle1 = $donnees['nbrSac'];
echo $sacPoubelle1;

  ?>