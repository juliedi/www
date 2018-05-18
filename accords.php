<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Data_Project">
    <meta name="author" content="Julie Dietsch, Quentin Husler, Nicola Farion">
    <meta name="keywords" content="HTML,CSS,Php,JavaScript, AngularJs">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <title>WWW</title>
</head> 
<body> 

    <div id="main"> 
        <div id="navbar"> 
            <div class="topnav"> 
                <a href="index.php" class="active"><img style="height: 17px;" src="Images/logoWWWwhite.png" alt="logo"></a>
                <a href="team.html">Equipe</a>
                <a href="contact.html">Contact</a>
                <a href="about.html">About</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
            </div> 
        </div> 
    </div>

    <div id="page2_content"> 
        <div id="flex_div">
            <div id="grand_cadre"> </div> 
            <div id="ttlescadres">
                <div id="cadre1"> 
                    <h4>VOUS POUVEZ ASSOCIER VOTRE VIN AVEC :</h4>
                    <?php
                    include('connection.php');

                    //$case_cru = $_GET['choixCru'];
                    
                    $result = $db->prepare("SELECT * from food
                    JOIN accords ON accords.id_food = food.id 
                    JOIN wines on wines.id = accords.id 
                    WHERE accords.id = 2"); 
        
                    $result->execute();
                    $plats = $result->fetchAll();
                    
                    ?>
                    <ul>
                    <?php foreach($plats as $plat) {
                        echo "<li>".$plat['food_name']."</li>";
                    }
                    ?>
                    </ul>

                </div> 
            </div> 
        </div>
    </div>  
    
    <footer id="mentions" class="about_footer"> 
        <p class="footer">
            <a href="mentions_legales.html">Mentions Légales</a> 
            <a href="https://www.facebook.com/AccessCodeSchool/"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
            « L'abus d'alcool est dangereux pour la santé, consommez avec modération »
        </p>
    </footer>

    <script type="text/javascript" src="js/fichier.js"></script>
    <script type="text/javascript" src="js/afficher_cacher_div.js"></script>
</body>
</html>
