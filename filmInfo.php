<?php
require "PHPClasses/App.php";

$app = new App();
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Halloween zabija</title>
    <link rel="stylesheet" href="css.css" type="text/css">

    <!--    boottrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--    icons-->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<body>
<!--navbar-->
<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <i class="fas fa-film icon"></i>
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
        <div class="col-12 mt-3"><h1>HALLOWEEN ZABÍJA</h1></div>
    </div>
    <div class="row align-items-center">
        <div class="col-12 col-md-6">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.cine-max.sk/fileadmin/user_upload/halloween-zabija-10.jpg" class="d-block w-100 img-news" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.cine-max.sk/fileadmin/user_upload/halloween-zabija-07.jpg" class="d-block w-100 img-news" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.cine-max.sk/fileadmin/user_upload/halloween-zabija-09.jpg" class="d-block w-100 img-news" alt="...">
                    </div>
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
                Orig. názov: Halloween Kills
            </p>
            <p>
                Žáner: horor
            </p>
            <p>
                Krajina: USA
            </p>
            <p>
                Réžia: David Gordon Green
            </p>
            <p>
                Scenár: Scott Teems, Danny McBride, David Gordon Green
            </p>
            <p>
                Hrajú: Jamie Lee Curtis, Judy Greer, Andi Matichak, Will Patton, Thomas Mann and Anthony Michael Hall
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-2"><h1>Obsah</h1></div>
    </div>
    <div class="row">
        <div class="col-12 obsah p-4">
            <p>
                Niektoré netvory je nemožné zabiť. Michael Myers, legendárny tichý zabijak s bielou maskou, úspešne uniká už vyše štyridsať rokov. Horor Halloween zabíja je ďalšou kapitolou v úspešnej a mimoriadne húževnatej sérii. Laurie Strode (Jamie Lee Curtis) tak dlho utekala pred tichým vraždiacim monštrom menom Michael Myers, až sa rozhodla zmeniť taktiku. Prestala utekať, začala bojovať a nalákala Michaela do dokonalej pasce. Tá síce vyšla, ale … Príbeh filmu Halloween zabíja začína v okamihu, keď predchádzajúci film skončil. Ťažko zranená Laurie odchádza v sprievode dcéry a vnučky do nemocnice a v protismere sa k jej horiacemu domu rútia hasiči. V jeho útrobách je v ohnivom pekle uväznený zabijak, ktorý ju prenasledoval celý život. Bohužiaľ, nielen mačky majú sedem životov. Ubehne pár minút a Michael Myers už zase chodí ulicami mesta, ktoré sa pripravuje na halloweensku noc, a úspešne zvyšuje počet svojich obetí. Správa o tom, že z jej pasce unikol, sa dostane aj k Laurie, ktorá si je istá, že keď Michaela porazila raz, porazí ho aj druhý raz. Len bude potrebovať pomoc. Bude ale nutné presvedčiť obyvateľov mestečka, aby sa Myersa prestali báť.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-2"><h1>Zaujimavosti</h1></div>
    </div>
    <div class="row">
        <div class="col-12 zaujimavosti">
            <ul>
                <li>
                    Masky dýně, zelené čarodějnice a kostlivce, které lze vidět v traileru, jsou tytéž masky, okolo nichž se točil příběh Halloweenu 3 (1982), jediném filmu ze série, kde se neobjevuje Michael Myers.
                </li>
                <li>
                    Herec Anthony Michael Hall si v tomto filmu zopakoval roli Tommyho Doyla z Halloweenu (1978). Tommy Doyle byl chlapec, kterého na Halloween hlídala Laurie Strode (Jamie Lee Curtis)
                </li>
                <li>
                    Představitel Michaela Myerse z prvního Halloweenu (1978), Nick Castle, si v několika scénách zopakoval svoji roli maskovaného vraha, většinu času ale Michaela hrál James Jude Courtney, stejně jako v Halloweenu z roku 2018.
                </li>
                <li>
                    Jamie Lee Curtis znovu potvrzuje svoji roli Laurie Strode už pošesté, čímž předčí Donalda Pleasence s nejvíce vystoupeními v halloweenské sérii.
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
