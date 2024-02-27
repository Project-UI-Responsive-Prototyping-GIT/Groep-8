<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Welkom bij Pizzadan - uw bestemming voor authentieke Italiaanse en Sardijnse smaken. Ontdek onze met zorg samengestelde gerechten, bereid met hoogwaardige ingrediënten uit Italië en lokale verse producten. Geniet van een culinaire ervaring in ons restaurant met heerlijke pizza's, pasta's, voorgerechten, desserts en meer. Bezoek ons vandaag nog voor een onvergetelijke smaakvolle reis naar Italië bij Pizzadan.">
        <meta name="author" content="<?php echo $metaData['pageauthor'] ?>">
        <meta name="keywords" content="Pizzadan, Italiaans restaurant, Sardijnse gerechten, pizza, pasta, voorgerechten, desserts, Italiaanse keuken, culinaire ervaring, verse ingrediënten, lokale leveranciers">
        <title><?php echo $metaData['pagetitle'] ?></title>
        <link rel="stylesheet" type="text/css" href="styles/reset.css">`<!-- Reset browser default styles -->
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <script src="https://kit.fontawesome.com/c1efbad309.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <img src="./images/textLogo.png" alt="">
            <nav>
                <?php
                    $pages = ['index' => 'HOME', 'ourMenu' => 'OUR MENU', 'aboutUs' => 'ABOUT US', 'gallery' => 'GALLERY'];
                    foreach ($pages as $file => $name) {
                    echo "<a href=\"./$file.php\">$name</a>";
                    }
                ?>
            </nav>
        </header>