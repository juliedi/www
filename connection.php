<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=datagouv;charset=utf8', "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>