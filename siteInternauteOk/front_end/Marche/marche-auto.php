
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/Footer.css">
    <link rel="stylesheet" href="../../assets/css/CharteGraph.css">
    <link rel="stylesheet" href="../../assets/css/marche.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <title>Marché</title>
</head>
<body>
<?php
    require ("../../back_end/trouverMarche.php");
    function jourSemaine($numJour) {
        $jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
        return $jours[$numJour];
    }

?>

<div class="container-fluid">
    <header>
        <?php  
            include ("../templates/navbar.php");                             
        ?>
    </header>

    <div class="container mt-5">
        <div class="row">
            <div class="display-5 fw-bold">
                <h1>Retrouvez nous sur les marchés suivants :</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <p>Pour profiter de la fraîcheur de nos fruits et légumes</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
    <div class="row justify-content-center">
        <?php foreach ($marches as $index => $marche): ?>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo jourSemaine($marche['jour']); ?> : de
                        <?php echo htmlspecialchars($marche['heure_debut']); ?>h à
                        <?php echo htmlspecialchars($marche['heure_fin']); ?>h
                    </h5>
                    <p class="card-text">
                        <?php echo htmlspecialchars($marche['ville']); ?>,
                        <?php echo htmlspecialchars($marche['adresse']); ?>
                    </p>
                    <p class="card-text">
                        <small class="text-muted">
                            <a href="https://www.google.com/maps/search/?api=1&query=<?php echo htmlspecialchars($marche['latitude']); ?>,<?php echo htmlspecialchars($marche['longitude']); ?>" target="_blank">Localisation</a>
                        </small>
                    </p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>


</div>


</div>
</div>

    <?php  
        include ("../templates/footer.php");                             
    ?>





                


    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
