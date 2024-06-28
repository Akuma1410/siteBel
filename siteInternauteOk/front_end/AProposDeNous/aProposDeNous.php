<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/CharteGraph.css">
    <link rel="stylesheet" href="../../assets/css/Footer.css">
    <link rel="stylesheet" href="../../assets/css/Printemps.css">
    <link rel="stylesheet" href="../../assets/css/aproposdenous.css">
    <title>A propos de nous</title>
</head>
<body>

    <?php include '../templates/navbar.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
            <h1 class="display-5 fw-bold">Nos activités au fil des saisons</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 w-50 mx-auto mt-3 d-flex justify-content-center" style="position: relative;">
                <img usemap="#Carte-tomate" src="../../assets\images\AProposDeNous\a-propos-de-nous.png" alt="Arbre tomate" class="img-fluid" id="image-map"/>
                <div class="generated-text" style="position: absolute; bottom: 10px; right: 10px; font-size: 12px; color: white;">
                    Généré par imageFX
                </div>
            </div>
        </div>
        <map name="Carte-tomate" id="map">
            <!-- Top-left quadrant -->
            <area
                shape="rect"
                coords="866,695,959,1156"
                href="../../front_end/AProposDeNous/Printemps.php"
                alt="nos activités pendant le printemps"
                title="nos activités pendant le printemps"
            >
            <!-- Top-right quadrant -->
            <area
                shape="rect"
                coords="482,1,1535,702"
                href="../../front_end/AProposDeNous/Ete.php"
                alt="nos activités pendant l'été"
                title="nos activités pendant l'été"
            >
            <!-- Bottom-left quadrant -->
            <area
                shape="rect"
                coords="125,550,595,1316"
                href="../../front_end/AProposDeNous/Automne.php"
                alt="nos activités pendant l'automne"
                title="nos activités pendant l'automne"
            >
            <!-- Bottom-right quadrant -->
            <area
                shape="rect"
                coords="612,1096,1237,1533"
                href="../../front_end/AProposDeNous/Hiver.php"
                alt="nos activités pendant l'hiver"
                title="nos activités pendant l'hiver"
            >
        </map>
    </div>
    <?php  
        include ("../templates/footer.php");                             
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            imageMapResize();
        });
    </script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/image-map-resizer/1.0.10/js/imageMapResizer.min.js"></script>
</body>
</html>
