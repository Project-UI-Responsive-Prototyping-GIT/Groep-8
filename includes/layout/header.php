<?php $pages = ['index' => 'HOME', 'ourMenu' => 'MENU', 'aboutUs' => 'ABOUT', 'gallery' => 'GALLERY'] ?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Welkom bij Pizzadan - uw bestemming voor authentieke Italiaanse en Sardijnse smaken. Ontdek onze met zorg samengestelde gerechten, bereid met hoogwaardige ingrediënten uit Italië en lokale verse producten. Geniet van een culinaire ervaring in ons restaurant met heerlijke pizza's, pasta's, voorgerechten, desserts en meer. Bezoek ons vandaag nog voor een onvergetelijke smaakvolle reis naar Italië bij Pizzadan.">
        <meta name="author" content="<?php echo $metaData['pageauthor'] ?>">
        <meta name="keywords" content="Pizzadan, Italiaans restaurant, Sardijnse gerechten, pizza, pasta, voorgerechten, desserts, Italiaanse keuken, culinaire ervaring, verse ingrediënten, lokale leveranciers">
        <title><?php echo $metaData['pagetitle'] ?></title>
        <link rel="stylesheet" type="text/css" href="styles/reset.css">
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <script src="https://kit.fontawesome.com/c1efbad309.js" crossorigin="anonymous"></script>
        <script type="module" src="./scripts/app.js" defer></script>
    </head>
    <body>
        <header>
            <section id="header-main">
                <img src="images/logo/logo.png" alt="pizzaden logo">
                <nav>
                    <?php
                        foreach ($pages as $file => $name) {
                            echo "<a href=\"./$file.php\">$name</a>";
                        }
                    ?>
                </nav>
            </section>
            <section id="header-cart"> <!-- TODO: icon en tekst een anker -->
                    <section id="header-cart-text">
                        <p>&euro;<span id="header-cart-value">0.00</span></p>
                        <p><span id="header-cart-items">0</span> items</p>
                    </section>
                    <a href="#"> <!-- TODO: shoping cart page -->
                    <i class="fa-solid fa-basket-shopping fa-2xl"></i>
                </a>
            </section>
        </header>
    </body>