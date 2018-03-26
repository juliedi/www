<?php
$row = 1; //numéro de la ligne dans le fichier
if (($handle = fopen("accords.csv", "r")) !== FALSE):
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)://$data = les données du tableau
        $num = count($data);//$num = compte les champs (colonnes pour la db)
       echo "<br /><br /><p> $num champs à la ligne $row:</p>";
        $row++;
        for ($c=0; $c < $num; $c++):
           echo $data[$c] . " | ";
        endfor;
    endwhile;
    fclose($handle);
endif;
?>
