<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/CharteGraph.css">
    <link rel="stylesheet" href="../../assets/css/Footer.css">
    <link rel="stylesheet" href="../../assets/css/aproposdenous.css">
    <title>Printemps</title>
</head>
<body>
    <?php include '../templates/navbar.php'; ?>

    <div class="container text-center">
        <div class="row">
        <h1 class="display-5 fw-bold">Printemps</h1>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img class="img-fluid w-100" src="..\..\assets\images\AProposDeNous\arrosage-plants.jpeg" alt="Arrosage plants"   title="Arrosage plants">
            </div>
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm-4">
                <img class="img-fluid w-100" src="..\..\assets\images\AProposDeNous\poser-toile-paillage.jpg" alt="Pose de baches"   title="Pose de baches">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm4 align-items-center justify-content-center mx-auto text-center">
            Nous semons, repiquons les nouveaux plants de <a href="../produit/fruit_construction.php">fruits</a> et <a href="../produit/legume_construction.php">légumes</a>. Nous posons une bache de protection. En attendant la pousse, le soleil s'occupe de tout le reste, et la météo s'occupe de l'arrosage.
            </div>
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
            <img class="img-fluid w-100" src="..\..\assets\images\AProposDeNous\planter-les-graines.jpg" alt="Panter/Repiquer les graines"    title="Panter/Repiquer les graines">
            </div>                

            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm-4">
            <img class="img-fluid w-100" src="..\..\assets\images\AProposDeNous\préparer-la-serre.webp" alt="Préparation de a serre"    title="Préparation de a serre">
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between my-4">
        <div class="button">
            <button class="btn btn-success"><a href="../../front_end/AProposDeNous/Hiver.php" class="text-white text-decoration-none">Saison Précédente</a></button>
        </div>
        <div class="button">
            <button class="btn btn-success"><a href="../../front_end/AProposDeNous/aProposDeNous.php" class="text-white text-decoration-none">Retour</a></button>
        </div>
        <div class="button">
            <button class="btn btn-success"><a href="../../front_end/AProposDeNous/Ete.php" class="text-white text-decoration-none">Saison Suivante</a></button>
        </div>
    </div>

    <?php  
        include ("../templates/footer.php");                             
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
