<meta http-equiv="refresh" content="60">

<?php
$fichier = "/dev/ttyUSB0";
$ouverture =fopen($fichier,"r");
if($ouvertureFichier = fopen($fichier,"r"))
{
    $data = fgets($ouverture, 9600);
    echo $data;
    fclose($ouvertureFichier);
}
       $n=0;
        $i =1;
        $nbrSac = 0;
        $IdSite = 0;
        $idPoubelle =0;
        $pourcentage=0;
        $latitude=0;
        $longitude=0;
       if ($data[0]== '*')
       {
           while($data[$i] !== '#')
           {
               if($data[$i]==='/')
               {
                   $n=$n+1;
                   $i=$i+1;
               }
                while($n===0)
                {
                    if ($idPoubelle === 0)
                    {
                        $idPoubelle =  $data[$i];
                    }
                    else{
                        $idPoubelle= $idPoubelle.$data[$i];
                    }
                    break;
                }
                while($n===1)
                {
                    if ($pourcentage === 0)
                    {
                        $pourcentage =  $data[$i];
                    }
                    else{
                        $pourcentage=$pourcentage.$data[$i];
                    }
                    break;
                }
                while($n===2)
                {
                    if ($nbrSac === 0)
                    {
                        $nbrSac =  $data[$i];
                    }
                    else{
                        $nbrSac= $nbrSac.$data[$i];
                    }
                    break;
                }
                while($n===3)
                {
                    
                    
                    if ($latitude === 0)
                    {
                        $latitude =  $data[$i];
                    }
                    else{
                        $latitude= $latitude.$data[$i];
                    }
                    break;
                }
                 while($n===4)
                {
                    
                    
                    if ($longitude === 0)
                    {
                        $longitude =  $data[$i];
                    }
                    else{
                        $longitude= $longitude.$data[$i];
                    }
                    break;
                }
                while($n===5)
                {
                    if ($IdSite === 0)
                    {
                        $IdSite =  $data[$i];
                    }
                    else{
                        $IdSite= $IdSite.$data[$i];
                    }
                    break;
                }
                $i=$i+1;
               
           }
       }
       settype($nbrSac, "integer"); 
        echo $idPoubelle;
        echo $pourcentage;
        echo $nbrSac;
        echo $latitude;
        echo $longitude;
        echo $IdSite;

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
                        
                        /*$sql="UPDATE gris SET pourcentage = $pourcentage";*/
                        
                       if($idPoubelle === '1')
                        {
                            $sql = "UPDATE recyclable SET pourcentage = $pourcentage " ;
                            if (mysqli_query($conn, $sql)) {
                            echo "<br>Nouveau enregistrement créé avec succès";
                            }
                            else {
                            echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
                            }
                        }
                        if($idPoubelle === '1')
                        {
                            $req = mysqli_query($conn, 'SELECT nbrSac FROM recyclable WHERE idPoubelle=1');
                            $donnees = mysqli_fetch_array($req) ; 
                            $sacTotal1 = $donnees['nbrSac'];

                            $sacTotal1 = $sacTotal1 + $nbrSac;


                            $sql = "UPDATE recyclable SET nbrSac = $sacTotal1 " ;
                            if (mysqli_query($conn, $sql)) {
                            echo "<br>Nouveau enregistrement 2 créé avec succès";
                            }
                            else {
                            echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
                            }
                        }
                        
                        if($idPoubelle === '2')
                        {
                            $sql = "UPDATE vert SET pourcentage = $pourcentage ";
                            if (mysqli_query($conn, $sql)) {
                            echo "<br>Nouveau enregistrement créé avec succès";
                            }
                            else {
                            echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
                            }
                        }
                        if($idPoubelle === '2')
                        {
                            $req = mysqli_query($conn, 'SELECT nbrSac FROM vert WHERE idPoubelle=2');
                            $donnees = mysqli_fetch_array($req) ; 
                            $sacTotal2 = $donnees['nbrSac'];

                            $sacTotal2= $sacTotal2+ $nbrSac;
                            $sql = "UPDATE vert SET nbrSac = $sacTotal2 ";
                            if (mysqli_query($conn, $sql)) {
                            echo "<br>Nouveau enregistrement créé avec succès";
                            }
                            else {
                            echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
                            }
                        }
                        if($idPoubelle === '3')
                        {
                            $sql = "UPDATE gris SET pourcentage = $pourcentage ";
                            if (mysqli_query($conn, $sql)) {
                            echo "<br>Nouveau enregistrement créé avec succès";
                            }
                            else {
                            echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
                            }
                        }
                        if($idPoubelle === '3')
                        {
                            $req = mysqli_query($conn, 'SELECT nbrSac FROM gris WHERE idPoubelle=3');
                            $donnees = mysqli_fetch_array($req) ; 
                            $sacTotal3 = $donnees['nbrSac'];

                            $sacTotal3= $sacTotal3+ $nbrSac;
                            $sql = "UPDATE gris SET nbrSac = $nbrTotal3 ";
                            if (mysqli_query($conn, $sql)) {
                            echo "<br>Nouveau enregistrement créé avec succès";
                            }
                            else {
                            echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
                            }
                        }


/*date_default_timezone_set('UTC');

echo date("l");*/

/*-------------------------------------------------------------------*/
?>