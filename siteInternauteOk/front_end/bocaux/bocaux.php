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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/bocaux.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/CharteGraph.css">
    <link rel="stylesheet" href="../../assets/css/Footer.css">
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
    
    
<!-- *********************************************************************************************************************************************** -->
    <div class="container-fluid">
        <div class="row">
            <!-- Menu latéral -->
            <?php  
            include ("../templates/navbar_lateral.php");                             
            ?>
<!-- ******************************************************************************************************************************************************* -->            
            <!-- Banderole -->
            <div class="col-md-9 col-lg-10 main-content">

                <div class="container mt-5">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="p-5 mb-4 custom-bg rounded-3">
                                <div class="container-fluid py-5">
                                    <div class="row align-items-center">
                                        <!-- Colonne gauche avec image -->
                                        <div class="col-md-2 text-center">
                                            <div class="img-container mx-auto">
                                                <?php
                                                    // Construire le nom de l'image basé sur le nom et le poids
                                                    $imageName = '../../assets/images/bocal/' . $subfolder . '/' .'intro 1.jpg';
                                                ?>
                                                <img src="<?php echo $imageName; ?>" class="img-fluid rounded custom-img" alt="Image Gauche">
                                            </div>
                                        </div>
                                        <!-- Colonne centrale avec texte -->
                                        <div class="col-md-8  text-center">
                                            <h1 class="display-5 fw-bold text-center">
                                                <?php echo ($typeBocal == 1) ? "Bocaux Salés" : (($typeBocal == 2) ? "Bocaux Sucrés" : "Divers"); ?>
                                            </h1>
                                            <p class="fs-4"><?php echo $descriptionTypeBocal; ?></p>
                                        </div>
                                        <!-- Colonne droite avec image -->
                                        <div class="col-md-2 text-center">
                                            <div class="img-container mx-auto">
                                                <?php
                                                    // Construire le nom de l'image basé sur le nom et le poids
                                                    $imageName = '../../assets/images/bocal/' . $subfolder . '/' .'intro 2.jpg';
                                                ?>
                                                <img src="<?php echo $imageName; ?>" class="img-fluid rounded custom-img" alt="Image Droite">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- ***************************************************************************************************************************************************************** -->
                
                <!-- Contenu des produits -->
                 <!-- boucle pour parcourir les categories -->
                <div class="container-fluid">
                    <div class="row">
                        <p class="text-center">* Tous les ingrédients marqués de l'astérisque sont cultivés à la ferme et bio.</p>
                        <?php foreach ($groupedResults as $category => $bocaux) : ?>
                            <h2><?php echo $category; ?></h2>
                            <?php foreach ($bocaux as $bocal) : ?>
                                <div class="col-md-6 col-lg-3 mb-4">
                                    <div class="image-leg">
                                        <div class="image-item <?php echo ($bocal['disponibilite_bocal'] == '0') ? 'bocal-indisponible' : ''; ?>">
                                            <h4 class="next-text"><?php echo $bocal['nom']; ?></h4>
                                            <?php
                                                // Construire le nom de l'image basé sur le nom et le poids
                                                $imageName = '../../assets/images/bocal/' . $subfolder . '/' . strtolower( $bocal['nom']) . '_' . $bocal['poids'] . '.jpg';
                                            ?>
                                            <img src="<?php echo $imageName; ?>" alt="photo <?php echo $bocal['nom']; ?>" class="resize-image img-fluid hoverImage" onmouseover="showCustomModal('modal_<?php echo $bocal['id']; ?>', this)" onmouseout="hideCustomModal('modal_<?php echo $bocal['id']; ?>')" />
                                            <!-- Modal -->
                                            <div id="modal_<?php echo $bocal['id']; ?>" class="custom-modal">
                                                <div class="custom-modal-content">
                                                    <p> Ingrédients : <?php echo implode(', ', $ingredientsProducts[$bocal['id']] ?? []); ?> </p>
                                                </div>
                                            </div>  
                                        </div>
                                        <div class="row">
                                            <div class="col-6 ">
                                                <?php echo $bocal['poids']; ?> g
                                            </div>
                                            <div class="col-6 ">
                                                <?php echo $bocal['prix_bocal']; ?> €
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>