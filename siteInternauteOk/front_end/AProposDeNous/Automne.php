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
    <title>Automne</title>
</head>
<body>

    <?php include '../templates/navbar.php'; ?>

    
        <div class="container ">
            <div class="row text-center">
            <h1 class="display-5 fw-bold">Automne</h1>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                <img class="img-fluid w-100" src="..\..\assets\images\AProposDeNous\Récolter les fruits dans le vergers.jpg" alt="Récolter les fruits dans le vergers"    title="Récolter les fruits dans le vergers">
                </div>
                <div class="col-md-4 col-sm-4"></div>
                <div class="col-md-4 col-sm-4">
                    <img class="img-fluid w-100" src="..\..\assets\images\AProposDeNous\Récolter les légumes étant proche de la terre.jfif" alt="Récolter les légumes étant proche de la terre"   title="Récolter les légumes étant proche de la terre">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4"></div>
                <div class="col-md-4 col-sm4 align-items-center justify-content-center mx-auto text-center">
                Les récoltes continuent : que ce soit en pleine terre ou dans le verger. Le meilleur des <a href="../produit/legume_construction.php">légumes</a> se trouve dans nos <a href="../bocaux/bocaux.php?type=1">bocaux salés</a>. Nous proposons notre <a href="../bocaux/bocaux.php?type=1">gamme de bocaux</a> en <a href="../PointsDeVente/siteDeVenteBio.php">magasin bio</a>.
                </div>
                <div class="col-md-4 col-sm-4"></div>
                <div class="col-md-4 col-sm-4"></div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                <img class="img-fluid w-100" src="..\..\assets\images\AProposDeNous\Preparation des bocaux sales.jpg" alt="Preparation des bocaux sales"   title="Preparation des bocaux sales">
                </div>
                <div class="col-md-4 col-sm-4"></div>
                <div class="col-md-4 col-sm-4">
                <img class="img-fluid w-100" src="..\..\assets\images\AProposDeNous\Livraison magasin bio.jpg" alt="Livraison magasin bio"    title="Livraison magasin bio">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between my-4">
            <div class="button">
                <button class="btn btn-success"><a href="../../front_end/AProposDeNous/Ete.php" class="text-white text-decoration-none">Saison Précédente</a></button>
            </div>
            <div class="button">
                <button class="btn btn-success"><a href="../../front_end/AProposDeNous/aProposDeNous.php" class="text-white text-decoration-none">Retour</a></button>
            </div>
            <div class="button">
                <button class="btn btn-success"><a href="../../front_end/AProposDeNous/Hiver.php" class="text-white text-decoration-none">Saison Suivante</a></button>
            </div>
        </div>
    
    <?php  
        include ("../templates/footer.php");                             
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
