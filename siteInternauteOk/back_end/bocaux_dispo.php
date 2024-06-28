<?php

require_once ('include/_inc_parametres.php');
require_once ('include/_inc_connection.php');

// Déterminer le type de bocal à afficher
$typeBocal = isset($_GET['type']) ? intval($_GET['type']) : 1; // Par défaut, afficher les bocaux salés (type = 1)

// Requête SQL pour la recherche des bocaux sucrés
$sql = "SELECT bocal.id AS id, Bocal.nom, Bocal.id_type_bocal, Bocal.prix_bocal, Bocal.poids, Categorie.nom as nom_categorie, Bocal.disponibilite_bocal, type_bocal.description as desc_type_bocal
        FROM bocal
        JOIN Categorie ON Bocal.id_categorie = Categorie.id
        JOIN type_bocal ON bocal.id_type_bocal = type_bocal.id
        WHERE Bocal.id_type_bocal =:id_type_bocal";
//
// var_dump($_GET) ;
try {

    // Préparation de la requête
    $stmt = $cnx->prepare($sql);

    // ne pas oublier le bindparam
    // Liaison du paramètre :id_type_bocal à la variable $id_type_bocal
    $stmt->bindParam(':id_type_bocal', $typeBocal, PDO::PARAM_INT);
    
    // Exécution de la requête
    $stmt->execute();
    // Récupération des résultats de la requête
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($results);
    // inclure le fichier qui recherche bocal par bocal les ingredients
    $groupedResults = [];
    foreach ($results as $row) {
        $groupedResults[$row['nom_categorie']][] = $row;
        if (empty($descriptionTypeBocal)) {
            $descriptionTypeBocal = $row['desc_type_bocal'];
        }
    }
    // Debugging purposes
    // var_dump($groupedResults);
    } 
    catch(PDOException $e) {
        // Gestion des erreurs
        echo "Erreur : " . $e->getMessage();
    }

    // Déterminer la sous-dossier en fonction du type
    if ($typeBocal == 1) {
        $subfolder = 'sale';
    } else if ($typeBocal == 2) {
        $subfolder = 'sucre';
    } else {
        $subfolder = 'divers'; // Vous pouvez définir un dossier par défaut si nécessaire
    }
?>