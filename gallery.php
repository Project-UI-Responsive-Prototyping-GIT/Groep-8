<?php
    include 'includes/functions.php';

    $metaData = [
        'pageauthor' => 'S. Stikkelorum',
        'pagetitle' => 'HOME'
    ];
    
    loadView('header', $metaData);

    include 'includes/layout/floating_button.php';
?>
<main id="gallery-main">
    <section id="gallery-images-grid">
        <img src="./images/gallery foto1.png" />
        <img src="./images/gallery foto2.png" />
        <img src="./images/gallery foto3.png" />
        <img src="./images/gallery foto4.png" />
        <img src="./images/gallery foto5.png" />
        <img src="./images/gallery foto6.png" />
        <img src="./images/gallery foto7.png" />
        <img src="./images/gallery foto8.png" />
        <img src="./images/gallery foto9.png" />
        <img src="./images/gallery foto10.png" />
    </section>
</main>
<?php
    loadView('footer')
?>
