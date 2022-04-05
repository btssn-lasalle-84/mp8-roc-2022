<meta http-equiv="refresh" content="60">


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>comteneur</title>
    <link href="CSS/menu_projet.css" rel="stylesheet" type="text/css"/>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  </head>
  <body>
      
    <a id="wrapper" class="ancre"></a>
    <a id="close" class="ancre"></a>
    <a a href="#wrapper" id="menu1">
    <div>
    </div>
    </a>

  <a href="#close" id="close">
    </a>

  <div id="wrapper">
    <div id="image">
      <a href="menu_projet.html"> <img src="images/logo(1).png"></a>
    </div>
    <div id="right-ul">
      
      <ul>
        <li id="idmenu"> <a href="Site1.html">Site 1 : Place des Carmes</a> </li>
        <li id="idmenu"> <a href="Site2.html">Site 2 : Place des Corp-Saints</a> </li>
        <li id="idmenu"> <a href="Site3.html">Site 3 : Place de l'horloge</a>  </li>
        <li id="idmenu"> <a href="Ramassage.php">Ramassage des ordures</a></li>
      </ul>
    </div>
  </div>
  <nav>
  </nav>
<div id="contenu">
  <main>
    <div id="menu">
       
       <h1>Ramassage Optimisé et Connecté</h1>
            
        </div>
          <h3 class="title">Poubelles prêtes a être ramassées</h3>
          <p>cercle vert = pret à la collecte / cercle rouge = pas encore pret </p>
          <p id="presentation">
        </p>

        <table style="width: 100%;">
          <h1 style="text-align: center; text-decoration: underline;">site des carmes</h1>
          <tr>
            <td style="text-align:center;">poubelle jaune</td>
            <td style="text-align:center;">poubelle verte</td>
            <td style="text-align:center;">poubelle grise</td>
          </tr>
          <tr>
            <td><div id="conteneurPresJaune"></div>
            <?php
            $hostname = "localhost";
            $username = "matthieu";
            $conn = mysqli_connect ($hostname, $username);
            $nomDeBase = "roc1";
            mysqli_select_db($conn,$nomDeBase );
            $req2 = mysqli_query($conn, 'SELECT pourcentage FROM recyclable where idPoubelle =1');
            $donnees2 = mysqli_fetch_array($req2) ; 
            $pourcentage1 = $donnees2['pourcentage'];
            if ($pourcentage1 > 80)
            {
                $conditionJaune = "green";
               
                

            }
            else{
                 $conditionJaune = "red";
                
                 }   
          ?>  
          <div id="cercle1"></div>
                        <style> #cercle1{
                            width: 30px;
                            height: 30px;
                            border-radius: 20px;
                            background: <?php echo $conditionJaune ?>;
                            margin: auto;
                        }
                        </style>
          <button id="btnJauneCarmes" onclick="resetJaune()">reset Poubelle </button>
          <script>
            function resetJaune()
            {
              var xhttp = new XMLHttpRequest();
              xhttp.onredystatechange = function() {};
              xhttp.open("GET","PHP/resetJaune.php", true);
              xhttp.send();
            }
          </script>

          </td>
            <td> <div id="conteneurPresVerte">
              <?php 
                    $hostname = "localhost";
                    $username = "matthieu";
                    $conn = mysqli_connect ($hostname, $username);
                    $nomDeBase = "roc1";
                    mysqli_select_db($conn,$nomDeBase );
                    $req3 = mysqli_query($conn, 'SELECT pourcentage FROM vert WHERE idPoubelle =2');
                    $donnees3 = mysqli_fetch_array($req3) ; 
                    $pourcentage2 = $donnees3['pourcentage'];
                    if ($pourcentage2 > 80)
                        {
                            $conditionVert = "green";
                           
                            

                        }
                        else{
                             $conditionVert = "red";
                            
                             }   
                    ?>  
                    <div id="cercle2"></div>
                        <style> #cercle2{
                            width: 30px;
                            height: 30px;
                            border-radius: 20px;
                            background: <?php echo $conditionVert ?>;
                            margin: auto;
                        }
                        </style>
                        <button onclick="resetVert()">reset Poubelle </button>
                        <script>
                      function resetVert()
                      {     
                        var xhttp = new XMLHttpRequest();
                        xhttp.onredystatechange = function() {};
                        xhttp.open("GET","PHP/resetVert.php", true);
                        xhttp.send();
                      }
          </script>

                        </form>
                        
            </td>
            <td>
              <div id="conteneurPresGris">
                  <?php $hostname = "localhost";
                        $username = "matthieu";
                        $conn = mysqli_connect ($hostname, $username);
                        if($conn ->connect_error)
                        {
                            echo("Connection failed: " . $conn->connect_error);
                            exit();
                        }
                        $nomDeBase = "roc1";
                        mysqli_select_db($conn,$nomDeBase );
                        $req4 = mysqli_query($conn, 'SELECT pourcentage FROM gris WHERE idPoubelle=3 ');
                        $donnees4 = mysqli_fetch_array($req4) ; 
                        $pourcentage3 = $donnees4['pourcentage'];
    
                        if ($pourcentage3 > 80)
                        {
                            $conditionGris = "green";
                           
                            

                        }
                        else{
                             $conditionGris = "red";
                            
                             }   
                        ?>
                        <div id="cercle3"></div>
                        <style> #cercle3{
                            width: 30px;
                            height: 30px;
                            border-radius: 20px;
                            background: <?php echo $conditionGris ?>;
                            margin: auto;
                        }
                        </style>
                        <button onclick="resetGris()">reset Poubelle </button>

                        <script>
                      function resetGris()
                      {     
                        var xhttp = new XMLHttpRequest();
                        xhttp.onredystatechange = function() {};
                        xhttp.open("GET","PHP/resetGris.php", true);
                        xhttp.send();
                      }
                     </script>
                </div>
            </td>
          </tr>
        </table>

        <table>
        <h1 style="text-align: center; text-decoration: underline;">Place des corps saints</h1>
          <tr>
            <td>poubelle jaune</td>
            <td>poubelle verte</td>
            <td>poubelle grise</td>
          </tr>
        </table>
        <table>
          <h1 style="text-align: center; text-decoration: underline;">Place de l'horloge</h1>
          <tr>
            <td>poubelle jaune</td>
            <td>poubelle verte</td>
            <td>poubelle grise</td>
          </tr>
        </table>
