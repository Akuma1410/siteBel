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
    <title>Ete</title>
</head>
<body>
<header>
        <?php include '../templates/navbar.php'; ?>
    </header>

    <div class="container">
        <div class="row text-center">
        <h1 class="display-5 fw-bold">Eté</h1>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img class="img-fluid w-100" src="..\..\assets\images\AProposDeNous\entretien des plants.jfif" alt="Entretien des plants"   title="Entretien des plants">
            </div>
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm-4">
                <img class="img-fluid w-100" src="..\..\assets\images\AProposDeNous\recolter les fruits.webp" alt="Recolte des fruits"   title="Recolte des fruits">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm4 align-items-center justify-content-center mx-auto text-center">
            La récolte bat son plein. Les <a href="../produit/fruit_construction.php">fraises</a> sont de sortie. Nous récoltons les premiers <a href="../produit/legume_construction.php">légumes</a> de la serre. C’est le bon moment d’en profiter. Nous participons à de nouveaux <a href="../Marche/marche-auto.php">marchés</a>. Nous continuons de soigner nos plants. Nous concoctons avec amour nos premiers bocaux de <a href="../bocaux/bocaux.php?type=2">gourmandises sucrées</a> pour conserver le meilleur de nos fruits.
            </div>
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
            <img class="img-fluid w-100" src="..\..\assets\images\AProposDeNous\recolter les legumes.jpg" alt="Recolte des legumes"    title="Recolte des legumes">
            </div>
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-4 col-sm-4">
            <img class="img-fluid w-100" src="..\..\assets\images\AProposDeNous\preparation du labo et confitures.webp" alt="Préparation du labo et confitures"    title="Préparation du labo et confitures">
            </div>
        </div>
    </div>


<div class="d-flex justify-content-between my-4">
    <div class="button">
        <button class="btn btn-success"><a href="../../front_end/AProposDeNous/Printemps.php" class="text-white text-decoration-none">Saison Précédente</a></button>
    </div>
    <div class="button">
        <button class="btn btn-success"><a href="../../front_end/AProposDeNous/aProposDeNous.php" class="text-white text-decoration-none">Retour</a></button>
    </div>
    <div class="button">
        <button class="btn btn-success"><a href="../../front_end/AProposDeNous/Automne.php" class="text-white text-decoration-none">Saison Suivante</a></button>
    </div>
</div>


    <?php  
        include ("../templates/footer.php");                             
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
