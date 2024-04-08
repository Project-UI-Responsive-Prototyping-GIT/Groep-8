<?php
    include 'includes/functions.php';

    $metaData = [
        'pageauthor' => 'P. Staats en S. Stikkelorum',
        'pagetitle' => 'HOME - Pizzaden'
    ];
    
    loadView('header', $metaData);
?>
<main class="main-container">
    <section class="box box1">
    <h1 class="bold">Software Developer</h1>
    <img src="../images/Software Developer.jpg">
    <p class="vacature-tekst1">Wij zijn op zoek naar een getalenteerde en gepassioneerde softwareontwikkelaar om ons dynamische team te versterken. Als softwareontwikkelaar zul je betrokken zijn bij het volledige ontwikkelingsproces, van het conceptualiseren van ideeën tot het implementeren en onderhouden van softwaretoepassingen. Je zult samenwerken met ons team van ontwikkelaars, ontwerpers en projectmanagers om innovatieve oplossingen te creëren die voldoen aan de behoeften van onze klanten.</p>
    <p class="uren-per-week1">36-40 uur per week</p>
    <button class="button button1">Solliciteer nu!</button>

</section>
    <section class="box box2">
    <h2 class="bold">Keukenmedewerker</h2>
    <img src="../images/Software Developer.jpg">
    <p class="vacature-tekst2">Wij zijn op zoek naar een gemotiveerde en enthousiaste keukenmedewerker om ons team te versterken. Als keukenmedewerker zul je een essentiële rol spelen in het voorbereiden van ingrediënten, assisteren bij het maken van pizza's en het handhaven van de netheid en organisatie van de keuken. Je zult samenwerken met ons ervaren team om hoogwaardige gerechten te bereiden en een uitstekende eetervaring te bieden aan onze klanten.</p>
    <p class="uren-per-week2">36-40 uur per week</p>
    <button class="button button2">Solliciteer nu!</button>
    </section>
    <section class="box box3">
    <h3 class="bold">Serveerster</h3>
    <img src="../images/Software Developer.jpg">
    <p class="vacature-tekst3">Wij zijn op zoek naar een vriendelijke, energieke en klantgerichte serveerster om ons team te versterken. Als serveerster ben je het gezicht van ons restaurant en speel je een essentiële rol in het bieden van uitstekende klantenservice aan onze gasten. Je zult verantwoordelijk zijn voor het begroeten en bedienen van klanten, het opnemen van bestellingen en het zorgen voor een positieve eetervaring.</p>
    <p class="uren-per-week3">12-24 uur per week</p>
    <button class="button button3">Solliciteer nu!</button>
    </section>
    <section class="box box4">
    <h4 class="bold">Bezorger</h4>
    <img src="../images/Software Developer.jpg">
    <p class="vacature-tekst4">Wij zijn op zoek naar een betrouwbare en klantgerichte bezorger om ons bezorgteam te versterken. Als bezorger ben je verantwoordelijk voor het tijdig en veilig bezorgen van bestellingen aan onze klanten. Je zult een belangrijke rol spelen in het leveren van een uitstekende service en het behouden van tevreden klanten.</p>
    <p class="uren-per-week4">0-12 uur per week</p>
    <button class="button button4">Solliciteer nu!</button>
    </section>
</main>
<?php
    loadView('footer')
?>