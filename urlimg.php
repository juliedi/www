<?php $img_url = "http://localhost/leprojet/img/"; ?>
<!DOCTYPE html> 
<html lang="en"> <!-- Début du HTML -->
<head> <!-- Début du Head -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Data_Project">
    <meta name="author" content="JulieDi, EpicWaxx, Kateya, NinjaRetroGaming">
    <meta name="keywords" content="HTML,CSS,Php,JavaScript, AngularJs">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <title>WWW</title>
</head> <!-- Fin du Head -->
<body> <!-- Début du Body -->

<div id="mySidenav" class="sidenav"> <!-- Début de la div sidenav -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div id="sidebar_content"> <!-- Début de la div sidebar_content -->
    <h1 class="vin">SELECTIONNEZ UN TYPE DE VIN:</h1>
        <a href="index.html">Blanc</a>
        <a href="index.html">Pétillant</a>
        <a href="index.html">Rosé</a>
        <a href="index.html">Rouge</a>
  </div> <!-- Fin de la div sidebar_content -->
  <div id="sidebar_content2"> <!-- Début de la div sidebar_content2 -->
        <h1 class="cru">SELECTIONNEZ UN CRU:</h1>
            <a href="index.html">Rouge</a>
            <a href="index.html">Gewurtzraminer</a>
            <a href="index.html">Pinot</a>
            <a href="index.html">Riesling</a>
  </div> <!-- Fin de la div sidebar_content2 -->
  <button class="button button5">Voir les Résultats</button>
</div> <!-- Fin de la div sidenav -->
<div id="main"> <!-- Début de la div main -->
    <div id="navbar"> <!-- Début de la div navbar -->
        <div class="topnav"> <!-- Début de la div topnav -->
            <a href="index.html" class="active">Home</a>
            <a href="team.html">Equipe</a>
            <a href="contact.html">Contact</a>
            <a href="about.html">About</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div> <!-- Fin de la div topnav -->
    </div> <!-- Fin de la div navbar -->
</div> <!-- Fin de la div main -->
<div id="page2_content"> <!-- Début de la div page2_content -->
    <div id="flex_div"> <!-- Début de la div flex_div -->
        <div id="grand_cadre"> <!-- Début de la div grand_cadre -->
        </div> <!-- Fin de la div grand_cadre -->
        <div id="ttlescadres"> <!-- Début de la div ttlescadres -->
            <div id="cadre1"> <!-- Début de la div cadre1 -->
                <h4>VOUS POUVEZ ASSOCIER VOTRE VIN AVEC :</h4>
                <div id="sansnom"> <!-- Début de la div sansnom -->
                    <div class="carre" id="content_cadre"> <!-- Début de la div content_cadre -->
                        <img src="<?php echo $img_url.$nomdelimage ?>" alt="">
                    </div> <!-- Fin de la div content_cadre -->
                    <h3>Lorem Ipsum <br> Dolor Amet</h3>
                </div> <!-- Fin de la div sansnom -->
                <div id="sansnom"> <!-- Début de la div sansnom -->
                    <div class="carre" id="content_cadre"> <!-- Début de la div content_cadre -->
                    </div> <!-- Fin de la div content_cadre -->
                    <h3>Lorem Ipsum <br> Dolor Amet</h3>
                </div> <!-- Fin de la div sansnom -->
                <div id="sansnom"> <!-- Début de la div sansnom -->
                    <div class="carre" id="content_cadre"> <!-- Début de la div content_cadre -->
                    </div> <!-- Fin de la div content_cadre -->
                    <h3>Lorem Ipsum <br> Dolor Amet</h3>
                </div> <!-- Fin de la div sansnom -->
            </div> <!-- Fin de la div cadre1 -->
        </div> <!-- Fin de la div ttlescadres -->
    </div> <!-- Fin de la div flex_div -->   
    
<footer> <!-- Début de la div Footer -->
    <p>Mentions Légales - Réseaux sociaux - Crédits</p>
</footer> <!-- Fin de la div Footer -->

<script type="text/javascript" src="fichier.js"></script>
<script type="text/javascript" src="afficher_cacher_div.js"></script>
</body> <!-- Fin du Body -->
</html> <!-- Fin du html -->
