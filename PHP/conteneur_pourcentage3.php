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
    $req4 = mysqli_query($conn, 'SELECT pourcentage FROM gris WHERE idPoubelle=3');
    $donnees4 = mysqli_fetch_array($req4) ; 
    $pourcentage3 = $donnees4['pourcentage'];
    echo $pourcentage3;
    
?>