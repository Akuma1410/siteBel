<!-- Menu latéral -->
<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<!-- Menu latéral fixe pour les grands écrans -->
<div class="menu-lateral d-none d-lg-block">
    <h3>Catégories</h3>
    <form onsubmit="return searchProducts()">
        <input type="text" id="searchInput" class="form-control" placeholder="Rechercher...">
        <button type="submit" class="btn btn-primary" >Rechercher</button>
    </form>
    <nav class="nav flex-column mt-3 "> <!-- parcour des type -->
        <a class="btn btn-primary <?php echo ($_GET['type'] == 1) ? 'active' : ''; ?>" href="bocaux.php?type=1">Bocaux Salés</a>
        <a class="btn btn-primary <?php echo ($_GET['type'] == 2) ? 'active' : ''; ?>" href="bocaux.php?type=2">Bocaux Sucrés</a>
        <a class="btn btn-primary <?php echo ($_GET['type'] == 3) ? 'active' : ''; ?>" href="bocaux.php?type=3">Divers</a>
    </nav>
</div>

<!-- Offcanvas menu pour les petits écrans -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasMenuLabel">Catégories</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form onsubmit="return searchProducts()">
            <input type="text" id="searchInput" class="form-control" placeholder="Rechercher...">
            <button type="submit" class="btn btn-primary mt-2 w-100">Rechercher</button>
        </form>
        <nav class="nav flex-column mt-3">
            <a class="btn btn-primary <?php echo ($_GET['type'] == 1) ? 'active' : ''; ?>" href="bocaux.php?type=1">Bocaux Salés</a>
            <a class="btn btn-primary <?php echo ($_GET['type'] == 2) ? 'active' : ''; ?>" href="bocaux.php?type=2">Bocaux Sucrés</a>
            <a class="btn btn-primary <?php echo ($_GET['type'] == 3) ? 'active' : ''; ?>" href="bocaux.php?type=3">Divers</a>
        </nav>
    </div>
</div>