<!--graphique-->

<link
    rel=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
    type="text/css"
  />
  <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script
    src=
"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
    type="text/javascript"
  ></script>
  <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  <script src=
"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
  <style>
    .container {
      width: 70%;
      margin: 15px auto;
    }
    h2{
      text-align: center;
      color:blue;
    }
  </style>
  <body>
    <div class="container">
      <h2>Historique du site des carmes</h2>
      <h2>et graphique du remplissage </h2>
      <div>
        <canvas id="myChart"></canvas>
      </div>
    </div>
  </body>
  
  <script>
    var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
      type: "line",
      data: {
        labels: [
          "lundi",
          "mardi",
          "mercredi",
          "jeudi",
          "vendredi",
          "samedi",
          "dimanche",
        ],
        datasets: [
          {
            label: "poubelle jaune",
            data: [2, 9, 3, 17, 6, 3, 7],
            backgroundColor: "rgba(243, 245, 39, 0.8)",
          },
          {
            label: "poubelle verte",
            data: [2, 2, 5, 5, 2, 1, 40],
            backgroundColor: "rgba(23, 255, 92, 0.8)",
          },
          {
            label: "poubelle grise",
            data: [9, 9, 5, 5, 6, 1, 4],
            backgroundColor: "rgba(52, 52, 52, 0.4)",
          },
        ],
      },
    });
  </script>
  </body>
</html>