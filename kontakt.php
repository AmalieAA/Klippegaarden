
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Kontakt</title>

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


<div id="ContactBannerImage" class="banner-image-container" >
    <?php include "includes/header.php";?>
    <img class="img-fluid" src="images/Kontakt_cover1.webp" alt="Kontakt coverbillede">
</div>

<main class="container-fluid">


    <h2 class="text-center my-5">
        Kontakt os på
    </h2>

<div class="row">

    <div class="col-12 col-md bg-banner-color text-center p-2 m-md-4">
        <div class="fs-2 pb-2">
            <i class="fa-solid fa-phone text-icon-color"></i>

        </div>
        <div>
            <h5>
                Ring til os på
            </h5>
        </div>
        <div>
            <a class="text-body-font-color" href="tel:58501420">
                58501420
            </a>
        </div>
    </div>

    <div class="col-12 col-md bg-banner-color text-center p-2 my-4 m-md-4">
        <div class="fs-2 pb-2">
            <i class="fa-solid fa-envelope text-icon-color"></i>

        </div>
        <div>
            <h5>
                Send en mail på
            </h5>
        </div>
        <div>
            <a class="text-body-font-color" href="mailto:tasja@klippegaarden.dk">
                tasja@klippegaarden.dk

            </a>
        </div>
    </div>

    <div class="col-12 col-md bg-banner-color text-center p-2 m-md-4">
        <div class="fs-2 pb-2">
            <i class="fa-solid fa-location-dot text-icon-color" ></i>
        </div>
        <div>
            <h5>
                Find os på
            </h5>
        </div>
        <div>
            <span class="text-body-font-color">
                Nytorv 8B, 4200 Slagelse
            </span>
        </div>
    </div>
</div>


    <div class="row mt-4">

        <div class="col-12 col-md-6 bg-banner-color p-4 text-center">

            <h3 class="py-2">Åbningstider</h3>
            <div class="row py-2">
                <div class="col-6">Mandag</div>
                <div class="col-6">9-16</div>
            </div>
            <div class="row py-2">
                <div class="col-6">Tirsdag</div>
                <div class="col-6">9-17</div>
            </div>
            <div class="row py-2">
                <div class="col-6">Onsdag</div>
                <div class="col-6">9-19</div>
            </div>
            <div class="row py-2">
                <div class="col-6">Torsdag</div>
                <div class="col-6">9-19</div>
            </div>
            <div class="row py-2">
                <div class="col-6">Fredag</div>
                <div class="col-6">9-17</div>
            </div>
            <div class="row py-2">
                <div class="col-6">Lørdag</div>
                <div class="col-6">9-12</div>
            </div>
            <div class="row py-2">
                <div class="col-6">Søndag</div>
                <div class="col-6">Lukket</div>
            </div>
        </div>

        <div class="col-12 col-md-6 bg-icon-color p-4">
            <h3 class="py-2">Send os et spørgsmål</h3>
            <div class="mb-3">
                <label for="Navn" class="form-label fs-6">Navn</label>
                <input type="text" class="form-control" id="Navn" placeholder="Skriv dit navn">
            </div>
            <div class="mb-3">
                <label for="E-mail" class="form-label fs-6">E-mail</label>
                <input type="text" class="form-control" id="E-mail" placeholder="Skriv din e-mail">
            </div>
            <div class="mb-3">
                <label for="Emne" class="form-label fs-6">Emne</label>
                <input type="text" class="form-control" id="Emne" placeholder="Angiv et emne">
            </div>
            <div class="mb-3">
                <label for="Besked" class="form-label fs-6">Besked</label>
                <input type="text" class="form-control" id="Besked" placeholder="Stil dit spørgsmål">
            </div>
            <div class="col-12 col-md-8 offset-md-2 text-center">
                <a href="#" class="btn btn-btn-color" role="button">Send</a>

            </div>
        </div>
    </div>



    <h2 class="text-center my-4">
        Afbudsregler & Gavekort
    </h2>

</main>

<?php include "includes/footer.php";?>

<?php include "includes/scripts.php";?>
</body>
</html>
