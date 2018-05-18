<?php include('header.php') ?>

    <div id="home"class="container">
        <div class="row">
            <div class="col-lg-12"> 
                <h1 class="www">What With (my) Wine?</h1>
                <P>WWW est un moteur de recherche qui vous propose les accords entre vins et plats suggérés par les consommateurs.</p> 
                <p>Cliquez sur l'une des vignettes de votre choix pour définir tout ou partie de vos filtres de recherche:</P>        
            </div> 
        </div>
        <div class="row choix">
            <div  class="col-lg-6 choix_vin" style="font-size:30px;cursor:pointer;color:white" onclick="openNav()"> 
                <h2 id="ouvrir">Choix par vin</h2>
            </div> 
            <div  class="col-lg-6 choix_plat" style="font-size:30px;cursor:pointer;color:white" onclick="openNav2()"> 
                <h2 id="ouvrir2">Choix par plat</h2>
            </div> 
        </div >   
    </div>

    <section>
        <div id="myWine" class="sidenav"> 
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div id="sidebar_content"> 
                <h2 class="vin">SELECTIONNEZ UN TYPE DE VIN:</h2>
                <form class="typevin" action="choixvin.php" method="post">
                    <input class="blanc" type="checkbox" name="choixVin" value="Blanc"> Blanc <br/>
                    <input class="petillant" type="checkbox" name="choixVin" value="Pétillant"> Pétillant <br/>
                    <input class="rose" type="checkbox" name="choixVin" value="Rosé"> Rosé <br/>
                    <input class="rouge" type="checkbox" name="choixVin" value="Rouge"> Rouge <br/>
                    <button class="button">Afficher les crus</button>
                </form>
            </div>
            <div id="sidebar_content2"> 
                <h2 class="cru">SELECTIONNEZ UN CRU:</h2>
                <div id="vins"> </div>   
            </div>
            <a href="accords.php?choixCru=1"><button class="button2">Voir les Résultats</button></a>
        </div> 

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
            <a href="accords.php"><button style="margin-left: -2%" class="button">Voir les Résultats</button></a>
        </div>
    </section>

    <?php include('footer.php') ?>

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
    <script type="text/javascript" src="js/fichier.js"></script>
    <script type="text/javascript" src="js/afficher_cacher_div.js"></script>
</body> 
</html> 