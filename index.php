<?php
    include 'includes/functions.php';

    $metaData = [
        'pageauthor' => 'P. Staats',
        'pagetitle' => 'Ons menu'
    ];
    
    loadView('header', $metaData) 
?>
<main>
    <!-- hier komt de inhoud -->
</main>
<?php
    loadView('footer')
?>