<?php
//On se connecte à la bdd
include('connection.php');

$case_cochee = $_POST['choixVin'];

$requete = $db->query("SELECT wine_name FROM wines WHERE wine_type = '$case_cochee' LIMIT 0 , 8");
$vins = $requete->fetchAll();

foreach($vins as $key => $vin)
{
echo '<input id="#crus" class="cru" type="checkbox" name="choixCru" value="'.$vin['wine_name'].'">'.$vin['wine_name'].'<br/>';
}
?>
 
