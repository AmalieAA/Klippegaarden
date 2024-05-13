
<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Forside</title>
	
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">
	
	<link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/ddc56212a6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/dtc8fdo.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include "includes/header.php";?>

    <div>
        <img class="img-fluid" src="images/Forside_cover.webp" alt="Forside billede af en kunde">
    </div>


    <div>
        <h2 class="text-center">
            Hvorfor vælge os?
        </h2>
    </div>

    <div class="row">

        <div class="col-12 col-md-4">
            <h3>
                4-årig uddannelse
            </h3>

            <p>

            </p>
        </div>

        <div class="col-12 col-md-4">
            <h3>
                Afslappende atmosfære
            </h3>

            <p>

            </p>
        </div>

        <div class="col-12 col-md-4">
            <h3>
                Integreret skønhedssalon
            </h3>

            <p>
                <a href="https://highbeauty.dk/">High Beauty</a>
                , som er beliggende i vores salon,
                tilbyder en bred vifte af skønhedsbehandlinger.
                Vi tilbyder alt fra ansigtsbehandlinger til manicure
                og pedicure. At levere førsteklasses pleje og
                forkælelse til vores kunder er altid noget,
                vi bestræber os på.
            </p>
        </div>

    </div>

    <div class="row bg-banner-color">

        <h2 class="text-center">
            Behandlinger til hele familien
        </h2>

        <div class="col-12 col-md-4 p-0 py-4 pb-0 py-md-0 px-md-4">
            <img class="img-fluid" src="images/Klipning.webp" alt="Et billed af en klipning"/>

            <a href="#">
                Klipninger
            </a>

        </div>


        <div class="col-12 col-md-4 p-0 py-4 pb-0 py-md-0 px-md-4">
            <img class="img-fluid" src="images/Farvning.webp" alt="Et billed af en farvning"/>

            <a href="#">
                Farvninger
            </a>

        </div>

        <div class="col-12 col-md-4 p-0 py-4 py-md-0 px-md-4">
            <img class="img-fluid" src="images/Kur_behandling.webp" alt="Et billed af en hårkur"/>

            <a href="#">
                Kur/Behandlinger
            </a>

        </div>

        <div class="col-12 col-md-4">

            <button type="button" class="btn btn-btn-color">Se ledige tider til behandling</button>

        </div>
    </div>


    <div>
        <h2 class="text-center">
            Galleri fra vores sociale medier
        </h2>
    </div>

<?php include "includes/carousel.php";?>

<?php include "includes/footer.php";?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
