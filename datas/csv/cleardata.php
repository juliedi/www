<?php
//---------------pour se connecter à la bdd-----------------------------------------------------------------------------------------------

include('connection.php');

//---------------pour lire le fichier csv comme un tableau--------------------------------------------------------------------------------

$already_insert = [];//Tableau "virtuel" pour stocker les ID et voir s'il est déjà apparu dans les lignes du csv
$row = 1; //numéro de la ligne dans le fichier "csv"
if (($handle = fopen("accords.csv", "r")) !== FALSE):
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)://$data = les données du tableau csv
        $num = count($data);//$num = compte les champs (les futures colonnes pour la db)

//----------------pour envoyer en base de données-------------------
//FOOD
    if(!in_array($data[1], $already_insert)){ //Si le champs 1 ne se trouve pas dans le tableau "already_insert" --->prépare la table et insère les infos
            $food_db = $db->prepare('INSERT INTO food(food_name, food_type, food_class, ingredient) VALUE (:food_name, :food_type, :food_class, :ingredient)');//Préparation de l'envoi dans la table des plats :
            $food_db->execute(array(':food_name' => $data[1], ':food_type' => NULL,':food_class' => NULL,':ingredient' => NULL));//On execute = on lie les noms des colonnes aux données correspondantes du tableau 
            $id_food = $db->lastInsertId();
            array_push($already_insert, $data[1]);//Attention : ordre précis pour la fonction in_array(ce que je cherche,[ensuite] où je le cherche)
    }
    else { 
        $plat = $db->prepare("SELECT id FROM food WHERE food_name=?"); //sinon, sélectionne l'id de food_name dans la table food
        $plat->execute(array($data[1])); //Stocke-le dans un tableau 
        $infos = $plat->fetch(); //Cherche les infos stockées ds $plat, on les appellera $infos
        $id_food = $infos['id']; // L'id_food sera L'id récupéré par $infos depuis $
//WINES        
    }        
    if(!in_array($data[3], $already_insert)){//Mêmes étapes pour le vin
            $wine_db = $db->prepare('INSERT INTO wines(wine_name, wine_type, region) VALUE (:wine_name, :wine_type, :region)');//idem pour les vins
            $wine_db->execute(array(':wine_name' => $data[3],':wine_type' => NULL,':region' => NULL));
            $id_wine = $db->lastInsertId();
            array_push($already_insert, $data[3]);
    }
    else {
        $wine = $db->prepare("SELECT id FROM wines WHERE wine_name='".$data[3]."'");
        $plat->execute(array($data[3]));
        $infos = $plat->fetch();
        $id_wine = $infos['id'];
    }
//TABLE DE JOINTURE    
            $accords_db = $db->prepare('INSERT INTO accords(id, id_food) VALUE (:id, :id_food)');
            $accords_db->execute(array(':id' => $id_wine ,':id_food' =>$id_food ));

        $row++;
        for ($c=0; $c < $num; $c++):
            
        endfor;
    endwhile;
    fclose($handle);
endif;
?>


