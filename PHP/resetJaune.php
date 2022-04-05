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
                        
                        /*$sql="UPDATE gris SET pourcentage = $pourcentage";*/
                        
                       $nbrSac = 0;

                        
                        
                            $sql = "UPDATE recyclable SET nbrSac = $nbrSac " ;
                            if (mysqli_query($conn, $sql)) {
                            echo "<br>Nouveau enregistrement 2 créé avec succès";
                            }
                            else {
                            echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
                            }
                            
?>