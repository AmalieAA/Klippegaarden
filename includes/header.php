<nav id="MainNav" role="navigation" class="navbar navbar-expand-lg">
    <div class="container-fluid container-xxl align-items-end">
        <a class="navbar-brand" href="index.php">
            <img src="images/Klippegården_logo.webp" alt="Klippegårdens logo" id="Logo">


        </a>
        <button class="navbar-toggler align-self-center border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav w-100 gap-4 me-4">
                <li class="nav-item flex-grow-1 d-none d-md-block"></li>

                <?php
                $current_page = basename($_SERVER['PHP_SELF']);

                $navigation_links = array(
                    'index.php' => 'Forside',
                    'om.php' => 'Om',
                    'behandlinger.php' => 'Behandlinger',
                    'index.php#Galleri' => 'Galleri',
                    'kontakt.php' => 'Kontakt',
                    '#' => 'Booking'
                );

                foreach ($navigation_links as $url => $text) {

                    $active_class = '';
                    if($current_page === $url) {
                        $active_class = 'active';
                    }
                    if ($url === 'behandlinger.php') {
                        echo '<li class="nav-item dropdown">';
                        echo '<a class="nav-link d-inline-block ' . $active_class . '" href="' . $url . '">' . $text . '</a>';
                        echo '<a class="nav-link p-0 ms-2 ms-md-0 dropdown-toggle d-inline-block" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>';
                        echo '<ul class="dropdown-menu border-0 shadow-sm bg-background-color">';

                        echo '<li><a class="dropdown-item" href="behandlinger.php#Klipninger">Klipninger</a></li>';
                        echo '<li><a class="dropdown-item" href="behandlinger.php#Farvning">Farvninger</a></li>';
                        echo '<li><a class="dropdown-item" href="behandlinger.php#Permanent">Permanent</a></li>';
                        echo '<li><a class="dropdown-item" href="behandlinger.php#KurBehandlinger">Kur/Behandlinger</a></li>';
                        echo '<li><a class="dropdown-item" href="behandlinger.php#Håropsætning">Håropsætning</a></li>';
                        echo '<li><a class="dropdown-item" href="behandlinger.php#BrynVipper">Bryn & Vipper</a></li>';

                        echo '</ul>';
                        echo '</li>';
                    } else {
                        echo '<li class="nav-item">';
                        echo '<a class="nav-link ' . $active_class . '" href="' . $url . '">' . $text . '</a>';
                        echo '</li>';
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
