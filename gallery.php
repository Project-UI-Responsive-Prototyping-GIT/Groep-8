<?php
    include 'includes/functions.php';

    $metaData = [
        'pageauthor' => 'P. Staats en S. Stikkelorum',
        'pagetitle' => 'HOME - Pizzaden'
    ];
    
    loadView('header', $metaData);

    include 'includes/layout/floating_button.php';
?>
<main class="main-container">
    <section id="gallery-main-section"></section>
</main>
<?php
    loadView('footer')
?>