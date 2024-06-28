<?php
session_start();
?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Les bocaux</title>
    <script src="../assets/JS/modal.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/produits.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">

    <link rel="stylesheet" href="../assets/css/Footer.css">
    <link rel="icon" type="image/png" href="assets/images/logo.png">
</head>

<?php  
 require ("../back_end/recherche_produit.php");                         
?>

<body class="body">
    

    
<!-- *********************************************************************************************************************************************** -->

    <header>
        <?php  
            include ("templates/navbar.php");                             
        ?>
    </header>


<!-- ******************************************************************************************************************************************************* -->            






<!-- ****************************************************************************************************************************************************** -->

    <!-- Pied de page -->
    <footer class="text-center text-lg-start mt-5">
        <?php  
            include ("templates/footer.php");                             
        ?>
    </footer>

    <!-- Scripts Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>