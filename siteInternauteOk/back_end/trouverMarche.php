<?php
require_once ('include/_inc_parametres.php');
require_once ('include/_inc_connection.php');
try {
    // Requête SQL pour récupérer les marchés dont la date du jour ou la date du jour + 7 jours est comprise entre la période de début et de fin
    $sql = "SELECT * FROM Marche
    WHERE CURRENT_DATE BETWEEN periode_debut AND periode_fin
    OR (CURRENT_DATE + INTERVAL 7 DAY) BETWEEN periode_debut AND periode_fin";
               
    // Préparation de la requête
    $stmt = $cnx->prepare($sql);
    // Exécution de la requête
    $stmt->execute();
    // Récupération des résultats de la requête
    $marches = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    // Gestion des erreurs
    echo "Erreur : " . $e->getMessage();
}
?>
