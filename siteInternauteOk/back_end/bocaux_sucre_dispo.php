<?php

session_start();

require_once ('include/_inc_parametres.php');
require_once ('include/_inc_connection.php');


try {

    // Requête SQL pour la recherche des bocaux sucrés
    $sql = "SELECT Bocal.nom, Bocal.type_bocal, Bocal.prix_bocal, Bocal.poids, Ingredient.nom AS nom_ingredient
            FROM Bocal
            JOIN Composer ON Bocal.id = Composer.id_bocal
            JOIN Ingredient ON Composer.id_ingredient = Ingredient.id
            JOIN comporter ON Bocal.id = comporter.id_bocal
            JOIN produit on comporter.id_produit = produit.id
            WHERE Bocal.type_bocal = 2";

    // Préparation de la requête
    $stmt = $cnx->prepare($sql);
    // Exécution de la requête
    $stmt->execute();
    // Récupération des résultats de la requête
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } 
    catch(PDOException $e) {
        // Gestion des erreurs
        echo "Erreur : " . $e->getMessage();
    }

?>