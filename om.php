
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Forside</title>
    <meta name="description" content="Oplev førsteklasses hår- og skønhedsbehandlinger i en
                                      afslappende atmosfære hos Klippegården i Slagelse.
                                      Book din tid nu og lad vores erfarne team tage sig af dig!">
    <meta name="keywords" content="Skønhedsbehandlinger, Salon">

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

<div id="AboutUsBannerImage" class="banner-image-container">
    <?php include "includes/header.php";?>
    <img class="img-fluid" src="images/om_cover.webp" alt="Forside billede af en kunde">
</div>

<main class="container-fluid container-xxl">

    <h2 class="text-center mt-5 mb-3">
        Om Klippegården
    </h2>
    <div class="row">
        <p class="text-start col-12 px-4 col-md-8 offset-md-2">
            Klippegården har været en del af Slagelse siden 1991, hvor den blev åbnet af Diana i Langes Gård. I 2015 flyttede
            salonen til de mere rummelige og lyse lokaler på Nytorv 8B. Her har vi også udvidet med et behandlerrum, hvor
            High Beauty tilbyder forskellige skønhedsbehandlinger.
            <br>
            <br>
            Den 1. februar 2023 overtog Tasja ejerskabet af salonen og driver nu både Klippegården og
            <a class="link-body-font-color border-bottom border-body-font-color" href="https://highbeauty.dk/"> High Beauty</a>.
            Vi fortsætter med at levere førsteklasses service og behandlinger til vores kunder i hjertet af Slagelse.
            Vores salon er kendt for sin dejlige, afslappende atmosfære, hvor kunderne altid føler sig velkomne og forkælede.

        </p>
    </div>

    <h3 class="text-center mt-5">
        Mød os
    </h3>

    <div id="EmployeeBoxes">
    <?php
    $medarbejdere = array(
        array(
            'billede' => 'Profilbillede_Tasja.webp',
            'billedbeskrivelse' => 'Et billed af frisør og salonindehaver, Tasja',
            'navn' => 'Tasja',
            'titel' => 'Frisør & indehaver af salonen',
            'beskrivelse' => 'Tasja har været en del af Klippegården siden 2016, hvor hun 
                              startede som kosmetolog. Hun begyndte på frisøruddannelsen i 
                              2019 og blev færdiguddannet i februar 2023. Da hun var færdigudlært, 
                              overtog hun salonen. Med sin kombinerede erfaring som kosmetolog 
                              og frisør tilbyder Tasja en helhedsorienteret og luksuriøs salonoplevelse.'
        ),
        array(
            'billede' => 'Profilbillede_Lena.webp',
            'billedbeskrivelse' => 'Et billed af frisør, Lena',
            'navn' => 'Lena',
            'titel' => 'Frisør',
            'beskrivelse' => 'Lena startede i lære hos Klippegården i 2007 og blev færdigudlært 
                              fire år senere. Hun har været en fast del af salonen lige siden. 
                              Lena er kendt for sin erfaring og dygtighed, og hun har opbygget 
                              en loyal kundebase gennem årene.'
        ),

        array(
            'billede' => 'Profilbillede_Hannah.webp',
            'billedbeskrivelse' => 'Et billed af frisør, Hannah',
            'navn' => 'Hannah',
            'titel' => 'Frisør',
            'beskrivelse' => 'Hannah startede som elev hos Klippegården i juni 2021. 
                              Hun gik til svendeprøve i april 2024 og bliver færdigudlært 
                              i august 2024. Hannah er kendt for sin omhyggelige opmærksomhed 
                              på detaljer og sit store engagement i kundernes tilfredshed.'
        ),

        array(
            'billede' => 'Profilbillede_Sofie.webp',
            'billedbeskrivelse' => 'Et billed af frisørelev, Sofie',
            'navn' => 'Sofie',
            'titel' => 'Frisørelev',
            'beskrivelse' => 'Vores elev, Sofie, startede hos Klippegården i september 2023. 
                              Til november 2025 skal hun til sin svendeprøve. Sofie lærer 
                              de nyeste teknikker på skolen, hvilket giver hende mulighed for 
                              at bringe moderne metoder ind i salonen.'
        ),


    );

    foreach ($medarbejdere as $medarbejder) {
        echo '<div class="row bg-banner-color mt-5 employee-box">';
        echo '<div class="col-12 col-md-5 p-0 employee-image">';
        echo '<img class="img-fluid" src="images/' . $medarbejder['billede'] . '" alt="' . $medarbejder['billedbeskrivelse'] . '">';
        echo '</div>';
        echo '<div class="col-12 col-md p-4 d-flex flex-column">';
        echo '<h2 class="text-center">' . $medarbejder['navn'] . '</h2>';
        echo '<h5 class="text-center employee-title"><img class="curvey-line curvey-line--left" src="images/Curvey_line.svg" alt="Linje"/> ' . $medarbejder['titel'] . '<img class="curvey-line curvey-line--right" src="images/Curvey_line.svg" /></h5>';
        echo '<p class="employee-description flex-grow-1">' . $medarbejder['beskrivelse'] . '</p>';
        echo '<a href="#" class="btn btn-btn-color mt-3 employee-book-button" role="button">Book tid hos ' . $medarbejder['navn'] . '</a>';
        echo '</div>';
        echo '</div>';
    }
    ?>

    </div>
</main>

<?php include "includes/footer.php";?>

<?php include "includes/scripts.php";?>
</body>
</html>
