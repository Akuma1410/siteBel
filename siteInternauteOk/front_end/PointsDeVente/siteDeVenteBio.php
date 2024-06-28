<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/CharteGraph.css">
    <link rel="stylesheet" href="../../assets/css/PointDeVente.css">
    <link rel="stylesheet" href="../../assets/css/Footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Point de Vente</title>
    
</head>
<body>
<div class="container-fluid">
<header>
        <?php  
           include ("../templates/navbar.php");                             
        ?>
</header>
   
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="display-5 fw-bold">
                <h1>Seuls, nos bocaux sont disponibles dans les points de vente suivants :</h1>
            </div>
        </div>
    </div>

    <!-- Deuxième ligne pour le paragraphe -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <p>Retrouvez nos légumes et nos fruits frais sur  <a href="../Marche/marche-auto.php">les marchés</a></p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4 d-flex align-items-stretch mb-3">
                <div class="card w-100">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="../../assets/images/PointsDeVente/lannion.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">Biocoop</h5>
                                <p class="card-text">Lannion</p>
                                <p class="card-text"><small class="text-muted"><a href="https://www.google.com/maps/place/Biocoop+Douargann/@48.7344207,-3.4452438,16z/data=!3m1!4b1!4m6!3m5!1s0x48122be2718db6a5:0x2f43f43fe187afd7!8m2!3d48.7344207!4d-3.4452438!16s%2Fg%2F1tv23kd1?hl=en&entry=ttu" target="_blank">Biocoop Saint-Marc</a></small></p>
                                <p class="card-text"><small class="text-muted"><a href="https://www.google.com/maps/place/Biocoop+Traou+an+Douar/@48.7428909,-3.4748139,16.5z/data=!4m7!3m6!1s0x48122b895d2ef40b:0x9da5a762b65761ae!4b1!8m2!3d48.7433466!4d-3.4746828!16s%2Fg%2F1w96g460?hl=en&entry=ttu" target="_blank">Biocoop Kerligonan</a></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-stretch mb-3">
                <div class="card w-100">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="../../assets/images/PointsDeVente/guimpguang.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">L'allure</h5>
                                <p class="card-text">Guingamp</p>
                                <p class="card-text"><small class="text-muted"><a href="https://www.google.com/maps/place/L'ALLURE/@48.5616601,-3.1509316,17z/data=!3m1!4b1!4m6!3m5!1s0x48118dcfcb9d7e9f:0x57491e3e194a0538!8m2!3d48.5616601!4d-3.1509316!16s%2Fg%2F11v67sp787?entry=ttu" target="_blank">Localisation</a></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-stretch mb-3">
                <div class="card w-100">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="../../assets/images/PointsDeVente/paimpol.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">Le hangar</h5>
                                <p class="card-text">Paimpol</p>
                                <p class="card-text"><small class="text-muted"><a href="https://www.google.com/maps/place/LE+HANGAR-+primeur+à+Paimpol/@48.77494,-3.0524385,17z/data=!3m1!4b1!4m6!3m5!1s0x48121b974e02e67b:0x166ecfdfbc846fb4!8m2!3d48.7749365!4d-3.0498582!16s%2Fg%2F1tsyp5gd?entry=ttu" target="_blank">Localisation</a></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="../../assets/images/PointsDeVente/plerin.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">Au potager de Paulette</h5>
                                <p class="card-text">Plerin</p>
                                <p class="card-text"><small class="text-muted"><a href="https://www.google.com/maps/place/Au+Potager+Paulette/@48.5346637,-2.757676,17z/data=!3m1!4b1!4m6!3m5!1s0x480e02cfbc7be893:0x909bef6217fdbe96!8m2!3d48.5346602!4d-2.7550957!16s%2Fg%2F1ptxtphd_?entry=ttu" target="_blank">Localisation</a></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="../../assets/images/PointsDeVente/Le conquet.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">Fumaisons & Cie</h5>
                                <p class="card-text">Le conquet</p>
                                <p class="card-text"><small class="text-muted"><a href="https://www.google.com/maps/place/Fumaisons+%26+Cie./@48.3598289,-4.7775866,17z/data=!3m1!4b1!4m6!3m5!1s0x4816927532be21dd:0x3ae3aeec88c13521!8m2!3d48.359826!4d-4.7734952!16s%2Fg%2F11b6gh0lsx?entry=ttu" target="_blank">Localisation</a></small></p>
                            </div>
                        </div>
                    </div>
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
