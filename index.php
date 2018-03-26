<!DOCTYPE html> 
<html lang="fr"> 
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Data_Project">
    <meta name="author" content="Julie Dietsch, Quentin Husler, Nicola Farion">
    <meta name="keywords" content="HTML,CSS,html,JavaScript, AngularJs">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>WWW</title>
</head> 
<body> 

    <div id="main"> 
        <div id="navbar"> 
            <div class="topnav" id="myTopnav"> 
                <a href="index.php" class="active"><img style="height: 17px;" src="images/logoWWWwhite.png" alt="logo"></a>
                <a href="team.html">Equipe</a>
                <a href="contact.html">Contact</a>
                <a href="about.html">About</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>  
        </div> 
    </div> 

    <div id="home"class="container">
        <div class="row">
            <div class="col-12"> <!-- Début de la div titles -->
                <h1 class="www">What With (my) Wine?</h1>
                <P>WWW est un moteur de recherche qui vous propose les accords entre vins et plats suggérés par les consommateurs.</p> 
                <p>Cliquez sur l'une des vignettes de votre choix pour définir tout ou partie de vos filtres de recherche:</P>        
            </div> <!-- Fin de la div titles -->
        </div>
        <div id="choix"class="row">
            <div id="ouvrir" class="col-12"> 
                <div style="font-size:30px;cursor:pointer;color:white" onclick="openNav()"><img class="vin" src="images/wine_view.jpg" alt="photo vignette vin"></div>
            </div> 
            <div id="ouvrir2" class="col-12"> 
                <div style="font-size:30px;cursor:pointer;color:white" onclick="openNav2()"><img class="plat" src="images/table.jpg" alt="photo vignette plats"></div>
            </div> 
        </div >   
    </div>

    <section>
        <div id="myWine" class="sidenav"> 
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div id="sidebar_content"> 
                <h1 class="vin">SELECTIONNEZ UN TYPE DE VIN:</h1>
                <form class="typevin" action="choixvin.php" method="post">
                    <input class="blanc" type="checkbox" name="choixVin" value="Blanc"> Blanc <br/>
                    <input class="petillant" type="checkbox" name="choixVin" value="Pétillant"> Pétillant <br/>
                    <input class="rose" type="checkbox" name="choixVin" value="Rosé"> Rosé <br/>
                    <input class="rouge" type="checkbox" name="choixVin" value="Rouge"> Rouge <br/>
                    <input type="submit">
                </form>
                <script 
                    src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
                </script>
                <script>
                    $(function() { 
                        $('input[type="checkbox"]').bind('click',function() {
                            $('input[type="checkbox"]').not(this).prop("checked", false);
                        });
                        });
                    $("form").on("submit",function(e) {
                        e.preventDefault();
                        $.ajax({
                        method: "POST",
                        url: "choixvin.php",
                        data: { 'choixVin': $("input:checked").val()  }
                        })
                        .done(function( msg ) {
                        $("#vins").html(msg);
                        });
                    })
                </script>
            
            <div id="sidebar_content2"> <!-- Début de la div sidebar_content2 -->
                    <h1 class="cru">SELECTIONNEZ UN CRU:</h1>
                    <div id="vins"> </div>   
            </div> <!-- Fin de la div sidebar_content2 -->
            <a href="accords.php?choixCru=1"><button style="margin-left: -2%" class="button button5">Voir les Résultats</button></a>
        </div> <!-- Fin de la div sidenav -->

        <div id="myFood" class="sidenav"> 
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
            <div id="sidebar_content"> 
                <h1 class="food">SELECTIONNEZ UNE CATEGORIE DE PLAT:</h1>
                <ul>
                    <li>Apéritif</li>
                    <li>Entrée</li>
                    <li>Plat Principal</li>
                    <li>Fromage</li>
                    <li>Dessert</li>
                </ul>
            </div> 

            <div id="sidebar_content2"> 
                <h1 class="food">SELECTIONNEZ UN TYPE DE PLAT:</h1>
                <ul>
                    <li>Viande</li>
                    <li>Légumes</li>
                    <li>Plat unique</li>
                    <li>Poisson</li>
                    <li>Fruits de mer et crustacés</li>
                    <li>Fruits</li>
                    <li>Autres desserts</li>
                </ul>
            </div> 

            <div id="sidebar_content3"> 
                <h1 class="food">SELECTIONNEZ PAR INGREDIENT PRINCIPAL:</h1>
                <ul>
                    <li>Veau</li>
                    <li>Boeuf</li>
                    <li>Agneau</li>
                    <li>Porc</li>
                    <li>....</li>
                    <li>...</li>
                    <li>....</li>
                </ul>
            </div> 
            <a href="accords.php"><button style="margin-left: -2%" class="button button5">Voir les Résultats</button></a>
        </div>
    </section>

    <footer id="mentions" class="about_footer"> 
            <a href="mentions_legales.html"html>Mentions Légales</a>
            <a href="https://www.facebook.com/AccessCodeSchool/"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
            « L'abus d'alcool est dangereux pour la santé, consommez avec modération »
    </footer>

    <script type="text/javascript" src="js/fichier.js"></script>
    <script type="text/javascript" src="js/afficher_cacher_div.js"></script>
</body> <!-- Fin du Body -->
</html> <!-- Fin du html -->