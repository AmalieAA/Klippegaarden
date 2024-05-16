
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


<div id="ContactBannerImage" class="banner-image-container">
    <?php include "includes/header.php";?>
    <img class="img-fluid" src="images/Stemnings_billede1.webp" alt="Behandslingsside coverbillede">
</div>

<main class="container-fluid">

    <h2 class="text-center my-5">
        Vores behandlinger
    </h2>

<div id="TreatmentBoxes">

    <?php
    $Behandlinger = array(
        // Klipninger
        array(
            'Titel' => 'Klipninger',
            'Id' => 'Klipninger',
            'PrisGrupper' => array(
                array(
                    'GruppeNavn' => 'Dame',
                    'Priser' => array(
                        array(
                            'navn' => 'Dameklip & let føn',
                            'pris' => 425
                        ),
                        array(
                            'navn' => 'Dameklip, vask & let føn',
                            'pris' => 505
                        )
                    )
                ),
                array(
                    'GruppeNavn' => 'Børn',
                    'Priser' => array(
                        array(
                            'navn' => 'Børneklip & føn',
                            'note' => '(0-10 år)',
                            'pris' => 295
                        ),
                        array(
                            'navn' => 'Ungdomsklip & føn',
                            'note' => '(11-14 år)',
                            'pris' => 330
                        )
                    )
                ),
                array(
                    'GruppeNavn' => 'Herre',
                    'Priser' => array(
                        array(
                            'navn' => 'Herreklip & let føn',
                            'pris' => 355
                        ),
                        array(
                            'navn' => 'Herreklip, vask & let føn',
                            'pris' => 415
                        ),
                        array(
                            'navn' => 'Skæg',
                            'pris' => 150
                        )
                    )
                ),
                array(
                    'GruppeNavn' => 'Øvrige',
                    'Priser' => array(
                        array(
                            'navn' => 'Vask og føn',
                            'pris' => 300
                        ),
                        array(
                            'navn' => 'Pandehår',
                            'pris' => 75
                        )
                    )
                ),
            ),
        ),
        // Farvninger
        array(
            'Titel' => 'Farvning',
            'Id' => 'Farvning',
            'PrisGrupper' => array(
                array(
                    'GruppeNavn' => '',
                    'Priser' => array(
                        array(
                            'navn' => 'Bundfarve (1 farve) fra',
                            'pris' => 545
                        ),
                        array(
                            'navn' => '2 farver fra',
                            'pris' => 660
                        )
                    )
                ),
                array(
                    'GruppeNavn' => '',
                    'Priser' => array(
                        array(
                            'navn' => 'Babylights fra',
                            'pris' => 1400
                        ),
                        array(
                            'navn' => 'Babylights inkl. Toning fra',
                            'pris' => 1780
                        )
                    )
                ),
                array(
                    'GruppeNavn' => '',
                    'Priser' => array(
                        array(
                            'navn' => 'Handpaint fra',
                            'pris' => 750
                        ),
                        array(
                            'navn' => 'Balayage fra',
                            'pris' => 1300
                        ),
                        array(
                            'navn' => 'Balayage inkl. Toning fra',
                            'pris' => 1680
                        )
                    )
                ),

                array(
                    'GruppeNavn' => '',
                    'Priser' => array(
                        array(
                            'navn' => 'Kampstrejf',
                            'note' => '(Kort hår)',
                            'pris' => 435
                        ),
                        array(
                            'navn' => 'Striber med hætte',
                            'note' => '(Kort hår)',
                            'pris' => 570
                        ),

                    )
                ),
                array(
                    'GruppeNavn' => '',
                    'Priser' => array(
                        array(
                            'navn' => 'Toning fra',
                            'pris' => 475
                        ),

                    )
                ),


                array(
                    'GruppeNavn' => '',
                    'Priser' => array(
                        array(
                            'navn' => 'Farveafrensning 
                                       eller helafblegning 
                                       inkl. Keratinkur fra',
                            'pris' => 800
                        ),

                    )
                ),

                array(
                    'GruppeNavn' => '',
                    'Priser' => array(
                        array(
                            'navn' => 'Striber',
                            'note' => '(1 farve)',
                            'pris' => 710
                        ),

                        array(
                            'navn' => 'Striber',
                            'note' => '(2 farver)',
                            'pris' => 780
                        ),
                    )
                ),

            ),
        ),
        // Permanent
        array(
            'Titel' => 'Permanent',
            'Id' => 'Permanent',
            'PrisGrupper' => array(
                array(
                    'GruppeNavn' => '',
                    'Priser' => array(
                        array(
                            'navn' => 'Permanent m. klip & føn',
                            'pris' => 1000
                        ),
                        array(
                            'navn' => 'Permanent uden klip',
                            'pris' => 820
                        )
                    )
                ),
                array(
                    'GruppeNavn' => '',
                    'Priser' => array(
                        array(
                            'navn' => 'Permanent top m. klip & føn',
                            'pris' => 900
                        ),
                        array(
                            'navn' => 'Permanent top uden klip',
                            'pris' => 750
                        )
                    )
                )
            ),
        ),
        //Kur/Behandlinger
        array(
            'Titel' => 'Kur/Behandlinger',
            'Id' => 'KurBehandlinger',
            'PrisGrupper' => array(
                array(
                    'GruppeNavn' => '',
                    'Priser' => array(
                        array(
                            'navn' => 'Bond RX stand alone',
                            'pris' => 450
                        ),
                        array(
                            'navn' => 'Bond RX 
                                       i forbindelse m. farve',
                            'pris' => 300
                        )
                    )
                ),
                array(
                    'GruppeNavn' => '',
                    'Priser' => array(
                        array(
                            'navn' => 'Hårkur m. massage',
                            'pris' => 300
                        ),
                        array(
                            'navn' => 'Hårkur m. massage 
                                       i forbindelse 
                                       m. farve eller klip',
                            'pris' => 150
                        )
                    )
                ),
                array(
                    'GruppeNavn' => '',
                    'Priser' => array(
                        array(
                            'navn' => 'Detox treatment m. 
                                       massage',
                            'pris' => 350
                        ),
                        array(
                            'navn' => 'Detox treatment m. 
                                       massage i forbindelse 
                                       med farve eller klip',
                            'pris' => 200
                        ),
                    )
                ),

                array(
                    'GruppeNavn' => '',
                    'Priser' => array(
                        array(
                            'navn' => 'OLAPLEX stand alone',
                            'pris' => 450
                        ),
                        array(
                            'navn' => 'OLAPLEX i forbindelse m.
                                       farve ',
                            'pris' => 300
                        ),

                    )
                ),
                array(
                    'GruppeNavn' => '',
                    'Priser' => array(
                        array(
                            'navn' => 'Keratin ampul kur',
                            'pris' => 430
                        ),

                        array(
                            'navn' => 'Keratin ampul kur 
                                       i forbindelse
                                       m. farve eller klip',
                            'pris' => 260
                        ),
                    )
                )
            ),
        ),
        //Håropsætning
        array(
            'Titel' => 'Håropsætning',
            'Id' => 'Håropsætning',
            'PrisGrupper' => array(
                array(
                    'GruppeNavn' => '',
                    'Priser' => array(
                        array(
                            'navn' => 'Opsætning af langt hår',
                            'note' => 'Tid: 30 min.',
                            'pris' => 450
                        )
                    )
                ),
                array(
                    'GruppeNavn' => '',
                    'Priser' => array(
                        array(
                            'navn' => 'Brudeopsætning
                                       inkl. prøveopsætning',
                            'pris' => 1200
                        )
                    )
                )
            ),
        ),
        //Bryn & Vipper
        array(
            'Titel' => 'Bryn & Vipper',
            'Id' => 'BrynVipper',
            'PrisGrupper' => array(
                array(
                    'GruppeNavn' => '',
                    'Priser' => array(
                        array(
                            'navn' => 'Ret af bryn',
                            'pris' => 105
                        ),
                        array(
                            'navn' => 'Ret af bryn',
                            'pris' => 190
                        )
                    )
                ),
                array(
                    'GruppeNavn' => '',
                    'Priser' => array(
                        array(
                            'navn' => 'Ret & farve af 
                                       bryn & vipper',
                            'pris' => 240
                        ),
                        array(
                            'navn' => 'Farve af vipper',
                            'pris' => 150
                        )
                    )
                )
            ),
        ),


    );

    foreach ($Behandlinger as $Behandling) {

        echo '<div id="' . $Behandling["Id"] . '"  class="row mt-5 treatment-box p-3 p-md-5">';
        echo '<div class="col-12">';
        echo '<h2 class="text-center treatment-title">';
        echo '<img class="curvey-line curvey-line--left" src="images/Curvey_line.svg" />';
        echo $Behandling["Titel"];
        echo '<img class="curvey-line curvey-line--right" src="images/Curvey_line.svg" />';
        echo '</h2>';
        echo '</div>';
        foreach ($Behandling["PrisGrupper"] as $prisGruppe) {
            echo '<div class="col-12 col-md-6 my-3">';
            if(!empty($prisGruppe["GruppeNavn"])) {
                echo '<h3>' . $prisGruppe["GruppeNavn"] . '</h3>';
            }
            foreach ($prisGruppe["Priser"] as $pris) {
                echo '<div class="row">';
                echo '<div class="col">';
                echo $pris["navn"];
                if(!empty($pris["note"])) {
                    echo '<span class="treatment-pris-note ms-1">' . $pris["note"] . '</span>';
                }
                echo '</div>';
                echo '<div class="col-auto d-flex align-items-end">..........Kr.' . $pris["pris"] . ',-</div>';
                echo '</div>';
            }
            echo '</div>';
            }
        echo '<div class="col-12"><a href="#" class="btn btn-btn-color mt-3 treatment-book-button d-block d-md-inline-block" role="button">Book tid</a></div>';
        echo '</div>';
    }
    ?>
</div>

    <h2 class="text-center">
        Produkter i salonen
    </h2>
</main>
<?php include "includes/footer.php";?>

<?php include "includes/scripts.php";?>
</body>
</html>
