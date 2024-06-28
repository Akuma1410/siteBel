<?php
session_start();
?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Les bocaux</title>
    <script src="../../assets/JS/modal.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/CharteGraph.css">
    <link rel="stylesheet" href="../../assets/css/Footer.css">
    <link rel="stylesheet" href="../../assets/css/produits.css">
    <link rel="icon" type="image/png" href="assets/images/logo.png">
</head>

<?php  
 require ("../../back_end/bocaux_dispo.php");   
 require ("../../back_end/recherche_ingredient_par_bocaux.php");                            
?>

<body class="body">
    
    <?php  
        include ("../templates/navbar.php");                             
    ?>
    
    
<!-- *********************************************************************************************************************************************** 
    <div class="container-fluid">
        <div class="row"> -->
            <!-- Menu latéral -->
            <?php  
            // include ("../templates/navbar_lateral.php");                             
            ?>
 <!-- ******************************************************************************************************************************************************* -->            
            <!-- Banderole -->
            <div class="col-md-9 col-lg-10 main-content">

                <div class="container mt-5">
                    <div class="row align-items-center">
                        <div class="col-12">

                            <!-- Colonne centrale avec texte -->

                            <h1 class="display-5 fw-bold text-center">
                                Cette page est en construction, trés bientôt elle vous presentera les legumes que nous produisons
                            </h1>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

<!-- ****************************************************************************************************************************************************** -->

    <!-- Pied de page -->
    
    <?php  
        include ("../templates/footer.php");                             
    ?>
    

    <!-- Scripts Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>