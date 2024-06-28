<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/CharteGraph.css">
    <link rel="stylesheet" href="../../assets/css/Footer.css">
    <link rel="stylesheet" href="../../assets/css/aproposdenous.css">
    <title>Hiver</title>
    
</head>
<body>
<header>
        <?php include '../templates/navbar.php'; ?>
    </header>

    <div class="container">
        <div class="row text-center">
        <h1 class="display-5 fw-bold">Hiver</h1>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img class="img-fluid w-100" src="..\..\assets\images\AProposDeNous\Nettoyage serre.jpg" alt="Nettoyage serre"   title="Nettoyage serre">
            </div>
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm-4">
                <img class="img-fluid w-100" src="..\..\assets\images\AProposDeNous\enlever plants morts.webp" alt="enlever plants morts"   title="enlever plants morts">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm4 align-items-center justify-content-center mx-auto text-center">
            Nous nettoyons nos serres, protégeons la terre, ajoutons du fumier de nos moutons et de nos poules en attendant de pouvoir planter et semer au printemps. Nous livrons tous nos produits dans les <a href="../PointsDeVente/siteDeVenteBio.php">points de vente</a>.
            </div>
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img class="img-fluid w-100" src="..\..\assets\images\AProposDeNous\Enlever les bâches.jpg" alt="Enlever les bâches"    title="Enlever les bâches">
            </div>
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm-4">
                <img class="img-fluid w-100" src="..\..\assets\images\AProposDeNous\Compostage fumier.jpg" alt="Composage fumier"    title="Composage fumier">
            </div>
        </div>
    </div>

<div class="d-flex justify-content-between my-4">
    <div class="button">
        <button class="btn btn-success"><a href="../../front_end/AProposDeNous/Automne.php" class="text-white text-decoration-none">Saison Précédente</a></button>
    </div>
    <div class="button">
        <button class="btn btn-success"><a href="../../front_end/AProposDeNous/aProposDeNous.php" class="text-white text-decoration-none">Retour</a></button>
    </div>
    <div class="button">
        <button class="btn btn-success"><a href="../../front_end/AProposDeNous/Printemps.php" class="text-white text-decoration-none">Saison Suivante</a></button>
    </div>
</div>

    <?php  
        include ("../templates/footer.php");                             
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
