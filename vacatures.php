<?php
    include 'includes/functions.php';

    $metaData = [
        'pageauthor' => 'P. Staats en S. Stikkelorum',
        'pagetitle' => 'HOME - Pizzaden'
    ];
    
    loadView('header', $metaData);
?>
<main class="main-container">
    <!-- TODO: maak gebruik van css-grid -->
</main>
<?php
    loadView('footer')
?>