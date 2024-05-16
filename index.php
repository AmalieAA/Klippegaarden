
<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Forside</title>
	
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">

    <link rel="icon" type="image/x-icon" href="images/Favikon.webp">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/ddc56212a6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/dtc8fdo.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="banner-image-container">
        <?php include "includes/header.php";?>
        <img class="img-fluid" src="images/Forside_cover.webp" alt="Forside billede af en kunde">
        <div class="banner-image_text">
            <h1>
                Professionelle<br/>
                behandlinger i<br/>
                hyggelige omgivelser
            </h1>
            <a href="#" class="btn btn-btn-color" role="button">Book din næste aftale </a>
        </div>
    </div>

<main class="container-fluid">

    <div class="my-5">
        <h2 class="text-center">
            Hvorfor vælge os?
        </h2>
    </div>

    <div class="row my-5">

        <div class="col-12 col-md-4 p-2 text-center">
            <img class="frontpage-icon" src="images/4_års_uddannelse.webp" alt="Ikon til afsnit om klippegårdens integerede skønhedssalon">

            <h3>
                4-årig uddannelse
            </h3>

            <p class="text-left">

            </p>
        </div>

        <div class="col-12 col-md-4 p-2 text-center">
            <img class="frontpage-icon" src="images/afslappende_atmosfære.webp" alt="Ikon til afsnit om klippegårdens integerede skønhedssalon">

            <h3>
                Afslappende atmosfære
            </h3>

            <p class="text-left">

            </p>
        </div>

        <div class="col-12 col-md-4 p-2 text-center">
            
            <img class="frontpage-icon" src="images/skønhedssalon.webp" alt="Ikon til afsnit om klippegårdens integerede skønhedssalon">
            
            <h3>
                Integreret skønhedssalon
            </h3>

            <p class="text-start">
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

    <div class="row bg-banner-color my-5">

        <h2 class="text-center my-4">
            Behandlinger til hele familien
        </h2>


        <div class="col-12 col-md-4 p-0 py-4 pb-0 py-md-0 px-md-4 btn-with-image">
            <a href="behandlinger.php#Klipninger">
            <img class="img-fluid btn-image shadow-sm" src="images/Klipning.webp" alt="Et billed af en klipning"/>
                <h4 class="text-center">
                Klipninger
                </h4>
            </a>

        </div>


        <div class="col-12 col-md-4 p-0 py-4 pb-0 py-md-0 px-md-4 btn-with-image">
            <a href="behandlinger.php#Farvning">
                <img class="img-fluid btn-image shadow-sm" src="images/Farvning.webp" alt="Et billed af en farvning"/>
                <h4 class="text-center">
                    Farvninger
                </h4>
            </a>

        </div>


        <div class="col-12 col-md-4 p-0 py-4 pb-0 py-md-0 px-md-4 btn-with-image">
            <a href="behandlinger.php#KurBehandling">
                <img class="img-fluid btn-image shadow-sm" src="images/Kur_behandling.webp" alt="Et billed af en hårkur"/>
                <h4 class="text-center">
                    Kur/Behandlinger
                </h4>
            </a>

        </div>

        <div class="col-12 col-md-8 offset-md-2 my-4 text-center">

            <a href="#" class="btn btn-btn-color" role="button">Se ledige tider til behandling</a>

        </div>
    </div>


    <div id="Galleri">
        <h2 class="text-center">
            Galleri fra vores sociale medier
        </h2>
    </div>

    <?php include "includes/carousel.php";?>
</main>

<?php include "includes/footer.php";?>

<?php include "includes/scripts.php";?>
</body>
</html>
