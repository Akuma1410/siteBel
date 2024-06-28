<?php

require_once ('include/_inc_parametres.php');
require_once ('include/_inc_connection.php');

try {
    // Requête SQL pour la recherche des ingrédients et des produits
    $sql = "SELECT bocal.id AS bocal_id, ingredient.nom AS nom_ingredient, composer.proportion, 0
            FROM ingredient
            JOIN composer ON ingredient.id = composer.id_ingredient
            JOIN bocal ON composer.id_bocal = bocal.id
            JOIN comporter ON comporter.id_bocal = bocal.id
            UNION
            SELECT bocal.id AS bocal_id, produit.nom AS nom_produit, comporter.proportion, acheté
            FROM produit
            JOIN comporter ON produit.id = comporter.id_produit
            JOIN bocal ON comporter.id_bocal = bocal.id
            ORDER BY proportion DESC";

    // voir avec Mme Bel pour la proportion des ingredient

    // Préparation de la requête
    $stmt = $cnx->prepare($sql);
    // Exécution de la requête
    $stmt->execute();
    // Récupération des résultats de la requête
    $ingredientProductResults = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Organiser les résultats par bocal_id
    $ingredientsProducts = [];
    foreach ($ingredientProductResults as $row) {
        if (!isset($ingredientsProducts[$row['bocal_id']])) {
            $ingredientsProducts[$row['bocal_id']] = [];
        }
        $ingredientsProducts[$row['bocal_id']][] = $row['nom_ingredient'];
    }
} catch(PDOException $e) {
    // Gestion des erreurs
    echo "Erreur : " . $e->getMessage();
}
?>