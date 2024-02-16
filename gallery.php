<!DOCTYPE html>
<html lang="nl">
    <head>
    $metaData = [
        'pageauthor' => 'P. Staats',
        'pagetitle' => 'Ons menu'
    ];
    </head>
    <body>
        <header>
            <?php include 'layout/functions.php'; include 'layout/header.php';  ?>
        </header>
        <main>
        <section id="images">
        <img src="./images/gallery foto1.png">
        <img src="./images/gallery foto2.png">
        <img src="./images/gallery foto3.png">
        <img src="./images/gallery foto4.png">
        <img src="./images/gallery foto5.png">
        <img src="./images/gallery foto6.png">
        <img src="./images/gallery foto7.png">
        <img src="./images/gallery foto8.png">
        <img src="./images/gallery foto9.png">
        <img src="./images/gallery foto10.png">
        </section>
        </main>
    <?php loadView('footer') ?>
    </body>
</html>
