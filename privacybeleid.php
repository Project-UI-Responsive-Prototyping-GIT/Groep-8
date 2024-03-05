<?php
    include 'includes/functions.php';

    $metaData = [
        'pageauthor' => 'P. Staats',
        'pagetitle' => 'Privacybeleid'
    ];
    
    loadView('header', $metaData);
?>
<main id="main-pb">
    <section id="section-vg">
        <h2>Verzamelde gegevens</h2>
        <p>We verzamelen alleen de gegevens die u vrijwillig verstrekt via dit formulier, inclusief uw naam, telefoonnummer, e-mailadres, aantal personen, tijd en datum van de reservering.</p>
    </section>
    <section id="section-gvg">
        <h2>Gebruik van gegevens</h2>
        <p>De verzamelde gegevens worden gebruikt om uw reservering te verwerken en u te voorzien van onze diensten. We zullen uw gegevens niet delen met derden zonder uw toestemming.</p>
    </section>
    <section id="section-bv">
        <h2>Beveiliging</h2>
        <p>Wij nemen de nodige technische en organisatorische maatregelen om uw gegevens te beschermen tegen ongeoorloofde toegang, verlies, misbruik of wijziging.</p>
    </section>
    <section id="section-contact">
        <h2>Contact</h2>
        <p>Als u vragen heeft over ons privacybeleid, kunt u contact met ons opnemen via info@example.com.</p>
    </section>
</main>
<?php
    loadView('footer')
?>