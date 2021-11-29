<?php
require "PHPClasses/App.php";

$app = new App();

$film = $app->getFilm($_GET["id"]);
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $film->getNazov() ?></title>
    <link rel="stylesheet" href="css.css" type="text/css">

    <!--    boottrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--    icons-->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

</head>
<body>
<!--navbar-->
<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <i class="bi bi-film icon"></i>
        <a class="navbar-brand" href="#">Filmpedia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Domov</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rebricek.php">Rebríček filmov</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--Telo-->
<div class="container bg-dark mt-5">
    <div class="row">
        <div class="col-12 mt-3"><h1><?= $film->getNazov() ?></h1></div>
    </div>
    <div class="row align-items-center">
        <div class="col-12 col-md-6">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($film->getObrazky() as $index => $obrazok ) { ?>
                    <div class="carousel-item <?php
                    if ($index == 0) { ?>
                        active
                    <?php } ?> ">
                        <img src="<?= $obrazok->getUrl() ?>" class="d-block w-100 img-info" alt="...">
                    </div>
                    <?php } ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-12 col-md-6 zakladneinfo p-3">
            <p>
                Orig. názov: <?= $film->getOrgNazov() ?>
            </p>
            <p>
                Žáner: <?= $film->getZaner() ?>
            </p>
            <p>
                Krajina: <?= $film->getKrajina() ?>
            </p>
            <p>
                Réžia: <?= $film->getRezia() ?>
            </p>
            <p>
                Scenár: <?= $film->getScenar() ?>
            </p>
            <p>
                Hrajú: <?= $film->getHraju() ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-2"><h1>Obsah</h1></div>
    </div>
    <div class="row">
        <div class="col-12 obsah p-4">
            <p>
                <?= $film->getObsah() ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-2"><h1>Komentáre</h1></div>
    </div>
    <div class="row">
        <div class="col-12 komentare">
            <ul>
                <?php foreach ($film->getKomentare() as $komentar) { ?>
                <li>
                    <?= $komentar->getText(). "(" . $komentar->getAutor() . ")"?>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
