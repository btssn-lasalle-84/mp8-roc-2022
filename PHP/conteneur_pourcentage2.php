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
    $req3 = mysqli_query($conn, 'SELECT pourcentage FROM vert WHERE idPoubelle =2');
    $donnees3 = mysqli_fetch_array($req3) ; 
    $pourcentage2 = $donnees3['pourcentage'];
    echo $pourcentage2;
    
?>