<?php
require "PHPClasses/App.php";

$app = new App();
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rebricek</title>
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
                        <a class="nav-link active" aria-current="page" href="rebricek.php">Rebríček filmov</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container bg-dark">
        <div class="container bg-dark mt-5">
<!--            Nadpis-->
            <div class="row">
                <div class="col-12 mt-3">
                    <h1>Nejlepšie filmy</h1>
                </div>
            </div>

            <?php foreach ($app->getAllFilms() as $film) { ?>
            <div class="row align-items-center border-bottom border-top">
                <div class="col-12 col-lg-4">
                    <table class="table tabulka">
                        <tbody>
                        <tr>
                            <td><img src="<?= $film->getObrazky()[0]->getUrl() ?>" class="img-news" alt="..."></td>
                        </tr>
                        <tr>
                            <td><a href="filmInfo.php?id=<?=$film->getId()?>" class="odkaz"><?=$film->getNazov()?></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 col-lg-5 p-5 zakladneinfo">
                    <p>
                        Orig. názov: <?=$film->getOrgNazov()?>
                    </p>
                    <p>
                        Žáner: <?=$film->getZaner()?>
                    </p>
                    <p>
                        Krajina: <?=$film->getKrajina()?>
                    </p>
                    <p>
                        Réžia: <?=$film->getRezia()?>
                    </p>
                    <p>
                        Scenár: <?=$film->getScenar()?>
                    </p>
                    <p>
                        Hrajú: <?=$film->getHraju()?>
                    </p>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="row">
                        <p class="text-center fs-2">Hodnotenie</p>
                    </div>
                    <div class="row">
                        <p class="hodnotenie border bg-danger">
                            <?php
                                if ($film->getPocetHodnoteni() > 0) {
                                    ?> <?=
                                    $film->getPriemerneHodnotenie();
                                    ?>
                                    <?php
                                } else {
                                    ?>0 <?php
                                }
                            ?>/ 5 <i class="bi bi-star"></i> </p>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</body>
</html>