<?php

// Paramètres de connexion
$server = "mysql.hostinger.fr";
$bdd = "u516518988_hdz";
$user = "u516518988_hdz";
$pass = "azerty";

try
{
        // On créer un connexion à la base de données via un objet PDO
        $connexion = new PDO('mysql:host='.$server.';dbname='.$bdd, $user, $pass);
        // On fixe l'encodage en UTF-8
        $connexion->query("SET NAMES UTF8");
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
